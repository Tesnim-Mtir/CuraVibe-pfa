<!DOCTYPE html> 
<html lang="en"> 
  
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Feedback Form with map</title> 
    <link rel="stylesheet" href="index.css"> 
    <link rel="stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="crossorigin="anonymous"referrerpolicy="no-referrer" /> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://maps.googleapis.com/maps/api/js?key=VOTRE_CLE_API&callback=initMap" async defer></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    

    <title>mapformulaire</title>
  , <meta content="" name="description">
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
   
   @include('DON.components.header')
   <header id="header" class="fixed-top " style="background-color:#37517e;" >
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto">
        <a href="index.php">
            CuraVibe
        </a>
    </h1>
      <nav id="navbar" class="navbar">
        <ul>
            <ul>
       
            </ul>
          </li>
          <li><a class="nav-link scrollto active" href="#hero">Acceuil</a></li>
          <li><a class="nav-link scrollto" href="#about">A Propos</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Recycle</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="blog.html">Formulaire</a>
								<a class="dropdown-item" href="blog-details.html">Position</a>
							</div>
						</li>
  
         <li><a class="getstarted scrollto" href="inscription">Inscription</a></li>
                  </a></li>
       
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

    </div>
  </header>




  <div class="ffbox">
        <div class="ffbox1">
            <h1 class="gfg">CURAVIBE</h1>
            <h2>Contact Pharmacies</h2>
            <form action="/Country/add" method="POST">
    @csrf
    

    <label for="city">
        <i class="fas fa-city" style="margin: 2px;"></i> Ville
    </label>
    <select name="city" class="form-control">
        <option value="monastir">Monastir</option>
        <option value="mahdia">Mahdia</option>
        <option value="tunis">Tunis</option>
        <option value="sousse">Sousse</option>
        <option value="nabeul">Nabeul</option>
        <option value="bizerte">Bizerte</option>
    </select>
    
    <button type="submit" class="submit-button">Envoyer</button>
</form>

        </div>

    <div id="map" class="map-div"></div>
    <form action="/Pharmacie/add" method="POST">
    @csrf
    <input type="hidden" id="name" name="name">
    <input type="hidden" id="latitude" name="latitude">
    <input type="hidden" id="longitude" name="longitude">
    <button id="saveButton" class="icon-button"type="submit" >
        <i class="fas fa-plus-circle fa-sm"></i>
    </button>
    
</form>

 
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/leaflet/dist/leaflet.js"></script>
</div>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap'); 
  
  body { 
      font-family: 'Poppins', sans-serif; 
      margin: 0; 
      padding: 0; 
      display: flex; 
      align-items: center; 
      justify-content: center; 
      min-height: 100vh; 
      background-image: 
          linear-gradient(120deg, #caeff2 0%, #a2c2ee 100%); 
  } 
    
  .ffbox { 
      display: flex; 
      width: 80%; 
      max-width: 800px; 
      background-color: #fff; 
      border: 3px solid #e4e4e9; 
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
      overflow: hidden; 
      border-radius: 10px; 
      flex-wrap: wrap; 
  } 
    
  .ffbox1 { 
      flex: 1; 
      padding: 20px; 
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
  } 
    
  .ffbox1 label { 
      display: block; 
      margin-bottom: 8px; 
  } 
    
  .ffbox1 input, 
  .ffbox1 textarea { 
      width: 100%; 
      padding: 8px; 
      margin-bottom: 16px; 
      box-sizing: border-box; 
      border-radius: 15px; 
      background-color: #dcdce1; 
      border: none; 
  } 
    
  .ffbox1 textarea { 
      resize: vertical; 
  } 
    
  .ffbox1 { 
      margin-bottom: 16px; 
  } 
    
  .ffbox1 label { 
      margin-right: 16px; 
  } 
    
  .map-div { 
      flex: 1; 
      background-color: #eee; 
  } 
    
  button { 
      width: 100%; 
      padding: 8px; 
      margin-bottom: 16px; 
      box-sizing: border-box; 
      border-radius: 15px; 
      background-color: rgb(105, 152, 111); 
      color: rgb(183, 213, 179); 
      font-size: 17px; 
      font-weight: 700; 
      border: #a2c2ee; 
  } 
    
  button:hover { 
      background-color: rgb(52, 98, 58); 
  } 
    
  .map-div  { 
      border: 0; 
      padding: 10px; 
  } 
    
  .gfg { 
      text-align: center; 
      color: green; 
  } 
    
  .map-div { 
      background-color: rgb(152, 178, 234); 
  }
  #map {
    width: 100;
    height: 100;
  }
  .icon-button {
    color: blue; /* Couleur bleue */
    background-color: transparent; /* Arrière-plan transparent */
    border: none; /* Supprimer la bordure */
    cursor: pointer; /* Curseur de souris en forme de main */
    padding: 0; /* Supprimer le rembourrage */
}

