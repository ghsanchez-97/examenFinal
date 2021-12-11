<!DOCTYPE html>
<html lang="en">

<head>
    <title>Univalle</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/stilo.css" rel="stylesheet" type="text/css">
    <link href="js/mai.js" rel="stylesheet">
</head>

<body>
    <?
    //Declaración de Variables y asignando valores
    $Usuario = $_POST['Usuario'];
    $Password = $_POST['Password'];

     //Declaramos variables.
     $servername = "localhost";
     $username = "root";
     $password = "12345678";
     $DB = "DB_NOTA";

  //Conexion con la base
  $con = new mysqli($servername, $username, $password, $DB);

    //seleccin de la base de datos con la que vamos a trabajar 
   // mysql_select_db("BD_NOTA"); (Depreciado)

    //Ejecutamos la sentencia SQL
    $result = mysqli_query($con, "select * from usuarios where(Usuario='$Usuario' and Password='$Password')");

    //Mostramos los registros
    $row = mysqli_fetch_array($result);
    $Usuario = $row["Usuario"];
    $Password = $row["Password"];
    $Nombre_Usuario = $row["Nombre_Usuario"];
    mysqli_free_result($result);
    ?>

    <!-- Inicio de menu de navegacion-->
    <nav class="navbar navbar-default menu-fixed">
        <div class="container-fluid">
            <!--Brand and toggle get grouped for a better mobile display-->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1" aria-expanded="false">
                    <span class="sr-only"> Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand"> UNIVALLE - <? echo 'Usuario: '.$Nombre_Usuario ?></a>


            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="defaultNavbar1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="index.html">Inicio<span class="sr-only">(current)</span></a></li>
                    <li><a href="alumnos.html">Alumnos</a></li>
                    <li><a href="asignaturas.html">Asignaturas</a></li>
                    <li><a href="asignacion.html">Asignación</a></li>
                    <li><a href="notas.html">Notas</a></li>
                    <li><a href="reportes.html">Reportes</a></li>
                </ul>
            </div>

        </div>

    </nav>
    <!--Fin menu navegacion-->
    <!--INICIO DEL SLIDER DEL BANNER-->
    <div id="carousell" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousell" data-slide-to="0" class="active"></li>
            <li data-target="#carousell" data-slide-to="1"></li>
            <li data-target="#carousell" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="img/banner1.jpg" alt="First slide image" width="100%" class="center-block">
                <div class="carousel-caption">
                    <h3></h3>
                    <p></p>
                </div>
            </div>
            <div class="item">
                <img src="img/banner2.jpg" alt="Second slide image" width=" 100%" class="center-block">
                <div class="carousel-caption">
                    <h3></h3>
                    <p></p>
                </div>
            </div>
            <div class="item">
                <img src="img/banner3.jpg" alt="Third slide image" width="100%" class="center-block">
                <div class="carousel-caption">
                    <h3></h3>
                    <p></p>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#carousell" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousell" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <!--Fin del slider de nota-->
    <!--Contenido de la pagina-->
    <section class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <h3>Sistema de Registro de Notas <br> en Línea</h3>
            </div>
        </div>
    </section>

    <section class="container" align="center">
        <div class="row">
            <div class="col-md-12" col-md-offset-2 align="center">
                <div>
                    <img src="img/LOGO-UNIVALLE.jpg" alt="" width="300" height="250">
                </div>
            </div>

        </div>
    </section>

    <!-- Fin delcontenido de la pagina-->
    <!-- Inicio de pie de pagina-->

    <footer>
        <!-- Seccion 1 -->
        <section class="pie01">
            <div class="container">

                <div class="row" text align="left">
                    <!-- Inicio de la fila -->
                    <!-- Mapa del sitio -->
                    <div class="col-md-6">
                        <h4>Mapa del sitio</h4>
                        <dl>
                            <dl>
                                <dt><a href="index.html">Inicio</a></dt>
                                <dt><a href="alumnos.html">Alumnos</a></dt>
                                <dt><a href="asignatura.html">Asignaturas</a></dt>
                                <dt><a href="asignacion.html">Asignacion</a></dt>
                                <dt><a href="notas.html">Notas</a></dt>
                                <dt><a href="reportes.html">Reportes</a></dt>
                            </dl>
                        </dl>
                    </div>
                    <!-- Datos de contacto -->
                    <div class="col-md-6">
                        <h4>Datos de contacto</h4>
                        <address>
                            Direccion: Costado sur de la rotonda del Periodista, <br>Managua, Nicaragua.<br>
                            <abbr title="phone">PBX:</abbr>2278-8626<br>
                            E-mail:<a href="mailto:josuearroliga89@gmail.com">Adminion Univalle</a><br>
                            Horario de atencion:8:00am - 5:00pm<br>
                            Facebook : Twitter - UNIVALLENIC
                        </address>
                    </div>
                    <!-- Cierre de la fila -->
                </div>
            </div>
        </section>
        <!-- Section 02 -->
        <section class="pie02">
            <div class="container">
                &copy; copyright 2020 UNIVALLE - Desarrollado por: Ing Josue Arroliga
            </div>
        </section>
    </footer>
    <!-- Fin pie de pagina -->

    <!-- JQUERY needed for Bootstrap's Javascript plugins-->
    <script src="js/jquery-1.11.3.min.js"></script>
    <!-- Include all compilled plugins "below", or include individual files as needed-->
    <script src="js/bootstrap.js"></script>
</body>

</html>