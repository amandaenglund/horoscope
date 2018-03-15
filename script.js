$(document).ready(function(){


    printHoroscope();    
    
    function printHoroscope(){

        $.ajax({
            type: 'GET',
            url: "./viewHoroscope.php",
        })
        .done(function(data){
            $('#resultDiv').html(data);
        })

    }
    



    //ska göra ett anrop via $.ajax till addHoroscope.php med innehållet i input:en. 
    //Efter anropet, ska innehållet i div:en uppdateras. (POST)
    //type eller method??

    function saveHoroscope(){

        var birthDate = $('#datum').val();
        if(birthDate !== ""){

            $.ajax(
            {
                type: 'POST',
                url: "./addHoroscope.php",
                data: {birthDate: birthDate}
            })
            .done(function(data){
                $('#resultDiv').append(data);
            })
        }

        printHoroscope();
    }
    




    //ska göra ett anrop via $.ajax till updateHoroscope.php med innehållet i input:en. 
    //Efter anropet ska innehållet i div:en uppdateras. (PUT)
    //type eller method??

    function updateHoroscope(){

        var birthDate = $('#datum').val();
        if(birthDate !== ""){

            $.ajax(
            {
                type: 'PUT',
                url: "./updateHoroscope.php",
                data: {birthDate: birthDate}
            })
            .done(function(data){
                $('#resultDiv').append(data);
            })
        }

        printHoroscope();
    }



    //ska göra ett anrop via $.ajax till deleteHoroscope.php. Efter anropet ska 
    //innehållet i div:en uppdateras om horoskopet togs bort. (DEL)
    //type eller method??

    function deleteHoroscope(){

        var birthDate = $('#datum').val();

        $.ajax({
            type: 'DELETE',
            url: "./deleteHoroscope.php",
        })
        .done(function(data){
            $('#resultDiv').append(data);
        })

        printHoroscope();
    }

    



//slut
});