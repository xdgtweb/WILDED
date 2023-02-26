<?php
require 'config.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>WILDED</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/estilos.css">
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7537129183208698"
        crossorigin="anonymous"></script>
    </head>
    <body>

        <div class="col-12">
            <div class="fondoHeader">
                <div class="row">
                    <header>
                        <a class="logoLabel" href="index.php">
                            <div id="logo"><img src="../imagenes/ancla/1.1.png" alt="alt"/></div>
                            <label>WILDED</label>
                        </a>
                        <nav class="col-md-4">
                            <a href="login.php"><div class="cajaImg"></div></a>
                            <a href="grupo.php"><div class="cajaImg"></div></a>
                            <a href="#"><div class="cajaImg"></div></a>
                            <a href="mailto:wildedcompany@gmail.com"><div class="cajaImg"></div></a>
                        </nav>
                    </header>
                </div>
            </div>
        </div>
        <div class="fondoMain">
            <div class="row">

                <aside class="col-md-4">
                    <article>
                        <h2>Iniciar Sesion</h2>

                    </article>
                </aside>

                <main class="col-md-8">
                    <div class="contenedor">


                        <?php
                        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                            // Obtener los datos del formulario
                            $usuario = $_POST['usuario'];
                            $contraseña = $_POST['contraseña'];
                            $email = $_POST['email'];

                            // Conectar a la base de datos
                            $conn = mysqli_connect('PMYSQL166.dns-servicio.com:3306', 'wilded', 'dagarto333', '9741210_userswilded');

                            // Verificar si la conexión fue exitosa
                            if (!$conn) {
                                die('Error al conectar a la base de datos: ' . mysqli_connect_error());
                            }

                            // Escapar los datos para evitar inyección SQL
                            $usuario = mysqli_real_escape_string($conn, $usuario);
                            $contraseña = mysqli_real_escape_string($conn, $contraseña);
                            $email = mysqli_real_escape_string($conn, $email);

                            // Consultar la base de datos para verificar el usuario
                            $query = "SELECT id FROM usuarios WHERE usuario='$usuario'";
                            $result = mysqli_query($conn, $query);

                            if ($result && mysqli_num_rows($result) > 0) {
                                // El usuario ya existe, mostrar un mensaje de error
                                $error = 'El usuario ya existe';
                            } else {
                                // Cifrar la contraseña con bcrypt
                                $contraseña_hash = password_hash($contraseña, PASSWORD_DEFAULT);

                                // Insertar el usuario en la base de datos
                                $query = "INSERT INTO usuarios (usuario, contraseña, email) VALUES ('$usuario', '$contraseña_hash', '$email')";
                                $result = mysqli_query($conn, $query);

                                if ($result) {
                                    // El usuario se ha insertado correctamente, redirigir a otra página
                                    header('Location: login.php');
                                    exit;
                                } else {
                                    // Ocurrió un error al insertar el usuario, mostrar un mensaje de error
                                    $error = 'Error al insertar el usuario';
                                }
                            }

                            // Cerrar la conexión a la base de datos
                            mysqli_close($conn);
                        }
                        ?>

                        <form method="POST" action="">
                            <label for="usuario">Usuario:</label>
                            <input type="text" id="usuario" name="usuario">
                            <br>
                            <label for="contraseña">Contraseña:</label>
                            <input type="password" id="contraseña" name="contraseña">
                            <br>
                            <label for="email">Email:</label>
                            <input type="email" id="email" name="email">
                            <br>
                            <button type="submit">Registrarse</button>
                            <p>Ya tienes una cuenta? <a href="login.php">Inicia sesión aquí</a></p>
                        </form>

                    </div>
                </main>


            </div>
        </div>

        <div class="fondoFooter">

            <div class="row">
                <footer class="col-12">
                    <div class="col-md-6">
                        <ul class="redesSociales">
                            <li><a href="#"><div class="cajaImg"></div></a></li>
                            <li><a href="#"><div class="cajaImg"></div></a></li>
                            <li><a href="#"><div class="cajaImg"></div></a></li>
                        </ul>
                    </div>
                    <div class="col-12">
                        <p>Wilded todos los derechos reservados © 2023</p>
                    </div>
                </footer>
            </div>
        </div>

    </body>
</html>
