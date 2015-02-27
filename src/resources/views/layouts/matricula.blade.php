@extends('layouts.base')

@section('title')
Matrícula
@stop

@section('header')
Matrícula
@stop

@section('content')
<div class="row">
	<div class="col-md-3 col-sm-4">
		<div class="portlet">
			<div class="portlet-header">
				<h3>
					<i class="fa fa-reorder"></i>
					Matrícula
				</h3>
			</div> <!-- /.portlet-header -->
			<div class="portlet-content">
				<ul class="icons-list">
					<li>
						<i class="icon-li fa fa-angle-right"></i>
						<a href="{{ url($section.'?s=1') }}">Información matrícula</a>
						</li>
						<li>
							<i class="icon-li fa fa-angle-right"></i>
							<a href="{{ url($section.'?s=2') }}">Información sobre apoyo y orientación para los estudiantes una vez matriculados</a>
						</li>
						<li>
							<i class="icon-li fa fa-angle-right"></i>
							<a href="{{ url($section.'?s=3') }}">Recursos materiales disponibles</a>
						</li>
					</ul>
				</div> <!-- /.portlet-content -->
			</div> <!-- /.portlet -->

		</div> <!-- /.col -->
		<div class="col-md-9 col-sm-8">

		@if ( $step == 1 )


		@elseif ( $step == 2 )


		@else
		
		@endif
		</div> <!-- /.col -->


	</div> <!-- /.row -->
	@stop