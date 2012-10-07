<h2>Listado de mesas</h2>
<?php if (empty($mesas)): ?>
    <h1>NO SE ENCONTRARON MESAS ASIGNADAS</h1>
    <?php echo $this->Html->link('Volver A pagina de inicio', array('action' => 'listadopedidos'), array('class' => 'button')); ?>
<?php else: ?>
    <ul class="table-asign">

        <?php foreach ($mesas as $m): ?>
            <?php $id_pedido = $m['Pedido']['id']; ?>
            <?php $id_moso = $m['Pedido']['usuario_id']; ?>   
            <?php $mesa = $m['Pedido']['mesa']; ?>
            <li>
                <?php //echo $this->Html->link('');?>
                <a href="http://localhost/posvinto/posvinto/pedidos/pedidomoso/<?php echo $id_moso ?>/<?php echo $id_pedido ?>/<?php echo $mesa ?>">	    
                    <div id="pedido_<?php echo $id_pedido; ?>">
                        <?php echo $this->Html->image('table-small.png'); ?>
                        <span class="number">MESA:<?php echo $m['Pedido']['mesa']; ?></span>
                    </div>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>