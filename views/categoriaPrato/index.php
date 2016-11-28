<?php
	
	$_GET ['Categoria'] = "";
	
?>


<div class="cadas">Consultar Categoria Prato</div>

 
  <form  name="frmconsulta" method="post" action="<?php echo(PROJECTDIR)?>categoriaPrato/cadastrar">
        <input class="btnConsulta" name="btnconsulta" type="submit" value="Cadastrar Dados" />
        
 </form>


<form name="FrmPesquisa" method="post" action="">
    
    <input class="pesquisarCms" type="text" name="lala" value="" placeholder="Pesquisar...">
    <input class="btnPesquisaCms" type="submit" name="btnPesquisa" value=""/>
</form> 
    
<table class="tbl_consulta">
    <tr class="linha_consulta">
        <td class="col_consulta">
            Nome 
        </td>
        <td class="col_consulta">
           	Imagem
        </td>
        <td class="col_consulta">
            Descrição 
        </td>
       
      
        <td class="col_consulta">
            Opção 
        </td>
		
    <?php
		require_once('controllers/categoriaPrato_controller.php');
		
		$controllerCategoria = new categoriaPrato_controller();
				
		$rs=$controllerCategoria->listarTodos();

		$cont=0;
		
		while ($cont < count($rs)){
            
      
	?>    
        
    <tr class="linha_consulta">
        
        <td class="col_consulta">
           <?php 
					echo($rs[$cont]->nomeCategoriaPrato);
			?>
        </td>
		
		  <td class="col_consulta">
           
                <img src="<?php  echo (PROJECTDIR.$rs[$cont]->imagemCategoriaPrato); ?>" class="imgTable" >  
                

        </td>
		
		 <td class="col_consulta">
           <?php 
					echo($rs[$cont]->descricaoCategoriaPrato);
			?>
        </td>
        
        <td class="col_consulta">
            <a href="<?php echo(PROJECTDIR)?>categoriaPrato/cadastrar/<?php echo($rs[$cont]->codCategoriaPrato) ?>" class="link"> Editar</a> | 
            <a href="<?php echo(PROJECTDIR)?>categoriaPrato/deletar/<?php echo($rs[$cont]->codCategoriaPrato) ?>" class="link">Excluir </a> 
        </td>
		                
        <?php
            
			$cont++;
		}
		
		
		?>
        
    </tr>

</table>