
$(document).ready(function () {
    $('#registrar').click(function (e) {
        registrar();
    });
    $('#session').click(function (e) {
        login();
    });
});

function registrar() {
    var formData = JSON.stringify($("#registro").serializeArray());
    let user = $('#usuario').val();
    let email = $('#email').val();
    let pwd = $('#pwd').val();
    let pwd1 = $('#pwd1').val();

    if (pwd != pwd1) {
        alert('Las contraseñas no coinciden');

    } else if (user.length > 0 && email.length > 0 && pwd.length > 0) {
        if (pwd.length <= 0) {
            alert('Datos no validos')
        } else {
            $.ajax({
                type: "POST",
                url: "http://localhost/movilbox/registraruser/",
                data: formData,
                success: function (data) {

                    if (data.respuesta == 200) {
                        alert("Registro Exitoso");
                        window.location = "http://localhost/movilbox/login/";
                    } else {
                        alert("No se puedo completar el registro, intentelo de nuevo.")
                    }
                },
                dataType: "json",
                contentType: "application/json",
            });
        }
    } else {
        alert('Datos no validos');
    }



}

function login() {
    var formData = JSON.stringify($("#login").serializeArray());
    let user = $('#usuario').val();
    let pwd = $('#pwd').val();

    if (user.length > 0 && pwd.length > 0) {
        $.ajax({
            type: "POST",
            url: "http://localhost/movilbox/loginad/",
            data: formData,
            success: function (data) {

                if (data.respuesta == 200) {
                    //alert("Login");
                    localStorage.setItem('token', data.token);
                    window.location = "http://localhost/movilbox/home/";
                } else {
                    alert("Usuario o Contraseña incorrectos.")
                }
            },
            dataType: "json",
            contentType: "application/json",
        });

    } else {
        alert('Datos no validos');
    }



}