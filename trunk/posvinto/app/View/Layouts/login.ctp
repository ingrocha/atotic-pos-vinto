<!DOCTYPE html>
<!-- saved from url=(0025)http://themes.yac.cz/boo/ -->
<html><!--<![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title>Viva Vinto</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="description" content="">
<meta name="author" content="">

<?php
        echo $this->Html->css(array(
            'lib/bootstrap',
            'lib/bootstrap-responsive',
            'extension',
            'boo',
            'style',
            'boo-coloring',
            'boo-utility',
            'jquery-ui-1.9.2.custom.min'
        ));
        ?>     


<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <script src="assets/plugins/selectivizr/selectivizr-min.js"></script>
    <script src="assets/plugins/flot/excanvas.min.js"></script>
<![endif]-->

<style id="wrc-middle-css" type="text/css">.wrc_whole_window{	display: none;	position: fixed; 	z-index: 2147483647;	background-color: rgba(40, 40, 40, 0.9);	word-spacing: normal;	margin: 0px;	padding: 0px;	border: 0px;	left: 0px;	top: 0px;	width: 100%;	height: 100%;	line-height: normal;	letter-spacing: normal;}.wrc_middle_main {	font-family: Segoe UI, Arial Unicode MS, Arial, Sans-Serif;	font-size: 14px;	width: 600px;	height: auto;	margin: 0px auto;	margin-top: 15%;    background: url(chrome-extension://icmlaeflemplmjndnaapfdbbnpncnbda/skin/images/background-body.jpg) repeat-x left top;	background-color: rgb(39, 53, 62);}.wrc_middle_logo {    background: url(chrome-extension://icmlaeflemplmjndnaapfdbbnpncnbda/skin/images/logo.jpg) no-repeat left bottom;    width: 140px;    height: 42px;    color: orange;    display: table-cell;    text-align: right;    vertical-align: middle;}.wrc_icon_warning {	margin: 20px 10px 20px 15px;	float: left;	background-color: transparent;}.wrc_middle_title {    color: #b6bec7;	height: auto;    margin: 0px auto;	font-size: 2.2em;	white-space: nowrap;	text-align: center;}.wrc_middle_hline {    height: 2px;	width: 100%;    display: block;}.wrc_middle_description {	text-align: center;	margin: 15px;	font-size: 1.4em;	padding: 20px;	height: auto;	color: white;	min-height: 3.5em;}.wrc_middle_actions_main_div {	margin-bottom: 15px;	text-align: center;}.wrc_middle_actions_blue_button {	-moz-appearance: none;	border-radius: 7px;	-moz-border-radius: 7px/7px;	border-radius: 7px/7px;	background-color: rgb(0, 173, 223) !important;	display: inline-block;	width: auto;	cursor: Pointer;	border: 2px solid #00dddd;}.wrc_middle_actions_blue_button:hover {	background-color: rgb(0, 159, 212) !important;}.wrc_middle_actions_blue_button:active {	background-color: rgb(0, 146, 200) !important;	border: 2px solid #00aaaa;}.wrc_middle_actions_blue_button div {	display: inline-block;	width: auto;	cursor: Pointer;	margin: 3px 10px 3px 10px;	color: white;	font-size: 1.2em;	font-weight: bold;}.wrc_middle_action_low {	font-size: 0.9em;	white-space: nowrap;	cursor: Pointer;	color: grey !important;	margin: 10px 10px 0px 10px;	text-decoration: none;}.wrc_middle_action_low:hover {	color: #aa4400 !important;}.wrc_middle_actions_rest_div {	padding-top: 5px;	white-space: nowrap;	text-align: center;}.wrc_middle_action {	white-space: nowrap;	cursor: Pointer;	color: red !important;	font-size: 1.2em;	margin: 10px 10px 0px 10px;	text-decoration: none;}.wrc_middle_action:hover {	color: #aa4400 !important;}</style><script id="wrc-script-middle_window" type="text/javascript" language="JavaScript">var g_inputsCnt = 0;var g_InputThis = new Array(null, null, null, null);var g_alerted = false;/* we test the input if it includes 4 digits   (input is a part of 4 inputs for filling the credit-card number)*/function is4DigitsCardNumber(val){	var regExp = new RegExp('[0-9]{4}');	return (val.length == 4 && val.search(regExp) == 0);}/* testing the whole credit-card number 19 digits devided by three '-' symbols or   exactly 16 digits without any dividers*/function isCreditCardNumber(val){	if(val.length == 19)	{		var regExp = new RegExp('[0-9]{4}-[0-9]{4}-[0-9]{4}-[0-9]{4}');		return (val.search(regExp) == 0);	}	else if(val.length == 16)	{		var regExp = new RegExp('[0-9]{4}[0-9]{4}[0-9]{4}[0-9]{4}');		return (val.search(regExp) == 0);	}	return false;}function CheckInputOnCreditNumber(self){	if(g_alerted)		return false;	var value = self.value;	if(self.type == 'text')	{		if(is4DigitsCardNumber(value))		{			var cont = true;			for(i = 0; i < g_inputsCnt; i++)				if(g_InputThis[i] == self)					cont = false;			if(cont && g_inputsCnt < 4)			{				g_InputThis[g_inputsCnt] = self;				g_inputsCnt++;			}		}		g_alerted = (g_inputsCnt == 4);		if(g_alerted)			g_inputsCnt = 0;		else			g_alerted = isCreditCardNumber(value);	}	return g_alerted;}function CheckInputOnPassword(self){	if(g_alerted)		return false;	var value = self.value;	if(self.type == 'password')	{		g_alerted = (value.length > 0);	}	return g_alerted;}function onInputBlur(self, bRatingOk, bFishingSite){	var bCreditNumber = CheckInputOnCreditNumber(self);	var bPassword = CheckInputOnPassword(self);	if((!bRatingOk || bFishingSite == 1) && (bCreditNumber || bPassword) )	{		var warnDiv = document.getElementById("wrcinputdiv");		if(warnDiv)		{			/* show the warning div in the middle of the screen */			warnDiv.style.left = "0px";			warnDiv.style.top = "0px";			warnDiv.style.width = "100%";			warnDiv.style.height = "100%";			document.getElementById("wrc_warn_fs").style.display = 'none';			document.getElementById("wrc_warn_cn").style.display = 'none';			if(bFishingSite)				document.getElementById("wrc_warn_fs").style.display = 'block';			else				document.getElementById("wrc_warn_cn").style.display = 'block';			warnDiv.style.display = 'block';		}	}}</script></head>

<body class="login">
<div class="page-container">
    <div id="header-container">
        <div id="header">
        <div class="navbar navbar-inverse navbar-fixed-top">
                        <div class="navbar-inner">
                            <div class="container-fluid">
                                <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                                <a class="brand" href="javascript:void(0);"><?php echo $this->Html->image('logo-brand.png') ?></a>
                                
                            </div>
                        </div>
            
            <!-- // navbar -->
            
            <div class="header-drawer" style="height:3px"> </div>
            <!-- // breadcrumbs --> 
        </div>
        <!-- // drawer --> 
    </div>
</div>
<!-- // header-container -->

<div id="main-container">
    <div id="main-content" class="main-content container">
        <div id="page-content" class="page-content">
            <section>
                <div class="row" style="padding-top:80px">
                    <div class="span6 offset3 text-center padding-side"> 

                        <?php echo $this->Html->image('PizzaBanner.jpg'); ?>
                         <?php echo $this->Session->flash(); ?>                
                         <?php echo $this->fetch('content'); ?>                        
                    </div>
                </div>
                <!-- // Example row --> 
            </section>
        </div>
        <!-- // page content --> 
        
    </div>
    <!-- // main-content --> 
    
</div>
<!-- // main-container  -->


<!-- // page-container --> 

<!-- Le javascript --> 
<!-- Placed at the end of the document so the pages load faster --> 
<?php
        echo $this->Html->script(array(            
            'lib/jquery',
            'plugins/bootstrap-wysihtml5/lib/js/wysihtml5-0.3.0.min',
            'lib/jquery-ui',
            'lib/bootstrap',
            'lib/jquery.cookie',
            'application.js'
        ));
        ?>   
</body></html>