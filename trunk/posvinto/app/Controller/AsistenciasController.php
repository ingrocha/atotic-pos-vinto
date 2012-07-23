<?php
class AsistenciasController extends AppController
{ 
    public $helpers = array('Html', 'Form','Time'); 
    public $uses = array('Asistencia','Usuario','ConfMulta','Multa');
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
          if($this->Asistencia->save($this->data)){
             if(!empty($this->data)){
              $valores='30600';
              $hora=split(':',date('H:i:s'));
              $hora[0]=$hora[0]*3600;
              $hora[1]=$hora[1]*60;
              $hora[2]=$hora[2]*1;
              $time=$hora[0]+$hora[1]+$hora[2];
              $multas=$this->ConfMulta->find('all',array('order'=>'ConfMulta.id ASC'));
    foreach($multas as $multa){
    $hora_entrada=split(':',$multa['ConfMulta']['horas']);
    $horas_e=$hora_entrada[0]*3600;
    $minutos_e=$hora_entrada[1]*60;
    $segundos_e=$hora_entrada[2];
    $h_entrada=$horas_e+ $minutos_e+$segundos_e;
            if($time>$h_entrada){      
            $retraso_id=$multa['ConfMulta']['id'];
            }
        else{
        //nada $retraso_id==0;   
        }
    }
        if(!empty($retraso_id)){   //Guardando los Datos
     $this->request->data['Multa']['conf_multa_id']=$retraso_id;
     $this->request->data['Multa']['usuario_id']=$usuario_id;
     $this->request->data['Multa']['fecha']=$date;
     $this->Multa->save($this->data);
      
         }
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
