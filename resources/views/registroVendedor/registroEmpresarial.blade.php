<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
    <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <link href="assets/css/pace.min.css" rel="stylesheet" />
    <script src="assets/js/pace.min.js"></script>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/app.css" rel="stylesheet">
    <link href="assets/css/icons.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('../css/style.css') }}">

    <title>MarketTico - Iniciar Sesión</title>
</head>

<body class="bg-login">
    <div class="wrapper">
        <div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center mb-4">
                                    <img src="../assets/images/logo-markettico-icono.png" class="logo-icon"
                                        alt="logo icon">
                                    <h4 class="logo-text">MarketTico</h4>
                                    <h4 class="logo-text">Vendedor Empresarial</h4>
                                </div>

                                <div class="border p-4 rounded">
                                    <div class="text-center">
                                        <h3 class="">Registrarse</h3>
                                    </div>
                                    <div class="login-separater text-center mb-4">
                                        <span>Ingrese sus datos para el registro</span>
                                        <hr />
                                    </div>

                                    <div class="form-body">
                                        <form class="row g-3">
                                            <div class="col-12">
                                                <label for="nombre_empresa_label" class="form-label">Nombre de
                                                    empresa</label>
                                                <input type="text" class="form-control" id="inputNombre_empresa"
                                                    placeholder="Nombre de empresa" name="nombre_empresa">
                                            </div>
                                            <div class="col-12">
                                                <label for="cedula_juridica_label" class="form-label">Cédula
                                                    jurídica:</label>
                                                <input type="text" class="form-control" id="inputCedula_juridica"
                                                    placeholder="Cédula Juridica" name="cedula_juridica">
                                            </div>

                                            <div class="col-12">
                                                <label for="telefono_empresarial_label" class="form-label">Teléfono
                                                    Empresarial</label>
                                                <input type="number" class="form-control"
                                                    id="inputTelefono_empresarial" placeholder="Teléfono empresarial"
                                                    name="telefono_empresarial">
                                            </div>
                                            <div class="col-12">
                                                <label for="correo_empresarial_label" class="form-label">Correo
                                                    empresarial</label>
                                                <input type="email" class="form-control" id="inputCorreo_empresarial"
                                                    placeholder="Correo empresarial" name="correo_empresarial">
                                            </div>
                                            <div class="col-12">
                                                <label for="inputChoosePassword" class="form-label">Contraseña</label>
                                                <div class="input-group" id="show_hide_password">
                                                    <input type="password" class="form-control border-end-0"
                                                        id="inputPassword" value="" name="password"
                                                        placeholder="Ingresar Contraseña"><a href="javascript:;"
                                                        class="input-group-text"> <i class='bx bx-show'></i> </a>
                                                </div>
                                            </div>


                                            <div class="col-12">
                                                <label for="tipo_identificacion_label" class="form-label">Tipo de
                                                    Identificación</label>
                                                <select class="form-select" id="tipo_identificacion"
                                                    name="tipo_identificacion">
                                                    <option value="cedula">Cédula</option>
                                                    <option value="dimex">DIMEX</option>
                                                </select>
                                            </div>

                                            <div class="col-12">
                                                <label for="inputtNumeroIden" class="form-label">Número de
                                                    identificación:</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control"
                                                        id="numero_identificacion"
                                                        placeholder="Ingrese su número de identificación"
                                                        name="numero_identificacion">
                                                    <span class="input-group-text">
                                                        <i class="bx bx-id-card"></i>
                                                    </span>
                                                </div>
                                                <small class="text-muted">Ingrese su cédula como el siguiente
                                                    ejemplo: 0705690489</small>
                                            </div>


                                            <div class="col-12">
                                                <label for="ubicacion_label" class="form-label">Ubicación</label>
                                                <input type="text" class="form-control" id="inputUbicacion"
                                                    placeholder="Ubicación" name="ubicacion">
                                            </div>



                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <a style="background-color: #04D9D9" type="submit"
                                                        class="btn text-light" href="#"><i
                                                            class="bx bxs-lock-open"></i>Registrarse</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal for password recovery -->
            <div class="modal fade" id="verifContra" tabindex="-1" aria-labelledby="showProductModalLabel"
                aria-hidden="true">
                <!-- Modal content goes here -->
            </div>
        </div>
    </div>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>

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

    <script src="assets/js/app.js"></script>
</body>

</html>
