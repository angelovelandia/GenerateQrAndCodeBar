<div id="content">
          <!-- Inicio de bienvenida  -->
          <section class="py-3">
             <div class="mr-5 ml-3">
                <div class="row">
                    <div class="col-lg-10">
                        <h1 class="font-weight-bold mb-0">Bienvenido</h1>
                        <p class="lead text-muted">Revisa la &uacute;ltima informaci&oacute;n</p>                      
                    </div>
                </div>
             </div>
          </section>
          <!-- Fin de bienvenida  -->

          <!-- Inicio de tabla  -->
          <section class="bg-grey py-2">
            <div class="container">
              <div class="row">
                <div class="col-md-3">
                    <div class="card rounded-0">
                        <div class="card-header bg-light">
                         <div class="card text-white bg-primary mb-3" style="max-width: 14rem;">
                          <div onclick="_Admin.traerVista('index');" class="card-header"><i class="fas fa-home"></i><a href="#"><span style="color:white;"> Dashboard</span></div></a>
                         </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                 <div class="card rounded-0">
                  <div class="card-header bg-light">
                   <div class="card text-white bg-success mb-3" style="max-width: 14rem;">
                    <div onclick="_Admin.traerVista('codQR');" class="card-header"><i class="fas fa-qrcode"></i><a href="#"><span style="color:white;"> Codigo QR</span></div></a>
                   </div>
                  </div>
                 </div>
                </div>

                <div class="col-md-3">
                 <div class="card rounded-0">
                  <div class="card-header bg-light">
                   <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                    <div onclick="_Admin.traerVista('codBar');" class="card-header"><i class="fas fa-barcode"></i><a href="#"><span style="color:white;"> Codigo de barras</span></div></a>
                   </div>
                  </div>
                 </div>
                </div>

                </div>
              </div>
            </div>
          </section>
          <!-- Fin de tabla  -->
<!-- Fin de navegacion var  -->