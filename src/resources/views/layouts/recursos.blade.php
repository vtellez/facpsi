@extends('layouts.base')

@section('title')
Recursos Materiales
@stop

@section('header')
Recursos Materiales
@stop

@section('content')
<div class="row">
	<div class="col-md-3 col-sm-4">
		<div class="portlet">
			<div class="portlet-header">
				<h3>
					<i class="fa fa-reorder"></i>
					Recursos Materiales
				</h3>
			</div> <!-- /.portlet-header -->
			<div class="portlet-content">
				<ul class="icons-list">
					<li>
						<i class="icon-li fa fa-angle-right"></i>
						<a href="{{ url($section.'?s=1') }}">Información específica para el área de conocimiento de los recursos disponibles del programa</a>
					</li>
					<li>
						<i class="icon-li fa fa-angle-right"></i>
						<a href="{{ url($section.'?s=2') }}">Doctorandos que han conseguido becas, ayudas, contratos, postdoctorales en años anteriores</a>
					</li>
					<li>
						<i class="icon-li fa fa-angle-right"></i>
						<a href="{{ url($section.'?s=3') }}">Información sobre convenios que regulen la participación de otras entidades en el desarrollo de las actividades investigadoras</a>
					</li>
				</ul>
			</div> <!-- /.portlet-content -->
		</div> <!-- /.portlet -->

	</div> <!-- /.col -->
	<div class="col-md-9 col-sm-8">

		@if ( $step == 1 )
		<h3>Información específica para el área de conocimiento de los recursos disponibles del programa</h3><br/>
		<ul>
			<li>Convocatorias generales del Servicio de Doctorado: <br><a href="http://www.doctorado.us.es/matricula/becas-y-ayudas">http://www.doctorado.us.es/matricula/becas-y-ayudas</a></li>
			<br>
			<li>Convocatorias del Relaciones Internacionales: <br><a href="http://www.internacional.us.es/becas-ayudas">http://www.internacional.us.es/becas-ayudas</a></li>
		</ul>
			
			

		@elseif ( $step == 2 )
		<h3>Doctorandos que han conseguido becas, ayudas, contratos, postdoctorales en años anteriores</h3><br/>
		<p>
		En este momento hay matriculados en el Programa de Doctorado en Psicología un total de 53 estudiantes (26 de Primer año y 27 de Segundo). Los datos de becas, ayudas y contratos de dichos/as estudiantes son:
		</p>
		<ul>
			<li>
			12 estudiantes disfrutan de contratos de investigación de 4 años de duración (FPI, FPU y PIF). Su distribución por líneas de investigación es: 1 asignado/a a la línea 1, 2, a la Línea 2, 5 a la Línea 3 y 4 a la Línea 5.
			</li>
			<li>
			4 estudiantes disfrutan de becas de investigación asociadas a proyectos (2 asignados/as a la Línea 2 y 2 a la Línea 3).
			</li>
			<li>
			21 estudiantes (10 de primer año y 11 de segundo) tienen contratos de trabajo o realizan actividades profesionales fuera de la US.
			</li>
		</ul>

		@else
		<h3>Información sobre convenios que regulen la participación de otras entidades en el desarrollo de las actividades investigadoras</h3><br/>
		<p>
		Cotutela de tesis: <a href="http://www.doctorado.us.es/tesis-doctoral/cotutela-de-tesis">http://www.doctorado.us.es/tesis-doctoral/cotutela-de-tesis</a>
		</p>
		
		@endif
	</div> <!-- /.col -->


</div> <!-- /.row -->
@stop