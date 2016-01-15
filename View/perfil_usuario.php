<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilos_logueado.css">
  <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style type="text/css">
    /* 
Inspired by http://dribbble.com/shots/890759-Ui-Kit-Metro/attachments/97174
*/
*, *:before, *:after {
  /* Chrome 9-, Safari 5-, iOS 4.2-, Android 3-, Blackberry 7- */
  -webkit-box-sizing: border-box; 

  /* Firefox (desktop or Android) 28- */
  -moz-box-sizing: border-box;

  /* Firefox 29+, IE 8+, Chrome 10+, Safari 5.1+, Opera 9.5+, iOS 5+, Opera Mini Anything, Blackberry 10+, Android 4+ */
  box-sizing: border-box;
}

.btn-nav {
    background-color: #fff;
    border: 1px solid #e0e1db;
    -webkit-box-sizing: border-box; /* Safari/Chrome, other WebKit */
    -moz-box-sizing: border-box;    /* Firefox, other Gecko */
    box-sizing: border-box;         /* Opera/IE 8+ */
}
.btn-nav:hover {
    color: #e92d00;
    cursor: pointer;
    -webkit-transition: color 1s; /* For Safari 3.1 to 6.0 */
    transition: color 1s;
}
.btn-nav.active {
    color: #e92d00;
    padding: 2px;
  border-top: 6px solid #e92d00;
  border-bottom: 6px solid #e92d00;
    border-left: 0;
    border-right: 0;
    box-sizing:border-box;
    -moz-box-sizing:border-box;
    -webkit-box-sizing:border-box;
    -webkit-transition: border 0.3s ease-out, color 0.3s ease 0.5s;
    -moz-transition: border 0.3s ease-out, color 0.3s ease 0.5s;
    -ms-transition: border 0.3s ease-out, color 0.3s ease 0.5s; /* IE10 is actually unprefixed */
    -o-transition: border 0.3s ease-out, color 0.3s ease 0.5s;
    transition: border 0.3s ease-out, color 0.3s ease 0.5s;
    -webkit-animation: pulsate 1.2s linear infinite;
    animation: pulsate 1.2s linear infinite;
}
.btn-nav.active:before {
  content: '';
  position: absolute;
  border-style: solid;
  border-width: 6px 6px 0;
  border-color: #e92d00 transparent;
  display: block;
  width: 0;
  z-index: 1;
  margin-left: -6px;
  top: 0;
  left: 50%;
}
.btn-nav .glyphicon {
    padding-top: 16px;
  font-size: 40px;
}
.btn-nav.active p {
    margin-bottom: 8px;
}
@-webkit-keyframes pulsate {
 50% { color: #000; }
}
@keyframes pulsate {
 50% { color: #000; }
}
@media (max-width: 480px) {
    .btn-group {
        display: block !important;
        float: none !important;
        width: 100% !important;
        max-width: 100% !important;
    }
}
@media (max-width: 600px) {
    .btn-nav .glyphicon {
        padding-top: 12px;
        font-size: 26px;
    }
}






  #modelaje{
  background: url('img/icon-modelo.png');
  border-radius: 50%;
  width: 150px;
  height: 150px; 
  background-repeat: no-repeat;
  border-radius: 50%;
  cursor:pointer;
 } 

 #modelaje:hover{
  background: url('img/icon-modelo.png');
  -webkit-animation:rotateIn 2s;
  animation:rotateIn 2s;
  -moz-animation:rotateIn 2s;

 }

 #actor{
  background: url('img/icon-actor.ico');
  border-radius: 50%;
  width: 150px;
  height: 150px; 
  background-repeat: no-repeat;
  border-radius: 50%;
  cursor:pointer;
 }

 #actor:hover {
  background: url('img/icon-actor.ico');
  -webkit-animation:rotateIn 2s;
  animation:rotateIn 2s;
  -moz-animation:rotateIn 2s;
 }

 #cantante{
  background: url('img/icon-cantant.ico');
  border-radius: 70%;
  width: 150px;
  height: 150px; 
  background-repeat: no-repeat;
  border-radius: 50%;
  cursor:pointer;
 }

 #cantante:hover{
  background: url('img/icon-cantant.ico');
  -webkit-animation:rotateIn 2s;
  animation:rotateIn 2s;
  -moz-animation:rotateIn 2s;
 }
 #animadores{
  background: url('img/ico-animadores.ico');
  border-radius: 70%;
  width: 150px;
  height: 150px; 
  background-repeat: no-repeat;
  border-radius: 50%;
  cursor:pointer;
 }

 #animadores:hover{
  background: url('img/ico-animadores.ico');
  -webkit-animation:rotateIn 2s;
  animation:rotateIn 2s;
  -moz-animation:rotateIn 2s;
 }




 @-webkit-keyframes rotateIn {
  from {
    -webkit-transform-origin: center;
    -moz-transform-origin: center;
    transform-origin: center;
    -webkit-transform: rotate3d(0, 0, 1, -200deg);
    transform: rotate3d(0, 0, 1, -200deg);
    -moz-transform: rotate3d(0, 0, 1, -200deg);
   
   
  }

  100% {
    -webkit-transform-origin: center;
    transform-origin: center;
    -webkit-transform: none;
     -moz-transform-origin: center;
    moz-transform-origin: center;
    moz-webkit-transform: none;
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
                    <a id="btn_add_datos" href="#">Diligenciar informacion mia</a>
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
                  <div id="contenido">
          



                  </div>
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
     $("#contenido").html("");
    $("#opcion").load('template/add_experiencia.html');  
  });

  $("#btn_add_habili").click(function(){
    $("#opcion").html("");
     $("#contenido").html("");
    $("#opcion").load('template/add_habilidad.html'); 
  });

  $("#btn_add_datos").click(function(){
     $("#opcion").html("");
     $("#contenido").html("");
     $("#contenido").load('template/actualizar_datos.html'); 
  });

  $(document).on('click',"#modelaje",function(){ 
    $("#contenido").html("");
    $("#contenido").load("template/contenido_opcion.html #opcionModelos");
  }); 

  $(document).on('click',"#cantante",function(){
     $("#contenido").html("");
     $("#contenido").load("template/contenido_opcion.html #opcionCantante");
  }); 

  $(document).on('click',"#actor",function(){
     $("#contenido").html("");
     $("#contenido").load("template/contenido_opcion.html #opcionActor");
  }); 

  $(document).on('click',"#animadores",function(){
     $("#contenido").html("");
      $("#contenido").load("template/contenido_opcion.html #opcionAnimador");
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
  var activeEl = 2;
  $(function() {
    var items = $('.btn-nav');
    $( items[activeEl] ).addClass('active');
    $(document).on('click',".btn-nav",function() {
        $( items[activeEl] ).removeClass('active');
        $( this ).addClass('active');
        activeEl = $( ".btn-nav" ).index( this );
    });
});

});

</script>