.icon-button:hover {
    opacity: 0.7; /* Opacité réduite au survol */
}

</style>

</body> 
</html>
<!-- leaflet java script-->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
<script>

// Assuming you have a button with the id "saveButton" and a table with the id "dataTable"
document.getElementById('saveButton').addEventListener('click', function() {
    
    

    
    fetch('/Pharmacie/add', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify(positionsArray)
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        return response.json();
    })
    .then(data => {
        console.log('Data successfully saved:', data);
        // Handle success response here
    })
    .catch(error => {
        console.error('There was a problem with the fetch operation:', error);
        // Handle error here
    });
});




 // Map initialisation
 var map = L.map('map').setView([35.68238, 10.85030], 13);

// OSM layer
var osm = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
});
osm.addTo(map);

// Google Street
var googleStreets = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
    maxZoom: 20,
    subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
});

// Première marque (Position spécifiée)
var specifiedLocationMarker = L.marker([35.76515124777903, 10.809036369224229]).addTo(map);
specifiedLocationMarker.bindPopup("<b>currente place</b>").openPopup();

// Ajouter Google Streets à la carte
googleStreets.addTo(map);

// Autres marqueurs
var secondMarker = L.marker([35.7833, 10.8333]).addTo(map);
secondMarker.bindPopup("<b>Pharmacie Sweni Monastir</b>").openPopup();
/*
var thirdMarker = L.marker([35.76447, 10.81133]).addTo(map);
thirdMarker.bindPopup("<b>Pharmacie Sweni</b>").openPopup();

var fourthMarker = L.marker([35.76537, 10.80240]).addTo(map);
fourthMarker.bindPopup("<b>Pharmacie Nefzi</b>").openPopup();

var fiveMarker = L.marker([35.77266, 10.81707]).addTo(map);
fiveMarker.bindPopup("<b>Pharmacie Tekkari</b>").openPopup();

var SixeMarker = L.marker([35.77216, 10.82570]).addTo(map);
SixeMarker.bindPopup("<b>Pharmacie dabbebi</b>").openPopup();

var SevenMarker = L.marker([35.77131, 10.82331]).addTo(map);
SevenMarker.bindPopup("<b>Pharmacie Rhim</b>").openPopup();
var huitMarker = L.marker([35.77280, 10.82484]).addTo(map);
huitMarker.bindPopup("<b>Pharmacie Hbib Chouchaine</b>").openPopup();
*/

// Contrôle des calques
var baseMaps = {
    "OSM": osm,
    "Google Streets": googleStreets
};

var overlayMaps = {
    "currente place": specifiedLocationMarker,
    "Pharmacie Sweni": secondMarker,
    "Pharmacie Sweni": thirdMarker,
    "Pharmacie Nefzi": fourthMarker,
    "Pharmacie tekkari":fiveMarker,
    "Pharmacie dabbebi":SixeMarker,
    "Pharmacie Rhim":SevenMarker,
    "Pharmacie Hbib Chouchaine":huitMarker
};


