
<div class="cadas">Conteúdo do Slider</div>
<form  name="frmconsulta" method="post" action="<?php echo(PROJECTDIR)?>marketing/cadastrar">
    <input class="btnConsulta" name="btnconsulta" type="submit" value="Cadastrar Dados" />
</form>

<form name="FrmPesquisa" method="post" action="home.php">
    
    <input class="pesquisarCms" type="text" name="lala" value="" placeholder="Pesquisar...">
    <input class="btnPesquisaCms" type="submit" name="btnPesquisa" value=""/>
</form> 
<table class="tbl_consulta">
    <tr class="linha_consulta">
        <td class="col_consulta">
            Título 
        </td>
        <td class="col_consulta">
            Imagem
        </td>
        
        
        <td class="col_consulta">
            Opção 
        </td>
	</tr>
	
	 <?php
		
			foreach ($listaSlider as $slider){
    ?>   
        
    <tr class="linha_consulta">
        <td class="col_consulta">
             <?php echo ($slider->tituloSlider);?>
        </td>
        <td class="col_consulta">
            <img src="<?php  echo (PROJECTDIR.$slider->linkImagemSlider); ?>" class="imgTable" >
            
        </td>
        
        <td class="col_consulta" >
            <a href="<?php echo(PROJECTDIR)?>marketing/cadastrar/<?php echo($slider->codSlider) ?>" class="link"> Editar </a>|
			<a href="<?php echo(PROJECTDIR)?>marketing/deletar/<?php echo($slider->codSlider) ?>" class="link">Excluir </a>
        </td>
        
    </tr>
	
	<?php 
                           
            }
	?>
    
   

</table>