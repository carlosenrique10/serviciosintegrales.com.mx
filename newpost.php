<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Inicio| Servicios Integrales en Internet y Cómputo de México</title>
    <link rel="icon" type="image/png" href="images/favicon.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS Files -->
    <link rel="stylesheet" href="css/main.css" type="text/css" id="main-css">
    <link rel="stylesheet" href="css/wide-screen.css" type="text/css" id="wide">
    <!--modals%scripts-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <!-- Javascript Files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/easing.js"></script>
    <script src="js/jquery.ui.totop.js"></script>
    <script src="js/selectnav.js"></script>
    <script src="js/ender.js"></script>
    <script src="js/jquery.lazyload.js"></script>
    <script src="rs-plugin/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
    <script src="js/jquery.flexslider-min.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/rev-setting-1.js"></script>
    <script type="text/javascript" src="js/jquery.slicknav.min.js"></script>
    <script type="text/javascript" src="js/fileinput.min.js"></script>
    <script>
    var $jq = jQuery.noConflict();
        $(function(){
        $jq('#mainmenu').slicknav();
    });

    </script>
</head>
<body>
    <!-- Boton Like -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&appId=1482683755341621&version=v2.0";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <div id="wrapper">

        <header>
            <div class="container">
                <div id="logo">
                    <div class="inner">
                        <a href="index.php">
                            <img src="images/logo-siicom.png" alt=""></a>
                    </div>
                </div>
                <ul id="mainmenu">
                    <li><a href="index.php" title="Inicio">Inicio</a></li>
                    <li><a href="paquetes.php" title="Paquetes">Paquetes</a></li>
                        <ul>
                            <li><a href="contacto.php">Contactanos</a></li>
                            <li><a href="directorio.php">Directorio</a></li>
                        </ul>
                    </li>
                    <li><a href="#" title="Software">Software</a>
                        <ul>
                            <li><a href="contpaqi.php">CONTPAQ i</a></li>
                            <li><a href="casa.php">Sistema CASA</a></li>
                            <li><a href="reco.php">Sistemas RECO</a></li>
                        </ul>
                    </li>
                    <li><a href="#" title="Servicios">Servicios</a>
                        <ul>
                            <li><a href="capacitaciones.php">Capacitaciones</a></li>
                            <li><a href="descargas.php">Descargas</a></li>
                        </ul>
                    </li>
                    <li><a href="productos.php" title="Productos">Productos</a></li>
                </ul>
            </div>
        </header>

        <div id="subheader">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <h1><a href="http://www.twitter.com/home?status=" original-title="Obten 100MB en Tamaño de Disco, 1 Base de Datos y 1 Cuenta de Correo solamente siguiendonos en la pagina de twitter de SIICOM-MX." class="tooltip" target="_blank"><img src="https://lh5.googleusercontent.com/-xZVxH6CsUaQ/UefWwgi8o3I/AAAAAAAAEdk/reo5XS6z8-8/s32-no/twitter.png"></a>
                        <a href="https://www.facebook.com/pages/Servicios-Integrales-En-Internet-Y-Computo-De-M%C3%A9xico/101090743293750?fref=ts" original-title="Obten 100MB en Tamaño de Disco, 1 Base de Datos y 1 Cuenta de Correo solamente dando like a la pagina de Facebook de SIICOM-MX." class="tooltip" target="_blank"><img src="https://lh3.googleusercontent.com/-H8xMuAxM-bE/UefWwJr2vwI/AAAAAAAAEdY/N5I41q19KMk/s32-no/facebook.png"></a></h1>
                        <span>Servicios Integrales en Internet y Cómputo de México</span>
                        <ul class="crumb">
                            <li><a href="index.php">Inicio</a></li>
                            <li class="sep">|</li>
                            <li>Paquetes</li>
                            <li class="sep">|</li>
                            <li><button type="button" class="button special"  data-toggle="modal" data-target="#myModal">Entrar</button></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="login-page">
  <div class="form1">
    <form class="register-form">
    <form role="form" name="registro" action="registro.php" method="post">
      <input type="text" class="form-control" id="username" name="username" placeholder="Nombre de usuario" required/>
      <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Nombre Completo" required/>
      <input type="password" class="form-control" id="password" name="password" placeholder="Contrase&ntilde;a" required/>
      <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirmar Contrase&ntilde;a" required/>
      <input type="email" class="form-control" id="email" name="email" placeholder="Correo Electronico" required/>
      <button type="submit" class="btn btn-default">Registrar</button>
      <p class="message">Ya estas registrado? <a href="#">Entra</a></p>
      </form>
    </form>
    <form class="login-form">
        <form action="acceso.php" method="POST">
      <input type="text" placeholder="Nombre de usuario" required/>
      <input type="password" placeholder="Contraseña" required/>
      <button name="enviar" value="Ingresar">Iniciar</button>
      <p class="message">No estas registrado? <a href="#">Crea una cuenta</a></p>
      </form>
    </form>
  </div>
</div>
      
    </div>
  </div>       
        </div>
<html>
    <body>
    <!-- contenido new post-->
      <div class="container">
<div class="row">
<div class="col-md-6">
        <h2>Nuevo post</h2>

        <form role="form" name="registro" action="publicar.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="username">Titulo del post:</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Titulo">
          </div>
          <div class="form-group">
            <label for="fullname">Descripcion:</label>
            
            <textarea rows="4" cols="50" class="form-control" id="fullname" name="fullname" placeholder="Que fue lo que se realizo">
 
            </textarea>
          </div>
          <label for="email">Agregar fotos:</label>
          <div class="form-group">
            <input id="file-3" type="file" multiple=true class="btn btn-primary" >
          000000000000</div> 

         <button id="xxx" type="submit" class="btn btn-default">P
         ublicar</button>
        </form>
        </div>
        </div>
        </div>
        <!-- contenido new post-->
    </body>
</html>
        <footer class="subfooter">
            <div class="container">
                <div class="row">
                    <div class="span6">
                        &copy; Copyright 2014 - Servicios Integrales en Internet y Cómputo de México.
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script type="text/javascript">
        document.oncontextmenu = function(){return false;}

         var $jq = jQuery.noConflict();
           $jq("#file-3").fileinput({
    showUpload: false,
    showCaption: false,
    browseClass: "btn btn-primary btn-lg",
    fileType: "any",
        previewFileIcon: "<i class='glyphicon glyphicon-king'></i>"
  });
        
    </script>
    <script>
        $('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
    </script>
</body>
</html>
