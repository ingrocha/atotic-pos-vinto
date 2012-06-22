<script>
	$(function() {
		$( "#tabs" ).tabs();
	});
</script>
<div class="lista_productos">
<div id="tabs">
<ul>
<?php foreach ($categorias as $c): ?>
    <li><a href="#cat_<?php echo $c['Categoria']['id']; ?>"><?php echo $c['Categoria']['nombre']; ?></a></li>                  
<?php endforeach; ?> 
</ul>
  <?php foreach ($categorias as $c): ?>  
    <div  id="cat_<?php echo $c['Categoria']['id']; ?>">    
     <ul class="list-products">
    <?php foreach ($productos as $p): ?>
     <?php $id = $p['Producto']['id']; ?>
     <?php if ($c['Categoria']['id'] == $p['Producto']['categoria_id']): ?> 
            <?php //$num_pedido = $numero_pedido; ?>
            <?php //$id_moso = $moso['Usuario']['id']; ?> 
            <?php //$id = $p['Producto']['id']; ?>
            <?php $id_prod = $p['Producto']['id']; ?>      
        <li id="prod_<?php echo $id_prod; ?>">  
            <span>
                <?php echo $p['Producto']['nombre']; ?>
            </span><?php echo $this->Html->image('1.jpg'); ?>  
        </li>
        <script type="text/javascript">                
                $(document).ready(function() {
                    $("#prod_<?php echo $id; ?>").click(function(){
                        $("#listado").load("../../../ajaxlistado/<?php echo $id_moso; ?>/<?php echo $id_prod; ?>/<?php echo $pedido; ?>/<?php echo $mesa; ?>");
                        //console.log('el id es: '+<?php //echo $prod_id; ?>);                        
                    });              
                });
        </script>
    <?php endif; ?> 
    <?php endforeach; ?> 
    </ul> 
    </div>
   <?php //fin imprimir los productos ?>
  <?php endforeach; ?>                  
</div>
</div>
<div>
    <div id="pedidos">
        Pedidos del moso
        <div id="listado">            
        </div>   
    </div>
</div>
<?php ?>
<script type="text/javascript">    
    //$c=1;
    var aplatos = function(nombre, precio, c){        
        $("#platospedidos").append("<tr><td>"+nombre+"</td><td>"+precio+"<td><td>2</td></tr>");  
        console.log(nombre+precio+c);
        c++;          
    }    
    $(document).ready(function() {        
    // do stuff when DOM is ready
        //console.log('Hola jquery');
    });
</script>