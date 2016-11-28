
<?php 		
	foreach($categoria as $c){ 
?>
<div class="navprodutos">  
    <ul id="menu_produto">
        <li><a href="<?php  echo (PROJECTDIR)?>produtos/categoria/<?php  echo ($c->codCategoriaPrato); ?>  " class="link"><?php echo ($c->nomeCategoriaPrato); ?>  </a></li>
        
    </ul>
</div>
<?php  
} ?>