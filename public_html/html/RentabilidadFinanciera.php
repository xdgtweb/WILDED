<!DOCTYPE html>
<html>
    <head>
        <title>Rentabilidad Financiera</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/estilos.css">
        <link rel="stylesheet" href="../css/PresupuestoPersonal.css">
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="main.js"></script>
    </head>
    <body>
        <div class="col-12">
            <div class="fondoHeader">
                <div class="row">
                    <header>
                        <a class="logoLabel" href="index.php.html">
                            <div id="logo"><img src="../imagenes/ancla/1.1.png" alt="alt"/></div>
                            <label>WILDED</label>
                        </a>
                        <nav class="col-md-4">
                            <a href="grupo.html"><div class="cajaImg"></div></a>
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

                        <h2>Rentabilidad Financiera</h2>
                        <h4>
                            página web que te permite calcular la rentabilidad 
                            de tu empresa en función de tu beneficio neto y 
                            patrimonio neto. La rentabilidad es una medida 
                            importante para saber si tu empresa está obteniendo 
                            ganancias y cuánto estás obteniendo en comparación 
                            con tus inversiones.
                            <br><br>
                            La página es muy fácil de usar. Primero, debes 
                            ingresar el beneficio neto de tu empresa, es decir, 
                            las ganancias que obtienes una vez que se han 
                            deducido los intereses e impuestos. Luego, debes 
                            ingresar el patrimonio neto de tu empresa, que es 
                            el capital y las reservas que tienes. Una vez que 
                            has ingresado estos datos, haz clic en el botón 
                            "Calcular".
                            <br><br>
                            La página procesará la información que has ingresado 
                            y te mostrará la rentabilidad de tu empresa como un 
                            porcentaje en la pantalla. También te mostrará tus 
                            beneficios netos y patrimonio neto, para que puedas 
                            ver cómo se ha calculado la rentabilidad.
                            <br><br>
                            Con esta información, podrás tomar decisiones 
                            financieras informadas sobre el futuro de tu empresa. 
                            Sabrás si tu empresa está generando beneficios y podrás 
                            ajustar tu estrategia de inversión en consecuencia.
                        </h4>
                        <div class="centrado">
                            <div>
                                <form id="formulario">
                                    <div>
                                        <label for="beneficio-neto">Beneficio Neto:</label>
                                        <input type="number" id="beneficio-neto" name="beneficio-neto" required>
                                        <label for="patrimonio-neto">Patrimonio Neto:</label>
                                        <input type="number" id="patrimonio-neto" name="patrimonio-neto" required>
                                        <button type="submit" id="calcular">Calcular</button>
                                    </div>

                                </form>
                                <p id="resultado">Tu beneficio neto es ###€<br>
                                    Tu patrimonio neto es ###€<br>
                                    Tu ROE es #.##%
                                </p>
                            </div>
                        </div>
                    </article>
                </aside>
                <main>
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
        <script>
            // Script para calcular ROE y mostrar el resultado
            const form = document.querySelector('form');
            const resultado = document.querySelector('#resultado');

            form.addEventListener('submit', (event) => {
                event.preventDefault();

                const beneficioNeto = parseFloat(document.querySelector('#beneficio-neto').value);
                const patrimonioNeto = parseFloat(document.querySelector('#patrimonio-neto').value);
                const roe = (beneficioNeto / patrimonioNeto) * 100;

                resultado.innerHTML = `
         Tu beneficio neto es ${beneficioNeto}€<br>
         Tu patrimonio neto es ${patrimonioNeto}€<br>
         Tu ROE es ${roe.toFixed(2)}%`;
            });
        </script>
    </body>
</html>