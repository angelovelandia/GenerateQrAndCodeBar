    <div id="content">
          <section class="py-3">
             <div class="mr-5 ml-3">
                <div class="row">
                    <div class="col-lg-10">
                        <h1 class="font-weight-bold mb-0">Generaci&oacute;n de c&oacute;digos de barras</h1>
                        <p class="lead text-muted">Revisa la &uacute;ltima informaci&oacute;n</p>                 
                    </div>
                </div>
             </div>
          </section>

        <section class="bg py-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h5>Ingrese el producto</h5>
                                    <input type="text" name="contentCodBar" id="contentCodBar" class="form-control" placeholder="Escriba aqu&iacute;" />
                                </div>
                                <div class="col-lg-6">
                                    <h5>&nbsp;</h5>
                                    <button type="button" id="generateCodeBar" class="btn btn-danger"><i class="fas fa-chess-board"></i> Registrar</button>
                                </div>
                            </div>
                            <br>
                            <br>
                            <div class="text-nowrap">
                                <table  class="table" id="tablaCodebar">
                                    <thead style="color:white;" class="bg-primary">
                                        <tr>
                                            <th>Id</th>
                                            <th>Nombre</th>
                                            <th>C&oacute;digo de barras</th>
                                            <th>Fecha registro</th>
                                            <th>Generar</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                    
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Modal imagen codebar -->
    <div class="modal fade" id="modalImgCodebar" tabindex="-1" role="dialog" aria-labelledby="modalImgCodebarTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalImgCodebarTitle">Este es tu c&oacute;digo de barras</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="text-center">
                    <img id="codeEndGenerate" alt="">
                </div>
            </div>
            <div class="modal-footer">
                <small>Para descargar la imagen haz clic sobre ella</small>
            </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="assets/classes/js/views/codBar.js"></script>