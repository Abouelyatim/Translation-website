<?php


namespace PHPMVC\controllers;

use PDO;
use PHPMVC\lib\FileUpload;
use PHPMVC\Model\TraducteurModel;
use PHPMVC\Model\UserModel;
use PHPMVC\LIB\Helper;
class TraducteurController extends AbstractController
{

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
        if(isset($_POST['submit10']))
        {
            $user=new TraducteurModel();

            $user->nom=$_POST['nom'];
            $user->prenom=$_POST['prename'];
            $user->password=$_POST['psw'];
            $user->mail=$_POST['mail'];
            $user->tel=$_POST['tel'];
            $user->fax=$_POST['fax'];
            $user->adresse=$_POST['adresse'];
            $user->commune=$_POST['commune'];
            $user->wilaya=$_POST['wilaya'];
            $user->langues=$_POST['langues'];
            if($user->save()){
                $_SESSION['message']='registred successfully';
                $this->redirect('/web/public/index');

            }


        }
        $this->_view();

    }
    public function loginAction()
    {
        $this->_view();
    }

    public function listAction()
    {
        session_start();
        //$id = $_SESSION['sess_user_id'];
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

        $stmt = $conn->prepare("SELECT `id`,`nom`,`prenom`,`langues` FROM `traducteur`");
        $stmt->execute();
        $result=$stmt->fetchAll();
        foreach ($result as $row)
        {
            var_dump($row[0]."--".$row[1]."--".$row[2]."--".$row[3]);
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
        if(isset($_POST['submit12']))
        {


            $stmt = $conn->prepare("select * from `traducteur` where `mail`=:email and `password`=:password");
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
                $_SESSION['sess_langues'] = $row['langues'];
                $_SESSION['sess_errormsg']="";
                var_dump($_SESSION);
                //$this->redirect('/web/public/index/login');
                $this->redirect('/web/public/traducteur/login');
                // header('location:index.php');


            } else {

                $this->redirect('/web/public/index');
            }
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
        $stmt = $conn->prepare("SELECT `nom`,`prenom`,`mail`,`langorg`,`landsource`,`fichier`,`etat`,`id`,`cliantid`,`date`,`type`,`tradid` FROM `demande` where tradid=$id");
        $stmt->execute();
        $result2=$stmt->fetchAll();
        $this->_data['demande']=$result2;

        if(isset($_POST['submit1077']))
        {
            $iddem=$this->_params[0];
            $etat=$this->_params[1];

            if($etat=='encour' ){
                $prix=$_POST['prix'];

                $stmt = $conn->prepare("UPDATE `demande` SET `etat` =:etat ,`price`=:prix WHERE `id` = :id");
                $stmt->bindValue('prix',$prix, PDO::PARAM_INT);
                $stmt->bindValue('id',$iddem, PDO::PARAM_INT);
                $stmt->bindValue('etat','acceptetrad', PDO::PARAM_STR);

                $stmt->execute();
                $this->redirect('/web/public/traducteur/listdem');
            }


        }

        $this->_view();



    }

    public function refuserAction()
    {

        $id=$this->_params[0];


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

        $stmt = $conn->prepare("UPDATE `demande` SET `etat` = 'unacceptetrad' WHERE `demande`.`id` = $id");
          $stmt->execute();
        $this->redirect('/web/public/traducteur/listdem');


    }


    public function terminerAction()
    {

        $id=$this->_params[0];


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
            $etatt="terminer";


                $stmt = $conn->prepare("UPDATE `demande` SET `etat` =:etat,`filetrad` =:filetrad WHERE `id` = :id");
                $stmt->bindParam('id', $id, PDO::PARAM_INT);
                $stmt->bindParam('filetrad', $fichier, PDO::PARAM_STR);
                $stmt->bindParam('etat', $etatt, PDO::PARAM_STR);



                $stmt->execute();

            $this->redirect('/web/public/traducteur/listdem');
        }


        $this->_view();







    }




}