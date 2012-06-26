<script>
        function validacion() {
            
            var seleccionado = false;
            var checkboxes = document.getElementById("PedidoFacturar1Form");
            var cont = 0;
            for(var i=0; i< checkboxes.elements.length; i++) {
              var elemento = checkboxes.elements[i];
              if(elemento.type == "checkbox") {
                if(elemento.checked) {
                  cont = cont + 1;
                }
              }
            }
            $("#total").val(cont);
            
            if(cont == 0){
                seleccionado = false;
            }
                    
            if($("#totalSum").val() < 50)
               seleccionado = false;
            else
                seleccionado = true;
            
            if(!seleccionado) {
                alert("Sie müssen einen Daten und mind 50 Stk!");
                  return false;
                  
            }      
        
        }
        </script>
        <script>
        function permite(elEvento, permitidos) {
         // Variables que definen los caracteres permitidos
  var numeros = "1234567890";
  var caracteres = " abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
  var numeros_caracteres = numeros + caracteres;
  var teclas_especiales = [8, 37, 39, 46];
  // 8 = BackSpace, 46 = Supr, 37 = flecha izquierda, 39 = flecha derecha
 
 
  // Seleccionar los caracteres a partir del parámetro de la función
  switch(permitidos) {
    case 'num':
      permitidos = numeros;
      break;
    case 'car':
      permitidos = caracteres;
      break;
    case 'num_car':
      permitidos = numeros_caracteres;
      break;
  }
 
  // Obtener la tecla pulsada 
  var evento = elEvento || window.event;
  var codigoCaracter = evento.charCode || evento.keyCode;
  var caracter = String.fromCharCode(codigoCaracter);
 
  // Comprobar si la tecla pulsada es alguna de las teclas especiales
  // (teclas de borrado y flechas horizontales)
  var tecla_especial = false;
  for(var i in teclas_especiales) {
    if(codigoCaracter == teclas_especiales[i]) {
      tecla_especial = true;
      break;
    }
  }
 
  // Comprobar si la tecla pulsada se encuentra en los caracteres permitidos
  // o si es una tecla especial
  return permitidos.indexOf(caracter) != -1 || tecla_especial;
}
        </script>
