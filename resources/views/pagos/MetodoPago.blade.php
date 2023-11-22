@extends('plantilla')

@section('gestion_nombre', 'Metodos de pago')

@section('contenido')

    <div class="mt-5">
        <div class="row ">

            <div class="col-xl-7 mx-auto">

                <div class="card border-top border-0 border-4 border-info">
                    <div class="card-body">


                        <div class="text center">

                            <img src="../assets/images/paypal.png" class="rounded mx-auto d-block" alt="paypal.png"
                                style="width: 100px; height: 100px;">

                        </div>

                        <hr>

                        <div class="text-center d-flex justify-content-center mt-5 mb-3" >

                            <button class="btn btn-warning "
                                title="PayPal" style="color: #F2F2F2;">
                                <i class="lni lni-paypal-original"></i>Enlazar mi PayPal
                            </button>

                        </div>


                    </div>

                </div>

            </div>
        </div>


    @endsection
