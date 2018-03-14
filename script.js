$(document).ready(function(){


    //ska göra ett anrop via $.ajax till addHoroscope.php med innehållet i input:en. 
    //Efter anropet, ska innehållet i div:en uppdateras. (POST)
    function saveHoroscope(){
        $.ajax(
            {
                method: "POST",
                url: "./addHoroscope.php",
                data: {
                    date: $("#datum").val()
                }
            }
        )
        .done(updateCheck);
    };



    //ska göra ett anrop via $.ajax till updateHoroscope.php med innehållet i input:en. 
    //Efter anropet ska innehållet i div:en uppdateras. (PUT)
    function updateHoroscope(){
        $.ajax(
            {
                method: "PUT",
                url: "./updateHoroscope.php",
                data: {
                    date: $("#datum").val()
                }
            }
        )
        .done(updateCheck);
    };


    //ska göra ett anrop via $.ajax till deleteHoroscope.php. Efter anropet ska 
    //innehållet i div:en uppdateras om horoskopet togs bort. (DEL)
    function deleteHoroscope(){
        $.ajax(
            {
                method: "DELETE",
                url: "./deleteHoroscope.php"
            }
        )
        .done(updateCheck);
 
    };

    



//slut
});