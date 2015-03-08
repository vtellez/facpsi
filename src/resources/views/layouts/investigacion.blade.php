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
		<br>
		<h3>
			Línea 1
		</h3>
		<p class="lead">
			Aprendizaje, Neurociencia y Evolución
		</p>
		DESCRIPCIÓN DE LA LÍNEA:
		Esta línea de investigación se ha planteado con el objetivo de atender a la formación de doctores con un amplio conocimiento de las leyes que rigen el comportamiento, atendiendo fundamentalmente a los procesos de aprendizaje desde el punto de vista de la psicología comparada y a la relación funcional del mismo con el sistema nervioso desde una visión integradora. Consideramos que la conducta y el sistema nervioso interaccionan de forma continua para dar lugar a nuevos comportamientos adaptativos y tan sólo una visión global en la que conducta y sistema nervioso se colocan en el mismo nivel explicativo puede dar lugar a una explicación adecuada del aprendizaje y el comportamiento. Con este objetivo, esta línea de investigación formará a los alumnos con la intención de mejorar el conocimiento actual sobre las técnicas de estudio de la conducta y el sistema nervioso desde una aproximación experimental al estudio de los fenómenos que integran el comportamiento y sus bases cerebrales.
		Esta línea cuenta con una larga, sólida y visible tradición de docencia e investigación en la Facultad de Psicología de la Universidad de Sevilla, tal y como la continuada participación en proyectos de investigación financiados en convocatorias nacionales y autonómicas, la frecuente participación de los miembros del equipo de investigación en cursos de especialización de diverso tipo (Máster, Experto, Especialista) en otras Universidades españolas, las publicaciones en libros y revistas de impacto y la participación previa de todo el profesorado en el Programa de Doctorado con Mención de Calidad bajo el título Aprendizaje y Cognición. Estos datos constituyen además un índice de la existencia de una demanda continuada de formación en estos ámbitos, así como una muestra de la capacidad de nuestro profesorado para hacer frente a dicha demanda.
		Nos parece que la denominación Aprendizaje, evolución y neurociencia recoge con claridad nuestra identidad docente e investigadora, ofrece una perspectiva innovadora de las Ciencias de la Conducta en ámbito de la neurociencia, y proporcionará a la sociedad investigadores con una clara visión integradora de la conducta y sus bases biológicas.

		DESCRIPTORES: 
		Aprendizaje, Psicología comparada, Neurociencia, Comportamiento, Historia de la Psicología, Evaluación psicofisiológica.

		PROYECTOS EN VIGOR QUE AVALAN LA LÍNEA:
		- Un estudio comparado del efecto de factores motivacionales y emocionales sobre la preexposicion no reforzada de estimulos. Responsable: Luis Gonzalo de la Casa Rivas. Tipo de proyecto: Plan nacional I+D. Número de investigadores: 5.
		Cuantía total: 60.000 € (concedido provisional) Responsable: Luis Gonzalo de la Casa Rivas. Tipo de proyecto: Plan Nacional de 2012. Referencia:PSI2012-32077
		Fecha inicio: 1-1-2013. Fecha finalización: 31-12-2015.
		- Análisis Experimental de los Bucles Corticoestriatales en la Expresión de Inhibición Latente. Responsable: Juan Carlos López García. Tipo de Proyecto: Plan Nacional del 2012. Referencia: PSI2012-32445. Fecha de Inicio: 01-01-2013. Fecha de Finalización: 31-12-2015.Empresa/Organismo financiador/es: Ministerio de Economía y Competitividad. Número de investigadores: 7

		Proyectos anteriores financiados en relación con la línea (IP): 
		- Evaluación de neuroprotectores basados en aciletanolamidas en modelos animales de hipóxia cerebral perinatal y adulta (CNPMA/MAT/055). La Fundació La Marató de TV3. IP: Manuel Portavella García. Nº de investigadores: 8. Fecha de Inicio: 01-02-2012. Fecha de Finalización: 31-01-2015.
		- Laboratorio de conducta animal. Responsable: Luis Gonzalo de La Casa Rivas
		Tipo de Proyecto: Proyectos de infraestructura (Junta de Andalucía). Número de investigadores: 11. Cuantía total: 408.119,42 € Referencia: INFRA2008-26566
		Fecha de Inicio: 31-01-2008. Fecha de Finalización: 30-11-2012
		- Análisis de la codificación tridimensional del espacio en el sistema hipocámpico.
		Responsable: Juan Pedro Vargas Romero. Número de investigadores: 4
		Cuantía total: 30.976 € Tipo de Proyecto: Plan Nacional del 2009. Referencia: PSI2009-12761. Fecha de Inicio: 01-01-2010. Fecha de Finalización: 31-12-2012
		- Efectos de la preexposición no reforzada de sabores sobre el condicionamiento gustativo. Responsable: Luis Gonzalo de La Casa Rivas. Tipo de Proyecto: Plan Nacional del 2009. Número de investigadores: 5. Cuantía total: 96.800 € Referencia: PSI2009-07536 Fecha de Inicio: 01-01-2010 Fecha de Finalización: 31-12-2012.
		- Modulación dopaminérgica de la inhibición prepulso por la presentación de estímulos novedosos y reforzantes en roedores y en humanos. Responsable: Luis Gonzalo de La Casa Rivas. Tipo de Proyecto: Proyectos de Excelencia de la Junta de Andalucía. Número de investigadores: 11. Cuantía total: 152.763,08 € Referencia: P07-SEJ-02618. Fecha de Inicio: 31-01-2008. Fecha de Finalización: 31-12-2012
		- Análisis de procesos asociativos y atencionales en humanos empleando el condicionamiento palpebral (SEJ2006-01489).
		- El papel del contexto en la modulación temporal de la inhibición latente (SEJ2004-00065)
		- El papel de contexto temporal y espacial en la recuperación de información irrelevante (SEJ2004-0408-E)
		- Inhibición latente en humanos empleando un procedimiento de condicionamiento palpebral (BSO2002-01136)
		- Análisis experimental de los mecanismos psicológicos de la inhibición latente (BSO2000-0323-C02-01)
		- Generación automática de ITEMS para la evaluación renovable de materias universitarias metodológicas (BSO2001-3855)
		- Bases neurobiológicas de la inhibición latente: estudio de las interacciones del hipocampo y la amígdala en el núcleo accumbens (SEJ2006-01713).
		- Las investigaciones de W.H. y H.S. Liddell acerca de las neurosis experimentales y su importancia para la psiquiatría norteamericana (1930-1950) (SEJ2006-14090-C02-01)
		- Un análisis histórico de la influencia de I.P. Pavlov en la psicología y la psiquiatría del siglo XX (BSO2002-01533)

		EQUIPOS DE INVESTIGACIÓN QUE AVALAN LA LINEA:
		Equipo 1:
		PROFESORES QUE AVALAN LA LINEA: Luis Gonzalo de la Casa Rivas, Rafael Moreno Rodríguez, Gabriel Ruiz Ortiz
		Equipo 2:
		PROFESORES QUE AVALAN LA LINEA: Juan Carlos López García, Manuel Portavella, Juan Pedro Vargas Romero.
		OTROS PROFESORES QUE AVALAN LA LÍNEA:, Andres García García, Héctor Martínez Sánchez, Patricio O’Donell, Nestor Schmajuk, Eva Mª Trigo Sánchez. Sánchez.

		<hr>
		<br>
		<h3>
			Línea 2
		</h3>
		<p class="lead">
			Desarrollo Neurocognitivo, Neuropsicología, Trastornos Neurológicos y Dificultades en el Desarrollo de la Cognición y el Lenguaje
		</p>
		DESCRIPCIÓN DE LA LÍNEA:
		La presente línea aborda el estudio de los procesos neurocognitivos y sus alteraciones. Incluye, de este modo, el análisis psicológico y neurológico tanto en el contexto del desarrollo típico como del atípico. 
		Así, un componente importante se centra en la investigación orientada al estudio del desarrollo neurológico normal, con especial interés en los procesos atencionales y de memoria.
		Al mismo tiempo, también se pone un fuerte énfasis en las posibles alteraciones psicológicas que pueden producirse por factores sobrevenidos o evolutivos en el desarrollo neurológico. Se incluyen aquí, posibles trastornos  relacionados con el funcionamiento neurológico derivados del daño cerebral adquirido, tanto en población infantil como adulta. Al mismo tiempo, se incorporan otros trastornos neuroevolutivos sin daño cerebral sobrevenido asociado, pero con una evidente base neurológica, como pueden ser los trastornos del espectro autista, del aprendizaje y los trastornos específicos del lenguaje, entre otros. A ello se añade la investigación en trastornos cuyo origen primario puede no tener un carácter neurológico, pero con impacto evidente en el desarrollo de procesos neurocognitivos o del lenguaje. Es el caso de la sordera o del estudio la modulación de las condiciones socioeconómicas y culturales sobre el desarrollo de los procesos cognitivos y lingüísticos y sus alteraciones.

		DESCRIPTORES:
		Neuropsicología, desarrollo neurocognitivo, desarrollo cerebral y neuronal, daño cerebral, trastornos neurológicos, trastornos neuroevolutivos, trastornos del aprendizaje, trastornos del espectro autista, trastornos del lenguaje, discapacidad auditiva y sordera, trastornos motores, dislexia.

		PROYECTOS EN VIGOR QUE AVALAN LA LÍNEA:
		- Adaptación del Inventario de Desarrollo Comunicativo (Cdi) de Macarthur-Bates a la Lengua de Signos Española (P11-SEJ-7417). Investigadora principal: Isabel de los Reyes Rodríguez Ortiz.
		- Language and perception (FP7-PEOPLE-2012-ITN-316748 – Investigador Principal. David Saldaña Sage.
		- Cost Action “Enhancing children's oral language skills across Europe and beyond: a collaboration focusing on interventions for children with difficulties learning their first language [IS1406] Investigador Principal. David Saldaña Sage." http://www.cost.eu/COST_Actions/isch/Actions/IS1406?management
		:- Evaluación Psicofisiológica y Conductual de las Alteraciones de la Memoria de Trabajo en el Trastorno por Déficit de Atención (PSI2013-47506-R) Plan nacional de I+D, convocatoria RETOS. Entidad financiadora: MICINN. Duración, desde Enero de 2014 hasta Diciembre de 2016. IP: Carlos M. Gómez González.

		Proyectos anteriores financiados en relación con la línea (IP):
		-Índices Psicofisiológicos de la Evolución Ontogenética de la Memoria de Trabajo en Niños/as y Jóvenes Adultos (PSI2010-17523). IP: Carlos M. Gómez González. Enero 2011 – Diciembre 2013.
		- Language and Perception (LanPercept). Acción Marie Curie dentro del P7-PEOPLE-2012-ITN.IP (Universidad de Sevilla): David Saldaña Sage.Enero 2013 – Diciembre 2016. Financiación del proyecto: € 468,579.89 (Universidad de Sevilla) - € 4,152,363.18 (Total del Proyecto).
		- Comprensión e Inferencias Pragmáticas y Referenciales en los Trastornos del Espectro Autista y del Lenguaje (PSI2010-17401) – Plan Nacional I+D+i – MICINN. Enero 2011 – Diciembre 2013. IP: David Saldaña Sage.- € 90750.
		- WorkPackage 5. (Efectos del entorno social y cultural sobre los procesos cognitivos y educativos) (CSD2008-00048) – CONSOLIDER-INGENIO2010. IP (Universidad de Sevilla): David Saldaña Sage. Marzo 2010 – Diciembre 2013.€ 15900 (Universidad de Sevilla).
		- Dificultades de Comprensión Lectora en Personas con Discapacidad Auditiva (SEJ-02574) – Consejería de Innovación, Ciencia y Empresa, Junta de Andalucía. – IP: Isabel de los Reyes Rodríguez (David Saldaña Sage – investigador) – Enero 2008 –Enero 2013.
		- Adaptación del Inventario de Desarrollo Comunicativo (Cdi) de Macarthur-Bates a la Lengua de Signos Española (SEJ-7417) – Consejería de Innovación, Ciencia y Empresa, Junta de Andalucía. – IP: Isabel de los Reyes Rodríguez (David Saldaña Sage – investigador). € 66,140.76. 
		- Desarrollo de un test de evaluación psicofisiológica de propósito general. Posibles aplicaciones (SEJ2007-60974)
		- Desarrollo evolutivo de las redes atencionales medido a través de una batería atencional computarizada y registro de EEG. Aplicación al estudio de las alteraciones atencionales de un grupo de niños c (SEJ2004-03326)
		- Dinámica temporal y espectral de la atención. Análisis secuencial de la psicofisiología del ciclo cognitivo-conductual (BSO2001-2383)
		- Coast Extended Renewal-COASTER (ET-4002-COASTER)
		- Modulación de las dimensiones emocionales y la modalidad estudio de neuroimagen con espectroscopia funcional por cuasi-infrarros (PSI2008-04218)
		- Sistema automático de diagnóstico diferencial entre los estados cerebrales de mínima respuesta y con déficit neurocognitivos severos (FIT-300100-2006-77)
		- Sistema automático de diagnóstico diferencial entre los estados cerebrales de mínima respuesta y de estado vegetativo (CIT-300100-2005-37)
		- Approximately Periodic Representation of Stimuli (APEREST) 
		- Dificultades de comprensión en personas con trastorno del espectro autista (SEJ2007-67080) - Plan Nacional I+D+i – MICINN. 

		EQUIPOS DE INVESTIGACIÓN QUE AVALAN LA LINEA:
		Equipo 1. 
		PROFESORES QUE AVALAN LA LINEA: Carlos María Gómez González, José León Carrión y David Saldaña Sage.
		OTROS PROFESORES QUE AVALAN LA LINEA: Francisco Javier Moreno Pérez, Isabel de los Reyes Ortiz Y Joel Talcott (Univ. de Aston, R.U.).

		<hr>
		<br>
		<h3>
			Línea 3
		</h3>
		<p class="lead">
			Desarrollo Psicológico e Intervención Psicoeducativa en la Familia, la Escuela y otros Contextos Evolutivos
		</p>
		LINEA 3
		DESARROLLO PSICOLÓGICO E INTERVENCIÓN PSICOEDUCATIVA EN LA FAMILIA, LA ESCUELA Y OTROS CONTEXTOS EVOLUTIVOS

		DESCRIPCIÓN DE LA LÍNEA:
		La familia es uno de los contextos fundamentales en los que se va forjando el desarrollo Esta línea se centra en el estudio del desarrollo psicológico y sus transiciones a lo largo de los diferentes contextos evolutivos, así como los factores que influyen en él y las posibilidades de intervención optimizadora existentes. Presta especial atención a dos contextos de desarrollo, la Familia y la Escuela, en tanto en cuanto son ámbitos de especial relevancia en nuestras sociedades. Al mismo tiempo, constituyen respectivamente puntos fuertes y de proyección en los equipos de trabajo activos en el programa de Doctorado y que avalan la línea.
		La familia es uno de los contextos fundamentales en los que se va forjando el desarrollo psicológico de sus miembros. Los muy diversos y complejos procesos, tanto personales como de interacción, que se dan en la familia, abren múltiples posibilidades de investigación tanto básica como aplicada. Además, la familia abre el acceso a otros contextos de desarrollo (la escuela, por ejemplo), lo que crea también un terreno propicio para la investigación de relaciones, estilos de vida, etc. El hecho de que los hijos e hijas vivan en la familia las transiciones normativas de la infancia, la adolescencia y la adultez emergente abre la puerta al estudio de los procesos de cambio psicológico tanto por sí mismos, como en relación con el contexto familiar.  
		Por otra parte, la familia puede constituirse y organizarse en una diversidad de estructuras  (por ejemplo, tanto monoparentalidad y homoparentalidad, como configuraciones más tradicionales y las consecuentes a la ruptura-separación familiar ) y estilos, lo que permite poner esa misma diversidad bajo el foco de la investigación. Además, mientras que algunas familias desarrollan sus labores de cuidado, vinculación y estimulación de forma plenamente satisfactoria, otras tienen más dificultades para responder adecuadamente a las necesidades infantiles y adolescentes, pudiendo estar en riesgo de desatenderlas e incluso  desatenderlas gravemente. Se hacen necesarias en estos casos intervenciones tanto preventivas como reparadoras, aunque hay casos en que se hace inevitable la separación de los menores del núcleo familiar de origen y su inserción en familias alternativas (por acogimiento o adopción).  Uno de los dos equipos avalistas tiene una trayectoria consolidada en la investigación de los temas relacionados con familias y desarrollo, incluyendo estilos de vida y transiciones a la adolescencia, la adultez emergente y la vida adulta.
		Por su parte, la escuela constituye un entorno normalizador, principal responsable de la transmisión del conocimiento y lugar privilegiado para contribuir a la optimización del desarrollo socioemocional del alumnado. El análisis y mejora de los procesos psicoeducativos en la escuela y en otros contextos constituyen otro eje central de esta línea de investigación básica y aplicada, apoyada en un segundo equipo avalista con amplia tradición dentro de este ámbito. Se otorga en esta otra dimensión especial protagonismo a la mejora de las relaciones interpersonales y a la convivencia en los centros educativos, hoy también ciberconvivencia. Se incluyen estudios sobre problemas que dificultan el desarrollo de las personas y las comunidades como son la conflictividad escolar, la violencia escolar y el bullying, el ciberbullying, el sexting, las relaciones sentimentales y la violencia, el abandono escolar y menores en riesgo. 
		Del mismo modo, se desarrolla en esta línea investigación destinada a comprender y desarrollar Prácticas Basadas en la Evidencia en el ámbito de la intervención psicoeducativa como son las centradas en las estrategias de afrontamiento y las claves de su eficacia a nivel personal, familiar y educativo; en el desarrollo de la competencia socioemocional, la creatividad e inteligencias múltiples, los procesos de enseñanza-aprendizaje, la alfabetización digital y el uso de seguro de las TIC. Consecuentemente, también se incluye investigación sobre asesoramiento y orientación psicoeducativa, formación del profesorado y Educación, cooperación y desarrollo.

		DESCRIPTORES:
		Desarrollo, educación, familia, escuela, contextos evolutivos, infancia, adolescencia, transiciones evolutivas, estilos educativos, diversidad familiar, estrategias de afrontamiento y resiliencia, prácticas basadas en la evidencia, procesos de enseñanza-aprendizaje, educación familiar, asesoramiento y orientación psicoeducativa, acogimiento, adopción, divorcio y separación, familias monoparentales, familias homoparentales, relaciones interpersonales y convivencia en los centros educativos, alfabetización digital y uso de seguro de las TIC, ciberconvivencia, clima y conflictividad escolar, bullying y violencia escolar, cyberbullying y riesgos en la red, relaciones sentimentales y violencia, menores en riesgo y abandono escolar, competencia socioemocial, creatividad e inteligencias múltiples, formación del profesorado, cooperación y desarrollo.

		PROYECTOS EN VIGOR QUE AVALAN LA LÍNEA:
		- Estilos de Vida, Contextos de Desarrollo y Salud en los Adolescentes Escolarizados Andaluces. Bases para el Diseño de Intervenciones Orientadas al Desarrollo Positivo y la Promoción de Estilos De[...] (SEJ-8007). IP: Mª Carmeno Moreno Rodríguez. Número total de investigadores: 6. Cantidad concedida:  € 139945.80.
		- Sexting, Ciberbullying y Riesgos Emergentes en la Red: Claves para su Comprensión y Respuesta Educativa. Proyecto Excelencia del Ministerio de Economía y Competitividad. (EDU2013-44627-P). Investigadora principal. Rosario del Rey Alamillo. Fecha de inicio: 1-1-2014. Fecha de finalización: 31-12-2016.
		Título del Proyecto: Parejas y Redes de Iguales en la Adolescencia: Un programa de Prevención de la Violencia en las Relaciones Sentimentales. (PSI2013-45118-R). Plan Nacional de I+D (2013-2016). IP: Virginia Sánchez Jiménez. Fecha de inicio: 1-1-2014. Fecha de finalización: 31-12-2016Universidad de Sevilla. 

		Proyectos anteriores financiados en relación con la línea
		- “El Afrontamiento del Cyberbullying: Análisis de las Estrategias Utilizadas y Evaluación de su Impacto”. Financiado por la Junta de Andalucía dentro de la convocatoria a Proyectos de Investigación de Excelencia (SEJ-6156). 2011-2014. Cantidad concedida: 28750€ I.P.: Joaquín A. Mora Merchán. Investigadores implicados de la línea: Rosario Del Rey y Virginia Sánchez (11 investigadores).
		- “Turning Obstacles into opportunities”. Financiado por la UE dentro del programa DAPHNE III. 2012-2014. Cantidad concedida: 477766€ I.P. equipo español: Joaquín A. Mora Merchán. Investigadores implicados de la línea: Rosario Del Rey (2 investigadores en el equipo español)
		- “School Safety Net – SSN” (Lifelong Learning Programme (Unión Europea). (531028-LLP-2012-IT-KA4-KA4MP). Duración: 2012-2014. Cantidad concedida: 399400€I.P. Española Rosario Del Rey. Investigadores implicados de la línea: Joaquín A. Mora Merchán (4 investigadores en el equipo español, 9 equipos nacionales).
		- School Safety Net – SSN (531028-LLP-2012-IT-KA4-KA4MP) Proyecto Europeo del Programa Life Long Learning. Investigadora principal. 
		- “Violencia Escolar y Juvenil: Los Riesgos del Cortejo Violento, la Agresión Sexual y el Cyberbullying (Plan Nacional 2008-2011). (PSI2010-17246). Duración: 2011-2013. Cantidad concedida: 75000€ I.P. Rosario Ortega Ruiz. Investigadores implicados de la línea: Rosario Del Rey, Joaquín A. Mora Merchán y Virginia Sánchez (14 investigadores).
		- European child care and education study (SOE2-CT96-2010). IP: Jesús Palacios González
		- De la adolescencia a la adultez emergente. Un estudio longitudinal sobre trayectorias de vida (SEJ2006-06433). IP: Alfredo Oliva Delgado
		- Evaluación de las nuevas estructuras familiares como contextos de crianza potenciadores del desarrollo psicológico infantil (FBBVA2005-012). IP: Alfredo Oliva Delgado
		- Cambios y continuidad en la adolescencia: un estudio longitudinal sobre trayectorias vitales evolutivas (BSO2002-03022). IP: Alfredo Oliva Delgado
		- Riesgo y protección en los acogimientos en familia extensa: trayectorias vitales y ajuste personal, familiar y social (SEJ2007-65300). IP: Jesús Jiménez Morago. Investigador: Alfredo Oliva Delgado.
		- Proyecto I+D+i en la modalidad de Excelencia: “Evaluación de intervenciones psicoeducativas con familias en situación de riesgo psicosocial. Un análisis de buenas prácticas basadas en la evidencia. Referencia EDU2013-41441-P. Período 2014-1016.
		- Proyecto I+D+i “Evaluación de un programa de intervención psicoeducativa para familias en situación de riesgo psicosocial”. Referencia SEJ2007-66105. Período 2008-2010.
		- “Cyberbullying: coping with negative and enhancing positive uses of new technologies, in relationships in educational settings”. (Acción COST, EU Framework Programme). (IS0801). Duración: 2008-2012. Rosario Del Rey es miembro titular y Joaquín A. Mora-Merchán y Virginia Sánchez miembros suplentes (29 países - 4 miembros nacionales: 2 titulares y dos sustitutos).  
		- “Violencia y cortejo juvenil: un estudio psicoeducativo”. Ministerio de Ciencia e Innovación (Plan Nacional 2004-2007). (SEJ-2007-60603). Duración: 2007-2010. Cantidad concedida: 58564€ I.P. Rosario Ortega Ruiz. Investigadores implicados de la línea: Rosario Del Rey, Joaquín A. Mora Merchán y Virginia Sánchez (15 investigadores).
		- “Violencia Escolar y Bullying en Andalucía (VEA)”. Conserjería de Innovación y Ciencia de la Junta de Andalucía (Proyectos de Excelencia). (HUM-02175).Duración: 2007-2009. Cantidad concedida: 133436.30€I.P. Rosario Ortega Ruiz. Investigadores implicados de la línea: Rosario Del Rey, Joaquín A. Mora Merchán y Virginia Sánchez (8 investigadores).
		- “An investigation into forms of peer-peer bullying at school in pre-adolescent and adolescent groups: New instruments and preventing strategies”. Financiado por la UE dentro del programa DAPHNE II (JLS/2096/DAE-1/241YC30-CE-0120045/00-79). 2007-2009. Cantidad concedida: 37975.69€ (financiación del equipo español).I.P. equipo español: Rosario Ortega Ruiz.  Investigadores implicados de la línea: Joaquín A. Mora Merchán (3 investigadores en el equipo español, 4 equipos nacionales).
		- “Cybertraining: A research-based training manual on cyberbullying” (investigador principal delequipoespañol). Financiado por la UE dentro del programa Leonardo (142237-LLP-1-2008-1-DE-LEONARD). 2008-2010. Cantidad concedida: 308166€ I.P. equipo español: Joaquín A. Mora Merchán. Investigadores implicados de la línea: Rosario Del Rey (4 investigadores en el equipo español, 6 equipos nacionales).
		- “Cyberbullying in adolescence: investigation and intervention in six European countries”. (Daphne Program, Unión Europea). (JLS/2008/DAP3/AG/1211).Duración: 2010-2012. Cantidad concedida: 688745€ I.P. Española Rosario Ortega Ruiz. Investigadores implicados de la línea: Rosario Del Rey. (3 investigadores en el equipo español, 6 equipos nacionales) 
		-  “I Am NotScared”. Financiado por la UE dentro del programa KA1 (511645-2010-LLP-IT-KA1-KA1SCR). 2010-2012. Cantidad concedida: 469965€ I.P. equipo español: Joaquín A. Mora Merchán. Investigadores implicados de la línea: Rosario Del Rey (3 investigadores en el equipo español, 10 equipos nacionales).

		EQUIPOS DE INVESTIGACIÓN QUE AVALAN LA LINEA:
		Equipo 1:
		PROFESORES QUE AVALAN LA LINEA: Carmen Moreno Rodríguez, Alfredo Oliva Delgado y Mª Victoria Hidalgo García.
		Equipo 2:
		PROFESORES QUE AVALAN LA LINEA: Joaquín Mora Merchán, Rosario del Rey Alamillo y Virginia Sánchez Jiménez

		OTROS PROFSORES/AS QUE AVALAN LA LINEA: Águeda Parra Jiménez, Inmaculada Sánchez Quejía y  Phillip Slee (Universidad de Flinders, Australia)


		<hr>
		<br>
		<h3>
			Línea 4
		</h3>
		<p class="lead">
			Intervención Psicológica en Clínica y Salud
		</p>
		DESCRIPCIÓN DE LA LÍNEA:
		En esta línea de investigación se tratan aspectos tradicionalmente centrados en la psicología clínica y de la salud, tanto desde el ámbito hospitalario como ambulatorio y de la comunidad. La identificación de factores de riesgo, de variables causales, y desarrollo de modelos de intervención psicológica y clínica, son una prioridad en los diferentes ámbitos objeto de estudio. Se abordan contenidos acerca de la intervención psicológica y clínica con niños y familias con enfermedades físicas crónicas, adultos con enfermedades oncológicas, esclerosis múltiple, patologías caracterizadas por el dolor crónico como la fibromialgia, formatos de intervención en pacientes con TDAH, en las unidades de quemados (principalmente en la infancia y adolescencia), en general en personas con discapacidad, cuidadores de ancianos, o toda la problemática relacionada con donación y trasplantes de órganos, desde la evaluación, a los factores psicológicos implicados y seguimiento de estos pacientes. Asimismo, se profundiza sobre trastornos tradicionalmente analizados en el ámbito clínico, como los trastornos de la imagen corporal (trastornos de la conducta alimentaria, obesidad, trastorno dismórfico corporal), la somatización, las adicciones comportamentales (fundamentalmente el juego patológico), las adicciones por sustancias o, desde el punto de vista relacional, el análisis de los aspectos implicados en los procesos de violencia, estudio acerca de las víctimas y agresores, situaciones de acoso y maltrato. Un área destacada se refiere al estudio de los procesos y resultados en la psicoterapia, tanto familiar, como de parejas y de grupos, sobre modelos cognitivo-conductuales, narrativos o sistémicos, especialmente en familias en riesgo psicosocial o con procesos de enfermedad crónica.

		DESCRIPTORES:
		intervención psicológica, intervención clínica, enfermedades crónicas, enfermedades oncológicas, esclerosis múltiple, dolor crónico, fibromialgia, TDAH, quemados, discapacidad, cuidadores, donación de órganos, trasplantes de órganos, trastornos de la imagen corporal, trastornos de la conducta alimentaria, obesidad, trastorno dismórfico corporal, somatización,  adicciones, violencia, víctimas, agresores, acoso, maltrato, psicoterapias

		PROYECTOS EN VIGOR QUE AVALAN LA LÍNEA:
		- Título: Programa de Intervención Psico-educativo para aumentar el grado de capacitación de un grupo de padres y madres de recién nacidos pretérmino de riesgo elevado. Código: PI-0290-2013.  Programa financiador: Investigación Biomédica y en Ciencias de la Salud en Andalucía para el año 2013. IP: Eva María Padilla Muñoz. Fecha inicio: 01/01/2014. Fecha fin: 31/12/2016. Cuantía: 46.343,64 €

		Proyectos anteriores financiados en relación con la línea (IP):
		-  Evaluación Psicofisiológica de un Programa de Rehabilitación Cognitiva en Pacientes con Esclerosis Múltiple. Responsable: Manuel Vázquez Marrufo 
		Tipo de Proyecto: Plan Nacional del 2010. Referencia: PSI2010-16825
		Número de investigadores: 8. Cuantía total: 50.000 € Fecha de Inicio: 01-01-2011
		Fecha de Finalización: 31-12-2013.
		- “Factores médicos asociados a las fases pre, peri y postoperatoria del implante que influyen en la salud mental y en la calidad de vida de los trasplantados hepáticos” (Expediente nº PSI2009-07713, subprograma PSIC). Entidad financiadora: Ministerio de Ciencia e Innovación (Resolución de 26 de diciembre de 2008) en la convocatoria de “Ayudas para la realización de proyectos de investigación dentro del Programa Nacional de Proyectos de Investigación Fundamental, en el marco del VI Plan Nacional de Investigación Científica, Desarrollo e Innovación Tecnológica 2008-2011” (BOE 31-12-2008). Duración: enero 2010-diciembre 2012.
		- “Intervención psicológica en pacientes trasplantados” (Expediente nº PI020313). Entidad financiadora: Ministerio de Sanidad y Consumo (Orden 21 de diciembre de 2001) en la convocatoria de “Ayudas del Programa de Promoción de la Investigación Biomédica y en Ciencias de la Salud para la realización de Proyectos de Investigación en el marco del Plan Nacional de I+D+I 2000-2003 del Fondo de Investigación Sanitaria” (BOE 17-1-2002). Duración: noviembre 2002-noviembre 2005.
		- “Algunas variables psicológicas y sanitarias que influyen a largo plazo en la calidad de vida de los trasplantados” (Expediente nº PI060095). Entidad financiadora: Ministerio de Sanidad y Consumo (Resolución de 7 de febrero de 2006) en la convocatoria de “Ayudas del Programa de Promoción de la Investigación Biomédica y en Ciencias de la Salud para la realización de Proyectos de Investigación en el marco del Plan Nacional de I+D+I 2004-2007 del Instituto de Salud Carlos III” (BOE 24-2-2006). Duración: octubre 2006-octubre 2009.
		- “Estrategias para optimizar los resultados en donación y trasplante” (Expediente nº C03/03). Entidad financiadora: Ministerio de Sanidad y Consumo (Orden SCO/709/2002) en la convocatoria de “Ayudas para el Desarrollo de Redes Temáticas de Investigación Cooperativa” (BOE 3-4-2002). Entidades participantes: 21 hospitales de España distribuidos en 11 Comunidades Autónomas con 81 Grupos de Investigación y 734 investigadores que trabajan en trasplantes. Duración: 2003-2005.
		- Estudio aleatorio, controlado y abierto para evaluar la eficacia del neurofeedback en el tratamiento del TDAH frente a un tratamiento conductual y al tratamiento farmacológico estándar. (Referencia: PSI2008-06008-C02-01). Entidad financiadora: Ministerio de Ciencia e Innovación (Plan Nacional i+d+i 2008-2011) (Convocatoria publicada en BOE del 30/11/2007). Entidades participantes:  Universidad de Sevilla, Universidad de las Islas Baleares, Servicio Andaluz de Salud (Distrito Sanitario Sevilla Sur). Duración,  desde:01-01-2009 hasta:30-3-2012. 
		- Estudio comparativo de los tratamientos de neurofeedback, conductuales y farmacológicos aplicados a niños con trastornos hiperactivos y atencionales.  Referencia: P-2007/704. Entidad Financiadora: Comisión de Investigación de la Universidad de Sevilla. III Plan Propio de Investigación. Subvención para la elaboración y presentación de Proyectos de Investigación (i+d+i) Duración: Desde 1/Enero/2008 hasta 31/ Diciembre/2008.
		- Evaluación del déficit atencional en pacientes con esclerosis múltiple (SEJ2007-65343). 

		EQUIPOS DE INVESTIGACIÓN QUE AVALAN LA LINEA:
		Equipo 1: 
		PROFESORES QUE AVALAN LA LINEA: Mª Ángeles Pérez San Gregorio, Inmaculada Moreno García y Manuel Vázquez Marrufo. 

		OTROS/AS PROFESORES/AS QUE AVALAN LA LÍNEA: Agustín Martín Rodríguez, Rafael J. Martínez Cervantes, Eva Mª Padilla Muñoz y Carmen del Rio Sánchez.

		<hr>
		<br>
		<h3>
			Línea 5
		</h3>
		<p class="lead">
			Procesos Psicosociales, Cultura, Diversidad y Ciudadanía
		</p>
		DESCRIPCIÓN DE LA LÍNEA:
		La línea “Ciudadanía, procesos psicosociales, diversidad y cultura” desarrollará conocimiento teórico y empírico acerca de los principales tópicos que relacionan procesos psicológicos, sociales y culturales con la construcción de ciudadanía. Este es un eje en las áreas de humanidades y ciencias sociales del Séptimo Programa Marco Europeo de Investigación y del Horizon 2020. Se enmarca en la colaboración entre diferentes disciplinas, como son la psicología cultural y de la aculturación, psicología social y ecológico-comunitaria, la enfermería psicosocial y transcultural, la psicología feministay de la diversidad. Se dará respuesta a los desafíos que confronta la construcción de identidad y ciudadanía—y la prevención de las desigualdades sociales—en la Unión Europa. Se realizarán estudios que analicen cómo los ciudadanos tratan de enfrentar la limitación de sus derechos y cómo se implican activamente en la vida democrática. Se analizarán los mecanismos psicosociales que subyacen a estrategias de resiliencia ciudadana, incluyendo el papel de la espiritualidad y la religión, expresiones artísticas y culturales, el fortalecimiento de redes sociales y familiares, así como las prácticas comunitarias que fomentan el sentido de cooperación y solidaridad entre los diferentes grupos sociales. Se analizará el papel de la escuela y las prácticas educativas en la construcción de la identidad ciudadana. Se pondrá especial énfasis en los colectivos más vulnerables, como son desempleados, niños y jóvenes, mujeres  que sufren violencia de género, inmigrantes indocumentados, refugiados y buscadores de asilo, victimas del tráfico de humanos, enfermos mentales y personas dependientes. Se desarrollarán evidencias que informen prácticas que adapten los servicios socio-sanitarios y educativos a la diversidad cultural, que los hagan sostenibles y que observen el empoderamiento y las fortalezas de los ciudadanos como los ejes desde los que construir servicios multiculturales, equitativos y de calidad.

		DESCRIPTORES:
		Procesos psicológicos, ciudadanía, cultura, diversidad, sentido de comunidad, cohesión social, desigualdades sociales, relaciones intergrupales, aculturación, empoderamiento, narrativas, identidades, género, resiliencia, salud, servicios socio-sanitarios, bienestar psicológico, ecología humana, innovación social, prácticas basadas en la evidencia,prácticas educativas, competencia cultural,discurso, escenarios socio-culturales. 

		PROYECTOS EN VIGOR QUE AVALAN LA LÍNEA:
		- Proyecto: Competencia Cultural Comunitaria: Profesionales Competentes en Comunidades Diversas (PROCOMDI) Código: PSI2011-25554. Programa financiador: MINISTERIO DE CIENCIA E INNOVACIÓN. Responsable: García Ramírez, Manuel. Fecha inicio: 01/01/2012 - Fecha fin: 30/06/2015. Financiación: 49000€.
		- Proyecto: Adapting European Health Systems to Diversity (ADAPT) - COST European Cooperation in the field of Scientific Research. Fecha inicio: 01/01/2011 - Fecha fin: 31/12/2015.
		“Equi-Health - Fostering health provision for Migrants, the Roma and other vulnerable groups” Sub-action: Migrant Health at Southern Borders
		Funded by the European Commission’s Directorate General for Health and Consumers (DG SANCO
		Position: Researcher 
		Coordinator: Roumyana Petrova-Benedict (IOM Belgium). Manuel García Ramírez Coordinator in Spain.
		Participating institutions: (1) Governmental partners: Ministry of Health, Ministry of Interior, Ministry of Employment/Social Affairs, other governmental partners and relevant committees in participating countries (ex. Italy, Greece, Portugal, Turkey, Bulgaria, Malta, Spain (Catalonia and Andalusia); (2) EU agencies: ECDC, Frontex, FRA (Fundamental Rights Agency, and EASO); (3) IOs: WHO EURO, OHCHR, UNICEF, UNDP, UNFPA; (4) Council of Europe, Migration Division, CAHROM SEEHN and NDPHS; (5) Academic/research networks and public health institutes/schools: ex: COST ADAPT network; NICE (National Institute for health and clinical excellence) UK; Greece, Romania, Andalusia, Italy, Croatia.
		Duration: 2013-2015
		Funding: 12.597€
		- “Culturally Competent Teachers and Medical Education - C2ME” 
		Funded by the Erasmus Lifelong Learning Programme (LLP)
		Position: Researcher 
		Coordinator: Dr. Jeanine Suurmond (Academic Medical Centre, University of Amsterdam, the Netherlands)
		Participating institutions: (1) Academic Medical Centre, University of Amsterdam; (2) VU Medical Centre (The Netherlands); (3) University of Leicester; (4) University of Antwerp; (5) Justus-Liebig-Universität Gießen; (6) Graduate Entry Medical School Limerick, University of Limerick; (7) University of Edinburgh; (8) Hopitaux Universitaires de Geneve; (9) University of Sevilla; (10) University of Copenhagen; (11) University of Pécs Medical School; (12) NAKMI.
		Number of researchers: 28
		Duration: 2013-2015.
		Funding: 13.000€.
		- “Project to Develop Standards for Equity in Health Care for Migrants and other Vulnerable Groups” 
		Funded by the International Network of Health Promoting Hospitals & Health Services
		Position: Manuel García Ramírez. Researcher, Coordinator in Spain 
		Coordinator: Antonio Chiarenza (Health Authority of Reggio Emilia, Italy)
		Duration: 2012-2016

		Proyectos anteriores financiados en relación con la línea (IP):
		- Proyecto: La integración comunitaria de los inmigrantes marroquíes en Andalucía. Factores predictores y propuestas de acción. Código: SEJ2006-14470/PSIC. Ámbito del proyecto: Nacional. Programa financiador: Otros programas del plan nacional I+D, Ministerio de Ciencia y Tecnología
		Responsable: Garcia-Ramirez, Manuel. Fecha inicio: 22/05/2008-Fecha fin: 31/12/2009. Cuantía total: 15000
		- Teón XXI: creación y de recursos on-line para el conocimiento y difusión de la cultura de género en la escuela. Consejería de Innovación, Ciencia y Empresa, Junta de Andalucía (Proyecto de Investigación de Excelencia). Enero 2007- Enero  2010. Investigadora principal: Dra. Mª Ángeles Rebollo Catalán. Financiación: 220.000 €.
		- Recuperando el control de nuestras vidas: reconstrucción de identidades y empoderamiento en mujeres víctimas de violencia de género. Ministerio de Trabajo y Asuntos Sociales. Febrero 2008-Enero  2011. Investigadora principal: Dra. Mª Jesús Cala Carrillo. Financiación: 24.000 €.
		- Estudio Europeo Sobre Conductas De Los Escolares Relacionadas Con La Salud (Health Behaviour In School Aged Children-Hbsc)
		- La Tanatofobia O El Miedo A La Muerte: Evaluación Y Propuesta De Un Programa De Tratamiento Psicológico.
		- Ven Al Laboratorio Y Vive La Ciencia (VlVC)
		- Dinámica No Lineal De La Ansiedad: Nueva Perspectiva En La Evaluación Y El Tratamiento De Los Trastornos Fóbicos
		-Estudio Para La Elaboración De Un Programa Para La Inclusión Social

		EQUIPOS DE INVESTIGACIÓN QUE AVALAN LA LINEA:
		EQUIPO 1: 
		PROFESORES/AS QUE AVALAN LA LINEA: Manuel García-Ramírez; Manuel L. de la Mata Benítez; Ana Mª López Jiménez.

		OTROS/AS PROFESORES/AS DE LA LÍNEA: Mercedes Cubero Pérez, Andrés Santamaría Santigosa, Fabricio Balcázar (U. de Illinois); Yolanda Suárez. (U. de Illinois); Douglas Perkins (U. Vanderbilt); David Ingleby (U. Utrecht); Isaac Prilleltensky (Univ. de Manitoba, EEUU, Paul Crawford. (U. de Nottingham); Tia G.B. Hansen. (U. de Aalborg); Kristine Jensen (U. de Aalborg), Geoff Nelson (U. Wilfried Laurier, Canadá), Andrea Smorti (U. de Florencia).


		@elseif ( $step == 2 )
		<h2>Información del profesorado que participa en el programa</h2>
		<br>
		<h3>
			Línea 1
		</h3>
		<p class="lead">
			Aprendizaje, Neurociencia y Evolución
		</p>
		<ul>
			<li>
				<p>
				<b>LUIS GONZALO DE LA CASA RIVAS</b>
				</p>
				<p>
					<a href="mailto: delacasa@us.es">Email de contacto</a>
					&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="{{ url('files/cv/l1/1.1.docx') }}">Documento CV</a>
					&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="https://investigacion.us.es/sisius/sis_showpub.php?idpers=417">Enlace a SISIUS</a>
				</p>
			</li>
			<li>
				<p>
				<b>RAFAEL MORENO RODRÍGUEZ</b>
				</p>
				<p>
					<a href="mailto: delacasa@us.es">Email de contacto</a>
					&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="{{ url('files/cv/l1/1.2.docx') }}">Documento CV</a>
					&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="https://investigacion.us.es/sisius/sis_showpub.php?idpers=417">Enlace a SISIUS</a>
				</p>
			</li>
			<li>
				<p>
				<b>GABRIEL RUIZ ORTIZ</b>
				</p>
				<p>
					<a href="mailto: delacasa@us.es">Email de contacto</a>
					&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="{{ url('files/cv/l1/1.3.docx') }}">Documento CV</a>
					&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="https://investigacion.us.es/sisius/sis_showpub.php?idpers=417">Enlace a SISIUS</a>
				</p>
			</li>
			<li>
				<p>
				<b>JUAN CARLOS LÓPEZ GARCÍA</b>
				</p>
				<p>
					<a href="mailto: delacasa@us.es">Email de contacto</a>
					&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="{{ url('files/cv/l1/1.4.docx') }}">Documento CV</a>
					&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="https://investigacion.us.es/sisius/sis_showpub.php?idpers=417">Enlace a SISIUS</a>
				</p>
			</li>
			<li>
				<p>
				<b>MANUEL PORTAVELLA GARCÍA</b>
				</p>
				<p>
					<a href="mailto: delacasa@us.es">Email de contacto</a>
					&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="{{ url('files/cv/l1/1.5.docx') }}">Documento CV</a>
					&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="https://investigacion.us.es/sisius/sis_showpub.php?idpers=417">Enlace a SISIUS</a>
				</p>
			</li>
			<li>
				<p>
				<b>ANDRÉS GARCÍA GARCÍA</b>
				</p>
				<p>
					<a href="mailto: delacasa@us.es">Email de contacto</a>
					&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="{{ url('files/cv/l1/1.6.docx') }}">Documento CV</a>
					&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="https://investigacion.us.es/sisius/sis_showpub.php?idpers=417">Enlace a SISIUS</a>
				</p>
			</li>
			<li>
				<p>
				<b>EVA Mª TRIGO SÁNCHEZ</b>
				</p>
				<p>
					<a href="mailto: delacasa@us.es">Email de contacto</a>
					&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="{{ url('files/cv/l1/1.7.docx') }}">Documento CV</a>
					&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="https://investigacion.us.es/sisius/sis_showpub.php?idpers=417">Enlace a SISIUS</a>
				</p>
			</li>
			<li>
				<p>
				<b>JUAN PEDRO VARGAS ROMERO</b>
				</p>
				<p>
					<a href="mailto: delacasa@us.es">Email de contacto</a>
					&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="{{ url('files/cv/l1/1.8.docx') }}">Documento CV</a>
					&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="https://investigacion.us.es/sisius/sis_showpub.php?idpers=417">Enlace a SISIUS</a>
				</p>
			</li>
		</ul>

		<hr>
		<br>
		<h3>
			Línea 2
		</h3>
		<p class="lead">
			Desarrollo Neurocognitivo, Neuropsicología, Trastornos Neurológicos y Dificultades en el Desarrollo de la Cognición y el Lenguaje
		</p>
		<ul>
			<li>
				<p>
				<b>CARLOS M. GÓMEZ GONZÁLEZ</b>
				</p>
				<p>
					<a href="mailto: delacasa@us.es">Email de contacto</a>
					&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="{{ url('files/cv/l2/2.1.docx') }}">Documento CV</a>
					&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="https://investigacion.us.es/sisius/sis_showpub.php?idpers=417">Enlace a SISIUS</a>
				</p>
			</li>
			<li>
				<p>
				<b>DAVID SALDAÑA SAGE</b>
				</p>
				<p>
					<a href="mailto: delacasa@us.es">Email de contacto</a>
					&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="{{ url('files/cv/l2/2.2.docx') }}">Documento CV</a>
					&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="https://investigacion.us.es/sisius/sis_showpub.php?idpers=417">Enlace a SISIUS</a>
				</p>
			</li>
			<li>
				<p>
				<b>FRANCISCO JAVIER MORENO PÉREZ</b>
				</p>
				<p>
					<a href="mailto: delacasa@us.es">Email de contacto</a>
					&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="{{ url('files/cv/l2/2.3.docx') }}">Documento CV</a>
					&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="https://investigacion.us.es/sisius/sis_showpub.php?idpers=417">Enlace a SISIUS</a>
				</p>
			</li>
			<li>
				<p>
				<b>ISABEL DE LOS REYES ORTIZ</b>
				</p>
				<p>
					<a href="mailto: delacasa@us.es">Email de contacto</a>
					&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="{{ url('files/cv/l2/2.4.docx') }}">Documento CV</a>
					&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="https://investigacion.us.es/sisius/sis_showpub.php?idpers=417">Enlace a SISIUS</a>
				</p>
			</li>
			<li>
				<p>
				<b>JOSÉ LEÓN CARRIÓN</b>
				</p>
				<p>
					<a href="mailto: delacasa@us.es">Email de contacto</a>
					&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="{{ url('files/cv/l2/2.5.docx') }}">Documento CV</a>
					&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="https://investigacion.us.es/sisius/sis_showpub.php?idpers=417">Enlace a SISIUS</a>
				</p>
			</li>
		</ul>

		<hr>
		<br>
		<h3>
			Línea 3
		</h3>
		<p class="lead">
			Desarrollo Psicológico e Intervención Psicoeducativa en la Familia, la Escuela y otros Contextos Evolutivos
		</p>
		<ul>
			<li>
				<p>
				<b>CARMEN MORENO RODRÍGUEZ</b>
				</p>
				<p>
					<a href="mailto: delacasa@us.es">Email de contacto</a>
					&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="{{ url('files/cv/l3/3.1.docx') }}">Documento CV</a>
					&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="https://investigacion.us.es/sisius/sis_showpub.php?idpers=417">Enlace a SISIUS</a>
				</p>
			</li>
			<li>
				<p>
				<b>ALFREDO OLIVA DELGADO</b>
				</p>
				<p>
					<a href="mailto: delacasa@us.es">Email de contacto</a>
					&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="{{ url('files/cv/l3/3.2.docx') }}">Documento CV</a>
					&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="https://investigacion.us.es/sisius/sis_showpub.php?idpers=417">Enlace a SISIUS</a>
				</p>
			</li>
			<li>
				<p>
				<b>JOAQUÍN MORA MERCHÁN</b>
				</p>
				<p>
					<a href="mailto: delacasa@us.es">Email de contacto</a>
					&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="{{ url('files/cv/l3/3.3.docx') }}">Documento CV</a>
					&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="https://investigacion.us.es/sisius/sis_showpub.php?idpers=417">Enlace a SISIUS</a>
				</p>
			</li>
			<li>
				<p>
				<b>ROSARIO DEL REY ALAMILLO</b>
				</p>
				<p>
					<a href="mailto: delacasa@us.es">Email de contacto</a>
					&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="{{ url('files/cv/l3/3.4.docx') }}">Documento CV</a>
					&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="https://investigacion.us.es/sisius/sis_showpub.php?idpers=417">Enlace a SISIUS</a>
				</p>
			</li>
			<li>
				<p>
				<b>VIRGINIA SÁNCHEZ JIMÉNEZ</b>
				</p>
				<p>
					<a href="mailto: delacasa@us.es">Email de contacto</a>
					&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="{{ url('files/cv/l3/3.5.docx') }}">Documento CV</a>
					&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="https://investigacion.us.es/sisius/sis_showpub.php?idpers=417">Enlace a SISIUS</a>
				</p>
			</li>
			<li>
				<p>
				<b>VICTORIA HIDALGO GARCÍA</b>
				</p>
				<p>
					<a href="mailto: delacasa@us.es">Email de contacto</a>
					&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="{{ url('files/cv/l3/3.6.docx') }}">Documento CV</a>
					&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="https://investigacion.us.es/sisius/sis_showpub.php?idpers=417">Enlace a SISIUS</a>
				</p>
			</li>
			<li>
				<p>
				<b>AGUEDA PARRA JIMÉNEZ</b>
				</p>
				<p>
					<a href="mailto: delacasa@us.es">Email de contacto</a>
					&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="{{ url('files/cv/l3/3.7.docx') }}">Documento CV</a>
					&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="https://investigacion.us.es/sisius/sis_showpub.php?idpers=417">Enlace a SISIUS</a>
				</p>
			</li>
			<li>
				<p>
				<b>INMACULADA SÁNCHEZ QUEJÍA</b>
				</p>
				<p>
					<a href="mailto: delacasa@us.es">Email de contacto</a>
					&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="{{ url('files/cv/l3/3.8.docx') }}">Documento CV</a>
					&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="https://investigacion.us.es/sisius/sis_showpub.php?idpers=417">Enlace a SISIUS</a>
				</p>
			</li>
		</ul>


		<hr>
		<br>
		<h3>
			Línea 4
		</h3>
		<p class="lead">
			Intervención Psicológica en Clínica y Salud
		</p>
		<ul>
			<li>
				<p>
				<b>Mª ÁNGELES PÉREZ SAN GREGORIO</b>
				</p>
				<p>
					<a href="mailto: delacasa@us.es">Email de contacto</a>
					&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="{{ url('files/cv/l4/4.1.docx') }}">Documento CV</a>
					&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="https://investigacion.us.es/sisius/sis_showpub.php?idpers=417">Enlace a SISIUS</a>
				</p>
			</li>
			<li>
				<p>
				<b>INMACULADA MORENO GARCÍA</b>
				</p>
				<p>
					<a href="mailto: delacasa@us.es">Email de contacto</a>
					&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="{{ url('files/cv/l4/4.2.docx') }}">Documento CV</a>
					&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="https://investigacion.us.es/sisius/sis_showpub.php?idpers=417">Enlace a SISIUS</a>
				</p>
			</li>
			<li>
				<p>
				<b>AGUSTÍN MARTÍN RODRÍGUEZ</b>
				</p>
				<p>
					<a href="mailto: delacasa@us.es">Email de contacto</a>
					&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="{{ url('files/cv/l4/4.3.docx') }}">Documento CV</a>
					&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="https://investigacion.us.es/sisius/sis_showpub.php?idpers=417">Enlace a SISIUS</a>
				</p>
			</li>
			<li>
				<p>
				<b>CARMEN DEL RÍO SÁNCHEZ</b>
				</p>
				<p>
					<a href="mailto: delacasa@us.es">Email de contacto</a>
					&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="{{ url('files/cv/l4/4.4.docx') }}">Documento CV</a>
					&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="https://investigacion.us.es/sisius/sis_showpub.php?idpers=417">Enlace a SISIUS</a>
				</p>
			</li>
			<li>
				<p>
				<b>RAFAEL J. MARTÍNEZ CERVANTES</b>
				</p>
				<p>
					<a href="mailto: delacasa@us.es">Email de contacto</a>
					&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="{{ url('files/cv/l4/4.5.docx') }}">Documento CV</a>
					&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="https://investigacion.us.es/sisius/sis_showpub.php?idpers=417">Enlace a SISIUS</a>
				</p>
			</li>
			<li>
				<p>
				<b>EVA MARÍA PADILLA MUÑOZ</b>
				</p>
				<p>
					<a href="mailto: delacasa@us.es">Email de contacto</a>
					&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="{{ url('files/cv/l4/4.6.docx') }}">Documento CV</a>
					&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="https://investigacion.us.es/sisius/sis_showpub.php?idpers=417">Enlace a SISIUS</a>
				</p>
			</li>
			<li>
				<p>
				<b>MANUEL VÁZQUEZ MARRUFO</b>
				</p>
				<p>
					<a href="mailto: delacasa@us.es">Email de contacto</a>
					&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="{{ url('files/cv/l4/4.7.docx') }}">Documento CV</a>
					&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="https://investigacion.us.es/sisius/sis_showpub.php?idpers=417">Enlace a SISIUS</a>
				</p>
			</li>
		</ul>

		<hr>
		<br>
		<h3>
			Línea 5
		</h3>
		<p class="lead">
			Procesos Psicosociales, Cultura, Diversidad y Ciudadanía
		</p>
		<ul>
			<li>
				<p>
				<b>MANUEL GARCÍA RAMÍREZ</b>
				</p>
				<p>
					<a href="mailto: delacasa@us.es">Email de contacto</a>
					&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="{{ url('files/cv/l5/5.1.docx') }}">Documento CV</a>
					&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="https://investigacion.us.es/sisius/sis_showpub.php?idpers=417">Enlace a SISIUS</a>
				</p>
			</li>
			<li>
				<p>
				<b>MANUEL L DE LA MATA BENÍTEZ</b>
				</p>
				<p>
					<a href="mailto: delacasa@us.es">Email de contacto</a>
					&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="{{ url('files/cv/l5/5.2.docx') }}">Documento CV</a>
					&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="https://investigacion.us.es/sisius/sis_showpub.php?idpers=417">Enlace a SISIUS</a>
				</p>
			</li>
			<li>
				<p>
				<b>ANA Mª LÓPEZ JIMÉNEZ</b>
				</p>
				<p>
					<a href="mailto: delacasa@us.es">Email de contacto</a>
					&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="{{ url('files/cv/l5/5.3.docx') }}">Documento CV</a>
					&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="https://investigacion.us.es/sisius/sis_showpub.php?idpers=417">Enlace a SISIUS</a>
				</p>
			</li>
			<li>
				<p>
				<b>MERCEDES CUBERO PÉREZ</b>
				</p>
				<p>
					<a href="mailto: delacasa@us.es">Email de contacto</a>
					&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="{{ url('files/cv/l5/5.4.docx') }}">Documento CV</a>
					&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="https://investigacion.us.es/sisius/sis_showpub.php?idpers=417">Enlace a SISIUS</a>
				</p>
			</li>
			<li>
				<p>
				<b>ANDRÉS SANTAMARÍA SANTIGOSA</b>
				</p>
				<p>
					<a href="mailto: delacasa@us.es">Email de contacto</a>
					&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="{{ url('files/cv/l5/5.5.docx') }}">Documento CV</a>
					&nbsp;&nbsp;|&nbsp;&nbsp;
					<a href="https://investigacion.us.es/sisius/sis_showpub.php?idpers=417">Enlace a SISIUS</a>
				</p>
			</li>
		</ul>

		@else
		<h2>Mecanismos de cómputo de la labor de tutorización y dirección de tesis</h2>
		<br>
		<p>Véase: <a href="www.doctorado.us.es/impresos/verificacion/6.2.Mecanismos_computo_direccion_tutorizacion_web.pdf">www.doctorado.us.es/impresos/verificacion/6.2.Mecanismos_computo_direccion_tutorizacion_web.pdf</a>
		</p>

		@endif
	</div> <!-- /.col -->
</div> <!-- /.row -->
@stop