<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Charts Graphique</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.19.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    
</head>
   
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .sidebar {
            width: 250px;
            height: 100%;
            background-color:#9ec8db;
            position: fixed;
            padding-top: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .navbar {
            background-color: #9ec8db;
            padding: 15px;
            color: #fff;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .navbar form {
            display: flex;
            align-items: center;
        }

        .navbar input {
            padding: 8px;
            margin: 0 10px;
            border: none;
            border-radius: 5px;
        }

        .content {
            margin-left: 260px;
            padding: 20px;
        }
        .sidebar img {
            max-width: 40%; /* Ajustez la largeur maximale du logo selon vos besoins */
            margin-bottom: 10px; /* Ajoute un espacement en bas du logo */
        }
        .sidebar span {
            color: #fff;
            font-weight: bold;
            margin-bottom: 20px;/* Ajoute un espacement en bas du nom de l'entreprise */
          
        }
        .sidebar ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sidebar a {
            text-decoration: none;
            color: white;
            display: flex;
            align-items: center;
            padding: 15px;
            transition: 0.3s;
        }

        .sidebar a:hover {
            color: white;
        }

        .sidebar i {
            margin-right: 10px;
            font-size: 24px;
        }
 
        .main {
            padding: 20px;
        }

        .pagetitle {
            margin-bottom: 20px;
        }

        .breadcrumb {
            background-color: #fff;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .breadcrumb-item {
            display: inline;
            margin-right: 5px;
        }

        .breadcrumb-item::after {
            content: '>';
            margin-left: 5px;
            color: #999;
        }

        .breadcrumb-item:last-child::after {
            content: '';
            margin-left: 0;
        }

        .section {
            margin-top: 20px;
        }

        .card {
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .card-body {
            padding: 20px;
        }

        .card-title {
            font-size: 18px;
            margin-bottom: 15px;
        }

        canvas {
            width: 100%;
            height: auto;
            max-height: 400px;
        }
    </style>
</head>
<body>

    <div class="sidebar">
    <img src="assets\1\img\logo.png" alt="CuraVibe">
   
        <ul>
            <li><a href="#"><i class="bi bi-journal-text"></i> Forms</a></li>
            <li><a href="#"><i class="bi bi-layout-text-window-reverse"></i> Tables</a></li>
            <li><a href="route('statistics', now()->mois)" icon="chart-bar":active="currentRouteActive('statistics')"> Statistiques><i class="bi bi-bar-chart"></i> Charts</a></li>
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
      <h1>Chart.js</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Charts</li>
          <li class="breadcrumb-item active">Chart.js</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

   
    <section class="section">
      <div class="row">

        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Line Chart</h5>
              <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
              <!-- Line Chart -->
              <canvas id="lineChart" style="max-height: 400px;"></canvas>
              <script>
        var ctx = document.getElementById('lineChart').getContext('2d');
        var chartData = @json($chartData) ;
        console.log(chartData);

        var labels = chartData.map(function(item) {
            return item.id;
        });

        var values = chartData.map(function(item) {
            return item.quantite;
        });

        var lineChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Chart Data',
                    data: values,
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1,
                    fill: false
                }]
            },
            options: {
                scales: {
                    x: {
                        type: 'linear',
                        position: 'bottom'
                    }
                    
                }
            }
        });
    </script>
              <!-- End Bar CHart -->

            </div>
          </div>
        </div>
            </section>
            </main>
    </div>

</body>
</html>
