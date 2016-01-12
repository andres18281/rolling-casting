
<?php
  include_once $_SERVER["DOCUMENT_ROOT"].'rolling-casting/Controller/conectar.php';
   class Person extends Conectar{
   private $id;
   private $nombre;
   private $apellido;
   private $telefono;
   private $celular;
   private $direccion;
   private $barrio;
   private $sexo;
   private $habilidad;
   private $activo;
   private $ciudad_origin;
   private $fech_naci;
   private $email;


   function __construct(){
   	
   }

   function add_person($id,$nomb,$apel,$tel,$celu,$dir,$ciud,$habi,$sex,$barr,$ciudad_origin,$fech_naci,$email){
   	$this->id = $id;
   	$array = Array('Perso_id'=>$id,
   					'Perso_name'=>$nomb,
   					'Perso_apell'=>$apel,
   					'Perso_tele'=>$tel,
   					'Perso_cel'=>$celu,
   					'Perso_direct'=>$dir,
   					'Perso_ciudad'=>$ciud,
   					'Perso_altu'=>$habi,
   					'Perso_Sexo'=>$sex,
   					'Perso_ciudad_origen'=>$ciudad_origin,
   					'Perso_fech_naci'=>$fech_naci,
   					'Perso_email'=>$email,
   					'Perso_activo'=>1
   				  );
   	$data = parent::inserta('personal_casting',$array);
   	//return $data;
      if(isset($data['exito'])){
         return true;
      }else{
         return false;
      }
   }
 

   function add_habilidad($ide){
   	 $array = Array('List_id_habilidad'=>$ide,
   	 				    'List_id_client'=>$this->GetId());
   	 			      );
       $data = parent::inserta('list_habilidad',$array);
       if(isset($data['exito'])){
         return true;
       }else{
         return false;
       }
   }


   function add_fotos($dir_fecha,$dir_video){
   	 $array = Array('Foto_ident'=>$this->GetId(),
   				 'Foto_nomb'=>$dir_fecha,
   				 'Foto_video'=>$dir_video
   				);
   	 $data = parent::inserta('fotografia_rolling',$array);
       if(isset($data['exito'])){
         return true;
       }else{
         return false;
       }     
   }


   function add_descripcion($nombre,$descrip){
   		$array = Array('Exper_nombre'=>$nombre,
   					 'Exper_descripcion'=>$descrip,
   					 'Exper_id_client'=>$this->GetId());
   		$data = parent::inserta('experiencia',$array);
         if(isset($data['exito'])){
            return true;
         }else{
            return false;
         }  		
   }


   function SetId($id){
   	 $this->id = $id;
   }

   function GetId(){
   	 return $this->id;
   }
    
    /* Busca por el id de la persona */
   function Get_person_Id($id){
   	 $sql = 'SELECT * 
   	 		 FROM personal_casting 
   			 WHERE Perso_id = '.$id;
   	 $data = parent::consultas($sql);
       $this->id = $data[0];
   	 return $data;
   }
   
   // Actualiza el estado del usuario
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

   function Get_list_person_not_active(){
   	 $sql = 'SELECT Perso_idPrimaria,Perso_name,Perso_apell, Perso_tele,Perso_cel,Perso_direct,Perso_email 
   	 		 FROM personal_casting 
   			 WHERE Perso_activo = 2';
   	 $data = parent::consultas($sql);
   	 return $data;
   }
}

?>