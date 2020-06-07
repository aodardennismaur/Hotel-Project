$(document).ready(function () {
    // $('#fechaEntrada').datetimepicker({
    //     timepicker: false,
    //     format: 'd/m/Y',
    //     minDate: 0
    // });
    // $('#fechaSalida').datetimepicker({
    //     timepicker: false,
    //     format: 'd/m/Y',
    //     onShow: function () {
    //         this.setOptions({
    //             minDate: $('#fechaEntrada').val()
    //         })
    //     }
    // });
});

$('#registro').submit(function (e) {
    e.preventDefault();
    var correo = $('#correoRegistro').val();
    var clave = $('#claveRegistro').val();

    if (correo === "" || clave === "") {
        swal({
            title: 'Error',
            text: 'Alguno de los campos se encuentra vacio',
            icon: 'error',
            buttons: false,
            timer: 2000
        });
        var vacio = correo === "" ? "#correo" : "#clave";
        $(vacio).focus();
        return;
    }

    if (validateEmail(correo)) {
        $.ajax({
            type: "POST",
            url: '../controller/registro.controller.php',
            data: $(this).serialize(),
            success: function (data) {
                swal({
                    title: 'Existo',
                    text: data,
                    icon: 'success',
                    button: 'OK'
                }).then(function () {
                    $('#correoRegistro').val('');
                    $('#claveRegistro').val('');
                    window.location = '../views/login.html';
                });
            },
            error: function (er) {
                swal({
                    title: 'Error',
                    text: 'error con el servidor: ' + er.status,
                    icon: 'error',
                    button: 'OK'
                });
                console.info(er);
                return;
            }
        });
    } else {
        swal({
            title: 'Error',
            text: 'El formato del correo ingresado no es valido',
            icon: 'error',
            buttons: false,
            timer: 2000
        });
        return;
    }
});

$('#register').on('click', function (e) {
    window.location = "../views/registrar.html";
});

$('#login').submit(function (e) {
    e.preventDefault();
    var correo = $('#correo').val();
    var clave = $('#clave').val();

    if (correo === "" || clave === "") {
        swal({
            title: 'Error',
            text: 'Alguno de los campos se encuentra vacio',
            icon: 'error',
            buttons: false,
            timer: 2000
        });
        var vacio = correo === "" ? "#correo" : "#clave";
        $(vacio).focus();
        return;
    }

    if (validateEmail(correo)) {
        $.ajax({
            type: "POST",
            url: '../controller/sesion.controller.php',
            data: $(this).serialize(),
            success: function (data) {
                if (data) {
                    swal({
                        title: 'Existo',
                        text: 'Bienvenido al sistema: ' + data.usuario,
                        icon: 'success',
                        button: 'OK'
                    });
                }else{
                    swal({
                        title: 'Error',
                        text: 'El usuario ingresado no existe',
                        icon: 'error',
                        button: 'OK'
                    });
                }
            },
            error: function (er) {
                swal({
                    title: 'Error',
                    text: 'error con el servidor: ' + er.status,
                    icon: 'error',
                    button: 'OK'
                });
                console.info(er);
                return;
            }
        });
    } else {
        swal({
            title: 'Error',
            text: 'El formato del correo ingresado no es valido',
            icon: 'error',
            buttons: false,
            timer: 2000
        });
        return;
    }
});


function validateEmail(email) {
    const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}