<!-- Container -->
<div id="container">
	<div class="shell">
		
		<!-- Small Nav -->
		<div class="small-nav">
			<a href="#">Ingresos</a>
			<span>&gt;</span>
			Listado &uacute;ltimos ingresos
		</div>
		<!-- End Small Nav -->
		
		<br />
		<!-- Main -->
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<!-- Content -->
			<div id="content">
				
				<!-- Box -->
				<div class="box">
					<!-- Box Head -->
					<div class="box-head">
						<h2 class="left">&Uacute;ltimos 20 ingresos</h2>
						<div class="right">
							<label>filtrar</label>
							<input type="text" class="field small-field" />
							<input type="submit" class="button" value="buscar" />
						</div>
					</div>
					<!-- End Box Head -->	

					<!-- Table -->
                    <?php //debug($pedido);?>
					<div class="table">
                      <?php echo $this->Form->create(null, array(
                            'url' => array('controller' => 'controlpedidos', 'action' => 'facturar2')
                            ));
                    ?>
                     
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
                        
							<tr>
								<!--<th width="13"><input type="checkbox" class="checkbox" /></th>-->
                                <th width="13"><input type="checkbox" class="checkbox" /></th>
                                <th>Item</th>
								<th>cantidad</th>
                                <th>precio</th>
                                <th>subtotal</th>								
							</tr>
                           
                            <?php $i=0; ?>
                             <?php $total =0;?>
                            
                            <?php foreach($pedido as $data):?>
                            <?php $precio =0;?>
                            <?php $total = $total + $data['Item']['precio'];
                            $precio = $data['Item']['precio']/$data['Item']['cantidad'];
                            ?>
                                <?php if((fmod($i, 2) == 1)?$clase="odd":$clase="");?>
                                <?php $i++;?>
    							<tr class="<?php echo $clase;?>">
                                    <td>
                                       <!--<input type="checkbox" class="checkbox"/>-->
                                       
                                       <?php //echo $this->Form->checkbox("Pedido.$i.chk", array('class'=>'checkbox', 'id'=>"chk$i", 'value'=>$data['Item']['id']));?>
                                       <!--<input type="checkbox" name="checkbox_<?php //echo $i;?>" id="chk<?php //echo $i;?>" value="<?php //echo $data['Item']['id'];?>" />-->
                                    </td>
                                    <?php echo $this->Form->hidden("Pedido.$i.itemId", array('value'=>$data['Item']['id']));?>
                                   	<td><?php echo $this->Form->text("Pedido.$i.producto", array('value'=>$data['Producto']['nombre'],'size'=>20,  'disabled'=>'disabled'));?></td>
                                    <td><h3><?php echo $this->Form->text("Pedido.$i.cantidad", array('value'=>$data['Item']['cantidad'],'size'=>5, 'disabled'=>'disabled'));?></h3></td>
                                    <td><?php echo $this->Form->text("Pedido.$i.preciou", array('value'=>$precio,'size'=>5, 'disabled'=>'disabled'));?></td>
    								<td>
                                       <?php //echo $this->Form->text("Pedido.$i.importep", array('value'=>$data['Item']['precio'],'size'=>5, 'id'=>"canti_$i", 'onkeypress'=>"return permite(event, 'num')",  'disabled'=>'disabled'));?>
                                   <div id="qty_item_<?php echo $i;?>">
                                        <input type="text"  id="canti_<?php echo $i;?>" name="data[Pedido][<?php echo $i;?>][importep]"  size="5" style="text-align: right; margin-right: 5px; padding-right: 7px; margin-bottom: 5px; " onKeyPress="return permite(event, 'num')"/> Bs.
                                   </div>
                                    </td>
    								
    								<!--<td><a href="#" class="ico del">Eliminar</a><a href="#" class="ico edit">Detalle</a></td>-->
    							</tr>
							<?php endforeach;?>
                            <tr>
                                 <td style="width: 221px;"><b style="margin-left: 27px;">Total</b></td>
                                 <td>
                                    <input type="text" name="total" id="totalSum" size="4" value="0" disabled="disable" /> (Bs.)     
                                 </td>
                            </tr>
                            <!--<tr>
                               <td colspan="5" style="float: left;">
                               	
                               </td>
                            </tr>-->
						</table>
						<div class="buttons">
						
							<?php 
                            $options = array(
                            'label' => 'Facturar!',
                            'name' => 'Enviar',
                            'class' => 'button',
      
                            );
                            echo $this->Form->end($options);?>
						</div>
						
						<!-- Pagging -->
						<div class="pagging">
							<div class="left"><?php 
                        //echo $this->Paginator->counter(
                        //            'Mostrando {:current} - {:end}  de {:pages}, total
                        //             {:count}'
                        //        );
                        ?></div>
							<div class="right">
								<a href="#">Previous</a>
								<a href="#">1</a>
								<a href="#">2</a>
								<a href="#">3</a>
								<a href="#">4</a>
								<a href="#">245</a>
								<span>...</span>
								<a href="#">Next</a>
								<a href="#">View all</a>
							</div>
						</div>
						<!-- End Pagging -->
						
					</div>
					<!-- Table -->
					
				</div>
				<!-- End Box -->
				
				<!-- Box -->
				<div class="box">
					<!-- Box Head -->
					<div class="box-head">
						<h2>Add New Article</h2>
					</div>
					<!-- End Box Head -->
					
				</div>
				<!-- End Box -->

			</div>
			<!-- End Content -->
			
			<!-- Sidebar -->
			<div id="sidebar">
				
				<!-- Box -->
				<div class="box">
					
					<!-- Box Head -->
					<div class="box-head">
						<h2>Management</h2>
					</div>
					<!-- End Box Head-->
					
					<div class="box-content">
						<a href="controlingresos/ingresar" class="add-button"><span>Ingresar nuevo item</span></a>
						<div class="cl">&nbsp;</div>
						
						<p class="select-all"><input type="checkbox" class="checkbox" /><label>seleccionar todos</label></p>
						<p><a href="#">Deseleccionar todos</a></p>
						
						<!-- Sort -->
						<div class="sort">
							<label>Ordenar por</label>
							<select class="field">
								<option value="">T&iacute;tulo</option>
							</select>
							<select class="field">
								<option value="">Fecha</option>
							</select>
							<select class="field">
								<option value="">Persona</option>
							</select>
						</div>
						<!-- End Sort -->
						
					</div>
				</div>
				<!-- End Box -->
			</div>
			<!-- End Sidebar -->
			
			<div class="cl">&nbsp;</div>			
		</div>
		<!-- Main -->
	</div>

