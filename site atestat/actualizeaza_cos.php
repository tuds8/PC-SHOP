<?php
    session_start();
    require("connection.php");

    if(isset($_GET['ajax']))
    {
        if($_GET['ajax'] == 'cant')
        {
            
        $id = $_GET['id'];
        $cant = $_GET['cant'];


        $user_id = $_SESSION['user'];
        $update = "UPDATE cos set cantitate = '$cant' where id = '$id' and user_id = '$user_id' ";
        mysqli_query($con, $update);
        
        }
        if($_GET['ajax'] == 'delete')
        {
            $id = $_GET['id'];

            $delete = "DELETE from cos where id = '$id' ";
            mysqli_query($con, $delete);
        }

    }
?>