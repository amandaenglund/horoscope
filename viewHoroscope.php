<!--
sidan ska bara gå att begära via GET, den ska kolla om ett horoskop finns sparat i $_SESSION och i 
så fall skriva ut det i output. Annars ska sidan inte skriva ut någonting.
-->

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
