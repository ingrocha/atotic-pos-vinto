<?php
class ControlingresosalidasController extends AppController{
    public $uses= array('Asistencia', 'Usuario', 'Retraso', 'Contrato');
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
        $hoy = date('Y-m-d');
        //echo $hoy;
        $ingresos = $this->Asistencia->find('all', array(
        'conditions'=>array('Asistencia.fecha >='=>$fecha1, 'Asistencia.fecha <='=>$fecha2, 
        'Asistencia.usuario_id'=>$mozo
        )
        ));
        $descuento = $this->Retraso->find('all', array(
        'conditions'=>array('Retraso.usuario_id'=>$mozo), 
        'fields'=>array('SUM(Retraso.descuento) AS descuento')    
        ));
        $retrasos = $this->Retraso->find('all', array(
        'conditions'=>array('Retraso.usuario_id'=>$mozo), 
        'fields'=>array('SUM(Retraso.descuento) AS descuento')    
        ));
        $sueldo = $this->Contrato->find('first', array(
        'conditions'=>array('Contrato.usuario_id'=>$mozo)
        ));
        debug($sueldo);
        debug($descuento);
        debug($retrasos);
        debug($ingresos);exit;
        $sueldo = $sueldo['Contrato']['sueldo'];
        $descuento = $descuento[0][0]['descuento'];
        $pago = ($sueldo - $descuento);
    }
}
?>