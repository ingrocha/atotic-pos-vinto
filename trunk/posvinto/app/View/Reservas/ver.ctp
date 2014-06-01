<div id="main-content" class="main-content container-fluid">
    <!-- // sidebar --> 
    <?php echo $this->element('sidebar/reservas'); ?>               
    <!-- // fin sidebar -->
    <!-- // contenido pricipal -->                                 
    <div id="page-content" class="page-content">
        <section>
            <div class="page-header">
                <h4><i class="fontello-icon-user"></i> Reserva del Cliente<small>Restaurante Oh Cochabamba Querida.....!!!!</small></h4>
                </div>
            <div class="widget-content">
                                    <div class="widget-body">
                                        <form id="accounForm" class="form-horizontal" method="" action="#" >
                                            <div class="row-fluid">
                                                <div class="span12">
                                                    <div class="control-group no-margin-bootom">
                                                        <label class="control-label label-left"> 
                                                           
                                                           <?php echo $this->Html->image("pedido.jpg");?> </label>
                                                        <div class="controls">
                                                            <address>
                                                            <h2>Reserva Especial</h2>
                                                            <strong>Reservas del Cliente:<p>
                                                                
                                                                <a><?php echo $reservas['Reserva']['cliente_id'];?></a></strong><br>
                                                                <abbr><strong>Tipo Evento:</strong></abbr> <a><?php echo $reservas['Reserva']['tipoevento_id'];?></a><br><p>
                                                                    <abbr><strong>Cantidad de Personas:</strong></abbr> <a><?php echo $reservas['Reserva']['cantidad_personas'];?></a><p>
                                                                    <abbr><strong>Fecha de Evento:</strong></abbr> <a><?php echo $reservas['Reserva']['fecha'];?></a><br><p>
                                                                    <abbr><strong>Hora de Evento:</strong></abbr> <a><?php echo $this->Form->input('hora', array('type' => 'time', 'interval' => 15, 'timeFormat'=>24)); ?></a><br><p>
                                                                    <abbr><strong>Observaciones:</strong></abbr> <a><?php echo $reservas['Reserva']['observaciones'];?></a>
                                                            
                                                            </address>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                            </div>
        </section>
    </div>	
    <!-- // fin contenido principal --> 
</div>