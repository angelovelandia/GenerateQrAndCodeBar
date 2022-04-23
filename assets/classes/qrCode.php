<?php

require '../classes/Controller.php';

Class generateQrCode extends Controller {

    public function __construct(){
        global $conangelustech;
        $this->conangelustech = $conangelustech;
    }

    public function traerDataQrCode(){
        $data = $this->showtraerDataQrCode();
        echo json_encode($data);
    }

    public function generarQrTxt($parametros){
        $datos = json_decode($parametros);
        $data = $this->generateQrCodeTxtt($datos->texto,$datos->tamanio_txt,$datos->calidad,$datos->logo);
        echo $data;
    }

}


$metodo = base64_decode($_POST['metodo']);
$parametros = base64_decode($_POST['parametros']);

$generateCodeBar = new generateQrCode();
$generateCodeBar->$metodo($parametros);

?>