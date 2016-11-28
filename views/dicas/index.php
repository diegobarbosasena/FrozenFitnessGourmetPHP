
<div class="cadas">Consultar Dica</div>

 
  <form  name="frmconsulta" method="post" action="<?php echo(PROJECTDIR)?>dicas/cadastrar">
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
		require_once('controllers/dicas_controller.php');
		
		$controllerDicas = new dicas_controller();
				
		$rs=$controllerDicas->listarTodos();

		$cont=0;
		
		while ($cont < count($rs)){
            
            if($rs[$cont]->tituloDica != ""){   
	?>    
        
    <tr class="linha_consulta">
        
        <td class="col_consulta">
           <?php 
					echo($rs[$cont]->tituloDica);
			?>
        </td>
        <td class="col_consulta">
          
                
                 <img src="<?php  echo(PROJECTDIR.$rs[$cont]->imagemDica); ?>" class="imgTable" >
                    
					
			
        </td>
        <td class="col_consulta">
           <?php 
					echo($rs[$cont]->descricaoDica);
			?>
        </td>
        
        <td class="col_consulta">
            <a href="<?php echo(PROJECTDIR)?>dicas/cadastrar/<?php echo($rs[$cont]->codDica) ?>" class="link"> Editar</a> | 
            <a href="<?php echo(PROJECTDIR)?>dicas/deletar/<?php echo($rs[$cont]->codDica) ?>" class="link">Excluir </a> 
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