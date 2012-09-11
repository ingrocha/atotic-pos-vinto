<?php
class ControlingresosalidasController extends AppController{
    public $uses= array('Asistencia', 'Usuario', 'Retraso', 'Contrato');
    public $helper = array('Html', 'Form', 'Ajax', 'Javascript');
    public $components = array('Manejofechas');
    public $layout = 'admin';
    
    public function index(){
        $data = $this->paginate('Asistencia');  
        //debug($data);exit;  
        $this->set('datos', $data);
    }
    public function formbuscar(){
        $mozos = $this->Usuario->find('list', array(
        'conditions'=>array('Usuario.perfile_id'=>2), 
        'fields'=>array('Usuario.id', 'Usuario.nombre')
        ));
        $this->set(compact('mozos'));
    }
    function ingresosfechas(){
        //$hoy = date('d-m-Y');
        //debug($this->data);exit;
        $mozo = $this->data['Asistencia']['mozo'];
        $fecha1 = $this->data['Asistencia']['fecha_desde'];
        $fecha2 = $this->data['Asistencia']['fecha_hasta'];
        //$dias = $this->Manejofechas->diasEntreFechas($fecha1, $fecha2);
        
        $diastrabajados = $this->Asistencia->find('count', array(
        'conditions'=>array('Asistencia.fecha >='=>$fecha1, 'Asistencia.fecha <='=>$fecha2, 
        'Asistencia.usuario_id'=>$mozo)
        ));
       
        $hoy = date('Y-m-d');
        //echo $hoy;
        
        
        $descuento = $this->Retraso->find('all', array(
        'conditions'=>array('Retraso.usuario_id'=>$mozo, 
        'Retraso.fecha >='=>$fecha1, 'Retraso.fecha <='=>$fecha2), 
        'fields'=>array('SUM(Retraso.descuento) AS descuento')    
        ));
        $descuento = $descuento[0][0]['descuento'];
        
       
        $sueldoempleado = $this->Contrato->find('first', array(
        'conditions'=>array('Contrato.usuario_id'=>$mozo)
        ));
       
        $sueldo = $sueldoempleado['Contrato']['sueldo'];
        
        $pago = number_format((($sueldo/31) * $diastrabajados) - $descuento,'2', ',', ' ');
        
        $this->set(compact('pago', 'diastrabajados', 'sueldoempleado', 'descuento', 'sueldo', 'mozo', 'fecha1', 'fecha2'));
    }
    public function verdetalle($id=null, $fecha1=null, $fecha2=null){
        $this->layout = 'ajax';
        
        $ingresos = $this->Asistencia->find('all', array(
        'conditions'=>array('Asistencia.fecha >='=>$fecha1, 'Asistencia.fecha <='=>$fecha2, 
        'Asistencia.usuario_id'=>$id
        )
        ));
        $retrasos = $this->Retraso->find('all', array(
        'conditions'=>array('Retraso.usuario_id'=>$id, 
        'Retraso.fecha >='=>$fecha1, 'Retraso.fecha <='=>$fecha2)    
        ));
        //debug($retrasos);exit;
        $this->set(compact('ingresos', 'retrasos'));
    }
}
?>