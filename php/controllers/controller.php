<?php 

require_once "models/BddConnect.php";

class Controller {
    function index(){
        require_once "views/base.php";
    }

    function affichageTache(){
        $conn = new BddConnect;
        $conn->readAll();
    }

    function affichageForm(){
        require "views/form.php";
    }

    function addTache(){
        $conn = new BddConnect;
        $conn->insertBdd($_POST['task']);
    }

    function deleteTache(){
        $conn = new BddConnect;
        $conn->supprFromBdd($_POST['taskId']);
        echo "Données supprimmées";
    }
}
?>