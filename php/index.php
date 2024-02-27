<?php 

require_once "controllers/Controller.php";

$controller = new Controller;

$controller->index();


if (isset($_GET['page']) && $_GET['page'] == "lecture"){
    $controller->affichageTache();
}

if (isset($_GET['page']) && $_GET['page'] == "formulaire"){
    $controller->affichageForm();
}

if (isset($_POST['taskSubmit']) && !empty($_POST['task'])){
    $controller->addTache();
}

if (isset($_POST['deleteTask'])) {
    $controller->deleteTache();
}
?>