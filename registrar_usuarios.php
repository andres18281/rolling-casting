<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <title></title>
  <style type="text/css">
  	#wrap{
	 background-image: -ms-linear-gradient(top, #FFFFFF 0%, #D3D8E8 100%);
/* Mozilla Firefox */ 
	 background-image: -moz-linear-gradient(top, #FFFFFF 0%, #D3D8E8 100%);
/* Opera */ 
	 background-image: -o-linear-gradient(top, #FFFFFF 0%, #D3D8E8 100%);
/* Webkit (Safari/Chrome 10) */ 
	 background-image: -webkit-gradient(linear, left top, left bottom, color-stop(0, #FFFFFF), color-stop(1, #D3D8E8));
/* Webkit (Chrome 11+) */ 
	 background-image: -webkit-linear-gradient(top, #FFFFFF 0%, #D3D8E8 100%);
/* W3C Markup, IE10 Release Preview */ 
background-image: linear-gradient(to bottom, #FFFFFF 0%, #D3D8E8 100%);
 height: 100%;

}
legend{
	color:#141823;
	font-size:25px;
	font-weight:bold;
}
html{
	height: 100%;
}
.signup-btn {
  background: #79bc64;
  background-image: -webkit-linear-gradient(top, #79bc64, #578843);
  background-image: -moz-linear-gradient(top, #79bc64, #578843);
  background-image: -ms-linear-gradient(top, #79bc64, #578843);
  background-image: -o-linear-gradient(top, #79bc64, #578843);
  background-image: linear-gradient(to bottom, #79bc64, #578843);
  -webkit-border-radius: 4;
  -moz-border-radius: 4;
  border-radius: 4px;
  text-shadow: 0px 1px 0px #898a88;
  -webkit-box-shadow: 0px 0px 0px #a4e388;
  -moz-box-shadow: 0px 0px 0px #a4e388;
  box-shadow: 0px 0px 0px #a4e388;
  font-family: Arial;
  color: #ffffff;
  font-size: 20px;
  padding: 10px 20px 10px 20px;
  border: solid #3b6e22  1px;
  text-decoration: none;
}

.signup-btn:hover {
  background: #79bc64;
  background-image: -webkit-linear-gradient(top, #79bc64, #5e7056);
  background-image: -moz-linear-gradient(top, #79bc64, #5e7056);
  background-image: -ms-linear-gradient(top, #79bc64, #5e7056);
  background-image: -o-linear-gradient(top, #79bc64, #5e7056);
  background-image: linear-gradient(to bottom, #79bc64, #5e7056);
  text-decoration: none;
}
.navbar-default .navbar-brand{
		color:#fff;
		font-size:30px;
		font-weight:bold;
	}
.form .espacio { margin-bottom: 10px; }
@media (min-width:768px) {
	#home{
		margin-top:50px;
	}
	#home .slogan{
		color: #0e385f;
		line-height: 29px;
		font-weight:bold;
	}
}


  </style>

</head>
<body id="wrap">
 <div class="container-fluid" >
    <div class="col-md-6 col-md-offset-3">
     <form action="r" method="post" accept-charset="utf-8" class="form" role="form" style="margin-top:10%">
      <legend>Registrar</legend>
      <h4>Por favor digite los datos</h4>
      <div class="row">
        <div class="col-xs-6 col-md-6">
          <input type="text" name="firstname" value="" class="form-control espacio input-md" placeholder="Nombres"/>
        </div>
        <div class="col-xs-6 col-md-6">
            <input type="text" name="lastname" value="" class="form-control  espacio input-md" placeholder="Apellidos"/>
        </div>
      </div>
      <input type="text" name="email" value="" class="form-control espacio input-md" placeholder="Correo"/>
      <input type="password" name="password" value="" class="form-control espacio input-md" placeholder="Password"  />
      <input type="password" name="confirm_password" value="" class="form-control espacio input-md" placeholder="Confirm Password"  />                    
      <label>Fecha de nacimiento</label>                    
      <div class="row">
        <div class="col-xs-4 col-md-4">
          <select name="month" class = "form-control espacio input-md">	 
	      </select>  
		</div><!--col-xs-4-->
        <div class="col-xs-4 col-md-4">
          <select name="day" class = "form-control espacio input-md">
				
	 	  </select>       
        </div>
        <div class="col-xs-4 col-md-4">
           <select name="year" class = "form-control espacio input-md">
		     <option value="1935">1935</option>
			 <option value="2013">2013</option>
		   </select>
		</div>
      </div>
      <div class="col-xs-5 col-md-5">
        <label>Sexo : </label>
        <label class="radio-inline">
          <input type="radio" name="gender" value="M" id="male"/>Hombre
        </label>
        <label class="radio-inline">
          <input type="radio" name="gender" value="F" id="female"/>Mujer
        </label>
          	<br/>
      </div>
      <button class="btn btn-md btn-primary btn-block signup-btn" style="margin-top:10%" type="submit">Crear Cuenta</button>
     </form>          
    </div>
    <div class="container-fluid" ></div>
 </div>
</body>
</html>