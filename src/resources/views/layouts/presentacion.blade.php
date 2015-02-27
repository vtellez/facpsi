@extends('layouts.base')

@section('title')
Presentación
@stop

@section('header')
Presentación
@stop

@section('content')
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
            <a href="{{ url('presentacion?s=1') }}">Antecedentes y descripción</a>
          </li>
          <li>
            <i class="icon-li fa fa-angle-right"></i>
            <a href="{{ url('presentacion?s=2') }}">Composición de la Comisión Académica</a>
          </li>
          <li>
            <i class="icon-li fa fa-angle-right"></i>
            <a href="{{ url('presentacion?s=3') }}">Datos Coordinador/a del programa</a>
          </li>
          <li>
            <i class="icon-li fa fa-angle-right"></i>
            <a href="{{ url('presentacion?s=4') }}">Datos del Servicio de Doctorado</a>
          </li>
        </ul>
      </div> <!-- /.portlet-content -->
    </div> <!-- /.portlet -->

  </div> <!-- /.col -->
  <div class="col-md-9 col-sm-8">

    @if ( $step == 1 )
    <h2>Antecedentes y descripción</h2>
    <p class="lead">Breve descripción</p>
    <p>Dentro de este apartado se incluye información referida al contexto de la Universidad de Sevilla (La Escuela Internacional de Doctorado de la US) y del Doctorado en Psicología.</p>
    <p>ESCUELA INTERNACIONAL DE DOCTORADO DE LA UNIVERSIDAD DE SEVILLA (EIDUS)</p>
    <br>
    <br/>
    <p class="lead">EL DOCTORADO EN PSICOLOGÍA</p>
    <p>Las universidades extranjeras, especialmente en el ámbito anglosajón, vienen ofreciendo programas de doctorado que abarcan la psicología como un todo. Son programas organizados desde Departamentos de Psicología (en el contexto anglosajón el equivalente a escuelas, institutos o facultades) que organizan doctorados integrados que abarcan distintos ámbitos tanto de la psicología aplicada, como de la investigación básica en esta disciplina. Este tipo de programas aprovechan la potencialidad que supone la convivencia e integración de las distintas ramas de la psicología que en la tradición española han venido hasta la fecha programas separados. Esta integración permite mejorar las sinergias de la cooperación y la transversalidad. En esta línea se encuentran los programas de doctorado en psicología de universidades de EE.UU. tan prestigiosas como Stanford, Michigan-Ann–Arbor, Yale, California-Los Ángeles, Illinois-Urbana- Champaign o Harvard que ocupan las 6 primeras posiciones del ranking NRC para psicología (<a href="http://www.socialpsychology.org/ranking.htm">http://www.socialpsychology.org/ranking.htm</a>).
    </p>
    <p>
      El mismo caso se da en algunas universidades del Reino Unido. Las universidades de Birminghan, Collegue London, Birbeck-University of London, Royal Holloway- University of London, Cardiff y Warwick que ocupan los puestos 2, 4, 5, 6 y 7 del ranking NRC Británico desarrollan programas de doctorado integrados en psicología (http:// www.socialpsychology.org/ukranks.htm).
    </p>
    <p>Además, los programas integrados en psicología desarrollados por un único departamento que afecta a todas las ramas de especialización son la pauta general tanto en EE.UU como el Reino Unido, como puede verse en las páginas web incluidas más arriba.</p>
    <br>
    <br>
    <p class="lead"> PREVISIÓN DE LA DEMANDA DEL TÍTULO</p>
    <p>En el período 2007-2011 (último año en el que estuvo permitida la inscripción en los antiguos programas) la demanda de los distintos programas de doctorado coordinados por los diferentes Departamentos de Psicología de la Universidad de Sevilla (Departamento de Personalidad, Evaluación y Tratamiento Psicológicos, Departamento de Psicología Social, Departamento de Psicología Evolutiva y de la Educación y Departamento de Psicología Experimental) registraron una matrícula global de 248 alumnos nacionales y 33 extranjeros, con rangos que fueron entre 71 (curso 2009-10) y 46 (2011- 12), con una media de 56,2 alumnos por curso. Dado que la propuesta que ahora se presenta se puede considerar la unión de los contenidos y líneas de los cuatro programas pre-existentes, se puede deducir que la demanda de la propuesta estará en los límites del conjunto de doctorados anteriores. Una cifra de 40-50 doctores en psicología podría ser suficiente para atender las demandas de especialistas investigadores de alto nivel en el entorno social inmediato.</p>

    @elseif ( $step == 2 )

    - Manuel L. de la Mata Benítez (TU). Vicedecano de Recursos para el Aprendizaje y la Investigación. Coordinador del Programa de Doctorado.
    - Eva Ma Trigo Sánchez (TU). Vicedecana de Transferencia Tecnológica y Programas Internacionales.
    - Gonzalo de la Casa Rivas (CU) Suplentes: Juan Carlos López García (TU) y Manuel Vázquez Marrufo (TU).
    - David Saldaña Sage (TU). Carlos M. Gómez González (CU) y José León Carrión (TU).
    - Jesús Palacios González (CU). Suplentes: Ma Carmen Moreno Rodríguez (CU) y Alfredo Oliva Delgado (TU).
    - Joaquín Mora Merchán (TU). Suplentes: Rosario del Rey Alamillo (TU) y Virginia Sánchez Jiménez (TU).
    - Ma Ángeles Pérez San Gregorio (CU). Suplentes: Inmaculada Moreno García (TU) y Agustín Martín Rodríguez (TU).
    - Manuel García Ramírez (TU). Suplentes: Ana Ma López Jiménez (TU) y Andrés Santamaría Santigosa (TU).

    @elseif ( $step == 3 )

    Manuel l. de la Mata Benítez. Profesor Titular de Universidad. Departamento de Psicología Experimental. Vicedecano de Recursos para el Aprendizaje y la Investigación. Facultad de Psicología.
    Tfno.: (34) 95 455 62 16. doctorado_psicologia@us.es
    https://investigacion.us.es/sisius/sis_showpub.php?idpers=1820

    @else

    http://www.doctorado.us.es/
    Servicio de Doctorado - Pabellón de México, Avenida de la Palmera, s/n. 41013 Sevilla http://www.doctorado.us.es/horarios-localizacion
    
    @endif
  </div> <!-- /.col -->


</div> <!-- /.row -->
@stop