<?php
    session_start();
    if(isset($_SESSION['user']))
    {
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
            window.location.replace('login.php');
        </script>
        ";
    }
?>