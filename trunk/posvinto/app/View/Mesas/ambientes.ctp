
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