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
        <link rel="stylesheet" type="text/css" href="CSS/estilossobrenos.css">
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
                    <li id="sobrenosotros" class="seleccionado">SOBRE NOSOTROS</li>
                    <li id="ocentro">EL CENTRO</li>
                    <li id="estatutos">ESTATUTOS</li>
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
                <h1>SOBRE NOSOTROS. NUESTRA HISTORIA</h1>
            </div>
            <section class="sobrenos">
                <div class="texto1">
                    <p>La Asociación se fundó en el año 1993. Durante estos años el trabajo y la unión de todos los socios y socias fue alcanzando mejoras para 
                    el alumnado del centro: organización de actividades extraescolares, excursiones, festivales de fin de curso, Escuela de Padres y Madres, etc.</p>
                </div>
                <div class="imagen1">
                    <img src="Imágenes/Noticia1.png" width="100%" alt="Noticia1">
                </div>
                <div class="imagen2">
                    <img src="Imágenes/Noticia2.png" width="100%" alt="Noticia2">
                </div>
                <div class="texto2">
                    <p>Este curso académico se logró a una jornada única, un objetivo luchado durante la historia de la Asociación, y gracias a todo el trabajo 
                    de todos durante este largo tiempo se hizo realidad.</p>
                </div>
            </section>
            <section class="likeecompartir">
                <hr class="hrcurto">
                <b>Compárteo:</b><br/>
                <?php
                    $url = "https://www.anpacpibembibrevaldodubra.com/gl/index.php";
                    $text = "inicioanpabembibre";
                    $hashtag = "indexanpabembibre";
                    echo "<a href='https://www.facebook.com/sharer/sharer.php?u=$url' target='_blank'><img src='Imágenes/Facebook.png' width='25' alt='Facebook'/></a>";
                    echo "<a href='https://x.com/intent/tweet?text=$text&url=$url&hashtags=$hashtag' target='_blank'><img src='Imágenes/X.png' width='25' style='border-radius: 100%;' alt='X'/></a>";
                    echo "<a href='https://api.whatsapp.com/send?text=$text' target='_blank'><img src='Imágenes/WhatsApp.png' width='25' style='border-radius: 100%;' alt='WhatsApp'/></a>";
                ?><br/>
                <hr class="hrcurto">
                <b>Gústame isto:</b><br/>
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
                                $existeusuario = "SELECT Id_Usuario, Nome, MeGustaSobreNosotros FROM usuarios WHERE Nome = '$admin'";
                                $resultado = $conexiongl->query($existeusuario);
                                if($resultado->num_rows == 0){
                                    echo "<p style='color: red;'>No existe el usuario $admin</p>";
                                } else {
                                    $row = $resultado->fetch_assoc();
                                    $idusuario = $row["Id_Usuario"];
                                    $megustasobrenosotros = "UPDATE usuarios SET MeGustaSobreNosotros = 'Sí' WHERE Id_Usuario = $idusuario";
                                    if($conexiongl->query($megustasobrenosotros) == true){
                                        echo "<script>
                                            document.getElementById('gustame').style.display = 'none';
                                            document.getElementById('xanonmegusta').style.display = 'block';
                                        </script>";
                                    } else if($conexiongl->query($megustasobrenosotros) == false){
                                        echo "<script>alert('Por motivos técnicos, no se puido grabar tu like.');</script>";
                                    }
                                }
                            }
                            $conexiones = new mysqli("127.0.0.1", "root", "", "anpacpivaldodubraes");
                            if(!$conexiones){
                                echo "DATABASE NOT CONNECTED!!!";
                            } else {
                                $existeusuario = "SELECT Id_Usuario, Nombre, MeGustaSobreNosotros FROM usuarios WHERE Nombre = '$admin'";
                                $resultado = $conexiones->query($existeusuario);
                                if($resultado->num_rows == 0){
                                    echo "<p style='color: red;'>No existe el usuario $admin</p>";
                                } else {
                                    $row = $resultado->fetch_assoc();
                                    $idusuario = $row["Id_Usuario"];
                                    $megustasobrenosotros = "UPDATE usuarios SET MeGustaSobreNosotros = 'Sí' WHERE Id_Usuario = $idusuario";
                                    if($conexiones->query($megustasobrenosotros) == true){
                                        echo "<script>
                                            document.getElementById('gustame').style.display = 'block';
                                            document.getElementById('xanonmegusta').style.display = 'none';
                                        </script>";
                                    } else if($conexiones->query($megustasobrenosotros) == false){
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
                                $existeusuario = "SELECT Id_Usuario, Nome, MeGustaSobreNosotros FROM usuarios WHERE Nome = '$admin'";
                                $resultado = $conexiongl->query($existeusuario);
                                if($resultado->num_rows == 0){
                                    echo "<p style='color: red;'>No existe el usuario $admin</p>";
                                } else {
                                    $row = $resultado->fetch_assoc();
                                    $idusuario = $row["Id_Usuario"];
                                    $megustasobrenosotros = "UPDATE usuarios SET MeGustaSobreNosotros = 'No' WHERE Id_Usuario = $idusuario";
                                    if($conexiongl->query($megustasobrenosotros) == true){
                                        echo "<script>
                                            document.getElementById('gustame').style.display = 'none';
                                            document.getElementById('xanonmegusta').style.display = 'block';
                                        </script>";
                                    } else if($conexiongl->query($megustasobrenosotros) == false){
                                        echo "<script>alert('Por motivos técnicos, no se puido grabar tu dislike.');</script>";
                                    }
                                }
                            }
                            $conexiones = new mysqli("127.0.0.1", "root", "", "anpacpivaldodubraes");
                            if(!$conexiones){
                                echo "DATABASE NOT CONNECTED!!!";
                            } else {
                                $existeusuario = "SELECT Id_Usuario, Nombre, MeGustaSobreNosotros FROM usuarios WHERE Nombre = '$admin'";
                                $resultado = $conexiones->query($existeusuario);
                                if($resultado->num_rows == 0){
                                    echo "<p style='color: red;'>No existe el usuario $admin</p>";
                                } else {
                                    $row = $resultado->fetch_assoc();
                                    $idusuario = $row["Id_Usuario"];
                                    $megustasobrenosotros = "UPDATE usuarios SET MeGustaSobreNosotros = 'No' WHERE Id_Usuario = $idusuario";
                                    if($conexiones->query($megustasobrenosotros) == true){
                                        echo "<script>
                                            document.getElementById('gustame').style.display = 'block';
                                            document.getElementById('xanonmegusta').style.display = 'none';
                                        </script>";
                                    } else if($conexiones->query($megustasobrenosotros) == false){
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
                                $existeusuario = "SELECT Id_Usuario, Nombre, MeGustaSobreNosotros FROM usuarios WHERE Nombre = '$admin'";
                                $resultado = $conexion->query($existeusuario);
                                if($resultado->num_rows == 0){
                                    echo "<p style='color: red;'>No existe el usuario $admin</p>";
                                } else {
                                    $row = $resultado->fetch_assoc();
                                    if($row["MeGustaSobreNosotros"] == "Sí"){
                                        echo "<button id='xanonmegusta' name='xanonmegusta'>Ya no me gusta</button>";
                                    } else if($row["MeGustaSobreNosotros"] == "No"){
                                        echo "<button id='gustame' name='gustame'>Me gusta</button>";
                                    }
                                }
                            }
                        }
                    ?>
                </form>
                <?php
                    $conexion = new mysqli("127.0.0.1", "root", "", "anpacpivaldodubraes");
                    if(!$conexion){
                        echo "DATABASE NOT CONNECTED!!!";
                    } else {
                        $numlikes = "SELECT COUNT(MeGustaSobreNosotros) AS NumLikes FROM usuarios WHERE MeGustaSobreNosotros = 'Sí'";
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
                    <li><a href="../gl/sobrenos.php">Gallego</a></li>
                    <li><a href="../es/sobrenosotros.php">Castellano</a></li>
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