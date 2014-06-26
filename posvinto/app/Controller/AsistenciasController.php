<?php
class AsistenciasController extends AppController
{ 
    public $helpers = array('Html', 'Form','Time'); 
    public $uses = array('Asistencia','User','ConfMulta','Horario', 'Retraso');
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
    $dcu = $this->User->find('list', array('fields'=>'User.nombre')); //consulta de los usuarios por nombre
    $this->set(compact('dcu'));
}
public function entradas() 
  {
    
      if(!empty($this->request->data)){
          //debug($this->data);exit;
          $codigo=$this->data['Asistencia']['codigo'];
          $usuario=$this->User->find('first',array('conditions'=>array('User.codigo'=>$codigo)));
          $usuario2 = $usuario;
          //debug($usuario);exit;
          if(empty($usuario)){
              $this->Session->setFlash('no existe usuario');
              $this->redirect(array('action'=>'index'));
          }
            else{
              $this->data='';
              $usuario=$usuario['User']['id'];
             
              $date=date('Y-m-d');
              $valida=$this->Asistencia->find('all',array('conditions'=>array('Asistencia.user_id'=>$usuario,'Asistencia.fecha'=>$date)));
          /*start validation*/
          if(!empty($valida)){
              $this->Session->setFlash('ERROR, su Hora de ingreso de Hoy ya fue Registrada....!!!');
              $this->redirect(array('action'=>'index'));
          }
              else{
              $this->request->data['Asistencia']['fecha']=$date;
              $this->request->data['Asistencia']['user_id']=$usuario;
              $this->request->data['Asistencia']['horaingreso']=date('H:i:s');
              //$this->request->data['Asistencia']['horasalida']=null;
              $horaingreso = $this->Horario->find('first', array('fields'=>array('Horario.entrada')));
              
              $ingreso = $horaingreso['Horario']['entrada'];
              
              
              $hora=split(':', $ingreso);
              $hora_entrada = $hora[0];
              $minutos_entrada = $hora[1] + $hora[0]*60;
              
              $hora=split(':', date('H:i:s'));
              $hora_ingreso=$hora[0];
              $minutos_ingreso=$hora[1]+$hora[0]*60;
              $horas_retraso =  $hora_ingreso - $hora_entrada;
              $minutos_retraso = $minutos_ingreso - $minutos_entrada;
              
              //debug($horas_retraso);
              //debug($minutos_retraso);
              
              if(($horas_retraso != 0)|| ($minutos_retraso != 0)){
                $multa =$this->ConfMulta->find('first',array('order' => 'ConfMulta.minutos DESC',
                'conditions'=>array(
                'ConfMulta.minutos <'=>$minutos_retraso
                )
                ));
                //debug($multa);exit;
              }
          
              
              
          if($this->Asistencia->save($this->data)){
            if(!empty($multa)){
                $this->Retraso->create();
                $this->data = '';
                $this->request->data['Retraso']['user_id']=$usuario;
                $this->request->data['Retraso']['minutos']=$minutos_retraso;
                $this->request->data['Retraso']['descuento']= $multa['ConfMulta']['valor'] * $usuario2['User']['sueldo'];
                $this->request->data['Retraso']['fecha']= date('Y-m-d');
                //debug($this->data);exit;
                $this->Retraso->save($this->data);
              }
             
       $this->Session->setFlash('Hora de Ingreso Registrado...');
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
            $usuario=$this->User->find('first',array('conditions'=>array('User.codigo'=>$codigo)));
        if(empty($usuario)){
                $this->Session->setFlash('No Existe el Usuario');    
                $this->redirect(array('action'=>'index'));            
        }
            else{
                $this->data='';
                $usuario_id=$usuario['User']['id'];
                $date=date('Y-m-d');
              //  $salida=$this->Asistencia->find('all',array('conditions'=>array
                //    ('Asistencia.horaingreso')));
              //  debug($salida);exit;
                //$ingreso=$salida['Asistencia']['horaingreso'];
                //debug($ingreso);exit;
                $salida=$this->Asistencia->find('first',array('conditions'=>array
                    ('Asistencia.user_id'=>$usuario_id,'Asistencia.fecha'=>$date)));
                //debug($salida);exit;
                $id=$salida['Asistencia']['id'];

        if(empty($salida)){
                $this->Session->setFlash('Error,Su Ingreso no fue marcado....');
                $this->redirect(array('ation'=>'index'));
        }
        else{
            if($salida['Asistencia']['horasalida'] == null)
            {
                $this->Asistencia->id=$id;
                    $this->request->data['Asistencia']['horasalida']=date('H:i:s');
                if($this->Asistencia->save($this->data)){
                        $this->Session->SetFlash('Hora de Salida se Registro Exitosamente...!!!');
                        $this->redirect(array('action'=>'index'));
                }
                else{
                    $this->Session->setFlash('No se pudo guardar');
                    $this->redirect(array('action'=>'index'));
                    }
            }
            else{
                $this->Session->setFlash('Su hora de salida ya fue Registrada...!!!');
                    $this->redirect(array('action'=>'index'));
            }
           }
        }
    }      
 }
 private function calculatiempotranscurrido($hora1, $hora2) {

        $separar[1] = explode(':', $hora1);
        $separar[2] = explode(':', $hora2);

        $total_minutos_trasncurridos[1] = ($separar[1][0] * 60) + $separar[1][1];
        $total_minutos_trasncurridos[2] = ($separar[2][0] * 60) + $separar[2][1];
        $total_minutos_trasncurridos = $total_minutos_trasncurridos[1] - $total_minutos_trasncurridos[2];
        if ($total_minutos_trasncurridos <= 59)
            return($total_minutos_trasncurridos . ' Minutos');
        elseif ($total_minutos_trasncurridos > 59) {
            $HORA_TRANSCURRIDA = round($total_minutos_trasncurridos / 60);
            if ($HORA_TRANSCURRIDA <= 9)
                $HORA_TRANSCURRIDA = '0' . $HORA_TRANSCURRIDA;
            $MINUITOS_TRANSCURRIDOS = $total_minutos_trasncurridos % 60;
            if ($MINUITOS_TRANSCURRIDOS <= 9)
                $MINUITOS_TRANSCURRIDOS = '0' . $MINUITOS_TRANSCURRIDOS;
            return ($HORA_TRANSCURRIDA . ':' . $MINUITOS_TRANSCURRIDOS . ' Horas');
        }
    }
public function entradas2222222($hora1=null,$hora2=null) 
  {
     if(!empty($this->request->data)){
          //debug($this->data);exit;
          $codigo=$this->data['Asistencia']['codigo'];
          $usuario=$this->User->find('first',array('conditions'=>array('User.codigo'=>$codigo)));
          $usuario2 = $usuario;
         
          //debug($separar[1]);die;
          //debug($usuario);exit;
          if(empty($usuario)){
              $this->Session->setFlash('no existe usuario');
              $this->redirect(array('action'=>'index'));
          }
            else{
              $this->data='';
              $usuario=$usuario['User']['id'];
              
              $separar[1]=explode(':',$hora1); 
              $separar[2]=explode(':',$hora2); 
              
              $total_minutos_trasncurridos[1] = ($separar[1][0]*60)+$separar[1][1]; 
              $total_minutos_trasncurridos[2] = ($separar[2][0]*60)+$separar[2][1]; 
              $total_minutos_trasncurridos = $total_minutos_trasncurridos[1]-$total_minutos_trasncurridos[2]; 
              
             // debug($total_minutos_trasncurridos);
              $date=date('Y-m-d');
              //s 	debug($date);
              $valida=$this->Asistencia->find('all',
                                        array('conditions'=>
                                        array('Asistencia.user_id'=>$usuario,'Asistencia.fecha'=>$date)));
          /*start validation*/
          if(!empty($valida)){
              $this->Session->setFlash('ERROR, su Hora de ingreso de Hoy ya fue Registrada....!!!');
              $this->redirect(array('action'=>'index'));
          }
              else{
              $this->request->data['Asistencia']['fecha']=$date;
              $this->request->data['Asistencia']['user_id']=$usuario;
              $this->request->data['Asistencia']['horaingreso']=date('H:i:s');
              //$this->request->data['Asistencia']['horasalida']=null;
              $horaingreso = $this->Horario->find('first', array('fields'=>array('Horario.entrada')));
              
              $ingreso = $horaingreso['Horario']['entrada'];
              
              
              $hora=split(':', $ingreso);
              //debug($hora);die;
              $hora_entrada = $hora[0];
              $minutos_entrada = $hora[1] + $hora[0]*60;
              
              $hora=split(':', date('H:i:s'));
              $hora_ingreso=$hora[0];
              $minutos_ingreso=$hora[1]+$hora[0]*60;
              $horas_retraso =  $hora_ingreso - $hora_entrada;
              $minutos_retraso = $minutos_ingreso - $minutos_entrada;
              
              if(($horas_retraso != 0)|| ($minutos_retraso != 0)){
                $multa =$this->ConfMulta->find('first',array('order' => 'ConfMulta.minutos DESC',
                'conditions'=>array(
                'ConfMulta.minutos <'=>$minutos_retraso
                )
                ));
                //debug($multa);exit;
              }
              debug($this->data);die;   
          if($this->Asistencia->save($this->data)){
            if(!empty($multa)){
                $this->Retraso->create();
                $this->data = '';
                $this->request->data['Retraso']['user_id']=$usuario;
                $this->request->data['Retraso']['minutos']=$minutos_retraso;
                $this->request->data['Retraso']['descuento']= $multa['ConfMulta']['valor'] * $usuario2['User']['sueldo'];
                $this->request->data['Retraso']['fecha']= date('Y-m-d');
                //debug($this->data);exit;
                $this->Retraso->save($this->data);
              }
             
       $this->Session->setFlash('Hora de Ingreso Registrado...');
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
}
?>
