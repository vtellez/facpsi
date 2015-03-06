@extends('layouts.base')

@section('title')
Resultados
@stop

@section('header')
Resultados
@stop

@section('content')
<div class="row">
	<div class="col-md-3 col-sm-4">
		<div class="portlet">
			<div class="portlet-header">
				<h3>
					<i class="fa fa-reorder"></i>
					Resultados
				</h3>
			</div> <!-- /.portlet-header -->
			<div class="portlet-content">
				<ul class="icons-list">
					<li>
						<i class="icon-li fa fa-angle-right"></i>
						<a href="{{ url($section.'?s=1') }}">SGCPD</a>
					</li>
					<li>
						<i class="icon-li fa fa-angle-right"></i>
						<a href="{{ url($section.'?s=2') }}">Comisión de garantía de calidad del título</a>
					</li>
					<li>
						<i class="icon-li fa fa-angle-right"></i>
						<a href="{{ url($section.'?s=3') }}">Resultados del programa</a>
					</li>
					<li>
						<i class="icon-li fa fa-angle-right"></i>
						<a href="{{ url($section.'?s=4') }}">Procedimiento para el seguimiento de doctores egresados</a>
					</li>
					<li>
						<i class="icon-li fa fa-angle-right"></i>
						<a href="{{ url($section.'?s=5') }}">Información sobre el procedimiento para realizar sugerencias o reclamaciones</a>
					</li>
				</ul>
			</div> <!-- /.portlet-content -->
		</div> <!-- /.portlet -->

	</div> <!-- /.col -->
	<div class="col-md-9 col-sm-8">

		@if ( $step == 1 )
		<h3>SGCPD</h3><br/>
		Enlace al Servicio de Doctorado:
		http://www.doctorado.us.es/sistema-de-garantia-de-calidad

		@elseif ( $step == 2 )
		<h3>Comisión de garantía de calidad del título</h3><br/>
		- Manuel L. de la Mata Benítez (TU). Vicedecano de Recursos para el Aprendizaje y la Investigación. Coordinador del Programa de Doctorado.
		- Eva Ma Trigo Sánchez (TU). Vicedecana de Transferencia Tecnológica y Programas Internacionales.
		- Gonzalo de la Casa Rivas (CU) Suplentes: Juan Carlos López García (TU) y Manuel Vázquez Marrufo (TU).
		- David Saldaña Sage (TU). Carlos M. Gómez González (CU) y José León Carrión (TU).
		- Jesús Palacios González (CU). Suplentes: Ma Carmen Moreno Rodríguez (CU) y Alfredo Oliva Delgado (TU).
		- Joaquín Mora Merchán (TU). Suplentes: Rosario del Rey Alamillo (TU) y Virginia Sánchez Jiménez (TU).
		- Ma Ángeles Pérez San Gregorio (CU). Suplentes: Inmaculada Moreno García (TU) y Agustín Martín Rodríguez (TU).
		- Manuel García Ramírez (TU). Suplentes: Ana Ma López Jiménez (TU) y Andrés Santamaría Santigosa (TU).

		@elseif ( $step == 3 )
		<h3>Resultados del programa</h3><br/>
		En los dos años de implantación del PD en Psicología, el número de solicitudes ha sido de 102 (51 solicitudes el primer año y 51 el segundo). De ellas, han sido admitidas 43 el primer año (contando las dos convocatorias) y 32 el segundo. De estas solicitudes se han matriculado 37 alumnos/as en 2013-14 y 53 en 2014-15. Hay que señalar que los datos del curso 2014-15 sólo incluyen los/as estudiantes matriculados/as en el primer plazo.
		En este momento hay matriculados en el Programa de Doctorado en Psicología un total de 53 estudiantes (26 de Primer año y 27 de Segundo). Los datos de becas, ayudas y contratos de dichos/as estudiantes son:
		- 12 estudiantes disfrutan de contratos de investigación de 4 años de duración (FPI, FPU y PIF). Su distribución por líneas de investigación es: 1 asignado/a a la línea 1, 2, a la Línea 2, 5 a la Línea 3 y 4 a la Línea 5.
		- 4 estudiantes disfrutan de becas de investigación asociadas a proyectos (2 asignados/as a la Línea 2 y 2 a la Línea 3).
		- 21 estudiantes (10 de primer año y 11 de segundo) tienen contratos de trabajo o realizan actividades profesionales fuera de la US.
		Los datos de estudiantes internacionales son los siguientes:
		- Total de solicitudes: 25 (7 el primer año, 18 el segundo).
		- Total de estudiantes internacionales admitidos/as: 11 85 el primer año
		y 6 el segundo).

		@elseif ( $step == 4 )
		<h3>Procedimiento para el seguimiento de doctores egresados</h3><br/>
		PROCEDIMIENTO PARA EL SEGUIMIENTO DE LOS EGRESADOS
		El Sistema de Garantía de Calidad de los programas de doctorado (en adelante, SGCPD), como subsistema del actual SGCT de la Universidad de Sevilla, aprobado por Consejo de Gobierno de la US (Acuerdo del Consejo de Gobierno de 20 de diciembre de 2012) presta especial atención al seguimiento de los egresados estableciendo mecanismos concretos para realizar dicho seguimiento, tal y como se recoge explícitamente en la normativa de aplicación y en la guía de apoyo para la verificación de programas de doctorado elaborada por la Agencia Andaluza del Conocimiento (AAC).
		En este cometido, el SGCPD dispone de diversos indicadores que permiten medir y analizar la inserción laboral de los futuros doctorandos y futuros doctores, así como el nivel de satisfacción con la formación recibida por parte de los egresados. Esta información será obtenida mediante la realización de encuestas a los egresados y recabando datos provenientes de bases de datos institucionales (por ejemplo, laboratorio ocupacional).
		Concretamente, el SGCPD remarca la importancia de esta información dedicando un procedimiento completo para recabar información sobre el seguimiento de los egresados a través de varios indicadores que aportan evidencias del proceso 5 del SGCPD:
		P5 – ANÁLISIS DE LA INSERCIÓN LABORAL DE LOS DOCTORES Y DE LA SATISFACCIÓN CON LA FORMACIÓN INVESTIGADORA ADQUIRIDA.
		El propósito de este procedimiento es establecer un sistema que permita medir, analizar y utilizar, con vistas a la mejora del programa de doctorado, los resultados sobre la inserción laboral de los egresados y sobre la satisfacción de éstos y de los empleadores con la formación investigadora adquirida. Dispone de los siguientes indicadores:
		1. I01 Egresados Ocupados: No de egresados ocupados a los dos años de su egreso del PD/ No total de egresados del PD*100
		2. I02 Tiempo medio en obtener el primer contrato postdoctoral: Suma de meses transcurridos hasta el primer alta en el Sistema de la Seguridad Social desde su egreso del PD/No de egresados con altas en el SS del PD
		3. I03 Nivel de satisfacción de los egresados ocupados con la formación recibida: (No de respuestas valoradas por los egresados ocupados como “Media”, “Alta” y “Muy Alta” en el ítem XX/ No de respuestas al ítem)*100
		4. I04 Contratos postdoctorales: (No de egresados que consiguen ayudas y contratos postdoctorales en el año siguiente a la defensa de la tesis/No de egresados durante el año anterior)*100
		5. I05 Grado de satisfacción de los empleadores con la formación investigadora del egresado: No de respuestas en la encuesta de satisfacción de los empleadores.
		El SGCPD al completo se encuentra disponible en la siguiente dirección web:
		http://www.doctorado.us.es/sistema-de-garantia-de- calidad?highlight=YToxOntpOjA7czo5OiJnYXJhbnTDrWEiO30=

		@else
		<h3>Información sobre el procedimiento para realizar sugerencias o reclamaciones</h3><br/>
		Enlace al buzón general:
		https://institucional.us.es/exponaus/
		Enlace al buzón específico:
		http://www.doctorado.us.es/buzon
		
		@endif
	</div> <!-- /.col -->


</div> <!-- /.row -->
@stop