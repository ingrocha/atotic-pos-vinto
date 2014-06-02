
<div id="page-content" class="page-content tab-content">
                <div class="tab-pane active" id="TabPage1">
                    <h2><i class="fontello-icon-progress-0"></i> Ambientes <small> Disponibles</small></h2>
                </div>
                <div align="center">
<?php if(!empty($ambientes)):?>
<?php foreach($ambientes as $am):?>
<p>
<?php echo $this->Html->link('AMBIENTE '.$am['Ambiente']['numero'],array('action' => 'index',$am['Ambiente']['id']),array('class' => 'btn btn-blue'));?>
</p>

<?php endforeach;?>
<?php endif;?>
</div>
</div>

<?php echo $this->Html->link('ADICIONAR AMBIENTE','#defaultModal',array('class' => 'btn btn-green','data-toggle' => 'modal'));?> 
<td class="low-padding align-center">
            <?php echo $this->Html->link('Atras',array('controller'=>'Mesas','action'=>'index'),array('class'=>'btn btn-green'));?>
            </td>

<div id="defaultModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 id="myModalLabel"><i class="fontello-icon-popup"></i> ADICIONAR AMBIENTE</h4>
    </div>
    <?php echo $this->Form->create('Mesa',array('action' => 'addambiente', 'enctype' => 'multipart/form-data'),array('type' => 'file'));?>
    <div class="modal-body">
        
                                    <h4 class="simple-header"> SUBIR IMAGEN <small>Para el fondo de ambiente</small> </h4>
                                    <div class="well well-black inline">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="fileupload-new thumbnail" style="width: 200px; height: 120px;"> <img src="http://www.placehold.it/200x120/EFEFEF/AAAAAA&amp;text=no+image" /> </div>
                                            <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                            <div> <span class="btn btn-file"> <span class="fileupload-new">Seleccione una imagen de tipo "jpg"</span> <span class="fileupload-exists">Cambiar</span>
                                                
                                                <?php echo $this->Form->file('imagen');?>
                                                </span> <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remover</a> </div>
                                        </div>
                                        <!-- // image upload --> 
                                    </div>
        
    </div>
    <div class="modal-footer">
        <button class="btn btn-red" data-dismiss="modal">Close</button>
        <button class="btn btn-green"  type="submit">CREAR AMBIENTE</button>
        <?php //echo $this->Form->submit('CREAR AMBIENTE',array('class' => 'btn btn-green'));?>
        <?php echo $this->Form->end()?>
    </div>
</div>