<?php 
	//creación de la carpeta random
	$folder = '/tmp/documents/'.rand().'/'.rand()."/";
    mkdir($folder,0700,true);
    touch($folder.'formula-merciless');
    echo $folder.'formula-merciless'; //ruta de la carpeta

    //completa la función

    function encuentraFormula(){

    }


?>