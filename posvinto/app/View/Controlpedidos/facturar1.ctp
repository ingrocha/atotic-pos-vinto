<!--Script para el calculo del total de la factura-->
<script type="text/javascript">

    var bIsFirebugReady = (!!window.console && !!window.console.log);



    jQuery(document).ready(

    function (){

        // update the plug-in version

        jQuery("#idPluginVersion").text(jQuery.Calculation.version);

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
        jQuery("input[id^=qty_item_]").bind("keyup", recalc);
        
        // run the calculation function now
        recalc();


        // automatically update the "#totalSum" field every time
        // the values are changes via the keyup event

        jQuery("input[name^=sum]").sum("keyup", "#totalSum");
			
        // automatically update the "#totalAvg" field every time
        // the values are changes via the keyup event
        jQuery("input[name^=avg]").avg({
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
        jQuery("input[name^=min]").min("keyup", "#numberMin");

        // automatically update the "#minNumber" field every time
        // the values are changes via the keyup event
        jQuery("input[name^=max]").max("keyup", {
            selector: "#numberMax"
            , oncalc: function (value, options){
                // you can use this to format the value
                jQuery(options.selector).val(value);
            }
        });

        // this calculates the sum for some text nodes

        jQuery("#idTotalTextSum").click(

        function (){
            // get the sum of the elements

            var sum = jQuery(".textSum").sum();



            // update the total
            jQuery("#totalTextSum").text("$" + sum.toString());

        }

    );



        // this calculates the average for some text nodes

        jQuery("#idTotalTextAvg").click(

        function (){

            // get the average of the elements
            var avg = jQuery(".textAvg").avg();



            // update the total
            jQuery("#totalTextAvg").text(avg.toString());

        }

    );

    }

);
	
    function recalc(){
        jQuery("[id^=total_item]").calc(
        // the equation to use for the calculation
        "qty * price",
        // define the variables used in the equation, these can be a jQuery object
        {
            qty: jQuery("input[id^=qty_item_]"),
            price: jQuery("[id^=price_item_]")
        },
        // define the formatting callback, the results of the calculation are passed to this function
        function (s){
            // return the number as a dollar amount
            return "$ " + s.toFixed(2);
        },
        // define the finish callback, this runs after the calculation has been complete
        function ($this){
            // sum the total of the $("[id^=total_item]") selector
            var sum = $this.sum();
            var adri = <?php echo $totalrecargas; ?>;
            var totalg = sum + adri;
            jQuery("#grandTotal").text(
            // round the results to 2 digits
            "$" + sum.toFixed(2)
        );
            jQuery("#totalpago").text(
            "$"+totalg.toFixed(2)
        );
        }
    );
    }

</script>
<!--fin script calculadora-->
<?php echo $this->Html->script('jquery.calculation'); ?>
<!-- Container -->
<div id="container">
    <div class="shell">

        <!-- Small Nav -->
        <div class="small-nav">
            Sistema de facturacion paso 1
        </div>
        <!-- End Small Nav -->

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
                        <h2>Buscar pedido</h2>
                    </div>
                    <!-- End Box Head -->
                    <!-- Form -->
                    <?php
                    echo $this->Form->create(null, array(
                        'url' => array('controller' => 'controlpedidos', 'action' => 'facturarnormal')
                    ));
                    ?>
                    <div class="form">
                        <!-- Table -->
<?php //debug($pedido); ?>
                        <div class="table">

                            <table>
<?php echo $this->Form->hidden("1.Pedido.idpedido", array('value' => $idpedido)); ?>
                                <tr>
                                    <td>NOMBRE:</td>
                                    <td>
<?php echo $this->Form->text("1.Pedido.nombre", array('size' => 20)); ?>

                                    </td>
                                </tr>
                                <tr>
                                    <td>NIT: </td>
                                    <td>
                                        <?php echo $this->Form->text("1.Pedido.nit", array('size' => 20)); ?>
<?php //echo $ajax->autoComplete('1.Pedido.nit', '/autoComplete') ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>MONTO EFECTIVO: </td>
                                    <td>
                                        <?php echo $this->Form->text("1.Pedido.efectivo", array('size' => 10)); ?>
<?php //echo $ajax->autoComplete('1.Pedido.nit', '/autoComplete') ?>
                                    </td>
                                </tr>
                            </table>

                            <table width="100%" border="0" cellspacing="0" cellpadding="0">

                                <tr>
                                    <th width="13"><input type="checkbox" class="checkbox" onClick="if (this.checked) sumar(); else restar()" /></th>
                                    <th>Item</th>
                                    <th>cantidad</th>
                                    <th>precio</th>
                                    <th align="center">subtotal</th>								
                                </tr>

                                <?php $i = 0; ?>
                                <?php $total = 0; ?>

                                <?php foreach ($pedido as $data): ?>
                                    <?php $precio = 0; ?>
                                    <?php
                                    $total = $total + $data['Item']['precio'];
                                    $precio = $data['Item']['precio'] / $data['Item']['cantidad'];
                                    ?>
                                    <?php if ((fmod($i, 2) == 1) ? $clase = "odd" : $clase = "") ; ?>
                                            <?php $i++; ?>
                                    <tr class="<?php echo $clase; ?>">
                                        <td> 
    <?php echo $this->Form->checkbox("$i.Pedido.chk", array('class' => 'checkbox', 'id' => "chk$i", 'value' => $data['Item']['id'], 'checked' => 'checked')); ?>
    <?php echo $this->Form->hidden("$i.Pedido.producto_id", array('value' => $data['Producto']['id'])); ?>
                                        </td>

                                       	<td>
    <?php echo $this->Form->hidden("$i.Pedido.producto", array('value' => $data['Producto']['nombre'])); ?>
    <?php echo $data['Producto']['nombre']; ?>
                                        </td>

                                        <td>
                                            <h3>
                                                <?php echo $this->Form->hidden("$i.Pedido.cantidad", array('value' => $data['Item']['cantidad'], "id" => "qty_item_$i")); ?>
    <?php echo $data['Item']['cantidad']; ?>
    <?php //echo $this->Form->text("Pedido.$i.cantidad", array('value'=>$data['Item']['cantidad'],'size'=>5, 'disabled'=>'disabled')); ?>
                                            </h3>
                                        </td>
                                        <td>
    <?php echo $this->Form->hidden("$i.Pedido.preciou", array('value' => $precio, "id" => "price_item_$i")); ?>
    <?php echo "$ " . number_format($precio, 2, '.', ','); ?>
                                        </td>
                                        <td align="left" id="total_item_<?php echo $i; ?>">$ 0</td>
                                    </tr>
<?php endforeach; ?>
                                <tr>
                                    <td colspan="4"><b style="margin-left: 27px;">Total</b></td>
                                    <td align="left">
                                        $ <?php echo number_format($total, 2, '.', ','); ?>     
                                    </td>
                                </tr>
                                <!--<tr>
                                   <td colspan="5" style="float: left;">
                                    
                                   </td>
                                </tr>-->
                            </table>
                            <!-- end table-->						
                        </div>
                        <!-- End Form -->

                        <!-- Form Buttons -->
                        <div class="buttons">
                            <!--<input type="button" class="button" value="preview" />-->
                            <div style="float: left;">
                                <?php
                                $options = array(
                                    'label' => 'facturar!',
                                    'name' => "data[$i][Pedido][enviar]",
                                    'class' => 'button',
                                );
                                echo $this->Form->end($options);
                                ?>
                            </div>
                            <div style="float: left;">
<?php echo $this->Html->link('dividir cuenta', array('controller' => 'controlpedidos', 'action' => 'dividir', $idpedido), array('class' => 'buttona')); ?>
                            </div>
                        </div>
                        <!-- End Form Buttons -->
                    </div>
                    <!-- End Box -->
                </div>
                <!-- Table -->
            </div>
            <!-- End Box -->
        </div>
        <!-- End Content -->
<?php echo $this->element('menupedidos') ?>

        <div class="cl">&nbsp;</div>			
    </div>
    <!-- Main -->
</div>

