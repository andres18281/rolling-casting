<?php
  include_once $_SERVER["DOCUMENT_ROOT"].'rolling-casting/Controller/conectar.php';
  class Notificacion extends Conectar {


  	function Notificacion_artista($id){
  		$sql = 'SELECT 	Solici_id,Solici_fech,cr.Client_nomb
  				FROM solicitudes s
  				INNER JOIN clientes_rolling cr ON cr.Client_id = s.Solici_client
  				WHERE Solici_person = '.$id.' 
  				AND Solici_leido = 2';
  		$data = parent::consultas($sql);
   	 	return $data;
  	}


  	/* notificacion cuando un personal ha contestado la solicitud, la validacion
  	   lo hace mediante el estado de la solicitud, "solici_estado" dice si ya 
  	   paso por el proceso de envio y respuesta y lectura de respuesta de la 
  	   empresa solicitante
  	*/
  	function Notificacion_aceptacion_artis($id){
  		$sql = 'SELECT Solici_id, Solici_fech, Solici_acept ,cr.Client_nomb
  				FROM solicitudes s
  				INNER JOIN clientes_rolling cr ON cr.Client_id = s.Solici_client
  				WHERE Solici_estado = 1';
  		$data = parent::consultas($sql);
   	 	return $data;
  	}
  }
?>