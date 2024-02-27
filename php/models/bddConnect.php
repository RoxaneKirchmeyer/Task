<?php

class BddConnect{
    public $connexion;
    public function __construct(){
        $utilisateur = "admin";
        $motdepasse = "admin";
        $bdd = "task";
        $serveur = "mysql:host=mysql;dbname=$bdd";
        $this->connexion = new PDO($serveur, $utilisateur, $motdepasse);
        $this->connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "vous êtes connecté à la bdd";
    }

    function readAll(){
        $sqlRead = "SELECT * FROM `tasks`";
        $request = $this->connexion->query($sqlRead);
        $data =  $request->fetchAll(PDO::FETCH_ASSOC);

        foreach ($data as $value) {
                echo '<br>' . $value['task_name'] . ' 
                    <form method="POST">
                    <input type="hidden" name="taskId" value="' . $value['id_task'] . '">
                    <input type="submit" value="Supprimer" name="deleteTask">
                    </form><br>';
            }
    }

    function insertBdd($task){
        $sql = "INSERT INTO `tasks` (`task_name`) VALUES ('$task')";
        $this->connexion->query($sql);
        echo "Data bien ajoutée à la bdd";
    }

    function supprFromBdd($taskId){
        $sqlDelete = "DELETE FROM `tasks` WHERE `id_task` = :deleteTask";
        $requeteDelete = $this->connexion->prepare($sqlDelete);
        $requeteDelete->bindParam(':deleteTask', $taskId);
        $requeteDelete->execute();
    }
}
