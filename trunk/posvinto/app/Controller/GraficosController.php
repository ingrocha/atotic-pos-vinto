<?php

class GraficosController extends AppController
{ //declaramos la clase controller para se usada con los beneficios del papa controller

    public $helpers = array(
        'Html',
        'Form',
        'FlashChart'); //definimos que ayudantes vamos a usar
    public $uses = array('Cliente'); //definimos las tablas que vamos a utilizar
    public $layout = 'admin';

    public function genera()
    {

    }
}
