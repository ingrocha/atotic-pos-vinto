<?php
echo $this->Form->create('Usuario', array('controller'=>'usuarios', 'action' => 'login'));
echo $this->Form->inputs(array(
    'legend' => __('Login'),
    'username',
    'password'
));
echo $this->Form->end('Entrar');