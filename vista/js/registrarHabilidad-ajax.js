$('#btnRegistrarhabilidad').click(function (event) {
    event.preventDefault();

    var habilidadTxtF = $('#habilidadTxt').val();
    var descripcionTxtF = $('#descripcionTxt').val();
    var porcentajeIntF = $('#porcentajeInt').val();

    if (habilidadTxtF === '' || descripcionTxtF === '' || porcentajeIntF === '') {
        if (habilidadTxtF === '' && descripcionTxtF === '' && porcentajeIntF === '') {
            alert('rellene todos los campos');
            event.preventDefault();
        } else if (habilidadTxtF === '') {
            alert('ingrese la habilidad');
            event.preventDefault();
        } else if (descripcionTxtF === '') {
            alert('ingrese la descripción');
            event.preventDefault();
        } else if (porcentajeIntF === '') {
            alert('ingrese el porcentaje');
            event.preventDefault();
        }
    } else {

        var formData = new FormData($('#formRegistraHabilidad')[0]);
        formData.append('imgHabilidad', $('#imgHabilidad')[0].files[0]);

        $.ajax({
            type: "POST",
            url: "ajax/registrarHabilidad-ajax.php",
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                alert(response)
                $('#formRegistraHabilidad')[0].reset();
            },
            error: function (error) {
                console.log(error);
            }
        })
    }
});