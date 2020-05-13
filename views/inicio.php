<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel BuenaVentura</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="../assets/css/estilos.css">
</head>

<body>
    <header class="bg-primary">
        <div class="container container-md">
            <div class="row py-2 text-center justify-content-md-between">
                <div class="col-3 col-md-5 text-md-left pl-md-0">
                    <a href="#" class="d-md-none"><img src="../assets/img/logo-sm.svg"></a>
                    <a href="#" class="d-none d-md-block"><img src="../assets/img/logo-md.svg"></a>
                </div>
                <div class="col-6 d-md-none">
                    <h6 class="pt-2 text-white font-weight-bolder">Hotel BuenaVentura</h6>
                </div>
                <div class="col-3 col-md-3 text-md-right pr-md-0">
                    <a href="#" class="d-md-none"><img src="../assets/img/login-sm.svg"></a>
                    <a href="#" class="d-none d-md-block"><img src="../assets/img/login-md.svg"></a>
                </div>
            </div>
        </div>
    </header>

    <section style="background: lightgrey">
        <div class="container py-3 container-md pl-md-0">
            <h5 class="m-0">Reservar Habitacion</h5>
            <p class="m-0"><small>Selecciona los dias que deseas reservar y la cantidad de personas que ocuparan la habitacion</small></p>
        </div>
        <div class="container container-md px-md-0">
            <form>
                <div class="form-row py-2 py-md-0 pb-md-3">
                    <div class="col-12 mb-3 col-md-5 d-flex px-md-0">
                        <label class="sr-only" for="validationDefault04">State</label>
                        <select class="custom-select" id="validationDefault04" required>
                            <option selected>Fechas</option>
                            <option>Inicio</option>
                            <option>Fin</option>
                        </select>
                    </div>
                    <div class="col-12 mb-3 col-md-5 px-md-0">
                        <label class="sr-only" for="validationDefault04">State</label>
                        <select class="custom-select" id="validationDefault04" required>
                            <option selected>Habitacion</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                        </select>
                    </div>
                    <div class="col-4 col-sm-4 col-md-2 justify-content-md-center">
                        <a href="#" class="btn btn-primary d-block d-md-none"><img src="../assets/img/search.svg"></a>
                        <a href="#" class="btn btn-primary d-none d-md-block">Buscar</a>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <section>
        <div class="container py-3 container-md pl-md-0">
            <h5 class="m-0">Seleccionar el tipo de habitacion</h5>
            <p class="m-0"><small>Estas habitaciones tenemos disponibles en las fechas seleccionadas</small></p>
        </div>
        <div class="container container-md px-md-0">
            <div class="row d-md-flex pb-3">
                <div class="col-12 col-sm-12 col-md-4 col-lg-3 mb-2" >
                    <div class="row no-gutters ">
                        <div class="col-4 col-sm-4 col-md-12 col-lg-12">
                            <img src="../assets/img/cuarto1.svg" class="card-img">
                        </div>
                        <div class="col-8 col-sm-8 col-md-12 col-lg-12">
                            <h6>Habitacion Simple (Individual)</h6>
                            <p><small>Servicios Integrados</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-3 mb-2">
                    <div class="row no-gutters ">
                        <div class="col-4 col-sm-4 col-md-12 col-lg-12">
                            <img src="../assets/img/cuarto1.svg" class="card-img">
                        </div>
                        <div class="col-8 col-sm-8 col-md-12 col-lg-12">
                            <h6>Habitacion Simple (Individual)</h6>
                            <p><small>Servicios Integrados</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-3 mb-2">
                    <div class="row no-gutters ">
                        <div class="col-4 col-sm-4 col-md-12 col-lg-12">
                            <img src="../assets/img/cuarto1.svg" class="card-img">
                        </div>
                        <div class="col-8 col-sm-8 col-md-12 col-lg-12">
                            <h6>Habitacion Simple (Individual)</h6>
                            <p><small>Servicios Integrados</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-3">
                    <div class="row no-gutters ">
                        <div class="col-4 col-sm-4 col-md-12 col-lg-12">
                            <img src="../assets/img/cuarto1.svg" class="card-img">
                        </div>
                        <div class="col-8 col-sm-8 col-md-12 col-lg-12">
                            <h6>Habitacion Simple (Individual)</h6>
                            <p><small>Servicios Integrados</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="background: lightgrey">
        <div class="container py-3 container-md pl-md-0">
            <h5 class="m-0">Datos Personales</h5>
            <p class="m-0"><small>Ingresar los datos personales de la persona que va a reservar la(s) habitaciones</small></p>
        </div>
        <div class="container">
            <div class="row mb-3">
                <div class="col-12 col-sm-12 col-md-7 mb-2 mb-sm-2">
                    <div class="card">
                        <h6 class="card-header bg-primary text-white">Datos Personales</h6>
                        <div class="card-body">
                            <form>
                                <div class="form-row mb-3">
                                    <div class="col-12">
                                        <label class="sr-only" for="tipodoc">Tipo Documento</label>
                                        <select class="custom-select" id="tipodoc">
                                            <option selected>Tipo Documento</option>
                                            <option value="1">Dni</option>
                                            <option value="2">Passport</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row mb-3">
                                    <div class="col-12">
                                        <input type="text" class="form-control" placeholder="Numero de documento">
                                    </div>
                                </div>
                                <div class="form-row mb-3">
                                    <div class="col-12">
                                        <input type="text" class="form-control" placeholder="Nombres Completos">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-12">
                                        <input type="text" class="form-control" placeholder="Correo electronico">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-5">
                    <div class="card">
                        <h6 class="card-header bg-primary text-white">Metodo de Pago</h6>
                        <div class="card-body">
                            <form>
                                <div class="form-row mb-3">
                                    <div class="col-12">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="rb-efectivo" value="Efectivo">
                                            <label class="form-check-label" for="rb-efectivo">Efectivo</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="rb-efectivo" value="Tarjeta Credito">
                                            <label class="form-check-label" for="rb-efectivo">Tarjeta Credito</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-12">
                                        <input type="text" class="form-control" placeholder="Tarjeta de Credito">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pb-2 d-md-flex justify-content-md-end">
                <div class="col-3 col-md-2">
                    <button type="button" class="btn btn-primary">Siguiente</button>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-primary">
        <div class="container">
            <div class="row py-2">
                <div class="col-6 my-auto">
                    <img src="../assets/img/logo-sm.svg" alt="">
                </div>
                <div class="col-6">
                    <p class="text-white footer__text">Todos los derechos reservados</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>