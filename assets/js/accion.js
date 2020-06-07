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
                    swal({
                        title: 'Existo',
                        text: 'Bienvenido al sistema: ' + data.usuario,
                        icon: 'success',
                        button: 'OK'
                    });
                    console.info(data);
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
});


function validateEmail(email) {
    const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}
