
<?php 
require_once('models/prato_class.php');
require_once('models/categoriaPrato_class.php');

        class produtos_controller{

            public function categoria(){
              
                $idCategoria = $_GET['id'];
                
                $c = new categoriaPrato();
                $categoria = $c->selectAll();
                
                $p = new Prato();
                $listaPratos = $p->listarPorCategoria($idCategoria);
                
                require_once('views/home/produtos.php');
                
            }
            
            
            
            
               

        }

?>