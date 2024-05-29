<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="{{ ('index.css') }}"> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    

    <title>recycle formulaire</title>
   <meta content="" name="description">
    <meta content="" name="keywords">

<!-- Favicons -->
    <link href="{{asset ('assets/1/img/icon.png')}}" rel="icon">
    <link href="{{ asset('assets/1/img/icon.png') }}" rel="apple-touch-icon">
  
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  
  <link href="{{asset ('assets/1/vendor/aos/aos.css')}} " rel="stylesheet">
  <link href="{{ asset('assets/1/vendor/bootstrap/css') }}/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{asset ('assets/1/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset ('assets/1/vendor/boxicons/css') }}/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{asset ('assets/1/vendor/glightbox/css') }}/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ ('assets/1/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ ('assets/1/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css') }}/font-awesome.min.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css') }}"integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="crossorigin=""/>
  
  <link href="{{asset ('assets/1/css') }}/style.css') }}" rel="stylesheet">
</head>
<body>


  <aside class="sidebar">
    <div class="sidebar-header">
        <i class="fas fa-recycle"></i> Recycle
    </div>
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

<form>
<div class="container">
  <h2>List medicaments for recycle</h2>
  <ul class="responsive-table">
    <li class="table-header">
      <div class="col col-1">#</div>
      <div class="col col-2"> Nom medicament</div>
      <div class="col col-3">etat medicament</div>
      <div class="col col-4">Quantite</div>
      <div class="col col-5">Action</div>
    </li>
    
    @foreach ($medicaments as $medicament)
    <li class="table-row animate">
     
      <div class="col col-2" data-label="Customer Name">{{ $medicament->name }}</div>
      <div class="col col-3" data-label="Amount">{{ $medicament->etat }}</div>
      <div class="col col-4" data-label="Payment Status">{{ $medicament->quantite }}</div>
      <div class="col col-5" data-label="Trash Icon"><a href="{{ route('recycle.edit', $medicament->id) }}" title="Edit" class="edit" data-toggle="tooltip" data-enfant-id="{{ $medicament->id }}" data-info="{{ json_encode($medicament) }}" data-id="{{ $medicament->id }}"><i class="bi bi-pencil" method="POST"></i></a>
    <a href="#" title="View"><i class="bi bi-eye"></i></a>
    <a href="#" class="delete" title="Delete" data-toggle="tooltip" onclick="confirmDelete('{{ $medicament->id }}', '{{ $medicament->quantite }}')"><i class="fas fa-trash-alt"></i></a>
    </div>
    @foreach($medicaments as $medicament)
                <form id="delete-form-{{ $medicament->id }}" action="{{ route('delete.medicament', $medicament->id) }}" method="POST" style="display: none;">
                    @csrf
                    @method('DELETE')
                </form>
                @endforeach
    </li>
    @endforeach
  </ul>
  <div class="button-wrapper">
    <a href="{{ route('add.medicament.form') }}" class="add-button">Ajouter Medicament Recycle</a>
</div>




</div>


</form>








  
<style>
  @import url('https://fonts.googleapis.com/css') 2?family=Inter:wght@400;500;600;700&display=swap');
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
    border-color: #6a64f1;
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
    color: #6a64f1;
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
    background-color: #6a64f1;
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
    transition: width 0.3s ease; /* Ajout de la transition */
}

.sidebar:hover {
    width: 280px; /* Nouvelle largeur au survol */
}

.sidebar-header {
    padding: 20px;
    text-align: center;
    font-weight: bold;
    font-size: 20px;
}

.sidebar-list {
    list-style: none;
    padding: 0;
}

.sidebar-item {
    margin-bottom: 10px;
}

.sidebar-link {
    display: block;
    padding: 10px 20px;
    text-decoration: none;
    color: #fff;
}

