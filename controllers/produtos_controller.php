
<?php 

        class produtos_controller{


            //Método que chama o conteúdo da home
            public function congelados() {

                require_once('views/produtos/congelados.php');
            }


            //Método que chama o conteúdo da home
            public function forca(){

                require_once('views/produtos/forca.php');
            }

              public function resistencia(){

                require_once('views/produtos/resistencia.php');
            }

              public function pratosProntos(){

                require_once('views/produtos/pratosProntos.php');
            }

             public function saladas(){

                 require_once('views/produtos/saladas.php');
            
             }
            
             public function sucos(){

                 require_once('views/produtos/sucos.php');
                 
             }
            
             public function personalize(){

                 require_once('views/produtos/personalize.php');
                 
             }
               

        }

?>