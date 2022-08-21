<?php
//get url
$arrayRutas = explode("/", $_SERVER['REQUEST_URI']);

echo "<pre>";echo print_r($arrayRutas); echo "</pre>";

if (count(array_filter($arrayRutas)) == 2) {
    /*================================================================
    Cuando no se hace ningunna petición al api
    ==================================================================*/
    $json = array(
        "detalle" => "No encontrado"
    );
    
    echo json_encode($json, true);
    return;
} else {
    //Evaluate structure api
    /*================================================================
        Cuando pasamos solo un índice en el array $arrayRutas
    ==================================================================*/
    if (count(array_filter($arrayRutas))== 3) {

        /*================================================================
            Cuando se hace peticionens desde cursos
        ==================================================================*/
            
            $caso = array_filter($arrayRutas)[3];
        
        if($caso == "cursos"){
            $json = array(
                #detalle
                "detalle" => "Estas en la vista cursos"
            );

            echo json_encode($json, true);
            return;
        }

        /*================================================================
            Cuando se hace peticionens desde regisrto
        ==================================================================*/
        if($caso == "registro"){
            $json = array(
                #detalle
                "detalle" => "Estas en la vista registro"
            );

            echo json_encode($json, true);
            return;
        }

    }
}