<?php
	
	$_GET ['Categoria'] = "";
	
?>
<script>
    function deletarExercicio(codExercicio){
                             
        if(confirm("Deseja Excluir?")){
            
            location.href = "<?php echo(PROJECTDIR)?>exercicios/deletar/" + codExercicio ;
        }
                         
                         
    }

    
</script>

<div class="cadas">Consultar Exercicios</div>

 
  <form  name="frmconsulta" method="post" action="<?php echo(PROJECTDIR)?>exercicios/cadastrar">
        <input class="btnConsulta" name="btnconsulta" type="submit" value="Cadastrar Dados" />
        
 </form>


<form name="FrmPesquisa" method="post" action="<?php echo(PROJECTDIR)?>exercicios/index">
    
    <input class="pesquisarCms" type="text" name="txtPesquisa" value="<?php echo($pesquisa)?>" placeholder="Pesquisar...">
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
		foreach ($listaExercicio as $exercicio){	 
	?>    
        
    <tr class="linha_consulta">
        
        <td class="col_consulta">
           <?php 
					echo($exercicio->tituloExercicio);
			?>
        </td>
        <td class="col_consulta">
           
					
                 <img src="<?php  echo(PROJECTDIR.$exercicio->imagemExercicio); ?>" class="imgTable" >
		
        </td>
        <td class="col_consulta">
        <div class="overflow" >
           <?php 
					echo($exercicio->descricaoExercicio);
			?>
        </div>
        </td>
        
        <td class="col_consulta">
            <a href="<?php echo(PROJECTDIR)?>exercicios/cadastrar/<?php echo($exercicio->codExercicio) ?>" class="link"> Editar</a> | 
            <a href="#" class="link" onclick="deletarExercicio(<?php echo($exercicio->codExercicio) ?>)">Excluir </a> 
        </td>
		
        <?php
            }
			

		?>
        
    </tr>

</table>