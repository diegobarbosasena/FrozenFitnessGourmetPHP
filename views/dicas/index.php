<script>
    function deletarDicas(codDica){
    
                             
        if(confirm("Deseja Excluir?")){
            
            location.href = "<?php echo(PROJECTDIR)?>dicas/deletar/" + codDica ;
        }
                         
                         
    }

    
</script>
<div class="cadas">Consultar Dica</div>

 
  <form  name="frmconsulta" method="post" action="<?php echo(PROJECTDIR)?>dicas/cadastrar">
        <input class="btnConsulta" name="btnconsulta" type="submit" value="Cadastrar Dados" />
        
 </form>
    

<form name="FrmPesquisa" method="post" action="<?php echo(PROJECTDIR)?>dicas/index">
    
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
		 foreach ($listaDicas as $dicas){	
	?>    
        
    <tr class="linha_consulta">
        
        <td class="col_consulta">
           <?php 
					echo($dicas->tituloDica);
			?>
        </td>
        <td class="col_consulta">
          
                
                 <img src="<?php  echo(PROJECTDIR.$dicas->imagemDica); ?>" class="imgTable" >
                    
					
			
        </td>
        <td class="col_consulta">
            <div class="overflow" >
           <?php 
				echo($dicas->descricaoDica);
			?>
            </div>
        </td>
        
        <td class="col_consulta">
            <a href="<?php echo(PROJECTDIR)?>dicas/cadastrar/<?php echo($dicas->codDica) ?>" class="link"> Editar</a> | 
            <a href="#" class="link" onclick="deletarDicas(<?php echo($dicas->codDica) ?>)">Excluir </a> 
        </td>
		
                
        <?php
            
			
		}
		
		
		?>
        
    </tr>

</table>