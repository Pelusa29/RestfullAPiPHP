<?php
    class ControladorClientes {

        public function create() {
             /*================================================================
                Cuando se hace peticionens desde regisrto
            ==================================================================*/
        
            $json = array(
                "detalle" => "Estas en la vista registro"
            );

            echo json_encode($json, true);
            return;
        
        }

    }













?>