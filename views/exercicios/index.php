<?php
	
	$_GET ['Categoria'] = "";
	
?>


<div class="cadas">Consultar Exercicios</div>

 
  <form  name="frmconsulta" method="post" action="<?php echo(PROJECTDIR)?>exercicios/cadastrar">
        <input class="btnConsulta" name="btnconsulta" type="submit" value="Cadastrar Dados" />
        
 </form>


<form name="FrmPesquisa" method="post" action="">
    
    <input class="pesquisarCms" type="text" name="lala" value="" placeholder="Pesquisar...">
    <input class="btnPesquisaCms" type="submit" name="btnPesquisa" value=""/>
</form> 
    
<table class="tbl_consulta">
    <tr class="linha_consulta">
        <td class="col_consulta">
            Titulo 
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
		require_once('controllers/exercicios_controller.php');
		
		$controllerexercicios = new exercicios_controller();
				
		$rs=$controllerexercicios->listarTodos();

		$cont=0;
		
		while ($cont < count($rs)){
            
            if($rs[$cont]->tituloExercicio != ""){   
	?>    
        
    <tr class="linha_consulta">
        
        <td class="col_consulta">
           <?php 
					echo($rs[$cont]->tituloExercicio);
			?>
        </td>
        <td class="col_consulta">
           
					
                 <img src="<?php  echo(PROJECTDIR.$rs[$cont]->imagemExercicio); ?>" class="imgTable" >
		
        </td>
        <td class="col_consulta">
        <div class="overflow" >
           <?php 
					echo($rs[$cont]->descricaoExercicio);
			?>
        </div>
        </td>
        
        <td class="col_consulta">
            <a href="<?php echo(PROJECTDIR)?>exercicios/cadastrar/<?php echo($rs[$cont]->codExercicio) ?>" class="link"> Editar</a> | 
            <a href="<?php echo(PROJECTDIR)?>exercicios/deletar/<?php echo($rs[$cont]->codExercicio) ?>" class="link">Excluir </a> 
        </td>
		
		<?php 
            }else{
                ?>
        
                
        <?php
            }
			$cont++;
		}
		
		
		?>
        
    </tr>

</table>