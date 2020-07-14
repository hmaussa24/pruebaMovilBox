$(document).ready(function () {
    $(".addnew").on('click', function () {
        var formData = new FormData();
        var files = $('#foto')[0].files[0];
        var titulo = $('#titulo').val();
        var noticia = $('#txt-content').Editor('getText');
        //alert(noticia);
        if (titulo.length > 0 && noticia.length > 0) {
            formData.append('foto', files);
            formData.append('titulo', titulo);
            formData.append('noticia', noticia);
            formData.append('token', localStorage.getItem('token'))
            $.ajax({
                url: 'http://localhost/movilbox/addnew/',
                type: 'post',
                data: formData,
                contentType: false,
                processData: false,
                success: function (response) {
                    //alert(response);
                    if (response != 0) {
                        alert("Noticia Creada");
                        window.location = "http://localhost/movilbox/home/";
                    } else {
                        alert('Formato de imagen incorrecto.');
                    }
                }
            });
            return false;
        }else{
            alert("Debe completar los datos");
        }
    });
});