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
    <link href="/css/jquery-jvectormap-2.0.3" rel="stylesheet">
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
                <li class="nav-item dropdown"><a class="dropdown-toggle" href="#map"><span class="icon-holder"><i class="c-purple-500 ti-map"></i> </span><span class="title">Mapa</span> <span class="arrow"><i class="ti-angle-right"></i></span></a></li>
                <li class="nav-item dropdown"><a class="dropdown-toggle" href="#testPrint"><span class="icon-holder"><i class="c-orange-500 ti-layout-list-thumb"></i> </span><span class="title">Tablas</span> <span class="arrow"><i class="ti-angle-right"></i></span></a></li>
            </ul>
        </div>
    </div>
    <div class="page-container">
        <div class="header navbar">
            <div class="header-container">
                <ul class="nav-left">
                    <li><a id="sidebar-toggle" class="sidebar-toggle" href="#"><i class="ti-menu"></i></a></li>
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
                                            <div class="peer peer-greed"><span><span class="fw-500">John Doe</span> <span class="c-grey-600">liked your <span class="text-dark">post</span></span></span>
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
                                                            <p class="fw-500 mB-0">John Doe</p>
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
                            <div class="peer"><span class="fsz-sm c-grey-900">John Doe</span></div>
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


                    <div class="masonry-item col-12">
                        <div class="bd bgc-white">
                            <div class="peers fxw-nw@lg+ ai-s">
                                <div class="peer peer-greed w-70p@lg+ w-100@lg- p-20">
                                    <div class="layers">
                                        <div class="layer w-100 mB-10">
                                            <h6 class="lh-1">Site Visits</h6>
                                        </div>
                                        <div class="layer w-100">
                                            <div id="map" style="width: 1200px; height: 700px"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="masonry-item col-md-12" id="testPrint">
                        <div class="bd bgc-white">
                            <div class="layers">
                                <div class="layer w-100 p-20">
                                    <h6 class="lh-1">Infracciones</h6>
                                </div>
                                <div class="layer w-100">
                                    <div class="bgc-light-blue-500 c-white p-20">
                                        <div class="peers ai-c jc-sb gap-40">
                                            <div class="peer peer-greed">
                                                <h5>Tabla de multas</h5>
                                                <p class="mB-0">Infracciones</p>
                                            </div>
                                            <div class="peer">
                                                <!--<h3 class="text-right">$6,000</h3> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-responsive p-20">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th class="bdwT-0">Nombre</th>
                                                <th class="bdwT-0">Codigo Multa</th>
                                                <th class="bdwT-0">Fecha De multa</th>
                                                <th class="bdwT-0">Valor Multa</th>
                                                <th class="bdwT-0">Codigo Infraccion</th>
                                                <th class="bdwT-0">Estado</th>
                                                <th class="bdwT-0">Accion</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($data as $row)
                                                @if($row->estado == 0)
                                                    <tr>
                                                        <td class="fw-600">{{$row->primerNombre}} {{$row->primerApellido}} </td>
                                                        <td class="fw-600">{{$row->codigo}}</td>
                                                        <td class="fw-600">{{$row->fechaMulta}}</td>
                                                        <td class="fw-600">{{$row->multa}}</td>
                                                        <td class="fw-600">{{$row->nombre}}</td>
                                                        <td><span class="badge bgc-red-50 c-red-700 p-10 lh-0 tt-c badge-pill">Falta de pago</span></td>
                                                        <td><span class="text-success"><a href="#testPrint" onclick="demoFromHTML({{$row->codigo}})">Pagar multa</a> || <a href="{{url('')}}/mapa?lat={{$row->latitud}}&lng={{$row->longitud}}" target="_blank">Ver Lugar de multa</a></span></td>
                                                    </tr>
                                                @else
                                                    <tr>
                                                        <td class="fw-600">{{$row->primerNombre}} {{$row->primerApellido}} </td>
                                                        <td class="fw-600">{{$row->codigo}}</td>
                                                        <td class="fw-600">{{$row->fechaMulta}}</td>
                                                        <td class="fw-600">{{$row->multa}}</td>
                                                        <td class="fw-600">{{$row->nombre}}</td>
                                                        <td><span class="badge bgc-green-50 c-green-700 p-10 lh-0 tt-c badge-pill">Cancelado</span></td>
                                                        <td><span class="text-success"><a href="#testPrint" onclick="demoFromHTML({{$row->codigo}})">Pagar multa</a> || <a href="{{url('')}}/mapa?lat={{$row->latitud}}&lng={{$row->longitud}}" target="_blank">Ver Lugar de multa</a></span></td>
                                                    </tr>
                                                @endif
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="ta-c bdT w-100 p-20"><a href="#">Check all the sales</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </main>


        <div id="pdf" style="background-color: white;visibility:hidden;">
            <img width="100" src="/img/logo.jpeg" />
            <hr><hr>
            <h3>Sistema web gestion de infracciones</h3>

            <h6>Que una vez consultado el Sistema de Información del Boletín de Responsables Del vehiculo con placa
                <span id="placa"></span>, hoy <span id="fecha"></span>, se da aconocer que tiene un multa infractoria por cancelar
            </h6>

            <table class="table" style="background: white;">
                <thead>
                <tr>
                    <th class="bdwT-0">Cedula</th>
                    <th class="bdwT-0">Nombre</th>
                    <th class="bdwT-0">Codigo Multa</th>
                    <th class="bdwT-0">Valor Multa</th>
                </tr>
                </thead>
                <tbody id="tableInfracion">
                </tbody>
            </table>

            <h6>Este Recibo es válida en todo el Territorio Nacional, siempre y cuando el tipo y número consignados en el
                respectivo documento de identificación, coincidan con los aquí registrados.
            </h6>

            <h6>
                De conformidad con el Decreto 2150 de 1995 y la Resolución 220 del 5 de octubre de 2004, la firma mecánica aquí
                plasmada tiene plena validez para todos los efectos legales.
            </h6>

            <img width="100" id="bcTarget" src="">

            <h6><label>Firma Agente: <span id="agente"></span></label></h6>
        </div>


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
<script src="/js/jquery-jvectormap-2.0.3.min.js"></script>
<script src="/js/mapa.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js" integrity="sha384-NaWTHo/8YCBYJ59830LTz/P4aQZK1sS0SneOgAvhsIl3zBu8r9RevNg5lHCHAuQ/" crossorigin="anonymous"></script>
<script src="/js/jquery-barcode.js"></script>
<script src="/js/custom.js"></script>
<script src="https://cdn.jsdelivr.net/jsbarcode/3.3.7/JsBarcode.all.min.js"></script>

