<?php
    session_start();

    parse_str(file_get_contents("php://input"), $_PUT);
    include "./checkHoroscope.php";
    
    if ($_SERVER['REQUEST_METHOD'] == 'PUT'){
        $month = substr($_PUT["birthDate"], 2, 2);
        $day = substr($_PUT["birthDate"], 4, 2);
        
        
        if(isset($_SESSION["myHoroscope"])){
            $_SESSION["myHoroscope"] = checkHoroscope($month, $day);
            echo "Update: True</br>";
        }
        else{
            echo "Update: False</br>";
        }
        
    }
?>