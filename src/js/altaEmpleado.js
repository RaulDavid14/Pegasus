function showModal()
{
    if ($('#miModal').css('display') == 'none')
        $('#miModal').css('display', 'block');
    else
        $('#miModal').css('display', 'none');
}

$(document).ready(function(){
    $('#idSearchUser').on('keydown', function(event) {
        if (!isNumber(event)) 
          event.preventDefault();
        
    });
});