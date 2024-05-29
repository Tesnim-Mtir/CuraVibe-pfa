<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="index.css"> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <title>recycle formulaire</title>
   <meta content="" name="description">
    <meta content="" name="keywords">

<!-- Favicons -->
    <link href="assets/1/img/icon.png" rel="icon">
    <link href="assets/1/img/icon.png" rel="apple-touch-icon">
  
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  
  <link href="assets/1/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/1/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/1/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/1/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/1/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/1/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/1/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="crossorigin=""/>
  
  <link href="assets/1/css/style.css" rel="stylesheet">
</head>
<body>


  <aside class="sidebar">
    <a href="/admin/recyclemedicament" class="sidebar-link recycle-link">
        <div class="sidebar-header"> 
            <i class="fas fa-recycle"></i> Recycle Medicament recycle 
        </div>
            </a>

        <ul class="sidebar-list">
          <li class="sidebar-item"><a href="/admin/users" class="sidebar-link">gestion
            utilisateurs</a></li>
            <li class="sidebar-item"><a href="/admin/medicament" class="sidebar-link">gestion
              medicaments</a></li>
            <li class="sidebar-item"><a href="/Graphique" class="sidebar-link">Statistiques</a></li>
            <li class="sidebar-item"><a href="/admin/recyclemedicament" class="sidebar-link">Medicament recycle</a></li>
    
           <!--  <li class="sidebar-item"><a href="/admin/recyclemetal" class="sidebar-link">Metal recycle</a></li>
            <li class="sidebar-item"><a href="/admin/recycleglass" class="sidebar-link">Glass recycle</a></li>
                           Ajoutez d'autres éléments de recycle ici -->
        </ul>
</aside>





  
  <div class="formbold-main-wrapper">
  <!-- Author: FormBold Team -->
  <!-- Learn More: https://formbold.com -->
  <div class="formbold-form-wrapper">
  <div class="content">
    
</div>


    <form action="{{ route('Add-medicament') }}" method="POST" class="form-animation">
      @csrf
      <div class="formbold-form-title">
        <h2 class="">Section Recyclage de Médicaments</h2>
        
      

      <div class="formbold-mb-3">
        <label for="address" class="formbold-form-label">Nom de medicament</label>
        <input type="text" name="name"id="address"class="formbold-form-input"/>
        @error('name')
    <div class="alert alert-danger">
        {{ $message }}
    </div>
       @enderror
      </div>

      <div class="formbold-mb-3">
        <label for="address2" class="formbold-form-label">Etat de medicament</label>
        <input type="text" name="etat" id="address2" class="formbold-form-input"/>
        @error('etat')
    <div class="alert alert-danger">
        {{ $message }}
    </div>
       @enderror
      </div>
      <div class="formbold-mb-3">
        <label for="address2" class="formbold-form-label"> Quantite de medicament</label>
        <input type="text" name="quantite" id="address2"  class="formbold-form-input"/>
        @error('quantite')
    <div class="alert alert-danger">
        {{ $message }}
    </div>
       @enderror
      </div>

      
      <div class="formbold-checkbox-wrapper">
        <label for="supportCheckbox" class="formbold-checkbox-label">
          <div class="formbold-relative">
            <input
              type="checkbox"
              id="supportCheckbox"
              class="formbold-input-checkbox"
            />
            <div class="formbold-checkbox-inner">
              <span class="formbold-opacity-0">
                <svg
                  width="11"
                  height="8"
                  viewBox="0 0 11 8"
                  fill="none"
                  class="formbold-stroke-current"
                >
                  <path
                    d="M10.0915 0.951972L10.0867 0.946075L10.0813 0.940568C9.90076 0.753564 9.61034 0.753146 9.42927 0.939309L4.16201 6.22962L1.58507 3.63469C1.40401 3.44841 1.11351 3.44879 0.932892 3.63584C0.755703 3.81933 0.755703 4.10875 0.932892 4.29224L0.932878 4.29225L0.934851 4.29424L3.58046 6.95832C3.73676 7.11955 3.94983 7.2 4.1473 7.2C4.36196 7.2 4.55963 7.11773 4.71406 6.9584L10.0468 1.60234C10.2436 1.4199 10.2421 1.1339 10.0915 0.951972ZM4.2327 6.30081L4.2317 6.2998C4.23206 6.30015 4.23237 6.30049 4.23269 6.30082L4.2327 6.30081Z"
                    stroke-width="0.4"
                  ></path>
                </svg>
              </span>
            </div>
          </div>
          Je suis d'accord avec ce qui est défini
          <a href="#"> Termes, conditions et politiques</a>
        </label>
      </div>

      <button class="formbold-btn" type="submit" >Envoyer</button>
      
    </form>
  </div>
