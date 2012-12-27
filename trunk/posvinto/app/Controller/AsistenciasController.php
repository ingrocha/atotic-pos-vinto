<?php
class AsistenciasController extends AppController
{ 
    public $helpers = array('Html', 'Form','Time'); 
    public $uses = array('Asistencia','Usuario','ConfMulta','Horario', 'Retraso');
    public $components = array('Session');
    public $layout = 'publico';
    
    public function index() 
    {
    }
public function nuevo()
{
    if (!empty($this->data)) { 
       $this->Asistencia->create(); 
       if ($this->Asistencia->save($this->data)) { 
            $this->Session->setFlash('Asistencia registrada con exito'); 
            $this->redirect(array('action' => 'index'), null, true); 
       } else{ 
            $this->Session->setFlash('No se pudo registrar la Asistencia'); 
             }
    }
    $dcu = $this->Usuario->find('list', array('fields'=>'Usuario.nombre')); //consulta de los usuarios por nombre
    $this->set(compact('dcu'));
}
public function entradas() 
  {
      if(!empty($this->data)){
          //debug($this->data);exit;
          $codigo=$this->data['Asistencia']['codigo'];
          $usuario=$this->Usuario->find('first',array('conditions'=>array('Usuario.codigo'=>$codigo)));
          //debug($usuario);exit;
          if(empty($usuario)){
              $this->Session->setFlash('no existe usuario');
              $this->redirect(array('action'=>'index'));
          }
            else{
              $this->data='';
              $usuario_id=$usuario['Usuario']['id'];
             
              $date=date('Y-m-d');
              $valida=$this->Asistencia->find('all',array('conditions'=>array('Asistencia.usuario_id'=>$usuario_id,'Asistencia.fecha'=>$date)));
          /*start validation*/
          if(!empty($valida)){
              $this->Session->setFlash('ERROR, su Hora de ingreso de Hoy ya fue Registrada....!!!');
              $this->redirect(array('action'=>'index'));
          }
              else{
              $this->request->data['Asistencia']['fecha']=$date;
              $this->request->data['Asistencia']['usuario_id']=$usuario_id;
              $this->request->data['Asistencia']['horaingreso']=date('H:i:s');
              $horaingreso = $this->Horario->find('first', array('fields'=>array('Horario.entrada')));
              
              $ingreso = $horaingreso['Horario']['entrada'];
              
              
              $hora=split(':', $ingreso);
              $hora_entrada = $hora[0];
              $minutos_entrada = $hora[1];
              
              $hora=split(':', date('H:i:s'));
              $hora_ingreso=$hora[0];
              $minutos_ingreso=$hora[1];
              $horas_retraso =  $hora_ingreso - $hora_entrada;
              $minutos_retraso = $minutos_ingreso - $minutos_entrada;
              
              //debug($horas_retraso);
              //debug($minutos_retraso);
              
              if(($horas_retraso != 0)|| ($minutos_retraso != 0)){
                $multa =$this->ConfMulta->find('first',array(
                'conditions'=>array(
                'or'=>array(
                'ConfMulta.horas >='=>$horas_retraso,
                'ConfMulta.minutos <='=>$minutos_retraso,
                'ConfMulta.minutos >='=>$minutos_retraso
                )
                ), 
                'order'=>array('ConfMulta.monto DESC')
                ));
                //debug($multa);exit;
              }
          
              
              
          if($this->Asistencia->save($this->data)){
            if(!empty($multa)){
                $this->Retraso->create();
                $this->data = '';
                $this->request->data['Retraso']['usuario_id']=$usuario_id;
                $this->request->data['Retraso']['horas']=$horas_retraso;
                $this->request->data['Retraso']['minutos']=$minutos_retraso;
                $this->request->data['Retraso']['descuento']= $multa['ConfMulta']['monto'];
                 $this->request->data['Retraso']['fecha']= date('Y-m-d');
                //debug($this->data);exit;
                $this->Retraso->save($this->data);
              }
             
       $this->Session->setFlash('Hora de Ingreso Guardada...');
       $this->redirect(array('action'=>'index'));
           }
            else{
       $this->Session->setFlash('no se pudo guardar');
       $this->redirect(array('action'=>'index'));
                  
            }
             }
         }
      }
  }
              
public function salidas()
 {
    if(!empty($this->data)){
            $codigo=$this->data['Asistencia']['codigo'];
            $usuario=$this->Usuario->find('first',array('conditions'=>array('Usuario.codigo'=>$codigo)));
        if(empty($usuario)){
                $this->Session->setFlash('No Existe el Usuario');    
                $this->redirect(array('action'=>'index'));            
        }
            else{
                $this->data='';
                $usuario_id=$usuario['Usuario']['id'];
                $date=date('Y-m-d');
              //  $salida=$this->Asistencia->find('all',array('conditions'=>array
                //    ('Asistencia.horaingreso')));
              //  debug($salida);exit;
                //$ingreso=$salida['Asistencia']['horaingreso'];
                //debug($ingreso);exit;
                $salida=$this->Asistencia->find('first',array('conditions'=>array
                    ('Asistencia.usuario_id'=>$usuario_id,'Asistencia.fecha'=>$date)));
                debug($salida);exit;
                $id=$salida['Asistencia']['id'];

        if(!empty($salida)){
                $this->Session->setFlash('Error,Su Hora de Salida ya fue Guardada....');
                $this->redirect(array('ation'=>'index'));
        }
        else{
            $this->Asistencia->id=$id;
            $this->request->data['Asistencia']['horasalida']=date('H:i:s');
        if($this->Asistencia->save($this->data)){
                $this->Session->SetFlash('Hora de Salida Guardada');
                $this->redirect(array('action'=>'index'));
        }
        else{
            $this->Session->setFlah('No se pudo guardar');
            $this->redirect(array('action'=>'index'));
            }
           }
        }
    }      
 }
}
?>
