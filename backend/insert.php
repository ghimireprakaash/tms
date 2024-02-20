<?php
    // configuring database connection
    require('config.php');

    //fetching data when submit button is clicked
    if(isset($_POST['submit'])){
        $title = $_POST['title'];
        $descp = $_POST['descp'];

        $insert_query = "INSERT INTO tasks(title, descp) VALUES('$title', '$descp')";

        $exec_insert = mysqli_query($conn, $insert_query);

        if($exec_insert){
            echo "<script>alert('Data Inserted Successfully.')</script>";
            header('Location: ../index.php');
        } else{
            header('Location: ../error.php');
        }
    }
?>