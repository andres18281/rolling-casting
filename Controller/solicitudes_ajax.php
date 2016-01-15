<?php
 session_start();
 include_once('conectar');
  $conectar = new Conectar();
  $ide = $_SESSION['ident_cedu'];
 if(isset($_POST['habilid'])){
   $habili = $_POST['habilid'];
   $pos = strpos($habilidad,"-");
   $habi = substr($habili, 0,$pos);
   $cod = substr($habili, $pos+1,strlen($habili));
   if($habi == "actor"){
   	$tip = 1221112;
   }
   if($habi == "anima"){
   	 $tip = 1253434;
   }
   if($habi == "model"){
   	 $tip = 1232323;
   }
   if($habi == "cantan"){
   	 $tip = 1234534;
   }
   $array = Array('List_idPrimaria'=>$tip,
   				 'List_id_habilidad'=>$cod,
   				 'List_id_clientÍndice'=>$ide);
   $response = $conectar->inserta('list_habilidad',$array);
   json_decode($response);
 }

 if(isset($_POST['title_habi'],$_POST['descrip'],$_POST['habili'])){
 	$titulo = $_POST['title_habi'];
 	$descrip = $_POST['descrip'];
 	$array = Array('Exper_nombre'=>$titulo,
 				   'Exper_descripcion'=>$descrip,
 				   'Exper_id_client'=>$ide);
 	$response = $conectar->inserta('experiencia',$array);
   json_decode($response);
 }


?>