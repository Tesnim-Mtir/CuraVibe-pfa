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

    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('dashassets/img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('dashassets/img/favicons/favicon-16x16.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('dashassets/img/favicons/favicon.ico') }}">
    <link rel="manifest" href="{{ asset('dashassets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileImage" content="{{ asset('dashassets/img/favicons/mstile-150x150.png') }}">
    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="{{ asset('dashassets/css/phoenix.min.css') }} " rel="stylesheet" id="style-default">
   <link href="{{ asset('assets/1/css/charts.css') }} " rel="stylesheet" id="style-default">
   <style>  
   body {
        opacity: 0;
      }
    </style>
  </head>

  <body>
    <main class="main" id="top">
      <div class="container-fluid px-0">
        <nav class="navbar navbar-light navbar-vertical navbar-vibrant navbar-expand-lg">
          <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
            <div class="navbar-vertical-content scrollbar">
              <ul class="navbar-nav flex-column" id="navbarVerticalNav">
                <li class="nav-item"><a class="nav-link active" href="/admin/users">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="cast"></span></span><span class="nav-link-text">gestion utilisateurs</span></div>
                  </a></li>

                  <li class="nav-item"><a class="nav-link active" href="/admin/medicament">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="cast"></span></span><span class="nav-link-text">gestion medicaments</span></div>
                  </a></li>
                  <li class="nav-item"><a class="nav-link active" href="/Graphique">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span data-feather="cast"></span></span><span class="nav-link-text">Statistiques</span></div>
                  </a></li>

              </ul>
          
        </nav>
        <nav class="navbar navbar-light navbar-top navbar-expand">
          <div class="navbar-logo"><button class="btn navbar-toggler navbar-toggler-humburger-icon" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button> <a class="navbar-brand me-1 me-sm-3" href="index.html">
              <div class="d-flex align-items-center">
                <div class="d-flex align-items-center">  
                    <a href="/admin/dashboard">
                        <p class="logo-text ms-2 d-none d-sm-block">Curavibe</p>
                    </a>
                  
                </div>
              </div>
            </a></div>
          <div class="collapse navbar-collapse">
            <div class="search-box d-none d-lg-block" style="width:25rem;">
              <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control form-control-sm search-input search min-h-auto" type="search" placeholder="Search..." aria-label="Search"> <span class="fas fa-search search-box-icon"></span></form>
            </div>
            <ul class="navbar-nav navbar-nav-icons ms-auto flex-row">
              <li class="nav-item dropdown"><a class="nav-link" id="navbarDropdownNotification" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="text-700" data-feather="bell" style="height:20px;width:20px;"></span></a></li>
              <li class="nav-item dropdown"><a class="nav-link notification-indicator notification-indicator-primary" id="navbarDropdownSettings" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="text-700" data-feather="settings" style="height:20px;width:20px;"></span></a></li>
              <li class="nav-item dropdown"><a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="2" cy="2" r="2" fill="#6C6E71"></circle>
                    <circle cx="2" cy="8" r="2" fill="#6C6E71"></circle>
                    <circle cx="2" cy="14" r="2" fill="#6C6E71"></circle>
                    <circle cx="8" cy="8" r="2" fill="#6C6E71"></circle>
                    <circle cx="8" cy="14" r="2" fill="#6C6E71"></circle>
                    <circle cx="14" cy="8" r="2" fill="#6C6E71"></circle>
                    <circle cx="14" cy="14" r="2" fill="#6C6E71"></circle>
                    <circle cx="8" cy="2" r="2" fill="#6C6E71"></circle>
                    <circle cx="14" cy="2" r="2" fill="#6C6E71"></circle>
                  </svg></a>
                <div class="dropdown-menu dropdown-menu-end py-0 dropdown-nide-dots shadow border border-300" aria-labelledby="navbarDropdownNindeDots">
                  <div class="card bg-white position-relative border-0">
                    <div class="card-body pt-3 px-3 pb-0 overflow-auto scrollbar" style="height: 20rem;">
                      <div class="row text-center align-items-center gx-0 gy-0">
                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!" target="_blank"><img src="assets/img/nav-icons/behance.png" alt="" width="30">
                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Behance</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!" target="_blank"><img src="assets/img/nav-icons/google-cloud.png" alt="" width="30">
                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Cloud</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!" target="_blank"><img src="assets/img/nav-icons/slack.png" alt="" width="30">
                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Slack</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!" target="_blank"><img src="assets/img/nav-icons/github.png" alt="" width="30">
                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Github</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!" target="_blank"><img src="assets/img/nav-icons/bitbucket.png" alt="" width="30">
                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">BitBucket</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!" target="_blank"><img src="assets/img/nav-icons/google-drive.png" alt="" width="30">
                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Drive</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!" target="_blank"><img src="assets/img/nav-icons/trello.png" alt="" width="30">
                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Trello</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!" target="_blank"><img src="assets/img/nav-icons/figma.png" alt="" width="20">
                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Figma</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!" target="_blank"><img src="assets/img/nav-icons/twitter.png" alt="" width="30">
                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Twitter</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!" target="_blank"><img src="assets/img/nav-icons/pinterest.png" alt="" width="30">
                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Pinterest</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!" target="_blank"><img src="assets/img/nav-icons/linkedin.png" alt="" width="30">
                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Linkedin</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!" target="_blank"><img src="assets/img/nav-icons/google-maps.png" alt="" width="30">
                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Maps</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!" target="_blank"><img src="assets/img/nav-icons/google-photos.png" alt="" width="30">
                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Photos</p>
                          </a></div>
                        <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!" target="_blank"><img src="assets/img/nav-icons/spotify.png" alt="" width="30">
                            <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Spotify</p>
                          </a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown"><a class="nav-link lh-1 px-0 ms-5" id="navbarDropdownUser" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="avatar avatar-l"><img class="rounded-circle" src="assets/img/team/57.png" alt=""></div>
                </a>
                <div class="dropdown-menu dropdown-menu-end py-0 dropdown-profile shadow border border-300" aria-labelledby="navbarDropdownUser">
                  <div class="card bg-white position-relative border-0">
                    <div class="card-body p-0 overflow-auto scrollbar" style="height: 18rem;">
                      <div class="text-center pt-4 pb-3">
                        <div class="avatar avatar-xl"><img class="rounded-circle" src="assets/img/team/57.png" alt=""></div>
                        <h6 class="mt-2">Jerry Seinfield</h6>
                      </div>
                      <div class="mb-3 mx-3"><input class="form-control form-control-sm" id="statusUpdateInput" placeholder="Update your status"></div>
                      <ul class="nav d-flex flex-column mb-2 pb-1">
                        <li class="nav-item"><a class="nav-link px-3" href="#!"><span class="me-2 text-900" data-feather="user"></span>Profile</a></li>
                        <li class="nav-item"><a class="nav-link px-3" href="#!"><span class="me-2 text-900" data-feather="pie-chart"></span>Dashboard</a></li>
                        <li class="nav-item"><a class="nav-link px-3" href="#!"><span class="me-2 text-900" data-feather="lock"></span>Posts &amp; Activity</a></li>
                        <li class="nav-item"><a class="nav-link px-3" href="#!"><span class="me-2 text-900" data-feather="settings"></span>Settings &amp; Privacy</a></li>
                        <li class="nav-item"><a class="nav-link px-3" href="#!"><span class="me-2 text-900" data-feather="help-circle"></span>Help Center</a></li>
                        <li class="nav-item"><a class="nav-link px-3" href="#!"><span class="me-2 text-900" data-feather="globe"></span>Language</a></li>
                      </ul>
                    </div>
                    <div class="card-footer p-0 border-top">
                      <ul class="nav d-flex flex-column my-3">
                        <li class="nav-item"><a class="nav-link px-3" href="#!"><span class="me-2 text-900" data-feather="user-plus"></span>Add another account</a></li>
                      </ul>
                      <hr>
                      <div class="px-3"><a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="#!"><span class="me-2" data-feather="log-out"></span>Sign out</a></div>
                      <div class="my-2 text-center fw-bold fs--2 text-600"><a class="text-600 me-1" href="#!">Privacy policy</a>&bull;<a class="text-600 mx-1" href="#!">Terms</a>&bull;<a class="text-600 ms-1" href="#!">Cookies</a></div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
        <div class="content">
          <div class="pb-5">
            <div class="row g-5">
                
            </div>
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
                       
                        <canvas id="orderChart"></canvas>
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
                                                    label: 'Nombre des Dones par mois',
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
            <div class="col-md-6">
              <div class="card">
                 
                <div class="card card-blue">
                    <div class="card-body">
                      <h4>Tendance des Contributions Utilisateurs</h4>
                      <p>À travers le graphique linéaire présenté, on observe l'évolution quantitative du recyclage</p>
                      <canvas id="recycleChart" ></canvas>
                              <script src = "https://cdn.jsdelivr.net/npm/chart.js" ></script> 
                              <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
                             
  
      <script>
          var labels = <?php echo json_encode($labels); ?>;
          var data = <?php echo json_encode($data); ?>;
  
          var ctx = document.getElementById('recycleChart').getContext('2d');
          var myChart = new Chart(ctx, {
              type: 'line',
              data: {
                  labels: labels,
                  datasets: [{
                      label: 'Recycle Quantity',
                      data: data,
                      backgroundColor: 'rgba(255, 99, 132, 0.2)',
                      borderColor: 'rgba(255, 99, 132, 1)',
                      borderWidth: 1
                  }]
              },
              options: {
                  scales: {
                      yAxes: [{
                          ticks: {
                              beginAtZero: true
                          }
                      }]
                  }
              }
          });
      </script>
                     
                    </div></div></div></div></div>
    </main>
    <section>
      <div class="row">          
                <div class="col-md-4">
                    <div class="card min-card"> 
                      <div class="card-body">    
                        <h4>Analyse des Contributions Utilisateurs</h4>
                        <p>Explorez l'analyse comparative des produits recyclés et dones</p>
                        <canvas id="donutChart"></canvas>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
   
    // Fonction pour récupérer les données depuis le serveur et dessiner le graphique
    function fetchDataAndDrawChart() {
        fetch("{{ route('graphique') }}")
            .then(response => response.json())
            .then(data => {
                var recyclePercentage = data.recyclePercentage;
                var donePercentage = data.donePercentage;

                // Dessiner le graphique
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
                    },
                    options: {
                        // Ajoutez ici les options spécifiques au graphique si nécessaire
                    }
                });
            })
            .catch(error => {
                console.error('Une erreur est survenue lors de la récupération des données:', error);
            });
    }

    // Appeler la fonction pour récupérer les données initiales et dessiner le graphique
    fetchDataAndDrawChart();

    // Fonction pour mettre à jour les données du graphique lorsqu'on clique sur le bouton
    function updateChartOnClick() {
        fetchDataAndDrawChart();
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
    </section>
   
 <script src="{{ asset('dashassets/js/phoenix.js') }}"></script>
    <script src="{{ asset('dashassets/js/ecommerce-dashboard.js') }}"></script>
</body>
</html>                    