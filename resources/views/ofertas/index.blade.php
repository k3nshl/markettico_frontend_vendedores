@extends('plantilla')

@section('gestion_nombre', 'Ofertas')

@section('contenido')


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-xl-3">
                            <div class="d-flex align-items-center">
                                <div>
                                    <i class="fadeIn animated bx bx-gift me-1 font-22 text-info"></i>
                                </div>
                                <h5 class="mb-0 text-dark" title="Agregar Anuncio">Lista de Ofertas</h5>
                            </div>
                        </div>
                        <div class="col-lg-9 col-xl-9 text-end">
                            <div class="me-2">
                                <button type="button" class="btn btn-info text-white" data-bs-toggle="modal"
                                    data-bs-target="#modalAgregarOferta"
                                    style="background-color: #04D9B2; border-color: #04D9D9;" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="Agregar Oferta">
                                    <i class='bx bxs-plus-square'></i> Agregar Oferta
                                </button>
                            </div>
                        </div>
                    </div>

                    {{-- Modal Registrar --}}
                    <div class="modal fade" id="modalAgregarOferta" tabindex="-1" aria-labelledby="modalAgregarOfertaLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalAgregarOfertaLabel">
                                        Registrar</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('ofertas.store') }}" method="POST">
                                        @csrf

                                        <div class="mb-3">
                                            <label for="id_producto_servicio" class="form-label">Producto</label>
                                            <select class="form-select" id="id_producto_servicio"
                                                name="id_producto_servicio">
                                                <option value="">Selecciona un producto</option>

                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label for="id_producto_servicio" class="form-label">Servicio</label>
                                            <select class="form-select" id="id_producto_servicio"
                                                name="id_producto_servicio">
                                                <option value="">Selecciona un servicio</option>

                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label for="fecha_inicio" class="form-label">Fecha de Inicio</label>
                                            <input type="date" class="form-control" id="fecha_inicio" name="fecha_inicio"
                                                required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="fecha_caducidad" class="form-label">Fecha de
                                                Caducidad</label>
                                            <input type="date" class="form-control" id="fecha_caducidad"
                                                name="fecha_caducidad" required>
                                        </div>

                                        <div class="mb-3">
                                            <label for="porcentaje_descuento" class="form-label">Porcentaje de
                                                Descuento</label>
                                            <input type="number" class="form-control" id="porcentaje_descuento"
                                                name="porcentaje_descuento" required>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Cerrar</button>
                                            <button type="button" class="btn btn-info text-white"
                                                style="background-color: #04D9D9; border-color: #04D9D9;">
                                                <i class="bx bx-save" style="color: #F2F2F2;"></i>
                                                Guardar
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5 product-grid">

        <!--Inicio card oferta-->
        <div class="col">
            <div class=" card mi-card">
                <img src="assets/images/products/01.png" class="mi-card-img-top" alt="...">

                <div class="card-body text-dark rounded-2" style="background-color: #04D9D9">
                    <h6 class="mi-card-title cursor-pointer">Silla bonita</h6>
                    <div class="clearfix">
                        <p class="mb-0 float-start"><strong>Stock</strong> 120</p>
                        <p class="mb-0 float-end fw-bold"><span>$240</span></p>
                    </div>

                </div>

                <div class="mi-overlay">

                    <a class="btn mi-btn text-center btn-sm" data-bs-toggle="modal" data-bs-target="#showOfertaModal"
                        data-bs-placement="top">
                        <i class="lni lni-eye" title="Visualizar oferta">
                        </i>
                    </a>
                    <a class="btn mi-btn text-center btn-sm" data-bs-toggle="modal" data-bs-target="#editarOfertaModal"
                        data-bs-placement="top">
                        <i class="bx bx-edit-alt" title="Editar oferta">
                        </i>
                    </a>

                    <a class="btn mi-btn text-center btn-sm" data-bs-toggle="modal" data-bs-target="#eliminarOferta"
                        data-bs-placement="top">
                        <i class="lni lni-trash" title="Eliminar oferta">
                        </i>
                    </a>

                </div>
            </div>
        </div>
        <!--Fin card oferta-->

        <!--Inicio modal show Oferta-->
        <div class="modal fade" id="showOfertaModal" tabindex="-1" aria-labelledby="showOfertaModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-lg">

                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Oferta</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="assets/images/products/13.png" class="img-fluid" alt="...">
                                <div class="row mb-3 row-cols-auto g-2 justify-content-center mt-3">
                                    <div class="col"><img src="assets/images/products/12.png" width="70"
                                            class="border rounded cursor-pointer sweezy-custom-cursor-hover"
                                            alt=""
                                            style="null;cursor: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAAAXNSR0IArs4c6QAABU5JREFUWEe9l2tsFFUUx//nzsy23RaKaZnStN3dCQWMaCAQCUFNMBalRqNgiR8sIjF+JNQYIdHEKGh8RB4JGu2GIBoiREQRISomysM14iOIPLQFO9N0+8BdGuhj233MXHN3ZrfLuttKNTvJZHf23rvnd/7n3HPuEPJcHo9nFWPsJSKaCaAdwHO6rn+eb/5kf6dcC71e7wpG7JNqWFjCEzhOMkIgyzTNxq6urqOTNZZrXU4ATdNOVXBr0XEMwc0IAxLhrrgbA6BvDMO4pxAAfQ1IVPmlUUCi5L06WoTvTNZhGIYIyf925VPg8jKWUFtdUYDZAM0RFwKJQgJIptpaEgMk2ACDCgKxQgIoptpaFk+HoPmqjMAoFTAERabaWp4AZJZUoTkkITBSSIBiS22tNMcU6GUIRFBABdxcba2yANlJwiAQGCwkQBlXW2u4rYBMaNaBwAAvnAINU7nq99reJwEuWghc5RxAD+d87/Dw8KZwODz4XwtCZh0oqqmpmd7d3d2jaVpvwzSo/pksHYKt3Rb6LaBtiOOHK5ZgOs85X22aphkMBtsARCcDkwTw+XwtRLQJwBTOeSeA6csqyO2fIzm7QKhg1wMoDAcuW3j61ChkUaTs6xqALbquvwLAuhEQ8nq9jxGjPbe5gYZphH1hoC8GNFQS/HPldAiSyegkpIDYfDaG6ikMikw49GcMv/QmQITdnPMdkUikPRQKDf0bEPL5fD+rLiw8OV+CixEuWYS7T8XROEOCf54yZjRlPAWS+exiWPf1EI78EYNIEiKMWpa10zTNDcFgcGQ8EAEQebiKlWyrlxyJCY0/xVFXSvAvdNkhyDbuJGYqQcV4OAHs/z2KqaUMx9qj+PK8CBFE97wXgJkPIgmwsloq2XKzkBtJY5svmega4fAvLs4dgsxwpGCyFNl+cgjbDl8DgT/Z2dm5Ky+Apmlt88pp9qeLXXbnkwlnI8COthj8d5ZkeC+UcBIxW5VsRSSCWcywYGMQgyP8qK7r942nwG4C1px70A13OskIfQlghtuRP9O7tMeiR2QkZmqOo6LQf60/hGNnIn2GYVTnBfB4PE0gtn/7kmKs8DhJl9PgWFEai73dqK4DcQ4wQskN+/rx8beDcV3XXXkBamtrS2RZ7l6gSjcdaCxLhyEzwXJ6mgsyZdz5bHk/hM+ODUYMwyjNCyAGvF7vGyanZw+vmop5laL4CG9zyJ+W2ZE+8zlt3FHExbDyxSB+bY+267o+ZyKAaiK6dHut4v6oqRxgGcmWGef0d3u3JCFTIcj0XiaMMMLcRy+KuvCBYRhrxgUQg5qmvRw3+fNvPVKOh2YX2QayZc6GyZI8vUsYYd/3g9i4tU9sw6bOzs4DEwKIXFAU5Te3jPqvWlTUlGUVoH8YEwrg+pwRcxghrhCWPtWB3r8SXbqui1N0fEIAMaG2tnaRoign6lW56OB61d6WqTtZI0Ro8sieNA5AIby+9wre2RMWJXmtYRi7xy3F2YM+n+8JAO/N97iwp6UKpS5m//F4Cecc3cWcQz8OYd0LQTAJXxiGcf9EDSnne4HP51sPYJtnukw7n6nGrEqnKybD4CRoZkgEoIvh3YP9eO3tyyCGCwDuMAzj6qQAxCLxcipJ0i5wXta8vByPL5+Geo/LbitJj21VrCKGE6eHsXVXCGcujECS6GQ0Gl3Z09MTnsi4GM+pQGphXV3dTFmWtwN4IBqzUKMquHVWMSqEIkQIheM4fS6C/gETisyucc5fNQzjzfG6XzbUuACpyZqmzbEsq4kxtpRzfgsRVThjIQBnOOdHGGMfdnR0iJPRDV1/A/S02zBdMZSwAAAAAElFTkSuQmCC&quot;) 6 3, pointer !important;">
                                    </div>
                                    <div class="col"><img src="assets/images/products/11.png" width="70"
                                            class="border rounded cursor-pointer" alt=""></div>
                                    <div class="col"><img src="assets/images/products/14.png" width="70"
                                            class="border rounded cursor-pointer" alt=""></div>
                                    <div class="col"><img src="assets/images/products/15.png" width="70"
                                            class="border rounded cursor-pointer" alt=""></div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h4 class="card-title"><span id="nombre">Nombre del producto en oferta</span></h4>
                                <div class="mb-3"><span class="price h4" id="precio">Precio</span></div>
                                <p class="card-text fs-6" id="descripcion">Descripción producto</p>

                                <dl class="row">
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-6">
                                                <dt>Categoría:</dt>
                                            </div>
                                            <div class="col-6">
                                                <dd id="id_categoria">Nombre Categoria</dd>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <dt>Subcategoría:</dt>
                                            </div>
                                            <div class="col-6">
                                                <dd id="id_subcategoria">Nombre Subcategoría</dd>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <dt>Tipo:</dt>
                                            </div>
                                            <div class="col-6">
                                                <dd id="tipo">Producto/Servicio</dd>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <dt>Estado:</dt>
                                            </div>
                                            <div class="col-6">
                                                <dd id="id_estado">
                                                    <span class="badge bg-success" id="">Aprobado</span>/
                                                    <span class="badge bg-danger" id="">Rechazado</span>
                                                </dd>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <dt>Fecha de Inicio:</dt>
                                            </div>
                                            <div class="col-6">
                                                <dd id="fecha_inicio">[Fecha de inicio]</dd>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <dt>Fecha de Caducidad:</dt>
                                            </div>
                                            <div class="col-6">
                                                <dd id="fecha_caducidad">[Fecha de caducidad]</dd>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <dt>Porcentaje de Descuento:</dt>
                                            </div>
                                            <div class="col-6">
                                                <dd id="porcentaje_descuento">[Porcentaje de descuento]</dd>
                                            </div>
                                        </div>
                                    </div>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Regresar</button>
                    </div>
                </div>
            </div>
        </div>



        <!--Fin modal show oferta-->


        {{-- Modal edit --}}
        <div class="modal fade" id="editarOfertaModal" tabindex="-1" role="dialog"
            aria-labelledby="editarOfertaModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editarOfertaModalLabel">Editar Oferta</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"
                            data-bs-toggle="tooltip" data-bs-placement="top" title="Cerrar"></button>
                    </div>

                    <div class="modal-body">
                        <form action="" method="POST">
                            @method('put')
                            @csrf

                            <div class="row mb-3">
                                <div class="col-sm">
                                    <label for="id_producto_servicio_edit" class="form-label">Producto:</label>
                                    <select class="form-select" id="id_producto_servicio_edit"
                                        name="id_producto_servicio">
                                        <option value="">Selecciona un producto</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-sm">
                                    <label for="id_producto_servicio_edit" class="form-label">Servicio:</label>
                                    <select class="form-select" id="id_producto_servicio_edit"
                                        name="id_producto_servicio">
                                        <option value="">Selecciona un servicio</option>

                                    </select>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="fecha_inicio_edit" class="form-label">Fecha de Inicio:</label>
                                <input type="date" class="form-control" id="fecha_inicio_edit" name="fecha_inicio"
                                    value="" required>
                            </div>

                            <div class="mb-3">
                                <label for="fecha_caducidad_edit" class="form-label">Fecha de Caducidad:</label>
                                <input type="date" class="form-control" id="fecha_caducidad_edit"
                                    name="fecha_caducidad" value="" required>
                            </div>

                            <div class="mb-3">
                                <label for="porcentaje_descuento_edit" class="form-label">Porcentaje de
                                    Descuento:</label>
                                <input type="number" class="form-control" id="porcentaje_descuento_edit"
                                    name="porcentaje_descuento" value="" required>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                <button type="button" class="btn btn-info text-white"
                                    style="background-color: #04D9D9; border-color: #04D9D9;">
                                    <i class="bx bx-save" style="color: #F2F2F2;"></i>
                                    Guardar
                                </button>
                            </div>
                        </form>
                    </div>


                </div>
            </div>
        </div>

        {{-- Fin modal edit --}}




        <!--Inicio modal elimina oferta-->
        <div class="modal fade" id="eliminarOferta" tabindex="-1" aria-labelledby="eliminarOfertaModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="eliminarOfertaModalLabel">
                            Confirmar
                            eliminación</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ¿Estás seguro de que
                        deseas eliminar
                        esta oferta?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <form action="" method="POST">
                            @method('delete')
                            @csrf
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Eliminar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--fin modal eliminar oferta-->


    </div><!--end row-->


@endsection
