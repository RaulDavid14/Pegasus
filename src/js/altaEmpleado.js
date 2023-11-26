function showModal()
{
    if ($('#miModal').css('display') == 'none')
        $('#miModal').css('display', 'block');
    else
        $('#miModal').css('display', 'none');
}

function alta_usuario()
{

    $('#btnCrearPersonal').on('click', function() {
        var sPNombre = $('').val();
        var sSNombre = $('').val();
        var sTNombre = $('').val();
        var sPaterno = $('').val();
        var sMaterno = $('').val();
        var sRFC = $('').val();
        var sCURP = $('').val();
        var dFecNacimiento = $('').val();
        showModal();
    });


    var datos = {
        pnombre : sPNombre,
        snombre : sSNombre,
        tnombre : sTNombre,
        paterno : sPaterno,
        materno : sMaterno,
        rfc     : sRFC,
        curp    : sCURP
        
    };
    
    $.ajax({
        type: "POST",
        url: "../controllers/empleados_controller.php",
        data: datos,
        dataType: "json",
        success: function (response) {
            
        },
        error: function (xhr, status, error)
        {

        }
        
    });
}

$(document).ready(function(){
    $('#idSearchUser').on('keydown', function(event) {
        if (!isNumber(event)) 
          event.preventDefault();
        
    });
});