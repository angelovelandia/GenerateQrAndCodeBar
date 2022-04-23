<div id="content">
        <section class="py-3">
            <div class="mr-5 ml-3">
            <div class="row">
                <div class="col-lg-10">
                    <h1 class="font-weight-bold mb-0">Generaci&oacute;n de c&oacute;digos QR</h1>
                    <p class="lead text-muted">Revisa la &uacute;ltima informaci&oacute;n</p>                 
                </div>
            </div>
            </div>
        </section>

    <section class="bg py-2">
        <div class="container">
                <div class="col-lg-12">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="col-lg-12">
                                    <nav>
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                            <a class="nav-link navitems active" id="nav-texto-tab" data-toggle="tab" href="#nav-texto" role="tab" aria-controls="nav-texto" aria-selected="true"><i class="fas fa-qrcode"></i> QR</a>
                                        </div>
                                    </nav>
                                </div>
                                <div class="tab-content ml-3 py-5">
                                    <div class="tab-pane fade show active" id="nav-texto" role="tabpanel" aria-labelledby="nav-texto-tab">
                                        <fieldset>
                                            <legend>
                                                <h5 class="titulo">Código QR para texto</h5>
                                            </legend>
                                            <div class="alert alert-info" role="alert">
                                                Introduce un texto para generar un código QR
                                            </div>
                                        </fieldset>
                                        <form action="#" method="POST" id="formQrText">
                                            <div class="form-group">
                                                <label for="txt_texto">Texto:</label>
                                                <textarea class="form-control" id="txt_texto" name="txt_texto" maxlength="1000" aria-describedby="textoHelp"></textarea>
                                                <small id="textoHelp" class="form-text text-muted">Máximo 1000 caracteres.</small>
                                            </div>
                                                <div class="row">
                                                <div class="col-md-4">
                                                    <label for="tamanio_txt"><i class="fas fa-exclamation-circle" data-toggle="tooltip" data-placement="top" title="Tamaño del codigo QR"></i> Tamaño</label>
                                                    <select class="form-control" id="tamanio_txt" name="tamanio_txt">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7" selected="">7</option>
                                                            <option value="8">8</option>
                                                            <option value="9">9</option>
                                                            <option value="10">10</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="ecc_txt"><i class="fas fa-exclamation-circle" data-toggle="tooltip" data-placement="top" title="Nivel ECC (capacidad de corrección de errores). Esto compensa la suciedad, daños o borrosidad del código de barras. Un alto nivel de ECC agrega más redundancia a costa de usar más espacio"></i> Redundancia</label>
                                                    <select class="form-control" id="ecc_txt" name="ecc_txt">
                                                        <option value="L">Baja</option>
                                                        <option value="M" selected="">Media</option>
                                                        <option value="Q">Alta</option>
                                                        <option value="H">Muy alta</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="fileLogo"><i class="fas fa-exclamation-circle" data-toggle="tooltip" data-placement="top" title="Seleccione el logo del QR, si no posee un logo deje este espacio vacio."></i> Logo</label>
                                                    <select class="form-control" id="rutalogotipo">
                                                        <option value="">Seleccione</option>
                                                        <option value="../../../tmp/logos/angelustech.png">Angelus Tech</option>
                                                        <option value="../../../tmp/logos/discord.png">Discord</option>
                                                        <option value="../../../tmp/logos/instagram.png">Instagram</option>
                                                        <option value="../../../tmp/logos/fb.png">Facebook</option>
                                                        <option value="../../../tmp/logos/teams.png">Google Teams</option>
                                                        <option value="../../../tmp/logos/telegram.png">Telegram</option>
                                                        <option value="../../../tmp/logos/tiktok.png">Tik tok</option>
                                                        <option value="../../../tmp/logos/twitch.png">Twitch</option>
                                                        <option value="../../../tmp/logos/whatsapp.png">WhatsApp</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-3 py-3">
                                                    <button type="submit" id="generaQrTxt" name="generaQrTxt" class="btn btn-primary" >Generar</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="text-center">
                                        <img alt="" src=""  id="qrGenerated" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>
</div>

    <script type="text/javascript" src="assets/classes/js/views/qrCode.js"></script>