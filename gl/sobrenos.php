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
        <link rel="stylesheet" type="text/css" href="CSS/estilossobrenos.css">
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
                    <li id="sobrenos" class="seleccionado">SOBRE NÓS</li>
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
                <h1>SOBRE NÓS. A NOSA HISTORIA</h1>
            </div>
            <section class="sobrenos">
                <div class="texto1">
                    <p>A Asociación fundouse no ano 1993. Durante estes anos o traballo e a unión de tódolos socios e socias foi alcanzando melloras para 
                    o alumnado do centro: organización de actividades extraescolares, excursións, festivais de fin de curso, Escola de Pais e Nais, etc.</p>
                </div>
                <div class="imagen1">
                    <img src="Imaxes/Noticia1.png" width="100%" alt="Noticia1">
                </div>
                <div class="imagen2">
                    <img src="Imaxes/Noticia2.png" width="100%" alt="Noticia2">
                </div>
                <div class="texto2">
                    <p>Este curso académico acadouse a unha xornada única, un obxectivo loitado durante a historia da Asociación, e gracias a todo o traballo 
                    de todos durante este longo tempo viuse realidade.</p>
                </div>
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
                                $existeusuario = "SELECT Id_Usuario, Nome, MeGustaSobreNós FROM usuarios WHERE Nome = '$admin'";
                                $resultado = $conexiongl->query($existeusuario);
                                if($resultado->num_rows == 0){
                                    echo "<p style='color: red;'>Non existe o usuario $admin</p>";
                                } else {
                                    $row = $resultado->fetch_assoc();
                                    $idusuario = $row["Id_Usuario"];
                                    $megustasobrenos = "UPDATE usuarios SET MeGustaSobreNós = 'Sí' WHERE Id_Usuario = $idusuario";
                                    if($conexiongl->query($megustasobrenos) == true){
                                        echo "<script>
                                            document.getElementById('gustame').style.display = 'none';
                                            document.getElementById('xanonmegusta').style.display = 'block';
                                        </script>";
                                    } else if($conexiongl->query($megustasobrenos) == false){
                                        echo "<script>alert('Por motivos técnicos, non se puido grabar o teu like.');</script>";
                                    }
                                }
                            }
                            $conexiones = new mysqli("127.0.0.1", "root", "", "anpacpivaldodubraes");
                            if(!$conexiones){
                                echo "DATABASE NOT CONNECTED!!!";
                            } else {
                                $existeusuario = "SELECT Id_Usuario, Nombre, MeGustaSobreNós FROM usuarios WHERE Nombre = '$admin'";
                                $resultado = $conexiones->query($existeusuario);
                                if($resultado->num_rows == 0){
                                    echo "<p style='color: red;'>Non existe o usuario $admin</p>";
                                } else {
                                    $row = $resultado->fetch_assoc();
                                    $idusuario = $row["Id_Usuario"];
                                    $megustasobrenos = "UPDATE usuarios SET MeGustaSobreNós = 'Sí' WHERE Id_Usuario = $idusuario";
                                    if($conexiones->query($megustasobrenos) == true){
                                        echo "<script>
                                            document.getElementById('gustame').style.display = 'block';
                                            document.getElementById('xanonmegusta').style.display = 'none';
                                        </script>";
                                    } else if($conexiones->query($megustasobrenos) == false){
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
                                $existeusuario = "SELECT Id_Usuario, Nome, MeGustaSobreNós FROM usuarios WHERE Nome = '$admin'";
                                $resultado = $conexiongl->query($existeusuario);
                                if($resultado->num_rows == 0){
                                    echo "<p style='color: red;'>Non existe o usuario $admin</p>";
                                } else {
                                    $row = $resultado->fetch_assoc();
                                    $idusuario = $row["Id_Usuario"];
                                    $megustasobrenos = "UPDATE usuarios SET MeGustaSobreNós = 'No' WHERE Id_Usuario = $idusuario";
                                    if($conexiongl->query($megustasobrenos) == true){
                                        echo "<script>
                                            document.getElementById('gustame').style.display = 'none';
                                            document.getElementById('xanonmegusta').style.display = 'block';
                                        </script>";
                                    } else if($conexiongl->query($megustasobrenos) == false){
                                        echo "<script>alert('Por motivos técnicos, non se puido grabar o teu dislike.');</script>";
                                    }
                                }
                            }
                            $conexiones = new mysqli("127.0.0.1", "root", "", "anpacpivaldodubraes");
                            if(!$conexiones){
                                echo "DATABASE NOT CONNECTED!!!";
                            } else {
                                $existeusuario = "SELECT Id_Usuario, Nombre, MeGustaSobreNós FROM usuarios WHERE Nombre = '$admin'";
                                $resultado = $conexiones->query($existeusuario);
                                if($resultado->num_rows == 0){
                                    echo "<p style='color: red;'>Non existe o usuario $admin</p>";
                                } else {
                                    $row = $resultado->fetch_assoc();
                                    $idusuario = $row["Id_Usuario"];
                                    $megustasobrenos = "UPDATE usuarios SET MeGustaSobreNós = 'No' WHERE Id_Usuario = $idusuario";
                                    if($conexiones->query($megustasobrenos) == true){
                                        echo "<script>
                                            document.getElementById('gustame').style.display = 'block';
                                            document.getElementById('xanonmegusta').style.display = 'none';
                                        </script>";
                                    } else if($conexiones->query($megustasobrenos) == false){
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
                                $existeusuario = "SELECT Id_Usuario, Nome, MeGustaSobreNós FROM usuarios WHERE Nome = '$admin'";
                                $resultado = $conexion->query($existeusuario);
                                if($resultado->num_rows == 0){
                                    echo "<p style='color: red;'>Non existe o usuario $admin</p>";
                                } else {
                                    $row = $resultado->fetch_assoc();
                                    if($row["MeGustaSobreNós"] == "Sí"){
                                        echo "<button id='xanonmegusta' name='xanonmegusta'>Xa non me gusta</button>";
                                    } else if($row["MeGustaSobreNós"] == "No"){
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
                        $numlikes = "SELECT COUNT(MeGustaSobreNós) AS NumLikes FROM usuarios WHERE MeGustaSobreNós = 'Sí'";
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