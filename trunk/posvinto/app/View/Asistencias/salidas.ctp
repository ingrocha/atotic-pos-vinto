<?php echo $this->Html->css('keypad/jquery.keypad'); ?>
<?php echo $this->Html->script(array('keypad/jquery.keypad.min',
    'keypad/jquery.keypad-es')); ?>
<script type="text/javascript">
jQuery(function () {
	jQuery('#tecladonumerico').keypad();
});
</script>
<h1>Ingrese el codigo de mesero</h1>
<?php echo $this->Html->link('Cancelar',array('action' => 'index'),array('class' => 'myButton'));?>
<div class="formverificacodigo">
<?php 
    echo $this->Form->create('Asistencia');
    echo $this->Form->input('codigo', array('id' => 'tecladonumerico', 'size' => 5));
    $options = array('id' => 'button-login', 'Value' => 'Ingresar');
    echo $this->Form->end($options); 
?>
</div>
<style>


.myButton {
	-moz-box-shadow:inset 0px 1px 0px 0px #e67a73;
	-webkit-box-shadow:inset 0px 1px 0px 0px #e67a73;
	box-shadow:inset 0px 1px 0px 0px #e67a73;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #e4685d), color-stop(1, #eb675e));
	background:-moz-linear-gradient(top, #e4685d 5%, #eb675e 100%);
	background:-webkit-linear-gradient(top, #e4685d 5%, #eb675e 100%);
	background:-o-linear-gradient(top, #e4685d 5%, #eb675e 100%);
	background:-ms-linear-gradient(top, #e4685d 5%, #eb675e 100%);
	background:linear-gradient(to bottom, #e4685d 5%, #eb675e 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#e4685d', endColorstr='#eb675e',GradientType=0);
	background-color:#e4685d;
	border:1px solid #ffffff;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:arial;
	font-size:28px;
	font-weight:bold;
	padding:13px 33px;
	text-decoration:none;
}
.myButton:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #eb675e), color-stop(1, #e4685d));
	background:-moz-linear-gradient(top, #eb675e 5%, #e4685d 100%);
	background:-webkit-linear-gradient(top, #eb675e 5%, #e4685d 100%);
	background:-o-linear-gradient(top, #eb675e 5%, #e4685d 100%);
	background:-ms-linear-gradient(top, #eb675e 5%, #e4685d 100%);
	background:linear-gradient(to bottom, #eb675e 5%, #e4685d 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#eb675e', endColorstr='#e4685d',GradientType=0);
	background-color:#eb675e;
}
.myButton:active {
	position:relative;
	top:1px;
}

</style>