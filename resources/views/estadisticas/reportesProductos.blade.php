@extends('plantilla')

@section('gestion_nombre', 'Reportes Productos')

@section('contenido')

    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card radius-10">
                    <div class="card-body">
                        <h4 class="header-title mb-4">Reporte De Productos</h4>

                        <!-- Formulario para personalizar el período -->
                        <form action="#" method="post" class="mb-4">
                            @csrf
                            <div class="row">
                         
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
                                <div class="col-md-3">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.7.3/dist/js/bootstrap.bundle.min.js"></script>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        var productosSelect = document.getElementById('productos');

        productosSelect.addEventListener('change', function() {
            var selectedProducto = productosSelect.value;
            
            // Asegúrate de que la opción seleccionada no sea la predeterminada
            if (selectedProducto !== "") {
                // Abre el modal
                $('#showEsperaModal').modal('show');
            }
        });
    });
</script>


<body>

    <label for="productos">Selecciona un producto:</label>
     <select id="productos"  class="form-control" required   >
     <option value="">Seleccione</option> 
      <option value="producto1">Producto 1</option> 
        <option value="producto2">Producto 2</option>
        <option value="producto3">Producto 3</option>
        <option value="producto4">Producto 4</option>
    </select>

   
                                    

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
                                                                                    Visualizar reporte </h5>
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
                                                                                        <label for="costo"
                                                                                            class="col-sm-4 col-form-label">Cantidad de visualizaciones:</label>
                                                                                    </div>

                                                                                    <div class="row mb-3">
                                                                                        <label for="costo"
                                                                                            class="col-sm-4 col-form-label">Ventas generadas:</label>
                                                                                    </div>

                                                                                    <div class="row mb-3">
                                                                                        <label for="costo"
                                                                                            class="col-sm-4 col-form-label">Reseñas:</label>
                                                                                    </div>

                                                                                </form>
                                                                            </div>

                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                    class="btn btn-secondary"
                                                                                    data-bs-dismiss="modal">Regresar</button>
                                                                                    
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
                        </form>

                        <!-- Gráfico o tabla de historial de ventas -->
                        <div class="card radius-10">
                            <div class="card-body">
                                <p class="visually-hidden">Historial de Productos</p>
                                <div id="list-subscribers"></div>
                            </div>
                        </div>


                        <div class="row align-items-end mt-auto">
                            <div class="col-md-10 mt-4">
                                <!-- Ventas totales -->
                                <h5>Cantidad de productos vendidos: <span class="text-primary">14</span></h5>

                            </div>
                        
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/dashboard-digital-marketing.js"></script>
        <script src="assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
    </section>
@endsection
