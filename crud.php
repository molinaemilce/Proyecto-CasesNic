<?php include 'includes/header.php' ?>

<!--crud-->
<div class="crud-noadmin">
    <a id="crud-admin">Ingresar como administrador para ver esta seccionsssssssssssssssssssssssssss!</a>
</div>
<aside class="crud">

    <!-- agregar nuevo producto -->
    <div class="row">
        <div class="col-2">
            <div class="boton-moodle">
                <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal">
                    Agregar un producto
                </button>
            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Nuevo Producto</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!--FORM-->
                            <form id="addProduct" action="">
                                <div class="mb-3 row">
                                    <label for="addProduct" class="col-md-3 form-label">Producto</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="addProduct" name="Producto">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="addPrecio" class="col-md-3 form-label">Precio</label>
                                    <div class="col-md-9">
                                        <input type="email" class="form-control" id="addPrecio" name="Precio">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="addStock" class="col-md-3 form-label">Stock</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="addStock" name="Stock">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="addDetalles" class="col-md-3 form-label">Detalles</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" id="addDetalles" name="Detalles">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="addImagen" class="col-md-3 form-label">Imagen</label>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control" id="customFile" />
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- barra de busqueda -->
        <div class="col-6">
            <div class="barra-busqueda">
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                </form>
            </div>
        </div>
        <div class="col-2">
            <div class="buscar-producto">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </div>
        </div>
    </div>


    <!-- lista de productos -->
    <table>
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Producto</th>
                <th scope="col">Precio</th>
                <th scope="col">Stock</th>
                <th scope="col">Detalles</th>
                <th scope="col">Imagen</th>
                <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
        <tr>
                <td scope="row">1</td>
                <td scope="row">FUNDA</td>
                <td scope="row">$ 1.000</td>
                <td scope="row">50</td>
                <td scope="row">SIN LOGO</td>
                <td scope="row"><img src="img/productos/1.jpg" height="100" width="80"></td>
                <td scope="row"><a href="#" type="button" class="btn btn-info btn-sm">Editar</a><a href="#" type="button" class="btn btn-danger btn-sm">Eliminar</a></td>
            </tr>
            <tr>
                <td scope="row">2</td>
                <td scope="row">Funda</td>
                <td scope="row">$ 1.000</td>
                <td scope="row">50</td>
                <td scope="row">SIN LOGO</td>
                <td scope="row"><img src="img/productos/2.jpg" height="100" width="80"></td>
                <td scope="row"><a href="#" type="button" class="btn btn-info btn-sm">Editar</a><a href="#" type="button" class="btn btn-danger btn-sm">Eliminar</a></td>
            </tr>
            <tr>
                <td scope="row">3</td>
                <td scope="row">Funda</td>
                <td scope="row">$ 1.200</td>
                <td scope="row">50</td>
                <td scope="row">SIN LOGO</td>
                <td scope="row"><img src="img/productos/3.jpg" height="100" width="80"></td>
                <td scope="row"><a href="#" type="button" class="btn btn-info btn-sm">Editar</a><a href="#" type="button" class="btn btn-danger btn-sm">Eliminar</a></td>
            </tr>
            <tr>
                <td scope="row">3</td>
                <td scope="row">Funda</td>
                <td scope="row">$ 1.600</td>
                <td scope="row">50</td>
                <td scope="row">SIN LOGO</td>
                <td scope="row"><img src="img/productos/4.jpg" height="100" width="80"></td>
                <td scope="row"><a href="#" type="button" class="btn btn-info btn-sm">Editar</a><a href="#" type="button" class="btn btn-danger btn-sm">Eliminar</a></td>
            </tr>
            <tr>
                <td scope="row">3</td>
                <td scope="row">Funda</td>
                <td scope="row">$ 2000</td>
                <td scope="row">50</td>
                <td scope="row">SIN LOGO</td>
                <td scope="row"><img src="img/productos/5.jpg" height="100" width="80"></td>
                <td scope="row"><a href="#" type="button" class="btn btn-info btn-sm">Editar</a><a href="#" type="button" class="btn btn-danger btn-sm">Eliminar</a></td>
            </tr>
        </tbody>
    </table>
    <!-- paginacion -->
    <div class="crud-paginas">
        <div class="lista-items">
            Mostrar
            <select name="c-items" id="c-items" class="c-items">
                <option value="5">5</option>
                <option value="10" selected>10</option>
                <option value="15">15</option>
            </select>
        </div>
        <div class="paginas">
            <ul>
                <li><span class="active">1</span></li>
                <li><button>2</button></li>
                <li><button>3</button></li>
                <li><span>...</span></li>
                <li><button>10</button></li>
            </ul>
        </div>
    </div>
</aside>
<!--crud-->

<?php include 'includes/footer.php' ?>