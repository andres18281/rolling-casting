<?php

   include_once $_SERVER["DOCUMENT_ROOT"].'rolling-casting/Model/Habilidad.php';
   class HabilidadController{
     
     private $habili;
     function __construct(){
     	$habili = new Habilidad();
     }

      /*
      * Retorna Array
      */
     function Busca_habilidad(){
 	     $data = $habili->Get_habilidad();
       return $data;
     }
      /*
		Retorna Array
      */
     function Busca_SubItem_habili($id){
       $data = $habili->Get_sub_habilidad($id);
       return $data;
     }
     
     function Add_habilidad($habili){
       $data = $habili->add_habilidad($habili);
       return $data;
     }

     function Add_SubItem($id,$habili){
       $data = $habili->($id,$habili);
       return $data;
     }
  }