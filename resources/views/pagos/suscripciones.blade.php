@extends('plantilla')

@section('gestion_nombre', 'Suscripciones')

@section('contenido')

    <div class="mt-5">
        <div class="row ">
            <div class="col-2"></div>

            <div class="col-8">

                <div class="card">
                    <div class="card-body">


                        <div class="mb-4">

                            <h5 class="mi-card-title cursor-pointer">Nombre_Plan</h5>
                            <label for="" class="text-seconcary">Nombre_Vendedor</label>
                            <hr>

                        </div>


                        <div class="row text-center d-flex justify-content-center">

                            <div class="col">
                                <p class="mx-3 float-start"><strong>Fecha de Adquisición:</strong> 22-12-2022</p>
                                <p class="mx-3 float-start"><strong>Fecha de Vencimiento:</strong> 22-12-2023</p>

                            </div>

                            <div class="col">
                                <p class="mx-3 float-start"><strong>Estado:</strong> Activo</p>

                                <p class="mx-3 float-start"><strong>Periodo de Gracia:</strong> 3 días</p>
                            </div>
                            <hr>
                        </div>

                        <div class="clearfix mt-3">
                            <p class="mx-3 float-end"><strong>Costo:</strong> 30.000</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-2"></div>

        </div>
    </div>


@endsection
