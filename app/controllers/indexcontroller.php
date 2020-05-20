<?php
namespace PHPMVC\Controllers;
use PDO;
use PHPMVC\lib\FileUpload;
use PHPMVC\LIB\Helper;
class IndexController extends AbstractController{
    use Helper;
    public function defaultAction(){

        if(isset($_SESSION)){
           // var_dump($_SESSION);
            $_SESSION['sess_user_id']   = "";
            $_SESSION['sess_user_name'] = "";
            $_SESSION['sess_prenom'] = "";
            $_SESSION['sess_email'] = "";
            $_SESSION['sess_errormsg']="";
        }

        $this->_view();
    }


    public function loginAction(){

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

        $stmt = $conn->prepare("SELECT `id`,`nom`,`prenom`,`langues` FROM `traducteur`");
        $stmt->execute();
        $result=$stmt->fetchAll();
        foreach ($result as $row)
        {
            $this->_data[]=$row;
        }


        if (isset($_POST['submit98'])) {



            $stmt = $conn->prepare("SELECT `nbddemande` FROM `client` where `id`=$id");
            $stmt->execute();
            $count=$stmt->fetch();
          //  var_dump((int)$count[0]+1);


            $stmt = $conn->prepare("UPDATE `client` SET `nbddemande`=:nbddemande WHERE `id`=:id");
            $stmt->bindValue('nbddemande',(int)$count[0]+1 , PDO::PARAM_INT);
            $stmt->bindValue('id',$id , PDO::PARAM_INT);
            $stmt->execute();


            $stmt = $conn->prepare("INSERT INTO  `demande` (`nom`, `prenom`, `mail`, `tel`, `adresse`, `langorg`, `landsource`, `typetrad`, `assermanter`, `fichier`, `etat`, `cliantid`,	`tradid`,	`date`) VALUES (?,?,?,?, ?, ?, ?,?,?, ?, ?, ?, ?,?)");

            $nom=$_POST['nom'];
            $prenom=$_POST['prename'];
            $mail=$_SESSION['sess_email'];
            $tel= $_POST['tel'];
            $adresse= $_POST['adresse'];

            $langorg=$_POST['langorigine'];
            $landsource=$_POST['langsource'];

            $typetrad= $_POST['typetrad'];
            $assermanter=$_POST['typetradeur'];
            $traducteur=$_POST['traducteur'];
            $date=date("Y-m-d");

            $file=(new FileUpload($_FILES['File'],$id))->upload();
            $fichier=$file->getFileName();
           // var_dump($fichier);
            $etat='encour';
            $cliantid=$id;
            $stmt->execute(array($nom,$prenom,$mail,$tel,$adresse,$langorg,$landsource,$typetrad,$assermanter,$fichier,$etat,$cliantid,$traducteur,$date));



            //$this->redirect('/web/public/index/login');

        }








        $this->_view();
    }

}