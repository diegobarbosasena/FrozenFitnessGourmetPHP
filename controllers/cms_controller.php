
<?php 

    class cms_controller{

        public function AdmPratoPronto(){
            
           require_once('views/cms/adm_prato_pronto.php');
        }
        
          public function AdmProduto(){
            
           require_once('views/cms/adm_produtos.php');
        }
        
        public function AdmObjetivo(){
            
           require_once('views/objetivo/index.php');
        }
        
        public function AdmIngrediente(){
            
           require_once('views/cms/adm_igrediente.php');
        }
       
        public function AdmPromocao(){
            
           require_once('views/cms/adm_promocao.php');
        }
       
        public function AdmUsuario(){
            
           require_once('views/usuario/index.php');
        }
        
        public function AdmEstoque(){
            
           require_once('views/cms/adm_estoque.php');
        }
        public function AdmParceiro(){
            
           require_once('views/cms/adm_parceiro.php');
        }
        public function AdmMarketing(){
            
           require_once('views/cms/adm_marketing.php');
        }
        public function AdmSobre(){
            
           require_once('views/cms/adm_sobre.php');
        }
         
        
         public function ConsultaEstoque(){
            
           require_once('views/cms/consulta_estoque.php');
        }
         public function ConsultaIngrediente(){
            
           require_once('views/cms/consulta_ingrediente.php');
        }
         public function ConsultaMarketing(){
            
           require_once('views/cms/consulta_marketing.php');
        }

         public function ConsultaObjetivo(){
            
           require_once('views/cms/consulta_objetivo.php');
        }

         public function ConsultaParceiro(){
            
           require_once('views/cms/consulta_parceiro.php');
        }

         public function ConsultaPratoPronto(){
            
           require_once('views/cms/consulta_prato_pronto.php');
        }

         public function ConsultaProduto(){
            
           require_once('views/cms/consulta_produtos.php');
        }
          public function ConsultaPromocao(){
            
           require_once('views/cms/consulta_promocao.php');
        }
          public function ConsultaSobre(){
            
           require_once('views/cms/consulta_sobre.php');
        }
          public function ConsultaUsuario(){
            
           require_once('views/cms/consulta_usuario.php');
        }
         public function ConsultaCategoria(){
            
           require_once('views/cms/consulta_categoria.php');
        }
         public function DetalheParceiro(){
            
           require_once('views/cms/detalhe_parceiro.php');
        }
         public function DetalhePratoPronto(){
            
           require_once('views/cms/detalhe_prato_pronto.php');
        }
         public function DetalheProduto(){
            
           require_once('views/produtocms/detalhe_produto.php');
        }
         




    }

?>