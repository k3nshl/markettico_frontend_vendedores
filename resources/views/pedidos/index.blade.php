@extends('plantilla')

@section('gestion_nombre', 'Lista de Pedidos')

@section('contenido')

    <div class="mt-5">
        <div class="row ">

            <div class="col-xl-6">

                <div class="card border-top border-0 border-4 border-info">
                    <div class="card-body">


                        <div class="mb-4">

                            <h5 class="mi-card-title cursor-pointer"># 1</h5>
                            <label for="" class="text-seconcary">Nombre_Comprador</label>
                            <hr>

                        </div>


                        <div class="row text-center d-flex justify-content-center">

                            <div class="col-lg-6 col-md-12">

                                <div class="text-center">
                                    <p class="mx-3"><strong class="mx-2">Fecha de Adquisición:</strong>
                                        22-12-2022
                                    </p>
                                </div>

                            </div>

                            <div class="col-lg-6 col-md-12">

                                <div class="text-center mb-3">

                                    <a class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#showPedidoModal" data-bs-toggle="tooltip" data-bs-placement="top"
                                        title="Editar Estado">
                                        <i class="lni lni-eye" style="color: #F2F2F2; margin: 0 auto; display: block;"></i>
                                    </a>

                                    <a class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#editarEstadoModal" data-bs-toggle="tooltip" data-bs-placement="top"
                                        title="Editar Estado">
                                        <i class="lni lni-pencil-alt"
                                            style="color: #F2F2F2; margin: 0 auto; display: block;"></i>
                                    </a>

                                    <a class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Editar Estado">
                                        <i class="lni lni-trash"
                                            style="color: #F2F2F2; margin: 0 auto; display: block;"></i>
                                    </a>

                                </div>

                                <!-- Modal de vizualizar -->
                                <div class="modal fade" id="showPedidoModal" tabindex="-1"
                                    aria-labelledby="showProductModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Información del pedido</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">

                                                <div class="row">

                                                    <div class="col-lg-6 col-md-12">

                                                        <div class="text-center">
                                                            <p class=""><strong class="mx-2">Fecha de
                                                                    Adquisición:</strong>
                                                                22-12-2022
                                                            </p>
                                                            <p class=""><strong class="mx-2">Fecha de
                                                                    Adquisición:</strong>
                                                                22-12-2022
                                                            </p>
                                                            <p class=""><strong class="mx-2">Fecha de
                                                                    Adquisición:</strong>
                                                                22-12-2022
                                                            </p>
                                                            <p class=""><strong class="mx-2">Fecha de
                                                                    Adquisición:</strong>
                                                                22-12-2022
                                                            </p>
                                                            <p class=""><strong class="mx-2">Fecha de
                                                                    Adquisición:</strong>
                                                                22-12-2022
                                                            </p>
                                                            <p class=""><strong class="mx-2">Fecha de
                                                                    Adquisición:</strong>
                                                                22-12-2022
                                                            </p>
                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6 col-md-12">

                                                        <div class="text-center">
                                                            <p class=""><strong class="mx-2">Fecha de
                                                                    Adquisición:</strong>
                                                                22-12-2022
                                                            </p>
                                                        </div>

                                                    </div>

                                                </div>



                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Regresar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <hr>
                        </div>

                        <div class="clearfix mt-3">
                            <p class="mx-3 float-end h5"><strong class="mx-2">Total:</strong> <span class="badge bg-info">
                                    30.000</span></p>
                        </div>
                    </div>
                </div>

            </div>



        </div>
    </div>

@endsection
