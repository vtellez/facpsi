@extends('layouts.base')

@section('title')
Tesis doctoral
@stop

@section('header')
Tesis doctoral
@stop

@section('content')
<div class="row">
	<div class="col-md-3 col-sm-4">
		<div class="portlet">
			<div class="portlet-header">
				<h3>
					<i class="fa fa-reorder"></i>
					Tesis doctoral
				</h3>
			</div> <!-- /.portlet-header -->
			<div class="portlet-content">
				<ul class="icons-list">
					<li>
						<i class="icon-li fa fa-angle-right"></i>
						<a href="{{ url('tesis?s=1') }}">Supervisión de tesis</a>
						</li>
						<li>
							<i class="icon-li fa fa-angle-right"></i>
							<a href="{{ url('tesis?s=2') }}">Seguimiento del doctorando</a>
						</li>
						<li>
							<i class="icon-li fa fa-angle-right"></i>
							<a href="{{ url('tesis?s=3') }}">Tesis doctoral</a>
						</li>
					</ul>
				</div> <!-- /.portlet-content -->
			</div> <!-- /.portlet -->

		</div> <!-- /.col -->
		<div class="col-md-9 col-sm-8">

		@if ( $step == 1 )
Enlace a la guía de buenas prácticas.
www.doctorado.us.es/impresos/verificacion/C%C3%93DIGO_BUENAS_PRA CTICAS_web.pdf
Acciones previstas o en marcha para fomentar la dirección múltiple de tesis (aportar número).
Acciones para fomentar la dirección de tesis doctorales.
• Jornadas y/o actividades de motivación entre el profesorado del centro

para fomentar una cultura de la investigación a partir del aprendizaje de buenas prácticas aprendiendo de “directores senior” con experiencia en cuanto a estrategias de dirección eficaz y publicación en revistas de impactos de resultados procedentes de tesis. (1 jornadas)
• Fomento de la producción de tesis a través del procedimiento de tesis por artículos para mejorar la producción científica de impacto mediante seminarios que permitan publicitar este procedimiento y entrenar en la aceleración de los plazos de publicación de los artículos.
• Fomento de la co-dirección entre aquellos investigadores/as que estén en una posición de mejorar su productividad pero que no tengan la capacidad plena de dirección (titulares sin sexenios, profesores contratados doctores) mediante la búsqueda de sinergias entre investigadores de un mismo o distinto grupo. E
En este momento, un total de 9 tesis (5 de estudiantes de segundo y 4 de estudiantes de primer año) doctorales están siendo co-dirigidas de esta manera
• Fomento de la co-dirección mediante el establecimiento de políticas de “líneas de investigación” que permitan definir temáticas que generen trabajos convergentes. E
En este momento, 4 tesis (2 de estudiantes de segundo y 2 de estudiantes de primer año) son co-dirigidas d eeste modo
• Se establecerán contactos con las universidades con las que se dispone de convenio de doble titulación (Católica de Milán, Maastricht) o con las que se están suscribiendo en estos momentos (Sao Paulo), así como con la red de contactos Erasmus para fomentar la producción de tesis con mención europea
• Creación de un comité de seguimiento de las propuestas con el profesorado internacional ya incluido en el programa. Se habilitará un procedimiento de informe sobre el proyecto (on-line) y sobre resúmenes en inglés de los proyectos de tesis para su informe.
• Ampliación del comité de seguimiento internacional con la incorporación de profesorado procedente de las universidades con las que se tienen convenios de doble titulación internacional y con el de algunas universidades con la que se tienen convenios Erasmus.
• Fomento de la presencia de expertos internacionales en los tribunales de tesis, mediante el uso de las redes de contactos internaciones. Especialmente utilizando sinergias basadas en financiación Erasmus o estancias financiadas a través de proyectos.


		@elseif ( $step == 2 )
Procedimiento institucional (Pendiente de facilitar por el Secretariado de Doctorado).
Procedimiento específico a seguir en el programa. Información PI y DAD
www.doctorado.us.es/impresos/verificacion/gestion_del_DAD.pdf
Información compromiso documental:
www.doctorado.us.es/impresos/verificacion/5.2.Seguimiento_del_doctorando _compromiso_documental.pdf
Impreso compromiso documental:
www.doctorado.us.es/impresos/formularios/M05_compromiso_documental_y _supervision_RD_99.pdf

		@else
Información sobre el desarrollo y presentación de la tesis doctoral.
Indicar si se exigen requisitos específicos (indicios de calidad) para la aprobación de la lectura de la tesis.
Normativa para la presentación y lectura de tesis doctorales. Enlace doctorado:
http://www.doctorado.us.es/tesis-doctoral
		
		@endif
		</div> <!-- /.col -->


	</div> <!-- /.row -->
	@stop