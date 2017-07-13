<!DOCTYPE html>
<html lang="en">
<head>


        <link rel="shortcut icon" href="../bs/img/Chat.PNG">
    <meta charset="UTF-8">
    <title>Chat</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content_Type" content="text/html; charset=UTF-8"/>
    <link rel="stylesheet" href="../bs/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../bs/css/stilo.css">
    

      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
       <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
       <script src="../bs/js/jquery.min.js"></script>
      <script type="text/javascript" src="../bs/js/bootstrap.js"></script>
      <script src="../bs/js/pruebas.js"></script>









</head>
<body>
  



<div class="col-md-12 col-sm-12 col-xs-12 m-b" id="BUSCAR"> 
<a href="#" onclick="ELEGIRR('BUSCAR')" class="hamburger is-closed" data-toggle="offcanvas" id="m-b"><span class="glyphicon glyphicon-search"></span></a>
</div>


<div class="col-md-12 col-sm-12 col-xs-12 m-b-s" id="CANCELAR" style="display: none;"> 
<a href="#" onclick="ELEGIRR('ATRAS')" class="hamburger is-closed" data-toggle="offcanvas" id="m-b-s">
<span class="glyphicon glyphicon-chevron-left"></span></a>
</div>






<div class="" id="SM">
<div class="col-md-4 col-sm-4 col-xs-4 m-t"> 
<a href="#" data-toggle="modal" data-target="#myModal" id="m-t"><span class="glyphicon glyphicon-wrench"></span></a></div>

<div class="col-md-4 col-sm-4 col-xs-4 m-t"> 
<a href="#" onclick="OPCION('MENSAJES')"  id="m-t"><span class="glyphicon glyphicon-comment"></span></a></div>

<div class="col-md-4 col-sm-4 col-xs-4 m-t"> 
<a href="#" onclick="OPCION('GRUPOS')" id="m-t"><span class="glyphicon glyphicon-user"></span></a> </div>
</div>






    <div id="wrapper">
      <nav class="navbar navbar-fixed-top" id="sidebar-wrapper" role="navigation">
        <input type="text" class="form-control" placeholder="Buscar" id="input">
      </nav>
    </div>




<div class="chat">
</div>





<div id="myModal" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content" >

      <div class="modal-header"><h4 class="modal-title">Usuario</h4></div>

      <div class="modal-body">

    <div id="menu">
        <ul class="nav"><li><a href="#"><span class="glyphicon glyphicon-cog"></span> Ajustes</a></li></ul>
        <ul class="nav"><li><a href="#"><span class="glyphicon glyphicon-list"></span> Contactos</a></li></ul>
        <ul class="nav"><li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Cerrar Sesión</a></li></ul>

    </div>

      </div>

    </div>

  </div>
</div>












<!--Mensajes-->
    <div id="MENSAJES" style="display: none;">
      <nav class="navbar navbar-fixed-top" id="ventana">
      <?php for ($i=1; $i<=30 ; $i++) { ?>
         <ul class="nav sidebar-nav"><li><a href="#" id="datos"><span class="glyphicon glyphicon-comment"> Mensaje <?php echo $i; ?></span></a></li></ul>
      <?php } ?>
       
      </nav>
    </div>







<!--Mensajes-->
    <div id="GRUPOS" style="display: none;">
      <nav class="navbar navbar-fixed-top" id="ventana">
      <?php for ($i=1; $i<=75 ; $i++) { ?>
         <ul class="nav sidebar-nav"><li><a href="#" id="datos"><span class="glyphicon glyphicon-user"> Grupo <?php echo $i; ?></span></a></li></ul>
      <?php } ?>
      </nav>
    </div>


















</body>
</html>