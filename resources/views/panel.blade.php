<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <style>
        #loader {
            transition: all .3s ease-in-out;
            opacity: 1;
            visibility: visible;
            position: fixed;
            height: 100vh;
            width: 100%;
            background: #fff;
            z-index: 90000
        }

        #loader.fadeOut {
            opacity: 0;
            visibility: hidden
        }

        .spinner {
            width: 40px;
            height: 40px;
            position: absolute;
            top: calc(50% - 20px);
            left: calc(50% - 20px);
            background-color: #333;
            border-radius: 100%;
            -webkit-animation: sk-scaleout 1s infinite ease-in-out;
            animation: sk-scaleout 1s infinite ease-in-out
        }

        @-webkit-keyframes sk-scaleout {
            0% {
                -webkit-transform: scale(0)
            }

            100% {
                -webkit-transform: scale(1);
                opacity: 0
            }
        }

        @keyframes sk-scaleout {
            0% {
                -webkit-transform: scale(0);
                transform: scale(0)
            }

            100% {
                -webkit-transform: scale(1);
                transform: scale(1);
                opacity: 0
            }
        }
    </style>
    <link href="/css/panel/style.css" rel="stylesheet">
</head>

<body class="app">
<div id="loader">
    <div class="spinner"></div>
</div>
<script type="text/javascript">
    window.addEventListener('load', () => {
        const loader = document.getElementById('loader');
        setTimeout(() => {
            loader.classList.add('fadeOut');
        }, 300);
    });
