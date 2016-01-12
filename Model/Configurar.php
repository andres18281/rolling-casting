<?php
 include_once $_SERVER["DOCUMENT_ROOT"].'rolling-casting/Controller/conectar.php';
 
 class Habilidad extends Conectar{
  
   function add_habilidad($hab){
     $array = Array('Tip_nomb'=>$hab);
     $data = parent::inserta('tip_habilidad',$array);
   	 return $data;
   }

   function add_subHabilidad($hab,$sub){
   	 $array = Array('Habilidad_descrip'=>$hab,
   	 				        'Habilidad_tipo'=>$sub);
   	 $data = parent::inserta('habilidad',$array);
   	 return $data;
   }

   function Get_habilidad(){
   	 $sql = 'SELECT Tip_id,Tip_nomb 
   	 		 FROM tip_habilidad';
   	 $data  = parent::consultas($sql);
     return $data;
   }

   function Get_sub_habilidad($id){
   	 $sql = 'SELECT Habilidad_id, Habilidad_descrip 
   	 		     FROM habilidad 
   	 		     WHERE Habilidad_tipo = '.$id;
   	 $data  = parent::consultas($sql);
     return $data;
   }
 }

?>