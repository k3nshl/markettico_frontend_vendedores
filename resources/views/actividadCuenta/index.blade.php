@extends('plantilla')

@section('gestion_nombre', 'Actividad/Cuenta')

@section('contenido')

    <section class="content">
        <div class="row">
            <div class="col-xl-10 mx-auto">
                <div class="card border-top border-0 border-4 border-info" style="margin: 5%">
                    <div class="card-body">


                        <div class="tab-content">

                           

                            <div class="tab-pane  show active fade" id="tab-historial">
                                <div class="row justify-content-center align-items-center">
                                    <div class="col">
                                        <div class="border p-3 rounded">

                                            <div class="d-flex justify-content-between align-items-end mb-3">
                                                <h5 class="text-dark"><i
                                                        class="lni  me-2 font-22 text-info"></i>Historial Cuenta
                                               
                                                </h5>
                                            </div>

                                            <hr />
                                            <div class="table-responsive">
                                                <table id="tablaProductosEspera" class="table table-bordered">
                                                    <thead class="theadHistorial">
                                                        <tr>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">ID</th>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">Nombre del
                                                         Usuario</th>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">Tipo Usuario
                                                            </th>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">Ubicación
                                                            </th>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">Dispositivo
                                                            </th>
                                                            <th class="bg_datatable"
                                                                style="background-color: #05C7F2; color: #F2F2F2">Fecha y Hora
                                                            </th>
                                                          
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Ariana Hernández</td>
                                                            <td>Individual</td>
                                                            <td>Limón centro</td>
                                                            <td>Iphone 11</td>
                                                            <td>20/11/2023 10:16 am</td>
                                                           
                                                      
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
