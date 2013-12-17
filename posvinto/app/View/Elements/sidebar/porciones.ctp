<div id="main-sidebar" class="sidebar">
    <div class="sidebar-item">
        <div class="media profile">
            <div class="media-thumb media-left thumb-bordereb"> <a class="img-shadow" href="javascript:void(0);"><?php echo $this->Html->image('demo-avatar.jpg') ?></a> </div>
            <div class="media-body">
            
            <h5 class="media-heading">Nombre <small>Administrador</small></h5>
                
            </div>
        </div>
    </div>
    <!-- // sidebar item - profile -->

    <ul id="mainSideMenu" class="nav nav-list nav-side">
        <li class="accordion-group active">
            <div class="accordion-heading"> <a href="#accDash" data-parent="#mainSideMenu" data-toggle="collapse" class="accordion-toggle"> <span class="item-icon fontello-icon-monitor"></span> <i class="chevron fontello-icon-right-open-3"></i> Porciones </a> </div>
            <ul class="accordion-content nav nav-list collapse in" id="accDash">
                <li> <a href="<?php echo $this->Html->url(array('controller'=>'Porciones', 'action'=>'index')); ?>"> <i class="fontello-icon-right-dir"></i> <span class="hidden-tablet">Listado de Porciones</span></a> </li>
                <li> <a href="<?php echo $this->Html->url(array('controller'=>'Porciones', 'action'=>'insertar')); ?>"> <i class="fontello-icon-right-dir"></i> <span class="hidden-tablet">Insertar Nueva Porcion</span> </a> </li>
            </ul>
        </li>
        <!-- // item accordionMenu Dashboard -->
     
    </ul>
    
    <ul id="mainSideMenu" class="nav nav-list nav-side">
        <li class="accordion-group active">
            <div class="accordion-heading in"> <a href="#accDash" data-parent="#mainSideMenu" data-toggle="collapse" class="accordion-toggle"> <span class="item-icon fontello-icon-monitor"></span> <i class="chevron fontello-icon-right-open-3"></i> Accion "Porciones" </a> </div>
            <ul class="nav nav-list">
            <li><?php echo $this->Html->image('iconos/in.png')?>&nbsp;&nbsp;&nbsp;Ingresa a Almacen</li>
            <li><?php echo $this->Html->image('iconos/edit.png')?>&nbsp;&nbsp;&nbsp;Edita Insumo</li>
            <li><?php echo $this->Html->image('iconos/out.png')?>&nbsp;&nbsp;&nbsp;Salida Almacen</li>
            <li><?php echo $this->Html->image('iconos/elim.png')?>&nbsp;&nbsp;&nbsp;Elimina Insumo</li>
            </ul>
        </li>
        <!-- // item accordionMenu Dashboard -->
       
    </ul>
    <!-- // sidebar menu -->

    <div class="sidebar-item"></div>
    <!-- // sidebar item --> 
</div>
