<div style="width:740px; height:300px; overflow:auto;">
    <table cellspacing="0" cellpadding="1" width="740">
    <?php foreach ($bodega as $i): ?>
    <tr>
        <td style="width: 280px;">
            <?php $id = $i['Insumo']['id']; ?>            
            <?php echo $i['Insumo']['nombre']; ?>
        </td>
        <div id="cuadro_<?php echo $id; ?>" title="Ingreso de  insumos">
        </div> 
        <div id="cuadro2_<?php echo $id; ?>" title="Salida de insumos">
        </div> 
        <td style="width: 92px;">
            <?php echo $i['Insumo']['preciocompra']; ?>
        </td>
        <td style="width: 92px;">
            <?php echo $i['Insumo']['precioventa']; ?>
        </td>
        <td style="width: 92px;">
            <?php echo $i['Insumo']['bodega']; ?>
        </td> 
        <td style="width: 92px;">
            <?php echo $i['Insumo']['total']; ?>
        </td>
        <td style="width: 92px;">
            <?php 
                $almacen = $i['Insumo']['total']; 
                $bodega = $i['Insumo']['bodega'];
                echo $almacen+$bodega;
            ?>
        </td>       
        <!--<td>
            <?php //echo $i['Insumo']['observaciones']; ?>
        </td>       
        <td>
            <?php 
                /*echo $this->Html->image("edit.png", array(
                    "title" => "Editar",
                    'url' => array('action' => 'modificar', $id)
                ));*/
            ?>
            <div id="dialog_<?php echo $id; ?>" style="float: left;">
            <?php 
                //echo $this->Html->image("in.png", array("title" => "Ingreso Almacen"));
            ?>
            </div>            
            <div id="dialog2_<?php echo $id; ?>" style="float: left;">
            <?php 
                /*echo $this->Html->image("out.png", array(
                    "title" => "Salida Almacen"                    
                ));*+
            ?>
            </div>            
            <?php 
                /*echo $this->Html->image("elim.png", array(
                    "title" => "Salida Almacen",
                    'url' => array('action' => 'modificar', $id)
                ));*/
            ?>        
            <script type="text/javascript">
            jQuery("#dialog_<?php echo $id; ?>").click(function(){
                jQuery("#cuadro_<?php echo $id; ?>").dialog().load("insumos/ingresoalmacen/<?php echo $id; ?>");
                //alert("click");
            });   
            
            jQuery("#dialog2_<?php echo $id; ?>").click(function(){
                jQuery("#cuadro2_<?php echo $id; ?>").dialog().load("insumos/salidalmacen/<?php echo $id; ?>");
                //alert("click");
            });  
            </script>       
        </td>-->
    </tr>
<?php endforeach; ?>
</table>
</div>