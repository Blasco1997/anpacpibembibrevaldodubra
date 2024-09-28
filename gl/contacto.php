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
        <link rel="stylesheet" type="text/css" href="CSS/estiloscontacto.css">
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
                    <li id="contacto" class="seleccionado">CONTACTO</li>
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
                <h1>CONTACTO</h1>
            </div>
            <section class="contacto">
                <div class="direccioneredessociais">
                    <h1>DATOS DE CONTACTO</h1>
                    <p>&#128205; <a href="https://maps.app.goo.gl/UeecQhhwDirZ3b7BA">Rúa Socortes, 18, 15873 Bembibre, A Coruña</a></p>
                    <p>&#128386; <a href="mailto:bembibre.anpa@gmail.com">bembibre.anpa@gmail.com</a></p>
                    <p>&#128383; (+34) 881 86 69 81</p>
                    <p><a href="https://www.facebook.com/profile.php?id=100085304899109"><img src="Imaxes/Facebook.png" width="40" alt="Facebook"/></a>
                </div>
                <div class="rexistrarse">
                    <h1>REXISTRARSE</h1>
                    <?php
                        $errordatos = false;
                        $errorcontrasinal = false;
                        if(isset($_POST["nome"]) && isset($_POST["correo"]) && isset($_POST["usuario"]) && isset($_POST["contrasinal"]) 
                        && isset($_POST["repitacontrasinal"])){
                            $nome = $_POST["nome"];
                            $correo = $_POST["correo"];
                            $usuario = $_POST["usuario"];
                            $contrasinal = $_POST["contrasinal"];
                            $repitacontrasinal = $_POST["repitacontrasinal"];
                            if($nome == "" || $correo == "" || $usuario == "" || $contrasinal == "" || $repitacontrasinal == ""){
                                $errordatos = true;
                            } else if($repitacontrasinal != $contrasinal){
                                $errorcontrasinal = true;
                            } else {
                                if(isset($_POST["telefono"]) || isset($_POST["encontro"]) || isset($_POST["outrosdetalles"])) {
                                    $telefono = $_POST["telefono"];
                                    $encontro = $_POST["encontro"];
                                    $outrosdetalles = $_POST["outrosdetalles"];
                                    $conexion = new mysqli("127.0.0.1", "root", "", "anpacpivaldodubragl");
                                    if (!$conexion) {
                                        echo "<p>DATABASE NOT CONNECTED!!!</p>";
                                    } else {
                                        $rexistrarse = "INSERT INTO usuarios(Nome, Correo, Usuario, Contrasinal, Teléfono, Encontro, OutrosDetalles, MeGustaContacto, MeGustaSobreNós, MeGustaEstatutos, MeGustaContacto)
                                        VALUES('$nome', '$correo', '$usuario', '$contrasinal', '$telefono', '$encontro', '$outrosdetalles', 'No', 'No', 'No', 'No')";
                                        if ($conexion->query($rexistrarse) == true) {
                                            echo "<script>alert('Rexistrácheste aquí exitosamente.');</script>";
                                        } else if ($conexion->query($rexistrarse) == false) {
                                            echo "<script>alert('Houbo problemas ao rexistrarte como usuario.');</script>";
                                        }
                                    }
                                } else {
                                    $conexion = new mysqli("127.0.0.1", "root", "", "anpacpivaldodubragl");
                                    if (!$conexion) {
                                        echo "<p>DATABASE NOT CONNECTED!!!</p>";
                                    } else {
                                        $rexistrarse = "INSERT INTO usuarios(Nome, Correo, Usuario, Contrasinal, MeGustaContacto, MeGustaSobreNós, MeGustaEstatutos, MeGustaContacto)
                                        VALUES('$nome', '$correo', '$usuario', '$contrasinal', 'No', 'No', 'No', 'No')";
                                        if ($conexion->query($rexistrarse) == true) {
                                            echo "<script>alert('Rexistrácheste aquí exitosamente.');</script>";
                                        } else if ($conexion->query($rexistrarse) == false) {
                                            echo "<script>alert('Houbo problemas ao rexistrarte como usuario.');</script>";
                                        }
                                    }
                                }
                            }
                        }
                    ?>
                    <form action="<?php echo htmlentities($_SERVER["PHP_SELF"])?>" method="post">
                        <?php
                            if($errordatos == true){
                                echo "<script>alert('Faltan campos por completar. Revísao.');</script>";
                            } else if($errorcontrasinal == true){
                                echo "<script>alert('As contrasinais non coinciden. Asegúrate de que estean ben escritas.');</script>";
                            }
                        ?>
                        <div class="campo">
                            <label for="nome">Nome (obrigatorio):</label><br/>
                            <input type="text" name="nome"/>
                        </div><br/>
                        <div class="campo">
                            <label for="nome">Correo (obrigatorio):</label><br/>
                            <input type="email" name="correo"/>
                        </div><br/>
                        <div class="campo">
                            <label for="nome">Número de teléfono:</label><br/>
                            <input type="tel" name="telefono"/>
                        </div><br/>
                        <div class="campo">
                            <label for="usuario">Nome de usuario (obrigatorio):</label><br/>
                            <input type="text" name="usuario"/>
                        </div><br/>
                        <div class="campo">
                            <label for="contrasinal">Contrasinal (obrigatorio):</label><br/>
                            <input type="password" name="contrasinal"/>
                        </div><br/>
                        <div class="campo">
                            <label for="repitacontrasinal">Repita contrasinal (obrigatorio):</label><br/>
                            <input type="password" name="repitacontrasinal"/>
                        </div><br/>
                        <div class="campo">
                            <label for="encontro">Como nos coñeciches?</label><br/>
                            <select name="encontro">
                                <option value="Motor de busca">Motor de busca</option>
                                <option value="Medios sociais">Medios sociais</option>
                                <option value="TV">TV</option>
                                <option value="Radio">Radio</option>
                                <option value="Amigo ou familia">Amigo ou familia</option>
                            </select>
                        </div><br/>
                        <div class="campo">
                            <label for="outrosdetalles">Outros detalles:</label><br/>
                            <textarea name="outrosdetalles"></textarea>
                        </div><br/>
                        <div class="campo">
                            <button>ENVIAR</button>
                        </div>
                    </form>
                </div>
                <div class="mandarcomentario">
                    <h1>ESCRIBE A TÚA MENSAXE</h1>
                    <?php
                        $error = false;
                        if(isset($_POST["nome"]) && isset($_POST["correo"]) && isset($_POST["mensaxe"])){
                            $nome = $_POST["nome"];
                            $correo = $_POST["correo"];
                            $mensaxe = $_POST["mensaxe"];
                            if($nome == "" || $correo == "" || $mensaxe == ""){
                                $error = true;
                            } else {
                                $conexion = new mysqli("127.0.0.1", "root", "", "anpacpivaldodubragl");
                                if (!$conexion) {
                                    echo "<p>DATABASE NOT CONNECTED!!!</p>";
                                } else {
                                    $enviarmensaxe = "INSERT INTO comentarios(Nome, Correo, Comentario, Data_Publicación)
                                    VALUES('$nome', '$correo', '$mensaxe', SYSDATE())";
                                    if ($conexion->query($enviarmensaxe) == true) {
                                        echo "<script>alert('Mensaxe enviada exitosamente.');</script>";
                                    } else if ($conexion->query($enviarmensaxe) == false) {
                                        echo "<script>alert('Houbo problemas ao enviar a mensaxe.');</script>";
                                    }
                                }
                            }
                        }
                    ?>
                    <form action="<?php echo htmlentities($_SERVER["PHP_SELF"])?>" method="post">
                        <?php
                            if($error == true){
                                echo "<script>alert('Faltan campos por completar. Revísao.');</script>";
                            }
                        ?>
                        <div class="campo">
                            <label for="nome">Nome (obrigatorio):</label><br/>
                            <input type="text" name="nome"/>
                        </div><br/>
                        <div class="campo">
                            <label for="nome">Correo (obrigatorio):</label><br/>
                            <input type="email" name="correo"/>
                        </div><br/>
                        <div class="campo">
                            <label for="mensaxe">Mensaxe:</label><br/>
                            <textarea name="mensaxe"></textarea>
                        </div><br/>
                        <div class="campo">
                            <button>ENVIAR</button>
                        </div>
                    </form>
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
                                $existeusuario = "SELECT Id_Usuario, Nome, MeGustaContacto FROM usuarios WHERE Nome = '$admin'";
                                $resultado = $conexiongl->query($existeusuario);
                                if($resultado->num_rows == 0){
                                    echo "<p style='color: red;'>Non existe o usuario $admin</p>";
                                } else {
                                    $row = $resultado->fetch_assoc();
                                    $idusuario = $row["Id_Usuario"];
                                    $megustacontacto = "UPDATE usuarios SET MeGustaContacto = 'Sí' WHERE Id_Usuario = $idusuario";
                                    if($conexiongl->query($megustacontacto) == true){
                                        echo "<script>
                                            document.getElementById('gustame').style.display = 'none';
                                            document.getElementById('xanonmegusta').style.display = 'block';
                                        </script>";
                                    } else if($conexiongl->query($megustacontacto) == false){
                                        echo "<script>alert('Por motivos técnicos, non se puido grabar o teu like.');</script>";
                                    }
                                }
                            }
                            $conexiones = new mysqli("127.0.0.1", "root", "", "anpacpivaldodubraes");
                            if(!$conexiones){
                                echo "DATABASE NOT CONNECTED!!!";
                            } else {
                                $existeusuario = "SELECT Id_Usuario, Nombre, MeGustaContacto FROM usuarios WHERE Nombre = '$admin'";
                                $resultado = $conexiones->query($existeusuario);
                                if($resultado->num_rows == 0){
                                    echo "<p style='color: red;'>Non existe o usuario $admin</p>";
                                } else {
                                    $row = $resultado->fetch_assoc();
                                    $idusuario = $row["Id_Usuario"];
                                    $megustacontacto = "UPDATE usuarios SET MeGustaContacto = 'Sí' WHERE Id_Usuario = $idusuario";
                                    if($conexiones->query($megustacontacto) == true){
                                        echo "<script>
                                            document.getElementById('gustame').style.display = 'block';
                                            document.getElementById('xanonmegusta').style.display = 'none';
                                        </script>";
                                    } else if($conexiones->query($megustacontacto) == false){
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
                                $existeusuario = "SELECT Id_Usuario, Nome, MeGustaContacto FROM usuarios WHERE Nome = '$admin'";
                                $resultado = $conexiongl->query($existeusuario);
                                if($resultado->num_rows == 0){
                                    echo "<p style='color: red;'>Non existe o usuario $admin</p>";
                                } else {
                                    $row = $resultado->fetch_assoc();
                                    $idusuario = $row["Id_Usuario"];
                                    $megustacontacto = "UPDATE usuarios SET MeGustaContacto = 'No' WHERE Id_Usuario = $idusuario";
                                    if($conexiongl->query($megustacontacto) == true){
                                        echo "<script>
                                            document.getElementById('gustame').style.display = 'none';
                                            document.getElementById('xanonmegusta').style.display = 'block';
                                        </script>";
                                    } else if($conexiongl->query($megustacontacto) == false){
                                        echo "<script>alert('Por motivos técnicos, non se puido grabar o teu dislike.');</script>";
                                    }
                                }
                            }
                            $conexiones = new mysqli("127.0.0.1", "root", "", "anpacpivaldodubraes");
                            if(!$conexiones){
                                echo "DATABASE NOT CONNECTED!!!";
                            } else {
                                $existeusuario = "SELECT Id_Usuario, Nombre, MeGustaContacto FROM usuarios WHERE Nombre = '$admin'";
                                $resultado = $conexiones->query($existeusuario);
                                if($resultado->num_rows == 0){
                                    echo "<p style='color: red;'>Non existe o usuario $admin</p>";
                                } else {
                                    $row = $resultado->fetch_assoc();
                                    $idusuario = $row["Id_Usuario"];
                                    $megustacontacto = "UPDATE usuarios SET MeGustaContacto = 'No' WHERE Id_Usuario = $idusuario";
                                    if($conexiones->query($megustacontacto) == true){
                                        echo "<script>
                                            document.getElementById('gustame').style.display = 'block';
                                            document.getElementById('xanonmegusta').style.display = 'none';
                                        </script>";
                                    } else if($conexiones->query($megustacontacto) == false){
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
                    <li><a href="../gl/contacto.php">Galego</a></li>
                    <li><a href="../es/contacto.php">Castelán</a></li>
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