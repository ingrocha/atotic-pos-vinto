<!--<button class="btn btn-gebo" id="btnImprimir">Imprimir</button>-->
<?php echo $this->Form->create('Controlpedidos', array('url' => array('controller' => 'Controlpedidos', 'action' => 'index'))); ?>
            <?php //echo $this->Form->button('Imprimir', array('id'=>"imprimir")); ?>
            <?php $opt = array('Value' => 'imprimir', 'class' => "oculto", 'id' => "btnImprimir"); ?>
            <?php echo $this->Form->end($opt); ?>  
<div style="width: 210px; padding: 5px 10px 5px 10px; font-family: arial; font-size: 12px;" id="areaImprimir">
	<div style="text-align: center;">
		<!-- inicio cabecera -->
		OH COCHABAMBA QUERIDA
		<br />
		<b>RESTAURANTE</b><br />
		Av.Martin de la Rocha Nro.01531<br />
        Zona Cala Cala </br>
        telf: 4411943</br>
		<br />
		Cochabamba - Bolivia<br /> 
        RECIBO
	</div>
    
	<!-- fin cabecera -->
	----------------------------------------------------
	<div style="text-align: center;">
		Fecha:
		<?php echo $recibo['Recibo']['created'] ?>
			<br />
			Nombre:
			<?php echo $recibo['Recibo']['nombre'] ?>
				<br />
	<table style="width: 200px; alignment-adjust: central; font-family: arial; font-size: 12px;">
		<tr>
			<td style="padding: 2px 5px 0 5px;">
				CANT
			</td>
			<td style="width: 80px;padding: 2px 5px 0 5px;">
				DESCRIPCION
			</td>
			<td style="padding: 2px 5px 0 5px;">
				IMPORTE
			</td>
		</tr>
	</table>
	---------------------------------------------------
	<table style="width: 200px; alignment-adjust: central; font-family: arial; font-size: 12px;">
	   <tr>
          <td>&nbsp;</td>
          <td>Consumo</td>
          <td><?php echo $recibo['Recibo']['totaldescuento'] ?></td>
       </tr>
    </table>
	<table style="width: 200px; font-family: arial; font-size: 12px;">
		<tr>
			<td colspan="3" style="text-align: right;">
				&nbsp;&nbsp;--------------
			</td>
		</tr>
		<tr>
			<td colspan="2" style="text-align: right;">
				TOTAL A PAGAR: Bs.
			</td>
			<td style="text-align: right;">
				<?php echo $recibo['Recibo']['totaldescuento'] ?>
			</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: right;">
				Efectivo Bs.
			</td>
			<td style="text-align: right;">
				<?php echo $recibo['Recibo']['efectivo'] ?>
			</td>
		</tr>
		<tr>
			<td colspan="3" style="text-align: right;">
				CAMBIO Bs.
			</td>
			<td style="text-align: right;">
				<?php echo $recibo['Recibo']['cambio'] ?>
			</td>
		</tr>
	</table>
	----------------------------------------------------
    SON:<?php echo $literal ?>&nbsp;CON&nbsp;<?php echo $decimales ?>/100<br />
</div>
<div style="width: 200px; padding: 5px 10px 5px 10px; text-align: center;">
	"La presente nota fiscal no est&aacute; autorizado para nota fiscal, 
    el uso no autorizado constituye un delito a ser sancionado Conforme a Ley"
</div>
----------------------------------------------------
<div style="width: 200px; padding: 5px 10px 5px 12px; text-align: center;">
	Usuario:
	<?php echo $usuario ?>
		<br />
		Gracias por su preferencia
		<br />
		Regrese pronto
		<br />
		*******************
</div>
</div>
<script type="text/javascript">
   $(document).ready(function() {

         $("#btnImprimir").click(function() {
            $("#btnImprimir").hide();
             printElem({ leaveOpen: true, printMode: 'popup' });
             //printElem({ overrideElementCSS: ['/colegio/css/print.css'] });
         });
     });
 function printElem(options){
     $('#areaImprimir').printElement(options);
 }

 </script>