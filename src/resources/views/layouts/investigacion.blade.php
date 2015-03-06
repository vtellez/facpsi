@extends('layouts.base')

@section('title')
Líneas de investigación
@stop

@section('header')
Líneas de investigación
@stop

@section('content')
<div class="row">
	<div class="col-md-3 col-sm-4">
		<div class="portlet">
			<div class="portlet-header">
				<h3>
					<i class="fa fa-reorder"></i>
					Líneas de investigación
				</h3>
			</div> <!-- /.portlet-header -->
			<div class="portlet-content">
				<ul class="icons-list">
					<li>
						<i class="icon-li fa fa-angle-right"></i>
						<a href="{{ url('investigacion?s=1') }}">Líneas y equipos/grupos de investigación</a>
					</li>
					<li>
						<i class="icon-li fa fa-angle-right"></i>
						<a href="{{ url('investigacion?s=2') }}">Información del profesorado que participa en el programa</a>
						</li>
						<li>
							<i class="icon-li fa fa-angle-right"></i>
							<a href="{{ url('investigacion?s=3') }}">Mecanismos de cómputo de la labor de tutorización y dirección de tesis</a>
							</li>
						</ul>
					</div> <!-- /.portlet-content -->
				</div> <!-- /.portlet -->

			</div> <!-- /.col -->
			<div class="col-md-9 col-sm-8">

				@if ( $step == 1 )
				<h2>Líneas y equipos/grupos de investigación</h2>
				Documento: “Profesorado por Líneas de Investigación”
				- Incluir documentos de Líneas 1-5:
				- - Descripción equipos de investigación.
				- Documentos (resumen CV) de todos/as los/as profesores/as (ver
				archivo rar. “Líneas de Investigación y Profesorado”


				@elseif ( $step == 2 )
				<h2>Información del profesorado que participa en el programa</h2>
				Documentos (resumen CV) de todos/as los/as profesores/as (ver archivo rar. “Líneas de Investigación y Profesorado”. Incluye email de contacto y enlace a SISIUS.

				@else
				<h2>Mecanismos de cómputo de la labor de tutorización y dirección de tesis</h2>
				www.doctorado.us.es/impresos/verificacion/6.2.Mecanismos_computo_direcc ion_tutorizacion_web.pdf

				@endif
			</div> <!-- /.col -->
		</div> <!-- /.row -->
		@stop