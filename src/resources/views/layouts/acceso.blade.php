@extends('layouts.base')

@section('title')
Acceso y admisión
@stop

@section('header')
Acceso y admisión
@stop

@section('content')
<div class="row">
	<div class="col-md-3 col-sm-4">
		<div class="portlet">
			<div class="portlet-header">
				<h3>
					<i class="fa fa-reorder"></i>
					Acceso y admisión
				</h3>
			</div> <!-- /.portlet-header -->
			<div class="portlet-content">
				<ul class="icons-list">
					<li>
						<i class="icon-li fa fa-angle-right"></i>
						<a href="{{ url('acceso?s=1') }}">Sistemas de Información
							previa</a>
						</li>
						<li>
							<i class="icon-li fa fa-angle-right"></i>
							<a href="{{ url('acceso?s=2') }}">Requisitos de acceso</a>
						</li>
						<li>
							<i class="icon-li fa fa-angle-right"></i>
							<a href="{{ url('acceso?s=3') }}">Admisión</a>
						</li>
						<li>
							<i class="icon-li fa fa-angle-right"></i>
							<a href="{{ url('acceso?s=4') }}">Complementos de formación</a>
						</li>
					</ul>
				</div> <!-- /.portlet-content -->
			</div> <!-- /.portlet -->

		</div> <!-- /.col -->
		<div class="col-md-9 col-sm-8">

			@if ( $step == 1 )
			<h2>Sistemas de información previa</h2>
			<br>
			<h4>
			Procedimiento admisión – Estudios de Doctorado Universidad de Sevilla
			</h4>
			<p>
			La información que se muestra a continuación es un resumen a modo de información previa para los estudiantes de nuevo ingreso.
			</p>
			
			<br>
			<h4>
			Admisión al programa de doctorado
			</h4>
			<p>
			Los estudiantes que deseen ser admitidos al programa deberán:
			<ul>
				<li>
				Cumplir con los requisitos generales de acceso. Aquellos estudiantes que posean un título universitario obtenido conforme a sistemas educativos extranjeros, fuera del EEES, tendrán que solicitar previamente la autorización a la Universidad de Sevilla. Véase:<a href="http://www.doctorado.us.es/acceso/titulos-extranjeros">http://www.doctorado.us.es/acceso/titulos-extranjeros</a>
				</li>
				<li>
				Solicitar la admisión al programa de doctorado mediante plataforma web de admisión a los estudios de doctorado (<a href="http://www.admisiondoctorado.us.es">http://www.admisiondoctorado.us.es</a>) en los plazos establecidos en el calendario de matrícula. Para formalizar la solicitud de admisión, una vez cumplimentado el formulario on-line, el estudiante deberá presentar en el Registro General de la Universidad de Sevilla una copia pdf generada por la plataforma web acompañada de ladocumentación general y específica antes de la finalización del plazo de admisión. Aquellos estudiantes que por limitaciones geográficas no pudieran presenta la documentación por Registro, podrán remitir la documentación digitalizada mediante email a la Comisión Académica del programa en los plazos de admisión establecidos para cada curso académico.
				</li>
				<li>
				Una vez comunicada la aceptación de admisión al programa, realizar la matrícula en concepto de tutela académica en la Unidad Responsable de la Gestión de los Estudios de Doctorado así como, en aquellos casos que proceda, la matrícula de los complementos de formación indicados por la Comisión Académica del programa.
				</li>
				<li>
				En caso de no admisión, el estudiante podrá solicitar la admisión en otro programa de doctorado.
				</li>
			</ul>

			<p>
			<b>Más información</b> en: <a href="http://www.doctorado.us.es/acceso">http://www.doctorado.us.es/acceso</a><br>
			Calendario de admisión: <a href="http://www.doctorado.us.es/matricula/calendario-de-matricula">http://www.doctorado.us.es/matricula/calendario-de-matricula</a>
			</p>


			<br>
			<h4>
			Información matrícula
			</h4>
			<p>
			Los estudiantes que hayan sido admitidos al programa deberán formalizar su matrícula en concepto de tutela académica en la Unidad Responsable de la Gestión de los Estudios de Doctorado mediante impresos normalizados (impreso matrícula y compromiso documental).
			</p>
			<p>
			Aquellos estudiantes cuya admisión quede condicionada a la superación de complementos formativos establecidos por la Comisión Académica del programa, deberán formalizar la matrícula de estos complementos en el mismo momento en que realizan la matrícula de tutela académica.
			</p>
			<p>
			<b>Más información</b> en: <a href="http://www.doctorado.us.es/matricula/nuevo-ingreso#enprogramas">http://www.doctorado.us.es/matricula/nuevo-ingreso#enprogramas</a><br>
			Calendario de matrícula: <a href="http://www.doctorado.us.es/matricula/calendario-de-matricula">http://www.doctorado.us.es/matricula/calendario-de-matricula</a>
			</p>
			
			<hr>
			<br>
			<h3>
			Información dirigida a estudiantes de nuevo ingreso
			</h3>
			<p>
			La Universidad de Sevilla, a través de la web del Servicio de Doctorado, informa de todo lo referente a los estudios de Doctorado en el siguiente enlace: <a href="www.doctorado.us.es">www.doctorado.us.es</a>
			</p>
			<p>
			De forma pormenorizada, ofrece información a todos los usuarios/as sobre la normativa y oferta formativa (desglosada en los planes de programas de doctorado y líneas de investigación vigentes); así como, orientación al estudiante (acceso, admisión, calendario de matriculación, becas y ayudas, información académico-administrativa,...) y a los órganos responsables de los programas en todo lo relativo a los estudios de Doctorado.
			</p>
			<p>
			Los estudios de Doctorado actualmente se encuentran regulados por el Real Decreto 99/2011, de 28 de enero, por el que se regulan las enseñanzas oficiales de doctorado; normativa que incorpora como novedades respecto a ordenaciones anteriores:
			</p>
			<p>
			Nuevos requisitos de acceso que flexibilizan la entrada a los estudios de doctorado.
			</p>
			<p>
			Establece la duración de los estudios junto al régimen de dedicación del estudiante:
			</p>
			<ul>
				<li>
				Estudiante a tiempo completo: 3+1+1 o Estudiante a tiempo parcial: 5+2+1
			Nuevos documentos para el seguimiento de actividades del doctorando:
				</li>
				<li>
				Plan de investigación (sustituye al proyecto de tesis). o Compromiso documental.
				</li>
				<li>
				Documento de actividades del doctorando.
				</li>
				<li>
				Mención Internacional en el Título de Doctor: sustituye al "Doctor Europeo", con requisitos similares.
				</li>
				<li>
				Procedimiento de evaluación de la tesis:
					<ul>
						<li>
						El tribunal debe estar compuesto por una mayoría de miembros externos.
						</li>
						<li>
						Tesis (evaluación cuantitativa) + documento de actividades del doctorando (evaluación cualitativa).
						</li>
					</ul>
					<p>
					Esta normativa encuentra su desarrollo en la Universidad de Sevilla:
					<p>
				</li>
				<li>
				Acuerdo 9.1/CG 19-4-12por el que se aprueba la Normativa reguladora del régimen de tesis doctoral
				</li>
				<li>
				Acuerdo 7.2/CG 17-6-11 por el que se aprueba la Normativa de Estudios de Doctorado conforme a lo establecido en el R.D. 99/2011. 
				</li>
			</ul>
			<br>
			<p>
			Para cualquier <b>consulta relacionada con el programa de doctorado</b>:<br>
			Manuel L. de la Mata Benítez<br>
			Coordinador Programa de Doctorado en Psicología. Universidad de Sevilla<br>
			+34-954557697<br>
			<a href="mailto:Doctorado_psicologia@us.es">Doctorado_psicologia@us.es</a><br>
			</p>
			<p>
			Para <b>cuestiones administrativas</b>: <a href="http://www.doctorado.us.es/directorio-de-contacto">http://www.doctorado.us.es/directorio-de-contacto</a>
			</p>
			<p>
			Enlace <b>guía doctorados</b>: <a href="www.doctorado.us.es/impresos/2014_guia_general_doctorandos.pdf">www.doctorado.us.es/impresos/2014_guia_general_doctorandos.pdf</a>
			</p>

			<hr>
			<br>
			<h3>
			Información estudiantes matriculados
			</h3>
			<br>
			<h4>
			EVALUACIÓN DEL PI Y DAD
			</h4>
			<p>
			Una vez realizada la matrícula de tutela, antes de la finalización del primer curso académico, el estudiante deberá elaborar y entregar el Plan de Investigación (PI) y el Documento de Actividades del Doctorando (DAD); documentos que deberá ir cumplimentando a lo largo de su permanencia en el programa.
			</p>
			<p>
			La evaluación positiva del PI y DAD son condiciones necesarias para renovar la matrícula de tutela el próximo curso académico. En el caso de estudiantes con admisión condicionada a la superación de complementos formativos, además deberán superar dichos complementos para poder continuar en el programa.
			</p>
			<p>
			Enlace a la información del PI y DAD:
			<a href="http://www.doctorado.us.es/evaluacion">http://www.doctorado.us.es/evaluacion</a>
			</p>
			<p>
			<b>RÉGIMEN DE PERMANENCIA (cambios de modalidad, bajas por enfermedad, bajas temporales)</b>
			</p>
			<p>
			Véase:
			<a href="http://www.doctorado.us.es/impresos/normativa/NORMATIVA_DEDICACI ON_Y_PERMANENCIA_US.pdf">http://www.doctorado.us.es/impresos/normativa/NORMATIVA_DEDICACI ON_Y_PERMANENCIA_US.pdf</a>
			</p>

			<br>
			<h4>
			DESARROLLO TESIS DOCTORAL
			</h4>
			<p>En el <b>proceso</b> de desarrollo de la tesis doctoral, el estudiante tendrá como
			interlocutores:
			</p>
			<ul>
				<li>
				<b>Servicio de Doctorado</b>: encargado de la gestión administrativa; desde la matrícula en un programa hasta la expedición del título de Doctor.
				</li>
				<li>
				<b>Comisión Académica</b>: es la responsable de la definición, actualización, calidad y coordinación del programa, así como del progreso de la investigación y de la formación y de la autorización de la presentación de la tesis.
				</li>
				<li>
				<b>Coordinador del programa</b>: responsable de la gestión académica del programa y encargado de resolver las dudas y/o consultas que surjan del programa.
				</li>
				<li>
				<b>Tutor del doctorando</b>: es el encargado de la adecuación de la formación y de la actividad investigadora a los principios de los programas; tutor y director pueden coincidir.
				</li>
				<li>
				<b>Director</b>: es el máximo responsable en la conducción del conjunto de las tareas de investigación del doctorando.
				</li>
			</ul>
			<p>
			Asimismo, en el siguiente enlace dispone de una guía de buenas prácticas que recoge conjunto de recomendaciones y compromisos sobre la práctica científica y técnica que tiene lugar entre director/es, tutor y doctorando, constituyendo un instrumento colectivo de autorregulación destinado a favorecer la fluidez, calidad, transparencia, el comportamiento ético, así como prevenir dificultades en las relaciones que se establezcan durante el proceso de dirección y ejecución de la tesis.
			</p>
			<p>
			<a href="www.doctorado.us.es/impresos/verificacion/C%C3%93DIGO_BUENAS_PRA CTICAS_web.pdf">www.doctorado.us.es/impresos/verificacion/C%C3%93DIGO_BUENAS_PRA CTICAS_web.pdf</a>
			</p>
			
			<hr>
			<br>
			<h3>
			Perfil de Ingreso
			</h3>
			<br>
			<h4>
			3.1.1.1. Acceso y admisión
			</h4>
			<p>
			Se podrá acceder al Programa de Doctorado en los siguientes casos:
			</p>
			<ul>
				<li>
				Estar en posesión del título oficial de Master correspondiente a las áreas de Ciencias de la Salud o de Ciencias Sociales y Jurídicas, expedido en España u otro expedido por una institución oficial perteneciente al Espacio Europeo de Educación Superior (EEES) que faculte en el país expedidor del título para el acceso a enseñanzas de Doctorado.
				</li>
				<li>
				Los Titulados de Masters de Ciencias de la Salud o de Ciencias Sociales y Jurídicas realizados conforme a sistemas educativos ajenos al EEES podrán acceder al Programa de Doctorado sin necesidad de homologar sus títulos. Previamente, la Universidad deberá comprobar que acreditan un nivel de formación equivalente a los correspondientes títulos universitarios oficiales españoles y que la titulación obtenida faculta, en el país expedidor del título, para el acceso a enseñanzas de Doctorado. El acceso por esta vía no implicará en ningún caso la homologación del título previo de que esté en posesión el interesado, ni su reconocimiento a otros efectos que el de cursar las enseñanzas de Doctorado.
				</li>
				<li>
				Para el acceso a los estudios de Doctorado en Psicología desde titulaciones de Master correspondientes a áreas diferentes a las Ciencias de la Salud o a las Ciencias Sociales y Jurídicas, la Comisión Académica del Programa de Doctorado decidirá tras la comprobación de una serie de capacidades y conocimientos previos exigidos a todo estudiante del programa de Doctorado, y que se detallan en el siguiente apartado.
				</li>
			</ul>

			<br>
			<h4>3.1.1.2. Conocimientos y capacidades previos
			</h4>
			<ol type="a">
				<li>
				Idiomas El desarrollo del programa de doctorado se hará en castellano, aunque se utilizará el inglés instrumentalmente en todos aquellos textos científicos, conferencias, cursos y/o seminarios que se consideren oportunos. Para ello el/la estudiante de doctorado debe acreditar al menos un nivel B1 de conocimientos, tanto de castellano como de inglés.
				</li>
				<li>
				Conocimientos Sobre la Psicología como disciplina científica, sus distintos modelos teóricos, conocimientos sobre procesos psicológicos básicos, sus etapas de desarrollo, fundamentos biológicos de la conducta humana y de las funciones psicológicas, principios psicosociales que intervienen en el comportamiento y principios y procesos básicos del funcionamiento de la personalidad y de la psicopatología. Asimismo, deberá
			conocer métodos y diseños de investigación y técnicas de análisis e interpretación de datos propios de la Psicología y relevantes para el trabajo profesional.
				</li>
				<li>
				Capacidades
				<p>
				El alumno/a de doctorado debe ser capaz de demostrar una serie de capacidades que se detallan a continuación:
				</p>
				<ul>
					<li>
					c.1) Sobre manejo y generación de información científica. El estudiante de doctorado sabrá: distinguir información relevante e irrelevante en una situación real o simulada para la consecución de una meta profesional concreta; tener capacidad de análisis y síntesis de información; formular hipótesis para explicar una situación y establecer procedimientos válidos para su comprobación; llegar a conclusiones válidas a partir de datos empíricos; localizar información concreta, explícita e implícita en textos escritos y discursos orales, organizando dicha información y construyendo conocimiento a partir de ella. Igualmente deberá ser capaz de: integrar conocimiento declarativo de diferente naturaleza procedente de distintas disciplinas, contextos y fuentes; traducir conocimientos declarativos teóricos en pautas de análisis y acción ante situaciones concretas, tales como hipótesis, estrategias, etc.; conocer y/o elaborar modelos para la comprensión de la realidad; formular valoraciones y propuestas originales ante los modelos teóricos y aportaciones científicas existentes; utilizar las diversas tecnologías de la información y la comunicación manejando, a nivel de usuario, el software de uso más frecuente en la práctica profesional y en la investigación científica; planificar y realizar búsquedas bibliográficas o de referencias tanto en bases de datos informatizadas como en bibliotecas, hemerotecas o docimotecas.
					</li>
					<li>
					c.2) Sobre recursos propios y manejo del contexto. Tendrá capacidad de: detectar necesidades, limitaciones y recursos en conjuntos humanos; plantearse metas y actuar en consonancia con las mismas; argumentar de forma verbal y/o escrita las propias actuaciones; modificar pautas generales de actuación en función de condiciones personales y/o contextuales; optimizar los recursos con los que se cuenta; valorar las consecuencias de la propia actuación y adoptar las modificaciones pertinentes; generar ideas originales y soluciones nuevas; adaptarse a un entorno cambiante, afrontando nuevas tareas y responsabilidades, y generando procesos de cambio; valorar críticamente la exactitud y adecuación de los resultados alcanzados. Del mismo modo deben haber desarrollado habilidades de aprendizaje necesarias para continuar aprendiendo a lo largo de toda la vida con un alto grado de autonomía, y tomar conciencia de los propios conocimientos y limitaciones, así como desarrollar procedimientos y estrategias para compensar o superar las limitaciones propias.
					</li>
					<li>
					c.3) Sobre capacidades comunicativas y de trabajo en equipo. Deben ser capaces de: transmitir información, ideas, problemas y soluciones propias de su ámbito académico y profesional a un público tanto especializado como no especializado; usar con precisión y corrección el lenguaje oral y escrito; percibir similitudes y diferencias entre puntos de vista; buscar conclusiones de consenso superadoras; comprender del punto de vista ajeno, aunque no sea compartido; extraer conclusiones personales a partir de discusiones de grupo; aceptar la diferencia de puntos de vista en un grupo; valorar aportaciones de otras disciplinas y profesionales afines y ser capaz de trabajar en equipos interdisciplinares; desarrollar capacidades de liderazgo e iniciativa; perseguir la excelencia en las actuaciones profesionales e investigadoras.
					</li>
				</ul>
				</li>
			</ol>

			@elseif ( $step == 2 )
			<h2>Requisitos de acceso</h2>
			<p clas="lead">&nbsp;</p>
			<p>
			Enlace al perfil recomendado para el alumnado de nuevo ingreso y al número de plazas de nuevo ingreso.
			</p>
			<br>
			<h3>
			Requisitos de acceso y criterios de admisión
			</h3>
			<br>
			<h4>
			Requisitos generales de acceso
			</h4>
			<p>
			Con carácter general, para acceder al programa de doctorado regulado por el R.D. 99/2011 será necesario, según lo dispuesto en su artículo 6:
			</p>
			<ul>
				<li>
					Estar en posesión de los títulos oficiales españoles de Grado, o equivalente, y de Máster Universitario.
					Asimismo, podrán acceder a un programa de doctorado quienes se encuentren en alguno de los siguientes supuestos:
				</li>
				<li>
					Estar en posesión de un título universitario oficial que habilite para el acceso a Máster y haber superado un mínimo de 300 créditos ECTS, de los que al menos 60 deben de ser de nivel de Máster. Más información: Resolución rectoral por la que se establecen equivalencias de créditos y valoración de nivel de máster
				</li>
				<li>
					Estar en posesión de un título oficial español de Graduado/a, de al menos 300 ECTS y cursar complementos de formación, salvo que el plan de estudios cursado incluyera créditos de formación en investigación equivalentes a los de Máster.
				</li>
				<li>
					Los titulados universitarios que, previa obtención de plaza en formación sanitaria especializada, hayan superado con evaluación positiva al menos dos años de formación en el programa.
				</li>
				<li>
					Estar en posesión de un título obtenido conforme a sistemas educativos extranjeros, sin necesidad de su homologación, previa comprobación por la universidad de que éste acredita un nivel de formación equivalente a la del título oficial español de Máster Universitario y que faculta en el país expedidor del título para el acceso a estudios de doctorado. Esta admisión no implicará la homologación del título previo ni su reconocimiento a otros efectos.
				</li>
				<li>
					Estar en posesión de otro título español de Doctor.
				</li>
				<li>
					Ser estudiante de doctorado conforme a anteriores ordenaciones universitarias previa admisión de la universidad correspondiente, de acuerdo con lo establecido en el RD 99/2011 y en la normativa de la propia universidad.
				</li>
				<li>
					Licenciados, Arquitectos o Ingenieros que estuvieran en posesión del Diploma de Estudios Avanzados obtenido de acuerdo con lo dispuesto en el R.D. 778/1998 o hubieran alcanzado la suficiencia investigadora regulada en el R.D. 185/1985.
				</li>
			</ul>



			@elseif ( $step == 3 )
			<h2>Admisión al programa</h2>
			<br>
			<p>
			Para ser estudiante de doctorado debes realizar los siguientes pasos que se detallan en la siguiente dirección web en los plazos que establezca la Unidad Responsable de la Gestión de los Estudios de Doctorado
			</p>
			<p>
			<a href="http://www.doctorado.us.es/acceso">http://www.doctorado.us.es/acceso</a> 
			</p>
			<p>
			<a href="http://www.doctorado.us.es/impresos-y-formularios">http://www.doctorado.us.es/impresos-y-formularios</a>
			</p>
			<br>
			<h4>
			Contacto para consultas relacionadas con el programa
			</h4>
			<p>
			Manuel L. de la Mata Benítez
			<br>
			Coordinador Programa de Doctorado en Psicología. Universidad de Sevilla
			<br>
			+34-954557697
			<br>
			<a href="mailto:doctorado_psicologia@us.es">doctorado_psicologia@us.es</a>
			<br>
			<br>
			<h4>
			Contacto para consultas administrativas
			</h4>
			<p>
			<a href="http://www.doctorado.us.es/directorio-de-contacto">http://www.doctorado.us.es/directorio-de-contacto</a>
			</p>

			<br>
			<h4>
			Documentación general a aportar
			</h4>
			<p>
			Véase: <a href="http://www.doctorado.us.es/acceso">http://www.doctorado.us.es/acceso</a> (Apartado Documentación general a aportar)
			</p>
			<br>
			<h4>
			Documentación específica requerida por la Comisión Académica del programa:
			</h4>
			
			<p>
			Junto a la solicitud de admisión y la documentación general se debe adjuntar para la admisión al programa de doctorado:
			</p>
			<ul>
				<li>
				Currículum Vitae completo y actualizado, detallando la experiencia profesional e investigadora del candidato, con acreditación de los méritos presentados.
				</li>
				<li>
				Carta motivada en la que se exprese el interés del candidato por cursar el programa de doctorado y por la realización de la tesis doctoral en este ámbito.
				</li>
				<li>
				 Copia de algún trabajo de investigación realizado por el/la candidata/a: publicaciones, Trabajo Fin de Máster o equivalente.
				</li>
				<li>
				Carta de recomendación firmada por algún/a profesor/a del Programa de Doctorado o por algún miembro de otra institución (académica) nacional o internacional.
				</li>
			</ul>
			<br>
			<h4>
			PROCEDIMIENTO DE ADMISIÓN
			</h4>
			<p>
			El órgano encargado de la admisión al programa es la Comisión Académica del mismo
			</p>
			
			<br>
			<h4>
			CRITERIOS DE ADMISIÓN AL PROGRAMA DE DOCTORADO
			</h4>
			<p>
			Requisitos específicos de admisión al programa
			</p>
			<p>
			Además de los requisitos generales expuestos anteriormente, la Comisión Académica del programa de doctorado en Psicología establece los siguientes requisitos específicos de admisión al mismo.
			</p>
			<ul>
				<li>
				Estar en posesión del título oficial de Máster correspondiente a las áreas de Ciencias de la Salud o de Ciencias Sociales y Jurídicas, expedido en España u otro expedido por una institución oficial perteneciente al Espacio Europeo de Educación Superior (EEES) que faculte en el país expedidor del título para el acceso a enseñanzas de Doctorado o, en su caso, haber cursado 60 créditos de un título oficial de Máster de las áreas anteriores, tal como establece el RD 99/2011, de 28 de enero, por el que se regulan las enseñanzas oficiales de doctorado.
				</li>
				<li>
				Los Titulados de Másteres de Ciencias de la Salud o de Ciencias Sociales y Jurídicas realizados conforme a sistemas educativos ajenos al EEES podrán acceder al Programa de Doctorado sin necesidad de homologar sus títulos. Previamente, la Universidad deberá comprobar que acreditan un nivel de formación equivalente a los correspondientes títulos universitarios oficiales españoles y que la titulación obtenida faculta, en el país expedidor del título, para el acceso a enseñanzas de Doctorado. El acceso por esta vía no implicará en ningún caso la homologación del título previo de que esté en posesión el interesado, ni su reconocimiento a otros efectos que el de cursar las enseñanzas de Doctorado.
				</li>
				<li>
				Para el acceso a los estudios de Doctorado en Psicología desde titulaciones de Máster correspondientes a áreas diferentes a las Ciencias de la Salud o a las Ciencias Sociales y Jurídicas, la Comisión Académica del Programa de Doctorado decidirá tras la comprobación de una serie de capacidades y conocimientos previos exigidos a todo estudiante del programa de Doctorado, y que se detallan en el siguiente apartado.
				</li>
			</ul>

			<br>
			<h4>
			BAREMO DE ADMISIÓN
			</h4>
			<p>
			El baremo que aplicará la Comisión Académica del Programa de Doctorado en Psicología incluye los siguientes apartados:
			</p>
			<ol>
				<li>
				Competencias de investigación y profesionales relevantes para el Doctorado en Psicología (60%). Para evaluar este apartado se tienen en cuenta los siguientes aspectos:
					<ol type="a">
						<li>
						Competencias para la realización y difusión de los resultados de los trabajos de investigación.
						</li>
						<li>
						Experiencia profesional relevante.
						</li>
						<li>
						Inserción en líneas de investigación del Programa de Doctorado en Psicología.
						</li>
						<li>
						Competencias relacionadas con las metodologías y técnicas de investigación.
						</li>
					</ol>
				</li>
				<br>
				<li>
				Otros méritos y competencias relevantes para el Doctorado en Psicología (40%). Para evaluar este apartado se tienen en cuenta los siguientes aspectos:
				<ol type="a">
					<li>
					Conocimientos de idiomas.
					</li>
					<li>
					Otra formación específica para el Doctorado en Psicología.
					</li>
					<li>
					Motivación, interés y disponibilidad para el Doctorado en Psicología. d. Movilidad.
					</li>
				</ol>
				</li>
			</ol>

			<br>
			<h4>
			ASIGNACIÓN TUTOR Y/O DIRECTOR DE TESIS
			</h4>
			<p>
			Una vez admitido el candidato al programa de doctorado, la Comisión Académica del mismo procederá a revisar su curriculum vitae, su carta de motivación y otros documentos pertinentes y a partir de ellos procederá a la asignación de un tutor de entre los profesores del programa. Esta primera asignación será revisable en los primeros seis meses a solicitud del doctorando o del profesor. El profesor tutor asesorará al doctorando durante el primer año del programa de doctorado, especialmente en lo que se refiere a la identificación de temáticas de investigación que permitan la adscripción a un director de tesis doctoral.
			</p>
			<p>
			El tutor o tutora, una vez conocidas las expectativas del doctorando, analizará la disponibilidad de directores, la posibilidad de direcciones compartidas, la existencia de proyectos de investigación con capacidad de acoger un doctorando, disponibilidad de espacio y demás recursos, etc. Con esta información y en el contexto de un “proceso negociado”, se propone un/a director/a o directores de tesis y se solicitará la aceptación formal del mismo o de los mismos. Podrán tutelar y dirigir tesis doctorales, profesores del programa de doctorado con experiencia acreditada mediante el cumplimiento del requisito de tener reconocido al menos un sexenio de actividad investigadora o, en el caso de profesorado contratado, su equivalente según los parámetros de valoración de la Comisión Nacional Evaluadora de la Actividad Investigadora para la concesión de sexenios en los diferentes campos. En los casos en que la temática de la tesis doctoral lo justifique, podrán actuar como co-directores/as de ésta profesores/s que no cumplan los criterios anteriores.
			<p>
			Se fomentará, asimismo, la participación como co-directores de expertos internacionales con los que existan vínculos de investigación por parte del profesorado del programa.
			</p>
			@else
			<h2>Complementos de formación</h2>
			<br>
			<p>			
			Los/as estudiantes de doctorado que procedan de programas en los que la Comisión académica entienda que no hay suficiente formación metodológica deberán de cursar durante el primer año de su formación doctoral uno o varios módulos de metodología (según proceda) en los Másteres Universitarios Oficiales ofertados en la Facultad de Psicología (incluidos, por tanto, dentro de la oferta de la Universidad de Sevilla). La formación metodológica mínima será de 32 créditos ECTS, entre los cuáles se computarán los créditos cursados en grado y máster. Esto implica que un alumno que haya cursado el Grado en Psicología de la Universidad de Sevilla y un máster de la misma facultad deberá realizar en torno a 100 horas de formación metodológica adicional (4 ECTS). Los módulos que se podrán cursar en el ámbito de la formación reglada que ya ofrece la Facultad de Psicología son los siguientes:
			</p>
			<ul>
				<li>
				Análisis Exploratorio de Datos (Máster Estudios Avanzados en Cerebro y Conducta) (5 ECTS)
				</li>
				<li>
				Construcción y análisis de ítems para pruebas psicológicas (Máster Estudios Avanzados en Cerebro y Conducta) (5)
				</li>
				<li>
				Métodos cuantitativos y Deterioro Cognitivo (Máster Estudios Avanzados en Cerebro y Conducta) (5)
				</li>
				<li>
				Análisis de Datos e Investigación en Contextos Familiares (Máster en Intervención y Mediación Familiar) (5)
				</li>
				<li>
				Herramientas Metodológicas para la Investigación e Intervención Psicoeducativas (Máster en Psicología de la Educación) (4)
				</li>
				<li>
				Metodología de la investigación comunitaria (Máster en Psicología de la Intervención Social y Comunitaria) (4)
				</li>
				<li>
				Diseño y Medición de la Intervención y la Evaluación Clínica y de la Salud (4)
				</li>
				<li>
				Herramientas Metodológicas Avanzadas en la Intervención y la Evaluación (4)Clínica y de la Salud (Máster Universitario en Psicología de la Salud (4).
				</li>
				<li>
				Análisis Multivariante en Psicología de las Organizaciones y del Trabajo (Máster en Psicología de las Organizaciones y el Trabajo) (8)
				</li>
			</ul>
			<p>
			El máximo de formación complementaria metodológica que podrá ser asignada a un alumno serán 18 ECTS
			</p>
			@endif
		</div> <!-- /.col -->


	</div> <!-- /.row -->
	@stop