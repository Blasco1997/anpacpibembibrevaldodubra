<?php
    session_start();
    //include "estilosindex.php";
?>
<!DOCTYPE html>
<html lang="gl-ES">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="max-image-preview:large" />
        <title>ANPA CPI VAL DO DUBRA &#8211; Punto de encuentro y comunicación entre el ANPA del CPI de Bembibre y sus asociados, para informar sobre actividades extraescolares, charlas, excursiones, etc.</title>
        <link rel="stylesheet" type="text/css" href="CSS/estilosestatutos.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <header>
            <div class="vacio1"></div>
            <div class="logo">
                <img src="Imágenes/logo.png" width="100%" alt="Logo ANPA CPI Bembibre"/>
            </div>
            <div class="vacio2"></div>
            <div class="tituloedescricion">
                <h1>ANPA CPI VAL DO DUBRA</h1>
                <p>Punto de encuentro y comunicación entre el ANPA del CPI de Bembibre y sus asociados, para informar sobre actividades extraescolares, charlas, excursiones, etc.</p>
            </div>
            <nav class="navegacion">
                <ul>
                    <li id="inicio">INICIO</li>
                    <li id="sobrenosotros">SOBRE NOSOTROS</li>
                    <li id="ocentro">EL CENTRO</li>
                    <li id="estatutos" class="seleccionado">ESTATUTOS</li>
                    <li id="contacto">CONTACTO</li>
                    <?php
                        if(isset($_SESSION["admin"])){
                            $admin = $_SESSION["admin"];
                            echo "<li>Hola, $admin&nbsp;&nbsp;<a href='cerrarsesion.php'><img src='Imágenes/exit.png' width='35' style='vertical-align: middle;' alt='Exit'></a></li>";
                        } else {
                            echo "<li id='iniciarsesion'>INICIAR SESIÓN</li>";
                        }
                    ?>
                </ul>
                <script>
                        let inicio = document.getElementById("inicio");
                        let sobrenosotros = document.getElementById("sobrenosotros");
                        let ocentro = document.getElementById("ocentro");
                        let esatutos = document.getElementById("estatutos");
                        let contacto = document.getElementById("contacto");
                        let iniciarsesion = document.getElementById("iniciarsesion");
                        inicio.addEventListener("click", function(){
                            window.location.href = "index.php";
                        });
                        sobrenosotros.addEventListener("click", function(){
                            window.location.href = "sobrenosotros.php";
                        });
                        ocentro.addEventListener("click", function(){
                            window.location.href = "http://www.edu.xunta.gal/centros/cpibembibre/";
                        });
                        estatutos.addEventListener("click", function(){
                            window.location.href = "estatutos.php";
                        });
                        contacto.addEventListener("click", function(){
                            window.location.href = "contacto.php";
                        });
                        iniciarsesion.addEventListener("click", function(){
                            window.location.href = "iniciarsesion.php";
                        });
                    </script>
            </nav>
        </header>
        <main>
            <div class="titulopaxina">
                <h1>ESTATUTOS</h1>
            </div>
            <section class="estatutos">
                <article class="estatuto">
                    <h1>CAPÍTULO I</h1>
                    <h2>DENOMINACIÓN</h2>
                    <p>Artículo 1º.-LA ASOCIACIÓN DE PADRES DE ALUMNOS “TERRA DE DUBRIAM”, DEL CENTRO PÚBLICO INTEGRADO DE BEMBIBRE, 
                    que más adelante en estos estatutos se denominará Asociación, el amparo de lo dispuesto en la Ley Orgánica 1/2002, 
                    del 22 de marzo, y normas complementarias, es una entidad con capacidad jurídica y plena capacidad de obrar, 
                    careciendo de ánimo de lucro. La Asociación se constituye por tiempo indefinido.</p>
                </article>
                <article class="estatuto">
                    <h1>CAPÍTULO II</h1>
                    <h2>DOMICILIO SOCIAL</h2>
                    <p>Artículo 2º.-La Asociación tendrá el domicilio social en el Centro Público Integrado de Bembibre, Valle del Dubra,
                    A Coruña.</p>
                    <p>Artículo 3º.-Para la realización de las actividades que le son propias, a Asociación utilizará los locales del 
                    Centro, a estos efectos el Director facilitará la integración de dichas actividades en la vida escolar, teniendo en 
                    cuenta el normal desarrollo de la misma. Para utilizar los locales la Junta Directiva deberá comunicarlo a 
                    Dirección del Centro.</p>
                </article>
                <article class="estatuto">
                    <h1>CAPÍTULO III</h1>
                    <h2>ÁMBITO TERRITORIAL</h2>
                    <p>Artículo 4º.-El ámbito territorial en el que va a extender su acción es provincial. Comprendiendo preferentemente 
                    el Ayuntamiento de Valle del Dubra y zonas limítrofes.</p>
                </article>
                <article class="estatuto">
                    <h1>CAPÍTULO IV</h1>
                    <h2>FINES DE LA ASOCIACIÓN</h2>
                    <p>Artículo 5º.- Los fines de la asociación son:</p>
                    <ol>
                        <li>Asistir los padres y tutores en todo aquello que alcanze a la educación de sus hijos y alumnos.</li>
                        <li>Colaborar en las actividades educativas y extraescolares del Centro y prestar ayuda al mismo para el mejor 
                        desarrollo de sus actividades pedagógicas y culturales.</li>
                        <li>Promover actividades formativas, culturales, deportivas y de estudio.</li>
                        <li>Fomentar las iniciativas artísticas, culturales y de información y comunicación del alumnado y de los padres, 
                        por medio de concursos, exposiciones escolares, representaciones teatrales y musicales, conferencias y charlas 
                        pedagógicas, cursillos divulgativos, proyecciones, excursiones, visitas a centros industrales y otras actividades 
                        semejantes, divulgándolas entre los socios y el público en general.</li>
                        <li>Promover reuniones de colaboración de padres con profesores y las buenas relaciones entre ambos, a fin de conseguir
                        una identidad en los objetivos educacionales y un mutuo conocimiento de circunstancias y peculiaridades de los alumnos
                        y defender los derechos de alumnos y padres en cuanto a la enseñanza, educación y formación de aquellos en colaboración 
                        con los profesores y Órganos de la Administración Pública.</li>
                        <li>Promover a plena realización do principio de gratituidad en el ámbito del Centro, así como la efectiva igualdad 
                        de derechos de todos los alumnos sin discriminación por razóns socioeconómicas, ideológicas, confesionales, raza 
                        o sexo.</li>
                        <li>Organizar la Escuela de Padres que tienda a buscar los medios para integrar a los padres en el proceso educativo.</li>
                        <li>Conjuntar con el centro los programas de educación familiar destinados a desarrollar la misión educacional de los padres
                        y tutores, y los de formación permanente de adultos aprobados por la Administración.</li>
                        <li>Promover la participación de los padres de alumnos en la gestión del Centro.</li>
                        <li>Asistir los padres de alumnos en el ejercicio de su derecho a invertir en el control y en la gestión del Centro.</li>
                        <li>Facilitar la representación de los padres de alumnos en el Consejo Escolar del Centro.</li>
                        <li>Estimular la participación de los padres de alumnos en la programación general de la enseñanza a través del órgano colegiado 
                        correspondiente.</li>
                        <li>Fomentar las relaciones de cooperación del Centro con otros establecimentos escolares y los sectores socios y 
                        culturales del entorno.</li>
                        <li>Requerir a los poderes públicos el cumprimento de las leyes, regulamientos y planes de actuación relativas a la educación, 
                        solicitando la atención y ayudas que esta merece.</li>
                        <li>Participar en la medida de lo posible en la problemática educativa local, provincial y autonómica a través de los canales 
                        legales, prestando también especial atención al aspecto lingüístico, cultural y social de Galicia.</li>
                        <li>Y todas aquellas actividades, no recogidas en estos Estatutos y que sean conformes a la Ley. </li>
                    </ol>
                    <p>Artículo 6º.-Para el mejor cumplimiento de sus fins, a Asociación poderá integrarse en Federaciones Provinciales, autonómicas 
                    y estatales, si así se acuerda por la Junta Directiva, dando cuenta la Asamblea General.</p>
                </article>
                <article class="estatuto">
                    <h1>CAPÍTULO V</h1>
                    <h2>DE LOS SOCIOS</h2>
                    <p>Artículo 7º.-Podrán ser miembros de la Asociación todos los padres o tutores de alumnos que cursen estudos en el Centro Público 
                    Integrado de Bembibre.</p>
                    <p>Artículo 8º.-Los socios se clasifican en Socios de Honor y de Número.</p>
                    <ol>
                        <li>Serán Socios de Honor todas aquellas personas, asociadas o no, que presten o hayan prestado desatacados servicios a la Asociación. 
                        El nombramiento de socios de honor corresponderá a la Junta Directiva.</li>
                        <li>Serán Socios de Número los padres, tutores o representantes legales de los alumnos del Centro Público Integrado de Bembibre, 
                        Valle del Dubra.</li>
                    </ol>
                    <p>Artículo 9º.-Serán derechos de los socios:</p>
                    <ol>
                        <li>Tomar parte en todas las actividades de la Asociación y utilizar los servicios que puedan establecerse en beneficio de los socios.</li>
                        <li>Aprovechar todas las ventajas y beneficios que la Asociación pueda obtener.</li>
                        <li>Asistir a todas las reuniones y actos convocados por la Junta Directiva.</li>
                        <li>Colaborar activamente en el cumplimiento de los fines de la Asociación y en la eficacia en las ejecuciones de los mismos.</li>
                        <li>Dirigir petición y proponer iniciativas los órganos de gobierno de la Asociación en orden el mejor cumplimiento de los fines de la 
                        Asociación.</li>
                        <li>Comunicar a la Junta Directiva cualquier queja o reclamación que proceda respecto a los servicios y comportamiento de los 
                        directivos y asociados.</li>
                        <li>Solicitar la convocatoria de la Asamblea General Extraordinaria cuando así lo soliciten, como mínimo, el 10% de los socios.</li>
                        <li>Solicitar y recibir de la Junta Directiva cuanta información se necesite sobre la gestión asociativa, ser informado acerca de la 
                        composición de los órganos de gobierno y representación de la asociación, de su estado de contas e del desarrollo de sus actividades.</li>
                        <li>Elegir y ser ilegible para todas las funciones representativas de la Asociación, y participar en los órganos de gobierno, salvo las excepciones 
                        que establecen los estatutos.</li>
                        <li>Tener voz y voto en las reuniones de la Asociación.</li>
                        <li>Ser oído con carácter previo a la adopción de medidas disciplinarias contra ello y a ser informado de los hechos que den lugar a tales medidas, 
                        debiendo ser motivado el acuerdo que, en su caso, imponga la sanción.</li>
                        <li>A impugnar los acuerdos de los órganos de la asociación que estime contrarios a la Ley o a los Estatutos.</li>
                    </ol>
                    <ul>
                        <li>La condición de socio faculta a los hijos do mismo a participar en todas aquellas actividades realizadas para ellos, como son actividades 
                        extraescolares, excursioness e festivales. Así como gozar de la cobertura de los seguros que la ANPA pueda ter otras ventajas en beneficio de los 
                        alumnos.</li>
                    </ul>
                    <p>Artículo 10º.-Serán deberes de los socios:</p>
                    <ol>
                        <li>Compartir las finalidades de la asociación y colaborar para la consecución de las mismas.</li>
                        <li>Contribuír económicamente el sostenimiento de la Asociación pagando las cuotas, derramas y otras contribucións que, en la forma que se establezca 
                        en la Asamblea, y conforme a los Estatutos, puedan corresponder a cada socio.</li>
                        <li>Observar los Estatutos de la Asociación y los acuerdos de la Asamblea, cumpliendo con las obligas que resulten de las disposiciones estutarias, 
                        y acatando y cumpliendo los acuerdos válidamente adoptados por los órganos de gobierno y representación de la asociación.</li>
                        <li>Asistir a las sesiones de la Asamblea General y demás actos que se organicen.</li>
                        <li>Comunicar a la Junta Directiva cualquier aspecto relacionado con el Centro donde sea necesario que intervenga la Asociación.</li>
                        <li>Mantener unha posición responsable y preocupada en relación a la educación de sus hijos, asistiendo a las reuniones que a ese efecto sean 
                        convocadas, y manteniendo contacto con los profesores y titores.</li>
                        <li>Mantener una actitud correcta y adecuada, en cualquier acto organizado por la Asociación.</li>
                        <li>Desempeñar en su caso, las obligas correspondientes en el cargo que ocupen.</li>
                    </ol>
                    <p>Artículo 11º.-Los socios de honor, en caso de no estar asociados en el momento de su nombramiento, tendrán las mismas obligas que los socios de número, 
                    a excepción de las previstas en los números 2 e 4, del Artículo anterior. Así mismo tendrán los mismos derechos a excepción de los que figuran en los 
                    números 9 y 10 del artículo 9.</p>
                    <p>Artículo 12º.-No se adquiere la condición de socio mientras no se satisfagan las cuotas establecidas.</p>
                    <p>Artículo 13º.-La Asamblea General podrá acordar que los padres de los alumnos de las Escolas Unitarias de la zona puedan participar en algunas actividades 
                    de la asociación, sin poder tener la plena condición de socios, y satisfaciendo, en todo caso, las cuotas adicionales que se establezcan.</p>
                    <p>Artículo 14º.-La condición de socio se pierde:</p>
                    <ol>
                        <li>Por voluntad propia del interesado.</li>
                        <li>Por baja dos hijos o tutelados en el Centro.</li>
                        <li>Por falta injustifcada en el pago de cuotas.</li>
                        <li>Por incumplimento de los estatutos.</li>
                        <li>Por utilización de la Asociación con fines ajenos a los específicos de la misma.</li>
                    </ol>
                    <ul>
                        <li>Los puntos 4 y 5 serán apreciados por la Junta Directiva. Se dará audiencia al interesado, y para tomar el acordo será necesario el 
                            voto afirmativo de los 2/3 de la Junta Directiva. La decisión será efectiva a partir de ese momento. En todo caso, será puesta en conocimiento 
                            de la Asamblea General, quien poderá revocar el acuerdo adoptado.</li>
                        <li>La baja deun socio no le exime de satisfacer las obligas pendientes con la Asociación.</li>
                    </ul>
                    <p>Artículo 15º.-La Junta Directiva está capacitada para imponer sanciones a los asociados que se hagan acreedores a ellas por:</p>
                    <ol>
                        <li>No acatar las normas de los Estatutos.</li>
                        <li>No cumplir las indicaciones de los directivos o delegados.</li>
                        <li>Falta de correción, ofensas a cualquier persona en los actos de la asociación.</li>
                    </ol>
                    <p>Artículo 16º.-La Junta Directiva podrá poner como sanciones:</p>
                    <ol>
                        <li>Amolestación.</li>
                        <li>Suspensión de los derechos de asociado por un periodo de tiempo no superior a tres meses.</li>
                        <li>Expulsión provisional a expensas de lo que sobre de la misma acorde a la Asamblea General.</li>
                    </ol>
                </article>
                <article class="estatuto">
                    <h1>CAPÍTULO VI</h1>
                    <h2>ÓRGANOS DE GOBIERNO</h2>
                    <p>Artículo 17º.-La Asociación estará regentada por los seguientes órganos:</p>
                    <ol>
                        <li>Asemblea General de Socios.</li>
                        <li>Junta Directiva.</li>
                        <li>Presidente.</li>
                    </ol>
                    <p>Artículo 18º.-La Asamblea General de Socios es el órgano supremo de gobierno da Asociación. Poderá reunirse en Sesión Ordinaria y Extraordinaria y los 
                    cargos de Presidente y Secretario de la misma recaerán en los que ocupen estos cargos de la Junta Directiva. En las convocatorias se hará constar lugar, 
                    día, hora y orden del día.</p>
                    <p>Artículo 19º.-La Asamblea General Ordinaria se reunirá dos veces al año, una a principios del curso escolar, preferentemente en Septiembre, y como 
                    máximo en el mes de Octubre, y otra a finales, preferentemente en el mes de Junio. A los asociados se les enviará la convocatoria con ocho días de antelación.</p>
                    <p>Artículo 20º.-La Asamblea General Extraordinaria se reunirá cuando:</p>
                    <ol>
                        <li>Lo estime oportuno el Presidente.</li>
                        <li>Se acuerde por la Junta Directiva, o lo solicite por escrito el Presidente un tercio de la Junta Directiva.</li>
                        <li>Lo soliciten por escrito, como mínimo, un 10% de los socios.</li>
                    </ol>
                    <ul>
                        <li>La convocatoria se hará con tres días de antelación.</li>
                    </ul>
                    <p>Artículo 21º.-La Asamblea General quedará válidamente constituida en primera convocatoria cuando concurran un tercio dos asociados, y en segunda 
                    convocatoria cualquiera que sea el número de asociados presentes. Entre la primera y la segunda convocatoria existirá un margen mínimo de media hora.</p>
                    <p>Artículo 22º.-Los acuerdos se tomarán por mayoría simple, cuando los votos afirmativos superen los negativos, no siendo computables a estes efectos los 
                    votos en blanco ni las abstenciónes.</p>
                    <p>Artículo 23º.-Será necesario o voto favorable dos dous tercios dos asociados presentes na Asamblea Extraordinaria para adoptar as seguntes decisións:</p>
                    <ol>
                        <li>Reforma dos Estatutos.</li>
                        <li>Disolución de la Asociación.</li>
                        <li>Disposición y venta de bienes.</li>
                    </ol>
                    <p>Artículo 24º.-Son facultades da Asamblea General Ordinaria:</p>
                    <ol>
                        <li>Examinar y aprobar las cuentas anuales y los presupuestos.</li>
                        <li>Nombramiento dr los miembros de la Junta Directiva.</li>
                        <li>Conocer y aprobar o censurar la gestión de la Junta Directiva.</li>
                        <li>Revocar el mandato de la Junta Directiva cuando esta pierda la confianza de los socios.</li>
                        <li>Aprobar o rechazar las propuestas de la Junta Directiva en orden a las actividades de la asociación.</li>
                        <li>Fijar las cuotas ordinarias y extraordinarias.</li>
                        <li>Expulsión de los socios, a propuesta de la Junta Directiva.</li>
                        <li>Debatir las cuestiones que, con la debida antelación, propongan los socios a la Junta Directiva para ser incluidas en la Orde del Día.</li>
                    </ol>
                </article>
                <article class="estatuto">
                    <h1>CAPÍTULO VII</h1>
                    <h2>LA JUNTA DIRECTIVA</h2>
                    <p>Artículo 25º.-La Junta Directiva estará formada por:</p>
                    <ol>
                        <li>Un Presidente.</li>
                        <li>Un Vicepresidente.</li>
                        <li>Un Secretario.</li>
                        <li>Un Tesorero.</li>
                        <li>Seis vocales.</li>
                    </ol>
                    <p>Artículo 26º.-Todos los cargos de la Junta Directiva serán honoríficos y recaerán en asociados de número. Tendrán una duración de dos años, 
                    pudiendo renovarse por períodos de igual duración, a mitad de sus miembros cada año.</p>
                    <ul>
                        <li>Una renovación corresponderá los cargos de Presidente, Tesorero y 3 vocales, y otra renovación corresponderá a Vicepresidente, 
                        Secretario a los otros 3 vocales.</li>
                        <li>Para ser miembro de la Junta Directiva es necesario ser mayor de edad, estar en pleno uso de los derechos civiles y no estar incurso en los 
                        motivos de incompatibilidad establecidos en la legislación vigente.</li>
                    </ul>
                    <p>Artículo 27º.-Estos podrán causar baja por renuncia voluntaria comunicada por escrito a la Directiva, por incumplimiento de las obligaciones que 
                    tuvieran encomendadas y por expiración del mandato. Como caso excepcional, cualquier miembro de la Junta Directiva que falte tres veces consecutivas
                    o cinco en todo el año, sin causa xustificada a las sesiones de la misma, podrá ser cesado en su cargo por decisión mayoritaria de esta.</p>
                    <p>Artículo 28º.-Los miembros de la Junta Directiva que hubieran agotado el plazo para el cual fueran elegidos, continuarán ostentando sus cargos 
                    hasta el momento en que se produzca la aceptación de los que los sustituyan. En todo caso, las vacantes que se pudieran producir, podrá cubrirlas la Junta 
                    Directiva de manera provisional, hasta que se celebre la primera reunión de la Asamblea General.</p>
                    <p>Artículo 29º.-La Junta Directiva se reunirá, con carácter extraordinario, cuando lo estime oportuno el Presidente o la petición de un tercio de la 
                    totalidad de sus componentes.</p>
                    <p>Artículo 30º.-Únicamente serán válidos aquellos acuerdos de la Junta Directiva cuando asistan la mitad más uno de sus membros. Los acuerdos se tomarán 
                    por mayoria simple. En caso de empate, resolverá en segunda votación el Presidente, quien tendrá voto de calidad.</p>
                    <p>Artículo 31º.-Son facultades de la Junta Directiva:</p>
                    <ol>
                        <li>Formular y someter la aprobación de la Asamblea General los Balances, las Cuentas Anuales, los presupuestos y el programa anual de actividades.</li>
                        <li>Ejecutar los acuerdos adoptados por la Asamblea General.</li>
                        <li>Dirigir y gestionar las actividades sociales y asuntos ordinarios de la Asociación, y llevar la gestión económica y administrativa de la misma.</li>
                        <li>Fijar las fechas para la celebración de las sesiones de la Asamblea General.</li>
                        <li>Nombrar delegados para alguna determinada actividad de la Asociación.</li>
                        <li>Resolver sobre la admisión de nuevos asociados.</li>
                        <li>Cumplir y velar por el cumplimiento, por parte de los socios, de las disposiciones establecidas en los estatutos.</li>
                        <li>Impoñer sancións os asociados que se fagan acredores as mesmas, conforme os presentes Estatutos.</li>
                        <li>Mantener con el Colegio, con el Director, con los profesores y alumnos toda clase de relaciones encaminadas a lograr la más completa formación 
                        integral de los alumnos y su colaboración, en la medida de lo posible, en la consecución de los objetivos que pretende la Asociación.</li>
                        <li>Fomentar las oportunas relaciones de cooperación e intercambio de ideas, información e iniciativas con las demais asociaciones y Colegios, así 
                        como con los organismos administrativos que considere procedente.</li>
                        <li>Actuar como comisión ejecutiva permanente de la Asamblea General.</li>
                        <li>cualquier otra facultad que no siendo de exclusiva competencia de la Asamblea General de socios, sea conforme a la Ley.</li>
                    </ol>
                    <p>Artículo 32º.-Corresponde al Presidente:</p>
                    <ol>
                        <li>Ostentar la representación legal y pública de la Asociación.</li>
                        <li>Convocar, presidir y levantar las sesiones que celebre la Asamblea General y en la Junta Directiva, así como dirigir las deliberaciones de una y 
                        otra.</li>
                        <li>Fijar la Orden del Día de las sesiones de la Junta Directiva y de la Asamblea General.</li>
                        <li>Ordenar pagos y autorizar con su firma los documentos, actas y correspondencia, firmando con el Tesorero los cheques, talones y documentos 
                        análogos.</li>
                        <li>Cuidar del cumplimiento de los presentes Estatutos, de los acordos de la Junta Directiva y de la Asamblea General.</li>
                        <li>Adoptar cualquier medida urgente para la buena marcha de la Asociación o que resulte necesaria en el desarrollo de sus actividades, dando 
                        cuenta posteriormente a la Junta Directiva.</li>
                    </ol>
                    <p>Artículo 33º.-Corresponde aL Vicepresidente:</p>
                    <ul>
                        <li>Sustituír aL Presidente en caso de ausencia de este, con las mismas atribuciones que él.</li>
                    </ul>
                    <p>Artículo 34º.-Corresponde al Secretario:</p>
                    <ol>
                        <li>Actuar como tal en las reuniones de la Asamblea General y de la Junta Directiva, y redactar las actas correspondientes.</li>
                        <li>Llevar y custodiar el libro registro de socios, y demás libros, sellos y documentos, excepto los de contabilidad.</li>
                        <li>Redactar la Orden del Día y cursar las convocatorias de acuerdo con los estatutos.</li>
                        <li>Redactar la memoria anual y librar certificaciones con referencia a los libros y documentos de la Asociación, con lo visto y placer del Presidente.</li>
                        <li>Llevar la correspondencia.</li>
                        <li>Cursar las comunicaciones sobre designación de Juntas Directivas y demás acuerdos sociales que sea necesario inscribir, a los Registros correspondientes.</li>
                        <li>Encargarse de la tramitación de subvenciones.</li>
                        <li>Cualquier otra gestión administrativa de la Asociación, excepto las encomendadas a otros cargos directivos.</li>
                    </ol>
                    <p>Artículo 35º.-Corresponde al Tesorero:</p>
                    <ol>
                        <li>Recaduar y conservar los fondos y bienes de la Asociación.</li>
                        <li>Llevar la contabilidad.</li>
                        <li>Formular los proyectos de presupuestos y cuentas anuales que deban ser presentados ante la Asamblea General.</li>
                        <li>Exhibir ante los socios durante los quince días anteriores a la Asamblea de principios del curso escolar, las Cuentas Anuales de la Asociación.</li>
                        <li>Presentar en los Organismos pertinentes las Cuentas Anuales, declaraciones fiscales, y cualquier otra documentación de cara a cumplir con las 
                        obligas legales.</li>
                        <li>Firmar con el Presidente los recibos, cheques y documentos contables necesarios, dando cumplimiento las órdenes de pago expedidas por el Presidente.</li>
                    </ol>
                    <p>Artículo 36º.-Corresponde a los Vocales:</p>
                    <ol>
                        <li>Participar en las reuniones de la Junta Directiva con voz y voto, igual que los demás miembros de la misma.</li>
                        <li>Desempeñar las funciones que la Junta Directiva acuerde, entre ellas, presidir o coordinar grupos de trabajo, comisiones, ejecución de encargos y
                        representaciones.</li>
                        <li>Cumplir co las obligas propias de su cargo como miembros de la Junta Directiva.</li>
                    </ol>
                    <p>Artículo 37º.-La Junta Directiva podrá valerse en su gestión, de asesores que colaboren en el cumplimimento de los fines de la Asociación, pudiendo asistir las reuniones 
                    cuando así se le solicite, con voz pero sin voto.</p>
                    <p>Artículo 38º.-Los cargos de Presidente, Vicepresidente, Secretario e Tesorero serán elegidos separadamente en listas abiertas por la Asamblea General, 
                    mediante votación nominal y secreta. En todo caso la Asamblea puede determinar que la votación se realice a mano alzada.</p>
                    <p>Artículo 39º.-La elección de los vocales será en listas abiertas, pudiendo votar cada elector un máximo de seis candidatos.</p>
                    <p>Artículo 40º.-Se establece que no podrán ocupar puestos en la Junta Directiva los Socios de Número comprendidos en los seguintes casos:</p>
                    <ol>
                        <li>El Alcalde, los Concejales del municipio y sus cónyuges.</li>
                        <li>Los Profesores del Centro escolar y sus cónyuges.</li>
                        <li>Los Empleados del Centro Escolar y sus cónyuges.</li>
                    </ol>
                </article>
                <article class="estatuto">
                    <h1>CAPÍTULO VIII</h1>
                    <h2>EL PATRIMONIO</h2>
                    <p>Artículo 41º.-La Asociación necesita, para dar cumplimiento sus fines específicos encomendados en los Estatutos, estar en posesión de un Patrimonio y 
                    contar con unos recursos económicos capaces de satisfacer sus necesidades sociales y materiales, presentes y futuras.</p>
                    <ol>
                        <li>El Patrimonio de la Asociación se irá constituyendo con todos los bienes económicos y dereitos que se adquieran en el futuro.</li>
                        <li>Los recursos económicos consisten en:
                            <ol>
                                <li>Cuotas de socios, periódicas o extraodinarias.</li>
                                <li>Subvenciones, ayudas, donativos, legados o herencias que pudiera recibir de forma legal por parte de los asociados ou 
                                de terceras persoas.</li>
                                <li>Ingresos procedentes da relización de actividades, dentro de los fines estatutarios.</li>
                                <li>Cualquier otro recurso lícito.</li>
                            </ol>
                        </li>
                        <li>La Administración del Patrimonio corresponde a la Junta Directiva. Se llevará a cabo sometida a la correspondente intervención y con publicidad 
                        suficiente, a fin de que los socios puedan tener conocimento periódico del destino de los fondos.</li>
                        <li>O Patrimonio fundacional es nulo.</li>
                    </ol>
                    <p>Artículo 42º.-El ejercicio asociativo y económico sera anual y su cierre tendrá lugar el 31 de agosto de cada ano.</p>
                </article>
                <article class="estatuto">
                    <h1>CAPÍTULO IX</h1>
                    <h2>DISOLUCIÓN</h2>
                    <p>Artículo 43º.-La Asociación se disolverá voluntariamente cuando así lo acuerde la Asamblea General Extraodinaria, convocada expresamente. En la reunión 
                    deberán estar presentes la mitad más un de los socios, siendo necesaria la aprobación por una maioría de 2/3 de los presentes.</p>
                    <p>Artículo 44º.-En caso de disolución, actuará como Comisión Liquidadora a la última Junta Directiva, y de no existir se formarán por 5 miembros, 
                    eligidos por la Asamblea General disolutiva.</p>
                    <p>A Comisión se encargará de la liquidación del Patrimonio Social, que se destinará, una vez extinguidas las deudas, cualquier fin que no desvirtuya 
                    su naturaleza no lucrativa, como a una entidad similar a la constituida o a una entidad benéfica, dedicadas preferentemente a fines educativos.</p>
                </article>
                <article class="estatuto">
                    <h1>DISPOSICIÓN ADICIONAL</h1>
                    <p>En todo lo que no está previsto en los presentes Estatutos se aplicará la vigente Ley Orgánica 1/2002, del 22 de marzo, reguladora del Derecho de 
                    Asociación, y las disposiciones complementarias.</p>
                    <p>Diligencia que extiendo yo, como Secretaria de la Asociación de Padres “Terra de Dubriam” para hacer constar que los presentes estatutos fueron 
                    modificados para adaptarlos a las previsiones de la Ley Orgánica 1/2002, del 22 de marzo, por acuerdo de la Asamblea General celebrada al efecto, en 
                    data del 5 de Junio del 2003.</p>
                </article>
            </section>
            <section class="likeecompartir">
                <hr class="hrcurto">
                <b>Compártelo:</b><br/>
                <?php
                    $url = "https://www.anpacpibembibrevaldodubra.com/gl/index.php";
                    $text = "inicioanpabembibre";
                    $hashtag = "indexanpabembibre";
                    echo "<a href='https://www.facebook.com/sharer/sharer.php?u=$url' target='_blank'><img src='Imágenes/Facebook.png' width='25' alt='Facebook'/></a>";
                    echo "<a href='https://x.com/intent/tweet?text=$text&url=$url&hashtags=$hashtag' target='_blank'><img src='Imágenes/X.png' width='25' style='border-radius: 100%;' alt='X'/></a>";
                    echo "<a href='https://api.whatsapp.com/send?text=$text' target='_blank'><img src='Imágenes/WhatsApp.png' width='25' style='border-radius: 100%;' alt='WhatsApp'/></a>";
                ?><br/>
                <hr class="hrcurto">
                <b>Me gusta esto:</b><br/>
                <?php
                    if(isset($_POST["gustame"])){
                        if(!isset($admin)){
                            echo "<script>
                                alert('Para darle like a este artículo, tienes que iniciar sesión primero.');
                                window.location.href = 'iniciarsesion.php';
                            </script>";
                        } else {
                            $conexiongl = new mysqli("127.0.0.1", "root", "", "anpacpivaldodubragl");
                            if(!$conexiongl){
                                echo "DATABASE NOT CONNECTED!!!";
                            } else {
                                $existeusuario = "SELECT Id_Usuario, Nome, MeGustaEstatutos FROM usuarios WHERE Nome = '$admin'";
                                $resultado = $conexiongl->query($existeusuario);
                                if($resultado->num_rows == 0){
                                    echo "<p style='color: red;'>No existe el usuario $admin</p>";
                                } else {
                                    $row = $resultado->fetch_assoc();
                                    $idusuario = $row["Id_Usuario"];
                                    $megustaestatutos = "UPDATE usuarios SET MeGustaEstatutos = 'Sí' WHERE Id_Usuario = $idusuario";
                                    if($conexiongl->query($megustaestatutos) == true){
                                        echo "<script>
                                            document.getElementById('gustame').style.display = 'none';
                                            document.getElementById('xanonmegusta').style.display = 'block';
                                        </script>";
                                    } else if($conexiongl->query($megustaestatutos) == false){
                                        echo "<script>alert('Por motivos técnicos, no se puido grabar tu like.');</script>";
                                    }
                                }
                            }
                            $conexiones = new mysqli("127.0.0.1", "root", "", "anpacpivaldodubraes");
                            if(!$conexiones){
                                echo "DATABASE NOT CONNECTED!!!";
                            } else {
                                $existeusuario = "SELECT Id_Usuario, Nombre, MeGustaEstatutos FROM usuarios WHERE Nombre = '$admin'";
                                $resultado = $conexiones->query($existeusuario);
                                if($resultado->num_rows == 0){
                                    echo "<p style='color: red;'>No existe el usuario $admin</p>";
                                } else {
                                    $row = $resultado->fetch_assoc();
                                    $idusuario = $row["Id_Usuario"];
                                    $megustaestatutos = "UPDATE usuarios SET MeGustaEstatutos = 'Sí' WHERE Id_Usuario = $idusuario";
                                    if($conexiones->query($megustaestatutos) == true){
                                        echo "<script>
                                            document.getElementById('gustame').style.display = 'block';
                                            document.getElementById('xanonmegusta').style.display = 'none';
                                        </script>";
                                    } else if($conexiones->query($megustaestatutos) == false){
                                        echo "<script>alert('Por motivos técnicos, no se pudo grabar tu like.');</script>";
                                    }
                                }
                            }
                        }
                    } else if(isset($_POST["xanonmegusta"])){
                        if(!isset($admin)){
                            echo "<script>
                                alert('Para darle like a este artículo, tienes que iniciar sesión primero.');
                                window.location.href = 'iniciarsesion.php';
                            </script>";
                        } else {
                            $conexiongl = new mysqli("127.0.0.1", "root", "", "anpacpivaldodubragl");
                            if(!$conexiongl){
                                echo "DATABASE NOT CONNECTED!!!";
                            } else {
                                $existeusuario = "SELECT Id_Usuario, Nome, MeGustaEstatutos FROM usuarios WHERE Nome = '$admin'";
                                $resultado = $conexiongl->query($existeusuario);
                                if($resultado->num_rows == 0){
                                    echo "<p style='color: red;'>No existe el usuario $admin</p>";
                                } else {
                                    $row = $resultado->fetch_assoc();
                                    $idusuario = $row["Id_Usuario"];
                                    $megustaestatutos = "UPDATE usuarios SET MeGustaEstatutos = 'No' WHERE Id_Usuario = $idusuario";
                                    if($conexiongl->query($megustaestatutos) == true){
                                        echo "<script>
                                            document.getElementById('gustame').style.display = 'none';
                                            document.getElementById('xanonmegusta').style.display = 'block';
                                        </script>";
                                    } else if($conexiongl->query($megustaestatutos) == false){
                                        echo "<script>alert('Por motivos técnicos, no se puido grabar tu dislike.');</script>";
                                    }
                                }
                            }
                            $conexiones = new mysqli("127.0.0.1", "root", "", "anpacpivaldodubraes");
                            if(!$conexiones){
                                echo "DATABASE NOT CONNECTED!!!";
                            } else {
                                $existeusuario = "SELECT Id_Usuario, Nombre, MeGustaEstatutos FROM usuarios WHERE Nombre = '$admin'";
                                $resultado = $conexiones->query($existeusuario);
                                if($resultado->num_rows == 0){
                                    echo "<p style='color: red;'>No existe el usuario $admin</p>";
                                } else {
                                    $row = $resultado->fetch_assoc();
                                    $idusuario = $row["Id_Usuario"];
                                    $megustaestatutos = "UPDATE usuarios SET MeGustaEstatutos = 'No' WHERE Id_Usuario = $idusuario";
                                    if($conexiones->query($megustaestatutos) == true){
                                        echo "<script>
                                            document.getElementById('gustame').style.display = 'block';
                                            document.getElementById('xanonmegusta').style.display = 'none';
                                        </script>";
                                    } else if($conexiones->query($megustaestatutos) == false){
                                        echo "<script>alert('Por motivos técnicos, no se pudo grabar tu dislike.');</script>";
                                    }
                                }
                            }
                        }
                    }
                ?>
                <form action="<?php echo htmlentities($_SERVER["PHP_SELF"]);?>" method="post">
                    <?php
                        if(!isset($admin)){
                            echo "<button id='gustame' name='gustame'>Me gusta</button>";
                        } else {
                            $conexion = new mysqli("127.0.0.1", "root", "", "anpacpivaldodubraes");
                            if(!$conexion){
                                echo "DATABASE NOT CONNECTED!!!";
                            } else {
                                $existeusuario = "SELECT Id_Usuario, Nombre, MeGustaContacto FROM usuarios WHERE Nombre = '$admin'";
                                $resultado = $conexion->query($existeusuario);
                                if($resultado->num_rows == 0){
                                    echo "<p style='color: red;'>No existe el usuario $admin</p>";
                                } else {
                                    $row = $resultado->fetch_assoc();
                                    if($row["MeGustaContacto"] == "Sí"){
                                        echo "<button id='xanonmegusta' name='xanonmegusta'>Ya no me gusta</button>";
                                    } else if($row["MeGustaContacto"] == "No"){
                                        echo "<button id='gustame' name='gustame'>Me gusta</button>";
                                    }
                                }
                            }
                        }
                    ?>
                </form>
                <?php
                    $conexion = new mysqli("127.0.0.1", "root", "", "anpacpivaldodubragl");
                    if(!$conexion){
                        echo "DATABASE NOT CONNECTED!!!";
                    } else {
                        $numlikes = "SELECT COUNT(MeGustaContacto) AS NumLikes FROM usuarios WHERE MeGustaContacto = 'Sí'";
                        $resultado = $conexion->query($numlikes);
                        if(!$resultado->num_rows == 0) {
                            $row = $resultado->fetch_assoc();
                            $totallikes = $row["NumLikes"];
                            if($totallikes == 0){
                                echo "<p>Sé la primera persona en darle me gusta.</p>";
                            } else {
                                echo "<p><img src='Imágenes/Corazón.png' style='vertical-align: middle;' width='20' alt='Corazón'/> $totallikes</p>";
                            }
                        }
                    }
                ?>
            </section>
        </main>
        <footer>
            <div class="xunta">
                <img src="Imágenes/XuntadeGalicia.png" width="100%" alt="Xunta de Galicia"/>
            </div>
            <div class="idiomas">
                <ul>
                    <li><a href="../gl/estatutos.php">Gallego</a></li>
                    <li><a href="../es/estatutos.php">Castellano</a></li>
                </ul>
            </div>
            <div class="copyright">
                <p><b>ANPA CPI VAL DO DUBRA</b>, Powered by WordPress.com &copy;<?php echo date("Y");?>. Todos los derechos reservados.</p>
            </div>
            <div class="unioneuropea">
                <img src="Imágenes/FondoSocialEuropeo.png" width="100%" alt="Unión Europea">
            </div>
        </footer>
    </body>
</html>