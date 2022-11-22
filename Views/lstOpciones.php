<!DOCTYPE HTML>
<html lang="es">

<head>
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js" integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Prueba técnica</title>
</head>

<body>
    <div class="container">
        <br>
        <div class="text-center">
            <button type="button" id="btnPunto1" class="btn btn-primary">Punto 1</button>
            <button type="button" id="btnPunto2" class="btn btn-primary">Punto 2</button>
            <button type="button" id="btnPunto3" class="btn btn-primary">Punto 3</button>
            <button type="button" id="btnPunto4" class="btn btn-primary">Punto 4</button>
            <button type="button" id="btnPunto5" class="btn btn-primary">Punto 5</button>
        </div>
        <br>

        <!-- Modal de punto 1 -->
        <div class="modal" tabindex="-1" id="modalPunto1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Punto 1</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="formCalcularPunto1" method="post">
                        <div class="modal-body">
                            <p>Ingrese array separado por comas, ejemplo: 1,2,3,4..</p>

                            <div class="form-group row">

                                <label for="inputPassword" class="col-sm-2 col-form-label">Array</label>
                                <div class="col-sm-10">
                                    <input type="text" name="arrayPunto1" class="form-control">
                                </div>
                            </div>
                            <p id="totalPunto1"></p>
                            <input type="hidden" name="method" value="opcion1">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Calcular</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Modal de punto 2 -->
        <div class="modal" tabindex="-1" id="modalPunto2">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Punto 2</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="formCalcularPunto2" method="post">
                        <div class="modal-body">
                            <div class="form-group row">

                                <label for="numberOpcion2" class="col-sm-2 col-form-label">Num 1</label>
                                <div class="col-sm-10">
                                    <input type="number" name="num1" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">

                                <label for="number2opcion2" class="col-sm-2 col-form-label">Num 2</label>
                                <div class="col-sm-10">
                                    <input type="number" name="num2" class="form-control">
                                </div>
                            </div>
                            <p id="totalPunto2"></p>
                            <input type="hidden" name="method" value="opcion2">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Calcular</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Modal de punto 3 -->
        <div class="modal" tabindex="-1" id="modalPunto3">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Punto 3</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="formCalcularPunto3" method="post">
                        <div class="modal-body">
                            <p>Ingrese la hora con minutos con el siguiente formato, ejemplo: 12:45</p>

                            <div class="form-group row">
                                <label for="inputPassword" class="col-sm-2 col-form-label">Hora y minutos</label>
                                <div class="col-sm-10">
                                    <input type="text" name="horaMinutos" class="form-control">
                                </div>
                            </div>
                            <p id="totalPunto3"></p>
                            <input type="hidden" name="method" value="opcion3">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Calcular</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Modal de punto 4 -->
        <div class="modal" tabindex="-1" id="modalPunto4">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Punto 4</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="formCalcularPunto4" method="post">
                        <div class="modal-body">
                            <div class="form-group row">
                                <label for="fila" class="col-sm-2 col-form-label">Tamaño fila</label>
                                <div class="col-sm-10">
                                    <input type="number" name="fila" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="columna" class="col-sm-2 col-form-label">Tamaño de columna</label>
                                <div class="col-sm-10">
                                    <input type="number" name="columna" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="i" class="col-sm-2 col-form-label">Valor i</label>
                                <div class="col-sm-10">
                                    <input type="number" name="i" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="j" class="col-sm-2 col-form-label">Valor j</label>
                                <div class="col-sm-10">
                                    <input type="number" name="j" class="form-control">
                                </div>
                            </div>
                            <p id="totalPunto4"></p>
                            <input type="hidden" name="method" value="opcion4">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-primary">Calcular</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    <script src="/prueba_domina/js/opciones.js"></script>

</body>

</html>