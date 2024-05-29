<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Medicament</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .body {
            font-family: Arial, sans-serif;
         
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 1000px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-left:280px; /* Décalage vers la droite */
        }
        h1 {
            text-align: center;
            color: #333;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="email"],
        input[type="date"],
        select {
            width: calc(100% - 12px);
            padding: 8px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 16px;
        }
        select {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            background: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDIzLjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPgo8c3ZnIGlkPSJzdmcyIiB2aWV3Qm94PSIwIDAgMTI4IDExNCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiCgkgdmlld0JveD0iMCAwIDEyOCAxMTQiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDEyOCAxMTQiIHdpZHRoPSIxMjgiIGhlaWdodD0iMTE0Ij4KPHBhdGggZD0iTTEyOCAwQzQwOS4xNCAwIDQwOS4xNCA4My4xNCAxMjggODMuMTQgNDA5LjE0IDgzLjE0IDEyOCA4My4xNCAxMjggNDA5LjE0eiIvPgo8L3N2Zz4K') no-repeat right 8px center/10px 10px;
        }
        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="date"]:focus,
        select:focus {
            outline: none;
            border-color: #007bff;
        }
        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 12px 20px;
            cursor: pointer;
            font-size: 16px;
        }
        button[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>

</head>
<body>
<div class="body">   
    <div class="container">
     
        @if (session('success'))
            <div>{{ session('success') }}</div>
        @endif
      <!-- resources/views/recycle/edit.blade.php -->

<form action="{{ route('update.medicament', $medicament->id) }}" method="POST"  onsubmit="return validateForm()">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Nom:</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $medicament->name }}">
    </div>
    <div class="form-group">
        <label for="etat">État:</label>
        <input type="text" class="form-control" id="etat" name="etat" value="{{ $medicament->etat }}">
    </div>
    <div class="form-group">
        <label for="quantite">Quantité:</label>
        <input type="number" class="form-control" id="quantite" name="quantite" value="{{ $medicament->quantite }}">
    </div>
    <button type="submit" class="btn btn-primary">Mettre à jour</button>
</form>

    </div>
    </div>
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
    </body>


</html>
