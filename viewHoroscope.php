<?php
    session_start();

     if ($_SERVER['REQUEST_METHOD'] == 'GET'){
        if (isset($_SESSION["myHoroscope"])){
            echo $_SESSION["myHoroscope"];
            echo "";
        }
        else{
            echo 
            "";
        }
    }
    
?>
