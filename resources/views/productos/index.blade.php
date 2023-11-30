@extends('plantilla')

@section('gestion_nombre', 'Productos')

@section('contenido')


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-xl-3">
                            <a href="{{ route('productos.create') }}" class="btn mb-3 mb-lg-0 text-light"
                                style="background-color: #04D9B2"><i class='bx bxs-plus-square'></i>Agregar Producto</a>
                        </div>
                        <div class="col-lg-9 col-xl-9">
                            <form class="float-lg-end">
                                <div class="row row-cols-lg-auto g-2">
                                    <div class="col-12">
                                        <div class="position-relative">
                                            <input type="text" class="form-control ps-5" placeholder="Buscar producto">
                                            <span class="position-absolute top-50 product-show translate-middle-y"><i
                                                    class="bx bx-search"></i></span>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="btn-group" role="group"
                                            aria-label="Button group with nested dropdown">
                                            <button type="button" class="btn btn-white">Ordenar por</button>
                                            <div class="btn-group" role="group">
                                                <button id="btnGroupDrop1" type="button"
                                                    class="btn btn-white dropdown-toggle dropdown-toggle-nocaret px-1"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class='bx bx-chevron-down'></i>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                    <li><a class="dropdown-item" href="#">Aprobados</a></li>
                                                    <li><a class="dropdown-item" href="#">Rechazados</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="btn-group" role="group"
                                            aria-label="Button group with nested dropdown">
                                            <button type="button" class="btn btn-white">Tipo</button>
                                            <div class="btn-group" role="group">
                                                <button id="btnGroupDrop1" type="button"
                                                    class="btn btn-white dropdown-toggle dropdown-toggle-nocaret px-1"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class='bx bxs-category'></i>
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                    <li><a class="dropdown-item" href="#">Producto</a></li>
                                                    <li><a class="dropdown-item" href="#">Servicio</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="btn-group" role="group">
                                            <button type="button" class="btn btn-white">Rango de precio</button>
                                            <div class="btn-group" role="group">
                                                <button id="btnGroupDrop1" type="button"
                                                    class="btn btn-white dropdown-toggle dropdown-toggle-nocaret px-1"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class='bx bx-slider'></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-start"
                                                    aria-labelledby="btnGroupDrop1">
                                                    <li><a class="dropdown-item" href="#">Mayor a menor</a></li>
                                                    <li><a class="dropdown-item" href="#">Menor a mayor</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5 product-grid">

        <!--Inicio card producto-->
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

                    <a class="btn mi-btn btn-sm" data-bs-toggle="modal" data-bs-target="#showProductModal"
                        data-bs-toggle="tooltip" data-bs-placement="top" title="Ver producto">
                        <i class="lni lni-eye" style="color: #F2F2F2; margin: 0 auto; display: block;"></i>
                    </a>

                    <a class="btn mi-btn btn-sm" title="Editar producto" href="{{ route('productos.edit', 1) }}">
                        <i class="lni lni-pencil-alt" style="color: #F2F2F2; margin: 0 auto; display: block;"></i>
                    </a>

                    <a class="btn mi-btn btn-sm" data-bs-toggle="modal" data-bs-target="#eliminarProducto"
                        data-bs-toggle="tooltip" data-bs-placement="top" title="Eliminar producto">
                        <i class="lni lni-trash" style="color: #F2F2F2; margin: 0 auto; display: block;"></i>
                    </a>

                </div>


            </div>
        </div>
        <!--Fin card producto-->

        <!--Inicio modal show producto-->
        <div class="modal fade" id="showProductModal" tabindex="-1" aria-labelledby="showProductModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Producto X/Servicio X</h5>
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
                                <h4 class="card-title">Nombre producto</h4>

                                <div class="mb-3">
                                    <span class="price h4">Precio</span>

                                </div>
                                <p class="card-text fs-6">Descripcion producto</p>
                                <dl class="row">
                                    <dt class="col-sm-3">Categoria</dt>
                                    <dd class="col-sm-9">Nombre Categoria</dd>

                                    <dt class="col-sm-3">Subcategoria</dt>
                                    <dd class="col-sm-9">Nombre Subcategoria</dd>

                                    <dt class="col-sm-3">Tipo</dt>
                                    <dd class="col-sm-9">Producto/Servicio</dd>

                                    <dt class="col-sm-3">Estado</dt>
                                    <dd class="col-sm-9"><span class="badge bg-success">Aprobado</span>/<span
                                            class="badge bg-danger">Rechazado</span></dd>
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
        <!--Fin modal show producto-->

        <!--Inicio modal eliminar-->
        <div class="modal fade" id="eliminarProducto" tabindex="-1" aria-labelledby="eliminarProductoModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="eliminarProductoModalLabel">
                            Confirmar
                            eliminación</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ¿Estás seguro de que
                        deseas eliminar
                        este producto?
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
        <!--fin modal edit producto-->


    </div><!--end row-->





@endsection
