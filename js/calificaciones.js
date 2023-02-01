function calificar(id,documento,jurado){
    var calificacion = document.getElementById('calificacion'+documento).value;

    $.ajax({
        type: "POST",
        url: "prcd/calificar.php",
        data: {
            id:id,
            documento:documento,
            calificacion:calificacion,
            jurado:jurado
        },
        success: function(data) {
            // $('#calificacionActual').fadeIn(1000).html(data);
            document.getElementById('calificacionActual'+documento).innerHTML = calificacion;
            document.getElementById('calificacion'+documento).hidden = true;
            Swal.fire({
                icon: 'success',
                imageUrl: '../../img/logo_consejo_04.png',
                imageHeight: 200,
                title: 'Documento calificado',
                text: 'Proceso correcto',
                confirmButtonColor: '#3085d6',
                footer: 'INJUVENTUD'
            });
        }
    });
}

function editarCalificacion(){

}