</div>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  body {
    font-family: 'Inter', sans-serif;
  }
  .formbold-mb-3 {
    margin-bottom: 15px;
  }
  .formbold-relative {
    position: relative;
  }
  .formbold-opacity-0 {
    opacity: 0;
  }
  .formbold-stroke-current {
    stroke: currentColor;
  }
  #supportCheckbox:checked ~ div span {
    opacity: 1;
  }

  .formbold-main-wrapper {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 48px;
  }

  .formbold-form-wrapper {
    margin: 0 auto;
    max-width: 570px;
    width: 100%;
    background: white;
    padding: 40px;
  }

  .formbold-img {
    margin-bottom: 45px;
  }

  .formbold-form-title {
    margin-bottom: 30px;
  }
  .formbold-form-title h2 {
    font-weight: 600;
    font-size: 28px;
    line-height: 34px;
    color: #07074d;
  }
  .formbold-form-title p {
    font-size: 16px;
    line-height: 24px;
    color: #536387;
    margin-top: 12px;
  }

  .formbold-input-flex {
    display: flex;
    gap: 20px;
    margin-bottom: 15px;
  }
  .formbold-input-flex > div {
    width: 50%;
  }
  .formbold-form-input {
    text-align: center;
    width: 100%;
    padding: 13px 22px;
    border-radius: 5px;
    border: 1px solid #dde3ec;
    background: #ffffff;
    font-weight: 500;
    font-size: 16px;
    color: #536387;
    outline: none;
    resize: none;
  }
  .formbold-form-input:focus {
    border-color: #222834;
    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
  }
  .formbold-form-label {
    color: #536387;
    font-size: 14px;
    line-height: 24px;
    display: block;
    margin-bottom: 10px;
  }

  .formbold-checkbox-label {
    display: flex;
    cursor: pointer;
    user-select: none;
    font-size: 16px;
    line-height: 24px;
    color: #536387;
  }
  .formbold-checkbox-label a {
    margin-left: 5px;
    color: #222834;
  }
  .formbold-input-checkbox {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    white-space: nowrap;
    border-width: 0;
  }
  .formbold-checkbox-inner {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 20px;
    height: 20px;
    margin-right: 16px;
    margin-top: 2px;
    border: 0.7px solid #dde3ec;
    border-radius: 3px;
  }

  .formbold-btn {
    font-size: 16px;
    border-radius: 5px;
    padding: 14px 25px;
    border: none;
    font-weight: 500;
    background-color: #222834;
    color: white;
    cursor: pointer;
    margin-top: 25px;
  }
  .formbold-btn:hover {
    box-shadow: 0px 3px 8px rgba(0, 0, 0, 0.05);
  }
  .sidebar {
    width: 250px;
    background-color: #222834;
    color: #fff;
    position: fixed;
    height: 100%;
    overflow-y: auto;
}

.sidebar-header {
    padding: 20px;
    text-align: center;
    font-weight: bold;
    font-size: 20px;
}

.formbold-main-wrapper {
    /* Ajoutez vos styles pour le contenu principal ici */
}
.sidebar {
    width: 250px;
    background-color: #222834;
    color: #fff;
    position: fixed;
    height: 100%;
    overflow-y: auto;
    transition: width 0.3s ease; /* Ajout de la transition */
}

.sidebar:hover {
    width: 280px; /* Nouvelle largeur au survol */
}
.form-animation {
    transition: all 0.3s ease; /* Ajoute une transition de 0.3s à tous les changements de propriétés */
}

.formbold-form-title {
    transition: transform 0.3s ease; /* Ajoute une transition de 0.3s à la transformation */
}

.formbold-form-input {
    transition: border-color 0.3s ease; /* Ajoute une transition de 0.3s à la couleur de la bordure */
}

.formbold-btn {
    transition: background-color 0.3s ease, color 0.3s ease; /* Ajoute une transition de 0.3s à la couleur de fond et de texte du bouton */
}


</style>

<!---Modal ajout---->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Medicament recycle</h5>
                <button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close">
                    <span class="fas fa-times fs"></span>
                </button>
            </div>
            <div class="modal-body">
                <p class="text-700 lh-1g mb-0">This is a static modal example (meaning its position and display have been overridden). Included are the modal header,
                    modal body
                </p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" type="button">Okay</button>
                <button class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

<<!-- Bootstrap Bundle with Popper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</html>