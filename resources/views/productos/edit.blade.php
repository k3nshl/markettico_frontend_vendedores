@extends('plantilla')

@section('gestion_nombre', 'Editar-Producto')

@section('contenido')

    <div class="card">
        <div class="card-body p-4">
            <h5 class="card-title">Editando producto: Nombre_Producto</h5>
            <hr />
            <div class="form-body mt-4">

                <form action="" method="POST">
                    @method('post')
                    @csrf

                    <div class="row">
                        <div class="col-lg-8 mb-3">
                            <div class="border border-3 p-4 rounded">
                                <div class="mb-3">
                                    <label for="inputProductTitle" class="form-label">Nombre del producto o servicio</label>
                                    <input type="text" class="form-control" id="inputProductTitle"
                                        placeholder="Producto o Servicio" name="nombre">
                                </div>
                                <div class="mb-3">
                                    <label for="inputProductDescription" class="form-label">Descripción</label>
                                    <textarea class="form-control" id="summernoteResgitrarProductoServicio" rows="3" placeholder="Descripción"
                                        name="descripcion"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="inputProductDescription" class="form-label">Imagenes</label>
                                    <input id="image-uploadify" type="file" accept="image/*" multiple name="imagenes">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <div class="border border-3 p-4 rounded">
                        
                                <div class="row g-3">
                                    <div class="col-12">
                                        <label for="inputPrice" class="form-label">Precio</label>
                                        <input type="number" class="form-control" id="inputPrice" placeholder="00.00"
                                            name="precio">
                                    </div>

                                    <div class="col-12">
                                        <label for="inputVendor" class="form-label">Categoría</label>
                                        <select class="form-select" id="inputVendor">
                                            <option value="1">Categoria 1</option>
                                            <option value="2">Categoria 2</option>
                                            <option value="3">Categoria 3</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <label for="inputCollection" class="form-label">Subcategoría</label>
                                        <select class="form-select" id="inputCollection">
                                            <option value="1">Subcategoría 1</option>
                                            <option value="2">Subcategoría 2</option>
                                            <option value="3">Subcategoría 3</option>
                                        </select>
                                    </div>
                                    
                                   
                                    
                                    
                                </div>
                            </div>
                        </div>

                        <hr />

                        <div class="col-12">

                            <button type="submit" class="btn btn-info text-white float-end"
                                style="background-color: #04D9D9; border-color: #04D9D9;">
                                <i class="bx bx-save" style="color: #F2F2F2;"></i>
                                Actualizar
                            </button>

                        </div>

                    </div><!--end row-->

                </form>


            </div>
        </div>
    </div>




@endsection
