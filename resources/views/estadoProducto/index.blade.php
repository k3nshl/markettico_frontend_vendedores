@extends('plantilla')

@section('gestion_nombre', 'Estado/Productos')

@section('contenido')

    <section class="content">
        <div class="row">
            <div class="col-xl-10 mx-auto">
                <div class="card border-top border-0 border-4 border-info" style="margin: 5%">
                    <div class="card-body">

                        <ul class="nav nav-pills mb-3" role="tablist">
                            <li class="nav-item">
                                <button class="nav-link active custom-bg-color" data-bs-toggle="tab"
                                    data-bs-target="#tab-espera">
                                    <i class=></i> Productos

                                </button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link custom-bg-color" data-bs-toggle="tab"
                                    data-bs-target="#tab-aprobados">
                                    <i class=""></i> Servicios
                                </button>
                            </li>
                        
                        </ul>

                        <div class="tab-content">

                            <!-- tab-Espera -->

                            <div class="tab-pane  show active fade" id="tab-espera">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col">
                                        <div class="border p-3 rounded">

                                            <div class="d-flex justify-content-between align-items-end mb-3">
                                                <h5 class="text-dark"><i
                                                        class="lni  me-2 font-22 text-info"></i>Estado Productos
                                               
                                                </h5>
                                            </div>

                                            <hr />
                                            <div class="table-responsive">
                                                <table id="tablaProductosEspera" class="table table-bordered">
                                                    <thead class="theadProductosEspera">
                                                        <tr>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">ID</th>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">Nombre del
                                                                producto</th>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">Estado
                                                            </th>
                                                          
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">Ver</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>EjemploProducto</td>
                                                            <td>Aprobado</td>
                                                           
                                                            <td>
                                                                <div class="text-center">

                                                                    {{-- Botón de Visualizar --}}
                                                                    <button class="btn btn-primary btn-sm"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#showEsperaModal"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        title="Visualizar">
                                                                        <div class="text-center">
                                                                            <i class="lni lni-eye"
                                                                                style="color: #FFFFFF; margin: 0 auto; display: block;"></i>
                                                                        </div>
                                                                    </button>

                                                                </div>

                                                                <!-- Modal de visualizacion -->
                                                                <div class="modal fade" id="showEsperaModal"
                                                                    data-backdrop="static" data-keyboard="false"
                                                                    tabindex="-1" aria-labelledby="showUserModalLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-scrollable">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="showPlanModalLabel">
                                                                                    Visualizar producto </h5>
                                                                                <button type="button" class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"
                                                                                    data-bs-toggle="tooltip"
                                                                                    data-bs-placement="top"
                                                                                    title="Cerrar"></button>
                                                                            </div>

                                                                            <div class="modal-body">
                                                                                <form>
                                                                                    <div class="row mb-3">
                                                                                        <label for="nombre"
                                                                                            class="col-sm-4 col-form-label">Nombre
                                                                                            del producto: 
                                                                                        </label>
                                                                                    </div>

                                                                                    <div class="row mb-3">
                                                                                        <label for="tipo"
                                                                                            class="col-sm-4 col-form-label">Descripción:</label>
                                                                                    </div>


                                                                                    <div class="row mb-3">
                                                                                        <label for="costo"
                                                                                            class="col-sm-4 col-form-label">Precio:</label>
                                                                                    </div>

                                                                                    <div class="row mb-3">
                                                                                        <label for="costo"
                                                                                            class="col-sm-4 col-form-label">Estado:</label>
                                                                                    </div>

                                                                                    <div class="row mb-3">
                                                                                        <label for="costo"
                                                                                            class="col-sm-4 col-form-label">Vendedor:</label>
                                                                                    </div>

                                                                                    <div class="row mb-3">
                                                                                        <label for="costo"
                                                                                            class="col-sm-4 col-form-label">Categoria:</label>
                                                                                    </div>

                                                                                    <div class="row mb-3">
                                                                                        <label for="costo"
                                                                                            class="col-sm-4 col-form-label">Subcategoria:</label>
                                                                                    </div>

                                                                                    <div class="row mb-3">
                                                                                        <label for="costo"
                                                                                            class="col-sm-4 col-form-label">Experiencia:</label>
                                                                                    </div>

                                                                                    <div class="row mb-3">
                                                                                        <label for="costo"
                                                                                            class="col-sm-4 col-form-label">Titulo
                                                                                            profesional:</label>
                                                                                    </div>

                                                                                    <div class="row mb-3">
                                                                                        <label for="costo"
                                                                                            class="col-sm-4 col-form-label">Teléfono:</label>
                                                                                    </div>

                                                                                    <div class="row mb-3">
                                                                                        <label for="costo"
                                                                                            class="col-sm-4 col-form-label">Dirección:</label>
                                                                                    </div>

                                                                                    <div class="row mb-3">
                                                                                        <label for="costo"
                                                                                            class="col-sm-4 col-form-label">Email:</label>
                                                                                    </div>

                                                                                </form>
                                                                            </div>

                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-bs-dismiss="modal">Regresar</button>
                                                                              
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                           
                                                            </td>
                                                        </tr>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>EjemploProducto</td>
                                                            <td >Espera</td>
                                                           
                                                            <td>
                                                                <div class="text-center">

                                                                    {{-- Botón de Visualizar --}}
                                                                    <button class="btn btn-primary btn-sm"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#showEsperaModal"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        title="Visualizar">
                                                                        <div class="text-center">
                                                                            <i class="lni lni-eye"
                                                                                style="color: #FFFFFF; margin: 0 auto; display: block;"></i>
                                                                        </div>
                                                                    </button>

                                                                </div>

                                                                <!-- Modal de visualizacion -->
                                                                <div class="modal fade" id="showEsperaModal"
                                                                    data-backdrop="static" data-keyboard="false"
                                                                    tabindex="-1" aria-labelledby="showUserModalLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-scrollable">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="showPlanModalLabel">
                                                                                    Visualizar producto </h5>
                                                                                <button type="button" class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"
                                                                                    data-bs-toggle="tooltip"
                                                                                    data-bs-placement="top"
                                                                                    title="Cerrar"></button>
                                                                            </div>

                                                                            <div class="modal-body">
                                                                                <form>
                                                                                    <div class="row mb-3">
                                                                                        <label for="nombre"
                                                                                            class="col-sm-4 col-form-label">Nombre
                                                                                            del producto: 
                                                                                        </label>
                                                                                    </div>

                                                                                    <div class="row mb-3">
                                                                                        <label for="tipo"
                                                                                            class="col-sm-4 col-form-label">Descripción:</label>
                                                                                    </div>


                                                                                    <div class="row mb-3">
                                                                                        <label for="costo"
                                                                                            class="col-sm-4 col-form-label">Precio:</label>
                                                                                    </div>

                                                                                    <div class="row mb-3">
                                                                                        <label for="costo"
                                                                                            class="col-sm-4 col-form-label">Estado:</label>
                                                                                    </div>

                                                                                    <div class="row mb-3">
                                                                                        <label for="costo"
                                                                                            class="col-sm-4 col-form-label">Vendedor:</label>
                                                                                    </div>

                                                                                    <div class="row mb-3">
                                                                                        <label for="costo"
                                                                                            class="col-sm-4 col-form-label">Categoria:</label>
                                                                                    </div>

                                                                                    <div class="row mb-3">
                                                                                        <label for="costo"
                                                                                            class="col-sm-4 col-form-label">Subcategoria:</label>
                                                                                    </div>

                                                                                    <div class="row mb-3">
                                                                                        <label for="costo"
                                                                                            class="col-sm-4 col-form-label">Experiencia:</label>
                                                                                    </div>

                                                                                    <div class="row mb-3">
                                                                                        <label for="costo"
                                                                                            class="col-sm-4 col-form-label">Titulo
                                                                                            profesional:</label>
                                                                                    </div>

                                                                                    <div class="row mb-3">
                                                                                        <label for="costo"
                                                                                            class="col-sm-4 col-form-label">Teléfono:</label>
                                                                                    </div>

                                                                                    <div class="row mb-3">
                                                                                        <label for="costo"
                                                                                            class="col-sm-4 col-form-label">Dirección:</label>
                                                                                    </div>

                                                                                    <div class="row mb-3">
                                                                                        <label for="costo"
                                                                                            class="col-sm-4 col-form-label">Email:</label>
                                                                                    </div>

                                                                                </form>
                                                                            </div>

                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-bs-dismiss="modal">Regresar</button>
                                                                              
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                           
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- tab-Aprobados -->

                            <div class="tab-pane fade" id="tab-aprobados">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col">
                                        <div class="border p-3 rounded">

                                            <div class="d-flex justify-content-between align-items-end mb-3">
                                                <h5 class="text-dark"><i
                                                        class="fadeIn animated bx  me-2 font-22 text-info"></i>Estado Servicios
                                                  
                                                </h5>
                                            </div>

                                            <hr />
                                            <div class="table-responsive">
                                                <table id="tablaProductosAprobados" class="table table-bordered">
                                                    <thead class="theadProductosAprobados">
                                                        <tr>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">ID</th>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">Nombre del
                                                                producto</th>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">Estado
                                                            </th>
                                                          
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">Ver</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>EjemploProducto</td>
                                                            <td>Rechazado</td>
                                                          
                                                            <td>
                                                                <div class="text-center">

                                                                    {{-- Botón de Visualizar --}}
                                                                    <button class="btn btn-primary btn-sm"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#showAprobadosModal"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        title="Visualizar">
                                                                        <div class="text-center">
                                                                            <i class="lni lni-eye"
                                                                                style="color: #FFFFFF; margin: 0 auto; display: block;"></i>
                                                                        </div>
                                                                    </button>

                                                                </div>

                                                                <!-- Modal de visualizacion -->
                                                                <div class="modal fade" id="showAprobadosModal"
                                                                    data-backdrop="static" data-keyboard="false"
                                                                    tabindex="-1" aria-labelledby="showUserModalLabel"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog modal-dialog-scrollable">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="showPlanModalLabel">
                                                                                    Visualizar servicio</h5>
                                                                                <button type="button" class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"
                                                                                    data-bs-toggle="tooltip"
                                                                                    data-bs-placement="top"
                                                                                    title="Cerrar"></button>
                                                                            </div>

                                                                            <div class="modal-body">
                                                                                <form>
                                                                                    <div class="row mb-3">
                                                                                        <label for="nombre"
                                                                                            class="col-sm-4 col-form-label">Nombre
                                                                                            del producto: 
                                                                                        </label>
                                                                                    </div>

                                                                                    <div class="row mb-3">
                                                                                        <label for="tipo"
                                                                                            class="col-sm-4 col-form-label">Descripción:</label>
                                                                                    </div>


                                                                                    <div class="row mb-3">
                                                                                        <label for="costo"
                                                                                            class="col-sm-4 col-form-label">Precio:</label>
                                                                                    </div>

                                                                                    <div class="row mb-3">
                                                                                        <label for="costo"
                                                                                            class="col-sm-4 col-form-label">Estado:</label>
                                                                                    </div>

                                                                                    <div class="row mb-3">
                                                                                        <label for="costo"
                                                                                            class="col-sm-4 col-form-label">Vendedor:</label>
                                                                                    </div>

                                                                                    <div class="row mb-3">
                                                                                        <label for="costo"
                                                                                            class="col-sm-4 col-form-label">Categoria:</label>
                                                                                    </div>

                                                                                    <div class="row mb-3">
                                                                                        <label for="costo"
                                                                                            class="col-sm-4 col-form-label">Subcategoria:</label>
                                                                                    </div>

                                                                                    <div class="row mb-3">
                                                                                        <label for="costo"
                                                                                            class="col-sm-4 col-form-label">Experiencia:</label>
                                                                                    </div>

                                                                                    <div class="row mb-3">
                                                                                        <label for="costo"
                                                                                            class="col-sm-4 col-form-label">Titulo
                                                                                            profesional:</label>
                                                                                    </div>

                                                                                    <div class="row mb-3">
                                                                                        <label for="costo"
                                                                                            class="col-sm-4 col-form-label">Teléfono:</label>
                                                                                    </div>

                                                                                    <div class="row mb-3">
                                                                                        <label for="costo"
                                                                                            class="col-sm-4 col-form-label">Dirección:</label>
                                                                                    </div>

                                                                                    <div class="row mb-3">
                                                                                        <label for="costo"
                                                                                            class="col-sm-4 col-form-label">Email:</label>
                                                                                    </div>

                                                                                </form>
                                                                            </div>

                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-bs-dismiss="modal">Regresar</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>



                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                           

                        </div>
                    </div>
                </div>
            </div>
    </section>

@endsection
