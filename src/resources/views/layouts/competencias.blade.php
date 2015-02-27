@extends('layouts.base')

@section('title')
Competencias
@stop

@section('header')
Competencias
@stop

@section('content')
<div class="row">
  <div class="col-md-3 col-sm-4">
    <div class="portlet">
      <div class="portlet-header">
        <h3>
          <i class="fa fa-reorder"></i>
          Competencias
        </h3>
      </div> <!-- /.portlet-header -->
      <div class="portlet-content">
        <ul class="icons-list">
          <li>
            <i class="icon-li fa fa-angle-right"></i>
            <a href="{{ url('competencias?s=1') }}">Competencias</a>
          </li>
        </ul>
      </div> <!-- /.portlet-content -->
    </div> <!-- /.portlet -->
  </div> <!-- /.col -->
  <div class="col-md-9 col-sm-8">

  Relación ￼ de
￼competencias del título.
Básicas
- CB11 - Comprensión sistemática de un campo de estudio y dominio de las habilidades y métodos de investigación relacionados con dicho campo. - CB12 - Capacidad de concebir, diseñar o crear, poner en práctica y adoptar un proceso sustancial de investigación o creación.
- CB13 - Capacidad para contribuir a la ampliación de las fronteras del conocimiento a través de una investigación original.
- CB14 - Capacidad de realizar un análisis crítico y de evaluación y síntesis de ideas nuevas y complejas.
- CB15 - Capacidad de comunicación con la comunidad académica y científica y con la sociedad en general acerca de sus ámbitos de conocimiento en los modos e idiomas de uso habitual en su comunidad científica internacional.
- CB16 - Capacidad de fomentar, en contextos académicos y profesionales, el avance científico, tecnológico, social, artístico o cultural dentro de una sociedad basada en el conocimiento.
Capacidades y destrezas personales
- CA01 - Desenvolverse en contextos en los que hay poca información específica.
- CA02 - Encontrar las preguntas claves que hay que responder para resolver un problema complejo.
- CA03 - Diseñar, crear, desarrollar y emprender proyectos novedosos e innovadores en su ámbito de conocimiento.
- CA04 - Trabajar tanto en equipo como de manera autónoma en un contexto internacional o multidisciplinar.
- CA05 - Integrar conocimientos, enfrentarse a la complejidad y formular

juicios con información limitada.
- CA06 - La crítica y defensa intelectual de soluciones
Otras Competencias
- CE01 - Conocer y aplicar los instrumentos y procedimientos de evaluación y detección de necesidades y situaciones de riesgo en el campo propio de investigación y/o intervención en psicología
- CE02 - Conocer los programas más relevantes de intervención en el campo propio dentro del ámbito de la psicología.
- CE03 - Aplicar las estrategias de intervención que se utilizan en el campo de intervención propio dentro del ámbito de la psicología
- CE04 - Saber implementar la evaluación de programas en el campo de la psicología para la mejora continua de la calidad de la intervención sobre individuos, familias, grupos y comunidades.
- CE05 - Contribuir a la programación y difusión de prácticas profesionales adecuadas, tanto en el asesoramiento, en la intervención como en la prevención.
- CE06 - Evaluar de las posibilidades de aplicación de los resultados de la investigación en el contexto de la I+D+i (transferencia de conocimiento a sectores productivos).

    
  </div> <!-- /.col -->


</div> <!-- /.row -->

@stop