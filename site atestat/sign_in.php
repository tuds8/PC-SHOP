<?php
    $username = $_POST['nume'];
    $email = $_POST['email'];
    $password = $_POST['parola'];

    require('connection.php');

    // verific daca acelasi username nu apare in baza de date
    $search = "SELECT * from conturi where nume = '$username' ";
    $result = mysqli_query($con, $search);
    $valid = mysqli_num_rows($result);
    
    if($valid != 0)
    {
        // username-ul se repeta, trimit eroare catre user
        echo "<script>
        
        alert('Numele tau e folosit deja');
        </script>";
    }
    else{

    // verific daca acelasi mail nu apare in baza de date
    $search = "SELECT * from conturi where mail = '$email' ";
    $result = mysqli_query($con, $search);
    $valid = mysqli_num_rows($result);
    
    if($valid != 0)
    {

        // mail-ul se repeta, trimit eroare catre user
        echo "<script>
        
        alert('Mailul tau e folosit deja');
        </script>";
    }
    else{
    
    $insert = "INSERT INTO conturi(id, nume, mail, parola) VALUES ('', '$username', '$email', '$password')";
    mysqli_query($con, $insert);
        
    }
    }   
    echo "<script>
    window.location.replace('login.php');
    </script>
    ";
?>