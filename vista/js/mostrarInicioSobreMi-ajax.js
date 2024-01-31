// if (window.location.href.includes('?ruta=confInicioSobreMi')) {
//     $.ajax({
//         url: 'ajax/mostrarInicioSobreMi-ajax.php',
//         type: 'GET',
//         dataType: 'json',
//         success: function (data) {
//             console.log(data)

//             // $('#usuarioA').val(data[0].usuario_usuario)
//             // Escapar y establecer el valor en el textarea
//             $('#textoinicio').val(escapeHTML(data[0].presentacion));
//             $('#textoQuienSoy').val(escapeHTML(data[0].quien_soy));
//             $('#textoObjetivo').val(escapeHTML(data[0].mi_objetivo));

//         },
//         error: function () {
//             alert('Error al obtener usuarios.');
//         }
//     });
// }


// // Función para escapar HTML
// function escapeHTML(str) {
//     var div = document.createElement('div');
//     div.appendChild(document.createTextNode(str));
//     return div.innerHTML;
// }