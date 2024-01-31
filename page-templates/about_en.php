<?php
/**ƒ
 * Template Name: Resume page in English
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
        <li><a href="#skills" class="arrow">My Tech Skills</a></li>
        <li><a href="#experience" class="arrow">My Work Experience</a></li>
        <li><a href="#education" class="arrow">My Education</a></li>
        <li><a href="#hobbies" class="arrow">My Hobbies</a></li>
      </ul>
    </menu>
  </aside>

  <aside class="grid col-three-quarters mq2-col-two-thirds mq3-col-full">
    <section class="vcard">
      <h1 class="fn">Antonio Mart&iacute;n</h1>

      <h2 class="role" style="font-size: 0.9em; font-weight: bold;">Data Engineer and Architect</h2>
      <ul class="contact">
        <li class="email">antoniomartinescalera@gmail.com</li>
        <li class="tel">+34 616 845 513</li>
        <li class="url"><a href="http://www.antoniomartin.info"
                           title="Antonio Martin Web Site">http://www.antoniomartin.info</a>
        </li>
        <li class="adr"><span class="locality">Cádiz</span>, <span class="country-name">Spain</span></li>
        <li class="url twitter">@amartinescalera</li>
      </ul>
      <ul class="contact">
        <li class="email">-</li>
        <li class="tel">+44 7763 360374</li>
        <li class="url">-</li>
        <li class="adr"><span class="locality">Londres</span>, <span class="country-name">Reino Unido</span></li>
        <li class="url twitter"> -</li>
      </ul>
    </section>

    <section id="summary" class="sectionAbout">
      <h1>Summary</h1>

      <p>
        I am a highly motivated professional, with international work experience and ten years experience using Java
        technologies, during I have achieved relevant and valuable technical skills. I am looking for a position in the web developing
        field. Key areas of expertise include new and creative development of Websites and database design, producing excellent
        adaptability to new teams and challenging tasks.
      </p>

      <p>
        I love to spend my free time doing sports: Running, Swiming, Cycling and among things. I am an amateur
        triathlete and an Ironman finisher.
      </p>

    </section>

    <section id="skills" class="sectionAbout">
      <h1>Tech Skill</h1>
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

        <dt>Java Technologies</dt>
        <dd title="Struts">Struts</dd>
        <dd title="Hibernate">Hibernate</dd>
        <dd title="JUnit">JUnit</dd>
        <dd title="Test Drive Development">TDD</dd>
        <dd title="EJB">EJB</dd>
        <dd title="Websocket">Websocket</dd>
        <dd title="Spring">Spring</dd>
        <dd title="Spring Boot">Spring Boot</dd>

        <dt>Data Base</dt>
        <dd title="MySql">MySql</dd>
        <dd title="Oracle">Oracle</dd>
        <dd title="SQL Server">SQL Server</dd>
        <dd title="DB2">DB2</dd>

        <dt>Big Data</dt>
        <dd title="Spark">Spark</dd>
        <dd title="Kafka">Kafka</dd>
        <dd title="MongoDB">Mongo DB</dd>

        <dt>Operative System</dt>
        <dd title="MAC OS">MAC OS</dd>
        <dd title="Linux (Ubuntu & Debian)">Linux (Ubuntu & Debian)</dd>
        <dd title="Windows (XP, Server, 2003, Vista and 7)">Windows (XP, Server, 2003, Vista and 7)</dd>

        <dt>Version Control</dt>
        <dd title="GIT">GIT</dd>
        <dd title="Mercurial">Mercurial</dd>
        <dd title="CVS">CVS</dd>
        <dd title="Subversion">Subversion</dd>

        <dt>Web Server</dt>
        <dd title="Apache Tomcat">Apache Tomcat</dd>
        <dd title="Nginx">Nginx</dd>
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
      <h1>Work Experience</h1>
      <article>
        <h1>
          <a href="https://www.optimagaming.com/" title="optimagaming" target="_blank">Optima MGS<span>&nbsp;&nbsp;&nbsp;&nbsp;(Sevilla, España)</span></a>
        </h1>

        <h2>Domain and Software Architect</h2>
        <time datetime="2019-05-01" class="start">May 2019</time>
<!--        <time datetime="2020-08-01" class="end">Sep. 2020</time>-->
        <span class="end">Present</span>

        <p>
          OptimaMGS, a brand of Sportradar is a group of companies developing and maintaining Gambling and Bookmaking software
          worldwide for the commercial online and retail gambling industry since 2012.
        </p>

        <p>
          OptimaMGS is transforming from a horizontal architecture, teams are working for all code pieces, to a vertical architecture:
          The teams work for a specific area. I include in the FixedOdds and Core team during this time.
        </p>

        <p>
          My Tasks are:
        </p>

        <ul>
          <li>Work in a multicultural team.</li>
          <li>Take the requirements from the Manager and differents customers</li>
          <li>Control the Quality Code</li>
          <li>Transform code from a monolith to several microservices</li>
          <li>Java 7 and 8</li>
          <li>Adapt SOAP Architecture to REST</li>
          <li>Deploy using maven.</li>
        </ul>

      </article>

      <article>
        <h1>
          <a href="http://www.strategybigdata.com" title="strategybigdata" target="_blank">Strategy Big Data<span>&nbsp;&nbsp;&nbsp;&nbsp;(Madrid, España)</span></a>
        </h1>

        <h2>Data Engineer and Architect</h2>
        <time datetime="2017-11-01" class="start">Nov. 2017</time>
        <time datetime="2019-05-01" class="end">May 2019</time>

        <p>
          Strategy Big Data is a young company but its founders have been pioneers in the Big Data field. Strategy Big Data
          helps companies with their data management as well as provide them with the best solution for using their data.
        </p>

        <p>
          I am working on several projects of Beam Suntory (Beam Suntory It is the third largest producer of distilled beverages worldwide).
          Working with the Chicago's and Madrid's teams, we have created several processes for extracting information of several
          providers and upload this information to Big Query.
        </p>

        <p>
          My Tasks were:
        </p>

        <ul>
          <li>Work in a multicultural team.</li>
          <li>Take the requirements from the Senior Manager.</li>
          <li>Control the Quality Code</li>
          <li>Develop new functionalities</li>
          <li>Scala 2.11 and Spark 2.2.0.</li>
          <li>Deploy using SBT.</li>
        </ul>

      </article>

      <article>
        <h1>
          <a href="http://www.datio.com" title="datiobigdata" target="_blank">Datio Big Data<span>&nbsp;&nbsp;&nbsp;&nbsp;(Madrid, España)</span></a>
        </h1>

        <h2>Software Architect and Data Engineer</h2>
        <time datetime="2016-08-01" class="start">Aug. 2016</time>
        <time datetime="2017-11-01" class="end">Nov. 2017</time>

        <p>
          Datio is a Joint venture between one the biggest bank in the world (BBVA) and a Big Data Company (Stratio).
          This company is building a new environment for exploiting the data quick, reliable and scalable.
        </p>

        <p>
          I have worked different roles in DATIO. I was a big data developer in an interface for loading data with Spark.
          After this interface, I was working as a Team Leader in one process migration to Spark.
        </p>

        <p>
          My tasks were:
        </p>

        <ul>
          <li>Working a part of a Team following Scrum.</li>
          <li>Take the requirements from the Product Owner.</li>
          <li>Choose the right technology for developing the requirements.</li>
          <li>Control software quality.</li>
          <li>Develop new functionalities</li>
          <li>Java 1.8, Scala 2.11, Spark 1.6.2 and Kafka.</li>
          <li>Deploy using Maven and Git (Revision Control).</li>
        </ul>

      </article>

      <article>
        <h1>
          <a href="http://www.thomascook.com/" title="thomascook">Thomas
            Cook<span>&nbsp;&nbsp;&nbsp;&nbsp;(London, UK)</span></a>
        </h1>

        <h2>Software Engineer</h2>
        <time datetime="2014-03-01" class="start">Mar. 2014</time>
        <time datetime="2016-08-01" class="end">Aug. 2016</time>

        <p>
          In Thomas Cook Group (one of the world’s leading leisure travel groups), I have been working for several
          teams.
          I was involved in the development of the Customer API (Called My Account) from the beginning. We developed a
          complete APIRest to communicate different internals tools with the Website and the Mobiles App. After
          sometime,
          I created a APIRest to communicate our providers with the customer API. With this new tool the customer could
          check their bookings and add new extras.
        </p>

        <p>
          My Tasks includes:
        </p>

        <ul>
          <li>Take the requirements from the Product Owner.</li>
          <li>Give priority the most valuable requirements to the customers.</li>
          <li>Involved in sprint planning, grooming, stand-up, retrospective, and show&tell meetings.</li>
          <li>Create the REST APIs using TDD, we have more than 80% coverage in our Code.</li>
          <li>Integrate diferentes providers with the customer place.</li>
          <li>Working a part of a Team following Scrum methodology and setting our own deadlines. Always considering
            what was the optimal deadline for the customer.
          </li>
        </ul>

        <p>
          Devs Environment:
        </p>

        <ul>
          <li>Mule, Apache Tomcat, Nginx, Java 1.7, Spring REST, Hibernate, Mongo DB, MySql, NodeJS and Angular.</li>
          <li>Deploy using Maven, grunt and Git (Revision Control).</li>
        </ul>

      </article>
      <article>
        <h1>
          <a href="http://www.odigeo.com" title="Odigeo">Opodo (Odigeo Group)<span>&nbsp;&nbsp;&nbsp;&nbsp;(Madrid, Spain)</span></a>
        </h1>

        <h2>Software Engineer</h2>
        <time datetime="2011-12-01" class="start">Dec 2011</time>
        <time datetime="2014-02-28" class="start">Feb 2014</time>
        <p>
          In Opodo (part of the European biggest E-Travel Group ODIGEO). I was responsible to create new functionalities
          for the shopping basket and flights of Opodo and maintain its correct behaviour (Search Flights, Transactions
          and
          Payment process).
        </p>

        <p>
          My Tasks were:
        </p>

        <ul>
          <li>Judging market’s needs, converting them into requirements of specific development, in order to develop the
            Website matching his demands.
          </li>
          <li>Discussing the different possibilities and strategies for the development of the Site with the markets.
          </li>
          <li>Adapt Opodo's sites for one group platform.</li>
          <li>Using Junit for unit testing.</li>
          <li>Working with my Team in Scrum and setting our own deadlines, keeping the Markets updated with our
            progress.
          </li>
        </ul>

        <p>
          Devs Environment:
        </p>

        <ul>
          <li>JBoss, Apache, Java 1.5, Spring, Hibernate, Struts, Oracle DB, Junit, Jquery and JSP.</li>
          <li>Deploy using Maven and Mercurial.</li>
        </ul>

      </article>
      <article>
        <h1><a href="#" title="Tecnogram Engineering">Tecnogram Engineering S.L. <span>&nbsp;&nbsp;&nbsp;&nbsp;(Madrid, Spain)</span></a>
        </h1>

        <h2>Senior Developer</h2>
        <time datetime="2010-11-30" class="start">Nov 2010</time>
        <time datetime="2011-11-30" class="end">Nov 2011</time>
        <p>
          Tecnogram develops software's specific for defence industries. Its mainly customers are INDRA SISTEMAS, NAVANTIA,
          SPANISH NAVY and AIRBUS MILITARY. I have analysed and I developed various applications for Airbus Military:
          Human Resources and incidence systems of planes
        </p>

        <p>
          My Tasks were:
        </p>

        <ul>
          <li>Meeting with the customers to get new specifications.</li>
          <li>Analysing and Specifications of new applications.</li>
          <li>Maintain the correct behaviour of servers and applications.</li>
          <li>Using a business process management (Framework TimeProcess) to create the new applications.</li>
        </ul>

        <p>
          Devs Environment:
        </p>

        <ul>
          <li>Java 1.4, Java 1.6, Oracle DB, Hibernate, Spring, Spring MVC, XML, JavaScript and JQuery.</li>
          <li>Deploy using Subversion and Ant for control version.</li>
        </ul>
      </article>
      <article>
        <h1><a href="http://www.paptecnos.net" title="PAP Tecnos S.A.">PAP Tecnos S.A. <span>&nbsp;&nbsp;&nbsp;&nbsp;(Madrid, Spain)</span></a>
        </h1>

        <h2>Junior Programmer, Analyst - Developer</h2>
        <time datetime="2008-05-01" class="start">Jun 2007</time>
        <time datetime="2010-03-01" class="end">Oct 2010</time>
        <p>
          PAP TECNOS S.A. is a Spanish company that manufactures and supplies a wide variety of equipment and systems of
          last generation for application in the defence and security market., under license of international OEM's.
        </p>

        <p>
          My Tasks were:
        </p>

        <ul>
          <li>Develop specific applications for Airbus Military.</li>
          <li>Gather and analyse the customer's requirements.</li>
          <li>Manage the correct behaviour of the server and the applications.</li>
        </ul>

        <p>
          Devs Environment:
        </p>

        <ul>
          <li>Oracle, Java 1.4 and Struts.</li>
          <li>Deploy using subversion and Ant for control version.</li>
        </ul>
      </article>

      <article>
        <h1><a href="#" title="Telefonica Soluciones">Telefonica Soluciones</a> <span>&nbsp;&nbsp;&nbsp;&nbsp;(Madrid, Spain)</span>
        </h1>

        <h2>Programmer</h2>
        <time datetime="2003-03-01" class="start">March 2006</time>
        <time datetime="2008-05-01" class="end">May 2007</time>
        <p>
          Telefonica Soluciones is a part of Telefonica (Nowadays, Movistar). this areas is in charge of realise the
          software tests.
        </p>

        <p>
          My Tasks were:
        </p>

        <ul>
          <li>Manage a Work log and ensure its correct behaviour.</li>
          <li>Develop small web applications for Manager Team.</li>
        </ul>

        <p>
          Devs Environment:
        </p>

        <ul>
          <li>Oracle DB, Microsoft SQL Server, .Net, C# and Ajax.</li>
        </ul>
      </article>
      <article>
        <h1><a href="http://www.ifsdefence.co.uk/" title="Copernicus Web Design">IFS Defence</a> <span>&nbsp;&nbsp;&nbsp;&nbsp;(Uxbridge and New Malden, London, UK)</span>
        </h1>

        <h2>Student in practise</h2>
        <time datetime="2004-02-01" class="start">Feb 2004</time>
        <time datetime="2004-06-01" class="end">Jul 2004</time>
        <p>
          Student in Practice in IfsDefence (British Aerospace System – Ifs). I was working in IT department and I
          occasional work with marketing projects for a company.
        </p>

        <p>
          My Tasks were:
        </p>

        <ul>
          <li>Get spare parts of old laptops.</li>
          <li>Repair laptops and install software.</li>
          <li>Install Software in several Computers (using Ghost).</li>
          <li>Configure and manage servers, website and ftp.</li>
          <li>Help marketing department in some tasks.</li>
        </ul>

      </article>
    </section>

    <section id="education" class="sectionAbout">
      <h1>Education</h1>
      <br/>
      <article>
        <h1>Mayor Degree in Computer Science Engineering. Syllabus is UK equivalent to a Masters of Engineering in
          Software Engineering.</h1>

        <h2>University of Pontificia Comillas (Madrid, Spain)</h2>

        <p>
          After my final project, I continued two years more for I get another degree. My degree focussed on
          management Databases, Artificial Intelligent, Compilers , Advanced Object Orientated Programming and
          Advanced Network Management.
        </p>

        <p>
          I gained the ability to:
        </p>

        <ul>
          <li>Management Databases.</li>
          <li>Knowledges in Artificial Intelligence.</li>
          <li>Knowledges in compilers.</li>
        </ul>

      </article>
      <br/>
      <article>
        <h1>Three-year Computer Science Engineering</h1>

        <h2>University of Pontificia Comillas (Madrid, Spain)</h2>

        <p>
          My degree focussed on management and involved subjects such as: Object Orientated Programming, Software
          Engineering, Data Structure, Databases, Analysis and Algorithm Design, Installation and Management of
          hardware and software and a final year project. My final year project consisted of creating a Transactional
          System.
        </p>

        <p>
          I gained the ability to:
        </p>

        <ul>
          <li>Develop, maintain and evaluate software systems and services that meet all user and standard
            requirements.
          </li>
          <li>Identify, analyse and solve problems using the available strategies and technologies.</li>
          <li>Work independently, setting my own deadlines and managing my time when under pressure..</li>
          <li>Interact with other students and members of staff on a regular basis..</li>
        </ul>

      </article>
    </section>

    <section id="hobbies" class="sectionAbout">
      <h1>Hobbies &amp; Interests</h1>
      <ul>
        <!--<li>Playing Drums and Percussion (Caj&oacute;n) with <a href="https://www.facebook.com/DiplomatasBrasil" rel="external" title="Diplomatas on Facebook">Diplomatas</a>, an acoustic trio;</li>-->
        <li>Sports: Running, cycling, swimming and Triathlon (Ironman Finisher);</li>
        <li>Photography;</li>
        <li>Travelling;</li>
        <li>Gaming (from Spectrum to PS3).</li>
        <li>Agile.</li>
        <li>Reading.</li>
      </ul>
    </section>

  </aside>

</div>
<!--main-->

<?php get_footer(); ?>