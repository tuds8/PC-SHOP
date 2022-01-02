<?php

    session_start();
    require("connection.php");

    $email_or_username = $_POST['email_or_username'];
    $password = $_POST['parola'];

    $search = "SELECT * from conturi where nume = '$email_or_username' ";
    $result = mysqli_query($con, $search);
    $username = mysqli_num_rows($result);
    if($username != 0)
    {
        $row = mysqli_fetch_assoc($result);
        $id = $row['id'];
    }

    $search = "SELECT * from conturi where mail = '$email_or_username' ";
    $result = mysqli_query($con, $search);
    $email = mysqli_num_rows($result);
    if($email != 0)
    {
        $row = mysqli_fetch_assoc($result);
        $id = $row['id'];
    }

    
    
    if($username != 0 || $email != 0)
    {
        
        $search = "SELECT * from conturi where parola = '$password' ";
        $result = mysqli_query($con, $search);
        $parola = mysqli_num_rows($result);

        if($parola != 0)
        {
            
            $_SESSION['user'] = $id;
            
            $search = "SELECT * from conturi where id = '$id' ";
            $result = mysqli_query($con, $search);
            $row = mysqli_fetch_assoc($result);

            $_SESSION['nume'] = $row['nume'];
            
            echo "
            <script>
                window.location.replace('Catalog.php');
            </script>
            ";
        }
        else
        {
            echo "
            <script>
                alert('Parola ta este gresita');
            </script>
            ";
        }
    }
    else
    {
        echo "
        <script>
            alert('Usernameul tau sau mailul sunt gresite');
        </script>
        ";
    }
    echo "
    <script>
        window.location.replace('login.php');
    </script>
    ";
?>