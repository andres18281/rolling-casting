<?php
include_once $_SERVER["DOCUMENT_ROOT"].'rolling-casting/Model/Clientes.php';
class ClientController{
   
   private $clientes;
   private $id;

   function __construct(){
      $clientes = new Clientes();
   }

    /*
    * Retorna boleano
    */
   function Add_Client($id,$nombre,$tel,$dir,$tipo,$email){
     $data = $this->clientes->add_client($id,$nombre,$tel,$dir,$tipo,$email)
     return $data;
   }

   /*
	Retorna Array
   */
   function Get_list_no_active(){
   	$data = $this->clientes->Show_empresas_no_activos();
   	return $data;
   }


   /*
   * Retorna Array
   */
   function Get_list_empresas(){
   	 $data = $this->clientes->Show_empresas();
   	 return $data;
   }

   function Set_id($id){
     $this->id = $id;
   }
 

   /*
    * Retorna Array
   */
   function Verificar_existencia(){
   	 $data = $this->clientes->Get_empresa($this->id);
     return $data;
   }


   /*
	* Retorna Array
   */
   function Activar_empresa($bool){
   	 $data = $this->clientes->Set_activo($bool);
   	 return $data;
   }



}	