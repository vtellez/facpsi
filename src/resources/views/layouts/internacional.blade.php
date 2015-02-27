@extends('layouts.base')

@section('title')
Internacionalización
@stop

@section('header')
Internacionalización
@stop

@section('content')
<div class="row">
	<div class="col-md-3 col-sm-4">
		<div class="portlet">
			<div class="portlet-header">
				<h3>
					<i class="fa fa-reorder"></i>
					Internacionalización
				</h3>
			</div> <!-- /.portlet-header -->
			<div class="portlet-content">
				<ul class="icons-list">
					<li>
						<i class="icon-li fa fa-angle-right"></i>
						<a href="{{ url($section.'?s=1') }}">Convenios con instituciones extranjeras</a>
						</li>
						<li>
							<i class="icon-li fa fa-angle-right"></i>
							<a href="{{ url($section.'?s=2') }}">Presencia de expertos en el programa</a>
						</li>
						<li>
							<i class="icon-li fa fa-angle-right"></i>
							<a href="{{ url($section.'?s=3') }}">Cotutelas</a>
						</li>
						<li>
							<i class="icon-li fa fa-angle-right"></i>
							<a href="{{ url($section.'?s=4') }}">Mención internacional</a>
						</li>
						<li>
							<i class="icon-li fa fa-angle-right"></i>
							<a href="{{ url($section.'?s=5') }}">Becas y ayudas</a>
						</li>
					</ul>
				</div> <!-- /.portlet-content -->
			</div> <!-- /.portlet -->

		</div> <!-- /.col -->
		<div class="col-md-9 col-sm-8">

		@if ( $step == 1 )
		Incluir vínculo a la página de la Facultad de Psicología
http://centro.us.es/facpsi/wp-content/uploads/2013/11/destinos-erasmus-y- convenio-doctorado.pdf

		@elseif ( $step == 2 )
		Prof. Héctor Martínez Sánchez (Línea 1)
