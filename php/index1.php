
 <?php
    // $utilisateur = "admin";
    // $motdepasse = "admin";
    // $bdd = "task";
    // $serveur = "mysql:host=mysql;dbname=$bdd";

    // $connexion = new PDO($serveur, $utilisateur, $motdepasse);
    // $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Vous êtes connecté à la bdd";

    // if (isset($_POST['taskSubmit']) && !empty($_POST['task'])) {
    //     $task = $_POST['task'];
    //     $sql = "INSERT INTO `tasks` (`task_name`) VALUES ('$task')";
    //     $connexion->query($sql);
    // }



    // $sqlRead = "SELECT * FROM `tasks`";
    // $request = $connexion->query($sqlRead);
    // $data = $request->fetchAll(PDO::FETCH_ASSOC);

    // foreach ($data as $value) {
    //     echo '<br>' . $value['task_name'] . ' 
    //         <form method="POST">
    //         <input type="hidden" name="taskId" value="' . $value['id_task'] . '">
    //         <input type="submit" value="Supprimer" name="deleteTask">
    //         </form><br>';
    // }

    // if (isset($_POST['deleteTask'])) {
    //     $taskId = $_POST['taskId'];
    //     $sqlDelete = "DELETE FROM `tasks` WHERE `id_task` = :deleteTask";
    //     $requeteDelete = $connexion->prepare($sqlDelete);
    //     $requeteDelete->bindParam(':deleteTask', $taskId, PDO::PARAM_INT);

    //     if ($requeteDelete->execute()) {
    //         echo "Tâche suprimmée.";
            
    //     } else {
    //         echo "Erreur lors de la suppression de la tâche.";
    //     }
    // }

    ?>
