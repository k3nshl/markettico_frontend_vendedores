@extends('plantilla')

@section('gestion_nombre', 'Perfil Empresarial')

@section('contenido')

    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card radius-10">
                    <div class="card-body">
                        <h4 class="header-title mb-4">Historial de Ventas Generales</h4>

                        <!-- Formulario para personalizar el período -->
                        <form action="#" method="post" class="mb-4">
                            @csrf
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="fecha_inicio">Fecha de Inicio:</label>
                                    <input type="date" name="fecha_inicio" class="form-control" required>
                                </div>
                                <div class="col-md-3">
                                    <label for="fecha_fin">Fecha de Fin:</label>
                                    <input type="date" name="fecha_fin" class="form-control" required>
                                </div>
                                <div class="col-md-3">
                                    <label for="frecuencia">Frecuencia:</label>
                                    <select name="frecuencia" class="form-control" required>
                                        <option value="diaria">Diariamente</option>
                                        <option value="semanal">Semanalmente</option>
                                        <option value="quincenal">Cada 15 días</option>
                                        <option value="mensual">Cada 30 días</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <button type="submit" class="btn btn-primary mt-3"
                                        style="background-color: #04D9B2; border-color: #04D9B2;">Generar
                                        Estadística</button>

                                </div>

                            </div>
                        </form>

                        <!-- Gráfico o tabla de historial de ventas -->
                        <div class="card radius-10">
                            <div class="card-body">
                                <p class="visually-hidden">Historial de Ventas</p>
                                <div id="list-subscribers"></div>
                            </div>
                        </div>


                        <div class="row align-items-end mt-auto">
                            <div class="col-md-10 mt-4">
                                <!-- Ventas totales -->
                                <h5>Monto total de ventas: <span class="text-primary">30</span></h5>
                                <h5>Productos vendidos: <span class="text-primary">3</span></h5>
                                <h5>Total de ventas de productos: <span class="text-primary">500</span></h5>
                            </div>
                            <div class="col-md-2 mt-4">
                                <div class="d-flex justify-content-end">
                                    <a href="#" class="btn btn-danger me-2">
                                        <i class="bx bxs-file-pdf"></i>
                                    </a>
                                    <a href="#" class="btn btn-success">
                                        <i class="bx bxs-calculator"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Asegúrate de incluir las bibliotecas y scripts necesarios -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/dashboard-digital-marketing.js"></script>
        <script src="assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
    </section>
@endsection
