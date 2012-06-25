<h1>Listado de Contratos</h1>
<table>
    <tr>
        <th>Usuario Id</th>
        <th>Fecha Inicio</th>
        <th>Fecha Fin</th>
        <th>Observaciones</th>
    </tr>
<?php foreach($contratos as $c): ?>
    <tr>
        <td>
            <?php $id=$c['Contrato']['id'];?>
            
            <?php echo $c['Usuario']['nombre']; ?>
        </td>
        <td>
            <?php echo $c['Contrato']['fechainicio']; ?>
        </td>
        <td>
            <?php echo $c['Contrato']['fechafin']; ?>
        </td>
        <td>
            <?php echo $c['Contrato']['observaciones']; ?>
        </td>
        <td>
            <?php echo $this->Html->link('Modificar', array('action'=>'modificar', $id));?>
            <?php echo $this->Html->link('Eliminar', array('action'=>'eliminar', $id));?>           
        </td>
    </tr>
<?php endforeach; ?>
</table>
<?php echo $this->Html->link('Nuevo Contrato', 'nuevo'); ?> 