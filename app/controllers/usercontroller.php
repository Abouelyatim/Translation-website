<?php
namespace PHPMVC\controllers;
use PDO;
use PHPMVC\lib\FileUpload;
use PHPMVC\Model\UserModel;
use PHPMVC\LIB\Helper;
class UserController extends AbstractController{
    
    use Helper;
    public function defaultAction()
    {
        $user=UserModel::getAll();
        foreach ($user as $us){
            var_dump($us);
        }
        $this->_view();
    }

    public function addAction()
    {

        if(isset($_POST['submit']))
        {
            $user=new UserModel();

            $user->nom=$_POST['nom'];
            $user->prenom=$_POST['prename'];
            $user->mail=$_POST['mail'];
            $user->password=$_POST['psw'];
            $user->tel=$_POST['tel'];
            $user->block=0;
            if($user->save()){
                $_SESSION['message']='registred successfully';
                $this->redirect('/web/public/index');

            }


        }
        $this->_view();

    }

    public function connexionAction()
    {
        session_start();
        $servername = "localhost";
        $username = "root";
        $password = "";
        $conn = new \PDO(
            'mysql:hostname=' . DATABASE_HOST_NAME .';port='.DATABASE_PORT_NUMBER. ';dbname=' . DATABASE_DB_NAME,
            DATABASE_USER_NAME, DATABASE_PASSWORD , array(
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_WARNING,
                \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
            )
        );

        if(isset($_POST['submit1']))
        {


            $stmt = $conn->prepare("select * from `client` where `mail`=:email and `password`=:password");
            $stmt->bindParam('email', $_POST['mail'], PDO::PARAM_STR);
            $stmt->bindValue('password', $_POST['psw'], PDO::PARAM_STR);
            $stmt->execute();

            $count = $stmt->rowCount();

            $row   = $stmt->fetch(PDO::FETCH_ASSOC);
            if($count == 1 && !empty($row) && $row['block']==0) {

                $_SESSION['sess_user_id']   = $row['id'];
                $_SESSION['sess_user_name'] = $row['nom'];
                $_SESSION['sess_prenom'] = $row['prenom'];
                $_SESSION['sess_email'] = $row['mail'];
                $_SESSION['sess_tel'] = $row['tel'];
                $_SESSION['sess_errormsg']="";
                //var_dump($_SESSION);
                //$this->redirect('/web/public/index/login');
                $this->redirect('/web/public/index/login');
               // header('location:index.php');


            } else {

                $this->redirect('/web/public/index');
            }
        }





        $this->_view();
    }


    public function modifAction()
    {session_start();

            $id = $_SESSION['sess_user_id'];


            $servername = "localhost";
            $username = "root";
            $password = "";

            $conn = new \PDO(
                'mysql:hostname=' . DATABASE_HOST_NAME . ';port=' . DATABASE_PORT_NUMBER . ';dbname=' . DATABASE_DB_NAME,
                DATABASE_USER_NAME, DATABASE_PASSWORD, array(
                    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_WARNING,
                    \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
                )
         );
        if (isset($_POST['submit5'])) {

            $stmt = $conn->prepare("UPDATE `client` SET `nom`=:nom,`prenom`=:prenom,`password`=:password,`tel`=:tel,`mail`=:email WHERE `id`=:id");
            $stmt->bindParam('email', $_POST['mail'], PDO::PARAM_STR);
            $stmt->bindValue('password', $_POST['psw'], PDO::PARAM_STR);
            $stmt->bindParam('nom', $_POST['nom'], PDO::PARAM_STR);
            $stmt->bindValue('prenom', $_POST['prename'], PDO::PARAM_STR);
            $stmt->bindValue('tel', $_POST['tel'], PDO::PARAM_INT);
            $stmt->bindValue('id', $id, PDO::PARAM_INT);
            $stmt->execute();






            $this->redirect('/web/public/index/login');

        }
        $this->_view();
    }


    public function listdemAction()
    {
        session_start();
        $id = $_SESSION['sess_user_id'];

        $servername = "localhost";
        $username = "root";
        $password = "";
        $conn = new \PDO(
            'mysql:hostname=' . DATABASE_HOST_NAME .';port='.DATABASE_PORT_NUMBER. ';dbname=' . DATABASE_DB_NAME,
            DATABASE_USER_NAME, DATABASE_PASSWORD , array(
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_WARNING,
                \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
            )
        );
        $stmt = $conn->prepare("SELECT `nom`,`prenom`,`mail`,`langorg`,`landsource`,`fichier`,`etat`,`id`,`tradid`,`date`,`type`,`tradid`,`price`,`bon`,`filetrad` FROM `demande` where cliantid =$id");
        $stmt->execute();
        $result2=$stmt->fetchAll();
        $this->_data['demande']=$result2;

        $this->_view();
    }

    public function refuserAction()
    {
        $id=$this->_params[0];
        $etat=$this->_params[1];


        $servername = "localhost";
        $username = "root";
        $password = "";
        $conn = new \PDO(
            'mysql:hostname=' . DATABASE_HOST_NAME .';port='.DATABASE_PORT_NUMBER. ';dbname=' . DATABASE_DB_NAME,
            DATABASE_USER_NAME, DATABASE_PASSWORD , array(
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_WARNING,
                \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
            )
        );

        if($etat!='encour' && $etat!='unacceptetrad' && $etat!='accepteadmin' && $etat!='terminer' ){
            $stmt = $conn->prepare("UPDATE `demande` SET `etat` = 'unacceptuser' WHERE `demande`.`id` = $id");
            $stmt->execute();
        }


        $this->redirect('/web/public/user/listdem');
    }

    public function accepterAction()
    {
        $id=$this->_params[0];
        $etat=$this->_params[1];

        $servername = "localhost";
        $username = "root";
        $password = "";
        $conn = new \PDO(
            'mysql:hostname=' . DATABASE_HOST_NAME .';port='.DATABASE_PORT_NUMBER. ';dbname=' . DATABASE_DB_NAME,
            DATABASE_USER_NAME, DATABASE_PASSWORD , array(
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_WARNING,
                \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
            )
        );



        if(isset($_POST['submit9']))
        {
            $file=(new FileUpload($_FILES['File'],$id))->upload();
            $fichier=$file->getFileName();
            $etatt="acceptuser";

            if($etat=='acceptetrad'  ){
                $stmt = $conn->prepare("UPDATE `demande` SET `etat` =:etat,`bon` =:bon WHERE `id` = :id");
                $stmt->bindParam('id', $id, PDO::PARAM_INT);
                $stmt->bindParam('bon', $fichier, PDO::PARAM_STR);
                $stmt->bindParam('etat', $etatt, PDO::PARAM_STR);

                $stmt->execute();
                $stmt->execute();
                $stmt->execute();
                $stmt->execute();
                $stmt->execute();
            }
            $this->redirect('/web/public/user/listdem');
        }


        $this->_view();

    }


}
    


