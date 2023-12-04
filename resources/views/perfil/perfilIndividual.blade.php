@extends('plantilla')

@section('gestion_nombre', 'Perfil')

@section('contenido')

    <section class="content">

        <div class="container" id="container_perfil">
            <div class="card col-sm-8 mx-auto mt-4 border-top border-0 border-4 border-info">
                <div class="card-body" id="cardbody_perfil">

                    <div class="position-relative">

                        <label for="inputCoverFile" class="cover-photo-btn" title="Cambiar foto de portada"
                            onclick="openModal('portadaModal')">
                            <img src="../assets/images/portadaEm.png" alt="Portada" class="img-fluid w-100 cover-photo"
                                id="foto_portada">
                        </label>
                        <input type="file" id="inputCoverFile" style="display: none;" accept="image/*"
                            onclick="preventDefault(event)">

                        <div class="profile-container position-absolute top-50 start-50 translate-middle text-center">
                            <label for="inputFile" class="profile-img-btn" title="Cambiar foto de perfil"
                                onclick="openModal('perfilModal')">
                                <img src="../assets/images/avatars/avatar-2.png" alt="Admin" class="rounded-circle p-1"
                                    width="110" style="background-color: #04D9B2; z-index: 1;" id="foto_perfil">
                            </label>
                            <input type="file" id="inputFile" style="display: none;" accept="image/*"
                                onclick="preventDefault(event)">

                            <div class="mt-3 profile-info">
                                <span id="nombre_completo">Delia Smith</span>
                                <p class="text-secondary mb-1">Vendedor</p>
                            </div>
                        </div>
                    </div>

                    <hr class="my-4">

                    <div class="row mb-1">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Tipo de identificación:</h6>
                        </div>
                        <div class="col-sm-6 col-8 text-secondary">
                            <span id="tipo_identificacion">no sé</span>
                        </div>
                        <div class="col-sm-3 col-4">
                            <div class="float-end text-center">
                                <button class="btn btn-warning btn-sm float-end" data-bs-toggle="modal"
                                    data-bs-target="#editarUsuarioEmpreModal" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Editar datos del perfil" style="color: #F2F2F2;">
                                    <i class="bx bx-edit text-center"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Número de identificación:</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <span id="numero_identificacion">29838727</span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Correo electrónico:</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <span id="correo_electronico">charcita@gmail.com</span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Teléfono:</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <span id="telefono">8924838</span>
                        </div>
                    </div>



                    <div class="row mb-1 password-container">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Contraseña:</h6>
                        </div>
                        <div class="col-sm-6 col-8 text-secondary">
                            <input type="password" value="123" class="form-control" id="password" readonly>
                        </div>
                        <div class="col-sm-3 col-4 text-end">
                            <div class="d-flex flex-column">
                                <button class="btn btn-sm mb-2 mb-sm-0" data-bs-toggle="modal"
                                    data-bs-target="#VerificarContra" style="background-color: #04D9B2; color: #F2F2F2">
                                    Cambiar Contraseña
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Modal de verificar contra actual -->
                    <div class="modal fade" id="VerificarContra" tabindex="-1" aria-labelledby="PassModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="VerificarContraLabel">
                                        Verificar contraseña actual</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Cerrar"></button>
                                </div>

                                {{-- Modal verificar contraseña actual --}}
                                <div class="modal-body">
                                    <form action="/verificar-contrasena-actual" method="POST">
                                        @method('post')
                                        @csrf
                                        <div class="mb-3">
                                            <label for="VerificarContraLabel" class="form-label">Digite su contraseña
                                                actual:</label>
                                            <input type="text" class="form-control" id="password">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Cerrar</button>
                                            <button type="submit" class="btn btn-info text-white"
                                                style="background-color: #04D9D9; border-color: #04D9D9;"
                                                data-bs-toggle="modal" data-bs-target="#PassModal"
                                                data-bs-dismiss="modal">
                                                <i class="bx bx-save" style="color: #F2F2F2;"></i>
                                                Verificar
                                            </button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Modal de cambiar pass -->
                    <div class="modal fade" id="PassModal" tabindex="-1" aria-labelledby="PassModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="PassModalLabel">
                                        Cambiar Contraseña</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Cerrar"></button>
                                </div>

                                <div class="modal-body">
                                    <form action="/cambiar-contrasena" method="POST">
                                        @method('post')
                                        @csrf
                                        <div class="mb-3">
                                            <label for="passwordLabel" class="form-label">Contraseña nueva:</label>
                                            <input type="text" class="form-control" id="password">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Cerrar</button>
                                            <button type="submit" class="btn btn-info text-white"
                                                style="background-color: #04D9D9; border-color: #04D9D9;">
                                                <i class="bx bx-save" style="color: #F2F2F2;"></i>
                                                Guardar
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>



                    <!-- Modal de Portada -->
                    <div class="modal fade" id="portadaModal" tabindex="-1" role="dialog"
                        aria-labelledby="portadaModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="portadaModalLabel">Cambiar Foto de Portada</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Cerrar"></button>
                                </div>
                                <div class="modal-body position-relative">
                                    <img src="../assets/images/portadaEm.png" alt="Portada actual"
                                        class="img-fluid w-100" id="portadaActual">
                                    <button type="button"
                                        class="btn btn-light position-absolute top-0 end-0 m-3 bg-transparent border-0"
                                        onclick="document.getElementById('inputNewPortadaFile').click();">
                                        <img src="{{ asset('../assets/images/editar4.png') }}" alt=""
                                            style="width: 30px; height: 30px;">
                                    </button>
                                    <input type="file" id="inputNewPortadaFile" style="display: none;"
                                        accept="image/*"
                                        onchange="loadNewImage('inputNewPortadaFile', 'portadaActual', false)">
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cerrar</button>
                                    <button type="button" class="btn btn-info text-white"
                                        style="background-color: #04D9D9; border-color: #04D9D9;">
                                        <i class="bx bx-save" style="color: #F2F2F2;"></i>
                                        Guardar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal de Perfil -->
                    <div class="modal fade" id="perfilModal" tabindex="-1" role="dialog"
                        aria-labelledby="perfilModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="perfilModalLabel">Cambiar Foto de Perfil</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Cerrar"></button>
                                </div>
                                <div class="modal-body position-relative d-flex justify-content-center align-items-center">
                                    <img src="../assets/images/avatars/avatar-2.png" alt="Perfil actual"
                                        class="p-1 rounded-circle" id="perfilActual"
                                        style="width: 150px; height: 150px;">

                                    <button type="button"
                                        class="btn btn-light position-absolute top-0 end-0 bg-transparent border-0"
                                        style="margin: 20px; margin-right: 150px;"
                                        onclick="document.getElementById('inputNewPerfilFile').click();">
                                        <img src="{{ asset('../assets/images/editar4.png') }}" alt=""
                                            style="width: 30px; height: 30px;">
                                    </button>
                                    <input type="file" id="inputNewPerfilFile" style="display: none;"
                                        accept="image/*"
                                        onchange="loadNewImage('inputNewPerfilFile', 'perfilActual', true)">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cerrar</button>
                                    <button type="button" class="btn btn-info text-white"
                                        style="background-color: #04D9D9; border-color: #04D9D9;">
                                        <i class="bx bx-save" style="color: #F2F2F2;"></i>
                                        Guardar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Modal de edición -->
                    <div class="modal fade" id="editarUsuarioEmpreModal" tabindex="-1"
                        aria-labelledby="editarUsuarioEmpreModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editarUsuarioEmpreModalLabel">
                                        Editar datos de perfil</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Cerrar"></button>
                                </div>

                                <div class="modal-body">
                                    <form action="/ruta-de-edicion" method="POST">
                                        @method('post')
                                        @csrf
                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <label for="nombre_completolbl" class="form-label">Nombre
                                                    completo:</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="nombre_completo"
                                                    name="nombre_completo" value="">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <label for="correo_electronicolbl" class="form-label">Correo
                                                    electrónico:</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="email" class="form-control" id="correo_electronico"
                                                    name="correo_electronico" value="">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-sm-4">
                                                <label for="telefonolbl" class="form-label">Teléfono:</label>
                                            </div>
                                            <div class="col-sm-8">
                                                <input type="number" class="form-control" id="telefono"
                                                    name="telefono" value="">
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Cerrar</button>
                                            <button type="submit" class="btn btn-info text-white"
                                                style="background-color: #04D9D9; border-color: #04D9D9;">
                                                <i class="bx bx-save" style="color: #F2F2F2;"></i>
                                                Guardar
                                            </button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Botón de cerrar cuenta  --}}
                    <button class="btn btn-danger btn-sm float-end" data-bs-toggle="modal"
                        data-bs-target="#cerrarCuentaModal" data-bs-toggle="tooltip" data-bs-placement="top"
                        title="Cerrar cuenta" style="color: #F2F2F2;">
                        Cerrar cuenta
                    </button>

                    {{-- Modal de cerrar cuenta --}}
                    <div class="modal fade" id="cerrarCuentaModal" tabindex="-1"
                        aria-labelledby="cerrarCuentaModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form id="cerrarCuenta" action="/tu_ruta_de_procesamiento" method="POST">
                                    @method('delete')
                                    @csrf
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="cerrarCuentanModalLabel">
                                            Confirmar cierre de la cuenta</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        ¿Estás seguro de que deseas cerrar esta cuenta?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cancelar</button>
                                        <button type="submit" class="btn btn-danger">Cerrar
                                            cuenta</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
