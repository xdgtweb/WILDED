<!DOCTYPE html>
<html>
    <head>
        <title>Presupuesto Personal</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/estilos.css">
        <link rel="stylesheet" href="../css/PresupuestoPersonal.css">
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
                        <h2>Presupuesto Personal</h2>
                        <h3>
                            Esta página permite al usuario ingresar y visualizar 
                            sus gastos mensuales mediante un gráfico de pastel 
                            interactivo que muestra los porcentajes en diferentes 
                            categorías como ingresos, agua, comida, electricidad, 
                            hipoteca, estacionamiento, coche y basura. Los datos 
                            pueden ser actualizados y borrados por el usuario, y 
                            se almacenan localmente para su persistencia. 
                            La grafica se actualiza automáticamente al ingresar 
                            nuevos datos y se puede borrar con el botón 
                            correspondiente.
                        </h3>
                    </article>
                </aside>

                    <main>
                        <div>
                            <label for="income">Ingreso Mensual:</label><br>
                            <input type="number" id="income" name="income"><br>
                            <label for="water">Agua:</label><br>
                            <input type="number" id="water" name="water"><br>
                            <label for="food">Comida:</label><br>
                            <input type="number" id="food" name="food"><br>
                            <label for="electricity">Electricidad:</label><br>
                            <input type="number" id="electricity" name="electricity"><br>
                            <label for="mortgage">Hipoteca:</label><br>
                            <input type="number" id="mortgage" name="mortgage"><br>
                            <label for="parking">Parking:</label><br>
                            <input type="number" id="parking" name="parking"><br>
                            <label for="car">Coche:</label><br>
                            <input type="number" id="car" name="car"><br>
                            <label for="garbage">Basura:</label><br>
                            <input type="number" id="garbage" name="garbage"><br>
                            <button id="submit-btn">Calcular</button>
                            <button id="clear-btn">Borrar</button>
                        </div>
                        
                        <div>
                            <canvas id="chart"></canvas>
                            
                        </div>
                        <div class="logoCentro"></div>

                    </main>
                <div class="fondoVideos">
                    <div class="row">
                        <div class="videos">
                            <video controls>
                                <source src="../videos/1.mp4" type="video/mp4">
                            </video>

                        </div>
                    </div>
                </div>
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
            const incomeInput = document.getElementById("income");
            const waterInput = document.getElementById("water");
            const foodInput = document.getElementById("food");
            const electricityInput = document.getElementById("electricity");
            const mortgageInput = document.getElementById("mortgage");
            const parkingInput = document.getElementById("parking");
            const carInput = document.getElementById("car");
            const garbageInput = document.getElementById("garbage");
            const submitBtn = document.getElementById("submit-btn");
            const clearBtn = document.getElementById("clear-btn");
            const chartCtx = document.getElementById("chart").getContext("2d");
            let myChart;

            // Función para actualizar el gráfico y guardar los datos en localStorage
            function updateChart() {
                const income = parseFloat(incomeInput.value);
                const water = parseFloat(waterInput.value);
                const food = parseFloat(foodInput.value);
                const electricity = parseFloat(electricityInput.value);
                const mortgage = parseFloat(mortgageInput.value);
                const parking = parseFloat(parkingInput.value);
                const car = parseFloat(carInput.value);
                const garbage = parseFloat(garbageInput.value);

                if (!isNaN(income) && !isNaN(water) && !isNaN(food) && !isNaN(electricity) && !isNaN(mortgage) && !isNaN(parking) && !isNaN(car) && !isNaN(garbage)) {
                    const savedIncome = localStorage.getItem("income");
                    const savedWater = localStorage.getItem("water");
                    const savedFood = localStorage.getItem("food");
                    const savedElectricity = localStorage.getItem("electricity");
                    const savedMortgage = localStorage.getItem("mortgage");
                    const savedParking = localStorage.getItem("parking");
                    const savedCar = localStorage.getItem("car");
                    const savedGarbage = localStorage.getItem("garbage");

                    const newIncome = (savedIncome ? parseFloat(savedIncome) : 0) + income;
                    const newWater = (savedWater ? parseFloat(savedWater) : 0) + water;
                    const newFood = (savedFood ? parseFloat(savedFood) : 0) + food;
                    const newElectricity = (savedElectricity ? parseFloat(savedElectricity) : 0) + electricity;
                    const newMortgage = (savedMortgage ? parseFloat(savedMortgage) : 0) + mortgage;
                    const newParking = (savedParking ? parseFloat(savedParking) : 0) + parking;
                    const newCar = (savedCar ? parseFloat(savedCar) : 0) + car;
                    const newGarbage = (savedGarbage ? parseFloat(savedGarbage) : 0) + garbage;

                    const data = {
                        labels: ["Ingresos", "Agua", "Comida", "Electricidad", "Hipoteca", "Parking", "Coche", "Basura", "Ahorros"],
                        datasets: [{
                                data: [newIncome, newWater, newFood, newElectricity, newMortgage, newParking, newCar, newGarbage, newIncome - newWater - newFood - newElectricity - newMortgage - newParking - newCar - newGarbage],
                                backgroundColor: ["rgba(35, 255, 0)", "rgba(0, 255, 212)", "rgba(255, 176, 0)", "rgba(0, 36, 255)", "rgba(255, 243, 0)", "rgba(163, 163, 163)", "rgba(255, 0, 165)", "rgba(0, 183, 91)", "rgba(255, 0, 0)"]
                            }]
                    };

                    const options = {
                        legend: {

                            labels: {
                                fontColor: 'white'
                            }
                        },
                        tooltips: {
                            callbacks: {
                                label: function (tooltipItem, data) {
                                    let label = data.labels[tooltipItem.index] || '';
                                    if (label) {
                                        label += ': ';
                                    }
                                    label += data.datasets[0].data[tooltipItem.index].toFixed(2) + '€';
                                    return label;
                                }
                            },
                            titleFontColor: 'white',
                            bodyFontColor: 'white'
                        }
                    };

                    if (myChart) {
                        myChart.destroy();
                    }

                    myChart = new Chart(chartCtx, {
                        type: "doughnut",
                        data: data,
                        options: options
                    });

                    localStorage.setItem("income", newIncome);
                    localStorage.setItem("water", newWater);
                    localStorage.setItem("food", newFood);
                    localStorage.setItem("electricity", newElectricity);
                    localStorage.setItem("mortgage", newMortgage);
                    localStorage.setItem("parking", newParking);
                    localStorage.setItem("car", newCar);
                    localStorage.setItem("garbage", newGarbage);
                }
            }

            submitBtn.addEventListener("click", () => {
                updateChart();
            });

            clearBtn.addEventListener("click", () => {
                incomeInput.value = "";
                waterInput.value = "";
                foodInput.value = "";
                electricityInput.value = "";
                mortgageInput.value = "";
                parkingInput.value = "";
                carInput.value = "";
                garbageInput.value = "";
                if (myChart) {
                    myChart.destroy();
                }
                localStorage.clear();
            });

            window.addEventListener("load", function (event) {
                incomeInput.value = "";
                waterInput.value = "";
                foodInput.value = "";
                electricityInput.value = "";
                mortgageInput.value = "";
                parkingInput.value = "";
                carInput.value = "";
                garbageInput.value = "";
            });

            // Cargar gráfico al cargar la página
            window.onload = () => {
                const savedIncome = localStorage.getItem("income");
                const savedWater = localStorage.getItem("water");
                const savedFood = localStorage.getItem("food");
                const savedElectricity = localStorage.getItem("electricity");
                const savedMortgage = localStorage.getItem("mortgage");
                const savedParking = localStorage.getItem("parking");
                const savedCar = localStorage.getItem("car");
                const savedGarbage = localStorage.getItem("garbage");

                if (savedIncome || savedWater || savedFood || savedElectricity || savedMortgage || savedParking || savedCar || savedGarbage) {
                    const income = savedIncome ? parseFloat(savedIncome) : 0;
                    const water = savedWater ? parseFloat(savedWater) : 0;
                    const food = savedFood ? parseFloat(savedFood) : 0;
                    const electricity = savedElectricity ? parseFloat(savedElectricity) : 0;
                    const mortgage = savedMortgage ? parseFloat(savedMortgage) : 0;
                    const parking = savedParking ? parseFloat(savedParking) : 0;
                    const car = savedCar ? parseFloat(savedCar) : 0;
                    const garbage = savedGarbage ? parseFloat(savedGarbage) : 0;

                    const data = {
                        labels: ["Ingresos", "Agua", "Comida", "Electricidad", "Hipoteca", "Parking", "Coche", "Basura", "Ahorros"],
                        datasets: [{
                                data: [income, water, food, electricity, mortgage, parking, car, garbage, income - water - food - electricity - mortgage - parking - car - garbage],
                                backgroundColor: ["rgba(35, 255, 0)", "rgba(0, 255, 212)", "rgba(255, 176, 0)", "rgba(0, 36, 255)", "rgba(255, 243, 0)", "rgba(163, 163, 163)", "rgba(255, 0, 165)", "rgba(0, 183, 91)", "rgba(255, 0, 0)"]
                            }]
                    };

                    const options = {
                        legend: {
                            labels: {
                                fontColor: 'white'
                            }
                        },
                        tooltips: {
                            callbacks: {
                                label: function (tooltipItem, data) {
                                    let label = data.labels[tooltipItem.index] || '';
                                    if (label) {
                                        label += ': ';
                                    }
                                    label += data.datasets[0].data[tooltipItem.index].toFixed(2) + '€';
                                    return label;
                                }
                            },
                            titleFontColor: 'white',
                            bodyFontColor: 'white'
                        }
                    };

                    myChart = new Chart(chartCtx, {
                        type: "doughnut",
                        data: data,
                        options: options
                    });

                    // Ciclo for para mostrar valores en el gráfico
                    for (let i = 0; i < data.datasets[0].data.length; i++) {
                        if (data.datasets[0].data[i] > 0) {
                            let legendItem = myChart.legend.legendItems[i];
                            //legendItem.text += " (" + data.datasets[0].data[i].toFixed(2) + "€)";
                        }
                    }
                }
            };



        </script>


    </body>
</html>