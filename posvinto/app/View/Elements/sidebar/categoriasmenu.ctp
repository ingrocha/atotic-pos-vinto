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
            <div class="accordion-heading"> <a href="#accDash" data-parent="#mainSideMenu" data-toggle="collapse" class="accordion-toggle"> <span class="item-icon fontello-icon-monitor"></span> <i class="chevron fontello-icon-right-open-3"></i> Productos </a> </div>
            <ul class="accordion-content nav nav-list collapse in" id="accDash">
                
                <li> <a href="<?php echo $this->Html->url(array('controller'=>'Productos', 'action'=>'clasesmenu')); ?>"> <i class="fontello-icon-right-dir"></i> <span class="hidden-tablet">Clases Menu</span></a> </li>
                <li> <a href="<?php echo $this->Html->url(array('controller'=>'Productos', 'action'=>'nuevaclase')); ?>"> <i class="fontello-icon-right-dir"></i> <span class="hidden-tablet">Nueva Clases Menu</span></a> </li>                
                <li> <a href="<?php echo $this->Html->url(array('controller'=>'Productos', 'action'=>'categoriasmenu')); ?>"> <i class="fontello-icon-right-dir"></i> <span class="hidden-tablet">Categorias Menu</span></a> </li>
                <li> <a href="<?php echo $this->Html->url(array('controller'=>'Productos', 'action'=>'nuevacategoria')); ?>"> <i class="fontello-icon-right-dir"></i> <span class="hidden-tablet">Nueva Categoria Menu</span> </a> </li>
                <li> <a href="<?php echo $this->Html->url(array('controller'=>'Productos', 'action'=>'platos')); ?>"> <i class="fontello-icon-right-dir"></i> <span class="hidden-tablet">Listado Platos</span></a> </li>
                <li> <a href="<?php echo $this->Html->url(array('controller'=>'Productos', 'action'=>'nuevoplato')); ?>"> <i class="fontello-icon-right-dir"></i> <span class="hidden-tablet">Nuevo Plato</span> </a> </li>
                <li> <a href="<?php echo $this->Html->url(array('controller'=>'Productos', 'action'=>'productosmenu')); ?>"> <i class="fontello-icon-right-dir"></i> <span class="hidden-tablet">Productos en Menu</span></a> </li>
                <li> <a href="<?php echo $this->Html->url(array('controller'=>'Productos', 'action'=>'nuevoprodmenu')); ?>"> <i class="fontello-icon-right-dir"></i> <span class="hidden-tablet">Nuevo Producto en Menu</span> </a> </li>
            </ul>
        </li>
        <!-- // item accordionMenu Dashboard -->
       
    </ul>
    
    <ul id="mainSideMenu" class="nav nav-list nav-side">
        <li class="accordion-group active">
            <div class="accordion-heading in"> <a href="#accDash" data-parent="#mainSideMenu" data-toggle="collapse" class="accordion-toggle"> <span class="item-icon fontello-icon-monitor"></span> <i class="chevron fontello-icon-right-open-3"></i> Accion "Usuarios" </a> </div>
            <ul class="nav nav-list">
            <li><?php echo $this->Html->image('iconos/edit.png')?>&nbsp;&nbsp;&nbsp;Edita el Producto</li>
            <li><?php echo $this->Html->image('iconos/elim.png')?>&nbsp;&nbsp;&nbsp;Elimina el Producto</li>
            <li><?php echo $this->Html->image('iconos/candado.png')?>&nbsp;&nbsp;&nbsp;Cambia el Password</li>
            </ul>
        </li>
        <!-- // item accordionMenu Dashboard -->
       
    </ul>
    <!-- // sidebar menu -->

    <div class="sidebar-item"></div>
    <!-- // sidebar item --> 
</div>
