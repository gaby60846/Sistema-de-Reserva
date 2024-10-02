<?php
    ob_start();

    $fecha_ini = $_GET['fecha_ini'];
    $fecha_final = $_GET['fecha_final'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/pdf.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <title>Reporte General - Paquetes</title>
    </head>
    <body>
        <div class="page" id="pagePDF">
            
            <h1>Marketing y Ventas</h1>
            <div class="barra-superior">
            </div>
            <br>
            <div class="titulo">
                <h3>Informe general sobre los paquetes en el periodo <?php echo $fecha_ini; ?> a <?php echo $fecha_final; ?></h3>
            </div>
            <div class="overview">
                <h5>Descripción General</h5>
                <ul>
                    <li>Total generado: 708,30$</li>
                    <li>Cantidad de Reservaciones: 7459</li>
                    <li>Hotel más popular: Hotel Isla Caribe</li>
                    <li>Hotel menos popular: Ara Merú Lodge</li>
                </ul>
            </div> 
            <div class="row info-general">
                <div class="col-9">
                    <div class="services">
                        <h5>Servicios</h5>
                        <div class="row">
                            <p class="col text-primary"><i class="bi bi-wifi"></i> WiFi gratis</p>
                            <p class="col text-primary"><i class="bi bi-p-circle"></i> Estacionamiento gratis</p>
                        </div>
                        <div class="row">
                            <p class="col text-primary"><i class="bi bi-cup-hot"></i> Desayuno incluido</p>
                            <p class="col text-primary"><i class="bi bi-basket"></i> Servicio a la habitación</p>
                        </div>
                        <div class="row">
                            <p class="col text-primary"><i class="bi bi-person-add"></i> Habitaciones familiares</p>
                            <p class="col text-primary"><i class="bi bi-cup-straw"></i> Bar</p>
                        </div>
                        <div class="row">
                            <p class="col text-primary"><i class="bi bi-person-wheelchair"></i> Adaptado personas de movilidad reducida</p>
                        </div>
                    </div> 
                    <div class="traffic">
                        <h5>Tráfico de Servicios</h5>
                        <div class="row">
                            <div class="col-4 traffic-graphic">
                                <canvas id="myChart1" class="pastel"></canvas>
                            </div>
                            <div class="col-5">
                                <div class="row">
                                    <p class="col"><i class="bi bi-wifi"></i> 24% de uso en Wifi</p>
                                    <p class="col"><i class="bi bi-p-circle"></i> 12% de uso del estacionamiento</p>
                                </div>
                                <div class="row">
                                    <p class="col"><i class="bi bi-cup-hot"></i> 18% de visitantes que consumen el servicio</p>
                                    <p class="col"><i class="bi bi-basket"></i> 21% de uso del servicio</p>
                                </div>
                                <div class="row">
                                    <p class="col"><i class="bi bi-person-add"></i> 17% de visitantes familiares</p>
                                    <p class="col"><i class="bi bi-cup-straw"></i> 7% de consumo de bar</p>
                                </div>
                                <div class="row">
                                    <p class="col"><i class="bi bi-person-wheelchair"></i> 1% de visitantes discapacitados</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="estadisticas">
                        <h5>Estadísticas</h5>
                        <div class="row">
                            <div class="col">
                                <h6>Reservaciones</h6>
                                <canvas id="myChart2" class="line1"></canvas>
                            </div>
                            <div class="col">
                            <h6>Consumo</h6>
                                <canvas id="myChart3" class="line2"></canvas>
                            </div>
                            <div class="col">
                            <h6>Rentabilidad</h6>
                                <canvas id="myChart4" class="line3"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col valores">
                    <h4>Promedio de visitas</h4>
                    <br>
                    <div class="row valores-info">
                        <div class="col valores-icono">
                            <i class="bi bi-eye-fill"></i> 
                        </div>
                        <div class="col-7 valores-text">
                            <div><b>18745</b></div>
                            <div>Visitas</div>
                        </div>
                    </div>
                    <br>
                    <div class="row valores-info">
                        <div class="col">
                            <i class="bi bi-clock-fill"></i> 
                        </div>
                        <div class="col-7 valores-text">
                            <div><b>94 s</b></div>
                            <div>Duración de visita</div>
                        </div>
                    </div>
                    <br>
                    <div class="row valores-info">
                        <div class="col">
                            <i class="bi bi-exclamation-triangle-fill"></i> 
                        </div>
                        <div class="col-7 valores-text">
                            <div><b>58%</b></div>
                            <div>Taza de rebote</div>
                        </div>
                    </div>
                    <br>
                    <div class="row valores-info">
                        <div class="col">
                            <i class="bi bi-file-text"></i>
                        </div>
                        <div class="col-7 valores-text">
                            <div><b>20478</b></div>
                            <div>Páginas vistas</div>
                        </div>
                    </div>
                    <br>

                </div>
            </div>
            <div class="barra-inferior">

            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            //Mostrar
            let ctx1 = document.getElementById('myChart1');
            let ctx2 = document.getElementById('myChart2');
            let ctx3 = document.getElementById('myChart3');
            let ctx4 = document.getElementById('myChart4');

            //Ejecutar
            grafico_pastel();
            graphic_line1();
            graphic_line2();
            graphic_line3();

            //Gráfico 1
            function grafico_pastel(){
                var xValues = ["Wifi", "Estacionamiento", "Desayuno", "Servicio a la habitación", "Bar", "Discapacitados"];
                var yValues = [24, 12, 18, 21, 17, 7, 1];
                var barColors = [
                    "#b91d47",
                    "#00aba9",
                    "#2b5797",
                    "#e8c3b9",
                    "#1e7145",
                    "#FCC742",
                    "#6B2BEC"
                ];
                new Chart(ctx1, {
                    type: 'doughnut',
                    data: {
                        labels: xValues,
                        datasets: [{
                            backgroundColor: barColors,
                            data: yValues
                        }]
                    },
                    options: {
                        responsive: true,
                        plugins: {
                            legend: {
                                position: 'buttom',
                            },
                        }
                    },
                });
            }

            function graphic_line1() {
                var xValues = ["Pagados", "Reservados", "Cancelados"];
                var yValues = [78, 48, 21];
                var barColors = ["#002060", "#FCC742","white"];

                new Chart(ctx2, {
                type: "bar",
                data: {
                    labels: xValues,
                    datasets: [{
                    backgroundColor: barColors,
                    data: yValues
                    }]
                },
                options: {
                    legend: {display: true},
                    title: {
                    display: true,
                    text: "Reservaciones"
                    }
                }
                });
            }

            function graphic_line2() {
                var xValues = ["Consumo", "Uso de instalaciones", "Eficiencias"];
                var yValues = [78, 82, 44];
                var barColors = ["#002060", "#FCC742","white"];

                new Chart(ctx3, {
                type: "bar",
                data: {
                    labels: xValues,
                    datasets: [{
                    backgroundColor: barColors,
                    data: yValues
                    }]
                },
                options: {
                    legend: {display: false},
                    title: {
                    display: true,
                    text: "Instalaciones"
                    }
                }
                });
            }

            function graphic_line3() {
                var xValues = ["Ganancia", "Pérdida", "Rentabilidad"];
                var yValues = [85, 12, 78];
                var barColors = ["#002060", "#FCC742","white"];

                new Chart(ctx4, {
                type: "bar",
                data: {
                    labels: xValues,
                    datasets: [{
                    backgroundColor: barColors,
                    data: yValues
                    }]
                },
                options: {
                    legend: {display: false},
                    title: {
                    display: true,
                    text: "World Wine Production 2018"
                    }
                }
                });
            }
        </script>
    </body>
</html>
<?php
    $html = ob_get_clean();
    echo $html;

    /*
    require_once '../dompdf/autoload.inc.php';
    use Dompdf\Dompdf;
    $dompdf = new Dompdf();
    
    $options = $dompdf->getOptions();
    $options->set(array('isRemoteEnabled' => true));
    $dompdf->getOptions($options);
    
    $dompdf->loadHtml($html);
    $dompdf->setPaper('letter');
    
    $dompdf->render();
    $dompdf->stream("reporte_hoteles.pdf", array("Attachment" => false));*/
?>