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
					<li>
						<i class="icon-li fa fa-angle-right"></i>
						<a href="{{ url($section.'?s=4') }}">Instalaciones al servicio del programa de doctorado</a>
					</li>
				</ul>
			</div> <!-- /.portlet-content -->
		</div> <!-- /.portlet -->

	</div> <!-- /.col -->
	<div class="col-md-9 col-sm-8"> @if ( $step == 1 )
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
		</ul> @elseif ( $step == 3 )
		<h3>Información sobre convenios que regulen la participación de otras entidades en el desarrollo de las actividades investigadoras</h3><br/>
		<p>
			Cotutela de tesis: <a href="http://www.doctorado.us.es/tesis-doctoral/cotutela-de-tesis">http://www.doctorado.us.es/tesis-doctoral/cotutela-de-tesis</a>
		</p>
		
		@else
		
		<h3>Instalaciones al servicio del programa de doctorado</h3><br/> <p>
		Recursos disponibles: La Facultad de Psicología se ubica en el Edificio San Francisco Javier. Este edificio está compartido la Facultad de Filosofía y con el Aula de la Experiencia de la Universidad de Sevilla. En él se ubican la Secretaría, el Decanato de la Facultad, los despachos del Profesorado, la biblioteca y los laboratorios, así como las aulas. La dirección es la calle Camilo José Cela, s/n, 41018, Sevilla.
	</p> <p>
	A continuación se detallan los recursos e instalaciones necesarios para el buen desarrollo de los estudios de Doctorado.  
