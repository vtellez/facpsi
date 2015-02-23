<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <title>Programa de Doctorado - FACPSI</title>

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

          <li class="dropdown active">
            <a style="cursor:pointer;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
              <i class="fa fa-info-circle"></i>
              Presentación
            </a>

            <ul class="dropdown-menu">
              <li><a href="{{ url('page-profile.html') }}"><i class="fa fa-user nav-icon"></i> Profile</a></li>
              <li><a href="{{ url('page-invoice.html') }}"><i class="fa fa-money nav-icon"></i> Invoice</a></li>
              <li><a href="{{ url('page-pricing.html') }}"><i class="fa fa-dollar nav-icon"></i> Pricing Plans</a></li>
              <li><a href="{{ url('page-support.html') }}"><i class="fa fa-question nav-icon"></i> Support Page</a></li>
              <li><a href="{{ url('page-gallery.html') }}"><i class="fa fa-picture-o nav-icon"></i> Gallery</a></li>
              <li><a href="{{ url('page-settings.html') }}"><i class="fa fa-cogs nav-icon"></i> Settings</a></li>
              <li><a href="{{ url('page-calendar.html') }}"><i class="fa fa-calendar nav-icon"></i> Calendar</a></li>
            </ul>
          </li> 

          <li class="dropdown ">
            <a href="{{ url('') }}">
              <i class="fa fa-flask"></i>
              Investigación
            </a>
          </li> 

          <li class="dropdown ">
            <a href="{{ url('') }}">
              <i class="fa fa-sign-in"></i>
              Acceso
            </a>
          </li> 

          <li class="dropdown ">
            <a href="{{ url('') }}">
              <i class="fa fa-laptop"></i>
              Matrícula
            </a>
          </li> 
          
          <li class="dropdown ">
            <a href="{{ url('') }}">
              <i class="fa fa-book"></i>
              Formación
            </a>
          </li> 
          
          <li class="dropdown ">
            <a href="{{ url('') }}">
              <i class="fa fa-graduation-cap"></i>
              Tesis doctoral
            </a>
          </li> 
          
          <li class="dropdown ">
            <a href="{{ url('') }}">
              <i class="fa fa-thumb-tack"></i>
              Becas y ayudas
            </a>
          </li> 
          
          <li class="dropdown ">
            <a href="{{ url('') }}">
              <i class="fa fa-globe"></i>
              Internacional
            </a>
          </li> 
          
          <li class="dropdown ">
            <a href="{{ url('') }}">
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
          <h2 class="content-header-title">Presentación</h2>
        </div> <!-- /.content-header -->



<div class="row">

        <div class="col-md-3 col-sm-4">


          <div class="portlet">
          
            <div class="portlet-header">
          
              <h3>
                <i class="fa fa-reorder"></i>
                Presentación del título
              </h3>
          
            </div> <!-- /.portlet-header -->
          
            <div class="portlet-content">
          
              <ul class="icons-list">
                <li>
                  <i class="icon-li fa fa-angle-right"></i>
                  <a href="{{ url('') }}">Antecedentes y descripción</a>
                </li>
                <li>
                  <i class="icon-li fa fa-angle-right"></i>
                  <a href="{{ url('') }}">Composición de la Comisión Académica</a>
                </li>
                <li>
                  <i class="icon-li fa fa-angle-right"></i>
                  <a href="{{ url('') }}">Datos Coordinador/a del programa</a>
                </li>
                <li>
                  <i class="icon-li fa fa-angle-right"></i>
                  <a href="{{ url('') }}">Datos del Servicio de Doctorado</a>
                </li>
              </ul>
          
            </div> <!-- /.portlet-content -->
          
          </div> <!-- /.portlet -->
            
        </div> <!-- /.col -->
        <div class="col-md-9 col-sm-8">

            <h2>Antecedentes y descripción</h2>

              <p class="lead">Breve descripción</p>

              <p>Dentro de este apartado se incluye información referida al contexto de la Universidad de Sevilla (La Escuela Internacional de Doctorado de la US) y del Doctorado en Psicología.</p>

              <p>ESCUELA INTERNACIONAL DE DOCTORADO DE LA UNIVERSIDAD DE SEVILLA (EIDUS)</p>
              <br/>
              <p class="lead">EL DOCTORADO EN PSICOLOGÍA</p>
              <p>Las universidades extranjeras, especialmente en el ámbito anglosajón, vienen ofreciendo programas de doctorado que abarcan la psicología como un todo. Son programas organizados desde Departamentos de Psicología (en el contexto anglosajón el equivalente a escuelas, institutos o facultades) que organizan doctorados integrados que abarcan distintos ámbitos tanto de la psicología aplicada, como de la investigación básica en esta disciplina. Este tipo de programas aprovechan la potencialidad que supone la convivencia e integración de las distintas ramas de la psicología que en la tradición española han venido hasta la fecha programas separados. Esta integración permite mejorar las sinergias de la cooperación y la transversalidad. En esta línea se encuentran los programas de doctorado en psicología de universidades de EE.UU. tan prestigiosas como Stanford, Michigan-Ann–Arbor, Yale, California-Los Ángeles, Illinois-Urbana- Champaign o Harvard que ocupan las 6 primeras posiciones del ranking NRC para psicología (http://www.socialpsychology.org/ranking.htm).
El mismo caso se da en algunas universidades del Reino Unido. Las universidades de Birminghan, Collegue London, Birbeck-University of London, Royal Holloway- University of London, Cardiff y Warwick que ocupan los puestos 2, 4, 5, 6 y 7 del ranking NRC Británico desarrollan programas de doctorado integrados en psicología (http:// www.socialpsychology.org/ukranks.htm).
Además, los programas integrados en psicología desarrollados por un único departamento que afecta a todas las ramas de especialización son la pauta general tanto en EE.UU como el Reino Unido, como puede verse en las páginas web incluidas más arriba.</p>
          
        </div> <!-- /.col -->


      </div> <!-- /.row -->
        

        

      </div> <!-- /.content-container -->
      
    </div> <!-- /.content -->

  </div> <!-- /.container -->


  <footer class="footer">

    <div class="container">

      <div class="row">

        <div class="col-sm-12 text-center">
          <h4>Programa de Doctorado - Facultad de psicología</h4>
          <p>
            <img src="{{ url('img/logofooter.png') }}"/><br/>
            UNIVERSIDAD DE SEVILLA</p>  
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