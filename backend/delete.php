<?php
    require_once("config.php");

    if(isset($_GET["id"])) {
        $task_id = $_GET['id'];

        $delete_query = "DELETE FROM tasks WHERE id = '$task_id'";
        $exec_delete = mysqli_query($conn, $delete_query);

        if($exec_delete){
            echo "Data deleted successfully.";
            header("Location: ../index.php");
        }
    }
?>