</p> <p>
Instalaciones:
</p> 
<ol>
	<li>
		<b>Aulas</b>: Todas las aulas cuentan con sistema de sonido, magnestoscopio, televisión,  proyector de diapositivas, PC con equipos multimedia, conexión a internet y cañón de  vídeo.  
		<ul>
			<li>
				Número total de aulas. La facultad dispone de 24 aulas diferentes, entre las que se encuentran aulas grandes y pequeñas, informatizadas y seminarios. Además posee una Aula de Grados y un Salón de Actos</li>
				<li>
					Aulas grandes. Hay 3 aulas grandes, con una capacidad para 214, 184 y 178 personas, respectivamente. La primera que hemos señalado se usa como Aula Magna.
				</li>
				<li>
					Aulas pequeñas Disponemos de 13 aulas pequeñas que varían en capacidad,con un aforo que oscila entre 58 y 85 personas.
				</li>
				<li>
					Seminarios. La Facultad cuenta con un total de 4 seminarios. Todos los seminarios cuentan con sillas móviles, ordenador con conexión a red y cañones de proyección, además de pizarras convencionales. Cada uno de los seminarios tiene una capacidad aproximada de entre 20 y 40 plazas.
				</li>
				<li>
					Aula de Grados. Se emplea para conferencias y charlas, para seminarios de formación (ver Actividades formativas) y para defensa de tesis doctorales.
				</li>
				<li>
					Salón de Actos. Se emplea para conferencias y actos oficiales. Tiene capacidad para más de 300 personas.
				</li>
			</ul>
		</li>
		<br><br>
		<li>
			<b>Aulas de informática</b>. La Facultad de Psicología cuenta con 3 aulas informatizadas  para prácticas en las que se emplea software específico o simulaciones de  experimentos, programas para diagnóstico, experiencias, procesos, etc. Estas aulas  cuentan con 45 puestos informáticos dos de ellas y 55 la tercera. Cada una dispone de  un equipo audiovisual conectado al ordenador del profesor. En general, las aulas  informatizadas están destinadas a docencia, pero se reservan módulos horarios,  especialmente en el aula A, para que puedan ser utilizados de modo libre por el  alumnado, pero con supervisión. El horario de estos módulos varía semanalmente en  función de los horarios de las asignaturas regladas y de otras necesidades docentes  que puedan requerir estas aulas (Cursos de Doctorado, recuperación de clases,  Máster, etc.), por ello, los horarios de libre acceso quedan expuestos semanalmente  junto a las aulas y en conserjería. 
		</li>
		<br><br>
		<li>
			<b>Laboratorios</b>. La Facultad cuenta en la actualidad con varios espacios de  laboratorios y servicios centrales para docencia práctica e investigación. Son tres los  laboratorios con los que se cuenta en estos momentos:<br>
			<ul>
				<li>
					3.1. Laboratorio de Psicología Experimental es un conjunto de varios módulos de  laboratorios para Análisis de Conducta Animal, Psicología Fisiológica y  Psicofisiología Humana, que pueden ser conectados al equipo audiovisual de un aula  central. Más específicamente, el equipamiento con el que cuentan los diferentes  módulos es el siguiente:
					<ol type="a">
						<li>
							<b>Módulo I del Laboratorio de Conducta Animal y Neurociencia</b>.
							<p>
								Este módulo está diseñado y equipado para el estudio experimental del  comportamiento y sus bases neurales y para llevar a cabo estudios experimentales en  torno al aprendizaje por condicionamiento clásico. Ha sido recientemente inaugurado  (octubre de 2012) tras una importante ampliación y reforma gracias a una ayuda de  infraestructura de un importe total de 408.119,42 € concedida por la Junta de  Andalucía (Ref. INFRA2008-26566). Las reformas se han realizado respetando la  normativa vigente para la estabulación y la experimentación con animales así como la  normativa de seguridad.
							</p>
							<p>
								Cuenta con el equipo necesario para el desarrollo de actividades relacionadas con el  registro conductual (cajas de Skinner, laberintos, cajas de actividad…) y con el  estudio en torno a la aversión y las preferencias condicionadas al sabor; y con todo el  material imprescindible para el estudio del tejido nervioso mediante la utilización de  un gran número de técnicas (registro, lesión, bloqueo selectivo de canales, análisis de  la actividad celular y molecular). También cuenta con equipamiento diseñado para  evaluar el condicionamiento palpebral con participantes humanos y con un sistema de  detección de la respuesta muscular orbicular también en humanos.
							</p>
							<p>
								En la actualidad el laboratorio ocupa un total de 170 metros cuadrados en los que se  incluyen dos zonas de estabularios independientes (con capacidad para 150 roedores  y 50 aves, respectivamente), una sala de limpieza dotada de todo el material  necesario para el mantenimiento y cuidado de los animales, una zona de  almacenamiento y una sala de cuarentena.
							</p>
							<p>
								Por lo que se refiere a los espacios específicamente dedicados a la investigación, el  laboratorio cuenta con 10 salas aisladas en las que se encuentra instalado el siguiente  material de investigación:
								<ul>
									<li>
										8 cámaras de experimentación para el análisis de la conducta en palomas
									</li>
									<li>
										4 cámaras de experimentación para el análisis de la conducta en roedores
									</li>
									<li>
										4 cámaras de experimentación para el análisis de la inhibición pre-pulso y del  condicionamiento del miedo
									</li>
									<li>
										4 cámaras de experimentación para el análisis de la respuesta emocional  condicionada por supresión de la respuesta de “licking”
									</li>
									<li>
										16 cajas de experimentación para el análisis de la aversión condicionada al  sabor (formando dos conjuntos de 8 con contextos claramente diferenciados)
									</li>
									<li>
										Sistema de registro electrofisiológico para animales en libertad
									</li>
									<li>
										2 Microscopios de fluorescencia
									</li>
									<li>
										Microtomo y criostato
									</li>
									<li>
										Equipo de cirugía compuesto por aparato estereotáxico, micromanipulador,  visor de aumentos Zeiss, sistema de acceso a tejido, luz fría y esterilizador.
									</li>
									<li>
										Equipo de perfusión compuesto por bomba peristáltica.
									</li>
									<li>
										Sistemas de hibridación in situ.
									</li>
									<li>
										Campanas extractoras de gases
									</li>
									<li>
										Sistemas de uso general: agitadores, calentadores y balanza de precisión.
									</li>
									<li>
										Además de las salas en las que se encuentra el material de investigación, el  Laboratorio cuenta con una zona para investigadores con un total de 50 metros  cuadrados y una zona de baños y ducha.
									</li>
								</ul>
								<br><p>A continuación se reproducen los planos del laboratorio:</p>
								<center><img src="/img/plano.png" style="max-width: 100%;" /></center>
							</li>
							<br>
							<li>
								<b>Módulo II del Laboratorio de Psicología Fisiológica</b>.
								<p>
								Este módulo de laboratorio está dotado de equipo de intervención intracerebral,  equipo histológico y equipo de análisis conductual. Más concretamente, al igual que  el resto de los laboratorios, este módulo dispone de cámaras de vídeo y de conexión  por cable al sistema audiovisual del Aula Central que permiten la grabación de las  experiencias o su visualización simultánea en dicha aula. Además este modulo cuenta  con un equipo de estimulación y lesión intracerebral compuesto de estimulador  intracerebral con unidad de aislamiento de la casa WPI y osciloscopio digital de la casa HAMEG; equipamiento de neurohistología compuesto de destilador de agua, estufa, agitador magnético, balanza de precisión, PH-metro, frigorífico-congelador, diverso material de vidrio y modelos anatómicos en material plástico del cerebro humano; 
								</p> 
							</li>
							<br>
							<li>
								<b>Módulo III del Laboratorio de Psicofisiología y Psicobiología Humana</b>.
								<p>
								Este módulo comprende está orientado hacia el estudio de la psicofisiología de la  atención en sujetos adultos y niños/as y los déficit atencionales que se pueden  observar en diversas patologías (principalmente esclerosis múltiple). Igualmente se  analiza el desarrollo madurativo del EEG humano. Para ellos se utilizan técnicas de  registro electrofisiológico y conductuales en sujetos adultos y niños.
								</p>
								<p>
								Este modulo está dotado con equipamiento de registro psicofisiológico y sistemas de  presentación de estímulos auditivos y visuales para sujetos humanos. Consta de una  cámara experimental con aislamiento electromagnético (caja de Faraday) donde se  sitúa el sujeto experimental y una sala contigua donde se encuentran los instrumentos  de registro, separadas por un cristal unidireccional. Además, el laboratorio dispone de  equipamiento para el registro de las señales psicofisiológicas más comunes  (electromiografía, electroencefalografía, electrooculografía, resistencia/conductancia  de la piel, etc.) y de bioamplificadores diferenciales con ganancia y filtros variables  que permiten su empleo en un amplio conjunto de aplicaciones. Se cuenta con un  amplificador de 64 canales de EEG para registros de alta densidad en sujetos  humanos y software para el estudio de diversos parámetros de la señal de EEG  (potenciales evocados, densidad de potencia espectral, coherencia, event-related  desynchronization y wavelet). También se dispone de un sistema de registro  psicofisiológico de la casa Coulbourn, compuesto de 4 bioamplificadores, con  ganancia variable, con filtros pasa-banda para medida de EEG, ECG, EMG, SPR,  etc.; medidor de resistencia de la piel; medidor de conductancia de la piel; medidor  de temperatura y respiración; módulo contador integrador y tacómetro. Sistema de  medición de la presión sanguínea, espirómetro de agua, estesiómetro, dinamómetros  de mano. Se dispone asimismo de un sistema de adquisición a ordenador de las  señales psicofisiológicas flexible y de fácil empleo.
								</p>
								<p>
								Por último, este módulo del laboratorio dispone de un sistema de presentación de  estímulos auditivos y visuales controlable por ordenador y un equipo TRACK- WALKER diseñado para la recogida y análisis de señales electrofisiológicas tanto  para la docencia como para la investigación neurofisiológica y la práctica clínica.  Además se cuenta con programa de estimulación cognitivo Eprime para el diseño y  aplicación de diversos paradigmas experimentales atencionales.
								</p>
							</li>
							<br>
							<li>
								<b>Aula central del Laboratorio Con capacidad para 68 estudiantes</b>, dotada de sistema audiovisual. Cuenta además con  una cabina de control audiovisual que dispone de equipamiento que permite la  grabación, mezcla y conmutación de las señales de vídeo y audio procedente de las  cámaras de los laboratorios adyacentes. Incluye mesa de mezclas vídeo/audio, vídeo Hi- 8, vídeo VHS, monitor TV color, cámaras CCD color (instaladas en los laboratorios),  ordenador PC conectado a Internet y micrófono inalámbrico de mano. Esta aula central  cuenta también con 29 microscopios binoculares de laboratorio, iluminación alógena de  6V 20W, objetivos acromáticos de 4, 10, 40 y 100 y un microscopio con videocámara  incorporada de la marca LEICA, modelo DMLS + ICCA.  
							</li>
						</ol>
					</li>
					<br>
					<li>
						3.2. El Laboratorio II está destinado a usos múltiples y para el trabajo con grupos  reducidos.  
					</li>
					<br>
					<li>
						3.3. El Laboratorio III incluye una sala de observación que consta de una sala tipo plató,  que dispone de un completo equipo de grabación de audio y vídeo, de una sala de  control adyacente y de un aula con equipamiento audiovisual separada de la Sala de  Observación mediante un cristal unidireccional (Aula II o Aula de Observación). Se  dedica fundamentalmente al estudio de grupos, sesiones terapéuticas simuladas o reales  y a la observación de comportamiento humano. Además de estos laboratorios se dispone  de otros servicios, como una Videoteca o sala de visión de vídeo, que en la actualidad se  encuentra disponible para todos los miembros de la Facultad en la Biblioteca del  edificio. 
					</li>
				</ul>

			</li>
			<br><br>
			<li>
				<b>Espacios para trabajo individual y en equipos de los estudiantes</b>:  
				<ul>
					<li>
						4.1. Sala de lectura y Sala de Trabajo en Grupo: Se trata de una sala de la Biblioteca que  está situada en la planta alta del edificio y reservada para la lectura y el estudio. La Sala  consta de 175 puestos de lectura y varios puntos de acceso informatizados, así como una  zona para Trabajo en grupo de 20 plazas.
					</li>
					<br>
					<li>
						4.2. Sala de Libre acceso: situada en la planta baja de la biblioteca. Cuenta con 68  puestos de consulta y lectura para trabajo individual y varios puntos de acceso  informatizados.
					</li>
					<br>
					<li>
						4.3. Sala de investigadores: Situada en la zona de Depósito de la biblioteca. De uso  restringido y con autorización expresa de la Dirección, previa presentación de los  documentos pertinentes y aceptación de las normas correspondientes. Cuenta con 12  puestos de consulta.
					</li>
				</ul>
			</li>
			<br><br>
			<li>
				<b>Biblioteca</b>. La Biblioteca está situada en el edificio central de San Francisco Javier
				<ul>
					<li>
						5.1 Fondo bibliográfico de la biblioteca. Está constituido por más de 65.000 volúmenes  que incluyen manuales, monografías especializadas, obras de referencia, tesis  doctorales, y material no librario como microformas, videos y tests. Además, cuenta con  965 títulos de publicaciones periódicas en papel y en formato electrónico. 
					</li>
					<br>
					<li>
						5.2 La biblioteca consta de las tres salas anteriormente señaladas (Sala de lectura y de  trabajo en grupo, sala de libre acceso y sala de investigadores), además de una  Hemeroteca y una Docimoteca.  • Hemeroteca. La primera, Con acceso por la Sala de Lectura, tiene una capacidad  de 40 puestos de lectura. Es de libre acceso y está reservada para la consulta tanto  de revistas y publicaciones periódicas como de obras de referencia.  • Docimoteca. Ubicada en la planta alta de la biblioteca, como parte integrante de la  sala de investigación, está dedicada a la consulta de tests y es de uso restringido a  profesores, investigadores y alumnos acompañados de un profesor. Cuenta con  más de 400 tests diferentes que permiten la evaluación de una amplia gama de  aspectos psicológicos como la personalidad, la inteligencia, la motivación o la  creatividad, entre otros; pero también aspectos neuropsicológicos, pedagógicos y  de diagnóstico de trastornos. 
					</li>
					<br>
					<li>
						5.3 Servicios. Dentro de los servicios que propone la biblioteca está el préstamo a  domicilio e interbibliotecario y la consulta y acceso a bases de datos e Internet. Además,  ofrece un servicio de préstamos de ordenadores portátiles. Así mismo, la biblioteca pone a disposición de los usuarios cursos introductorios y  especializados de formación en el manejo de los diferentes recursos de la biblioteca así  como de bases de datos especializadas. Estos cursos están dirigidos principalmente a  alumnos de segundo y tercer ciclo y profesores.
					</li>
				</ul>
			</li>
		</ol>
		@endif
	</div> <!-- /.col -->


</div> <!-- /.row -->
@stop