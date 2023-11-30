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
                                        title="Ver pedido">
                                        <i class="lni lni-eye" style="color: #F2F2F2; margin: 0 auto; display: block;"></i>
                                    </a>

                                    <a class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#editarPedidoModal" data-bs-toggle="tooltip" data-bs-placement="top"
                                        title="Editar Pedido">
                                        <i class="lni lni-pencil-alt"
                                            style="color: #F2F2F2; margin: 0 auto; display: block;"></i>
                                    </a>

                                    <a class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#cancelarPedidomodal"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Cancelar pedido">
                                        <i class="lni lni-trash"
                                            style="color: #F2F2F2; margin: 0 auto; display: block;"></i>
                                    </a>

                                </div>

                            </div>
                            <hr>
                        </div>

                        <!-- Modal de vizualizar -->

                        <div class="modal fade" id="showPedidoModal" tabindex="-1" aria-labelledby="showPedidoModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Información del pedido</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">

                                        <div class="row">
                                            <div class="col-md-5">
                                                <img src="assets/images/products/13.png" class="img-fluid" alt="...">
                                                <div class="row mb-3 row-cols-auto g-2 justify-content-center mt-3">

                                                    <div class="col"><img src="assets/images/products/11.png"
                                                            width="70" class="border rounded cursor-pointer"
                                                            alt=""></div>
                                                    <div class="col"><img src="assets/images/products/14.png"
                                                            width="70" class="border rounded cursor-pointer"
                                                            alt=""></div>
                                                    <div class="col"><img src="assets/images/products/15.png"
                                                            width="70" class="border rounded cursor-pointer"
                                                            alt=""></div>
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <h4 class="card-title">Nombre producto</h4>

                                                <div class="mb-3">
                                                    <p class="h4">
                                                        <span class="badge bg-info">$ 30.000</span>
                                                    </p>
                                                    <hr>

                                                </div>

                                                <div class="row">

                                                    <div class="col-lg-6 col-md-12">

                                                        <div class="text-right">
                                                            <p class="mb-0"><strong class="">Nombre del
                                                                    Cliente:</strong></p>
                                                            <p class="mt-0">Dayana Quiros Solano</p>
                                                        </div>

                                                        <div class="text-right">
                                                            <p class="mb-0"><strong class="">Cédula:</strong></p>
                                                            <p class="mt-0">702918819</p>
                                                        </div>

                                                        <div class="text-right">
                                                            <p class="mb-0"><strong class="">Email:</strong></p>
                                                            <p class="mt-0">Dayana@gmail.com</p>
                                                        </div>

                                                        <div class="text-right">
                                                            <p class="mb-0"><strong class="">Dirección:</strong>
                                                            </p>
                                                            <p class="mt-0">Siquirres</p>
                                                        </div>

                                                        <div class="text-right">
                                                            <p class="mb-0"><strong class="">Teléfono:</strong>
                                                            </p>
                                                            <p class="mt-0">89581920</p>
                                                        </div>


                                                    </div>

                                                    <div class="col-lg-6 col-md-12">

                                                        <div class="text-right">
                                                            <p class="mb-0"><strong class="">Cantidad:</strong>
                                                            </p>
                                                            <p class="mt-0">200</p>
                                                        </div>

                                                        <div class="text-right">
                                                            <p class="mb-0"><strong class="">Fecha de
                                                                    realización:</strong></p>
                                                            <p class="mt-0">22-12-2022</p>
                                                        </div>

                                                        <div class="text-right">
                                                            <p class="mb-0"><strong class="">Método de
                                                                    pago:</strong></p>
                                                            <p class="mt-0">Sinpe</p>
                                                        </div>

                                                        <div class="text-right">
                                                            <p class="mb-0"><strong class="">Método de
                                                                    envio:</strong></p>
                                                            <p class="mt-0">Correos Costa Rica</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <hr>

                                        <div class="row">

                                            <div class="col-lg-8 col-md-12">

                                                <div class="text-right">
                                                    <p class="mb-0"><strong class="">Descripción:</strong>
                                                    </p>
                                                    <p class="mt-0">Camisas de vestir: Diseñadas para ocasiones
                                                        formales, a menudo se usan con corbata.
                                                        Camisas informales: Más versátiles y adecuadas para
                                                        situaciones casuales.
                                                        Camisas de manga corta: Ideales para climas cálidos y
                                                        entornos informales.
                                                        2. Materiales:

                                                        Algodón: Común y cómodo, viene en varias variaciones como el
                                                        algodón pima y el algodón egipcio.
                                                        Lino: Ligero y transpirable, ideal para climas cálidos.
                                                        Seda: Lujo y suavidad, se utiliza a menudo en camisas de
                                                        vestir.
                                                        Mezclas: Combinaciones de materiales para obtener
                                                        propiedades específicas.</p>
                                                </div>

                                            </div>

                                            <div class="col-lg-4 col-md-12">


                                                <div class="clearfix mt-3">
                                                    <p class="mx-3  h6"><strong class="mx-2">Subtotal:</strong>
                                                        <span class="badge bg-info"> 30.000</span>
                                                    </p>
                                                    <p class="mx-3  h6"><strong class="mx-2">Total:</strong>
                                                        <span class="badge bg-info"> 30.000</span>
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

                        <!-- Modal de editar -->

                        <div class="modal fade" id="editarPedidoModal" tabindex="-1"
                            aria-labelledby="editarPedidoModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Editado el pedido de: Jessi</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>

                                    <form action="" method="POST">
                                        @method('post')
                                        @csrf

                                        <div class="modal-body">

                                            <div class="mb-4 mt-3">
                                                <label for="EstadoPedido" class="form-label">Seleccione un estado:</label>

                                                <select class="form-select colorImput" aria-label="Default select example"
                                                    name="estado">

                                                    <option value="1">Pendiente</option>
                                                    <option value="2">Finalizado</option>
                                                    <option value="3">Cancelado</option>
                                                </select>
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Regresar</button>
                                            <button type="submit" class="btn btn-info text-white"
                                                style="background-color: #04D9D9; border-color: #04D9D9;">
                                                <i class="bx bx-save" style="color: #F2F2F2;"></i>Actualizar

                                            </button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Modal de cancelar -->
                        <div class="modal fade" id="cancelarPedidomodal" tabindex="-1"
                            aria-labelledby="cancelarPedidomodalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="cancelarPedidomodalLabel">
                                            Confirmar
                                            cancelación</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        ¿Estás seguro de que
                                        deseas cancelar
                                        este pedido?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Regresar</button>
                                        <form action="" method="POST">
                                            @method('delete')
                                            @csrf
                                            <button type="button" class="btn btn-danger"
                                                data-bs-dismiss="modal">Cancelar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="clearfix mt-3">
                            <p class="mx-3 float-end h5"><strong class="mx-2">Total:</strong> <span
                                    class="badge bg-info">
                                    30.000</span></p>
                        </div>
                    </div>
                </div>

            </div>



        </div>
    </div>

@endsection
