<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
    <!--plugins-->
    <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <!-- loader-->
    <link href="assets/css/pace.min.css" rel="stylesheet" />
    <script src="assets/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/app.css" rel="stylesheet">
    <link href="assets/css/icons.css" rel="stylesheet">
    {{-- Estilos propios del proyecto --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('../css/style.css') }}">

    <title>MarketTico-iniciar Sesión</title>
</head>

<body class="bg-login">
    <!--wrapper-->
    <div class="wrapper">
        <div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
            <div class="container-fluid">
                <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                    <div class="col mx-auto">
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-4 text-center">
                                    <div>
                                        <img src="../assets/images/logo-markettico-icono.png" class="logo-icon"
                                            alt="logo icon">
                                    </div>
                                    <div>
                                        <h4 class="logo-text">MarketTico</h4>
                                    </div>
                                    <br>
                                    <div>
                                        <h4 class="logo-text">Vendedores</h4>
                                    </div>
                                </div>

                                <div class="border p-4 rounded">
                                    <div class="text-center">
                                        <h3 class="">Inicia sesión</h3>
                                    </div>
                                    <div class="login-separater text-center mb-4"> <span>INICA SESIÓN CON TU CORREO
                                            O NÚMERO TELEFÓNICO Y
                                            CONTRASEÑA</span>
                                        <hr />
                                    </div>
                                    <div class="form-body">
                                        <form class="row g-3" action=" " method="POST">
                                            @method('post')
                                            @csrf
                                            <div class="col-12">
                                                <label for="inputEmailAddress" class="form-label">Correo
                                                    Electrónico o Número Telefónico</label>
                                                <input type="user" class="form-control" id="inputUser"
                                                    placeholder="Correo o Número Telefónico" name="correoElectronico">
                                            </div>
                                            <div class="col-12">
                                                <label for="inputChoosePassword" class="form-label">Contraseña</label>
                                                <div class="input-group" id="show_hide_password">
                                                    <input type="password" class="form-control border-end-0"
                                                        id="inputPassword" value="" name="password"
                                                        placeholder="Ingresa Contraseña"> <a href="javascript:;"
                                                        class="input-group-text bg-transparent"></a>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                            </div>
                                            <div class="col-md-6 text-end"> <a class="col-md-6 text-end"
                                                    data-bs-toggle="modal" data-bs-target="#verifContra"
                                                    data-bs-placement="top">¿Recuperar Contraseña?
                                                </a>
                                            </div>
                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <a style="background-color: #04D9D9" type="submit"
                                                        class="btn text-light" href="{{ route('verif') }}"><i
                                                            class="bx bxs-lock-open"></i>Inicia Sesión</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Inicio modal show producto-->
                <div class="modal fade" id="verifContra" tabindex="-1" aria-labelledby="showProductModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">¿Olvidaste tu Contraseña?</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form class="form-body" action="" method="POST">
                                @method('post')
                                @csrf
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <br><br>
                                            <h6 class="text-muted">No te preocupes. Escribe tu correo para recuperar tu
                                                cuenta.</h6>
                                            <div class="input-group">
                                                <input type="email" class="form-control" id="inputUser"
                                                    placeholder="Correo Empresarial" name="emailRecuperacion">
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <img src="../assets/images/login-images/verificacion_contrasena.jpg"
                                                class="card-img login-img h-100" alt="...">
                                        </div>
                                    </div>
                                </div>


                                <div class="modal-footer">

                                    <button style="background-color: #04D9D9" type="button" class="btn text-light"
                                        data-bs-dismiss="modal">Enviar</button>

                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Regresar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--Fin modal show producto-->
            <!--end row-->
        </div>
    </div>
    </div>
    <!--end wrapper-->
    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!--plugins-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <!--Password show & hide js -->
    <script>
        $(document).ready(function() {
            $("#show_hide_password a").on('click', function(event) {
                event.preventDefault();
                if ($('#show_hide_password input').attr("type") == "text") {
                    $('#show_hide_password input').attr('type', 'password');
                    $('#show_hide_password i').addClass("bx-hide");
                    $('#show_hide_password i').removeClass("bx-show");
                } else if ($('#show_hide_password input').attr("type") == "password") {
                    $('#show_hide_password input').attr('type', 'text');
                    $('#show_hide_password i').removeClass("bx-hide");
                    $('#show_hide_password i').addClass("bx-show");
                }
            });
        });
    </script>
    <!--app JS-->
    <script src="assets/js/app.js"></script>
</body>

</html>
