<?php echo $this->Html->script('jquery.ui.datepicker-es'); ?>
<script type="text/javascript">
    $(function(){
        var pickerOpts = {        
        dateFormat: "yy-mm-dd",
        changeMonth: true,
        changeYear: true,
        defaultDate: "+5",
        yearRange: "-1:+2"        
    };    
        $("#date").datepicker(pickerOpts);
    });
</script>


<!-- Container -->
<div id="container">
	<div class="shell">
		
		<!-- Small Nav -->
		<!--<div class="small-nav">
			
            <?php //echo $this->Html->link('Usuarios', array('controller'=>'usuarios', 'action'=>'index'))?>
			<span>&gt;</span>
			Lista de Usuarios
		</div>-->
		<!-- End Small Nav -->
		<h3><span>Nueva multa</span></h3>
		<br />
		<!-- Main -->
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<!-- Content -->
			<div id="content">
				
				<!-- Box -->
				<div class="boxa">
					<!-- Box Head -->
					<div class="box-head">
						<h2 class="left">NUEVA MULTA</h2>
						<div class="right">
							
						</div>
					</div>
					<!-- End Box Head -->	

					<!-- Table -->
					<div class="table">
<?php echo $this->element('tablagrid'); ?>  

						<?php echo $this->Form->create('ConfMulta'); ?>
<table>
<tr>
	<td>Hora actual</td>
    <td>
    <?php echo $hora ?>:<?php echo $minuto ?>
    </td>
    <td>
    
        <?php 
            $options = array(
                'label' => '',
                'type' => 'time',
                'timeFormat'=>'24',
                'separator'=>':',
                'interval'=>15
            );
            echo $this->Form->input('Hora',$options);           
        ?>        
    </td>
</tr>
<tr>
	<td>Monto</td>
	<td><?php echo $this->Form->text('monto'); ?></td>
</tr>
<tr>
	<td>Observaciones</td>
	<td><?php echo $this->Form->text('observaciones'); ?></td>
</tr>

<tr>
	<td></td>
</tr>
</table>
<?php echo $this->Form->end('editar'); ?>
						
						<!-- Pagging -->
						<div class="pagging">
							<div class="left"></div>
							<div class="right">                            								
							</div>
						</div>
						<!-- End Pagging -->
						
					</div>
					<!-- Table -->
					
				</div>
				<!-- End Box -->
				
				
			</div>
			<!-- End Content -->
			
			<!-- Sidebar -->
			<!-- Sidebar -->
			<?php echo $this->element('menuusuarios') ?>
			<!-- End Sidebar -->
			<!-- End Sidebar -->
			
			<div class="cl">&nbsp;</div>			
		</div>
		<!-- Main -->
	</div>
