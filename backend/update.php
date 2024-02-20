<?php
    require_once("config.php");

    
    if (isset($_GET["id"])) {
        $id = $_GET["id"];

        // Fetching data with the help of id
        $select_query = "SELECT * FROM tasks WHERE id = $id";
        $exec_select = mysqli_query($conn, $select_query);

        $select_row = $exec_select->fetch_assoc();

        $old_title = $select_row["title"];
        $old_descp = $select_row["descp"];  
    }

    

    // now updating the fields
    if (isset($_POST["submit"])) {
        $id = $_POST['task_id'];
        $update_title = $_POST['title'];
        $update_descp = $_POST['descp'];

        $update_query = "UPDATE tasks SET title = '$update_title', descp = '$update_descp' WHERE id = '$id'";

        $exec_update = mysqli_query($conn, $update_query);

        if($exec_update){
            echo "<script>alert('Fields Updated.')</script>";
            header('Location: ../index.php');
        }
    }
?>