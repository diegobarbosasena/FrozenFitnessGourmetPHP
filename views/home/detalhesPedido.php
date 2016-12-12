<div id="conteudo">
<fieldset>
    <p class="subtitulo_sobre">Detalhes do Pedido <?php echo($id); ?></p>
    
    <table class="tbl_dados">
     
        <tr>
            <td class="dados_cliente_tit">Produto</td>
            <td class="dados_cliente_tit">Quantidade </td>
            <td class="dados_cliente_tit">Data de compra </td>
            <td class="dados_cliente_tit">Data de entrega </td>
            <td class="dados_cliente_tit">Status </td>
            
        </tr>
        <tr>
            <?php foreach($itens as $p){ ?>
           <td><?php echo($p->prato->nomePrato) ?></td>
            <td><?php echo($p->item->quantidade) ?></td>
            <td><?php echo(date('d/m/Y', strtotime($p->dtCompra))) ?></td>
            <td><?php echo(date('d/m/Y', strtotime($p->dtEntrega))) ?></td>
            <td><?php echo($p->nomeStatus) ?></td>
           
        </tr>      
    <?php }?> 
      
          <tr>
            <?php foreach($itensPersonalizado as $p){ ?>
           <td><?php echo($p->produto->nomeProduto) ?></td>
            <td><?php echo($p->item->quantidade) ?></td>
            <td><?php echo(date('d/m/Y', strtotime($p->dtCompra))) ?></td>
            <td><?php echo(date('d/m/Y', strtotime($p->dtEntrega))) ?></td>
            <td><?php echo($p->nomeStatus) ?></td>
           
        </tr>      
    <?php }?> 
        
    </table>
      
        
    </table>
</fieldset>
    <p>
    
</div>