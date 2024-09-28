<!DOCTYPE html>
<html lang="gl-ES">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="robots" content="max-image-preview:large" />
        <title>ANPA CPI VAL DO DUBRA &#8211; Punto de encontro e comunicación entre a ANPA do CPI de Bembibre e os seus asociados, para informar sobre actividades extraescolares, charlas, excursións, etc.</title>
        <link rel="stylesheet" type="text/css" href="CSS/estilosiniciarsesion.css">
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
                    <li id="iniciarsesion" class="seleccionado">INICIAR SESIÓN</li>
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
                        $conexion = new mysqli("127.0.0.1", "root", "", "anpacpivaldodubragl");
                        if(!$conexion) {
                            echo "<div class='error'><img class='aviso' src='Imaxes/aviso.png' width='25' alt='Aviso'/>Houbo un problema ao conectar á nosa base de datos. Inténteo máis tarde.</div>";
                        } else {
                            $iniciarsesion = "SELECT Nome, Usuario, Contrasinal FROM usuarios WHERE Usuario = '$usuario' AND Contrasinal = '$contrasena'";
                            $resultado = $conexion->query($iniciarsesion);
                            if($resultado->num_rows==0){
                                $error = true;
                            } else {
                                $row = $resultado->fetch_assoc();
                                session_start();
                                $_SESSION["admin"] = $row["Nome"];
                                header("location: index.php");
                            }
                        } 
                    } 
                ?>
                <div id="formulariologin">
                    <form action="<?php echo htmlentities($_SERVER["PHP_SELF"]);?>" method="get">
                        <?php
                            if($error==true){
                                echo "<script>alert('O usuario ou contrasinal non son correctos.');</script>";
                            }
                        ?>
                        <div class="campo">
                            <label for="usuario">Usuario:</label>
                            <input type="text" name="usuario" id="usuario"/>
                        </div><br/><br/>
                        <div class="campo">
                            <label for="contraseña">Contrasinal:</label>
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
                <img src="Imaxes/XuntadeGalicia.png" width="100%" alt="Xunta de Galicia"/>
            </div>
            <div class="idiomas">
                <ul>
                    <li><a href="../gl/iniciarsesion.php">Galego</a></li>
                    <li><a href="../es/iniciarsesion.php">Castelán</a></li>
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