<script>
   var bIsFirebugReady = (!!window.console && !!window.console.log);
 
    jQuery(document).ready(function(){
         
                     
    jQuery("input[type='text']").val(" ");
    //$("input[type='checkbox']").attr('checked', false);
    
    jQuery("input[type='checkbox']").change(function(){
        
        if ($("#chk1").is(':checked')) {
            //alert("habilitado 1");
            $('#qty_item_1 :input').removeAttr('disabled');
            
            
        } else {
        //alert("deshabilitado 1");
        $("#canti_1").val(" ");
        $('#qty_item_1 :input').attr('disabled', true);
        
        }
        
        $("input[name^=cantidad_]").sum("keyup", "#totalSum");
    }
    );
       
      
    /*$("#envia").mouseover(function(){
        var checkboxes = document.getElementById("formulario").checkbox;
        var cont = 0;
        var montoTotal = 0;
        
        for (var x=0; x < checkboxes.length; x++) {
            alert("entra");
            if (checkboxes[x].checked) {
                cont = cont + 1;
                
            }
        }
        $("#total").val(cont);
        if($("#totalSum").val() < 50)
           alert("Total must be Mind. 50 Stk.");
       
    });*/
    // update the plug-in version

			$("#idPluginVersion").text($.Calculation.version);

/*			
			$.Calculation.setDefaults({
				onParseError: function(){
					this.css("backgroundColor", "#cc0000")
				}
				, onParseClear: function (){
					this.css("backgroundColor", "");
				}
			});
*/
			
			// bind the recalc function to the quantity fields
			$("input[id^=qty_item_]").bind("keyup", recalc);
			// run the calculation function now
			recalc();


			// automatically update the "#totalSum" field every time
			// the values are changes via the keyup event

			//$("input[name^=cantidad_]").sum("keyup", "#totalSum");
            
			
			// automatically update the "#totalAvg" field every time
			// the values are changes via the keyup event
			$("input[name^=avg]").avg({
				bind:"keyup"
				, selector: "#totalAvg"
				// if an invalid character is found, change the background color
				, onParseError: function(){
					this.css("backgroundColor", "#cc0000")
				}
				// if the error has been cleared, reset the bgcolor
				, onParseClear: function (){
					this.css("backgroundColor", "");
				}
			});


			// automatically update the "#minNumber" field every time
			// the values are changes via the keyup event
			$("input[name^=min]").min("keyup", "#numberMin");

			// automatically update the "#minNumber" field every time
			// the values are changes via the keyup event
			$("input[name^=max]").max("keyup", {
				selector: "#numberMax"
				, oncalc: function (value, options){
					// you can use this to format the value
					$(options.selector).val(value);
				}
			});

			// this calculates the sum for some text nodes

			$("#idTotalTextSum").click(

				function (){
					// get the sum of the elements

					var sum = $(".textSum").sum();



					// update the total
					$("#totalTextSum").text("$" + sum.toString());

				}

			);



			// this calculates the average for some text nodes

			$("#idTotalTextAvg").click(

				function (){

					// get the average of the elements
					var avg = $(".textAvg").avg();



					// update the total
					$("#totalTextAvg").text(avg.toString());

				}

			);
            function recalc(){
		$("[id^=total_item]").calc(
			// the equation to use for the calculation
			"qty * price",
			// define the variables used in the equation, these can be a $ object
			{
				qty: $("input[id^=qty_item_]"),
				price: $("[id^=price_item_]")
			},
			// define the formatting callback, the results of the calculation are passed to this function
			function (s){
				// return the number as a dollar amount
				return "$" + s.toFixed(2);
			},
			// define the finish callback, this runs after the calculation has been complete
			function ($this){
				// sum the total of the $("[id^=total_item]") selector
				var sum = $this.sum();
				
				$("#grandTotal").text(
					// round the results to 2 digits
					"$" + sum.toFixed(2)
				);
			}
		);
	}
    
   });

</script>