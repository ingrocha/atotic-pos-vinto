<?php

    App::uses('AppController', 'Controller');
    class FacturarController extends AppController {
        
        public $components = array('Verhoeff', 'Rc', 'Codigocontrol');  
        public $uses = array('Parametrosfactura');      
        
        public function genera(){
            
            $nfactura = 5138;
            $autorizacion = "190400913428";
            $nit = 4189179011;
            $fecha = 20070702;
            $monto = 2500;
            $llave = "Y-gkN8gZW#n}c+hWq8Qp4sppw7DH@J\Q*ZUt+HZ_[7_PFxt@[]f5$*cE}s+MRfyG";
            //$this->Verhoeff->saluda("Cristiam");
            //$this->Verhoeff::saluda("Cristiam");
            /*echo $nfactura."<br />";
            echo $nit."<br />";
            echo $fecha."<br />";
            echo $monto."<br />";*/
            
            $tmp_nfactura = $this->Verhoeff->calc($nfactura);
            $tmp_nit = $this->Verhoeff->calc($nit);
            $tmp_fecha = $this->Verhoeff->calc($fecha);
            $tmp_monto = $this->Verhoeff->calc($monto);
                       
            $cal_nfactura = $nfactura.$tmp_nfactura;
            $cal_nit = $nit.$tmp_nit;
            $cal_fecha = $fecha.$tmp_fecha;
            $cal_monto = $monto.$tmp_monto;
            
            echo "nueva factura ".$cal_nfactura."<br />";  
            echo "nuevo nit ".$cal_nit."<br />";
            echo "nueva fecha ".$cal_fecha."<br />";
            echo "nuevo monto ".$cal_monto."<br />";
            
            $ver_nfactura = $this->Verhoeff->calc($cal_nfactura);
            $ver_nit = $this->Verhoeff->calc($cal_nit);
            $ver_fecha = $this->Verhoeff->calc($cal_fecha);
            $ver_monto = $this->Verhoeff->calc($cal_monto);

            $cver_nfactura = $cal_nfactura.$ver_nfactura;
            $cver_nit = $cal_nit.$ver_nit;
            $cver_fecha = $cal_fecha.$ver_fecha;
            $cver_monto = $cal_monto.$ver_monto;
            
            echo "nueva cver factura ".$cver_nfactura."<br />";  
            echo "nuevo cver nit ".$cver_nit."<br />";
            echo "nueva cver fecha ".$cver_fecha."<br />";
            echo "nuevo cver monto ".$cver_monto."<br />";
            
            $total_sum = $cver_nfactura+$cver_nit+$cver_fecha+$cver_monto;
            //echo "verhoeff total. ".$total_sum."<br />";
            $dig_ver="";
            $cod_ver="";
            for($i=1; $i<=5; $i++){
                
                $ver_total = $this->Verhoeff->calc($total_sum);
                $tmp_ver = $total_sum.$ver_total;
                $total_sum = $tmp_ver;
                if($i==1){
                    $dig_ver = $dig_ver.$ver_total; 
                    $cod_ver = $cod_ver.$ver_total;   
                }else{
                    $dig_ver = $dig_ver."-".$ver_total;
                    $cod_ver = $cod_ver.$ver_total;
                }
                
                //$f
                //echo $i."-".$ver_total."-".$total_sum."<br />";
            }
            echo "codigo verfoff ".$cod_ver."<br />"; 
            //echo "digitos del ver ".$dig_ver."<br />";
            //list($uno, $dos, $tres, $cuatro, $cinco)=explode("-",$dig_ver);
            //debug($uno);
            /*echo "el primero ".$uno."<br />";
            echo "el segundo ".$dos."<br />";
            echo "el tercero ".$tres."<br />";
            echo "el cuarto ".$cuatro."<br />";
            echo "el quinto ".$cinco."<br />";*/
            
            $vec_num=array();
            $vec_num = explode('-', $dig_ver);
            //print_r($vec_num);
            $tmp_llave = $llave;
            for($c=0; $c<=4; $c++){
                                
                $num = $vec_num[$c];                                 
                ++$num;
                //echo "las sumas es ".$num."<br />";
                if($c==0){
                    $cad_autorizacion = substr($tmp_llave, 0, $num);
                    echo "para autorizacion ".$cad_autorizacion."<br />";
                    $n1 = $num;       
                }
                if($c==1){
                    $cad_nfactura = substr($tmp_llave, $n1, $num);
                    echo "para numero factura ".$cad_nfactura."<br />";
                    $n2 = $num+$n1;
                }
                if($c==2){
                    echo "numero 2 ".$n2."<br />";
                    $cad_nit = substr($tmp_llave, $n2, $num);
                    echo "para nit ".$cad_nit."<br />";
                    $n3 = $num+$n2;
                }
                if($c==3){
                    $cad_fecha = substr($tmp_llave, $n3, $num);
                    echo "para fecha ".$cad_fecha."<br />";
                    $n4 = $num+$n3;
                }
                if($c==4){
                    $cad_monto = substr($tmp_llave, $n4, $num);
                    echo "para monto ".$cad_monto."<br />";
                    $n5 = $num+$n4;
                }
                                    
                //echo $vec_num[$c]."<br />";                
            }   
            $nuevo_nautorizacion = $autorizacion.$cad_autorizacion;
            $nuevo_nfactura = $cver_nfactura.$cad_nfactura;
            $nuevo_nit = $cver_nit.$cad_nit;
            $nuevo_fecha = $cver_fecha.$cad_fecha;
            $nuevo_monto = $cver_monto.$cad_monto;
            
            $cad1 = $this->Rc->allegedRC4($nuevo_nautorizacion, $cod_ver);
            $cad2 = $this->Rc->allegedRC4("d3Ir6", "sesamo");
            //debug($cad2);
            
            //autorizacion, factura, nit, fecha, monto, llave
            $this->Codigocontrol->CodigoControl('29040011007',
                                                '1503',
                                                '4189179011',
                                                '20070702',
                                                '2500',
                                                '9rCB7Sv4X29d)5k7N%3ab89p-3(5[A');
            $codigo=$this->Codigocontrol->generar();  
            echo '<h1> Codigo de control generado para la prueba</h1>';
            debug($codigo);
            /*debug($cad1);
            debug($nuevo_nautorizacion);         
            debug($nuevo_nfactura);
            debug($nuevo_nit);
            debug($nuevo_fecha);
            debug($nuevo_monto);*/
            //debug($vec_num);
            
            
            //$cal_nfactura = $this->Verhoeff->calc($nfactura);
            //echo $tmp_nfactura;
                
        } 
        
        public function genera2(){
            
            $this->Codigocontrol->CodigoControl('79040011859',
                                                '152',
                                                '1026469026',
                                                '20070728',
                                                '135',
                                                'A3Fs4s$)2cvD(eY667A5C4A2rsdf53kw9654E2B23s24df35F5');
            $codigo=$this->Codigocontrol->generar();                                                
            debug($codigo);
        } 

        public function editar(){
            $parametros = $this->Parametrosfactura->find('all');
            //debug($parametros);exit;
            $this->set(compact('parametros'));
            if(!empty($this->data)){
                debug($this->data);exit;
            }
        }  
    }
    ?>