<script>

    $(document).ready(function(){
        var palette = ['#66C2A5', '#FC8D62', '#8DA0CB', '#E78AC3', '#A6D854'];
        generateColors = function(){
            var colors = {},
                key;

            for (key in map.regions) {
                colors[key] = palette[Math.floor(Math.random()*palette.length)];
            }
            return colors;
        }
        var map = new jvm.Map({
            container: $('#map'),
            map: 'co_mill',
            color: '#ffffff',
            hoverOpacity: 0.7,
            selectedColor: '#666666',
            enableZoom: false,
            showTooltip: true,
            markers: [
                {latLng: [9.9675274, -73.88307], name: 'Bosconia'}
            ],
            series: {
                regions: [{
                    attribute: 'fill'
                }]
            },
            onRegionClick : function (e,code) {
                console.log(code);
            },
        });
        map.series.regions[0].setValues(generateColors());
    });


    var csrf_token = '{{csrf_token()}}';
    var url = '{{url('')}}';


    function textToBase64Barcode(text){
        var canvas = document.createElement("canvas");
        JsBarcode(canvas, text, {format: "CODE128"});
        return canvas.toDataURL("image/png");
    }

    $("#tableInfraccion").html();


    function demoFromHTML(codigo) {
        var obj = new Object();
        obj.codigo = codigo;
        console.log(codigo);
        $("#bcTarget").attr("src",textToBase64Barcode(codigo.toString()));
        setTimeout(
            post(url+"/getInfo",obj,"POST",csrf_token).then(
            data => {
                if(data.length>0){
                    var string = "<tr>";
                    string += "<td>"+data[0].cedula+"</td>";
                    string += "<td>"+data[0].primerNombre+" "+data[0].primerApellido+"</td>";
                    string += "<td>"+data[0].codigo+"</td>";
                    string += "<td>$  "+new Intl.NumberFormat().format(data[0].multa)+"</td>";
                    string += "</tr>";
                    $("#placa").html(data[0].placa);
                    $("#tableInfracion").html(string);
                    $("#codigo").html(data[0].codigo);
                    $("#agente").html(data[0].nombreCompleto)
                    var fecha = new Date();
                    var options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
                    $("#fecha").html(fecha.toLocaleDateString("es-ES", options));
                    var pdf = new jsPDF('l', 'pt', [500,700]);
                    source = $('#pdf')[0];

                    specialElementHandlers = {
                        '#bypassme': function (element, renderer) {
                            // true = "handled elsewhere, bypass text extraction"
                            return true
                        }
                    };
                    margins = {
                        top: 40,
                        bottom: 60,
                        left: 40,
                        width: 500
                    };

                    pdf.fromHTML(
                        source, // HTML string or DOM elem ref.
                        margins.left, // x coord
                        margins.top, { // y coord
                            'width': margins.width, // max width of content on PDF
                            'elementHandlers': specialElementHandlers
                        },

                        function (dispose) {
                            pdf.save('Test.pdf');
                        }, margins);

                }
            }
        ),1000);
    }

</script>
</body>

</html>