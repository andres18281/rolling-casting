<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilos_logueado.css">
  <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style type="text/css">
 #actor{
  background: url('img/icon-actor.ico');
  border-radius: 50%;
  width: 120px;
  height: 120px; 
  background-repeat: no-repeat;
  border-radius: 50%;
 }  
 #actor:hover {
  background: url('img/icon-actor.ico');
  -webkit-animation:rotateIn 1s;
 }

 @-webkit-keyframes rotateIn {
  from {
    -webkit-transform-origin: center;
    transform-origin: center;
    -webkit-transform: rotate3d(0, 0, 1, -200deg);
    transform: rotate3d(0, 0, 1, -200deg);
    opacity: 0;
  }

  100% {
    -webkit-transform-origin: center;
    transform-origin: center;
    -webkit-transform: none;
    transform: none;
    opacity: 1;
  }
}

</style>


</head>
<body>
  <div id="wrapper">
   <nav class="navbar navbar-inverse">
  	<div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
      
      
      </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
        
        </ul>
      
        <ul class="nav navbar-nav navbar-right">
         <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Buscar </a></li>
            <li><a href="#">Opcion 3</a></li>
            <li><a href="#">Opcion 3</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Salir</a></li>
          </ul>
         </li>
      	</ul>
      </div><!-- /.navbar-collapse -->
  	</div><!-- /.container-fluid -->
   </nav>

        <div class="overlay"></div>
    
        <!-- Sidebar -->
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <li class="sidebar-brand">
                    <a  href="#">
                       Opciones
                    </a>
                </li>
                <li>
                    <a id="btn_seart" href="#">Mis solicitudes</a>
                </li>
                <li>
                    <a href="#">Diligenciar informacion mia</a>
                </li>
                <li>
                    <a id="btn_add_habili" href="#">Agregar Habilidad</a>
                </li>
                <li>
                    <a id="btn_add_experi" href="#">Agregar Experiencia</a>
                </li>
                <li>
                    <a href="#">Ver Historial</a>
                </li>
            </ul>
        </nav>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
    			<span class="hamb-middle"></span>
				<span class="hamb-bottom"></span>
            </button>
            <div class="container-fluid">
               <div class="col-lg-8 col-md-offset-2 col-lg-offset-2">
                  <div id="opcion"></div>
               </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

</body>
</html>



<script>

 $(document).ready(function(){

  $("#btn_add_experi").click(function(){
    $("#opcion").html("");
    $("#opcion").load('template/add_experiencia.html');  
  });
  $("#btn_add_habili").click(function(){
    $("#opcion").html("");
    $("#opcion").load('template/add_habilidad.html'); 
  });

  var trigger = $('.hamburger'),
      overlay = $('.overlay'),
     isClosed = false;

    trigger.click(function () {
      hamburger_cross();      
    });

    function hamburger_cross() {

      if (isClosed == true) {          
        overlay.hide();
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = false;
      } else {   
        overlay.show();
        trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        isClosed = true;
      }
  }
  
  $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapper').toggleClass('toggled');
  });  
});

</script>

