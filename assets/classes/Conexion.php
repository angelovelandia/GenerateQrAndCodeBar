<?php

Class ConexionC {

    public function __construct(){

    }

    public function ConAngelusTech(){
        
        $conangelustech = pg_connect("host='localhost' dbname=angelus_tech port=5432 user=postgres password=0") or die ("Error de Conexion".pg_last_error());

        return $conangelustech;
    }

}

?>