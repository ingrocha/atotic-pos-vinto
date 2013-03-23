<style type="text/css">
	      
    @media (max-width: 980px) {
        /* Enable use of floated navbar text */
        .navbar-text.pull-right {
            float: none;
            padding-left: 5px;
            padding-right: 5px;
        }
    }

    .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
        -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
        box-shadow: 0 1px 2px rgba(0,0,0,.05);
    }
    
    .form-signin .form-signin-heading,
    .form-signin .checkbox {
        margin-bottom: 10px;
    }
    .form-signin input[type="text"],
    .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: -2px;
        padding: 7px 9px;
    }            


</style>


	<!-- <form class="form-inline">-->
	<?php echo $this->Form->create('Pedidos', array('action' => 'validamoso', 'class' => 'form-signin')); ?>
		<h3 class="form-signin-heading">
			INGRESE SU CODIGO
		</h4>
		<input name="data[Pedidos][numero]" type="password" class="input-small" id="tecladonumerico" placeholder="Password" />
        <input type="submit" value="INGRESAR" class="btn btn-primary"/>
        </form>
    <div class="row-fluid">                
				<div class="span3">
                <h4>Comidas</h4>
					<table class="table table-condensed">
						<tr>
                           <th>Item</th>
                           <th>Cantidad</th>
                        </tr>
                        <?php 
                        if(!empty($comidas)):
                        foreach ($comidas as $dato): 
                       // debug($dato);exit;
                        ?>
                        <?php if($dato['Bodega']['total'] <=2):?>
                        <tr class="error">
								<td>
									<?php echo $dato['Insumo']['nombre']?>
								</td>
								<td>
									<?php echo $dato['Bodega']['total']?>
								</td>
							
							</tr>
                        <?php else:?>
							<tr class="success">
								<td>
									<?php echo $dato['Insumo']['nombre']?>
								</td>
								<td>
									<?php echo $dato['Bodega']['total']?>
								</td>
							
							</tr>
						<?php endif;?>
                        <?php endforeach; 
                        endif;
                        ?>
                        
					</table>
				</div>
                <div class="span3">
                <h4>Bebidas</h4>
					<table class="table table-condensed">
						<tr>
                           <th>Item</th>
                           <th>Cantidad</th>
                        </tr>
                        <?php 
                        if(!empty($bebidas)):
                        foreach ($bebidas as $dato): 
                        
                        ?>
                        <?php if($dato['Bodega']['total'] <= 2):?>
                        <tr class="error">
								<td>
									<?php echo $dato['Insumo']['nombre']?>
								</td>
								<td>
									<?php echo $dato['Bodega']['total']?>
								</td>
							
							</tr>
                        <?php else:?>
							<tr class="success">
								<td>
									<?php echo $dato['Insumo']['nombre']?>
								</td>
								<td>
									<?php echo $dato['Bodega']['total']?>
								</td>
							
							</tr>
						<?php endif;?>
                        <?php endforeach; 
                        endif;
                        ?>
                        
					</table>
				</div>
                <div class="span3">
                <h4>Tragos</h4>
					<table class="table table-condensed">
						<tr>
                           <th>Item</th>
                           <th>Cantidad</th>
                        </tr>
                        <?php 
                        if(!empty($tragos)):
                        foreach ($tragos as $dato): ?>
                        <?php if($dato['Bodega']['total'] <=2):?>
                        <tr class="error">
								<td>
									<?php echo $dato['Insumo']['nombre']?>
								</td>
								<td>
									<?php echo $dato['Bodega']['total']?>
								</td>
							
							</tr>
                        <?php else:?>
							<tr class="success">
								<td>
									<?php echo $dato['Insumo']['nombre']?>
								</td>
								<td>
									<?php echo $dato['Bodega']['total']?>
								</td>
							
							</tr>
						<?php endif;?>
                        <?php endforeach; 
                        endif;
                        ?>
                        
					</table>
				</div>
                <div class="span3">
                <h4>Postres</h4>
					<table class="table table-condensed">
						<tr>
                           <th>Item</th>
                           <th>Cantidad</th>
                        </tr>
                        <?php 
                        if(!empty($postres)):
                        foreach ($postres as $dato): ?>
                        <?php if($dato['Bodega']['total'] <=2):?>
                        <tr class="error">
								<td>
									<?php echo $dato['Producto']['nombre']?>
								</td>
								<td>
									<?php echo $dato['Bodega']['total']?>
								</td>
							
							</tr>
                        <?php else:?>
							<tr class="success">
								<td>
									<?php echo $dato['Insumo']['nombre']?>
								</td>
								<td>
									<?php echo $dato['Bodega']['total']?>
								</td>
							
							</tr>
						<?php endif;?>
                        <?php endforeach; 
                        endif;
                        ?>
                        
					</table>
				</div>
</div>
<script type="text/javascript">
	
    $(document).ready(function() {
        // Handler for .ready() called.
        $("#tecladonumerico").keypad();
    });

</script>