￼El Prof. Martínez realizó estudios de licenciatura en Psicología en la
￼Universidad Nacional Autónoma de México, donde posteriormente obtuvo el
￼grado de Maestría en Psicología. El doctorado lo cursó en el programa de
￼doctorado del Departamento de Psicología Evolutiva y de la Educación
￼Básica y Metodología en la Universidad de Sevilla, España bajo la dirección
￼del Dr. Rafael Moreno, con el apoyo de una beca del CONACyT. En 1976
￼ingresó como profesor de asignatura en la Escuela de Psicología de la
￼ENEP-Iztacala, de la UNAM, llegando a ser titular “A”. En 1992 se incorporó
￼como Profesor-investigador al Centro de Estudios e Investigaciones en
￼Comportamiento, en la Universidad de Guadalajara, donde además fue
￼coordinador del Programa de Posgrado en Ciencia del Comportamiento
￼(maestría y doctorado) en su opción en Ciencias del Comportamiento, de
￼1995 a 2005.
￼En 1995 ingresó al Sistema Nacional de Investigadores,
￼permaneciendo en él de manera ininterrumpida con nombramiento actual
￼vigente en el nivel I y ha contado con la acreditación del perfil deseable para
￼profesores universitarios PROMEP. A partir de febrero de 2006 fue
￼comisionado para formar parte del Instituto de Neurociencias. Desde 1980 ha
￼trabajado sobre aprendizaje complejo con humanos, principalmente en dos
￼proyectos. El primero está relacionado con un modelo de covariación dirigido
￼al estudio de la adquisición y validación de relaciones, y el segundo al
￼estudio de las variables relacionadas con el control instruccional bajo
￼diferentes preparaciones de discriminación condicional. Actualmente ha
￼enfocado su interés al estudio de la transferencia en humanos, y trabaja en
￼un proyecto sobre el análisis de la variabilidad y estereotipia conductual en
￼humanos. En los años recientes también ha dedicado su atención al estudio
￼experimental de la conducta alimentaria en ratas.
￼Ha sido profesor invitado y realizado estancias cortas de
￼investigación en diferentes universidades extranjeras. Ha publicado artículos
￼en diversas revistas especializadas, nacionales e internacionales, y varios
￼capítulos en libros. Ha participado y conferencias en congresos y eventos
￼nacionales e internacionales. Ha sido editor asociado y pertenecido a
￼diversos consejos y comités editoriales de varias revistas nacionales e
￼internacionales. Ha sido Consejero Técnico en la UNAM, miembro del Comité
￼de Ciencias Humanas y de la Conducta, evaluador del programa de apoyos a
￼la investigación del CONACyT, y miembro del comité de evaluación de
￼aspirantes a becas al extranjero en el área de psicología, del propio
￼CONACyT. También ha participado como evaluador invitado en proyectos de
￼investigación de la UNAM y otras universidades del país. Sus intereses de
￼investigación incluyen el estudio de procesos básicos de conducta humana y
￼animal.
Para más información puede consultarse: http://www.ineuro.cucba.udg.mx/articulo.php?id=11
￼Prof. Patricio O’Donnell (Línea 1)
El profesor Patricio O’Donnell es actualmente Catedrático en el dpto. de Anatomía y Neurobiología de la School of Medicine (Universidad de Maryland, EEUU). Su grupo posee una larga tradición investigadora en el estudio de los sistemas meso-límbicos y meso-corticales en la esquizofrenia y la adicción, con la implicación de los sistemas dopaminérgicos y glutamatérgicos. Desde los años noventa es una referencia para el conocimiento de la implicación funcional del núcleo accumbens y su relación con la corteza prefrontal. El trabajo de su laboratorio no implica la utilización de una única metodología, sino que abarca estudios de registro electrofisiológico “in vitro” e “in vivo”, y la utilización de registros intracelulares, yuxtacelulares y de campo. La visión integradora de estos estudios va encaminada a entender la lógica funcional de la red neural que implica a estructuras tales como el hipocampo, la amígdala, el córtex prefrontal, el núcleo accumbens el estriado medial y dorsal. Estas estructuras están implicadas en procesos adictivos y de esquizofrenia. Su laboratorio ha sido pionero en demostrar como los estudios “in vivo” realizados en las dos últimas décadas han sido realizados con cerebros de ratas adolescentes y preadolescentes, y por tanto han debido de ser reinterpretados. Siguiendo esta lógica sus estudios se han centrado en la maduración funcional del córtex prefrontal, y de cómo la función dopaminérgica en un cerebro adulto es distinta a la de uno adolescente, y como es a su vez dependiente de un buen proceso madurativo.
Para más información puede consultarse: http://www.odonnell- lab.net/pod.htm
￼￼
Prof. Néstor Schmajuk (Línea 1)
El Dr. Nestor Schamjuk es actualmente catedrático en la Universidad de Duke (EE.UU.) y está adscrito al Dpto. of Psychology & Neuroscience. Su formación inicial se desarrolló en Argentina donde obtuvo un doctorado en Ingeniería electrónica en la Universidad de Buenos Aires. Consiguió su segundo doctorado, en psicología, en la Universidad de Massachusetts (EE.UU.).
￼El Dr. Schmajuk ha desarrollado modelos de redes neuronales que
￼se han aplicado a campos tan diversos como el condicionamiento clásico, el
￼condicionamiento operante, la comunicación animal, el aprendizaje espacial,
￼la cartografía cognitiva o la inhibición prepulso. Utilizando este modelo de
￼redes neuronales se han podido explicar los efectos lesiones en zonas
￼cerebrales corticales, en el cerebelo y en el hipocampo, así como los
￼resultados de la administración de fármacos dopaminérgicos y colinérgicos
￼en diferentes tipos de aprendizaje sensorial y en diversos paradigmas
￼cognitivos.
￼Para consultar su CV puede acudirse a;
http://www.dibs.duke.edu/research/profiles/123-nestor-schmajuk
￼Prof. Joel Talcott (Línea 2)
El profesor Joel Talcott es catedrático de Neurociencia Cognitiva del Desarrollo de la Universidad de Aston (Reino Unido). El prof. Talcott es conocido por su trabajos en el ámbito de la dislexia y la comorbilidad de dicho trastorno con los déficits de atención e hiperactividad. Al mismo tiempo, es editor-jefe de la revista Dyslexia y director del Departamento de Ciencias de la Vida y codirector de investigación en Neurociencias de su Universidad. Es responsable de formación del proyecto Language and Perception, del que forma parte también el profesor David Saldaña, este en calidad de responsable del área temática de trastornos en el desarrollo.
Para más información sobre su CV puede consultarse:
http://www1.aston.ac.uk/lhs/staff/az-index/talcotjb/
Prof. Fabricio Balcázar (Línea 5)
El Dr. Fabricio Balcázar es Catedrático en el Departamento de Discapacidad y Desarrollo Humano de la Universidad de Illinois (Chicago). El Dr. Balcázar ha llevado a cabo investigaciones en los últimos 25 años en varias áreas relacionadas con la discapacidad y las minorías, tales como: (a) el desarrollo de enfoques sistemáticos para la participación efectiva de las personas con discapacidad en las organizaciones ciudadanas, (b) el desarrollo de intervenciones para ayudar a los estudiantes de minorías con discapacidad en su transición al empleo y el desarrollo profesional y (c) la promoción de la competencia cultural en los servicios y recursos, entre otros. El Dr. Balcázar es actualmente el director del Center for Capacity Building on Minorities with Disabilities Research in the Department of Disability and Human Development de la Universidad de Illinois (Chicago) (ver la web del centro en http://disabilityempowerment.org/index.html), donde se ha elaborado un marco conceptual en competencia cultural que ha servido de base para un programa de entrenamiento y un instrumento de evaluación de gran aceptación en la comunidad científica.
El Dr. Balcázar tiene una estrecha y continuada relación de colaboración con los promotores de esta línea de investigación como puede contrastarse por publicaciones y proyectos en los que ha participado cooperativamente. Algunos ejemplos de ello son las estancias de investigación disfrutadas por algunos miembros solicitantes en el Center for Capacity Building on Minorities with Disabilities Research y los artículos producto de dicha colaboración. Destacan, entre otros: (a) Manuel Garcia Ramirez, Virginia Paloma Castro, Fabricio Balcazar, Yolanda Suarez Balcazar (2009). Building International Collaborative Capacity: Contributions of Community Psychologists to a European Network. American Journal of Community Psychology, 44 (1/2), 116-122; (b) Manuel Garcia Ramirez, Manuel Fco Martinez Garcia, Fabricio Balcazar, Yolanda Suarez Balcazar, M.J. Albar, et. al. (2005). Psychosocial Empowerment and Social Support Factors Associated With the Employment Status of Immigrant Welfare Recipients. Journal of Community Psychology, 33 (6), 673-690; (c) Manuel Garcia Ramirez, Fabricio Balcazar, Yolanda Suarez Balcazar (2003). Investigación-Acción Participativa: una Herramienta Útil para Entender la Diversidad Humana. Apuntes de Psicologia, 21 (3) 409-576.
Para más información ver su página personal en http://www.idhd.org/F_Balcazar.html. Se puede ver su CV completo en el link http://www.ahs.uic.edu/research/profiles/FBalcazar_cv.pdf
Prof. Tia G.B, Hansen (Línea 5)
La Dra. Tia G.B, Hansen es Profesora de Psicología Cognitiva en el Department of Communication and Psychology, de la Universidad de Aalborg (Dinamarca). Dirige la Cognitive Psychology Unit y la Clinic for Developmental Communication Disorders, dentro de la citada Universidad. Sus principales áreas de investigación son, por una parte, el estudio de la relación entre memoria autobiográfica, identidad y self y, al mismo tiempo, en el ámbito de la psicología aplicada, la intervención con poblaciones en riesgo de exclusión. En este sentido, está dirigiendo dos proyectos de investigación e intervención, uno con adultos con daño cerebral adquirido y el otro orientado a la identificación temprana y el seguimiento de estudiantes en riesgo de abandono del sistema educativo
La prof. Hansen es editora, junto a la Prof. Jensen y el Prof. De la Mata (participante en el programa de doctorado) de la serie de libros Self in Culture in Mind, since 2011, publicados por la editorial Aalborg University Press.
Para más información puede verse la página personal:
http://personprofil.aau.dk/101929
Prof. David Ingleby (Línea 5)
El Dr. David Ingleby es profesor emérito de Psicología Intercultural de la Universidad de Utrecht e investigador en el Centre for Social Science and Global Health (SSGH). Actualmente, es el presidente de la Acción COST IS1103 "Adaptación de los sistemas sanitarios europeos a la diversidad". Sus intereses principales de investigación son las migraciones y la salud. Antes de trasladarse a los Países Bajos en 1982, trabajó para el Consejo de Investigación Médica en Cambridge y Londres. En 2007 fue Willy Brandt Memorial Profesor de la Escuela de la Migración Internacional y Relaciones Étnicas, Universidad de Malmö. El Dr. Ingleby ha participado en numerosos proyectos de ámbito europeo relacionados con la salud de los inmigrantes y los refugiados, así como con el desafío que representa la diversidad en los sistemas de salud.
El Dr. Ingleby tiene una estrecha y continuada relación de colaboración con los promotores de esta línea de investigación como puede contrastarse por publicaciones y proyectos en los que ha participado cooperativamente. Por ejemplo, Manuel García-Ramírez ha disfrutado de estancias en la Universidad de Utrech y ha participado y participa junto a al Dr. Ingleby en algunos proyectos, tales como: (a) ADAPT (Adapting European Health System to Diversity), (b) HOME (Health and Social Care for Migrants and Ethnic Minorities) de la red EU's COST programme, y (c) Erasmus Curriculum Development Project on Health and Social Care for Migrants and Minorities .Además, el Dr. Ingleby es miembro del Consejo Editorial dela revista Intervención Psicosocial y ha colaborado en eventos científicos conjuntamente con el Dr. Manuel García-Ramírez (por ejemplo, en el II European Community Psychology Association Seminar, celebrado en Sevilla en 2007).Para más información ver su página personal en http://www.ercomer.eu/researchers-2/prof-dr-david-ingleby/ . Se puede ver su CV completo en el link http://www.ercomer.eu/researchers-2/prof-dr-david- ingleby/
Prof. Kristine Jensen (Línea 5)
La Dra. Kristine Jensen es catedrática de Psicología del Desarrollo en el Department of Communication and Psychology, de la Universidad de Aalborg (Dinamarca). Dirige la Cognitive Psychology Unit y la Clinic for Developmental Communication Disorders, dentro de la citada Universidad. Sus `principales áreas de investigación están relacionadas con el desarrollo psicológico desde una perspectiva transcultural, así como el desarrollo atípico. Ha dirigido diversos proyectos de investigación financiados por La Agencia Danesa para Ciencia, Tecnologia e Innovación (FKK). Actualmente dirige un proyecto de investigación sobre Alfabetización temprana financiado, por la Fundación Alteza Real Princesa Mary de Dinamarca. Ha realizado trabajos de investigación sobre desarrollo del lenguaje y desarrollo cognitivo en Dinmarca, México y España, principalmente. Ha participado y participa en diversas redes europeas COST. Actualmente lidera una de estas acciones denominada “Language Impairment in a Multilingual Society: Linguistic Patterns and the Road to Assessment” http://www.bi-sli.org (2009-2013) (Cost Action IS0804).
La prof. Jensen es editora, junto a la Prof. Hansen y el Prof. De la Mata (participante en el programa de doctorado) de la serie de libros Self in Culture in Mind, since 2011, publicados por la editorial Aalborg University Press.
El CV de la Profa. Jensen puede consultarse en:
http://personprofil.aau.dk/110234?lang=en
￼￼
Prof. Geoff Nelson (Línea 5)
D. Geoff Nelson es Catedrático de Psicología en Wilfrid Laurier University, Waterloo, Ontario. Se ha desempeñado como redactor jefe de la Canadian Journal of Community Mental Health y Presidente de la Community Psychology Section of the Canadian Psychological Association. El Dr. Geoff Nelson recibió en 1999 del premio Harry MacNeill para la innovación en salud mental de la comunidad de la Fundación Americana de Psicología. Sus intereses de investigación y acción se han centrado en dos áreas: la prevención y la salud mental de la comunidad. Con respecto a la primera, he estado involucrado en la creación y evaluación de los programas comunitarios destinados a promover el bienestar y prevenir los problemas de los niños y familias vulnerables. En el área de la salud mental comunitaria ha sido un agente activo en la investigación, defensa y política en materia de vivienda, auto-ayuda, y apoyo comunitario para personas con enfermedad mental grave. Destacan en sus trabajos (a) el interés para mejorar la situación de poblaciones desfavorecidas, (b) los enfoques participativos de investigación-acción y (c) las perspectivas basadas en valores críticos que desafían el status quo y que están orientados hacia el cambio social. El Dr. Nelson mantiene una relación de colaboración con los promotores de esta línea de investigación como puede verse en participaciones conjuntas en diversos eventos científicos.
Para más información ver su página personal en
http://www.wlu.ca/page.php?grp_id=248&p=19009&pv=1
Prof. Douglas Perkins (Línea 5)
El Dr. Douglas Perkins es Catedrático en el Departamento de Desarrollo Humano y Organizacional en el Peabody College de la Universidad de Vanderbilt. Es director fundador de los estudios de postgrado en HOD y el programa de doctorado Program in Community Research & Action. Es miembro de la Sociedad para la Investigación de la Comunidad y la acción (SCRA), de la Environmental Design Research Association y la Asociación Urban Affairs. Los intereses de investigación del Dr. Perkins son los vínculos comunitarios y vecinales, la participación y el empoderamiento de las organizaciones, el capital social y el desorden en las comunidades urbanas en los EE.UU., Europa y China. Estudia y trabaja con asociaciones de voluntarios, ONGs y agencias gubernamentales que responden a estos problemas, en todos los niveles del gobierno, pero sobre todo local.
El Dr. Perkins mantiene una relación de colaboración con los promotores de esta línea de investigación como puede contrastarse en algunas presentaciones y publicaciones científicas, tales como (a) Douglas Perkins, Benjamin Siankam, Manuel Garcia Ramirez, Carlos Camacho Martínez Vara del Rey, Sonia Hernandez Plaza, et. al. (2010) Migration and Community Psychology. 3a Conferencia Internacional de Psicología Comunitaria. Aproximaciones Comunitarias a los Problemas Sociales Contemporáneos. Conferencia Internacional de Psicología Comunitaria (3). Num. 3. Puebla (Méjico). Universidad Iberoamericana (Puebla). 2010, pag. 130-130 y (b) Perkins, D. D., Palmer, N. A., & Garcia-Ramirez, M. (2011). Psychosocial Studies of Migration and Community: Introduction to the Special Issue. Psychosocial Intervention, 20(3), 237-242. Para más información ver su página personal en https://my.vanderbilt.edu/perkins/ Se puede ver su CV completo en el link https://my.vanderbilt.edu/perkins/cv/
Prof. Isaac Prilleltensky (Línea 5)
El Dr. Isaac Prilleltensky es Catedrático y Decano de la Facultad de Educación de la Universidad de Miami, Florida. Fue Director del Programa de Doctorado en Investigación y Acción Comunitaria en el Peabody College de la Universidad de Vanderbilt. Es miembro de la Asociación Psicológica Americana, la Asociación Americana de Investigación Educativa y de la Sociedad para la Investigación y Acción Comunitaria. Durante varios años fue el investigador principal del proyecto SPEC, cuyo objetivo fue promover fortalezas, prevención, empoderamiento y el cambio comunitario con las organizaciones sin fines de lucro en diversos lugares. Sus intereses de investigaciones se centran en la prevención de problemas psicosociales y la promoción del bienestar de las personas, organizaciones y comunidades, especialmente de la conciencia crítica y la justicia social. Ha publicado más de 100 artículos y capítulos de libro y ha presentado conferencias magistrales en congresos internacionales en veintiún países de los cinco continentes.
El Prof. Prilleltensky mantiene una relación de colaboración con los promotores de esta línea de investigación como puede contrastarse en algunas colaboraciones en eventos científicos, como en el en el II European Community Psychology Association Seminar, celebrado en Sevilla en 2007. Además, es miembro del Consejo Editorial de la revista Intervención Psicosocial de la que Manuel García Ramírez es co-editor. Para más información ver su página personal en http://www.education.miami.edu/isaac/. Se puede ver su CV completo en el link http://www.education.miami.edu/facultystaff/CVs/163.pdf.
Prof. Andrea Smorti (Línea 5)
El Dr. Andrea Smorti es Catedrático del Departamento de Psicología del Desarrollo y de la Educación y Decano de la Facultad de Psicología de la Universidad de Florencia. El Prof. Smorti es miembro del Comité Científico y el Consejo Directivo del Centro Interuniversitario per la Ricerca sulla Genesi e lo Sviluppo delle Motivazioni Prosociali e Antisociali, así como de la ISCAR. Ha sido miembro del Comité Científico y del Comité Organizador del III Congreso de esta sociedad, celebrado en Roma en 2011. El Prof Smorti es Director de la Rivista di Psicologia dello Sviluppo y miembro del Comité Científico de revistas como Teorie e Modelli, European Journal of School, ED.UCO (Revista de Investigación Educativa)y QWERTY. Sus principales áreas de investigación se centran en el desarrollo de las relaciones sociales y el papel de la narración (pensamiento narrativo, narraciones de eventos traumáticos) desde la perspectiva de la Psicología Cultural.
El Prof. Smorti mantiene una relación de colaboración con profesores de las líneas de Procesos Psicosociales, Cultura, Diversidad y Ciudadanía y de Procesos Psicosociales, Cultura, Diversidad y Ciudadanía. En relación con la primera, el prof. Smorti ha sido co-director (junto al Prof. De la Mata Benítez) de la tesis doctoral de Arianna Sala (2008). Por otra parte, tiene publicaciones conjuntas con profesores/as de la Universidad de Sevilla adscritos a las dos líneas citadas.
Para más información sobre su CV puede consultarse: http://www.dpsico.unifi.it/CMpro-v-p-59.html
Prof. Yolanda Suárez-Balcázar (Línea 5)
La Dra. Suárez-Balcázar es Catedrática y Directora del Departamento de Terapia Ocupacional de la Facultad de Ciencias Aplicadas de la Salud, y co-directora del Center for Capacity Building on Minorities with Disabilities Research in the Department of Disability and Human Development de la Universidad de Illinois (Chicago) (ver la web del centro en http://disabilityempowerment.org/index.html). Su interés por la investigación cubre varias áreas interrelacionadas: (a) la evaluación de las intervenciones comunitarias de prevención, (b) el estudio de la competencia cultural y la diversidad y (c) la innovación y la investigación con personas con discapacidad y minorías. La Dra. Suárez-Balcázar es miembro de la American Psychological Association (APA) y miembro fundador de la Asociación de Psicología del Medio Oeste. Asimismo, es miembro de la Sociedad para la Investigación y Acción Comunitaria y la American Occupational Therapy Association.
La Dra. Suárez-Balcázar mantiene una relación de colaboración con los promotores de la línea de investigación denominada Procesos Psicosociales, Cultura, Diversidad y Ciudadanía como puede contrastarse en algunas colaboraciones en proyectos, eventos y publicaciones científicas. Ejemplos de ello son las publicaciones: (a) Yolanda Suárez-Balcazar, Fabricio Balcazar, Tina Taylor-Ritzler, Nelson Portillo, Juleen Rodakowsk, et. al. (2010). Development and Validation of the Cultural Competence Assesment Instrument: a Factorial Analysis. Journal of Rehabilitation. 4-13 o (b) Manuel García Ramírez, Yolanda Suarez Balcazar (2003). Internet y Cambio Comunitario en un Barrio Empobrecido de Chicago: Implicaciones para Andalucia. Apuntes de Psicología, 21 (3), 533-548. Además, la Dra. Suárez-Balcázar ha colaborado en eventos científicos conjuntamente con el Dr. Manuel García-Ramírez (por ejemplo, en el 4th International Conference of Community Psychology , celebrado en Barcelona en 2012) y es miembro del Consejo editorial de la revista Intervención Psicosocial. Para más información ver su página personal en http://disabilityempowerment.org/Y_Suarez-Balcazar.html. Se puede ver su CV completo en el link http://www.ahs.uic.edu/research/profiles/Suarez- Balcazar_CV_10.pdf

		@elseif ( $step == 3 )
Enlace al Servicio de Doctorado:
http://www.doctorado.us.es/tesis-doctoral/cotutela-de-tesis

		@elseif ( $step == 4 )

￼
Enlace al Servicio de Doctorado:
http://www.doctorado.us.es/tesis-doctoral/mencion-internacional-titulo-doctor

		@else
Enlace a las convocatorias del Relaciones Internacionales:
http://www.internacional.us.es/becas-ayudas
		
		@endif
		</div> <!-- /.col -->


	</div> <!-- /.row -->
	@stop