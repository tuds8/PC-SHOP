<?php
    session_start();
    session_destroy();

    echo "
    <script>
        window.location.replace('Home.php');
    </script>
    
    ";
?>