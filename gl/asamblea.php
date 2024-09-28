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
        <link rel="stylesheet" type="text/css" href="CSS/estilosindex.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
                    <li id="estatutos">ESTATUTOS</li>
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
                <h1>DERRADEIRAS NOVAS</h1>
            </div>
            <aside class="taboleiro1">
                <div class="anuncio1">
                    <img src="Imaxes/Anuncio1.jpg" width="100%" alt="Campamento Dixital">
                </div>
                <div class="enlacesdeinterese">
                    <h1>ENLACES DE INTERESE</h1>
                    <ul>
                        <li id="menuescolar">Menú Escolar</li>
                        <li id="asamblea">Asamblea</li>
                        <li id="recunchodopistacho">Recuncho do Pistacho</li>
                    </ul>
                    <script>
                        let menuescolar = document.getElementById("menuescolar");
                        let asamblea = document.getElementById("asamblea");
                        let recunchodopistacho = document.getElementById("recunchodopistacho");
                        menuescolar.addEventListener("click", function(){
                            window.location.href = "menuescolar.php";
                        });
                        asamblea.addEventListener("click", function(){
                            window.location.href = "asamblea.php";
                        });
                        recunchodopistacho.addEventListener("click", function(){
                            window.location.href = "http://recunchodepistacho.blogspot.com/?m=1";
                        });
                    </script>
                </div>
                <div class="ultimoscomentarios">
                    <h1>COMENTARIOS PUBLICADOS</h1>
                    <div class="vercomentarios">
                        <?php
                            $conexiongl = new mysqli("127.0.0.1", "root", "", "anpacpivaldodubragl");
                            if(!$conexiongl){
                                echo "<p style='color: red;'>DATABASE NOT CONNECTED!!!.</p>";
                            } else {
                                $vercomentarios = "SELECT * FROM comentarios ORDER BY Data_Publicación DESC";
                                $resultados = $conexiongl->query($vercomentarios);
                                if($resultados->num_rows == 0){
                                    echo "<p>(Sen comentarios)</p>";
                                } else {
                                    echo "<div class='paxinascomentarios'>";
                                    if(isset($_GET["commentspage"])) {
                                    $paginacion = $_GET["commentspage"];
                                    if($paginacion<=0 || is_numeric($paginacion)==false) $paginacion=1;
                                    }
                                    else
                                    $paginacion=1;
                                    $url="?commentspage=";  
                                    echo "<p class='pagina'>";
                                    if($paginacion>1)
                                        echo "<a href='$url".($paginacion-1)."'>Anterior</a>";
                                    $total_paginas=(int)($resultados->num_rows/5+1);
                                    for($i=1;$i<=$total_paginas;$i++){
                                        if($i==$paginacion)
                                            echo "&nbsp;&nbsp;<a class='estasaqui'>$i</a>";
                                        else
                                            echo "&nbsp;&nbsp;<a href='$url".$i."'>$i</a>";
                                    }
                                    if($paginacion<$total_paginas)
                                        echo "&nbsp;&nbsp;<a href='$url".($paginacion+1)."'>Seguinte</a>";
                                    echo "</p>";
                                    $posicion=($paginacion-1)*5;
                                    $resultados->data_seek($posicion);
                                    echo "</div>";
                                    $row = $resultados->fetch_assoc();
                                    $i = 1;
                                    echo "<div class='comentariospublicados'>";
                                    do {
                                        echo "<p><img src='Imaxes/User.png' width='30' style='vertical-align: middle;' alt='User'>&nbsp;&nbsp;&nbsp;{$row["Nome"]} | <span><small><a href='mailto:{$row["Correo"]}'>{$row["Correo"]}</a></small></span> :</p><br/>
                                        <p>{$row["Comentario"]}</p><br/>
                                        <p><small>{$row["Data_Publicación"]}</small></p><hr>";
                                        $row = $resultados->fetch_assoc();
                                        $i++;
                                    } while ($row && $i <= 5);
                                    echo "</div>";
                                }
                            }
                        ?>
                    </div>
                </div>
            </aside>
            <section class="blog">
                <?php
                    $conexiongl = new mysqli("127.0.0.1", "root", "", "anpacpivaldodubragl");
                    if (!$conexiongl) {
                        echo "<p style='color: red;'>Non se puido establecer a conexión á nosa base de datos.</p>";
                    } else {
                        $entradasdeblog = "SELECT * FROM blog WHERE Título LIKE '%ASAMBLEA%' ORDER BY Data_Publicación DESC";
                        $resultados = $conexiongl->query($entradasdeblog);
                        if ($resultados->num_rows == 0) {
                            echo "<p style='color: red;'>Aínda non hai entradas publicadas relacionadas coas reunións da asamblea.</p>";
                        } else {
                            echo "<div class='paxinasblog'>";
                            if(isset($_GET["pg"])) {
                            $paginacion = $_GET["pg"];
                            if($paginacion<=0 || is_numeric($paginacion)==false) $paginacion=1;
                            }
                            else
                            $paginacion=1;
                            $url="?pg=";  
                            echo "<p class='pagina'>";
                            if($paginacion>1)
                                echo "<a href='$url".($paginacion-1)."'>Anterior</a>";
                            $total_paginas=(int)($resultados->num_rows/5+1);
                            for($i=1;$i<=$total_paginas;$i++){
                                if($i==$paginacion)
                                    echo "&nbsp;&nbsp;<a class='estasaqui'>$i</a>";
                                else if($i==$paginacion-1 || $i==$paginacion+1)
                                    echo "&nbsp;&nbsp;<a href='$url".$i."'>$i</a>";
                            }
                            if($paginacion<$total_paginas)
                                echo "&nbsp;&nbsp;<a href='$url".($paginacion+1)."'>Seguinte</a>";
                            echo "</p>";
                            $posicion=($paginacion-1)*5;
                            $resultados->data_seek($posicion);
                            echo "</div>";
                            echo "<section class='artigos'>";
                            $row = $resultados->fetch_assoc();
                            $i = 1;
                            do {
                                echo "<article>
                                <h1 class='tituloentrada'>{$row["Título"]}</h1>
                                <p class='descricionentrada'>{$row["Descrición"]}</p>
                                <img class='imaxeentrada' src='{$row["Imaxe"]}' width='100%' alt='{$row["Imaxe"]}'/>
                                <p class='datapublicacion'>Data de publicación: {$row["Data_Publicación"]}</p>
                                </article>";
                                $row = $resultados->fetch_assoc();
                                $i++;
                            } while ($row && $i <= 5);
                            echo "</section>";
                        }
                        
                    }
                    
                ?>
            </section>
            <aside class="taboleiro2">
                <div class="anuncio2">
                    <img src="Imaxes/Anuncio2.jpg" width="100%" alt="Xornada Multideporte">
                </div>
                <div class="calendario">
                    <div class="header">
                    <button id="prev-month">&lt;</button>
                    <h2 id="month-year"></h2>
                    <button id="next-month">&gt;</button>
                    </div>
                    <table id="calendar">
                        <thead>
                            <tr>
                                <th>Dom</th>
                                <th>Lun</th>
                                <th>Mar</th>
                                <th>Mié</th>
                                <th>Jue</th>
                                <th>Vie</th>
                                <th>Sáb</th>
                            </tr>
                        </thead>
                        <tbody id="calendar-body"></tbody>
                    </table>
                    <script>
                        const calendarBody = document.getElementById('calendar-body');
                        const monthYearDisplay = document.getElementById('month-year');
                        const prevMonthButton = document.getElementById('prev-month');
                        const nextMonthButton = document.getElementById('next-month');

                        const months = ['XAN', 'FEB', 'MAR', 'ABR', 'MAI', 'XUÑ', 'XUL', 'AGO', 'SET', 'OUT', 'NOV', 'DEC'];
                        let currentDate = new Date();

                        function generateCalendar(year, month) {
                            // Limpiar cuerpo del calendario
                            calendarBody.innerHTML = '';

                            // Obtener primer día del mes
                            const firstDay = new Date(year, month, 1).getDay();
                            const lastDate = new Date(year, month + 1, 0).getDate();

                            // Actualizar el título del mes y año
                            monthYearDisplay.textContent = `${months[month]} ${year}`;

                            let date = 1;

                            // Generar las filas del calendario
                            for (let i = 0; i < 6; i++) {
                                const row = document.createElement('tr');

                                // Generar las celdas del calendario
                                for (let j = 0; j < 7; j++) {
                                    const cell = document.createElement('td');
                                    if (i === 0 && j < firstDay) {
                                        // Celdas vacías antes del primer día del mes
                                        cell.textContent = '';
                                    } else if (date > lastDate) {
                                        // Dejar vacías las celdas restantes
                                        cell.textContent = '';
                                    } else {
                                        // Rellenar las celdas con los días del mes
                                        cell.textContent = date;

                                        // Resaltar el día actual
                                        const today = new Date();
                                        if (date === today.getDate() && year === today.getFullYear() && month === today.getMonth()) {
                                            cell.classList.add('current-day');
                                        }

                                        date++;
                                    }
                                    row.appendChild(cell);
                                }

                                calendarBody.appendChild(row);
                            }
                        }

                        // Cambiar al mes anterior
                        prevMonthButton.addEventListener('click', () => {
                            currentDate.setMonth(currentDate.getMonth() - 1);
                            generateCalendar(currentDate.getFullYear(), currentDate.getMonth());
                        });

                        // Cambiar al siguiente mes
                        nextMonthButton.addEventListener('click', () => {
                            currentDate.setMonth(currentDate.getMonth() + 1);
                            generateCalendar(currentDate.getFullYear(), currentDate.getMonth());
                        });

                        // Generar calendario para el mes actual al cargar la página
                        generateCalendar(currentDate.getFullYear(), currentDate.getMonth());
                    </script>
                </div>
            </aside>
            <section class="galeria">
                <h1>GALERÍA DE FOTOS</h1>
                <?php
                    for ($i = 1; $i <= 21 ; $i++) { 
                        echo "<section class='sector'><img src='Imaxes/Gallery/Diapositiva$i.png' alt='Diapositiva$i'></section>";
                    }
                ?>
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
                <div style="text-align:center">
                    <?php
                        for ($i = 1; $i <= 21; $i++) { 
                            echo "<span class='dot' onclick='currentSlide($i)'></span>";
                        }
                    ?>
                </div>
            </section>
            <script>
                let slideIndex = 1;
                showSlides(slideIndex);

                // Next/previous controls
                function plusSlides(n) {
                    showSlides(slideIndex += n);
                }

                // Thumbnail image controls
                function currentSlide(n) {
                    showSlides(slideIndex = n);
                }

                function showSlides(n) {
                    let i;
                    let slides = document.getElementsByClassName("sector");
                    let dots = document.getElementsByClassName("dot");
                    if (n > slides.length) {slideIndex = 1}
                    if (n < 1) {slideIndex = slides.length}
                    for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";
                    }
                    for (i = 0; i < dots.length; i++) {
                        dots[i].className = dots[i].className.replace(" active", "");
                    }
                    slides[slideIndex-1].style.display = "block";
                    dots[slideIndex-1].className += " active";
                } 
            </script>
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
                                $existeusuario = "SELECT Id_Usuario, Nome, MeGustaIndex FROM usuarios WHERE Nome = '$admin'";
                                $resultado = $conexiongl->query($existeusuario);
                                if($resultado->num_rows == 0){
                                    echo "<p style='color: red;'>Non existe o usuario $admin</p>";
                                } else {
                                    $row = $resultado->fetch_assoc();
                                    $idusuario = $row["Id_Usuario"];
                                    $megustaindex = "UPDATE usuarios SET MeGustaIndex = 'Sí' WHERE Id_Usuario = $idusuario";
                                    if($conexiongl->query($megustaindex) == true){
                                        echo "<script>
                                            document.getElementById('gustame').style.display = 'none';
                                            document.getElementById('xanonmegusta').style.display = 'block';
                                        </script>";
                                    } else if($conexiongl->query($megustaindex) == false){
                                        echo "<script>alert('Por motivos técnicos, non se puido grabar o teu like.');</script>";
                                    }
                                }
                            }
                            $conexiones = new mysqli("127.0.0.1", "root", "", "anpacpivaldodubraes");
                            if(!$conexiones){
                                echo "DATABASE NOT CONNECTED!!!";
                            } else {
                                $existeusuario = "SELECT Id_Usuario, Nombre, MeGustaIndex FROM usuarios WHERE Nombre = '$admin'";
                                $resultado = $conexiones->query($existeusuario);
                                if($resultado->num_rows == 0){
                                    echo "<p style='color: red;'>Non existe o usuario $admin</p>";
                                } else {
                                    $row = $resultado->fetch_assoc();
                                    $idusuario = $row["Id_Usuario"];
                                    $megustaindex = "UPDATE usuarios SET MeGustaIndex = 'Sí' WHERE Id_Usuario = $idusuario";
                                    if($conexiones->query($megustaindex) == true){
                                        echo "<script>
                                            document.getElementById('gustame').style.display = 'block';
                                            document.getElementById('xanonmegusta').style.display = 'none';
                                        </script>";
                                    } else if($conexiones->query($megustaindex) == false){
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
                                $existeusuario = "SELECT Id_Usuario, Nome, MeGustaIndex FROM usuarios WHERE Nome = '$admin'";
                                $resultado = $conexiongl->query($existeusuario);
                                if($resultado->num_rows == 0){
                                    echo "<p style='color: red;'>Non existe o usuario $admin</p>";
                                } else {
                                    $row = $resultado->fetch_assoc();
                                    $idusuario = $row["Id_Usuario"];
                                    $megustaindex = "UPDATE usuarios SET MeGustaIndex = 'No' WHERE Id_Usuario = $idusuario";
                                    if($conexiongl->query($megustaindex) == true){
                                        echo "<script>
                                            document.getElementById('gustame').style.display = 'none';
                                            document.getElementById('xanonmegusta').style.display = 'block';
                                        </script>";
                                    } else if($conexiongl->query($megustaindex) == false){
                                        echo "<script>alert('Por motivos técnicos, non se puido grabar o teu dislike.');</script>";
                                    }
                                }
                            }
                            $conexiones = new mysqli("127.0.0.1", "root", "", "anpacpivaldodubraes");
                            if(!$conexiones){
                                echo "DATABASE NOT CONNECTED!!!";
                            } else {
                                $existeusuario = "SELECT Id_Usuario, Nombre, MeGustaIndex FROM usuarios WHERE Nombre = '$admin'";
                                $resultado = $conexiones->query($existeusuario);
                                if($resultado->num_rows == 0){
                                    echo "<p style='color: red;'>Non existe o usuario $admin</p>";
                                } else {
                                    $row = $resultado->fetch_assoc();
                                    $idusuario = $row["Id_Usuario"];
                                    $megustaindex = "UPDATE usuarios SET MeGustaIndex = 'No' WHERE Id_Usuario = $idusuario";
                                    if($conexiones->query($megustaindex) == true){
                                        echo "<script>
                                            document.getElementById('gustame').style.display = 'block';
                                            document.getElementById('xanonmegusta').style.display = 'none';
                                        </script>";
                                    } else if($conexiones->query($megustaindex) == false){
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
                            $conexiongl = new mysqli("127.0.0.1", "root", "", "anpacpivaldodubragl");
                            if(!$conexiongl){
                                echo "DATABASE NOT CONNECTED!!!";
                            } else {
                                $existeusuario = "SELECT Id_Usuario, Nome, MeGustaIndex FROM usuarios WHERE Nome = '$admin'";
                                $resultado = $conexiongl->query($existeusuario);
                                if($resultado->num_rows == 0){
                                    echo "<p style='color: red;'>Non existe o usuario $admin</p>";
                                } else {
                                    $row = $resultado->fetch_assoc();
                                    if($row["MeGustaIndex"] == "Sí"){
                                        echo "<button id='xanonmegusta' name='xanonmegusta'>Xa non me gusta</button>";
                                    } else if($row["MeGustaIndex"] == "No"){
                                        echo "<button id='gustame' name='gustame'>Gústame</button>";
                                    }
                                }
                            }
                        }
                    ?>
                </form>
                <?php
                    $conexiongl = new mysqli("127.0.0.1", "root", "", "anpacpivaldodubragl");
                    if(!$conexiongl){
                        echo "DATABASE NOT CONNECTED!!!";
                    } else {
                        $numlikes = "SELECT COUNT(MeGustaIndex) AS NumLikes FROM usuarios WHERE MeGustaIndex = 'Sí'";
                        $resultado = $conexiongl->query($numlikes);
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
                    <li><a href="../gl/asamblea.php">Galego</a></li>
                    <li><a href="../es/asamblea.php">Castelán</a></li>
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