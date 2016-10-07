

<?php 
	require_once('config.php');
	
	$controller = "";
	$metodo = "";
	
	//Verifica se a variável controller existe 
	if (!isset($_GET['controller'])) {
		
		
		$controller = "home";
		
	}else{
		$controller = $_GET['controller'];
		
	}
	
	//Verifica se a variável metodo existe 
	if (!isset($_GET['acao'])) {
		$metodo = "index";
		
	}else{
		$metodo = $_GET['acao'];
	}
	
	//Se a variável controller estiver vazia redireciona a pagina para index(conteudo inicial)
	if($controller=="")
		 header( 'Location: home/index');
		
	$lstCtrlCMS = array('cms', 'categoria', 'objetivo');

	if (in_array($controller, $lstCtrlCMS)){
        require_once('views/layoutCms.php');
    }else{
        //Inclusão do arquivo principal do site
	   require_once('views/layout.php');
    }
	
?>