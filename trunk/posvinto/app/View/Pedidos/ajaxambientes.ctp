<div class="row-fluid">

<div class="span9">
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
                            $("ul.nav-tabs li:first").addClass("active").show(); //Activar primera pesta�a
                            $(".contenido_tab:first").show(); //Mostrar contenido primera pesta�a

                            // Sucesos al hacer click en una pesta�a
                            $("ul.nav-tabs li").click(function() {
                                $("ul.nav-tabs li").removeClass("active"); //Borrar todas las clases "activa"
                                $(this).addClass("active"); //A�adir clase "activa" a la pesta�a seleccionada
                                $(".contenido_tab").hide(); //Ocultar todo el contenido de la pesta�a
                                var activatab = $(this).find("a").attr("href"); //Leer el valor de href para identificar la pesta�a activa
                                //alert(activatab);
                                $(activatab).fadeIn(); //Visibilidad con efecto fade del contenido activo
                                return false;
                            });   
                        });
    
</script>

</div>

</div>