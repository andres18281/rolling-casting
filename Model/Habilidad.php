<?php

 include_once $_SERVER["DOCUMENT_ROOT"].'rolling-casting/Controller/conectar.php';
 class Habilidad extends Conectar{

 	/*
	*
    Busca por tipo de habilidad y devuelve el listado de personas con esa habilidad
    puede hacer la busqueda por el tipo de habilidad o por la subcategoria de habilidad
    *
   */
   function GetHabilidad($id,$id2){
   	 $sql = 'SELECT Perso_id,Perso_name,Perso_apell,tp.Tip_nomb, Habilidad_descrip,fr.Foto_nomb
   	 		 FROM personal_casting pc
   	 		 INNER JOIN list_habilidad lis_hab ON lis_hab.List_id_client = pc.Perso_id
   	 		 INNER JOIN habilidad hab ON hab.Habilidad_id = lis_hab.List_id_habilidad
   	 		 INNER JOIN tip_habilidad tp ON tp.Tip_id = hab.Habilidad_tipo 
   	 		 INNER JOIN fotografia_rolling fr ON fr.Foto_ident = pc.Perso_id
   	 		 WHERE tp.Habilidad_id = '.$id.'
   	 		 AND hab.Habilidad_id = '.$id2.'
   	 		 AND Perso_activo = 1 
   	 		 GROUP BY fr.Foto_ident';
   	  $data = parent::consultas($sql);
   	  return $data; 		 
   }

   /* Busca por sexo y habilidad */
   function GetSexo($sex,$tipo_hab,$hab){
   	 $sql = 'SELECT Perso_idPrimaria,Perso_name,Perso_apell 
   	 		 FROM personal_casting pc
   	 		 INNER JOIN list_habilidad lis_hab ON lis_hab.List_id_client = pc.Perso_id
   	 		 INNER JOIN habilidad hab ON hab.Habilidad_id = lis_hab.List_id_habilidad
   	 		 INNER JOIN tip_habilidad tp ON tp.Tip_id = hab.Habilidad_tipo 
   	 		 INNER JOIN fotografia_rolling fr ON fr.Foto_ident = pc.Perso_id
   	 		 WHERE Perso_Sexo = '.$sex.'
   	 		 AND hab.Habilidad_id = '.$tipo_hab.'
   	 		 AND tp.Tip_id = '.$hab.'
   	 		 AND Perso_activo = 1 
   	 		 GROUP BY fr.Foto_ident';
   	  $data = parent::consultas($sql); 
   	  return $data; 
   }

   /* Busca por sexo, edad y edad de una persona */
   function GetSexoEdad($sex,$tipo_hab,$hab,$edad){
   	 $sql = 'SELECT Perso_idPrimaria,Perso_name,Perso_apell, (YEAR(Perso_fech_naci) - YEAR(CURDATE())) INTO anuo
   	 		 FROM personal_casting pc
   	 		 INNER JOIN list_habilidad lis_hab ON lis_hab.List_id_client = pc.Perso_id
   	 		 INNER JOIN habilidad hab ON hab.Habilidad_id = lis_hab.List_id_habilidad
   	 		 INNER JOIN tip_habilidad tp ON tp.Tip_id = hab.Habilidad_tipo 
   	 		 INNER JOIN fotografia_rolling fr ON fr.Foto_ident = pc.Perso_id
   	 		 WHERE Perso_Sexo = '.$sex.'
   	 		 AND hab.Habilidad_id = '.$tipo_hab.'
   	 		 AND tp.Tip_id = '.$hab.'
   	 		 AND Perso_activo = 1 
   	 		 AND anuo = '.$edad.'
   	 		 GROUP BY fr.Foto_ident';
   	  $data = parent::consultas($sql); 
   	  return $data; 
   } 

   /* Busca por sexo, edad, habilidad y un rango de edad */
   function GetSexoEdad_entre($sex,$tipo_hab,$hab,$edad1,$edad2){
   	 $sql = 'SELECT Perso_idPrimaria,Perso_name,Perso_apell, (YEAR(CURDATE()) - YEAR(Perso_fech_naci)) INTO anuo
   	 		 FROM personal_casting pc
   	 		 INNER JOIN list_habilidad lis_hab ON lis_hab.List_id_client = pc.Perso_id
   	 		 INNER JOIN habilidad hab ON hab.Habilidad_id = lis_hab.List_id_habilidad
   	 		 INNER JOIN tip_habilidad tp ON tp.Tip_id = hab.Habilidad_tipo 
   	 		 INNER JOIN fotografia_rolling fr ON fr.Foto_ident = pc.Perso_id
   	 		 WHERE Perso_Sexo = '.$sex.'
   	 		 AND hab.Habilidad_id = '.$tipo_hab.'
   	 		 AND tp.Tip_id = '.$hab.'
   	 		 AND Perso_activo = 1 
   	 		 AND anuo BETWEEN '.$edad1.' AND '.$edad2.'
   	 		 GROUP BY fr.Foto_ident';
   	  $data = parent::consultas($sql); 
   	  return $data; 
   }
   /* Busca habilidad por texto y sexo */
   function GetSexoEdad_habilidad_letras($sex,$tipo_hab,$hab){
   	 $sql = 'SELECT Perso_idPrimaria,Perso_name,Perso_apell,YEAR(CURDATE()) - YEAR(Perso_fech_naci) 
   	 		 FROM personal_casting pc
   	 		 INNER JOIN list_habilidad lis_hab ON lis_hab.List_id_client = pc.Perso_id
   	 		 INNER JOIN habilidad hab ON hab.Habilidad_id = lis_hab.List_id_habilidad
   	 		 INNER JOIN tip_habilidad tp ON tp.Tip_id = hab.Habilidad_tipo
   	 		 INNER JOIN fotografia_rolling fr ON fr.Foto_ident = pc.Perso_id
   	 		 WHERE Perso_Sexo = '.$sex.'
   	 		 AND hab.Habilidad_descrip = %'.$hab.'%
   	 		 AND tp.Tip_id = %'.$tipo_hab.'%
   	 		 AND Perso_activo = 1
   	 		 GROUP BY fr.Foto_ident';
   	  $data = parent::consultas($sql); 
   	  return $data; 
   }

   
 }
?>