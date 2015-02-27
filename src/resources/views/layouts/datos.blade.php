@extends('layouts.base')

@section('title')
Datos del título
@stop

@section('header')
Datos del título
@stop

@section('content')
<div class="row">
  <div class="col-md-3 col-sm-4">
    <div class="portlet">
      <div class="portlet-header">
        <h3>
          <i class="fa fa-reorder"></i>
          Datos del título
        </h3>
      </div> <!-- /.portlet-header -->
      <div class="portlet-content">
        <ul class="icons-list">
          <li>
            <i class="icon-li fa fa-angle-right"></i>
            <a href="{{ url('datos?s=1') }}">Nivel</a>
          </li>
          <li>
            <i class="icon-li fa fa-angle-right"></i>
            <a href="{{ url('datos?s=2') }}">Real decreto</a>
          </li>
          <li>
            <i class="icon-li fa fa-angle-right"></i>
            <a href="{{ url('datos?s=4') }}">Códigos ISCED 1 y ISCED 2</a>
          </li>
          <li>
            <i class="icon-li fa fa-angle-right"></i>
            <a href="{{ url('datos?s=5') }}">Centros en los que se imparte</a>
          </li>
          <li>
            <i class="icon-li fa fa-angle-right"></i>
            <a href="{{ url('datos?s=6') }}">Duración del programa</a>
          </li>
          <li>
            <i class="icon-li fa fa-angle-right"></i>
            <a href="{{ url('datos?s=7') }}">Normas de permanencia</a>
          </li>
          <li>
            <i class="icon-li fa fa-angle-right"></i>
            <a href="{{ url('datos?s=8') }}">Lenguas</a>
          </li>
          <li>
            <i class="icon-li fa fa-angle-right"></i>
            <a href="{{ url('datos?s=9') }}">Plazas de nuevo ingreso</a>
          </li>
          <li>
            <i class="icon-li fa fa-angle-right"></i>
            <a href="{{ url('datos?s=10') }}">Alumnos matriculados</a>
          </li>
          <li>
            <i class="icon-li fa fa-angle-right"></i>
            <a href="{{ url('datos?s=11') }}">Colaboraciones</a>
          </li>
        </ul>
      </div> <!-- /.portlet-content -->
    </div> <!-- /.portlet -->
  </div> <!-- /.col -->
  <div class="col-md-9 col-sm-8">
    @if ( $step == 1 )
    <h2>Nivel</h2>
    <p class="lead">&nbsp;</p>
    <p>Doctorado</p>
    <br><br>
    <p class="lead">Denominación del título</p>
    <p>Programa de Doctorado en Psicología por la Universidad de Sevilla</p>


    @elseif ( $step == 2 )
    <h2>Real decreto</h2>
    <p class="lead">&nbsp;</p>
    <p>Programa de doctorado en Psicología por la Universidad de Sevilla (RD 99/2011)</p>

    @elseif ( $step == 4 )
    <h2>Códigos ISCED 1 y ISCED 2</h2>
    <p class="lead">&nbsp;</p>
    <p>ISCED 1: Psicología</p>
    <p>ISCED 2: Psicología</p>
    @elseif ( $step == 5 )
    Escuela Internacional de Doctorado de la Universidad de Sevilla
    @elseif ( $step == 6 )
    El PD en Psicología por la US contempla la admisión de estudiantes a tiempo completo TC y a tiempo parcial (TP). La duración de los estudios de doctorado es, por tanto:
    TC (3 años + 2 prórrogas de 1 año)
    TP (5 años + 1 prórroga de 2 años + 1 prórroga de 1 año)
    @elseif ( $step == 7 )
    www.doctorado.us.es/impresos/verificacion/NORMAS%20DE%20PERMANE NCIA_web.pdf
    @elseif ( $step == 8 )
    Castellano e inglés.
    @elseif ( $step == 9 )
    No de plazas de nuevo ingreso ofertadas por curso académico
    Curso 2013-1014: 40 plazas (16 TC y 24 TP) Curso 2014-2015: 40 plazas (16TC y 24 TP)
    @elseif ( $step == 10 )
    No de alumnos de nuevo ingreso matriculados por curso académico
    Curso 2013-1014: 38 estudiantes matriculados/as
    Curso 2014-2015: 27 estudiantes matriculados/as en el primer plazo. 6 estudiantes admitidos/as en el segundo plazo. Pendientes de matriculación
    @else
    Incluir documento “Convenios PD”
    @endif
  </div> <!-- /.col -->


</div> <!-- /.row -->

@stop