<?php
 
  /*
    
  */
  if(isset($_POST['consul_habiliti']) and $_POST['consul_habiliti'] == 'ok'){	
    include_once $_SERVER["DOCUMENT_ROOT"].'rolling-casting/Controller/HabilidadController.php';
  	$control = new HabilidadController();
  	if(isset($_POST['id_hability'])){
  	  $id = $_POST['id_hability'];
  	  $data = $control->Busca_SubItem_habili($id);
  	  echo json_encode($data);
  	}else{
  	  $data = $control->Busca_habilidad();
  	  echo json_encode($data);	
  	}
  	unset($control);
  }
  /* Busca por item de habilidad y subitem de habilidad*/
  if(isset($_POST['consul_habili']) and $_POST['consul_habili'] == 'ok'){
    include_once  $_SERVER["DOCUMENT_ROOT"].'rolling-casting/Controller/Busca_personalController';
  	$control = new Busca_personalController();
  	if(isset($_POST['habili'],$_POST['habili_sub'])){
  		$hab = $_POST['habili'];
  		$hab2 = $_POST['habili_sub'];
  		$data = $control->Buscar_habilidad_y_subhabilidad($hab,$hab2);
  		echo json_encode($data);
  	}

    /* Busca por sexo, habilidad y subitem de habilidad*/
  	if(isset($_POST['sex'],$_POST['habili'],$_POST['habili_sub']) and $_POST['busc'] == 1){
  		include_once  $_SERVER["DOCUMENT_ROOT"].'rolling-casting/Controller/Busca_personalController';
      $hab = $_POST['habili'];
  		$hab2 = $_POST['habili_sub'];
  		$sex = $_POST['sex'];
  		$data = $this->control->Buscar_sexo_habilidad($sex,$hab,$hab2);
  		echo json_encode($data);
  	}

    /* busca por sexo, habilidad, subhabilidad, edad*/
	if(isset($_POST['sex'],$_POST['habili'],$_POST['habili_sub'],$_POST['edad']) and $_POST['busc'] == 2){
  		include_once  $_SERVER["DOCUMENT_ROOT"].'rolling-casting/Controller/Busca_personalController';
      $hab = $_POST['habili'];
  		$hab2 = $_POST['habili_sub'];
  		$sex = $_POST['sex'];
  		$edad = $_POST['edad'];
  		$data = $this->control->Buscar_sexo_edad($sex,$hab,$hab2,$edad);
  		echo json_encode($data);
  	}
    /* busca por sexo, habilidad, subhabilidad, rang de edad */
 	if(isset($_POST['sex'],$_POST['habili'],$_POST['habili_sub'],$_POST['edad'],$_POST['edad2']) and $_POST['busc'] == 3)){
		  include_once  $_SERVER["DOCUMENT_ROOT"].'rolling-casting/Controller/Busca_personalController';
      $hab = $_POST['habili'];
  		$hab2 = $_POST['habili_sub'];
  		$sex = $_POST['sex'];
  		$edad = $_POST['edad'];
  		$edad2 = $_POST['edad2'];
  		$data = $this->control->GetSexoEdad_entre($sex,$hab,$hab2,$edad,$edad2);
  		echo json_encode($data);
 	}

 	/* Busca por escritura de forma dinamica */
 	if(isset($_POST['sex'],$_POST['habili_escri'],$_POST['habili_sub_escri'])){
      include_once  $_SERVER["DOCUMENT_ROOT"].'rolling-casting/Controller/Busca_personalController';
		  $hab = $_POST['habili_escri'];
  		$hab2 = $_POST['habili_sub_escri'];
  		$sex = $_POST['sex'];
  		$data = $this->control->Buscar_sexo_habilidad($sex,$hab,$hab2);
  		echo json_encode($data);
 	}

  
 

  if(isset($_POST['cedula']){
    include_once $_SERVER["DOCUMENT_ROOT"].'rolling-casting/Controller/UserController.php';
    $user = new UserController();
    $id = $_POST['cedula'];
    if(isset($_POST['nombre'],$_POST['apelli'],$_POST['tele'],$_POST['celu'],$_POST['direct'],$_POST['ciudad'],$_POST['ciud_origin'],$_POST['fech_nac'],
    		 $_POST['mail'],$_POST['sex'],$_POST['altura'])){
    	$nombre = $_POST['nombre'];
    	$apelli = $_POST['apelli'];
    	$tele = $_POST['tele'];
    	$cel = $_POST['celu'];
    	$direc = $_POST['direct'];
    	$ciud = $_POST['ciudad'];
    	$sex = $_POST['sex'];
    	$altur = $_POST['altura'];
    	$ciudad_org = $_POST['ciud_origin'];
        $fech_naci = $_POST['fech_nac'];
	    $email = $_POST['mail'];    
	    $data = $user->Add_personal($id,$nombre,$apelli,$tele,$cel,$direc,$ciud,$altur,$sex,$ciudad_org,$fech_naci,$email);
    	echo json_encode($data);
    }

    if(isset($_POST['experienc_nomb'],$_POST['experienc_descrip'])){
    	$user->SetId($id);
    	$nomb = $_POST['experienc_nomb'];
    	$descrip = $_POST['experienc_descrip'];
    	$data = $descrip->Add_descripcion($nomb,$descrip);
    	echo json_encode($data);
    }	

    if(isset($_FILE['foto1'],$url)){
      	$user->SetId($id);
    	$data = $user->Add_foto($_FILE['foto1'],$url);
    	echo json_encode($data);
    }

    if(isset($_POST['habili_sub'])){
    	$user->SetId($id);
     	$habili = $_POST['habili_sub']
    	$data = $user->Add_habilidad($habili);
    	echo json_encode($data);
    }

    if(isset($_POST['active'])){
    	$user->SetId($id);
    	$active = $_POST['active'];
    	$data = $user->Activar_usuario($active);
    	echo json_encode($data);
    }
  }


  if(isset($_POST['id_client'])){
  	include_once $_SERVER["DOCUMENT_ROOT"].'rolling-casting/Controller/Client_Controller.php';
  	$id = $_POST['id_client']
  	$client = new ClientController();
  	if(isset($_POST['nombre_clien'],$_POST['tel_client'],$_POST['direct_clien'],$_POST['tip_client'],$_POST['email_client'])){
  	  $nomb = $_POST['nombre_clien'],
  	  $tel = $_POST['tel_client'],
  	  $dir = $_POST['direct_clien'],
  	  $tip = $_POST['tip_client'],
  	  $email = $_POST['email_client'];
  	  $data = $client->Add_Client($id,$nomb,$tel,$dir,$tip,$email);
  	  echo json_encode($data);
  	}

  	if(isset($_POST['active'])){
  		$client->Set_id($id);
  		$acti = $_POST['active'];
  		$client->Activar_empresa($acti);
  	}		
  }



	
?>