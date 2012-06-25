<?php
class CalculosController extends AppController
{
    public $helpers = array('Html', 'Form', 'Session', 'Js');
    public $name = "Inventario";
    public $uses = array('Usuario','Asistencia','ConfMultas','Multas');
    public $layout = 'principal';

  
    function index(){
       
            
         $usuarios= $this->Usuario->find('list',array(
                                                  'fields'=>array('Usuario.id', 'Usuario.nombre'),
                                                  'conditions'=>array('Usuario.usuario_id')
                                                  ));  
         $usuarios2= $usuarios;
       
        $this->set(compact('usuarios', 'usuarios2'));
       
    }
    function reportefechas(){
     
        $fech1 = $this->data['fecha3'];
        $fecha1 = $fech1.' 00:00:00';
        $fech2 = $this->data['fecha4'];
        $fecha2 = $fech2.' 23:59:59';
        $usuario = $this->data['Usuario']['id']; 
       
        $pedidos = $this->Asistencia->find('all', array(
                                                    'conditions'=>array('Asistenacia.usuario_id'=>$usuario, 'Asistenacia'),
                                                    'fields'=>array('Asistenacia.conf_multa_id','Asistencia.nombre'),
                                                    'group'=>array('Asistencia.inventario_id')
                                                  )
                                     );
       
        $ventas = $this->Venta->find('all', array(
                                                    'conditions'=>array(
                                                                        'Asistencia.usuario_id'=>$usuario,
                                                                        'Asistencia.fecha BETWEEN ? AND ?' => array($fecha1,$fecha2)
                                                                        ),
                                                    
                                                    'fields'=>array('Usuario.nombre',
                                                                    'Asistencia.nombre'),
                                                 
                                                   )
                                       ) ;  
         
    }
    
    
     
 }
?>