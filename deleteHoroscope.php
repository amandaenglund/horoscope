<!--
sidan ska bara gå att begära via DELETE, den ska ta bort det sparade horoskopet i $_SESSION och 
echo:a true. Om inget finns sparat ska den echo:a false.


-->
<?php
    session_start();
    
    if ($_SERVER['REQUEST_METHOD'] == 'DELETE'){
        if(isset($_SESSION["myHoroscope"])){
            unset($_SESSION["myHoroscope"]);
            echo "Delete: True</br>";
        }
        else{
            echo "Delete: False</br>";
        }
    }
?>