<style type="text/css">      
    @media (max-width: 980px) {
        /* Enable use of floated navbar text */
        .navbar-text.pull-right {
            float: none;
            padding-left: 5px;
            padding-right: 5px;
        }
    }

    .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
        -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
        box-shadow: 0 1px 2px rgba(0,0,0,.05);
    }
    
    .form-signin .form-signin-heading,
    .form-signin .checkbox {
        margin-bottom: 10px;
    }
    .form-signin input[type="text"],
    .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: -2px;
        padding: 7px 9px;
    }            

</style>
<div class="container">
    <!-- <form class="form-inline">-->
    <?php echo $this->Form->create('Pedidos', array('action' => 'validamoso', 'class'=>'form-signin')); ?>    
    <h3 class="form-signin-heading">INGRESE SU CODIGO</h3>                 
      <input name="data[Pedidos][numero]" type="password" class="input-small" id="tecladonumerico" placeholder="Password" />      
      <button type="submit" class="btn btn-primary">Ingresar</button>                                              
    </form>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        // Handler for .ready() called.
        $("#tecladonumerico").keypad();
    });
</script>