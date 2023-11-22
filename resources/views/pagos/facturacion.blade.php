@extends('plantilla')

@section('gestion_nombre', 'Historial-Facturación')

@section('contenido')

    <div class="card">
        <div class="card-body">

            <div class="d-flex justify-content-between align-items-end mb-3">
                <h5 class="text-dark"><i class="lni lni-agenda me-2 font-22 text-info"></i>Historial de Facturas
                </h5>
            </div>

            <hr />
            <div class="table-responsive">
                <table id="tablaHistorialFacturas" class="table table-bordered">
                    <thead class="theadHistorialFacturas">
                        <tr>
                            <th class="bg_datatable" style="background-color: #05C7F2; color: #F2F2F2">ID</th>
                            <th class="bg_datatable" style="background-color: #05C7F2; color: #F2F2F2">Subscripción</th>
                            <th class="bg_datatable" style="background-color: #05C7F2; color: #F2F2F2">Estado
                            </th>
                            <th class="bg_datatable" style="background-color: #05C7F2; color: #F2F2F2">Fecha que pagó
                            </th>
                            <th class="bg_datatable" style="background-color: #05C7F2; color: #F2F2F2">Próximo pago</th>
                            <th class="bg_datatable" style="background-color: #05C7F2; color: #F2F2F2">Costo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>EjemploSubcripcion</td>
                            <td>Activo</td>
                            <td>22-11-2023</td>
                            <td>22-12-2024</td>
                            <td>10.000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection
