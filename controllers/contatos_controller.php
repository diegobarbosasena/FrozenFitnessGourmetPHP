<?php

    class contatos_controller{
    
        public $nome;
        public $email;
        public $telefone;
        public $mensagem;
        
        public function __construct(){
            
           require_once("models/contatos_class.php");
            
            if($_SERVER['REQUEST_METHOD']=='POST')
            {
             
                $this->nome=$_POST['txtnome'];
                $this->telefone=$_POST['txttelefone'];
                $this->mensagem=$_POST['txtmensagem'];
                $this->email=$_POST['txtemail'];
            
                $this->enviar();
            }
		
        }
        
        public function enviar(){
            
            $contato = new Contatos();
            $contato->nome = $this->nome;
            $contato->telefone = $this->telefone;
            $contato->mensagem = $this->mensagem;
            $contato->email = $this->email;
            
            $contato::insert($contato);
            
            require_once("views/home/contatos.php");
        }   
        
        public function apagar(){
            
            
        }
    }

?>