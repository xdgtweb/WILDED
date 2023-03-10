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
                        <h2>Para qué sirve WILDED?</h2>
                        <h6>
                            Wilded es una empresa que ofrece un software capaz 
                            de calcular el precio más óptimo para cada uno de 
                            tus productos, basándose en los valores que tú 
                            estableces para alcanzar tus objetivos de ganancias. 
                            Además, gracias a una simulación, podrás visualizar 
                            tus posibles ganancias en el transcurso de un año.
                        </h6>
                        <br>
                        <h6>
                            Nosotros somos la solución perfecta para ayudarte 
                            a empezar tu proyecto de manera inteligente y a un 
                            precio asequible. Sabemos que emprender desde cero 
                            puede ser un desafío, por eso estamos aquí para 
                            brindarte la asesoría que necesitas en cada etapa 
                            del proceso. ¡Deja que Wilded te ayude a alcanzar 
                            el éxito que buscas en tu empresa!
                        </h6>
                    </article>
                </aside>

                <main class="col-md-8">
                    <div class="contenedor">
                        <a href="PresupuestoPersonal.php">  <!-- https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif -->
                            <div class="caja">
                                <!--<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">-->
                                <form action="PresupuestoPersonal.php">    
                                    <!--<input type="hidden" name="cmd" value="_s-xclick">
                                    <input type="hidden" name="hosted_button_id" value="UE39DNY5RGU5J">
                                    <input type="hidden" src="" border="0" name="submit" alt="">-->
                                </form>
                                <h2>Presupuesto Personal</h2>
                                <div class="aux">
                                    <div class="cajaImg"></div>
                                </div>
                                <br>
                                <h2>1,99€</h2>
                            </div>

                        </a>
                        <a href="GanarDienroConProductos.php">
                            <div class="caja">
                                <!--<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">-->
                                <form action="GanarDienroConProductos.php">
                                    <!--<input type="hidden" name="cmd" value="_s-xclick">
                                    <input type="hidden" name="hosted_button_id" value="FX4ED4JVKGUWW">
                                    <input type="image" src="" border="0" name="submit" alt="">-->
                                </form>

                                <h2>rentabilizar productos</h2>
                                <div class="aux">
                                    <div class="cajaImg"></div>
                                </div>
                                <br>
                                <h2>1,99€</h2>
                            </div>
                        </a>

                        <a href="RentabilidadFinanciera.php">
                            <div class="caja">
                                <!--<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">-->
                                <form action="RentabilidadFinanciera.php">
                                    <!--<input type="hidden" name="cmd" value="_s-xclick">
                                    <input type="hidden" name="hosted_button_id" value="FX4ED4JVKGUWW">
                                    <input type="image" src="" border="0" name="submit" alt="">-->
                                </form>

                                <h2>Rentabilidad Financiera</h2>
                                <div class="aux">
                                    <div class="cajaImg"></div>
                                </div>
                                <br>
                                <h2>1,99€</h2>
                            </div>
                        </a>

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
