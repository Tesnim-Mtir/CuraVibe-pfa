<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Charts Graphique</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.19.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link href="assets/1/css/charts.css" rel="stylesheet">
  <link href="assets/1/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
    <div class="sidebar">
        <img src="assets\1\img\logo.png" alt="CuraVibe">
       
        <ul>
            <li><a href="#"><i class="bi bi-journal-text"></i> Forms</a></li>
            <li><a href="#"><i class="bi bi-layout-text-window-reverse"></i> Tables</a></li>
            <li><a href="route('Graphique', now()->year)" icon="chart-bar":active="currentRouteActive('statistics')"> <i class="bi bi-bar-chart"></i> Charts</a></li>
            <li><a href="#"><i class="bi bi-gem"></i> Icons</a></li>
            <li><a href="#"><i class="bi bi-person"></i> Profile</a></li>
            <li><a href="#"><i class="bi bi-question-circle"></i> F.A.Q</a></li>
            <li><a href="#"><i class="bi bi-envelope"></i> Contact</a></li>
            <li><a href="#"><i class="bi bi-card-list"></i> Register</a></li>
            <li><a href="#"><i class="bi bi-box-arrow-in-right"></i> Login</a></li>
            <li><a href="#"><i class="bi bi-dash-circle"></i> Error 404</a></li>
            <li><a href="#"><i class="bi bi-file-earmark"></i> Blank</a></li>
        </ul>
    </div>

    <div class="content">
        <div class="navbar">
            <form action="#" method="get">
                <input type="text" placeholder="Rechercher..." name="search">
                <button type="submit"><i class="bi bi-search"></i></button>
                
            </form>
            
        </div>

    
    <main id="main" class="main">
        <div class="pagetitle">
            <h1></h1>
            
        </div>
        <div class="row">
                
                
            <div class="col-md-6">
                <div class="card">
                   
                  <div class="card card-blue">
                      <div class="card-body">
                        <h4>Tendance des Contributions Utilisateurs</h4>
                        <p>Observez la tendance des produits  dones par chaque utilisateur selon la période </p>
                       
                        <canvas id="orderChart" width="900px" height="180px"></canvas>
                        <script src = "https://cdn.jsdelivr.net/npm/chart.js" ></script> 
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
                        <script>
                            // Fonction pour mettre à jour le graphique lorsque l'année est modifiée
                            function updateChart(year) {
                                $.ajax({
                                    url: "{{ route('graphique') }}",
                                    method: "GET",
                                    data: { year: year },
                                    success: function(data) {
                                        // Mettre à jour les données du graphique
                                        myChart.data.labels = data.labels;
                                        myChart.data.datasets[0].data = data.data;
                                        myChart.update();
                                    }
                                });
                            }
                        
                            $(function() {
                                // Créer le graphique initial lors du chargement de la page
                                $.ajax({
                                    url: "{{ route('graphique') }}",
                                    method: "GET",
                                    data: { year: "{{ date('Y') }}" },
                                    success: function(data) {
                                        var ctx = document.getElementById('orderChart').getContext('2d');
                                        var myChart = new Chart(ctx, {
                                            type: 'bar',
                                            data: {
                                                labels: data.labels,
                                                datasets: [{
                                                    label: 'Nombre de Dones par mois',
                                                    data: data.data,
                                                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                                                    borderColor: 'rgba(255, 99, 132, 1)',
                                                    borderWidth: 1
                                                }]
                                            },
                                            
                                        });
                                    }
                                });
                        
                                // Mettre à jour le graphique lorsqu'une nouvelle année est sélectionnée
                                $('input[name="year"]').change(function() {
                                    var year = $(this).val();
                                    updateChart(year);
                                });
                        
                                // Fonction pour mettre à jour le graphique lorsque le bouton de mise à jour est cliqué
                                function updateOnClick() {
                                    var year = $('input[name="year"]:checked').val();
                                    updateChart(year);
                                }
                            });
                        </script>
                        
                                    <p><i class="bi bi-arrow-repeat" style="cursor: pointer;" onclick="updateOnClick()"></i> Mise à jour</p> </div>
                </div>
            </div>
            </div>

            <div class="row">          
                <div class="col-md-4">
                    <div class="card min-card"> 
                      <div class="card-body">    
                        <h4>Analyse des Contributions Utilisateurs</h4>
                        <p>Explorez l'analyse comparative des produits recyclés et dones</p>
                        <canvas id="donutChart" style="max-height: 130px;"></canvas>
                         
    <script>
        // Récupérer les pourcentages depuis le contrôleur
        function fetchDataDount() {
            fetch("{{ route('graphique') }}")
                .then(response => response.json())
                .then(data => {
                    // Extract recyclePercentage and donePercentage from the received data
                    var recyclePercentage = data.recyclePercentage;
                    var donePercentage = data.donePercentage;

                    // Draw the donut chart
                    var ctx = document.getElementById('donutChart').getContext('2d');
                    var donutChart = new Chart(ctx, {
                        type: 'doughnut',
                        data: {
                            labels: ['Recyclage', 'Dones'],
                            datasets: [{
                                label: 'Pourcentage',
                                data: [recyclePercentage, donePercentage],
                                backgroundColor: [
                                    'rgba(255, 99, 132, 0.5)',
                                    'rgba(54, 162, 235, 0.5)'
                                ]
                            }]
                        }
                       
                    });
                });
        }
        function updateChartData() {
        fetch("{{ route('graphique') }}")
            .then(response => response.json())
            .then(data => {
                var recyclePercentage = data.recyclePercentage;
                var donePercentage = data.donePercentage;

                // Mise à jour des données du graphique existant
                donutChart.data.datasets[0].data = [recyclePercentage, donePercentage];
                donutChart.update(); // Mettre à jour le graphique
            });
    }

    // Appeler la fonction pour récupérer les données initiales et dessiner le graphique
    fetchDataDount();

    // Fonction pour mettre à jour les données du graphique lorsqu'on clique sur le bouton
    function updateChartOnClick() {
        updateChartData();
    }
    </script> 
    <p>
        <i class="bi bi-arrow-repeat" style="cursor: pointer;" onclick="updateChartOnClick()"></i> Mise à jour
    </p>
                   
    </div>
  
                    </div>
                </div>
                


                    <div class="col-md-8">
                        <div class="card big-card" id="statisticsCard">
                            <div class="container mt-5">
                                <h4>Tableau de suivi des contributions des utilisateurs</h4>
                                <p>Découvrez les statistiques détaillées sur les produits recyclés et dones par chaque utilisateur </p>
                                
                                <!-- Buttons for classifying data -->
                                <div class="mb-3">
                                    <button type="button" class="btn btn-primary mr-2" id="Semain">Semain</button>
                                    <button type="button" class="btn btn-primary mr-2" id="Mois">Mois</button>
                                    <button type="button" class="btn btn-primary" id="Annees">Annees</button>
                                </div>
                                <!-- Table to display statistics -->
                                <div>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Utilisateur</th>
                                                <th>Action</th>
                                                <th>Produits</th>
                                                <th>Date</th>
                                            </tr>
                                        </thead>
                                        <tbody id="statisticsBody">
                                            <!-- Data will be dynamically added here -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
                    
                    <script>
                        $(document).ready(function() {
                            // Function to fetch statistics based on classification
                            function fetchStatistics(classification) {
                                $.ajax({
                                    url: "{{ route('graphique') }}",
                                    method: "GET",
                                    data: { classification: classification },
                                    dataType: "json",
                                    success: function(response) {
                                        if (response && response.statistics) {
                                            updateStatisticsTable(response.statistics);
                                            adjustCardHeight();
                                        }
                                    },
                                    error: function(xhr, status, error) {
                                        console.error(xhr.responseText);
                                    }
                                });
                            }
                    
                            // Function to update the statistics table
                            function updateStatisticsTable(statistics) {
                                // Clear the existing table data
                                $("#statisticsBody").empty();
                    
                                // Iterate through the statistics data and append rows to the table
                                $.each(statistics, function(index, stat) {
                                    var row = "<tr>" +
                                                "<td>" + stat.user.name + "</td>" +
                                                "<td>" + stat.action + "</td>" +
                                                "<td>" + stat.description.name + "</td>" +
                                                "<td>" + stat.date + "</td>" +
                                              "</tr>";
                                    $("#statisticsBody").append(row);
                                });
                            }
                    
                            // Function to adjust card height based on table content
                            function adjustCardHeight() {
                                var tableHeight = $("#statisticsBody").height();
                                $("#statisticsCard").css("height", "auto"); // Reset height to auto
                                $("#statisticsCard").height($("#statisticsCard").height() + tableHeight); // Add table height to card height
                            }
                    
                            // Event listener for the classification buttons
                            $("#Semain, #Mois, #Annees").click(function() {
                                var classification = $(this).attr("id").substr(2).toLowerCase();
                                fetchStatistics(classification);
                            });
                    
                            // Fetch initial statistics (by week)
                            fetchStatistics("Semain");
                        });
                    </script>
                    
                </div>
            </div>
        </div>
    </main>
</div>
</body>
</html>                    