<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Proyecto infracción</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/overwrite.css">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- =======================================================
      Theme Name: Bikin
      Theme URL: https://bootstrapmade.com/bikin-free-simple-landing-page-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body>
<header id="header">
    <nav class="navbar navbar-fixed-top" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="">Proyecto infracción</a>
            </div>
            <div class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="">Inicio</a></li>
                    <li><a href="#slider">Informacion</a></li>
                    <li><a href="#feature">Buscar Vehiculo</a></li>
                    @if(!isset($data->id))
                        <li><a href="#" onclick='$("#login").modal()'>Inicio Sesíon</a></li>
                    @else
                        <li><a href="/cerrar" >Cerrar Sesíon</a></li>
                        <li><a href="/panel" >Panel</a></li>
                    @endif
                </ul>
            </div>
        </div>
        <!--/.container-->
    </nav>
    <!--/nav-->
</header>
<!--/header-->
<div class="slider" id="slider">
    <div id="about-slider">
        <div id="carousel-slider" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators visible-xs">
                <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-slider" data-slide-to="1"></li>
                <li data-target="#carousel-slider" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
                <div class="item active">
                    <img src="img/multas_2017-web.jpg" class="img-responsive" alt="" style="width: 80%;position: relative; left: 120px;top:20px;">
                </div>
            </div>
            <a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a class=" right carousel-control hidden-xs" href="#carousel-slider" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
        </div>
        <!--/#carousel-slider-->
    </div>
    <!--/#about-slider-->
</div>
<!--/#slider-->

<div id="feature">
    <div class="container">
        <div class="row">
            <div class="text-center">
                <h3>Consulta de Multas de Tránsito</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit Lorem ipsum dolor sit<br>amet consectetur adipisicing elit</p>
            </div>
            <div class="col-md-4 wow fadeInRight" data-wow-offset="0" data-wow-delay="0.3s" onclick='tipoMulta(1)'>
                <div class="text-center">
                    <div class="hi-icon-wrap hi-icon-effect">
                        <!--<i class="fa fa-laptop"></i> -->
                        <img src="img/multas-de-tránsito-1.png" width="100">
                        <h2>Multa de transito</h2>
                        <p>Realice la buscaqueda con su cedula</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 wow fadeInRight" data-wow-offset="0" data-wow-delay="0.3s"  onclick='tipoMulta(2)'>
                <div class="text-center">
                    <div class="hi-icon-wrap hi-icon-effect">
                        <!--<i class="fa fa-heart-o"></i>--><p></p><p></p>
                        <img src="img/multasTransito.png" width="100">
                        <h2>Consulta Tu vehiculo</h2>
                        <p>Realice la buscaqueda con la placa del vehiculo</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.3s"  onclick='tipoMulta(3)'>
                <div class="text-center">
                    <div class="hi-icon-wrap hi-icon-effect">
                        <p></p>
                        <img src="img/informacion-formato-ap.png" width="200">
                        <h2>Tramite de formato de pago</h2>
                        <p>Realice la buscaqueda con el numero de recibo de la multa</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<footer>
    <div id="contact">
        <div class="container">
            <div class="text-center">
                <h3>Contact Us</h3>
                <p>Fusce fermen tum neque a rutrum varius odio pede</p>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.2s">
                    <h2>Contact us any time</h2>
                    <p>In a elit in lorem congue varius. Sed nec arcu. Etiam sit amet augue. Fusce fermen tum neque a rutrum varius odio pede ullamcorp-er tellus ut dignissim nisi risus non tortor. Aliquam mollis neque.</p>
                </div>

                <div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.4s">
                    <h2>Contact Info</h2>
                    <ul>
                        <li><i class="fa fa-home fa-2x"></i> Office # 38, Suite 54 Elizebth Street, Victoria State Newyork, USA 33026</li>
                        <hr>
                        <li><i class="fa fa-phone fa-2x"></i> +38 000 129900</li>
                        <hr>
                        <li><i class="fa fa-envelope fa-2x"></i> info@domain.net</li>
                    </ul>
                </div>

                <div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
                    <div id="sendmessage">Your message has been sent. Thank you!</div>
                    <div id="errormessage"></div>
                    <form action="" method="post" role="form" class="contactForm">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validation"></div>
                        </div>

                        <button type="submit" class="btn btn-theme pull-left">SEND MESSAGE</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--/#contact-->

    <div class="social-icon">
        <div class="container">
            <div class="col-md-6 col-md-offset-3">
                <ul class="social-network">
                    <li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>
                    <li><a href="#" class="dribbble tool-tip" title="Dribbble"><i class="fa fa-dribbble"></i></a></li>
                    <li><a href="#" class="pinterest tool-tip" title="Pinterest"><i class="fa fa-pinterest-square"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="text-center">
        <div class="copyright">
            &copy; Bikin Theme. All Rights Reserved.
            <div class="credits">
                <!--
                  All the links in the footer should remain intact.
                  You can delete the links only if you purchased the pro version.
                  Licensing information: https://bootstrapmade.com/license/
                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Bikin
                -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </div>





    @if(!isset($data->id))
        <div class="modals">
            <!-- Modal -->
            <div class="modal fade" id="login" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Iniciar Sesíon</h4>
                        </div>
                        <div class="modal-body">
                            <form id="formLogin">
                                <div class="form-group">
                                    <label>Usuario</label>
                                    <input id="usuario" name="usuario" class="form-control" type="text" value="" placeholder="Usuario" required="required">
                                </div>
                                <div class="form-group">
                                    <label>Contraseña</label>
                                    <input id="password" name="password" class="form-control" value="" type="password" placeholder="Contraseña" required="required">
                                </div>
                                <div class="form-group">
                                    <input id="btnLogin" class="btn btn-success btn-sm" type="submit" value="Iniciar Sesíon">
                                    <input data-dismiss="modal" class="btn btn-danger btn-sm" type="button" value="Cerrar">
                                </div>
                            </form>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    @endif



    <div class="modal fade" id="multaModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" onclick=' $("#labelCedula").html("");$("#tablemulta").html("");' data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" id="titleModalMulta"></h4>
                </div>
                <div class="modal-body">
                    <form id="formMulta">
                        <div class="form-group" id="tipoMulta">
                        </div>
                        <div class="form-group">
                            <input class="btn btn-success btn-sm" type="submit" value="Buscar Informacion">
                            <input data-dismiss="modal" class="btn btn-danger btn-sm" onclick='$("#labelCedula").html("");$("#tablemulta").html("");' type="button" value="Cerrar">
                        </div>
                    </form>
                </div>
                <div class="modal-body" id="informMulta" style="display: none;">
                    <h6>Informacion pertinentes de infracciones cometidas por el titular de la cedula: <label id="labelCedula"></label></h6>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Fecha Multa</th>
                            <th>Valor Multa</th>
                            <th>Informacíon Completa</th>
                        </tr>
                        </thead>
                        <tbody id="tablemulta">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-2.1.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/parallax.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script type="text/javascript" src="js/fliplightbox.min.js"></script>
