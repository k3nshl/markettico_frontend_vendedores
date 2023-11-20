@extends('plantilla')

@section('gestion_nombre', 'Perfil')

@section('contenido')

    <section class="content">

        <div class="container" id="container_perfil">
            <div class="card col-sm-8 mx-auto mt-4 border-top border-0 border-4 border-info">
                <div class="card-body" id="cardbody_perfil">

                    <div class="position-relative">

                        <label for="inputCoverFile" class="cover-photo-btn" title="Cambiar foto de portada">
                            <img src="../assets/images/portadaEm.png" alt="Portada" class="img-fluid w-100 cover-photo"
                                id="foto_portada">
                        </label>
                        <input type="file" id="inputCoverFile" style="display: none;" accept="image/*"
                            onchange="handleCoverFileSelect(event)">

                        <div class="profile-container position-absolute top-50 start-50 translate-middle text-center">
                            <label for="inputFile" class="profile-img-btn" title="Cambiar foto de perfil">
                                <img src="../assets/images/avatars/avatar-2.png" alt="Admin" class="rounded-circle p-1"
                                    width="110" style="background-color: #04D9B2; z-index: 1;" id="foto_perfil">
                            </label>
                            <input type="file" id="inputFile" style="display: none;" accept="image/*"
                                onchange="handleFileSelect(event)">

                            <div class="mt-3 profile-info">
                                <span id="nombre_completo">Delia Smith</span>
                                <p class="text-secondary mb-1">Vendedor</p>
                            </div>
                        </div>
                    </div>

                    <hr class="my-4">

                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Tipo de identificación:</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            <span id="tipo_identificacion">no sé</span>
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

                    <!-- Botón de editar con modal -->
                    <button class="btn btn-warning btn-sm float-end" data-bs-toggle="modal"
                        data-bs-target="#editarUsuarioEmpreModal" data-bs-toggle="tooltip" data-bs-placement="top"
                        title="Editar Usuario" style="color: #F2F2F2; margin: 0 auto; display: block;">
                        Editar información
                    </button>

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
                </div>
            </div>
        </div>
    </section>
@endsection
