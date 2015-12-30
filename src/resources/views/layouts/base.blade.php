<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <title>Programa de Doctorado - @yield('title')</title>

  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width">

  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700">
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,300,700">
  <link rel="stylesheet" href="{{ url('css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ url('js/libs/css/ui-lightness/jquery-ui-1.9.2.custom.min.css') }}">
  <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">

  <!-- App CSS -->
  <link rel="stylesheet" href="{{ url('css/target-admin.css') }}">
  <link rel="stylesheet" href="{{ url('css/custom.css') }}">


  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->
</head>

<body>

  <div class="navbar">
    <div class="container">

      <div class="navbar-header">

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <i class="fa fa-cogs"></i>
        </button>

        <a class="navbar-brand navbar-brand-image" href="{{ url('index.html') }}">
          <img src="{{ url('img/logo.png') }}">
        </a>

      </div> <!-- /.navbar-header -->

      <div class="navbar-collapse collapse">

        <ul class="nav navbar-nav navbar-right">   

         @if (false) 
          <li class="dropdown navbar-profile">
            <a class="dropdown-toggle" data-toggle="dropdown" style="cursor:pointer;">
              Idioma
              <i class="fa fa-caret-down"></i>
            </a>

            <ul class="dropdown-menu" role="menu">

              <li>
                <a href="{{ url('') }}">
                  <i class="fa fa-flag"></i> 
                  &nbsp;&nbsp;Español
                </a>
              </li>

              <li>
                <a href="{{ url('') }}">
                  <i class="fa fa-flag"></i> 
                  &nbsp;&nbsp;English
                </a>
              </li>

            </ul>

          </li>  
          @endif

          <li class="dropdown navbar-profile">
            <a href="{{ url('') }}">
              Iniciar sesión
            </a>
          </li>

        </ul>

        



        

      </div> <!--/.navbar-collapse -->

    </div> <!-- /.container -->

  </div> <!-- /.navbar -->

  <div class="mainbar">

    <div class="container">

      <button type="button" class="btn mainbar-toggle" data-toggle="collapse" data-target=".mainbar-collapse">
        <i class="fa fa-bars"></i>
      </button>

      <div class="mainbar-collapse collapse">

        <ul class="nav navbar-nav mainbar-nav">

          @if ( $section == '' || $section == 'presentacion' || $section == 'datos' || $section == 'compentencias')
          <li class="dropdown active">
            @else
            <li>
              @endif
              <a style="cursor:pointer;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
                <i class="fa fa-info-circle"></i>
                Presentación
              </a>

              <ul class="dropdown-menu">
                <li><a href="{{ url('presentacion') }}"><i class="fa fa-angle-right nav-icon"></i> Presentación del título</a></li>
                <li><a href="{{ url('datos') }}"><i class="fa fa-angle-right nav-icon"></i> Datos del título</a></li>
                <li><a href="{{ url('competencias') }}"><i class="fa fa-angle-right nav-icon"></i> Competencias</a></li>
              </ul>
            </li> 

            @if ( $section == 'investigacion' )
            <li class="dropdown active">
              @else
              <li>
                @endif
                <a href="{{ url('investigacion') }}">
                  <i class="fa fa-flask"></i>
                  Investigación
                </a>
              </li> 

              @if ( $section == 'acceso' )
              <li class="dropdown active">
                @else
                <li>
                  @endif
                  <a href="{{ url('acceso') }}">
                    <i class="fa fa-sign-in"></i>
                    Acceso
                  </a>
                </li> 

              @if (false)
                @if ( $section == 'matricula' )
                <li class="dropdown active">
                  @else
                  <li>
                    @endif
                    <a href="{{ url('matricula') }}">
                      <i class="fa fa-laptop"></i>
                      Matrícula
                    </a>
                  </li>
              @endif

                  @if ( $section == 'formacion' )
                  <li class="dropdown active">
                    @else
                    <li>
                      @endif
                      <a href="{{ url('formacion') }}">
                        <i class="fa fa-book"></i>
                        Formación
                      </a>
                    </li> 

                    @if ( $section == 'tesis' )
                    <li class="dropdown active">
                      @else
                      <li>
                        @endif
                        <a href="{{ url('tesis') }}">
                          <i class="fa fa-graduation-cap"></i>
                          Tesis doctoral
                        </a>
                      </li> 

                      @if ( $section == 'recursos' )
                      <li class="dropdown active">
                        @else
                        <li>
                          @endif
                          <a href="{{ url('recursos') }}">
                            <i class="fa fa-cloud"></i>
                            Recursos
                          </a>
                        </li> 

                        @if ( $section == 'internacional' )
                        <li class="dropdown active">
                          @else
                          <li>
                            @endif
                            <a href="{{ url('internacional') }}">
                              <i class="fa fa-globe"></i>
                              Internacional
                            </a>
                          </li> 

                          @if ( $section == 'resultados' )
                          <li class="dropdown active">
                            @else
                            <li>
                              @endif
                              <a href="{{ url('resultados') }}">
                                <i class="fa fa-flag"></i>
                                Resultados
                              </a>
                            </li> 

                          </ul>

                        </div> <!-- /.navbar-collapse -->   

                      </div> <!-- /.container --> 

                    </div> <!-- /.mainbar -->


                    <div class="container">

                      <div class="content">

                        <div class="content-container">

                         <div class="content-header">
                          <h2 class="content-header-title">@yield('header')</h2>
                        </div> <!-- /.content-header -->

                        @yield('content')

                      </div> <!-- /.content-container -->

                    </div> <!-- /.content -->

                  </div> <!-- /.container -->


                  <footer class="footer">

                    <div class="container">

                      <div class="row">

                        <div class="col-sm-12 text-center">
                          <p>
                            <img src="{{ url('img/logofooter.png') }}"/><br/>
                            UNIVERSIDAD DE SEVILLA</p>  
                            <h4>Programa de Doctorado - Facultad de psicología</h4>
                            <hr>    
                            <p>C/ CAMILO JOSÉ CELA, S/N C.P: 41018 (SEVILLA) Teléfono: 95.455.76.60. FAX: 95.455.76.59/5.76</p>
                          </div> <!-- /.col -->

                        </div> <!-- /.row -->

                      </div> <!-- /.container -->

                    </footer>

                    <script src="{{ url('js/libs/jquery-1.10.1.min.js') }}"></script>
                    <script src="{{ url('js/libs/jquery-ui-1.9.2.custom.min.js') }}"></script>
                    <script src="{{ url('js/libs/bootstrap.min.js') }}"></script>
  <!--[if lt IE 9]>
  <script src="{{ url('js/libs/excanvas.compiled.js') }}"></script>
  <![endif]-->
  <!-- App JS -->
  <script src="{{ url('js/target-admin.js') }}"></script>
</body>
</html>