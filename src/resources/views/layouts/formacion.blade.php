@extends('layouts.base')

@section('title')
Actividades formativas
@stop

@section('header')
Actividades formativas
@stop

@section('content')
<div class="row">
	<div class="col-md-3 col-sm-4">
		<div class="portlet">
			<div class="portlet-header">
				<h3>
					<i class="fa fa-reorder"></i>
					Actividades formativas
				</h3>
			</div> <!-- /.portlet-header -->
			<div class="portlet-content">
				<ul class="icons-list">
					<li>
						<i class="icon-li fa fa-angle-right"></i>
						<a href="{{ url('formacion?s=1') }}">Tipos de actividades formativas</a>
					</li>
					<li>
						<i class="icon-li fa fa-angle-right"></i>
						<a href="{{ url('formacion?s=2') }}">Secuencia de actividades a realizar por los doctorandos (cronograma por curso académico)</a>
					</li>
					<li>
						<i class="icon-li fa fa-angle-right"></i>
						<a href="{{ url('formacion?s=3') }}">Competencias a desarrollar</a>
					</li>
					<li>
						<i class="icon-li fa fa-angle-right"></i>
						<a href="{{ url('formacion?s=4') }}">Lista de actividades formativas organizadas por el Programa de Doctorado</a>
					</li>
					<li>
						<i class="icon-li fa fa-angle-right"></i>
						<a href="{{ url('formacion?s=5') }}">Acciones de movilidad específicas para la actividad que se describe.</a>
					</li>
				</ul>
			</div> <!-- /.portlet-content -->
		</div> <!-- /.portlet -->

	</div> <!-- /.col -->
	<div class="col-md-9 col-sm-8">

		@if ( $step == 1 )
		<h3>Tipos de actividades formativas</h3><br/>
		<p>
			El programa formativo estará compuesto por cinco tipos de actividades: seminarios, conferencias, escuela de verano, cursos instrumentales y transversales y estancias en centros de investigación.
		</p>
		<p>
			<br><h4>1) Seminarios</h4>
		</p>
		<p>
			Los Seminarios versarán sobre contenidos metodológicos. Serán impartidos por el profesorado del programa o por profesorado invitado experto y en su caso, por estudiantes de tercer curso de doctorado (veáse más adelante). A lo largo del programa cada estudiante deberá asistir a un mínimo de 80 horas (4 ECTS) de estos contenidos. Se procurará que estos seminarios puedan realizarse a partir de módulos de los programas de Máster (formación complementaria). Cada seminario no incluido en la formación complementaria tendrá una duración mínima de tres horas.
		</p>
		<p>
			La lengua vehicular de los seminarios será el castellano o el inglés, según el profesorado que realice la actividad.
		</p>
		<p>
			Los contenidos de los seminarios se centrarán, entre otros temas en uso de software avanzado para el análisis estadístico o cualitativo y, dependiendo del campo de investigación, técnicas específicas de análisis de datos, tales como metodologías multivariantes, ecuaciones estructurales, regresiones logísticas, análisis discursivo, análisis de contenido, etc.
		</p>
		<p>
			<u>Objetivos</u>: 1. Mejorar el manejo de software de análisis de datos, tanto cuantitativo (SPSS, R, etc.), como cualitativo (Atlas_Ti, Nudist, etc.). 2. Formar en metodologías estadísticas de alto nivel. 3. Formar en metodologías cualitativas de alto nivel.
		</p>
		<p>
			Los seminarios requerirán la presencia y la participación de los/as estudiantes, así como la realización, en su caso, de las actividades de aprendizaje.
		</p>
		<p>
			<u>Procedimiento de control</u>. El control de estas actividades se realizará mediante la recogida de las firmas de los/as estudiantes que asistan a ellas.
		</p>
		<p>
			Quedará constancia de ello en el Documento de Actividades del Doctorando (DAD) (con indicación de las horas de duración de la actividad).
		</p>

		<p>
			<br><h4>2) Conferencias</h4>
		</p>
		<p>
			Tendrán una naturaleza fundamentalmente conceptual y serán impartidas por profesorado del programa o profesorado invitado y estarán organizadas por la Comisión Académica a sugerencia de las diferentes líneas del programa. Cada estudiante deberá asistir a lo largo del programa a un mínimo de 20 horas de estas conferencias. La duración de cada una de estas actividades será en torno a 1 hora. El programa alternará conferencias y seminarios, de forma que cada 21 días (cada tres semanas) se realizará alguna.
		</p>
		<p>
			Los contenidos desarrollarán las temáticas propias de cada línea de investigación: 
		</p>
		<ol type="a">
			<li>
				Avances en familia y desarrollo psicológico (procesos de comunicación familiar, familias no tradicionales, apego, programas de intervención y mejora del funcionamiento familiar, escuelas de padres, participación comunitaria, adopción y acogimiento, , etc.)
			</li>
			<li>
				Intervención psicoeducativa para la promoción del desarrollo (competencias socioemocionales, programas de mejora de la convivencia, acoso escolar, sexting, abandono escolar, menores en riesgo, etc.
			</li>
			<li>
				Aprendizaje, neurociencia y evolución (avances en psicología comparada, procesos cognitivos, bases biológicos y neurológicas de los proceso cognitivos, etc.).
			</li>
			<li>
				Desarrollo Neurocognitivo, Neuropsicología, Trastornos Neurológicos y Dificultades en el Desarrollo de la Cognición y el Lenguaje (alteraciones de la atención y la memoria, trastornos neurológicos y neuroevolutivos, psicología y neuropsicología del lenguaje, etc.)
			</li>
			<li>
				Procesos psisocosociales, cultura, diversidad y ciudadanía (psicología cultural y transcultural, estudios de género, psicología de la diversidad humana, procesos migratorios, bases psicológicas de la cultura, resiliencia, violencias sociales, intervención en violencia, etc.)
			</li>
			<li>
				Intervención psicológica en clínica y salud (tratamientos empíricamente validados, práctica psicoterapéutica basada en la evidencia; modelos de intervención terapéutica, intervención psicológica en problemas orgánicos, trastorno por hiperactividad, psicooncología, dolor crónico, trastornos de la imagen, esclerosis múltiple, adicciones, problemas relacionales, etc.).
			</li>
		</ol>
		<p>
			<u>Objetivos</u>: 1. Desarrollar a nivel avanzado un conocimiento transversal de la investigación en psicología; 2. Conocer los últimos avances e innovaciones en investigación psicológica. 3. Ser capaz de organizar un conocimiento avanzado relacionándolo con los avances en otros campos.
		</p>
		<p>
			Las conferencias requerirán la presencia y la participación de los/as estudiantes, así como, en su caso, la realización de las actividades de aprendizaje. Quedará constancia de ello en el DAD (con indicación de las horas de trabajo realizadas).
		</p>
		<p>
			<u>Procedimiento de control</u>. El control de estas actividades se realizará mediante la recogida de las firmas de los/as estudiantes que asistan a ellas.
		</p>
		<p>
			Quedará constancia de ello en el Documento de Actividades del Doctorando (DAD) (con indicación de las horas de duración de la actividad).
		</p>



		<p>
			<br><h4>3) Cursos instrumentales y transversales</h4>
		</p>
		<p>
			Se ofrecerán actividades relacionadas con los siguientes contenidos, a lo largo del programa el estudiante deberá realizar, al menos, una actividad de cada uno de los tipos siguientes, salvo que la comisión entienda que tiene desarrolladas suficientes competencias en alguna de ellas.
		</p>
		<ol>
			<li>
				<p>
					<h5>Procedimientos y Dilemas en una Investigación Ética.</h5>
				</p>
				<p>
					Para desarrollar estos objetivos se realizarán seminarios al respecto, aprovechando en lo posible actividades del Colegio Oficial de Psicología de Andalucía Occidental o la puesta en marcha de seminarios directamente organizados dentro del programa de doctorado.
				</p>
				<p>
					<u><b>Objetivos</b></u>: 1. Incrementar la capacitación del investigador en el manejo de protocolos y problemas éticos de la investigación, tanto en su vertiente de investigación animal (cuando sea el caso), como humana (cuando sea el caso).
				</p>
			</li>
			<li>
				<p>
					<h5>Documentación en psicología</h5>
				</p>
				<p>
					Para desarrollar estos objetivos se aprovecharán las actividades formativas de la biblioteca de la Universidad de Sevilla y algunos módulos de los Másteres oficiales del centro, sin menoscabo de la puesta en marcha directa de seminarios al respecto si fuese preciso.
					Objetivos: 1. Manejo de bases de datos científicas (PsycInfo, Psicodoc, Medline, Web of Science, Scopus, PubMed, etc). 2. Manejo de programas de gestión de referencias (RefWorks, EndNote).
				</p>
			</li>
			<li>
				<p>
					<h5>Comunicación y Producción Científica</h5>
				</p>
				<p>Como en el caso anterior, para desarrollar estos objetivos se aprovecharán las actividades formativas de la biblioteca y algunos módulos de los Másteres oficiales del centro.
				</p>
				<p>
					<u><b>Objetivos</b></u>: 1. Incrementar las habilidades instrumentales de elaboración de artículos de impacto; 2. Incrementar la capacidad de presentación de comunicaciones orales.
				</p>
				<li>
					<p>
						<h5>Habilidades para la Inserción Profesional y el Emprendimiento</h5>
					</p>
					<p>
						Estas actividades se desarrollarán en colaboración con la OTRI de la Universidad de Sevilla y con Colegio Oficial de Psicología de Andalucía Occidental (COPAO), aprovechando sus programas formativos en emprendimiento para investigadores en general y en psicología, en particular.
						Objetivos: 1. Conocer y desarrollar las oportunidades para la aplicación emprendedora de la investigación. 2. Fomentar una cultura de emprendimiento y transferencia social de la investigación.
					</p>
				</li>
			</ol>

			<p>
				Los cursos instrumentales y/o transversales conferencias requerirán la presencia y la participación de los/as estudiantes, así como, en su caso, la realización de las actividades de aprendizaje.
			</p>
			<p>
				<u>Procedimiento de control</u>. El control de estas actividades se realizará mediante la recogida de las firmas de los/as estudiantes que asistan a ellas.
			</p>
			<p>
				Quedará constancia de ello en el Documento de Actividades del Doctorando (DAD) (con indicación de las horas de duración de la actividad).
			</p>



			<p>
				<br><h4>4) Escuela de Verano</h4>
			</p>
			<p>
				Se organizará anualmente entre los meses de junio a septiembre. Se tratará de una exposición en formato congreso de los avances llevados a cabo en el proyecto de cada estudiante. Las presentaciones se harán en inglés. Durante la escuela también se podrán impartir conferencias ligadas a las líneas de investigación del programa de doctorado.
			</p>
			<p>
				Las exposiciones de los doctorandos tratarán de los avances y mejoras en sus proyectos de investigación. Igualmente se podrán incluir conferencias adicionales para la mejora de la conceptualización de los proyectos.
			</p>
			<p>
				Objetivos: 1. Mejorar hasta un nivel de excelencia la capacidad de comunicación científica. 2. Fomentar la capacidad de argumentación y debate de los doctorandos.
			</p>
			<p>
				Todos/s los/as estudiantes de doctorado deberán participar en la Escuela de Verano, asistiendo a las sesiones y presentando el estado de su trabajo de investigación.
			</p>
			<p>
				<u>Procedimiento de control</u>. La realización de esta actividad implicará, en primer lugar, la asistencia a dos sesiones temáticas (que se controlará mediante la recogida de las firmas de los/as asistentes) y, por otra, la presentación de los avances de la tesis doctoral de cada estudiante, que se realizará en la sesión correspondiente.
			</p>
			<p>
				Quedará constancia de todo ello en el Documento de Actividades del Doctorando (DAD) (con indicación de las horas de duración de la actividad).
			</p>


			<p>
				<br><h4>5) Estancias en centros de investigación</h4>
			</p>
			<p>
				Los estudiantes del programa de Doctorado deberán realizar estancias en centros de investigación nacionales y/o internacionales durante el tiempo de sus estudios de doctorado. Dentro de estas estancias se consideran las siguientes opciones:
			</p>
			<ol type="a">
				<li>
					Estancias en centros de investigación internacionales de prestigio/excelencia. El tiempo total de estas estancias será de al menos 3 meses.
				</li>
				<li>
					Estancias breves en centros de investigación internacionales de prestigio/excelencia. El tiempo total de estancia será de al menos 30 días.
				</li>
				<li>
					Estancias en centros de investigación nacionales de prestigio/excelencia. El tiempo total de estancia será de al menos 30 días.
				</li>
			</ol>
			<br>
			<p>
				En todos los casos, y dependiendo de las condiciones de los estudiantes y de la financiación disponible, se recomienda la opción A, en primer lugar, a continuación la B y, por último, la C. En el caso de los estudiantes a tiempo completo, será obligatoria la opción A. En el caso de estudiantes a tiempo parcial, será obligatoria, al menos, la opción C.
			</p>
			<p>
				El control de esta actividad se realizará mediante la presentación de dos documentos:
			</p>
				<ul>
					<li>
					Un certificado de haber realizado la estancia, con indicación de la duración , expedido por el responsable del centro de investigación  o por el/la investigador/a que haya invitado al/ estudiante.
					</li>
					<li>
						Un abreve memoria de las actividades realizadas, elaborada por el/la estudiante de asistencia y presentación de comunicación en el congreso. 
					</li>
				</ul>
			<p>
				Ambos documentos se incorporarán al DAD.
			</p>

			<p>
				<br><h4>6)	Otras actividades formativas</h4>
			</p>
			<p>
				En este apartado se incluye la asistencia y participación en al menos un congreso nacional o internacional, presentando una comunicación. Se recomienda que esta actividad sea realizada en el 4º semestre (en el caso de estudiantes a tiempo completo) o en el 7º u 8º (en el caso de estudiantes a tiempo parcial).
			</p>
			<p>
				El control de esta actividad se realizará mediante la presentación por parte del/a doctorando/a del certificado de asistencia y presentación de comunicación en el congreso. Este certificado se incorporará al Documento de Actividades del/a Doctorando/a (DAD). 
			</p>

			<p>
				Todas las actividades formativas descritas podrán realizarse en castellano y en inglés
			</p>

		</li>
	</ol>



	@elseif ( $step == 2 )
	<h3>Secuencia de actividades a realizar por los doctorandos</h3><br/>
	<p>
		<h4>Estrategia general del programa formativo</h4>
	</p>
	<p>
		Cada línea de investigación deberá programar un mínimo de tres actividades del tipo seminarios o conferencias por curso.
	</p>
	<p>
		La temporalización recomendada de las actividades formativas será:
		<ol type="i">
			<li>
				Primer curso: 50 horas
			</li>
			<li>
				Segundo curso: 30horas
			</li>
			<li>
				Tercer curso: 20 horas.
			</li>
		</ol>
	</p>
	<br>
	<p>
		<h4>Pauta de trabajo para el/la estudiante a lo largo del programa formativo</h4>
	</p>
	<p>
		Los/as estudiantes de tercer curso actuarán como tutores metodológicos de los estudiantes de primer y segundo curso, orientándolos en tareas metodológicas y formativas dentro de cada línea de investigación. A lo largo de su segundo o tercer año deberán haber organizado algunos de los seminarios metodológicos en el punto anterior, centrado en la metodología en la que desarrollen su tesis doctoral.
	</p>
	<p>
		Todos los estudiantes deberán seguir un programa de presentación de los avances de su investigación en reuniones semestrales (dos por curso, una al semestre) en la que expondrán mediante un formato de seminario y/o de caso los avances realizados en el último periodo semestrales en: 
	</p>
	<ol type="a">
		<li>Depuración de la metodología</li>
		<li>Análisis de datos</li>
		<li>Discusión teórica y tareas conceptuales.</li>
	</ol>
	<p>
		Estas sesiones serán coordinadas por los responsables de línea y en ellas estarán presentes los estudiantes adscritos a la línea y los directores y codirectores.
	</p>
	<p>
		Los estudiantes podrán solicitar de la Comisión Académica que le sean reconocidas actividades formativas de interés para su proyecto de tesis que no estén organizadas por el propio programa de doctorado.
	</p>


	@elseif ( $step == 3 )
	<h3>Competencias a desarrollar</h3><br/>

	<p class="lead" style="text-align:center">TABLA 1. Actividades formativas y competencias desarrolladas</p>
	<br>
	<h4>Estudiantes a tiempo completo (ETC)</h4>
	<table class="table table-bordered">
		<thead>
			<th>Semestre</th>
			<th>Competencias y Destrezas</th>
			<th>Actividad Formativa</th>
			<th>Evaluación</th>
			<th>Documento actividades Doctorando</th>
		</thead>
		<tr>
			<td>1º</td>
			<td>
				CB11. Comprensión sistemática de un campo de estudio.<br>
				CB14 Capacidad de análisis crítico <br>
				CB15 Capacidad de comunicación.<br>
				CA01. Manejo en contextos con poca información.<br>
				CA02. Resolver problemas complejos.<br>
				CE11. Conocer y aplicar instrumentos de evaluación (en su caso)<br>

			</td>
			<td>
				1. Seminarios.<br>
				2. Conferencias.<br>
				3Cursos instrumentales y transversales: Documentación en psicología.<br>

			</td>
			<td>
				- Entrega del PI<br>
			</td>
			<td>
				Documento 1 PI .<br><br>
				Otros indicadores (registro de asistencia a los seminarios, conferencias y cursos, con indicación de horas)<br>

			</td>
		</tr>
		<tr>
			<td>2º</td>
			<td>
				CB12. Capacidad de investigación en psicología.<br>
				CB15 Capacidad de comunicación. <br>
				CA03. Diseñar proyectos innovadores<br>
				CA04. Trabajar en equipo.<br>
				CE12. Conocer programas de intervención (en su caso)<br>

			</td>
			<td>
				3. Cursos instrumentales y transversales. Comunicación y Producción Científica. <br>
				4. Escuela de Verano.<br>

			</td>
			<td>
				Presentación oral de la revisión bibliográfica critica
			</td>
			<td>
				Otros indicadores (registro de asistencia a los seminarios, conferencias y cursos)<br>
				Certificado de presentación en la Escuela de Verano. <br>

			</td>
		</tr>
		<tr>
			<td>3º</td>
			<td>
				CB13.Capacidad para ampliar conocimiento.<br>
				CB17. Conocimiento y aplicación principios deontológicos.<br>
				CE13. Aplicar estrategias de intervención (en su caso)<br>

			</td>
			<td>
				1. Seminarios.<br>
				2. Conferencias.<br>
				3. Cursos instrumentales y transversales. Procedimientos y Dilemas en una Investigación Ética.<br> 
				6. Estancia en otros centros de investigación (dependiendo de financiación)<br>

			</td>
			<td>
				- Entrega del diseño de la tesis (selección de la muestra, previsión de recogida y análisis de datos, resultados previstos…).
			</td>
			<td>
				Documento 2 DAD (Diseño de la investigación) <br>
				Otros indicadores (registro de asistencia a los seminarios, conferencias y cursos )<br>
				Documentos de consentimiento informado (personas), autorización de comités éticos, compromiso devolución de resultados...<br>
				Documento de garantía de originalidad del trabajo.<br>
				Certificado de estancia en centros de investigación.<br>
				Memoria de estancia en centros de investigación.<br>
			</td>
		</tr>
		<tr>
			<td>4º</td>
			<td>
				CB14 Capacidad de análisis crítico <br>
				CB15 Capacidad de comunicación. <br>
				CA05. Integrar conocimientos complejos<br>
				CE14. Saber implementar evaluación de programas (en su caso)<br>

			</td>
			<td>
				1. Seminarios.<br>
				2. Conferencias.<br>
				4. Escuela de Verano.<br>
				5. Congresos  nacionales o internacionales del campo  de investigación<br>
				6. Estancia en otros centros de investigación (dependiendo de financiación).<br>

			</td>
			<td>
				Presentación oral del trabajo realizado (recogida y análisis de datos, análisis exploratorios…)
			</td>
			<td>
				Otros indicadores (registro de asistencia a los seminarios, conferencias y cursos Certificado de presentación en la Escuela de Verano.<br>
				Certificado de asistencia y presentación en el congreso.<br>
				Certificado de estancia en centros de investigación.<br>
				Memoria de estancia en centros de investigación.<br>

			</td>
		</tr>
		<tr>
			<td>5º</td>
			<td>
				CB16. Capacidad de fomentar el avance científico.<br>
				CA06. Crítica y defensa intelectual de soluciones.<br>
				CE15. Contribuir difusión prácticas profesionales adecuadas (en su caso).<br>

			</td>
			<td>
				1.  Seminarios.<br>
				2. Conferencias<br>

			</td>
			<td>
				Informe de avances de tesis doctoral
			</td>
			<td>
				Otros indicadores (registro de asistencia a los seminarios, conferencias y cursos Carta del -director de tesis.<br>
				Documento 3 portfolio (informe de avances de la tesis).<br>

			</td>
		</tr>
		<tr>
			<td>6º</td>
			<td>
				CB14 Capacidad de análisis crítico <br>
				CB15 Capacidad de comunicación. <br>
				CB16. Capacidad de fomentar el avance científico.<br>
				CA06. Crítica y defensa intelectual de soluciones.<br>
				CE16. Evaluar la aplicación de resultados de investigación (en su caso).<br>

			</td>
			<td>
				4. Escuela de Verano
			</td>
			<td>
				Presentación oral del trabajo  (avance defensa de la tesis)<br>
				Defensa tesis doctoral<br>
			</td>
			<td>
				Certificado de presentación en la Escuela de Verano.<br>
				Certificado defensa tesis Doctoral.<br>
			</td>
		</tr>
	</table>

	<br>
	<h4>Estudiantes a tiempo parcial (ETP)</h4>
	<table class="table table-bordered">
		<thead>
			<th>Semestre</th>
			<th>Competencias y Destrezas</th>
			<th>Actividad Formativa</th>
			<th>Evaluación</th>
			<th>Documento actividades Doctorando</th>
		</thead>
		<tr>
			<td>1º</td>
			<td>
				CB11. Comprensión sistemática de un campo de estudio.<br>
				CB14 Capacidad de análisis crítico <br>
				CB15 Capacidad de comunicación.<br>
				CA01. Manejo en contextos con poca información.<br>
				CA02. Resolver problemas complejos.<br>
				CE11. Conocer y aplicar instrumentos de evaluación (en su caso)<br>

			</td>
			<td>
				1. Seminarios.<br>
				2. Conferencias.<br>
				3. Cursos instrumentales y trans- versales: Documentación en psicología.<br>

			</td>
			<td>
				- Entrega del proyecto de tesis con revisión bibliográfica crítica (Comisión Académica).
			</td>
			<td>
				Documento 1 PI .<br><br>

				Otros indicadores (registro de asistencia a los seminarios, conferencias y cursos, con indicación de horas)

			</td>
		</tr>
		<tr>
			<td>2º</td>
			<td>
				CB12. Capacidad de investigación en psicología.<br>
				CB15 Capacidad de comunicación. <br>
				CA03. Diseñar proyectos innovadores<br>
				CA04. Trabajar en equipo.<br>
				CE12. Conocer programas de intervención (en su caso)<br>

			</td>
			<td>
				3. Cursos instrumentales y transversales. Comunicación y Producción Científica. <br>
				4. Escuela de Verano.<br>

			</td>
			<td>
				Presentación oral de la revisión bibliográfica critica
			</td>
			<td>
				Otros indicadores (registro de asistencia a los seminarios, conferencias y cursos)<br>
				Certificado de presentación en la Escuela de Verano. <br>

			</td>
		</tr>
		<tr>
			<td>3º y 4º</td>
			<td>
				CB13.Capacidad para ampliar conocimiento.<br>
				CB17. Conocimiento y aplicación principios deontológicos.<br>
				CE13. Aplicar estrategias de intervención (en su caso)<br>

			</td>
			<td>
				1. Seminarios.<br>
				2. Conferencias.<br>
				3. Cursos instrumentales y transversales. Procedimientos y Dilemas en una Investigación Ética. <br>
				6. Estancia en otros centros de investigación (dependiendo de financiación)<br>

			</td>
			<td>
				- Entrega del diseño de la tesis (selección de la muestra, previsión de recogida y análisis de datos, resultados previstos…).
			</td>
			<td>
				Documento PI 
				Otros indicadores (registro de asistencia a los seminarios, conferencias y cursos )<br>
				Documentos de consentimiento informado (personas), autorización de comités éticos, compromiso devolución de resultados...<br>
				Documento de garantía de originalidad del trabajo.<br>
				Certificado de estancia en centros de investigación<br>
				Memoria de estancia en centros de investigación.<br>

			</td>
		</tr>
		<tr>
			<td>5º y 6º</td>
			<td>
				CB14 Capacidad de análisis crítico <br>
				CB15 Capacidad de comunicación. <br>
				CA05. Integrar conocimientos complejos<br>
				CE14. Saber implementar evaluación de programas (en su caso)<br>

			</td>
			<td>
				1. Seminarios.<br>
				2. Conferencias.<br>
				4. Escuela de Verano.<br>
				5. Congresos  nacionales o internacionales del campo  de investigación<br>
				6. Estancia en otros centros de investigación (dependiendo de financiación).<br>

			</td>
			<td>
				Presentación oral del trabajo realizado (recogida y análisis de datos, análisis exploratorios…)
			</td>
			<td>
				Otros indicadores (registro de asistencia a los seminarios, conferencias y cursos Certificado de presentación en la Escuela de Verano.<br>
				Certificado de asistencia y presentación en el congreso.<br>
				Certificado de estancia en centros de investigación.<br>
				Memoria de estancia en centros de investigación.<br>
			</td>
		</tr>
		<tr>
			<td>7º y 8º</td>
			<td>
				CB16. Capacidad de fomentar el avance científico.<br>
				CA06. Crítica y defensa intelectual de soluciones.<br>
				CE15. Contribuir difusión prácticas profesionales adecuadas (en su caso).<br>

			</td>
			<td>
				1.  Seminarios.<br>
				2. Conferencias<br>
				5. Congresos  nacionales o internacionales del campo  de investigación<br>
				6. Estancia en otros centros de investigación (dependiendo de financiación)<br>

			</td>
			<td>
				Informe de avances de tesis doctoral
			</td>
			<td>
				Otros indicadores (registro de asistencia a los seminarios, conferencias y cursos Carta del -director de tesis.<br>
				DAD (informe de avances de la tesis).<br>
				Certificado de asistencia y presentación en el congreso.<br>
				Certificado de estancia en centros de investigación.<br>
				Memoria de estancia en centros de investigación.<br>

			</td>
		</tr>
		<tr>
			<td>9º y 10º</td>
			<td>
				CB14 Capacidad de análisis crítico <br>
				CB15 Capacidad de comunicación. <br>
				CB16. Capacidad de fomentar el avance científico.<br>
				CA06. Crítica y defensa intelectual de soluciones.<br>
				CE16. Evaluar la aplicación de resultados de investigación (en su caso).<br>

			</td>
			<td>
				4. Escuela de Verano
			</td>
			<td>
				Presentación oral del trabajo  (avance defensa de la tesis)<br>
				Defensa tesis doctoral<br>
			</td>
			<td>
				Certificado de presentación en la Escuela de Verano.<br>
				Certificado defensa tesis Doctoral.<br>
			</td>
		</tr>
	</table>



	@elseif ( $step == 4 )
	<h3>Lista de actividades formativas organizadas por el Programa de Doctorado</h3><br/>
	<br>
	<div class="container">
		<div class="col-sm-1">
			<img src="{{ url('img/doc.png') }}"/>
		</div>
		<div class="col-sm-11 text-left">
			<br>
			<p>Ver documento Anexo: <a href="files/act14-15.docx">ACTIVIDADES FORMATIVAS 2013-14 Y 2014-15</a></p>
		</div>
	</div>

	@else
	<h3>Acciones de movilidad específicas para la actividad que se describe</h3><br/>
	<p>
		Dentro de este apartado hay que distinguir entre la movilidad de los/as estudiantes del programa y la movilidad del profesorado. 
	</p>
	<p>
		Con respecto a la movilidad de los/as, estudiantes la Facultad de Psicología tiene firmados ya acuerdos de movilidad de estudiantes (incluyendo estudiantes de Doctorado con un conjunto de universidades norteamericanas (ver apartado xx y documentos anexos). En este mismo sentido, se firmarán acuerdos específicos de Movilidad para el nivel de Doctorado. con las universidades con las que ya existen acuerdos de movilidad de estudiantes para los niveles de Grado y Máster. 
	</p>
	<p>
		En el caso del Doctorado ello no ha sido posible por no estar aprobado el Programa. En el caso del profesorado, es posible realizar esta movilidad en el marco de los acuerdos con las universidades norteamericanas mencionadas más arriba y en el del Programa de Movilidad del Profesorado (Erasmus). Ambos tipos de acuerdos permiten la participación en la Escuela de Verano de profesores/as procedentes de universidades europeas, norteamericanas y de otras regiones. Igualmente, hay que destacar la participación en el programa de Doctorado de profesores de universidades de otros países (ver apartado de Internacionalización).
	</p>

	@endif
</div> <!-- /.col -->


</div> <!-- /.row -->
@stop