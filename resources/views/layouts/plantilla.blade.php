<!DOCTYPE html>
<html class="loading" lang="es" data-textdirection="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="TORRENTS UNIVERSITY - Prueba Tecnica de CRUD de Tareas y Usuarios">

  <meta name="author" content="DAVID DURAN VALLEJO">
  <title>TORRENTS UNIVERSITY
  </title>
  <link rel="apple-touch-icon" href="{{asset('logos/torrens-university-australia-logo.svg')}}">
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('logos/torrens-university-australia-logo.svg')}}">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
  rel="stylesheet">
  <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
  rel="stylesheet">
  
  <!-- BEGIN VENDOR CSS-->
  
  <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/vendors.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/forms/selects/select2.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/extensions/toastr.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/forms/toggle/bootstrap-switch.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/forms/toggle/switchery.min.css')}}">
  <!-- END VENDOR CSS-->
  <!-- BEGIN MODERN CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/app.css')}}">
  <!-- END MODERN CSS-->
 

  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/menu/menu-types/vertical-menu-modern.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/colors/palette-gradient.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/colors/palette-callout.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/plugins/extensions/toastr.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/plugins/forms/switch.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/core/colors/palette-switch.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/plugins/forms/checkboxes-radios.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/forms/icheck/icheck.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendors/css/forms/icheck/custom.css')}}">
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
  <!-- END Custom CSS-->
  <!--seccion CSS-->
  @yield('css')

  <!--Fin seccion CSS-->
