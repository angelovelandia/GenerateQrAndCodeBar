<?php

require '../lib/php/conectarconAngelusTech.php';
require '../lib/phpqrcode/qrlib.php';

Class Controller {

    public function __construct(){
        global $conangelustech;
        $this->conangelustech = $conangelustech;
    }

    public function showTraerDataCodebar(){
        
        $sql="SELECT * FROM cod_bars";      
        $rdb = pg_query($this->conangelustech,$sql);
        
        if(pg_num_rows($rdb)>0){
            return array('datos'=> pg_fetch_all($rdb));
        }else{
            return false;
        }
    }

    public function insertContentQrCode($nomProduc){
        
        $sql="INSERT INTO cod_bars (nombre,fecha) VALUES ('{$nomProduc}','now()') RETURNING idprod";      
        $rdb = pg_query($this->conangelustech,$sql);

        $data = pg_fetch_array($rdb);

        if($data['idprod'] > 0){

            $codBar = $this->generarCodigoNumeric();

            $sqlUpdate = "UPDATE cod_bars SET cod_bar = {$codBar} WHERE idprod = {$data['idprod']} ";
            $rdbUp = pg_query($this->conangelustech,$sqlUpdate);

            if(pg_affected_rows($rdbUp) > 0){
                echo true;
            } else {
                echo false;
            }

        }else{
            echo false;
        }
    }

    public function generarCodigoNumeric(){ 
        $key = '';
        $pattern = '1234567890';
        $max = strlen($pattern)-1;
        for($i=0;$i < 15;$i++) {
            $key .= $pattern[mt_rand(0,$max)];
        }
        return $key;    
    }

    public function generateQrCodeTxtt($texto,$tamanio,$calidad,$logo){

        $logopath = $logo;
        $dir = '../../../tmp/'; 

        if (!file_exists($dir))
            mkdir($dir);

        $filename = $dir.date('Ymdhis').".png";

        $tamaño = $tamanio;
        $level = $calidad;
        $framSize = 3;
        $contenido = $texto;
        $back_color = 0xFFFFFF;
        $fore_color = 0x000000;

        QRcode::png($contenido, $filename, $level, $tamaño, $framSize, false, $back_color, $fore_color);

        if($logopath != ''){
            $data = $this->ponerLogoQr($dir.basename($filename),$logopath);
            echo $data;
        } else {
            echo $dir.basename($filename);
        }

    }

    public function ponerLogoQr($imagen,$logot){

        $QR = imagecreatefrompng($imagen);
        $logo = imagecreatefromstring(file_get_contents($logot));

        imagecolortransparent($logo , imagecolorallocatealpha($logo , 0, 0, 0, 127));
        imagealphablending($logo , false);
        imagesavealpha($logo , true);

        $QR_width = imagesx($QR);
        $QR_height = imagesy($QR);

        $logo_width = imagesx($logo);
        $logo_height = imagesy($logo);

        $logo_qr_width = $QR_width/3;
        $scale = $logo_width/$logo_qr_width;
        $logo_qr_height = $logo_height/$scale;

        imagecopyresampled($QR, $logo, $QR_width/3, $QR_height/3, 0, 0, $logo_qr_width, $logo_qr_height, $logo_width, $logo_height);

        imagepng($QR,$imagen);

        echo $imagen;        
    }

}

?>