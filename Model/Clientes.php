<?php
 include_once $_SERVER["DOCUMENT_ROOT"].'rolling-casting/Controller/conectar.php';
 
 class Clientes extends Conectar {
   
   private $id;

   function __construct(){

   }

   function add_client($id,$nombre,$tel,$dir,$tipo,$email){
   	 $this->id = $id;
   	 $array = Array('Client_idPrimaria'=>$id
   	 				'Client_nomb'=>$nombre,
   	 				'Client_tel'=>$tel,
   	 				'Client_direct'=>$dir,
   	 				'Client_tipo_client'=>$tipo,
   	 				'Client_activo'=>2,
   	 				'Client_email'=>$email
   	 				);
   	 $data = parent::inserta('clientes_rolling',$array);
     if(isset($data['exito'])){
         return true;
      }else{
         return false;
      }
   }

   	function GetId(){
   	  return $this->id;
   	}

    function Set_activo($x){
   	 $act;
   	 if($x){
   	 	$act = 1;
   	 }else{
   	 	$act = 2;
   	 }
   	 $sql = 'UPDATE personal_casting 
   	 		     SET Perso_activo = '.$act.'
   	 		     WHERE Perso_id = '.$this->GetId();
   	 $data = parent::update_query($sql);
   	  if(isset($data['exito'])){
        return true;
      }else{
        return false;
      }
    }

    function Show_empresas(){
    	$sql = 'SELECT *
    			FROM clientes_rolling';
    	$data = parent::consultas($sql);
    	return $data;		
    }

    function Show_empresas_no_activos(){
      $sql = 'SELECT *
              FROM clientes_rolling 
              WHERE Client_activo = 2';
      $data = parent::consultas($sql);
      return $data; 
    }

    function Get_empresa($id){
      $sql = 'SELECT *
              FROM clientes_rolling 
              WHERE Client_idPrimaria = '.$id;
      $data = parent::consultas($sql);
      return $data; 
    }
 }
?>