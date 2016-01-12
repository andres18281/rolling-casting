<?php
  include_once $_SERVER["DOCUMENT_ROOT"].'rolling-casting/Model/Person.php';
  class UserController{
    
    private $model;
    private $id;
    function __construct(){
      $model = new Person();
      
    }

	/*
    * Retorna boleano
    */   
    function Add_personal($id,$nombre,$apelli,$tele,$cel,$direc,$ciud,$altu,$sex,$ciudad_org,$fech_naci,$email){
    	$data = $this->model->add_client($id,$nombre,$apelli,$tele,$cel,$direc,$ciud,$altu,$sex,$ciudad_org,$fech_naci,$email); 
    	return $data;
    }

    /*
    * Retorna boleano
    * Add experiencia de trabajo
    */
    function Add_descripcion($nombre,$descript){
    	$data = $this->model->add_descripcion($nombre,$descript);
    	return $data;
    }

    /*
    * Retorna Array
    */

    function Verificar_existencia($id){
    	$data = $this->model->Get_person_Id($id);
    	return $data;
    }

    /*
    * Retorna boleano
    */

    function Add_foto($dir_fecha,$dir_video){
    	if(is_file($dir_fecha)){
    	 $name = $dir_fecha['name'];
    	 $tipo = $dir_fecha['type'];
    	 $ruta = $_SERVER["DOCUMENT_ROOT"]."View/img";
    	 if(move_uploaded_file($dir_fecha,  $ruta)){
    	   $name = $name.$this->id;
    	   $data['verifi_db'] = $this->model->add_fotos($name,$dir_video);
    	   return $data; 	
    	 }
    	}
    }

    /*
    * Retorna boleano
    */

    function Add_habilidad($nombre){
    	$data = $this->model->add_habilidad($nombre);
    	return $data;
    }

    /*
    * Retorna boleano
    */

    function Activar_usuario($active){
    	$data = $this->model->Set_activo($active);
    	return $data;
    }

    /*
    * Void 
     En caso de add un registro, entonces se usa esta funcion para agregar al objeto Person el id
     con el fin de usar funciones como add_habilidad, add_fotos donde sus parametros no captan el
     la identidad del usuario, este metodo no se usara si se add usuarios nuevos.
    */
    
    function Establecer_id(){
    	$id = $this->id;
    	$this->model->SetId($id);
    }

    function SetId($id){
    	$this->id = $id;
    	$this->model->SetId($id);
    }

    /*
	  Retorna Array
	  Devuelve todos los usuarios no activos del registro excepto los clientes
    */
    function Get_all_users_no_active(){
      $data = $this->model->Get_list_person_not_active();
      return $data;
    }
    
  }

?>