<?php

require '../classes/Controller.php';

Class generateCodeBar extends Controller {

    public function __construct(){
        global $conangelustech;
        $this->conangelustech = $conangelustech;
    }

    public function traerDataCodebar(){
        $data = $this->showTraerDataCodebar();
        echo json_encode($data);
    }

    public function generateCodBar($parametros){
        $nomProduc = $parametros;
        $data = $this->insertGenerateCodBar($nomProduc);
        echo $data;
    }

}

$metodo = base64_decode($_POST['metodo']);
$parametros = base64_decode($_POST['parametros']);

$generateCodeBar = new generateCodeBar();
$generateCodeBar->$metodo($parametros);

?>