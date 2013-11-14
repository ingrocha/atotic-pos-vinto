<style>
body {
        padding-top: 60px;
        padding-bottom: 40px;
    }
    .sidebar-nav {
        padding: 9px 0;
    }

    @media (max-width: 980px) {
        /* Enable use of floated navbar text */
        .navbar-text.pull-right {
            float: none;
            padding-left: 5px;
            padding-right: 5px;
        }
    }

    .hero-unit h3.nombre{
        color: #4D0F04;        
    }

    /* Set the fixed height of the footer here */
    #push,
    #footer {
        height: 60px;
    }
    #footer {
        background-color: #f5f5f5;
    }
    /*botones principales de las mesas*/
    .btn-primary {
        background-color: #006DC;
        background-image: linear-gradient(to bottom, #FFD47F, #FFD47F);
        background-repeat: repeat-x;
        border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
        color: #000;
        text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
    }
    /*letras de los botones*/
    .hero-unit a.btn-primary{
        text-transform: uppercase;   
        font-weight: bold;
        font-size: 22pt;
        padding-bottom: 20px;
        padding-top: 25px;
        width: 150px;        
        margin-bottom: 10px;
        margin-right: 10px;       
    }   
    
    .btn-primary:hover,
    .btn-primary:focus,
    .btn-primary:active,
    .btn-primary.active,
    .btn-primary.disabled,
    .btn-primary[disabled] {
  color: #000;
  background-color: #FFD47F;
  background-color: #003bb3;
}
    
</style>
<div class="container-fluid">
<div class="row-fluid">
<div class="span9" >

<ul class="nav nav-tabs">
<?php foreach($ambientes as $am):?>
  <li><a href="#tab<?php echo $am['Ambiente']['id'];?>" onclick="$('#tab<?php echo $am['Ambiente']['id'];?>').load('<?php echo $this->Html->url("ajaxmapa/".$datosMoso['User']['id'].'/'.$am['Ambiente']['id']);?>');">Ambiente <?php echo $am['Ambiente']['numero'];?></a></li>
<?php endforeach;?>
</ul>
<?php foreach($ambientes as $am):?>
<div id="tab<?php echo $am['Ambiente']['id'];?>" class="contenido_tab">
<script>
$('#tab<?php echo $am['Ambiente']['id'];?>').load('<?php echo $this->Html->url("ajaxmapa/".$datosMoso['User']['id'].'/'.$am['Ambiente']['id']);?>');

</script>

</div>
<?php endforeach;?>

<script type='text/javascript'>
    
                        $(document).ready(function() {
                            $(".contenido_tab").hide(); //Ocultar capas
                            $("ul.nav-tabs li:first").addClass("active").show(); //Activar primera pestaña
                            $(".contenido_tab:first").show(); //Mostrar contenido primera pestaña

                            // Sucesos al hacer click en una pestaña
                            $("ul.nav-tabs li").click(function() {
                                $("ul.nav-tabs li").removeClass("active"); //Borrar todas las clases "activa"
                                $(this).addClass("active"); //Añadir clase "activa" a la pestaña seleccionada
                                $(".contenido_tab").hide(); //Ocultar todo el contenido de la pestaña
                                var activatab = $(this).find("a").attr("href"); //Leer el valor de href para identificar la pestaña activa
                                //alert(activatab);
                                $(activatab).fadeIn(); //Visibilidad con efecto fade del contenido activo
                                
                                return false;
                            });   
                        });
    
</script>

</div>

</div>







    <div class="row-fluid">
        <div class="span9">
            <div class="hero-unit"> 
                         
                <h2>MOSO: <?php echo $datosMoso['User']['nombre']; ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </h2>
                     

            </div>                    
        </div><!--/span-->

        
    </div><!--/row-->
    <div class="row-fluid">
        <div class="span10">            
             
             
            <a href="<?php echo $this->Html->url(array('action' => 'validamoso')); ?>" class="btn btn-large">CERRAR</a>
        </div>
    </div>
    
    
    <hr/>
    <div id="footer">
        <div class="container">
            LabWare
        </div>
    </div>    

</div><!--/.fluid-container-->
<!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Modal title</h4>
        </div>
        <div class="modal-body">
          <div id="cargaPedidos">
          </div>
    
        </div>
        <div class="modal-footer">
          <?php echo $this->Form->submit('OCUPAR',array());?>
          <?php echo $this->Form->end();?>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

<?php echo $this->Js->writeBuffer(); ?>