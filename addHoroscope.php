<!--
sidan ska bara gå att begära via POST, den ska kolla efter ett födelsedatum i $_POST, räkna ut 
vilket horoskop födelsedatumet tillhör och spara det i $_SESSION.
Om ett horoskop redan finns sparat ska det inte skrivas över. Om det inte gick att räkna ut 
horoskopet ska ingenting sparas.
   
Sidan ska inte använda echo eller skriva någon output förutom true eller false, beroende 
på om horoskopet sparades.
-->
<?php
    session_start();

    include "./checkHoroscope.php";

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $month = substr($_POST["birthDate"], 2, 2);
        $day = substr($_POST["birthDate"], 4, 2);
            
    if(!isset($_SESSION["myHoroscope"])){
        $_SESSION["myHoroscope"] = checkHoroscope($month, $day);
    }
    else{
    }
    }
?>