</head>
<body class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar"
data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
<!-- fixed-top-->
<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-dark navbar-shadow">
  <div class="navbar-wrapper">
    <div class="navbar-header">
      <ul class="nav navbar-nav flex-row">
        <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
        <li class="nav-item mr-auto">
          <a class="navbar-brand" href="{{route('home')}}">
            <img class="brand-logo" alt="modern admin logo" src="{{asset('logos/torrens-university-australia-logo.svg')}}">
            <h3 class="brand-text"></h3>
          </a>
        </li>
        <li class="nav-item d-none d-md-block float-right"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="toggle-icon ft-toggle-right font-medium-3 white" data-ticon="ft-toggle-right"></i></a></li>
        <li class="nav-item d-md-none">
          <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a>
        </li>
      </ul>
    </div>
    <div class="navbar-container content">
      <div class="collapse navbar-collapse" id="navbar-mobile">
        <ul class="nav navbar-nav mr-auto float-left">
          <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
          {{-- <li class="dropdown nav-item mega-dropdown"><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Mesga</a>
            <ul class="mega-dropdown-menu dropdown-menu row">
              <li class="col-md-2">
                <h6 class="dropdown-menu-header text-uppercase mb-1"><i class="la la-newspaper-o"></i> News</h6>
                <div id="mega-menu-carousel-example">
                  <div>
                    <img class="rounded img-fluid mb-1" src="{{asset('app-assets/images/slider/slider-2.png')}}"
                    alt="First slide"><a class="news-title mb-0" href="#">Poster Frame PSD</a>
                    <p class="news-content">
                      <span class="font-small-2">January 26, 2018</span>
                    </p>
                  </div>
                </div>
              </li>
              <li class="col-md-3">
                <h6 class="dropdown-menu-header text-uppercase"><i class="la la-random"></i> Drill down menu</h6>
                <ul class="drilldown-menu">
                  <li class="menu-list">
                    <ul>
                      <li>
                        <a class="dropdown-item" href="layout-2-columns.html"><i class="ft-file"></i> Page layouts & Templates</a>
                      </li>
                      <li><a href="#"><i class="ft-align-left"></i> Multi level menu</a>
                        <ul>
                          <li><a class="dropdown-item" href="#"><i class="la la-bookmark-o"></i>  Second level</a></li>
                          <li><a href="#"><i class="la la-lemon-o"></i> Second level menu</a>
                            <ul>
                              <li><a class="dropdown-item" href="#"><i class="la la-heart-o"></i>  Third level</a></li>
                              <li><a class="dropdown-item" href="#"><i class="la la-file-o"></i> Third level</a></li>
                              <li><a class="dropdown-item" href="#"><i class="la la-trash-o"></i> Third level</a></li>
                              <li><a class="dropdown-item" href="#"><i class="la la-clock-o"></i> Third level</a></li>
                            </ul>
                          </li>
                          <li><a class="dropdown-item" href="#"><i class="la la-hdd-o"></i> Second level, third link</a></li>
                          <li><a class="dropdown-item" href="#"><i class="la la-floppy-o"></i> Second level, fourth link</a></li>
                        </ul>
                      </li>
                      <li>
                        <a class="dropdown-item" href="color-palette-primary.html"><i class="ft-camera"></i> Color palette system</a>
                      </li>
                      <li><a class="dropdown-item" href="sk-2-columns.html"><i class="ft-edit"></i> Page starter kit</a></li>
                      <li><a class="dropdown-item" href="changelog.html"><i class="ft-minimize-2"></i> Change log</a></li>
                      <li>
                        <a class="dropdown-item" href="https://pixinvent.ticksy.com/"><i class="la la-life-ring"></i> Customer support center</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="col-md-3">
                <h6 class="dropdown-menu-header text-uppercase"><i class="la la-list-ul"></i> Accordion</h6>
                <div id="accordionWrap" role="tablist" aria-multiselectable="true">
                  <div class="card border-0 box-shadow-0 collapse-icon accordion-icon-rotate">
                    <div class="card-header p-0 pb-2 border-0" id="headingOne" role="tab"><a data-toggle="collapse" data-parent="#accordionWrap" href="#accordionOne"
                      aria-expanded="true" aria-controls="accordionOne">Accordion Item #1</a></div>
                      <div class="card-collapse collapse show" id="accordionOne" role="tabpanel" aria-labelledby="headingOne"
                      aria-expanded="true">
                      <div class="card-content">
                        <p class="accordion-text text-small-3">Caramels dessert chocolate cake pastry jujubes bonbon.
                          Jelly wafer jelly beans. Caramels chocolate cake liquorice
                        cake wafer jelly beans croissant apple pie.</p>
                      </div>
                    </div>
                    <div class="card-header p-0 pb-2 border-0" id="headingTwo" role="tab"><a class="collapsed" data-toggle="collapse" data-parent="#accordionWrap"
                      href="#accordionTwo" aria-expanded="false" aria-controls="accordionTwo">Accordion Item #2</a></div>
                      <div class="card-collapse collapse" id="accordionTwo" role="tabpanel" aria-labelledby="headingTwo"
                      aria-expanded="false">
                      <div class="card-content">
                        <p class="accordion-text">Sugar plum bear claw oat cake chocolate jelly tiramisu
                          dessert pie. Tiramisu macaroon muffin jelly marshmallow
                        cake. Pastry oat cake chupa chups.</p>
                      </div>
                    </div>
                    <div class="card-header p-0 pb-2 border-0" id="headingThree" role="tab"><a class="collapsed" data-toggle="collapse" data-parent="#accordionWrap"
                      href="#accordionThree" aria-expanded="false" aria-controls="accordionThree">Accordion Item #3</a></div>
                      <div class="card-collapse collapse" id="accordionThree" role="tabpanel" aria-labelledby="headingThree"
                      aria-expanded="false">
                      <div class="card-content">
                        <p class="accordion-text">Candy cupcake sugar plum oat cake wafer marzipan jujubes
                          lollipop macaroon. Cake dragée jujubes donut chocolate
                        bar chocolate cake cupcake chocolate topping.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="col-md-4">
                <h6 class="dropdown-menu-header text-uppercase mb-1"><i class="la la-envelope-o"></i> Contact Us</h6>
                <form class="form form-horizontal">
                  <div class="form-body">
                    <div class="form-group row">
                      <label class="col-sm-3 form-control-label" for="inputName1">Name</label>
                      <div class="col-sm-9">
                        <div class="position-relative has-icon-left">
                          <input class="form-control" type="text" id="inputName1" placeholder="John Doe">
                          <div class="form-control-position pl-1"><i class="la la-user"></i></div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 form-control-label" for="inputEmail1">Email</label>
                      <div class="col-sm-9">
                        <div class="position-relative has-icon-left">
                          <input class="form-control" type="email" id="inputEmail1" placeholder="john@example.com">
                          <div class="form-control-position pl-1"><i class="la la-envelope-o"></i></div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 form-control-label" for="inputMessage1">Message</label>
                      <div class="col-sm-9">
                        <div class="position-relative has-icon-left">
                          <textarea class="form-control" id="inputMessage1" rows="2" placeholder="Simple Textarea"></textarea>
                          <div class="form-control-position pl-1"><i class="la la-commenting-o"></i></div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12 mb-1">
                        <button class="btn btn-info float-right" type="button"><i class="la la-paper-plane-o"></i> Send </button>
                      </div>
                    </div>
                  </div>
                </form>
              </li>
            </ul>
          </li> --}}

          {{-- search --}}

        {{--   <li class="nav-item nav-search"><a class="nav-link nav-link-search" href="#"><i class="ficon ft-search"></i></a>
            <div class="search-input">
              <input class="input" type="text" placeholder="Explore Modern...">
            </div>
          </li> --}}
        </ul>
        <ul class="nav navbar-nav float-right">
          @auth
           <li class="dropdown dropdown-user nav-item">
            <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
              <span class="mr-1">Conectado,
                <span class="user-name text-bold-700">{{ Auth::user()->name }}</span>
              </span>
              <span class="avatar avatar-online">


                <img src="{{asset('app-assets/images/portrait/small/doctor.png')}}" alt="avatar"><i></i></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#"><i class="ft-user"></i> Editar Perfil</a>
                
                <div class="dropdown-divider"></div><a class="dropdown-item" href="{{url('/logout')}}"><i class="ft-power"></i> Logout</a>
              </div>
            </li>
            @endauth
            
  </div>
          </nav>
          <!-- /////////////////////////////menu///////////////////////////////////////////////-->
          @auth
          @include('layouts.menu')
          @endauth

          {{-- ///fin menu --}}
          <div class="app-content content">
            <div class="content-wrapper">
              <div class="content-header row">

              </div>
              <div class="content-body">




                <!-- notificaciones -->
                <div class="clearfix"></div>

                <div class="col-xl-6 col-lg-12">
                  @if (session('info'))


                  <div class="alert alert-icon-left alert-success alert-dismissible mb-2" role="alert">
                    <span class="alert-icon"><i class="la la-check"></i></span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    {{ session('info') }}
                  </div>

                  @endif

                  @if (session('alerta'))


                  <div class="alert alert-icon-left alert-warning alert-dismissible mb-2" role="alert">
                    <span class="alert-icon"><i class="la la-exclamation-triangle"></i></span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    {{ session('alerta') }}
                  </div>

                  @endif

                  @if(count($errors))  

                  <div class="alert alert-icon-left alert-danger alert-dismissible mb-2" role="alert">
                    <span class="alert-icon"><i class="la la-close"></i></span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    <ul>
                      @foreach($errors->all() as $error)
                      <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                  </div>   
                  @endif
                </div>          

                <!-- fin notificaciones -->

                <!-- contenido -->
                <div class="row"> 
                  <div class="col-xl-12 col-lg-12">           

                    <!--seccion Contenido-->
                    @yield('contenido')
                    <!--Fin seccion Contenido-->
                  </div>


                </div>  
                <!-- // fin contenido -->
              </div>
            </div>
          </div>
          <!-- ////////////////////////////////////////////////////////////////////////////-->
          <footer class="footer footer-static footer-light navbar-border navbar-shadow">
            <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2">
              <span class="float-md-left d-block d-md-inline-block">Copyright &copy; 2022 <a class="text-bold-800 grey darken-2" href=""
                target="_blank">VISION TIC </a>, All rights reserved. </span>
                <span class="float-md-right d-block d-md-inline-blockd-none d-lg-block">I + I + T <i class="ft-heart pink"></i></span>
              </p>
            </footer>
            <!-- BEGIN VENDOR JS-->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <script src="{{asset('app-assets/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
            <!-- BEGIN VENDOR JS-->
            <!-- BEGIN PAGE VENDOR JS-->
            <script
            src="{{asset('app-assets/vendors/js/tables/datatable/datatables.min.js')}}" type="text/javascript">

          </script>
          <script
          src="{{asset('app-assets/vendors/js/forms/select/select2.full.min.js')}}" type="text/javascript"></script>
          <script src="{{asset('app-assets/vendors/js/extensions/toastr.min.js')}}" type="text/javascript"></script>
          <script src="{{asset('app-assets/vendors/js/forms/toggle/bootstrap-switch.min.js')}}"
          type="text/javascript"></script>
          <script src="{{asset('app-assets/vendors/js/forms/toggle/switchery.min.js')}}" type="text/javascript"></script>
          <!-- END PAGE VENDOR JS-->
          <!-- BEGIN MODERN JS-->
          <script src="{{asset('app-assets/js/core/app-menu.js')}}" type="text/javascript"></script>
          <script src="{{asset('app-assets/js/core/app.js')}}" type="text/javascript"></script>
          <script src="{{asset('app-assets/js/scripts/customizer.js')}}" type="text/javascript"></script>
          <script src="{{asset('app-assets/vendors/js/forms/toggle/bootstrap-checkbox.min.js')}}"
          type="text/javascript"></script>
          <!-- END MODERN JS-->

          <!-- BEGIN PAGE LEVEL JS-->

          <script src="{{asset('app-assets/js/scripts/tables/datatables/datatable-basic.js')}}"
          type="text/javascript"></script>
          <script src="{{asset('app-assets/js/scripts/forms/select/form-select2.js')}}" type="text/javascript"></script>
          <script src="{{asset('app-assets/js/scripts/modal/components-modal.js')}}" type="text/javascript"></script>
          <script src="{{asset('app-assets/js/scripts/extensions/toastr.js')}}" type="text/javascript"></script>
          <script src="{{asset('app-assets/js/scripts/forms/switch.js')}}" type="text/javascript"></script>
          <!-- END PAGE LEVEL JS-->
          <script src="{{asset('app-assets/vendors/js/forms/icheck/icheck.min.js')}}" type="text/javascript"></script>
          <script src="{{asset('app-assets/js/scripts/forms/checkbox-radio.js')}}" type="text/javascript"></script>
           

          <!-- personalizado -->
          <script src="{{asset('js/visiontic/personalizado.js')}}"></script>
        {{--   <script src="https://code.jquery.com/jquery-3.4.1.js"  type="text/javascript" ></script> --}}
          @yield('js')

        </body>
        </html>