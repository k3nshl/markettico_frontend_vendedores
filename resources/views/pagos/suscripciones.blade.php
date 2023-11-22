@extends('plantilla')

@section('gestion_nombre', 'Suscripciones')

@section('contenido')

    <div class="mt-5">
        <div class="row ">

            <div class="col-xl-8 mx-auto">

                <div class="card border-top border-0 border-4 border-info">
                    <div class="card-body">


                        <div class="mb-4">

                            <h5 class="mi-card-title cursor-pointer">Nombre_Plan</h5>
                            <label for="" class="text-seconcary">Nombre_Vendedor</label>
                            <hr>

                        </div>


                        <div class="row text-center d-flex justify-content-center">

                            <div class="col-lg-6 col-md-12">
                                <p class="mx-3 float-start"><strong class="mx-2">Fecha de Adquisición:</strong> 22-12-2022</p>
                                <p class="mx-3 float-start"><strong class="mx-2">Fecha de Vencimiento:</strong> 22-12-2023</p>

                            </div>

                            <div class="col-lg-6 col-md-12">
                                <p class="mx-3 float-start"><strong class="mx-2">Estado:</strong> <span class="badge bg-success">Activo</span></p>

                                <p class="mx-3 float-start"><strong class="mx-2">Periodo de Gracia:</strong> 3 días</p>
                            </div>
                            <hr>
                        </div>

                        <div class="clearfix mt-3">
                            <p class="mx-3 float-end h5"><strong class="mx-2">Costo:</strong> <span class="badge bg-info"> 30.000</span></p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>


@endsection
