function isValidUser()
{
    $.ajax({
        type: "POST",
        url: "url",
        data: {},
        dataType: "json",
        success: function (response) {
            
        },
        error: function (xhr, status, error){

        }
    });
}

$(document).ready(function() {
    $('#floatingInput').on('keydown', function(event) 
    {
        if (!isNumber(event)) 
          event.preventDefault();
        
    });

    $('#idLogin').click(function(){
        isValidUser();
    });

    
});