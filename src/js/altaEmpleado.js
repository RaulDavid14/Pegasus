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
        var sPNombre = $('#inptIdPriNom').val();
        var sSNombre = $('#inptIdSegNom').val();
        var sTNombre = $('#inpIdTerNom').val();
        var sPaterno = $('#inpIdApePat').val();
        var sMaterno = $('#inpIdApeMat').val();
        var sRFC = $('#inptIdRFC').val();
        var sCURP = $('#inptIdCURP').val();
        var dFecNacimiento = $('#inp').val();
        showModal();
    });


    var datos = {
        pnombre : sPNombre,
        snombre : sSNombre,
        tnombre : sTNombre,
        paterno : sPaterno,
        materno : sMaterno,
        rfc     : sRFC,
        curp    : sCURP,
        fecNac  : dFecNacimiento
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