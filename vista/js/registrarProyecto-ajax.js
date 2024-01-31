$('#btnRegistrarProyecto').click(function (event) {
    event.preventDefault();

    var proyectoTxt = $('#proyectoTxt').val();
    var descripcionTxt = $('#descripcionTxt').val();
    var githubTxt = $('#githubTxt').val();
    var urlTxt = $('#urlTxt').val();
    var imgProyecto = $('#imgProyecto');

    if (proyectoTxt === '' || descripcionTxt === '' || githubTxt === '' || urlTxt == '' || imgProyecto[0].files.length === 0) {
        if (proyectoTxt === '' && descripcionTxt === '' && githubTxt === '' && urlTxt == '' && imgProyecto[0].files.length === 0) {
            alert('rellene todos los campos');
            event.preventDefault();
        } else if (proyectoTxt === '') {
            alert('ingrese el nombre del proyecto');
            event.preventDefault();
        } else if (descripcionTxt === '') {
            alert('ingrese la descripción');
            event.preventDefault();
        } else if (githubTxt === '') {
            alert('ingrese el enlace de github');
            event.preventDefault();
        } else if (urlTxt === '') {
            alert('ingrese el url de la pagina web');
            event.preventDefault();
        } else if (imgProyecto[0].files.length === 0) {
            alert('selecciona una imagen para el proyecto');
            event.preventDefault();
        }
    } else {

        var formData = new FormData($('#formRegistraProyecto')[0]);
        formData.append('imgProyecto', $('#imgProyecto')[0].files[0]);

        $.ajax({
            type: "POST",
            url: "ajax/registrarProyecto-ajax.php",
            data: formData,
            contentType: false,
            processData: false,
            success: function (response) {
                alert(response)
                $('#formRegistraProyecto')[0].reset();
            },
            error: function (error) {
                console.log(error);
            }
        })
    }
});