// click event to add marker in map and update form fields
let positionsArray = [];
map.on("click", function (e) {
    var coord = e.latlng;
    var lat = coord.lat;
    var lng = coord.lng;
    
    positionsArray.push({lat: lat, lng: lng});
    console.log (positionsArray);
    // Mettre à jour les champs de formulaire avec les coordonnées
    document.getElementById('latitude').value = lat;
    document.getElementById('longitude').value = lng;

    // Ajouter un marqueur
    var marker = L.marker([lat, lng]).addTo(map);
});



var layerControl = L.control.layers(baseMaps, overlayMaps).addTo(map);


   



    
    //leaflet hash
    var map = L.map('map').setView([35.68238, 10.85030], 13);
var hash = new L.Hash(map);

// click event to add marker in map
map.on("click", function (e) {
    var coord = e.latlng;
    var lat = coord.lat;
    var lng = coord.lng;
    console.log(e, lat, lng);

    // Ajouter un marqueur
    var marker = L.marker([lat, lng]).addTo(map);
});


(function(window) {
    var HAS_HASHCHANGE = (function() {
        var doc_mode = window.documentMode;
        return ('onhashchange' in window) &&
            (doc_mode === undefined || doc_mode > 7);
    })();

    L.Hash = function(map) {
        this.onHashChange = L.Util.bind(this.onHashChange, this);

        if (map) {
            this.init(map);
        }
    };

    L.Hash.parseHash = function(hash) {
        if(hash.indexOf('#') === 0) {
            hash = hash.substr(1);
        }
        var args = hash.split("/");
        if (args.length == 3) {
            var zoom = parseInt(args[0], 10),
            lat = parseFloat(args[1]),
            lon = parseFloat(args[2]);
            if (isNaN(zoom) || isNaN(lat) || isNaN(lon)) {
                return false;
            } else {
                return {
                    center: new L.LatLng(lat, lon),
                    zoom: zoom
                };
            }
        } else {
            return false;
        }
    };

    L.Hash.formatHash = function(map) {
        var center = map.getCenter(),
            zoom = map.getZoom(),
            precision = Math.max(0, Math.ceil(Math.log(zoom) / Math.LN2));

        return "#" + [zoom,
            center.lat.toFixed(precision),
            center.lng.toFixed(precision)
        ].join("/");
    };

    L.Hash.prototype = {
        map: null,
        lastHash: null,

        parseHash: L.Hash.parseHash,
        formatHash: L.Hash.formatHash,

        init: function(map) {
            this.map = map;

            // reset the hash
            this.lastHash = null;
            this.onHashChange();

            if (!this.isListening) {
                this.startListening();
            }
        },

        removeFrom: function(map) {
            if (this.changeTimeout) {
                clearTimeout(this.changeTimeout);
            }

            if (this.isListening) {
                this.stopListening();
            }

            this.map = null;
        },

        onMapMove: function() {
            // bail if we're moving the map (updating from a hash),
            // or if the map is not yet loaded

            if (this.movingMap || !this.map._loaded) {
                return false;
            }

            var hash = this.formatHash(this.map);
            if (this.lastHash != hash) {
                location.replace(hash);
                this.lastHash = hash;
            }
        },

        movingMap: false,
        update: function() {
            var hash = location.hash;
            if (hash === this.lastHash) {
                return;
            }
            var parsed = this.parseHash(hash);
            if (parsed) {
                this.movingMap = true;

                this.map.setView(parsed.center, parsed.zoom);

                this.movingMap = false;
            } else {
                this.onMapMove(this.map);
            }
        },

        // defer hash change updates every 100ms
        changeDefer: 100,
        changeTimeout: null,
        onHashChange: function() {
            // throttle calls to update() so that they only happen every
            // `changeDefer` ms
            if (!this.changeTimeout) {
                var that = this;
                this.changeTimeout = setTimeout(function() {
                    that.update();
                    that.changeTimeout = null;
                }, this.changeDefer);
            }
        },

        isListening: false,
        hashChangeInterval: null,
        startListening: function() {
            this.map.on("moveend", this.onMapMove, this);

            if (HAS_HASHCHANGE) {
                L.DomEvent.addListener(window, "hashchange", this.onHashChange);
            } else {
                clearInterval(this.hashChangeInterval);
                this.hashChangeInterval = setInterval(this.onHashChange, 50);
            }
            this.isListening = true;
        },

        stopListening: function() {
            this.map.off("moveend", this.onMapMove, this);

            if (HAS_HASHCHANGE) {
                L.DomEvent.removeListener(window, "hashchange", this.onHashChange);
            } else {
                clearInterval(this.hashChangeInterval);
            }
            this.isListening = false;
        }
    };
    L.hash = function(map) {
        return new L.Hash(map);
    };
    L.Map.prototype.addHash = function() {
        this._hash = L.hash(this);
    };
    L.Map.prototype.removeHash = function() {
        this._hash.removeFrom();
    };
})(window);

