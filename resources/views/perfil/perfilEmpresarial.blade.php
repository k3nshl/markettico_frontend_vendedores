@extends('plantilla')

@section('gestion_nombre', 'Perfil Empresarial')

@section('contenido')

    <section class="content">

        <div class="container" id="container_perfil">
            <div class="card col-sm-8 mx-auto mt-4 border-top border-0 border-4 border-info">
                <div class="card-body" id="cardbody_perfil">

                    <div class="position-relative">
                        <!-- Portada -->
                        <div>
                            <label for="inputCoverFile" class="cover-photo-btn" title="Cambiar foto de portada"
                                onclick="openModal('portadaModal')">
                                <img src="../assets/images/portadaEm.png" alt="Portada" class="img-fluid w-100 cover-photo"
                                    id="foto_portada">
                            </label>
                            <input type="file" id="inputCoverFile" style="display: none;" accept="image/*"
                                onclick="preventDefault(event)">
                        </div>

                        <!-- Perfil -->
                        <div class="profile-container">
                            <label for="inputFile" class="profile-img-btn" title="Cambiar foto de perfil"
                                onclick="openModal('perfilModal')">
                                <img src="../assets/images/avatars/avatar-2.png" alt="Admin" class="rounded-circle p-1"
                                    width="110" style="background-color: #04D9B2;" id="foto_perfil">
                            </label>
                            <input type="file" id="inputFile" style="display: none;" accept="image/*" onclic
                                k="preventDefault(event)">

                            <div class="mt-3 profile-info" style="margin-left: 15%;">

                                <span id="id_vendedor_propietario" name="id_vendedor_propietario">Delia Smith</span>
                                <br>
                                <span id="ubicacion" name="ubicacion" class="text-muted font-size-sm">Limón city</span>
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
                                    <img src="../assets/images/portadaEm.png" alt="Portada actual" class="img-fluid w-100"
                                        id="portadaActual">
                                        <button type="button"
                                        class="btn btn-light position-absolute top-0 end-0 m-3 bg-transparent border-0"
                                        onclick="document.getElementById('inputNewPortadaFile').click();">
                                        <img src="{{ asset('../assets/images/editar4.png') }}" alt=""
                                            style="width: 30px; height: 30px;">
                                    </button>
                                    <input type="file" id="inputNewPortadaFile" style="display: none;" accept="image/*"
                                        onchange="loadNewImage('inputNewPortadaFile', 'portadaActual', false)">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
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
                                    <button type="button" class="btn btn-light position-absolute top-0 end-0"
                                        style="margin: 20px; margin-right: 150px;"
                                        onclick="document.getElementById('inputNewPerfilFile').click();">
                                        <i class="bx bx-edit" style="font-size: 1.5rem; color: #000000;"></i>
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






                    <hr class="my-4">


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
                                            <div class="col-sm">
                                                <label for="nombre_empresa_label" class="form-label">Nombre de la
                                                    Empresa:</label>
                                                <input type="text" class="form-control" id="nombre_empresa"
                                                    name="nombre_empresa">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-sm">
                                                <label for="telefono_empresarial_label" class="form-label">Teléfono
                                                    empresarial:</label>
                                                <input type="text" class="form-control" id="telefono_empresarial"
                                                    name="telefono_empresarial">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-sm">
                                                <label for="correo_empresarial_label" class="form-label">Correo
                                                    empresarial:</label>
                                                <input type="text" class="form-control" id="correo_empresarial"
                                                    name="correo_empresarial">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-sm">
                                                <label for="cedula_juridica_label" class="form-label">Cédula
                                                    jurídica:</label>
                                                <input type="text" class="form-control" id="cedula_juridica"
                                                    name="cedula_juridica">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-sm">
                                                <label for="id_vendedor_propietario_label"
                                                    class="form-label">Vendedor:</label>
                                                <input type="text" class="form-control" id="id_vendedor_propietario"
                                                    name="id_vendedor_propietario">
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


                    <div class="row mb-1">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Nombre de la Empresa:</h6>
                        </div>
                        <div class="col-sm-6 col-8 text-secondary">
                            <span id="nombre_empresa">DARCY'S</span>
                        </div>
                        <div class="col-sm-3 col-4">
                            <div class="float-end text-center">
                                <button class="btn btn-warning btn-sm mt-3 mt-sm-0" data-bs-toggle="modal"
                                    data-bs-target="#editarUsuarioEmpreModal" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Editar Usuario" style="color: #F2F2F2;">
                                    <i class="bx bx-edit"></i>
                                </button>
                            </div>
                        </div>
                    </div>


                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Teléfono empresarial:</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <span id="telefono_empresarial">60020469</span>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Correo empresarial:</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <span id="correo_empresarial">yen@gmail.com</span>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Cédula juridica:</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <span id="cedula_juridica">702928821</span>
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
                        <h6 class="mb-0">Tipo de identificación:</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        <span id="tipo_identificacion">no sé</span>
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
                                <h5 class="modal-title" id="VerificarContraEmpreLabel">
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
                                            data-bs-toggle="modal" data-bs-target="#PassModal" data-bs-dismiss="modal">
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
                <div class="modal fade" id="PassModal" tabindex="-1" aria-labelledby="PassModalEmpreLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="PassModalEmpreLabel">
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

                {{-- Botón de eliminar --}}

                <button class="btn btn-danger btn-sm float-end" data-bs-toggle="modal"
                    data-bs-target="#cerrarCuentaModal" data-bs-toggle="tooltip" data-bs-placement="top"
                    title="Cerrar sesión" style="color: #F2F2F2;">
                    Cerrar cuenta
                </button>



                {{-- Modal Eliminar --}}
                <div class="modal fade" id="eliminarPlanModal" tabindex="-1" aria-labelledby="eliminarPlanModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="eliminarPlanModalLabel">
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
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal"
                                    data-bs-toggle="modal" data-bs-target="#eliminacionCorrectaModal">Eliminar</button>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
        </div>
    </section>
@endsection
