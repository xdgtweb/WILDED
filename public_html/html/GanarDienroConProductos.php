<!DOCTYPE html>
<html>
    <head>
        <title>Ganar Dinero con Productos</title>
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

                        <h2>Ganar Dinero con Productos</h2>
                        <h4>
                            Calcular el precio de venta de un producto es 
                            fundamental para obtener ganancias en un negocio. 
                            Una fórmula muy útil para hacerlo es la siguiente: 
                            Precio de venta = Costo unitario ÷ (1 - Ganancia 
                            deseada como decimal). Esta fórmula se basa en 
                            restar el porcentaje de ganancia deseado al número 
                            1 y dividir el resultado en el costo unitario del 
                            producto. Por ejemplo, si el costo unitario es $100 
                            y la ganancia deseada es del 20%, el precio de 
                            venta sería $125. Es importante verificar los 
                            resultados antes de establecer los precios de venta 
                            para evitar pérdidas en el negocio.
                        </h4>
                        <div class="centrado">
                            <div>
                                <form id="formulario">
                                    <div>
                                        <label for="costo">Costo unitario:</label>
                                        <input type="number" id="costo" name="costo">
                                        <label for="ganancia">Ganancia deseada:</label>
                                        <input type="number" id="ganancia" name="ganancia">
                                    </div>
                                    <button type="button" id="calcular">Calcular</button>
                                </form>
                                <p id="precio">El precio de venta necesario es de #.##€</p>
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
            const formulario = document.getElementById('formulario');
            const precioElemento = document.getElementById('precio');
            const calcularBoton = document.getElementById('calcular');
            calcularBoton.addEventListener('click', () => {
                const costo = formulario.costo.value;
                const ganancia = formulario.ganancia.value;
                const margenBeneficio = 100 - ganancia;
                const decimalMargen = margenBeneficio / 100;
                const precio = costo / decimalMargen;
                precioElemento.innerHTML = `El precio de venta necesario es de <h5>${precio.toFixed(2)}€</h5>`;
            });
        </script>
    </body>
</html>