</script>
<script>
    // Fonction pour initialiser la carte Leaflet
    function initMap() {
        // Coordonnées de Sousse en Tunisie
        var latitude = 35.8251;
        var longitude = 10.6379;

        // Créer une carte Leaflet centrée sur Sousse avec un zoom spécifique
        var carte = L.map('map').setView([latitude, longitude], 12);

        // Ajouter une couche de tuiles OpenStreetMap à la carte
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(carte);

        // Ajouter un marqueur pour Sousse sur la carte
        L.marker([latitude, longitude]).addTo(carte)
            .bindPopup('Sousse')
            .openPopup();
    }

    // Appeler la fonction d'initialisation de la carte lors du chargement de la page
    document.addEventListener('DOMContentLoaded', initMap);
    // Gestionnaire d'événement pour le clic sur le bouton de zoom
    document.getElementById('zoomButton').addEventListener('click', function() {
        // Appeler la fonction d'initialisation de la carte
        initMap();
    });
</script>
<script>
    document.getElementById('zoomForm').addEventListener('submit', function(event) {
        event.preventDefault();

        var formData = new FormData(this);

        fetch('/Country/add', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Afficher un message de succès
                alert(data.message);
            } else {
                // Afficher un message d'erreur
                alert(data.message);
            }
        })
        .catch(error => {
            console.error('Erreur lors de la soumission du formulaire:', error);
            // Afficher un message d'erreur générique
            alert('Une erreur s\'est produite lors de la soumission du formulaire.');
        });
    });
</script>
<style>
    .ffbox {
    display: flex;
    justify-content: space-between;
    width: 100%;
}

.ffbox1 {
    width: 50%; /* Demi largeur pour le formulaire */
    height: 400px; /* Hauteur fixe pour le formulaire */
    padding: 20px;
    background-color: #f0f0f0;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.gfg {
    color: #333;
}

.form-control,
input[type="text"] {
    width: calc(100% - 24px);
    padding: 8px;
    margin: 8px 0;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.map-div {
    width: 50%; /* Demi largeur pour la carte */
    height: 400px; /* Hauteur fixe pour la carte */
    background-color: #f0f0f0;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}


     /* Ajoutez ce CSS pour le bouton Envoyer */
     .submit-button {
        border-radius: 15px; /* Conservez les coins arrondis */
        padding: 8px 20px; /* Ajustez le rembourrage du bouton pour correspondre à la taille du formulaire */
        background-color: #37517e; /* Couleur spécifiée */
        color: #fff; /* Couleur du texte */
        font-size: 14px; /* Taille de la police */
        border: none; /* Supprime la bordure */
        cursor: pointer; /* Curseur de la souris en forme de main */
        transition: background-color 0.3s ease; /* Transition douce pour le changement de couleur au survol */
    }

    .submit-button:hover {
        background-color: #1c2a4a; /* Couleur plus sombre au survol */
    }
</style>
