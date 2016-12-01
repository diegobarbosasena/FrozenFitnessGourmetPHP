<div id="conteudo">
<fieldset>
    <p class="subtitulo_sobre">Pedidos em andamento</p>
    
    <table class="tbl_dados">
    <?php foreach($pedido as $p){ ?> 
        <tr>
            <td class="dados_cliente_tit">Nº Pedido</td>
            <td class="dados_cliente_tit">Data de compra </td>
            <td class="dados_cliente_tit">Data de entrega </td>
            <td class="dados_cliente_tit">Status </td>
            
        </tr>
        <tr>
           <td><?php echo($p->codPedido) ?></td>
            <td><?php echo(date('d/m/Y', strtotime($p->dtCompra))) ?></td>
            <td><?php echo(date('d/m/Y', strtotime($p->dtEntrega))) ?></td>
            <td><?php echo($p->nomeStatus) ?></td>
            <td> <a class="link" href="<?php  echo PROJECTDIR; ?>home/detalhesPedido/<?php echo($p->codPedido) ?>">Detalhes</a> </td>
        </tr>      
    <?php }?> 
      
        
    </table>
      
        
    </table>
</fieldset>
    <p>
    
 <!--<fieldset>
     <p class="subtitulo_sobre">Histórico de pedidos</p>
    
    <table class="tbl_dados">
        <tr>
            <td class="dados_cliente_tit">Nº Pedido</td>
            <td class="dados_cliente_tit">Data de compra </td>
            <td class="dados_cliente_tit">Data de entrega </td>
            <td class="dados_cliente_tit">Transportadora </td>
            <td class="dados_cliente_tit">Status </td>
        </tr>
        <tr>
           <td>1</td>
            <td>12/11/2016</td>
            <td>20/11/2016</td>
            <td>The Flash</td>
            <td>Em andamento</td>
        </tr>
    </table>
    </fieldset> -->
</div>