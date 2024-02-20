<?php
    require('config.php');

    $select_query = "SELECT * FROM tasks";

    $exec_select = mysqli_query($conn, $select_query);
?>