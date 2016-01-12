<?php
 include_once $_SERVER["DOCUMENT_ROOT"].'rolling-casting/Model/Buscar_habilidad.php';
 class Busca_personalController{
   private $model;
  function __construct(){
  	$model = new Habilidad();
  }
  
  function Buscar_habilidad_y_subhabilidad($id,$id2){
  	$data = $this->model->GetHabilidad($id,$id2);
  	return $data;
  }

   /* Busca por sexo y habilidad */
  function Buscar_sexo_habilidad($sex,$tipo_hab,$hab){
  	$data = $this->model->GetSexo($sex,$tipo_hab,$hab);
  	return $data;
  }

  /* Busca por sexo, edad y edad de una persona */
  function Buscar_sexo_edad($sex,$tipo_hab,$hab,$edad){
    $data = $this->model->GetSexoEdad($sex,$tipo_hab,$hab,$edad);
    return $data;
  }

  /* Busca por rango de edad y talento */
  function Buscar_sexo_edad_entres($sex,$tipo_hab,$hab,$edad1,$edad2){
    $data = $this->model->GetSexoEdad_entre($sex,$tipo_hab,$hab,$edad1,$edad2);
  	return $data;
  }

  /* Busca por escritura de forma dinamica */
  function Buscar_sexo_habilidad($sex,$tipo_hab,$hab){
  	$data = $this->model->GetSexoEdad_habilidad_letras($sex,$tipo_hab,$hab);
  	return $data;
  }
 }
?> 