<script src="js/functions.js"></script>
<script src="contactform/contactform.js"></script>
<script src="js/notify.min.js"></script>
<script src="/js/custom.js"></script>
<script>


    var csrf_token = '{{csrf_token()}}';
    var url = '{{url('')}}';


    $("#formLogin").on("submit",function (form) {
        form.preventDefault();
        var obj = new Object();
        obj.username = $("#usuario").val();
        obj.password = $("#password").val();

        if(obj.username.length>3 && obj.password.length > 3){
            post(url+"/login",obj,"POST",csrf_token).then(data => {
                if(data.status){
                    $.notify(data.success,"success");
                    window.location.href = url+"/panel"
                }else{
                    $.notify(data.error,"error");
                }
            });
        }else{
            $.notify("no puede haber campos vacios| usuario o la contraseña deben ser mayores que 3 digistros","error");
        }
    });



    function  tipoMulta(tipo) {
        $("#multaModal").modal();
        switch (tipo) {
            case 1: {
                $("#titleModalMulta").html("Buscar informacion de tu infraccion mediante tu cedula");
                $("#tipoMulta").html('<label>Cedula</label><input id="cedula" name="cedula" class="form-control" type="number" value="" placeholder="Cedula" required="required" minlength="8" maxlength="10">');
                break;
            }
            case 2:{
                $("#titleModalMulta").html("Buscar informacion de tu infraccion mediante la placa de tu vehiculo");
                $("#tipoMulta").html('<label>Placa</label><input id="placa" name="placa" class="form-control" type="text" value="" placeholder="Placa" required="required" >');
                break;
            }
            case 3:{
                $("#titleModalMulta").html("Buscar informacion de tu infraccion mediante el codigo de infraccion");
                $("#tipoMulta").html('<label>codigo Multa</label><input id="codigo" name="codigo" class="form-control" type="number" value="" placeholder="Codigo Multa" required="required">');
                break;
            }
        }
    }


    $("#formMulta").on("submit",function (form) {
        form.preventDefault();
        var obj = new Object();

        if($("#cedula").val() !== undefined){
            obj.cedula = $("#cedula").val();
        }
        if($("#codigo").val() !== undefined){
            obj.codigo = $("#codigo").val();
        }
        if($("#placa").val() !== undefined){
            obj.placa = $("#placa").val();
        }
        post(url+"/getInfo",obj,"POST",csrf_token).then(
          data => {
              console.log(data);
              if(data.length>0){
                $("#informMulta").css("display","block");
                var string = "";
                var cedula = "";
                for(var i in data){
                    string += "<tr>";
                    string += '<td><i class="fa fa-users"></i> '+data[i].primerNombre+' '+data[i].primerApellido+'</td>';
                    string += '<td><i class="fa fa-ticket"></i> '+data[i].fechaMulta+'</td>';
                    string += '<td><i class="fa fa-money"></i> '+data[i].multa+'</td>';
                    string += '<td><a target="_blank" href="/panelInfraccion/'+data[i].cedula+'#'+data[i].idPersona+'" class="btn-sm btn-dark">Informacíon Completa</a></td>';
                    string += "<tr>";
                    cedula = data[i].cedula;
                }
                $("#labelCedula").html(cedula);
                $("#tablemulta").html(string);
              }else{
                  $.notify("No existe referencia para su busquedad")
                  $("#informMulta").css("display","none");
              }
          }
        );
    });
</script>

</body>
</html>