.sidebar-link:hover {
    background-color: #2a3e61;
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
body {
  font-family: 'lato', sans-serif;
}
.container {
  max-width: 1000px;
  margin-left: auto;
  margin-right: auto;
  padding-left: 50px;
  padding-right: 50px;
  padding-top:5PX;
}

h2 {
  font-size: 26px;
  margin: 20px 0;
  text-align: center;
  small {
    font-size: 0.5em;
  }
}

.responsive-table {
  li {
    border-radius: 3px;
    padding: 25px 30px;
    display: flex;
    justify-content: space-between;
    margin-bottom: 25px;
  }
  .table-header {
    background-color: #95A5A6;
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 0.03em;
  }
  .table-row {
    background-color: #ffffff;
    box-shadow: 0px 0px 9px 0px rgba(0,0,0,0.1);
  }
  .col-1 {
    flex-basis: 10%;
  }
  .col-2 {
    flex-basis: 40%;
  }
  .col-3 {
    flex-basis: 25%;
  }
  .col-4 {
    flex-basis: 25%;
  }
  
  @media all and (max-width: 767px) {
    .table-header {
      display: none;
    }
    .table-row{
      
    }
    li {
      display: block;
    }
    .col {
      
      flex-basis: 100%;
      
    }
    .col {
      display: flex;
      padding: 10px 0;
      &:before {
        color: #6C7A89;
        padding-right: 10px;
        content: attr(data-label);
        flex-basis: 50%;
        text-align: right;
      }
    }
  }
}
.animate {
  animation: fadeIn 1s ease-in-out;
}

@keyframes fadeIn {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}
.button-wrapper {
            text-align: center;
            margin-bottom: 1px; /* Espacement entre le bouton et le tableau */
        }

        .add-button {
            font-size: 16px;
            border-radius: 5px;
            padding: 14px 25px;
            border: none;
            font-weight: 500;
            background-color: #95A5A6; /* Couleur similaire à l'en-tête du tableau */
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .add-button:hover {
            background-color: #293c57; /* Changement de couleur au survol */
        }

        /* Animation pour le bouton */
        @keyframes pulse {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.05);
            }
            100% {
                transform: scale(1);
            }
        }

        .add-button.animated {
            animation: pulse 1s infinite;
        }


</style>

<style>
    .confirmation-dialog {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: white;
        padding: 20px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        z-index: 1000;
    }

    .dialog-content {
        text-align: center;
    }

    .confirm, .cancel {
        margin: 5px;
        padding: 10px 20px;
    }

    .toast {
        position: fixed;
        bottom: 20px;
        left: 50%;
        transform: translateX(-50%);
        background: #333;
        color: white;
        padding: 10px 20px;
        border-radius: 5px;
        opacity: 0;
        transition: opacity 0.5s;
        z-index: 1000;
    }
</style>

<script>
    function confirmDelete(id, quantite) {
        var confirmationDialog = document.createElement('div');
        confirmationDialog.className = 'confirmation-dialog';
        confirmationDialog.innerHTML = `
            <div class="dialog-content">
                <p>Are you sure you want to delete this medicament (Quantité: ${quantite})?</p>
                <button class="confirm" onclick="deleteMedicament(${id})">Confirm</button>
                <button class="cancel" onclick="closeDialog()">Cancel</button>
            </div>
        `;
        document.body.appendChild(confirmationDialog);
    }

    function closeDialog() {
        var confirmationDialog = document.querySelector('.confirmation-dialog');
        if (confirmationDialog) {
            confirmationDialog.remove();
        }
    }

    function deleteMedicament(id) {
        document.getElementById('delete-form-' + id).submit();
        showToast("Le médicament a été supprimé avec succès.");
        closeDialog();
    }

    function showToast(message) {
        var toast = document.createElement('div');
        toast.className = 'toast';
        toast.textContent = message;

        document.body.appendChild(toast);

        setTimeout(function () {
            toast.style.opacity = '1';
        }, 100);

        setTimeout(function () {
            toast.style.opacity = '0';
            setTimeout(function () {
                document.body.removeChild(toast);
            }, 1000);
        }, 6000);
    }
</script>
<script>
    function validateForm() {
        // Récupérer les valeurs des champs
        var name = document.getElementById('name').value;
        var etat = document.getElementById('etat').value;
        var quantite = document.getElementById('quantite').value;

        // Afficher les valeurs dans la console
        console.log('Nom:', name);
        console.log('État:', etat);
        console.log('Quantité:', quantite);

        // Retourner true pour soumettre le formulaire
        return true;
    }
</script>
</html>