</script>
<div>
    <div class="sidebar">
        <div class="sidebar-inner">
            <div class="sidebar-logo">
                <div class="peers ai-c fxw-nw">
                    <div class="peer peer-greed"><a class="sidebar-link td-n" href="https://colorlib.com/polygon/adminator/index.html" class="td-n">
                            <div class="peers ai-c fxw-nw">
                                <div class="peer">
                                    <div class="logo"><img src="/css/panel/logo.png" alt=""></div>
                                </div>
                                <div class="peer peer-greed">
                                    <h5 class="lh-1 mB-0 logo-text">Adminator</h5>
                                </div>
                            </div>
                        </a></div>
                    <div class="peer">
                        <div class="mobile-toggle sidebar-toggle"><a href="" class="td-n"><i class="ti-arrow-circle-left"></i></a></div>
                    </div>
                </div>
            </div>
            <ul class="sidebar-menu scrollable pos-r">

                <!-- policia -->
                @if($data->rol == 1)

                    <li class="nav-item">
                        <a class="sidebar-link" href="#">
                            <span class="icon-holder"><i class="c-light-blue-500 ti-pencil"></i> </span>
                            <span class="title">Registrar Infraccion</span>
                        </a>
                    </li>


                @elseif($data->rol > 1)
                    <li class="nav-item">
                        <a class="sidebar-link" href="#gestionUser">
                            <span class="icon-holder"><i class="c-light-red-500 ti-pencil"></i> </span>
                            <span class="title">Gestion De Usuario</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="sidebar-link" href="#gestionTipoLey">
                            <span class="icon-holder"><i class="c-light-red-500 ti-files"></i> </span>
                            <span class="title">Tipo De Infracciones</span>
                        </a>
                    </li>



                @endif

                <li class="nav-item">
                    <a class="sidebar-link" href="{{url("/cerrar")}}">
                        <span class="icon-holder"><i class="c-light-red-500 ti-close"></i> </span>
                        <span class="title">Cerrar Session</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
    <div class="page-container">
        <div class="header navbar">
            <div class="header-container">
                <ul class="nav-left">
                    <li><a id="sidebar-toggle" class="sidebar-toggle" href="javascript:void(0);"><i class="ti-menu"></i></a></li>
                    <li class="search-box"><a class="search-toggle no-pdd-right" href="javascript:void(0);"><i class="search-icon ti-search pdd-right-10"></i> <i class="search-icon-close ti-close pdd-right-10"></i></a></li>
                    <li class="search-input"><input class="form-control" type="text" placeholder="Search..."></li>
                </ul>
                <ul class="nav-right">
                    <li class="notifications dropdown"><span class="counter bgc-red">3</span> <a href="" class="dropdown-toggle no-after" data-toggle="dropdown"><i class="ti-bell"></i></a>
                        <ul class="dropdown-menu">
                            <li class="pX-20 pY-15 bdB"><i class="ti-bell pR-10"></i> <span class="fsz-sm fw-600 c-grey-900">Notifications</span></li>
                            <li>
                                <ul class="ovY-a pos-r scrollable lis-n p-0 m-0 fsz-sm">

                                    <li><a href="" class="peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100">
                                            <div class="peer mR-15"><img class="w-3r bdrs-50p" src="https://randomuser.me/api/portraits/men/1.jpg" alt=""></div>
                                            <div class="peer peer-greed"><span><span class="fw-500">{{$data->username}}</span> <span class="c-grey-600">liked your <span class="text-dark">post</span></span></span>
                                                <p class="m-0"><small class="fsz-xs">5 mins ago</small></p>
                                            </div>
                                        </a></li>
                                    <li><a href="" class="peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100">
                                            <div class="peer mR-15"><img class="w-3r bdrs-50p" src="https://randomuser.me/api/portraits/men/2.jpg" alt=""></div>
                                            <div class="peer peer-greed"><span><span class="fw-500">Moo Doe</span> <span class="c-grey-600">liked your <span class="text-dark">cover image</span></span></span>
                                                <p class="m-0"><small class="fsz-xs">7 mins ago</small></p>
                                            </div>
                                        </a></li>
                                    <li><a href="" class="peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100">
                                            <div class="peer mR-15"><img class="w-3r bdrs-50p" src="https://randomuser.me/api/portraits/men/3.jpg" alt=""></div>
                                            <div class="peer peer-greed"><span><span class="fw-500">Lee Doe</span> <span class="c-grey-600">commented on your <span class="text-dark">video</span></span></span>
                                                <p class="m-0"><small class="fsz-xs">10 mins ago</small></p>
                                            </div>
                                        </a></li>
                                </ul>
                            </li>
                            <li class="pX-20 pY-15 ta-c bdT"><span><a href="" class="c-grey-600 cH-blue fsz-sm td-n">View All Notifications <i class="ti-angle-right fsz-xs mL-10"></i></a></span></li>
                        </ul>
                    </li>
                    <li class="notifications dropdown"><span class="counter bgc-blue">3</span> <a href="" class="dropdown-toggle no-after" data-toggle="dropdown"><i class="ti-email"></i></a>
                        <ul class="dropdown-menu">
                            <li class="pX-20 pY-15 bdB"><i class="ti-email pR-10"></i> <span class="fsz-sm fw-600 c-grey-900">Emails</span></li>
                            <li>
                                <ul class="ovY-a pos-r scrollable lis-n p-0 m-0 fsz-sm">
                                    <li><a href="" class="peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100">
                                            <div class="peer mR-15"><img class="w-3r bdrs-50p" src="https://randomuser.me/api/portraits/men/1.jpg" alt=""></div>
                                            <div class="peer peer-greed">
                                                <div>
                                                    <div class="peers jc-sb fxw-nw mB-5">
                                                        <div class="peer">
                                                            <p class="fw-500 mB-0">{{$data->username}}</p>
                                                        </div>
                                                        <div class="peer"><small class="fsz-xs">5 mins ago</small></div>
                                                    </div><span class="c-grey-600 fsz-sm">Want to create your own customized data generator for your app...</span>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li><a href="" class="peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100">
                                            <div class="peer mR-15"><img class="w-3r bdrs-50p" src="https://randomuser.me/api/portraits/men/2.jpg" alt=""></div>
                                            <div class="peer peer-greed">
                                                <div>
                                                    <div class="peers jc-sb fxw-nw mB-5">
                                                        <div class="peer">
                                                            <p class="fw-500 mB-0">Moo Doe</p>
                                                        </div>
                                                        <div class="peer"><small class="fsz-xs">15 mins ago</small></div>
                                                    </div><span class="c-grey-600 fsz-sm">Want to create your own customized data generator for your app...</span>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li><a href="" class="peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100">
                                            <div class="peer mR-15"><img class="w-3r bdrs-50p" src="https://randomuser.me/api/portraits/men/3.jpg" alt=""></div>
                                            <div class="peer peer-greed">
                                                <div>
                                                    <div class="peers jc-sb fxw-nw mB-5">
                                                        <div class="peer">
                                                            <p class="fw-500 mB-0">Lee Doe</p>
                                                        </div>
                                                        <div class="peer"><small class="fsz-xs">25 mins ago</small></div>
                                                    </div><span class="c-grey-600 fsz-sm">Want to create your own customized data generator for your app...</span>
                                                </div>
                                            </div>
                                        </a></li>
                                </ul>
                            </li>
                            <li class="pX-20 pY-15 ta-c bdT"><span><a href="" class="c-grey-600 cH-blue fsz-sm td-n">View All Email <i class="fs-xs ti-angle-right mL-10"></i></a></span></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="" class="dropdown-toggle no-after peers fxw-nw ai-c lh-1" data-toggle="dropdown">
                            <div class="peer mR-10"><img class="w-2r bdrs-50p" src="https://randomuser.me/api/portraits/men/10.jpg" alt=""></div>
                            <div class="peer"><span class="fsz-sm c-grey-900">{{$data->username}}</span></div>
                        </a>
                        <ul class="dropdown-menu fsz-sm">
                            <li><a href="" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"><i class="ti-settings mR-10"></i> <span>Setting</span></a></li>
                            <li><a href="" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"><i class="ti-user mR-10"></i> <span>Profile</span></a></li>
                            <li><a href="" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"><i class="ti-email mR-10"></i> <span>Messages</span></a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"><i class="ti-power-off mR-10"></i> <span>Logout</span></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <main class="main-content bgc-grey-100">
            <div id="mainContent">
                <div class="row gap-20 masonry pos-r">
                    <div class="masonry-sizer col-md-6"></div>
                    <div class="masonry-item w-100">
                    </div>
                    @if($data->rol >1)
                        <div class="masonry-item col-12">
                            <div class="bd bgc-white">
                                <div class="peers fxw-nw@lg+ ai-s">
                                    <div class="peer peer-greed w-50p@lg+ w-100@lg- p-20">
                                        <div class="layers">
                                            <div class="layer w-100 mB-10">
                                                <h6 class="lh-1">Gestion De usuario</h6>
                                            </div>
                                            <div class="layer w-100">
                                                <div id="gestionUser">
                                                    <form id="formUsers">
                                                        <div class="form-group col-md-12">
                                                            <label for="username">Usuario</label>
                                                            <input type="text" class="form-control" id="username" placeholder="Usuario" required="">
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label for="password1">Contraseña</label>
                                                            <input type="password" class="form-control" id="password1" placeholder="Contraseña" required="">
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label for="password2">Repita su contraseña</label>
                                                            <input type="password" class="form-control" id="password2" placeholder="Contraseña" required="">
                                                        </div>

                                                        <div class="form-group col-md-12">
                                                            <label for="email">Email</label>
                                                            <input type="email" class="form-control" id="email" placeholder="Correo electronico" required="">
                                                        </div>

                                                        <div class="form-group col-md-12">
                                                            <label for="nombreCompleto">Nombre Completo</label>
                                                            <input type="text" class="form-control" id="nombreCompleto" placeholder="Nombre Completo" required="">
                                                        </div>

                                                        <div class="form-group col-md-12">
                                                            <label for="rol">Rol</label>
                                                            <select class="form-control" id="rol">
                                                                <option value="1">Agente Transito</option>
                                                                <option value="2">Administrador</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group col-md-12">
                                                            <input type="submit" value="Registrar" class="btn btn-success btn-sm">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="peer peer-greed w-50p@lg+ w-100@lg- p-20">
                                        <div class="layers">
                                            <div class="layer w-100 mB-10">
                                                <h6 class="lh-1">Lista De usuario</h6>
                                            </div>
                                            <div class="layer w-100">
                                                <div id="listaUsuario">
                                                    <div class="table-responsive p-20">
                                                        <table class="table">
                                                            <thead>
                                                            <tr>
                                                                <th class="bdwT-0">Username</th>
                                                                <th class="bdwT-0">Nombre Compelto</th>
                                                                <th class="bdwT-0">Email</th>
                                                                <th class="bdwT-0">Accion</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody id="tableUsers">
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="masonry-item col-12">
                            <div class="bd bgc-white">
                                <div class="peers fxw-nw@lg+ ai-s">
                                    <div class="peer peer-greed w-50p@lg+ w-100@lg- p-20">
                                        <div class="layers">
                                            <div class="layer w-100 mB-10">
                                                <h6 class="lh-1">Gestion De usuario</h6>
                                            </div>
                                            <div class="layer w-100">
                                                <div id="gestionTipoLey">
                                                    <form id="formTipoInfraccion">
                                                        <div class="form-group col-md-12">
                                                            <label for="codigo">Codigo de ley</label>
                                                            <input type="hidden" id="idTipo">
                                                            <input type="text" class="form-control" id="codigo" placeholder="Codigo" required="">
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label for="nombre">Nombre de ley</label>
                                                            <input type="text" class="form-control" id="nombre" placeholder="Nombre" required="">
                                                        </div>

                                                        <div class="form-group col-md-12">
                                                            <label for="detalle">Detalle De ley</label>
                                                            <input type="text" class="form-control" id="detalle" placeholder="Detalle" required="">
                                                        </div>

                                                        <div class="form-group col-md-12">
                                                            <input type="submit" value="Registrar" class="btn btn-success btn-sm">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="peer peer-greed w-50p@lg+ w-100@lg- p-20">
                                        <div class="layers">
                                            <div class="layer w-100 mB-10">
                                                <h6 class="lh-1">Tipos de Infracciones</h6>
                                            </div>
                                            <div class="layer w-100">
                                                <div id="listaTipoInfraccion">
                                                    <div class="table-responsive p-20">
                                                        <table class="table">
                                                            <thead>
                                                            <tr>
                                                                <th class="bdwT-0">Codigo</th>
                                                                <th class="bdwT-0">Nombre de ley</th>
                                                                <th class="bdwT-0">detalle</th>
                                                                <th class="bdwT-0">Accion</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody id="tabletipoInfraccion">
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    @endif
                    @if($data->rol < 2)
                        <div class="masonry-item col-12">
                            <div class="bd bgc-white">
                                <div class="peers fxw-nw@lg+ ai-s">
                                    <div class="peer peer-greed w-50p@lg+ w-100@lg- p-20">
                                        <div class="layers">
                                            <div class="layer w-100 mB-10">
                                                <h6 class="lh-1">Registrar Infraccion</h6>
                                            </div>
                                            <div class="layer w-100">
                                                <div id="estaInfraccion">
                                                    <form id="formPersona">

                                                        <div class="form-group col-md-12">
                                                            <p>------------Datos Personales -----------</p>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label for="cedula">Cedula</label>
                                                            <input type="number" class="form-control" id="cedula" placeholder="cedula" required="" minlength="8" maxlength="10">
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label for="licencia">licencia</label>
                                                            <input type="number" class="form-control" id="licencia" placeholder="licencia   " required="" minlength="8" maxlength="10">
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label for="primerNombre">Primer Nombre</label>
                                                            <input type="text" class="form-control" id="primerNombre" placeholder="primer Nombre   " required="">
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <label for="segundoNombre">Segundo Nombre</label>
                                                            <input type="text" class="form-control" id="segundoNombre" placeholder="Segundo Nombre" required="">
                                                        </div>

                                                        <div class="form-group col-md-12">
                                                            <label for="primerApellido">Primer Apellido</label>
                                                            <input type="text" class="form-control" id="primerApellido" placeholder="primer Apellido   " required="">
                                                        </div>


                                                        <div class="form-group col-md-12">
                                                            <label for="segundoApellido">Segundo Apellido</label>
                                                            <input type="text" class="form-control" id="segundoApellido" placeholder="Segundo Apellido   " required="">
                                                        </div>



                                                        <div class="form-group col-md-12">
                                                            <p>------------Datos Vehiculo -----------</p>
                                                        </div>

                                                        <div class="form-group col-md-12">
                                                            <label for="placa">Placa de Vehiculo</label>
                                                            <input type="text" class="form-control" id="placa" placeholder="placa vehiculo" required="">
                                                        </div>

                                                        <div class="form-group col-md-12">
                                                            <label for="marca">Marca de Vehiculo</label>
                                                            <input type="text" class="form-control" id="marca" placeholder="Marca Vehiculo" required="">
                                                        </div>


                                                        <div class="form-group col-md-12">
                                                            <label for="modelo">Modelo de Vehiculo</label>
                                                            <input type="text" class="form-control" id="modelo" placeholder="Modelo Vehiculo" required="">
                                                        </div>

                                                        <div class="form-group col-md-12">
                                                            <label>Tipo infraccíones</label>
                                                            <select class="form-control" id="tipoInfraccion">
                                                                @foreach($infraccion as $row)
                                                                    <option value="{{$row->id}}">{{$row->nombre}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>

                                                        <div class="form-group col-md-12">
                                                            <label for="multa">Valor de Multa</label>
                                                            <input type="number" class="form-control" id="multa" placeholder="Valor de multa" required="">
                                                        </div>



                                                        <div class="form-group col-md-12">
                                                            <input type="submit" value="Registrar" class="btn btn-success btn-sm">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="peer peer-greed w-50p@lg+ w-100@lg- p-20">
                                        <div class="layers">
                                            <div class="layer w-100 mB-10">
                                                <h6 class="lh-1">Lista De Infracciones</h6>
                                            </div>
                                            <div class="layer w-100">
                                                <div id="listaUsuario">
                                                    <div class="table-responsive p-20">
                                                        <table class="table">
                                                            <thead>
                                                            <tr>
                                                                <th class="bdwT-0">Cedula</th>
                                                                <th class="bdwT-0">Nombre</th>
                                                                <th class="bdwT-0">Codigo Infraccion</th>
                                                                <th class="bdwT-0">Tipo de Infraccion</th>
                                                                <th class="bdwT-0">Accion</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody id="tablaInfraccion">
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endif

                </div>
            </div>
        </main>
        <footer class="bdT ta-c p-30 lh-0 fsz-sm c-grey-600"><span>Copyright © 2017 Designed by <a href="https://colorlib.com" target="_blank" title="Colorlib">Colorlib</a>. All rights reserved.</span>
            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
            <script>
                window.dataLayer = window.dataLayer || [];

                function gtag() {
                    dataLayer.push(arguments);
                }
                gtag('js', new Date());

                gtag('config', 'UA-23581568-13');
            </script>
        </footer>
    </div>
</div>
<script type="text/javascript" src="/js/vendor.js"></script>
<script type="text/javascript" src="/js/bundle.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="/js/custom.js"></script>
<script src="js/notify.min.js"></script>
<script>
    var csrf_token = '{{csrf_token()}}';
    var url = '{{url('')}}';


    function eliminarUsers(id) {
        var obj = new Object();
        obj.id = id;
        if(confirm("Desea Eliminar Este usuario?")){
            post(url+"/deleteUsers",obj,"POST",csrf_token).then(
                data => {
                    post(url+"/findUsers",{},"POST",csrf_token).then(
                        data => {
                            loaderUsers(data);
                        }
                    );
                    $.notify("Usuario eliminado","success");
                }
            );
        }

    }

    function eliminarInfraccion(id) {
        var obj = new Object();
        obj.id = id;
        if(confirm("Desea eliminar esta infraccion?")){
            post(url+"/deleteInfraccion",obj,"POST",csrf_token).then(
                data => {
                    post(url+"/getPersons",{},"POST",csrf_token).then(
                        data => {
                            loaderInfraccion(data);
                        }
                    );
                    $.notify("Usuario eliminado","success");
                }
            );
        }
    }


    $(document).ready(function () {
        post(url+"/findUsers",{},"POST",csrf_token).then(
            data => {
                loaderUsers(data);
            }
        );


        post(url+"/getPersons",{},"POST",csrf_token).then(
            data => {
                loaderInfraccion(data);
            }
        );

        post(url+"/getTipo",{},"POST",csrf_token).then(
            data => {
                loaderTipoInfraccion(data);
            }
        );

    });

    $("#formUsers").on("submit",function (form) {
        form.preventDefault();
        var obj = new Object();

        if(confirm("Desea registrar este usuario?")){
            obj.username = $("#username").val();
            obj.password1 = $("#password1").val();
            obj.password2 = $("#password2").val();
            obj.email = $("#email").val();
            obj.nombreCompleto = $("#nombreCompleto").val();
            obj.rol = $("#rol").val();

            if(obj.password1 != obj.password2){
                $.notify("las contraseña deben coincidir")
                return false;
            }

            post(url+"/registerUsers",obj,"POST",csrf_token).then(
                data => {
                    $.notify("Usuario registrado con exito","success");
                    loaderUsers(data);
                }
            );
        }
    });


    function loaderUsers(data) {
        var string = "";
        for(var i in data){
            string += "<tr>";
            string += "<td>"+data[i].username+"</td>";
            string += "<td>"+data[i].nombreCompleto+"</td>";
            string += "<td>"+data[i].email+"</td>";
            string += "<td><a href='javascript:void(0);' onclick='eliminarUsers("+data[i].id+")'>Eliminar</a></td>";
            string += "</tr>";
        }
        $("#tableUsers").html(string);
    }


    $("#formPersona").on("submit",function (form) {
        form.preventDefault();
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(registerPersons);
        } else {
           $.notify("por favor para guardar datos debes activar tu ubicacion","error")
        }
    });

    function registerPersons(position) {
        var obj = new Object();

        obj.cedula = $("#cedula").val();
        obj.licencia = $("#licencia").val();
        obj.primerNombre = $("#primerNombre").val();
        obj.segundoNombre = $("#segundoNombre").val();
        obj.primerApellido = $("#primerApellido").val();
        obj.segundoApellido = $("#segundoApellido").val();
        obj.cedula = $("#cedula").val();
        obj.placa = $("#placa").val();
        obj.marca = $("#marca").val();
        obj.modelo = $("#modelo").val();
        obj.multa = $("#multa").val();
        obj.latitud = position.coords.latitude;
        obj.longitud = position.coords.longitude;
        obj.tipoInfraccion = $("#tipoInfraccion").val();

        if(confirm("Desea Registrar esta infraccion?")){
            post(url+"/registerPersons",obj,"POST",csrf_token).then(
                data => {
                    if(!data){
                        $.notify("error al momento de guardar los datos");
                    }else{
                        loaderInfraccion(data);
                        $.notify("Infraccion Registrada","success");
                    }
                }
            );
        }
    }



    function loaderInfraccion(data) {
        var string = "";

        for(var i in data){
            string += "<tr>";
            string += "<td>"+data[i].cedula+"</td>";
            string += "<td>"+data[i].primerNombre+" "+data[i].primerApellido+"</td>";
            string += "<td>"+data[i].codigo+"</td>";
            string += "<td>"+data[i].nombre+"</td>";
            string += "<td><a href='"+url+"/panelInfraccion/"+data[i].cedula+"' target='_blank'>Consultar</a> || <a href='javascript:void(0);' onclick='eliminarInfraccion("+data[i].id+")'>Eliminar</a></td>";
            string += "</tr>";
        }
        $("#tablaInfraccion").html(string);
    }

    $("#formTipoInfraccion").on("submit",function (form) {
        form.preventDefault();
        var obj = new Object();

        obj.codigo = $("#codigo").val();
        obj.nombre = $("#nombre").val();
        obj.detalle = $("#detalle").val();
        if($("#idTipo").val().length > 0){
            obj.id = $("#idTipo").val();
            obj.registrar = "no";
        }else{
            obj.registrar = "si";
        }
        if(confirm("Desea Registrar?")){
            post(url+"/registrerTipoInfraccion",obj,"POST",csrf_token).then(
                data => {
                    loaderTipoInfraccion(data);
                    $.notify("Ley de infraccion registrada","success");
                }
            );
            $("#idTipo").val("");
        }
    });
    
    function  loaderTipoInfraccion(data) {
        var string = "";

        for(var i in data){
            string += "<tr>";
            string += "<td>"+data[i].codigo+"</td>";
            string += "<td>"+data[i].nombre+"</td>";
            string += "<td>"+data[i].detalle+"</td>";
            string += "<td><a href='javascript:void(0);' onclick='modificarTipoInfraccion("+JSON.stringify(data[i])+")' >Modificar</a> || <a href='javascript:void(0);' onclick='eliminarTipoInfraccion("+data[i].id+")'>Eliminar</a></td>";
            string += "</tr>";
        }
        $("#tabletipoInfraccion").html(string);
    }

    function  modificarTipoInfraccion(data) {
        $("#codigo").val(data.codigo);
        $("#nombre").val(data.nombre);
        $("#detalle").val(data.detalle);
        $("#idTipo").val(data.id);
    }

    function eliminarTipoInfraccion(id) {
        var obj = new Object();
        obj.id = id;
        if(confirm("Desea Eliminar Este Tipo de infraccion?")){
            post(url+"/deleteTipo",obj,"POST",csrf_token).then(
                data => {
                    post(url+"/getTipo",{},"POST",csrf_token).then(
                        data => {
                            loaderTipoInfraccion(data);
                        }
                    );
                    $.notify("Tipo de infraccion eliminada","success");
                }
            );
        }
    }



</script>
</body>

</html>