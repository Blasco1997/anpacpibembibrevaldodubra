<!DOCTYPE html>
<html lang="gl-ES">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="max-image-preview:large" />
        <title>ANPA CPI VAL DO DUBRA &#8211; Punto de encuentro y comunicación entre el ANPA del CPI de Bembibre y sus asociados, para informar sobre actividades extraescolares, charlas, excursiones, etc.</title>
        <link rel="stylesheet" type="text/css" href="CSS/estilosiniciarsesion.css">
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
                    <li id="estatutos">ESTATUTOS</li>
                    <li id="contacto">CONTACTO</li>
                    <li id="iniciarsesion" class="seleccionado">INICIAR SESIÓN</li>
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
            <div class="vacio1"></div>
            <div class="vacio2"></div>
            <div class="titulopaxina">
                <h1>INICIAR SESIÓN</h1>
            </div>
            <section class="iniciarsesion">
                <?php
                    $error = false;
                    if(isset($_GET["usuario"]) && isset($_GET["contraseña"])){
                        $usuario = $_GET["usuario"];
                        $contrasena = $_GET["contraseña"];
                        $conexion = new mysqli("127.0.0.1", "root", "", "anpacpivaldodubraes");
                        if(!$conexion) {
                            echo "<div class='error'><img class='aviso' src='Imágenes/aviso.png' width='25' alt='Aviso'/>Hubo un problema al conectar a nuestra base de datos. Inténteo más tarde.</div>";
                        } else {
                            $iniciarsesion = "SELECT Nombre, Usuario, Contraseña FROM usuarios WHERE Usuario = '$usuario' AND Contraseña = '$contrasena'";
                            $resultado = $conexion->query($iniciarsesion);
                            if($resultado->num_rows==0){
                                $error = true;
                            } else {
                                $row = $resultado->fetch_assoc();
                                session_start();
                                $_SESSION["admin"] = $row["Nombre"];
                                header("location: index.php");
                            }
                        } 
                    } 
                ?>
                <div id="formulariologin">
                    <form action="<?php echo htmlentities($_SERVER["PHP_SELF"]);?>" method="get">
                        <?php
                            if($error==true){
                                echo "<script>alert('El usuario o la contraseña no son correctos.');</script>";
                            }
                        ?>
                        <div class="campo">
                            <label for="usuario">Usuario:</label>
                            <input type="text" name="usuario" id="usuario"/>
                        </div><br/><br/>
                        <div class="campo">
                            <label for="contraseña">Contraseña:</label>
                            <input type="password" name="contraseña" id="contraseña"/>
                        </div><br/><br/>
                        <div class="campo">
                            <button id="acceder">ACCEDER</button>
                        </div>
                    </form>
                </div>
            </section>
        </main>
        <footer>
            <div class="xunta">
                <img src="Imágenes/XuntadeGalicia.png" width="100%" alt="Xunta de Galicia"/>
            </div>
            <div class="idiomas">
                <ul>
                    <li><a href="../gl/iniciarsesion.php">Gallego</a></li>
                    <li><a href="../es/iniciarsesion.php">Castellano</a></li>
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