<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel BuenaVentura</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="../assets/css/estilos.css">
</head>

<body>

    <div class="container-fluid bg-primary">
        <div class="row text-center py-2 py-sm-2 py-md-3 justify-content-md-between">
            <div class="col-3 col-sm-2 col-md-3">
                <a href="#" class="d-md-none"><img src="../assets/img/logo-sm.svg"></a>
                <a href="#" class="d-none d-md-block"><img src="../assets/img/logo-md.svg"></a>
            </div>
            <div class="col-6 col-sm-8 align-self-end d-md-none">
                <h6 class="text-white font-weight-bolder">Hotel BuenaVentura</h6>
            </div>
            <div class="col-3 col-sm-2 col-md-1">
                <a href="#" class="d-md-none"><img src="../assets/img/login-sm.svg"></a>
                <a href="#" class="d-none d-md-block"> <img src="../assets/img/login-md.svg"></a>
            </div>
        </div>
    </div>

    <div class="container-fluid res__contall d-block d-sm-none">
        <div class="container">
            <div class="row py-3">
                <p class="res-titulo__p">Reserva tu habitacion</p>
                <p class="mt-0 res-subtitulo__p">Selecciona los dias que deseas reservar y la cantidad de personas que ocuparan la habitacion</p>
            </div>
        </div>
        <form class="pb-3">
            <div class="form-row">
                <div class="col-8">
                    <label class="mr-sm-2 sr-only" for="fecha">Calendario</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><img src="../assets/img/calendar.svg" alt=""></div>
                        </div>
                        <select class="custom-select mr-sm-2" id="fecha">
                            <option selected>Calendario</option>
                            <option value="1">Llegada</option>
                            <option value="2">Salida</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-row justify-content-between">
                <div class="col-8">
                    <label class="mr-sm-2 sr-only" for="habitacion">Habitacion</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><img src="../assets/img/user.svg" alt=""></div>
                        </div>
                        <select class="custom-select mr-sm-2" id="habitacion">
                            <option selected>Habitacion</option>
                            <option value="1">Adulto</option>
                            <option value="2">Niño</option>
                            <option value="3">Habitacion</option>
                        </select>
                    </div>
                </div>
                <div class="col-3 text-center bg-primary py-1">
                    <a href="#"><img src="../assets/img/search.svg"></a>
                </div>
            </div>
        </form>
    </div>

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>