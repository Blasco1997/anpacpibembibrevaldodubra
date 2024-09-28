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
        <title>ANPA CPI VAL DO DUBRA &#8211; Punto de encontro e comunicación entre a ANPA do CPI de Bembibre e os seus asociados, para informar sobre actividades extraescolares, charlas, excursións, etc.</title>
        <link rel="stylesheet" type="text/css" href="CSS/estilosestatutos.css">
    </head>
    <body>
        <header>
            <div class="vacio1"></div>
            <div class="logo">
                <img src="Imaxes/logo.png" width="100%" alt="Logo ANPA CPI Bembibre"/>
            </div>
            <div class="vacio2"></div>
            <div class="tituloedescricion">
                <h1>ANPA CPI VAL DO DUBRA</h1>
                <p>Punto de encontro e comunicación entre a ANPA do CPI de Bembibre e os seus asociados, para informar sobre actividades extraescolares, charlas, excursións, etc.</p>
            </div>
            <nav class="navegacion">
                <ul>
                    <li id="inicio">INICIO</li>
                    <li id="sobrenos">SOBRE NÓS</li>
                    <li id="ocentro">O CENTRO</li>
                    <li id="estatutos" class="seleccionado">ESTATUTOS</li>
                    <li id="contacto">CONTACTO</li>
                    <?php
                        if(isset($_SESSION["admin"])){
                            $admin = $_SESSION["admin"];
                            echo "<li>Ola, $admin&nbsp;&nbsp;<a href='cerrarsesion.php'><img src='Imaxes/exit.png' width='35' style='vertical-align: middle;' alt='Exit'></a></li>";
                        } else {
                            echo "<li id='iniciarsesion'>INICIAR SESIÓN</li>";
                        }
                    ?>
                </ul>
                <script>
                        let inicio = document.getElementById("inicio");
                        let sobrenos = document.getElementById("sobrenos");
                        let ocentro = document.getElementById("ocentro");
                        let esatutos = document.getElementById("estatutos");
                        let contacto = document.getElementById("contacto");
                        let iniciarsesion = document.getElementById("iniciarsesion");
                        inicio.addEventListener("click", function(){
                            window.location.href = "index.php";
                        });
                        sobrenos.addEventListener("click", function(){
                            window.location.href = "sobrenos.php";
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
                    <p>Artigo 1º.-A ASOCIACIÓN DE PAIS DE ALUMNOS “TERRA DE DUBRIAM”, DO CENTRO PÚBLICO INTEGRADO DE BEMBIBRE, 
                    que máis adiante nestes estatutos se denominará Asociación, o amparo do disposto na Lei Orgánica 1/2002, 
                    do 22 de marzo, e normas complementarias, é unha entidade con capacidade xurídica e plena capacidade de obrar, 
                    carecendo de ánimo de lucro. A Asociación constitúese por tempo indefinido.</p>
                </article>
                <article class="estatuto">
                    <h1>CAPÍTULO II</h1>
                    <h2>DOMICILIO SOCIAL</h2>
                    <p>Artigo 2º.-A Asociación terá o domicilio social no Centro Público Integrado de Bembibre, Val do Dubra,
                    A Coruña.</p>
                    <p>Artigo 3º.-Para a realización das actividades que lle son propias, a Asociación utilizará os locais do 
                    Centro, a estes efectos o Director facilitará a integración de ditas actividades na vida escolar, tendo en 
                    conta o normal desenvolvemento da mesma. Para utilizar os locais a Xunta Directiva deberá comunicarllo a 
                    Dirección do Centro.</p>
                </article>
                <article class="estatuto">
                    <h1>CAPÍTULO III</h1>
                    <h2>ÁMBITO TERRITORIAL</h2>
                    <p>Artigo 4º.-O ámbito territorial no que vai estender a súa acción é provincial. Comprendendo preferentemente 
                    o Concello de Val do Dubra e zonas limítrofes.</p>
                </article>
                <article class="estatuto">
                    <h1>CAPÍTULO IV</h1>
                    <h2>FINS DA ASOCIACIÓN</h2>
                    <p>Artigo 5º.-Os fins da asociación son:</p>
                    <ol>
                        <li>Asistir os pais e titores en todo aquelo que atinxe á educación dos seus fillos e pupilos.</li>
                        <li>Colaborar nas actividades educativas e extraescolares do Centro e prestar axuda o mesmo para o mellor 
                        desenvolvemento das súas actividades pedagóxicas e culturais.</li>
                        <li>Promover actividades formativas, culturais, deportivas e de estudo.</li>
                        <li>Fomentalas iniciativas artísticas, culturais e de información e comunicación do alumnado e dos pais, 
                        por medio de concursos, exposicións escolares, representacións teatrais e musicais, conferencias e charlas 
                        pedagóxicas, cursiños divulgativos, proxeccións, excursións, visitas a centros industrais e outras actividades 
                        semellantes, divulgándoas entre os socios e o público en xeral.</li>
                        <li>Promover reunións de colaboración de pais con profesores e as boas relacións entre ambos, a fin de conseguir
                        unha identidade nos obxectivos educacionais e un mutuo coñecemento de circunstancias e peculiaridades dos alumnos
                        e defender os dereitos de alumnos e pais en canto o ensino, educación e formación de aqueles en colaboración cos
                        profesores e Órganos da Administración Pública.</li>
                        <li>Promover a plena realización do principio de gratituidade no ámbito do Centro, así como a efectiva igualdade 
                        de dereitos de tódolos alumnos sen discriminación por razóns socioeconómicas, ideolóxicas, confesionais, raza 
                        ou sexo.</li>
                        <li>Organizar a Escola de Pais que tenda a buscar os medios para integrar aos pais no proceso educativo.</li>
                        <li>Conxuntar co centro os programas de educación familiar destinados a desenvolver a misión educacional dos pais
                        e titores, e os de formación permanente de adultos aprobados pola Administración.</li>
                        <li>Promover a participación dos pais de alumnos na xestión do Centro.</li>
                        <li>Asistir os pais de alumnos no exercicio do seu dereito a invertir no control e na xestión do Centro.</li>
                        <li>Facilitar a representación dos pais de alumnos no Consello Escolar do Centro.</li>
                        <li>Estimular a participación dos pais de alumnos na programación xeral do ensino a través do órgano colexiado 
                        correspondente.</li>
                        <li>Fomentar as relacións de cooperación do Centro con outros establecementos escolares e os sectores socias e 
                        culturais do entorno.</li>
                        <li>Requirir aos poderes públicos o cumprimento das leis, regulamentos e plans de actuación relativas á educación, 
                        solicitando a atención e axudas que esta merece.</li>
                        <li>Participar na medida do posible na problemática educativa local, provincial e autonómica a través dos canles 
                        legais, prestando tamén especial atención ao aspecto lingüístico, cultural e social de Galicia.</li>
                        <li>E todas aquelas actividades, non recollidas nestes Estatutos e que sexan conformes á Lei. </li>
                    </ol>
                    <p>Artigo 6º.-Para o mellor cumprimento dos seus fins, a Asociación poderá integrarse en Federacións Provinciais, autonómicas 
                    e estatais, se así se acorda pola Xunta Directiva, dando conta a Asemblea Xeral.</p>
                </article>
                <article class="estatuto">
                    <h1>CAPÍTULO V</h1>
                    <h2>DOS SOCIOS</h2>
                    <p>Artigo 7º.-Poderán ser membros da Asociación todos os pais ou titores de alumnos que cursen estudios no Centro Público 
                    Integrado de Bembibre.</p>
                    <p>Artigo 8º.-Os socios clasifícanse en Socios de Honor e de Número.</p>
                    <ol>
                        <li>Serán Socios de Honor todas aquelas persoas, asociadas ou non, que presten ou prestaran desatacados servicios á Asociación. 
                        O nomeamento de socios de honor corresponderá á Xunta Directiva.</li>
                        <li>Serán Socios de Número os pais, titores ou representantes legais dos alumnos do Centro Público Integrado de Bembibre, 
                        Val do Dubra.</li>
                    </ol>
                    <p>Artigo 9º.-Serán dereitos dos socios:</p>
                    <ol>
                        <li>Tomar parte en tódalas actividades da Asociación e utilizalos servicios que poidan establecerse en beneficio dos socios.</li>
                        <li>Aproveitar tódalas vantaxes e beneficios que a Asociación poida obter.</li>
                        <li>Asistir a tódalas reunións e actos convocados pola Xunta Directiva.</li>
                        <li>Colaborar activamente no cumprimento dos fins da Asociación e na eficacia nas execucións dos mesmos.</li>
                        <li>Dirixir petición e propoñer iniciativas os órganos de goberno da Asociación en orde o mellor cumprimento dos fins da 
                        Asociación.</li>
                        <li>Comunicar á Xunta Directiva calquera queixa ou reclamación que proceda respecto aos servicios e comportamento dos 
                        directivos e asociados.</li>
                        <li>Solicitar a convocatoria da Asamblea Xeral Extraordinaria cando así o soliciten, como mínimo, o 10% dos socios.</li>
                        <li>Solicitar e recibir da Xunta Directiva canta información precisen sobre a xestión asociativa, ser informado acerca da 
                        composición dos órganos de goberno e representación da asociación, do seu estado de contas e do desenvolvemento das súas actividades.</li>
                        <li>Elexir e ser ilexible para tódalas funcións representativas da Asociación, e participar nos órganos de goberno, salvo as excepcións 
                        que establecen os estatutos.</li>
                        <li>Ter voz e voto nas reunións da Asociación.</li>
                        <li>Ser oído con carácter previo á adopción de medidas disciplinarias contra elo e a ser informado dos feitos que dean lugar a tales medidas, 
                        debendo ser motivado o acordo que, no seu caso, impoña a sanción.</li>
                        <li>A impugnar os acordos dos órganos da asociación que estime contrarios á Lei ou os Estatutos.</li>
                    </ol>
                    <ul>
                        <li>A condición de socio faculta aos fillos do mesmo a participar en todas aquelas actividades realizadas para eles, como son actividades 
                        extraescolares, excursións e festivais. Así como gozar da cobertura dos seguros que a ANPA poida ter outras vantaxes en beneficio dos 
                        alumnos.</li>
                    </ul>
                    <p>Artigo 10º.-Serán deberes dos socios:</p>
                    <ol>
                        <li>Compartir as finalidades da asociación e colaborar para a consecución das mesmas.</li>
                        <li>Contribuír económicamente o sostemento da Asociación pagando as cuotas, derramas e outras contribucións que, na forma que se estableza 
                        na Asamblea, e conforme aos Estatutos, poidan corresponder a cada socio.</li>
                        <li>Observar os Estatutos da Asociación e os acordos da Asamblea, cumprindo cas obrigas que resulten das disposicións estutarias, e acatando 
                        e cumprindo os acordos válidamente adoptados polos órganos de goberno e representación da asociación.</li>
                        <li>Asistir ás sesións da Asamblea Xeral e demais actos que se organicen.</li>
                        <li>Comunicar á Xunta Directiva calquera aspecto relacionado co Centro onde sexa necesario que interveña a Asociación.</li>
                        <li>Manter unha posición responsable e preocupada en relación á educación dos seus fillos, asistindo ás reunións que a ese efecto sexan 
                        convocadas, e mantendo contacto cos profesores e titores.</li>
                        <li>Manter unha actitude correcta e adecuada, en calquera acto organizado pola Asociación.</li>
                        <li>Desempeñar no seu caso, as obrigas correspondentes no cargo que ocupen.</li>
                    </ol>
                    <p>Artigo 11º.-Os socios de honor, en caso de non estar asociados no momento do seu nomeamento, terán as mesmas obrigas que os socios de número, 
                    a excepción das previstas nos números 2 e 4, do artigo anterior. Así mesmo terán os mesmos dereitos a excepción dos que figuran nos números 9 
                    e 10 do artigo 9.</p>
                    <p>Artigo 12º.-Non se adquire a condición de socio mentres non se satisfagan as cuotas establecidas.</p>
                    <p>Artigo 13º.-A Asamblea Xeral poderá acordar que os pais dos alumnos das Escolas Unitarias da zona poidan participar en algunhas actividades 
                    da asociación, sen poder ter a plena condición de socios, e satisfacendo, en todo caso, as cuotas adicionais que se establezan.</p>
                    <p>Artigo 14º.-A condición de socio pérdese:</p>
                    <ol>
                        <li>Por vontade propia do interesado.</li>
                        <li>Por baixa dos fillos ou tutelados no Centro.</li>
                        <li>Por falta inxustifcada no pago de cuotas.</li>
                        <li>Por incumplimento dos estatutos.</li>
                        <li>Por utilización da Asociación con fins alleos aos específicos da mesma.</li>
                    </ol>
                    <ul>
                        <li>Os puntos 4 e 5 serán apreciados pola Xunta Directiva. Darase audiencia ao interesado, e para tomar o acordo será necesario o 
                            voto afirmativo dos 2/3 da Xunta Directiva. A decisión será efectiva a partir dese momento. En todo caso, será posta en coñecemento 
                            da Asamblea Xeral, quen poderá revocalo acordo adoptado.</li>
                        <li>A baixa dun socio non lle exime de satisfacer as obrigas pendentes coa Asociación.</li>
                    </ul>
                    <p>Artigo 15º.-A Xunta Directiva está capacitada para impoñer sancións aos asociados que se fagan acredores a elas por:</p>
                    <ol>
                        <li>Non acatar as normas dos Estatutos.</li>
                        <li>Non cumprir as indicacións dos directivos ou delegados.</li>
                        <li>Falta de correción, ofensas a calquera persoa nos actos da asociación.</li>
                    </ol>
                    <p>Artigo 16º.-A Xunta Directiva poderá poñer como sancións:</p>
                    <ol>
                        <li>Amoestación.</li>
                        <li>Suspensión dos dereitos de asociado por un periodo de tempo non superior a tres meses.</li>
                        <li>Expulsión provisional a expensas do que sobre da mesma acorde a Asamblea Xeral.</li>
                    </ol>
                </article>
                <article class="estatuto">
                    <h1>CAPÍTULO VI</h1>
                    <h2>ÓRGANOS DE GOBERNO</h2>
                    <p>Artigo 17º.-A Asociación estará rexida polos seguintes órganos:</p>
                    <ol>
                        <li>Asemblea Xeral de Socios.</li>
                        <li>Xunta Directiva.</li>
                        <li>Presidente.</li>
                    </ol>
                    <p>Artigo 18º.-A Asamblea Xeral de Socios é o órgano supremo de goberno da Asociación. Poderá reunirse en Sesión Ordinaria e Extraordinaria e os 
                    cargos de Presidente e Secretario da mesma recaerán nos que ocupen estes cargos da Xunta Directiva. Nas convocatorias farase constar lugar, 
                    día, hora e orde do día.</p>
                    <p>Artigo 19º.-A Asamblea Xeral Ordinaria reunirase dúas veces ao ano, unha a principios do curso escolar, preferentemente en setembro, e como 
                    máximo no mes de Outubro, e outra a finais, preferentemente no mes de xuño. Aos asociados enviaráselle a convocatoria con oito días de antelación.</p>
                    <p>Artigo 20º.-A Asamblea Xeral Extraordinaria reunirase cando:</p>
                    <ol>
                        <li>O estime oportuno o Presidente.</li>
                        <li>Se acorde pola Xunta Directiva, ou o solicite por escrito o Presidente un terzo da Xunta Directiva.</li>
                        <li>O soliciten por escrito, como mínimo, un 10% dos socios.</li>
                    </ol>
                    <ul>
                        <li>A convocatoria farase con tres días de antelación.</li>
                    </ul>
                    <p>Artigo 21º.-A Asamblea Xeral quedará validamente constituida en primeira convocatoria cando concorran un terzo dos asociados, e en segunda 
                    convocatoria calquera que sexa o número de asociados presentes. Entre a primeira e a segunda convocatoria existirá un marxe mínimo de media hora.</p>
                    <p>Artigo 22º.-Os acordos tomaranse por maioría simple, cando os votos afirmativos superen os negativos, non sendo computables a estes efectos os 
                    votos en branco nin as abstencións.</p>
                    <p>Artigo 23º.-Será necesario o voto favorable dos dous tercios dos asociados presentes na Asamblea Extraordinaria para adoptar as seguntes decisións:</p>
                    <ol>
                        <li>Reforma dos Estatutos.</li>
                        <li>Disolución da Asociación.</li>
                        <li>Disposición e venda de bens.</li>
                    </ol>
                    <p>Artigo 24º.-Son facultades da Asamblea Xeral Ordinaria:</p>
                    <ol>
                        <li>Examinar e aprobar as contas anuais e os presupostos.</li>
                        <li>Nomeamento dos membros da Xunta Directiva.</li>
                        <li>Coñecer e aprobar ou censurar a xestión da Xunta Directiva.</li>
                        <li>Revocar o mandato da Xunta Directiva cando esta perda a confianza dos socios.</li>
                        <li>Aprobar ou rexeitar as propostas da xunta Directiva en orde ás actividades da asociación.</li>
                        <li>Fixar as cuotas ordinarias e extraordinarias.</li>
                        <li>Expulsión de socios, a proposta da Xunta Directiva.</li>
                        <li>Debater as cuestións que, ca debida antelación, propoñan os socios á Xunta Directiva para seren incluídas na Orde do Día.</li>
                    </ol>
                </article>
                <article class="estatuto">
                    <h1>CAPÍTULO VII</h1>
                    <h2>A XUNTA DIRECTIVA</h2>
                    <p>Artigo 25º.-A Xunta Directiva estará formada por:</p>
                    <ol>
                        <li>Un Presidente.</li>
                        <li>Un Vicepresidente.</li>
                        <li>Un Secretario.</li>
                        <li>Un Tesoureiro.</li>
                        <li>Seis vocais.</li>
                    </ol>
                    <p>Artigo 26º.-Tódo-los cargos da Xunta Directiva serán honoríficos e recaerán en asociados de número. Terán unha duración de dous anos, 
                    podendo renovarse por períodos de igual duración, a metade dos seus membros cada ano.</p>
                    <ul>
                        <li>Unha renovación corresponderá os cargos de Presidente, Tesoureiro e 3 vocais, e outra renovación corresponderá a Vicepresidente, 
                        Secretario e os outros 3 vocais.</li>
                        <li>Para ser membro da Xunta Directiva é necesario ser maior de idade, estar en pleno uso dos dereitos civís e non estar incurso nos 
                        motivos de incompatibilidade establecidos na lexislación vixente.</li>
                    </ul>
                    <p>Artigo 27º.-Estes poderán causar baixa por renuncia voluntaria comunicada por escrito á Directiva, por incumprimento das obrigacións que 
                    tiveran encomendadas e por expiración do mandato. Como caso excepcional, calquera membro da Xunta Directiva que falte tres veces consecutivas
                    ou cinco en todo o ano, sen causa xustificada ás sesións da mesma, poderá ser cesado no seu cargo por decisión maioritaria desta.</p>
                    <p>Artigo 28º.-Os membros da Xunta Directiva que houberan esgotado o prazo para o cal foran elexidos, continuarán ostentando os seus cargos 
                    ata o momento en que se produza a aceptación dos que os substitúan. En todo caso, as vacantes que se puideran producir, poderá cubrilas a Xunta 
                    Directiva de maneira provisional, ata que se celebre a primeira reunión da Asamblea Xeral.</p>
                    <p>Artigo 29º.-A Xunta Directiva reunirase, con carácter extraordinario, cando o estime oportuno o Presidente ou a petición dun terzo da totalidade 
                    dos seus compoñentes.</p>
                    <p>Artigo 30º.-Únicamente serán válidos aqueles acordos da Xunta Directiva cando asistan a metade máis un dos seus membros. Os acordos tomaranse 
                    por maioria simple. En caso de empate, resolverá en segunda votación o Presidente, quen terá voto de calidade.</p>
                    <p>Artigo 31º.-Son facultades da Xunta Directiva:</p>
                    <ol>
                        <li>Formular e someter a aprobación da Asamblea Xeral os Balances, as Contas Anuais, os presupostos e o programa anual de actividades.</li>
                        <li>Executar os acordos adoptados pola Asamblea Xeral.</li>
                        <li>Dirixir e xestionar as actividades sociais e asuntos ordinarios da Asociación, e levar a xestión económica e administrativa da mesma.</li>
                        <li>Fixar as datas para a celebración das sesións da Asamblea Xeral.</li>
                        <li>Nomear delegados para algunha determinada actividade da Asociación.</li>
                        <li>Resolver sobre a admisión de novos asociados.</li>
                        <li>Cumprir e velar polo cumprimento, por parte dos socios, das disposicións establecidas nos estatutos.</li>
                        <li>Impoñer sancións os asociados que se fagan acredores as mesmas, conforme os presentes Estatutos.</li>
                        <li>Manter co Colexio, co Director, cos profesores e alumnos toda clase de relacións encamiñadas a lograr a máis completa formación integral 
                        dos alumnos e a súa colaboración, na medida do posible, na consecución dos obxectivos que pretende a Asociación.</li>
                        <li>Fomentar as oportunas relacións de cooperación e intercambio de ideas, información e iniciativas cas demais asociacións e Colexios, así 
                        como cos organismos administrativos que considere procedente.</li>
                        <li>Actuar como comisión executiva permanente da Asamblea Xeral.</li>
                        <li>Calquera outra facultade que non sendo de exclusiva competencia da Asamblea Xeral de socios, sexa conforme á Lei.</li>
                    </ol>
                    <p>Artigo 32º.-Corresponde ao Presidente:</p>
                    <ol>
                        <li>Ostentar a representación legal e pública da Asociación.</li>
                        <li>Convocar, presidir e levantar as sesións que celebre a Asamblea Xeral e na Xunta Directiva, así como dirixir as deliberacións de unha e 
                        outra.</li>
                        <li>Fixar a Orde do Día das sesións da Xunta Directiva e da Asamblea Xeral.</li>
                        <li>Ordenar pagos e autorizar ca súa firma os documentos, actas e correspondencia, firmando co Tesoureiro os cheques, talóns e documentos 
                        análogos.</li>
                        <li>Coidar do cumprimento dos presentes Estatutos, dos acordos da Xunta Directiva e da Asamblea Xeral.</li>
                        <li>Adoptar calquera medida urxente para a boa marcha da Asociación ou que resulte necesaria no desenvolvemento das súas actividades, dando 
                        conta posteriormente á Xunta Directiva.</li>
                    </ol>
                    <p>Artigo 33º.-Corresponde ao Vicepresidente:</p>
                    <ul>
                        <li>Substituír ao Presidente en caso de ausencia deste, cas mesmas atribucións que el.</li>
                    </ul>
                    <p>Artigo 34º.-Corresponde ao Secretario:</p>
                    <ol>
                        <li>Actuar como tal nas reunións da Asamblea Xeral e da Xunta Directiva, e redactar as actas correspondentes.</li>
                        <li>Levar e custodiar o libro rexistro de socios, e demais libros, selos e documentos, agás os de contabilidade.</li>
                        <li>Redactar a Orde do Día e cursar as convocatorias de acordo cos estatutos.</li>
                        <li>Redactar a memoria anual e librar certificacións con referencia aos libros e documentos da Asociación, co visto e pracer do Presidente.</li>
                        <li>Levar a correspondencia.</li>
                        <li>Cursar as comunicacións sobre designación de Xuntas Directivas e demais acordos sociais que sexa necesario inscribir, aos Rexistros correspondentes.</li>
                        <li>Encargarse da tramitación de subvencións.</li>
                        <li>Calquera outra xestión administrativa da Asociación, agás as encomendadas a outros cargos directivos.</li>
                    </ol>
                    <p>Artigo 35º.-Corresponde ao Tesoureiro:</p>
                    <ol>
                        <li>Recadar e conservar os fondos e bens da Asociación.</li>
                        <li>Levar a contabilidade.</li>
                        <li>Formular os proxectos de presupostos e contas anuais que deban ser presentados ante a Asamblea Xeral.</li>
                        <li>Exhibir ante os socios durante os quince días anteriores a Asamblea de principios do curso escolar, as Contas Anuais da Asociación.</li>
                        <li>Presentar nos Organismos pertinentes as Contas Anuais, declaracións fiscais, e calquera outra documentación de cara a cumprir cas obrigas legais.</li>
                        <li>Firmar co Presidente os recibos, cheques e documentos contables necesarios, dando cumprimento as ordes de pago expedidas polo Presidente.</li>
                    </ol>
                    <p>Artigo 36º.-Corresponde aos Vocais:</p>
                    <ol>
                        <li>Participar nas reunións da Xunta Directiva con voz e voto, igual que os demais membros da mesma.</li>
                        <li>Desempeñar as funcións que a Xunta Directiva acorde, entre elas, presidir ou coordinar grupos de traballo, comisións, execución de encargos e
                        representacións.</li>
                        <li>Cumprir cas obrigas propias do seu cargo como membros da Xunta Directiva.</li>
                    </ol>
                    <p>Artigo 37º.-A Xunta Directiva poderá valerse na súa xestión, de asesores que colaboren no cumprimento dos fins da Asociación, podendo asistir as reunións 
                    cando así se lle solicite, con voz pero sen voto.</p>
                    <p>Artigo 38º.-Os cargos de Presidente, Vicepresidente, Secretario e Tesoureiro serán elexidos separadamente en listas abertas pola Asamblea Xeral, 
                    mediante votación nominal e secreta. En todo caso a Asamblea pode determinar que a votación se realice a man alzada.</p>
                    <p>Artigo 39º.-A elección dos vocais será en listas abertas, podendo votar cada elector un máximo de seis candidatos.</p>
                    <p>Artigo 40º.-Establécese que non poderán ocupar postos na Xunta Directiva os Socios de Número comprendidos nos seguintes casos:</p>
                    <ol>
                        <li>O Alcalde, os Concelleiros do municipio e os seus cónxuxes.</li>
                        <li>Os Profesores do Centro escolar e os seus cónxuxes.</li>
                        <li>Os Empregados do Centro Escolar e os seus cónxuxes.</li>
                    </ol>
                </article>
                <article class="estatuto">
                    <h1>CAPÍTULO VIII</h1>
                    <h2>O PATRIMONIO</h2>
                    <p>Artigo 41º.-A Asociación precisa, para dar cumprimento os seus fins específicos encomendados nos Estatutos, estar en posesión dun Patrimonio e 
                    contar cuns recursos económicos capaces de satisfacer as súas necesidades sociais e materiais, presentes e futuras.</p>
                    <ol>
                        <li>O Patrimonio da Asociación irase constituíndo con tódolos bens económicos e dereitos que se adquiran no futuro.</li>
                        <li>Os recursos económicos consisten en:
                            <ol>
                                <li>Cuotas de socios, periódicas ou extraodinarias.</li>
                                <li>Subvencións, axudas, donativos, legados ou herdanzas que puidera recibir de forma legal por parte dos asociados ou 
                                de terceiras persoas.</li>
                                <li>Ingresos procedentes da relización de actividades, dentro dos fins estatutarios.</li>
                                <li>Calquera outro recurso lícito.</li>
                            </ol>
                        </li>
                        <li>A Administración do Patrimonio corresponde á Xunta Directiva. Levarase a cabo sometida á correspondente intervención e con publicidade 
                        suficiente, a fin de que os socios poidan ter coñecemento periódico do destino dos fondos.</li>
                        <li>O Patrimonio fundacional é nulo.</li>
                    </ol>
                    <p>Artigo 42º.-O exercicio asociativo e económico sera anual e o seu peche terá lugar o 31 de agosto de cada ano.</p>
                </article>
                <article class="estatuto">
                    <h1>CAPÍTULO IX</h1>
                    <h2>DISOLUCIÓN</h2>
                    <p>Artigo 43º.-A Asociación disolverase voluntariamente cando así o acorde a Asamblea Xeral Extraodinaria, convocada expresamente. Na reunión 
                    deberán estar presentes a metade máis un dos socios, sendo necesaria a aprobación por unha maioría de 2/3 dos presentes.</p>
                    <p>Artigo 44º.-En caso de disolución, actuará como Comisión Liquidadora á última Xunta Directiva, e de non existir formarase por 5 membros, 
                    elixidos pola Asamblea Xeral disolutiva.</p>
                    <p>A Comisión encargarase da liquidación do Patrimonio Social, que se destinará, unha vez extinguidas as débedas, calquera fin que non desvirtúe 
                    a súa natureza non lucrativa, como a unha entidade similar a constituída ou a unha entidade benéfica, dedicadas preferentemente a fins educativos.</p>
                </article>
                <article class="estatuto">
                    <h1>DISPOSICIÓN ADICIONAL</h1>
                    <p>En todo o que non está previsto nos presentes Estatutos aplicarase a vixente Lei Orgánica 1/2002, do 22 de marzo, reguladora do Dereito de 
                    Asociación, e as disposicións complementarias.</p>
                    <p>Dilixencia que extendo eu, como Secretaria da Asociación de Pais “Terra de Dubriam” para facer constar que os presentes estatutos foron 
                    modificados para adaptalos ás previsións da Lei Orgánica 1/2002, do 22 de marzo, por acordo da Asamblea Xeral celebrada ao efecto, en data do 
                    5 de xuño do 2003.</p>
                </article>
            </section>
            <section class="likeecompartir">
                <hr class="hrcurto">
                <b>Compárteo:</b><br/>
                <?php
                    $url = "https://www.anpacpibembibrevaldodubra.com/gl/index.php";
                    $text = "inicioanpabembibre";
                    $hashtag = "indexanpabembibre";
                    echo "<a href='https://www.facebook.com/sharer/sharer.php?u=$url' target='_blank'><img src='Imaxes/Facebook.png' width='25' alt='Facebook'/></a>";
                    echo "<a href='https://x.com/intent/tweet?text=$text&url=$url&hashtags=$hashtag' target='_blank'><img src='Imaxes/X.png' width='25' style='border-radius: 100%;' alt='X'/></a>";
                    echo "<a href='https://api.whatsapp.com/send?text=$text' target='_blank'><img src='Imaxes/WhatsApp.png' width='25' style='border-radius: 100%;' alt='WhatsApp'/></a>";
                ?><br/>
                <hr class="hrcurto">
                <b>Gústame isto:</b><br/>
                <?php
                    if(isset($_POST["gustame"])){
                        if(!isset($admin)){
                            echo "<script>
                                alert('Para darlle like a este artigo, tes que iniciar sesión primeiro.');
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
                                    echo "<p style='color: red;'>Non existe o usuario $admin</p>";
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
                                        echo "<script>alert('Por motivos técnicos, non se puido grabar o teu like.');</script>";
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
                                    echo "<p style='color: red;'>Non existe o usuario $admin</p>";
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
                                        echo "<script>alert('Por motivos técnicos, non se puido grabar o teu like.');</script>";
                                    }
                                }
                            }
                        }
                    } else if(isset($_POST["xanonmegusta"])){
                        if(!isset($admin)){
                            echo "<script>
                                alert('Para dar le like a este artículo, tienes que iniciar sesión primero.');
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
                                    echo "<p style='color: red;'>Non existe o usuario $admin</p>";
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
                                        echo "<script>alert('Por motivos técnicos, non se puido grabar o teu dislike.');</script>";
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
                                    echo "<p style='color: red;'>Non existe o usuario $admin</p>";
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
                                        echo "<script>alert('Por motivos técnicos, non se puido grabar o teu dislike.');</script>";
                                    }
                                }
                            }
                        }
                    }
                ?>
                <form action="<?php echo htmlentities($_SERVER["PHP_SELF"]);?>" method="post">
                    <?php
                        if(!isset($admin)){
                            echo "<button id='gustame' name='gustame'>Gústame</button>";
                        } else {
                            $conexion = new mysqli("127.0.0.1", "root", "", "anpacpivaldodubragl");
                            if(!$conexion){
                                echo "DATABASE NOT CONNECTED!!!";
                            } else {
                                $existeusuario = "SELECT Id_Usuario, Nome, MeGustaContacto FROM usuarios WHERE Nome = '$admin'";
                                $resultado = $conexion->query($existeusuario);
                                if($resultado->num_rows == 0){
                                    echo "<p style='color: red;'>Non existe o usuario $admin</p>";
                                } else {
                                    $row = $resultado->fetch_assoc();
                                    if($row["MeGustaContacto"] == "Sí"){
                                        echo "<button id='xanonmegusta' name='xanonmegusta'>Xa non me gusta</button>";
                                    } else if($row["MeGustaContacto"] == "No"){
                                        echo "<button id='gustame' name='gustame'>Gústame</button>";
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
                                echo "<p>Sé a primeira persoa en darlle me gusta.</p>";
                            } else {
                                echo "<p><img src='Imaxes/Corazón.png' style='vertical-align: middle;' width='20' alt='Corazón'/> $totallikes</p>";
                            }
                        }
                    }
                ?>
            </section>
        </main>
        <footer>
            <div class="xunta">
                <img src="Imaxes/XuntadeGalicia.png" width="100%" alt="Xunta de Galicia"/>
            </div>
            <div class="idiomas">
                <ul>
                    <li><a href="../gl/index.php">Galego</a></li>
                    <li><a href="../es/index.php">Castelán</a></li>
                </ul>
            </div>
            <div class="copyright">
                <p><b>ANPA CPI VAL DO DUBRA</b>, Powered by WordPress.com &copy;<?php echo date("Y");?>. Tódo-los dereitos reservados.</p>
            </div>
            <div class="unioneuropea">
                <img src="Imaxes/FondoSocialEuropeo.png" width="100%" alt="Unión Europea">
            </div>
        </footer>
    </body>
</html>