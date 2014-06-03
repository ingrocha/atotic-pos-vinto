<div id="main-sidebar" class="sidebar">
    <div class="sidebar-item">
        <div class="media profile">
            <div class="media-thumb media-left thumb-bordereb"> 
            <a class="img-shadow" href="javascript:void(0);">
            <?php echo $this->Html->image('demo-avatar.jpg') ?>
            </a> 
            </div>
            <div class="media-body">
            
            <h5 class="media-heading">Nombre <small>Administrador</small></h5>
                
            </div>
        </div>
    </div>
    <!-- // sidebar item - profile -->

    <ul id="mainSideMenu" class="nav nav-list nav-side">
        <li class="accordion-group active">
            <div class="accordion-heading"> <a href="#accDash" data-parent="#mainSideMenu" data-toggle="collapse" class="accordion-toggle"> <span class="item-icon fontello-icon-monitor"></span> <i class="chevron fontello-icon-right-open-3"></i> Reportes</a> </div>
            <ul class="accordion-content nav nav-list collapse in" id="accDash">
                <li> <a href="<?php echo $this->Html->url(array('controller' => 'Reportes','action' => 'graficos'));?>"> <i class="fontello-icon-right-dir"></i> <span class="hidden-tablet">Reporte Grafico</span></a> </li>
                <li> <a href="<?php echo $this->Html->url(array('controller' => 'Reportes','action' => 'formularioreporteproductos'));?>"> <i class="fontello-icon-right-dir"></i> <span class="hidden-tablet">Formulario de Reportes</span> </a> </li>
            </ul>
        </li>
        <!-- // item accordionMenu Dashboard -->
       
    </ul>
    <!--Menu reportes-->
     
    
    
    <!-- // sidebar menu -->

    <div class="sidebar-item"></div>
    <!-- // sidebar item --> 
</div>
