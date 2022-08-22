<?php
//get url
$arrayRutas = explode("/", $_SERVER['REQUEST_URI']);

//echo "<pre>";echo "Fase1:".print_r($arrayRutas); echo "</pre>";

if (count(array_filter($arrayRutas)) == 1) {
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
    
    if (count(array_filter($arrayRutas)) == 2) {
        //echo "<pre>";echo "Fase 2:".print_r(count(array_filter($arrayRutas))); echo "</pre>";
        /*================================================================
            Cuando se hace peticionens desde cursos
        ==================================================================*/
        
        if(array_filter($arrayRutas)[2] == "cursos") {

            if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
                $cursos = new ControladorCursos();
                $cursos->create();

            } else if(isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "GET") {
                $cursos = new ControladorCursos();
                $cursos->index();
            }
        }

        if(array_filter($arrayRutas)[2] == "registro") {

            if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "GET") {
                $clientes = new ControladorClientes();
                $clientes->create();
            }

        }

    }//
    else {

        if( array_filter($arrayRutas)[2] == "cursos" && is_numeric(array_filter($arrayRutas)[3]) ) {
            /*================================================================
                Cuando se hace peticiones GET a cursos mediante un Parametro Identificador
            ==================================================================*/
            if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "GET") {
                $cursos = new ControladorCursos();
                $cursos->show(array_filter($arrayRutas)[3]);
            }

            /*================================================================
                Cuando se hace una Petición PUT
            ==================================================================*/
            if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "PUT") {
                $editarCurso = new ControladorCursos();
                $editarCurso->update(array_filter($arrayRutas)[3]);
            }

             /*================================================================
                Cuando se hace una Petición DELETE
            ==================================================================*/
            if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "DELETE") {
                $eliminaCurso = new ControladorCursos();
                $eliminaCurso->delete(array_filter($arrayRutas)[3]);
            }
        }
    }
}