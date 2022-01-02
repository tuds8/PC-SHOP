<?php
    session_start();
    $id = $_GET['id'];
    
    require("connection.php");

    $user_id = $_SESSION['user'];
    $search = "SELECT * from cos where produs_id = '$id' and user_id = '$user_id' ";
    $result = mysqli_query($con, $search);
    $num = mysqli_num_rows($result);
    $row = mysqli_fetch_assoc($result);

    if($num == 0)
    {
    
    
    
    $search = "SELECT * from produse where id = '$id' ";
    $result = mysqli_query($con, $search);
    $row = mysqli_fetch_assoc($result);

    $nume = $row['nume'];
    $pret = $row['pret'];
    $poza = $row['poza'];

    $user_id = $_SESSION['user'];

    echo $user_id;
    
    $insert = "INSERT into cos(id, user_id, produs_id, nume, poza, pret, cantitate) values ('', '$user_id', '$id', '$nume', '$poza', '$pret', '1')";
    mysqli_query($con, $insert);
    }
    else
    {
        $id = $row['id'];
        $update = "UPDATE cos set cantitate = cantitate + 1 where id = '$id' ";
        mysqli_query($con, $update);
    }

    echo "
    <script>
        window.location.replace('Cos.php');
    </script>
    ";
?>