<?php

class ControladorCursos {

    public function index() {

        $cursosList = ModeloCursos::index();

        $json = array(
            "detalle" => $cursosList
        );

        echo json_encode($json, true);
        return;
    }


    public function create (){
        $json = array(
            "detalle" => "Estas en la vista crear"
        );

        echo json_encode($json, true);
        return;
    }


    public function show(int $id) {
        $json = array(
            "detalle" => "Estas en la vista Curso con ID:". $id
        );

        echo json_encode($json, true);
        return;
    }

    public function update ($id) {
        
        $json = array(
            "detalle" => "Estas actualizando el curso... con ID:". $id
        );

        echo json_encode($json, true);
        return;
    }

    public function delete($id) {
        $json = array(
            "detalle" => "Estas eliminando el curso... con ID:". $id
        );

        echo json_encode($json, true);
        return;
    }

}


?>