<?php
/**ƒ
 * Template Name: Resume page in Spanish
 *
 * @author Antonio Martín based thingsthatarebrown.com
 * @link http://www.antoniomartin.info/
 *
 * @package WordPress
 * @subpackage Mynote-AntonioMartin.info-antonio-martin-fork
 */

$custom_header_image = '';
$custom_header_css = '';

wp_enqueue_style( 'stylesheet', get_template_directory_uri() . '/assets/css/myStyle.css',false,'1.1','all');


get_header();

?>
<div class="about-page main grid-wrap">

  <aside class="grid col-one-quarter mq2-col-full">
    <p class="mbottom">
    </p>
    <menu id="bookmarks">
      <ul>
        <li><a href="#skills" class="arrow">Habilidades</a></li>
        <li><a href="#experience" class="arrow">Experiencia Laboral</a></li>
        <li><a href="#education" class="arrow">Educacion</a></li>
        <li><a href="#hobbies" class="arrow">Hobbies</a></li>
      </ul>
    </menu>
  </aside>

  <aside class="grid col-three-quarters mq2-col-two-thirds mq3-col-full">
    <section class="vcard">
      <h1 class="fn">Antonio Mart&iacute;n de la Escalera Hern&aacute;ndez</h1>

      <h2 class="role" style="font-size: 0.9em; font-weight: bold;">Ingeniero del Software</h2>
      <ul class="contact">
        <li class="email">antoniomeh@gmail.com</li>
        <li class="tel">+34 616 845 513</li>
        <li class="url"><a href="http://www.antoniomartin.info"
                           title="Antonio Martin Web Site">http://www.antoniomartin.info</a>
        </li>
        <li class="adr"><span class="locality">Madrid</span>, <span class="country-name">España</span></li>
        <li class="url twitter">@antoniomeh</li>
      </ul>
      <ul class="contact">
        <li class="email"> -</li>
        <li class="tel">+44 7763 360374</li>
        <li class="url"> -</li>
        <li class="adr"><span class="locality">Londres</span>, <span class="country-name">Reino Unido</span></li>
        <li class="url twitter"> -</li>
      </ul>
    </section>

    <section id="summary" class="sectionAbout">
      <h1>Resumen</h1>

      <p>
        Nací en Santa Cruz de Tenerife pero me crie en Cádiz. Con 20 años me traslade a Madrid para finalizar mis
        estudios en Ingeniería Informática. Desde el año 2000 he desarrollado varios perfiles dentro del desarrollo
        Web, pero principalmente como desarrollador JAVA. A principios del 2014 decidí trasladarme a Londres para mejorar mi
        nivel de Inglés y ampliar mis conocimientos en otras tecnologías web como Angular y Node.
      </p>

      <p>
        Me encanta disfrutar de tiempo libre con mis amigos o familia. También me encanta el deporte.
      </p>
    </section>

    <section id="skills" class="sectionAbout">
      <h1>Habilidades</h1>
      <dl>
        <dt>Front-End</dt>
        <dd title="Hyper Text Markup Language">HTML</dd>
        <dd title="Hyper Text Markup Language 5">HTML5</dd>
        <dd title="Cascading Style Sheets">CSS3</dd>
        <dd title="Front-end programming language">JavaScript</dd>
        <dd title="Javascript Library">jQuery</dd>
        <dd title="Ensuring website/app has usable experience on all platforms">Cross-browser Compatibility</dd>
        <dd title="Coding markup in an accessible, usable and semantic way, using best practices and avoiding proprietary rules.">
          Web Standards
        </dd>

        <dt>Lenguajes</dt>
        <dd title="Java">Java</dd>
        <dd title="Scala">Scala</dd>
        <dd title="C#">C#</dd>
        <dd title="NodeJS">Node JS</dd>
        <dd title="C">C</dd>
        <dd title="Cobol">Cobol</dd>
        <dd title="Objetive - C">Objetive - C (IOS)</dd>

        <dt>Tecnologías Java</dt>
        <dd title="Struts">Struts</dd>
        <dd title="Hibernate">Hibernate</dd>
        <dd title="JUnit">JUnit</dd>
        <dd title="Test Drive Development">TDD</dd>
        <dd title="EJB">EJB</dd>
        <dd title="Websocket">Websocket</dd>
        <dd title="Spring">Spring</dd>
        <dd title="Spring Boot">Spring Boot</dd>

        <dt>Bases de Datos</dt>
        <dd title="MySql">MySql</dd>
        <dd title="Oracle">Oracle</dd>
        <dd title="SQL Server">SQL Server</dd>
        <dd title="DB2">DB2</dd>

        <dt>Big Data</dt>
        <dd title="Spark">Spark</dd>
        <dd title="Kafka">Kafka</dd>
        <dd title="MongoDB">Mongo DB</dd>

        <dt>Sistemas Operativos</dt>
        <dd title="MAC OS">MAC OS</dd>
        <dd title="Linux (Ubuntu & Debian)">Linux (Ubuntu & Debian)</dd>
        <dd title="Windows (XP, Server, 2003, Vista and 7)">Windows (XP, Server, 2003, Vista y 7)</dd>

        <dt>Control de versiones</dt>
        <dd title="GIT">GIT</dd>
        <dd title="Mercurial">Mercurial</dd>
        <dd title="CVS">CVS</dd>
        <dd title="Subversion">Subversion</dd>

        <dt>Servidores Web</dt>
        <dd title="Apache Tomcat">Apache Tomcat</dd>
        <dd title="Weblogic">Weblogic</dd>
        <dd title="JBoss">JBoss</dd>
        <dd title="Mule">Mule</dd>

        <dt>Otros</dt>
        <dd title="xcode">XCODE</dd>
        <dd title="WebStorm">WebStorm</dd>
        <dd title="IDE IntelliJ">IDE IntelliJ</dd>
        <dd title="IDE Eclipse">IDE Eclipse</dd>
        <dd title="Bussines Process Management">BPM</dd>
        <dd title="Extensible Markup Language">XML</dd>
      </dl>
    </section>

    <section id="experience" class="sectionAbout">
      <h1>Experiencia Laboral</h1>
      <article>
        <h1>
          <a href="https://www.optimagaming.com/" title="optimagaming" target="_blank">Optima MGS<span>&nbsp;&nbsp;&nbsp;&nbsp;(Sevilla, España)</span></a>
        </h1>

        <h2>Domain y Arquitecto Software</h2>
        <time datetime="2019-05-01" class="start">May 2019</time>
        <!--        <time datetime="2020-08-01" class="end">Sep. 2020</time>-->
        <span class="end">Present</span>

        <p>
          OptimaMGS es una empresa parte de la multinacional Sportradar. OptimaMGS desarrolla y mantienen software de apuestas
          en el juego comercial desde 2012.
        </p>

        <p>
          OptimaMGS esta tranformando sus equipos desde una arquitectura horizontal, donde los equpos trabajan en todas las partes
          del código, a una arquitectura vertical para especializar a los miembros de los equipos. Durante este tiempo he estado
          trabajando para el equpo de FixedOdds y Core.
        </p>

        <p>
          My Tasks Son:
        </p>

        <ul>
          <li>Trabajar en un equipo multicultural</li>
          <li>Tomar requisitos del Manager y de los diferentes clientes</li>
          <li>Controlar la calidad del código</li>
          <li>Crear microservicios de una arquitectura monolítica</li>
          <li>Java 7 and 8</li>
          <li>Adaptar desde una arquitectura SOAP a una REST</li>
          <li>Desplegar usando maven</li>
        </ul>
      </article>

      <article>
        <h1>
          <a href="http://www.strategybigdata.com" title="strategybigdata" target="_blank">Strategy Big Data<span>&nbsp;&nbsp;&nbsp;&nbsp;(Madrid, España)</span></a>
          <!--<span>Software Engineer</span>-->
        </h1>

        <h2>Data Engineer y Arquitecto</h2>
        <time datetime="2017-11-01" class="start">Nov. 2017</time>
        <time datetime="2019-05-01" class="end">May 2019</time>

        <p>
          Strategy Big Data es una compañía joven pero sus fundadores han sido pioneros en Big Data. Strategy
          trata de ayudar a las compañías en su gestión de datos, así como proveerles de la mejor solución, para
          aprovechar de la mejor forma sus datos.
        </p>

        <p>
          Trabajo en varios proyectos de Beam Suntory (Beam Suntory es el tercer productor mundial de bebidas destiladas).
          Alienado con los equipos de Chicago y Madrid, hemos creado varios procesos para extraer datos de varios
          proveedores y subirlos a Big Query.
        </p>

        <p>
          Mis tareas eran:
        </p>

        <ul>
          <li>Trabajar con un equipo multicultural.</li>
          <li>Tomar los requerimientos del Senior Manager.</li>
          <li>Controlar la calidad del Código</li>
          <li>Desarrollar nuevas funcionalidades.</li>
          <li>Scala 2.11 y Spark 2.2.0.</li>
          <li>SBT.</li>
        </ul>
      </article>

      <article>
        <h1>
          <a href="http://www.datio.com" title="datiobigdata" target="_blank">Datio Big Data<span>&nbsp;&nbsp;&nbsp;&nbsp;(Madrid, España)</span></a>
          <!--<span>Software Engineer</span>-->
        </h1>

        <h2>Arquitecto Software e Ingeniero de Datos</h2>
        <time datetime="2016-08-01" class="start">Agosto 2016</time>
        <time datetime="2017-11-01" class="end">Nov. 2017</time>

        <p>
          Datio es una "Join Venture" entre el BBVA y Stratio Big Data. Esta compañía esta construyendo un nuevo entorno para
          explotar la información de forma rápida, fiable y escalable.
        </p>

        <p>
          En Datio desarrollé roles diferentes, primero como desarrollador participé en el desarrollo de un programa de carga de datos. Más tarde,
          como arquitecto, estuve liderando un equipo en la migración de un proceso.
        </p>

        <p>
          Mis tareas eran:
        </p>

        <ul>
          <li>Trabajar como parte un equipo siguiendo la metodología Scrum.</li>
          <li>Tomar los requerimientos del Product Owner.</li>
          <li>Elegir la tecnología correcta para su desarrollo.</li>
          <li>Controlar la calidad del Código</li>
          <li>Desarrollar nuevas funcionalidades.</li>
          <li>Java 1.8, Scala 2.11, Spark 1.6.2 y Kafka.</li>
          <li>Maven 3.</li>
        </ul>
      </article>

      <article>
        <h1>
          <a href="http://www.thomascook.com/" title="thomascook" target="_blank">Thomas Cook<span>&nbsp;&nbsp;&nbsp;&nbsp;(Londres, Reino Unido)</span></a>
          <!--<span>Software Engineer</span>-->
        </h1>

        <h2>Ingeniero del Software</h2>
        <time datetime="2014-03-01" class="start">Marzo 2014</time>
        <time datetime="2016-08-01" class="end">Agosto 2016</time>

        <p>
          Thomas Cook Group plc es una de las agencias mas importantes del mundo con ventas de más de 9000 millones de
          libras y más
          de 20 millones de clientes al año. En Thomas Cook trabajan más de 27.000 empleados y opera en 17 países.
        </p>

        <p>
          Durante los últimos años he trabajado en varios equipos de Thomas Cook (My Account y Checkout),
          construyendo un sitio donde los clientes puedan gestionar sus reservas, datos personales e interactuar con la
          web.
        </p>

        <p>
          Mis tareas son:
        </p>

        <ul>
          <li>Crear un nuevo sitio para los Clientes en varios idiomas y diferente configuración</li>
          <li>Integrar los diversos proveedores que tenemos.</li>
          <li>Crear un nuevo api.</li>
          <li>Java 1.7 y Spring REST.</li>
          <li>Node y Angular.</li>
          <li>Construir una base de datos No relacional.</li>
          <li>Metodologías Agile (Scrum).</li>
          <li>Maven 3 y Grunt.</li>
          <li>GIT para control de código.</li>
        </ul>
      </article>
      <article>
        <h1>
          <a href="http://www.odigeo.com" title="Odigeo" target="_blank">Odigeo<span>&nbsp;&nbsp;&nbsp;&nbsp;(Madrid, Spain)</span></a>
          <!--<span>Software Engineer</span>-->
        </h1>

        <h2>Ingeniero del Software</h2>
        <time datetime="2011-12-01" class="start">Dic 2011</time>
        <time datetime="2014-02-28" class="end">Feb 2014</time>
        <p>
          Edreams Odigeo es un grupo de agencias de viajes. En este grupo se encuentran eDreams, Opodo, Travellink o
          Go vayages.
          Desde finales del 2011 trabajé en la web de Opodo. Mis tareas principales era crear nuevas funcionalidades
          en la web de Opodo y mantener su correcto funcionamiento (Busqueda de Vuelos y Hoteles, y procesos de pago).
        </p>

        <p>
          Mis tareas eran:
        </p>

        <ul>
          <li>Juzgar las necesidades de los Mercados (DE, IT, UK y FR), convirtiendo sus requerimientos en
            desarrollos específicos.
          </li>
          <li>Discutir las diferentes posibilidades y estrategías para el desarrollo de la web de Opodo.</li>
          <li>Adaptar la web de Opodo a la Plataforma Única.</li>
          <li>Desarrollo en Java 1.5, Spring, Hibernate y Struts.</li>
          <li>Oracle DB.</li>
          <li>Junit.</li>
          <li>Metodologías Agile (Scrum).</li>
          <li>Maven 2.</li>
          <li>Mercurial.</li>
        </ul>
      </article>
      <article>
        <h1><a href="#" title="Tecnogram Engineering">Tecnogram Ingeniería S.L.<span>&nbsp;&nbsp;&nbsp;&nbsp;(Madrid, Spain)</span></a>
        </h1>

        <h2>Desarrollador Senior</h2>
        <time datetime="2010-11-30" class="start">Nov 2010</time>
        <time datetime="2011-11-30" class="end">Nov 2011</time>
        <p>
          Tecnogram desarrolla software especifico para la industria de defensa. Sus principales clientes son: INDRA
          SISTEMAS, NAVANTIA, ARMADA ESPAÑOLA Y AIRBUS MILITARY. Destinado en el cliente "Airbus Military", analizaba
          y desarrollaba aplicaciones para esta compañía.
        </p>

        <p>
          Mis tareas eran:
        </p>

        <ul>
          <li>Reuniones con los clientes para obtener nuevas especificaciones.</li>
          <li>Análisis y especificaciones de las nuevas aplicaciones.</li>
          <li>Mantenimiento de servidores y aplicaciones.</li>
          <li>Usabamos un BPM llamado Timeprocess para crear nuevas aplicaciones.</li>
          <li>java 1.4 y 1.6.</li>
          <li>Oracle DB.</li>
          <li>Subversion</li>
          <li>Ant.</li>
        </ul>
      </article>
      <article>
        <h1><a href="http://www.paptecnos.net" title="PAP Tecnos S.A.">PAP Tecnos S.A.<span>&nbsp;&nbsp;&nbsp;&nbsp;(Madrid, Spain)</span></a>
        </h1>

        <h2>Desarrollador Junior, Analista - Programador</h2>
        <time datetime="2008-05-01" class="start">Junio 2007</time>
        <time datetime="2010-03-01" class="end">Oct 2010</time>
        <p>
          PAP TECNOS S.A. es una compañía española que desarrolla y provee una gran variedad de equipos y
          sistemas de última generación para aplicaciones de defensa.
        </p>

        <p>
          Mis tareas eran:
        </p>

        <ul>
          <li>Desarrollar aplicaciones especificas para Airbus Military.</li>
          <li>Analizar los requisitos de los clientes.</li>
          <li>Mantenimiento de servidores y aplicaciones.</li>
          <li>Oracle DB.</li>
          <li>java 1.4.</li>
          <li>Subversion</li>
          <li>Ant.</li>
        </ul>
      </article>
      <article>
        <h1><a href="#" title="Telefonica Soluciones">Telefonica Soluciones</a><span>&nbsp;&nbsp;&nbsp;&nbsp;(Madrid, Spain)</span>
        </h1>

        <h2>Desarrollador</h2>
        <time datetime="2003-03-01" class="start">Marzo 2006</time>
        <time datetime="2008-05-01" class="end">Mayo 2007</time>
        <p>
          Telefónica Soluciones es parte de Telefónica (hoy en día, Movistar). Este area se encarga de realizar los
          Test verticales y
          horizontales de todas la aplicaciones que funcionan en la compañía.
        </p>

        <p>
          Mis tareas eran:
        </p>

        <ul>
          <li>Gestionar un Work log y asegurar su correcto comportamiento.</li>
          <li>Desarrollo de pequeñas aplicaciones web para los equipos.</li>
          <li>Oracle DB.</li>
          <li>Microsoft SQL Server.</li>
          <li>.Net (C#).</li>
          <li>JavaScript.</li>
          <li>Ajax.</li>
        </ul>

      </article>
      <article>
        <h1><a href="#" title="IFS Defence">IFS Defence</a> <span>&nbsp;&nbsp;&nbsp;&nbsp;(Uxbridge y New Malden, London, UK)</span>
        </h1>

        <h2>IFS Defence</h2>
        <time datetime="2003-03-01" class="start">Febrero 2004</time>
        <time datetime="2008-05-01" class="end">Julio 2004</time>
        <p>
          Estudiante en Practicas en IfsDefence (BAE System - IFS). Durante cinco meses estuve en departamento IT de
          esta compañía,
          en ocasiones, di soporte al departamento de marketing de la compañía.
        </p>

        <p>
          Mis tareas eran:
        </p>

        <ul>
          <li>Obtener piezas de repuesto de los portatiles viejos.</li>
          <li>Reparar los portátiles  e instalar software.</li>
          <li>Usar Ghost para instalaciones masivas.</li>
          <li>Configurar y gestionar sus servidores web y FTP.</li>
          <li>Ayudar al departamento de Marketing en algunas tareas.</li>
        </ul>
      </article>
    </section>

    <section id="education" class="sectionAbout">
      <h1>Educación</h1>
      <br/>
      <article>
        <h1>Ingniero Informático</h1>

        <h2>Universidad Pontificia de Comillas (Madrid, Spain)</h2>

        <p>
          Después de proyecto de final de carrera, continué dos años mas para obtener el titulo como Ingeniero
          Superior.
        </p>

        <p>
          Obtuve conocimientos acerca de:
        </p>

        <ul>
          <li>Gestionar Bases de Datos.</li>
          <li>Conocimientos en Inteligencia Artificial.</li>
          <li>Conocimientos en Compiladores.</li>
        </ul>
      </article>
      <br/>
      <article>
        <h1>Ingeniero Técnico en Informática de Gestión</h1>

        <h2>Universidad Pontificia de Comillas (Madrid, Spain)</h2>

        <p>
          Obtuve habilidades para programación Orientada a Objetos, Ingeniería del Software, Estructura de datos,
          Bases de datos,
          Análisis y Algorítmica. Mi proyecto final de carrera fue un sistema transaccional Bancario.
        </p>

        <p>
          Obtuve conocimientos acerca de:
        </p>

        <ul>
          <li>Desarrollar, mantener y evaluar Software.</li>
          <li>Identifica, analizar y resolver problemas usando las estrategias y tecnologías disponibles.</li>
          <li>Trabajar independientemente con mis propias fechas de entrega.</li>
          <li>Trabajar en Equipo.</li>
        </ul>
      </article>
    </section>

    <section id="hobbies" class="sectionAbout">
      <h1>Hobbies e Intereses</h1>
      <ul>
        <li>Deportes: Running, Natación, ciclismo y Triatlón.</li>
        <li>Fotografía.</li>
        <li>Viajar.</li>
        <li>Juegos (PS3).</li>
        <li>Metodologías Ágiles.</li>
        <li>Leer.</li>
      </ul>
    </section>

  </aside>

</div>

<?php get_footer(); ?>