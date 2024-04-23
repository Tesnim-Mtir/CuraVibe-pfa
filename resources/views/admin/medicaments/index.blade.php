<!doctype html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Admin-panel</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('dashassets/img/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ asset('dashassets/img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('dashassets/img/favicons/favicon-16x16.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('dashassets/img/favicons/favicon.ico') }}">
    <link rel="manifest" href="{{ asset('dashassets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileImage" content="{{ asset('dashassets/img/favicons/mstile-150x150.png') }}">
    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&amp;display=swap"
        rel="stylesheet">
    <link href="{{ asset('dashassets/css/phoenix.min.css') }} " rel="stylesheet" id="style-default">
    <link href="{{ asset('dashassets/css/user.min.css') }} " rel="stylesheet" id="user-style-default">
    <style>
        body {
            opacity: 0;
        }
    </style>
</head>

<body>
    <main class="main" id="top">
        <div class="container-fluid px-0">

    @include('inc.admin.sidebar')
    @include('inc.admin.navbar')

            <div class="content">
                <div class="pb-5">
                    <div class="row g-5">
                        <div>
                            <h1>liste des medicaments </h1>
                            <hr />
                            @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <i class="fa fa-exclamation-circle me-2"></i> {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            <a data-bs-toggle="modal" data-bs-target="#exampleModal"
                                class="btn btn-primary mt-3">Ajouter medicament</a>

                            <div class="mt-3">

                                @if ($errors->any())
                                    {!! implode(
                                        '',
                                        $errors->all('
                                                                        <div class="alert alert-danger" role="alert">
                                                                            :message</div></div>'),
                                    ) !!}
                                @endif

                                {{ $medicament->links() }}

                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">id</th>
                                            <th scope="col">Nom</th>
                                            <th scope="col">Dosage</th>
                                            <th scope="col">Forme</th>
                                            <!-- <th scope="col">Présentation</th>
                                            <th scope="col">DCI</th>
                                            <th scope="col">Classe</th>
                                            <th scope="col">Laboratoire</th>
                                            <th scope="col">AMM</th>
                                            <th scope="col">tableau</th>
                                            <th scope="col">Indications</th>
                                            <th scope="col">VEIC</th> -->
                                            <th scope="col">Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($medicament as $index => $m)
                                            <tr>
                                                <th scope="row">{{ $index + 1 }}</th>
                                                <td>{{ $m->Nom }}</td>
                                                <td>{{ $m->Dosage }}</td>
                                                <td>{{ $m->Forme }}</td>
                                                <!--  <td>{{ $m->Présentation }}</td>
                                                <td>{{ $m->DCI }}</td>
                                                <td>{{ $m->Classe }}</td>
                                                <td>{{ $m->Laboratoire }}</td>
                                                <td>{{ $m->AMM }}</td>
                                                <td>{{ $m->tableau }}</td>
                                                <td>{{ $m->Indications }}</td>
                                                <td>{{ $m->VEIC }}</td> -->
                                                <td>
                                                    <a data-bs-toggle="modal" class="btn btn-success editButton"
                                                        data-id="{{ $m->id }}">Modifier</a>
                                                    <a onclick="return confirm('voulez-vous vraiment supprimer ce medicaments?')"
                                                        href="/admin/medicament/{{ $m->id }}/delete"
                                                        class="btn btn-danger">Supprimer</a>


                                                </td>

                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $medicament->links() }}
                            </div>


                        </div>

                    </div>
                </div>


                <footer class="footer">
                    <div class="row g-0 justify-content-between align-items-center h-100 mb-3">
                        <div class="col-12 col-sm-auto text-center">
                            <p class="mb-0 text-900">Thank you for joining Curavibe community<span
                                    class="d-none d-sm-inline-block"></span><span class="mx-1">|</span><br
                                    class="d-sm-none">2024 &copy; <a href="https://themewagon.com">Themewagon</a></p>
                        </div>
                        <div class="col-12 col-sm-auto text-center">
                            <p class="mb-0 text-600">v1.1.0</p>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </main>

    <!--Modal Ajout-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
        style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ajouter medicament</h5><button class="btn p-1"
                        type="button" data-bs-dismiss="modal" aria-label="Close"><svg
                            class="svg-inline--fa fa-times fa-w-11 fs--1" aria-hidden="true" focusable="false"
                            data-prefix="fas" data-icon="times" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 352 512" data-fa-i2svg="">
                            <path fill="currentColor"
                                d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z">
                            </path>
                        </svg><!-- <span class="fas fa-times fs--1"></span> Font Awesome fontawesome.com --></button>
                </div>
                <form action="/admin/medicament/store" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3"><label class="form-label" for="exampleFormControlInput1">Nom</label>
                            <input name="Nom" class="form-control" id="exampleFormControlInput1" type="text"
                                placeholder="taper nom medciament">
                        </div>

                        <div class="mb-3"><label class="form-label" for="exampleFormControlInput2">Dosage</label>
                            <input name="Dosage" class="form-control" id="exampleFormControlInput2" type="text"
                                placeholder="taper dosage">
                        </div>

                        <div class="mb-3"><label class="form-label" for="exampleFormControlInput3">Forme</label>
                            <input name="Forme" class="form-control" id="exampleFormControlInput3" type="text"
                                placeholder="taper forme">
                        </div>

                        <div class="mb-3"><label class="form-label"
                                for="exampleFormControlInput4">Présentation</label>
                            <input name="Présentation" class="form-control" id="exampleFormControlInput4"
                                type="text" placeholder="taper presentation">
                        </div>

                        <div class="mb-3"><label class="form-label" for="exampleFormControlInput5">DCI</label>
                            <input name="DCI" class="form-control" id="exampleFormControlInput5" type="text"
                                placeholder="taper DCI">
                        </div>

                        <div class="mb-3"><label class="form-label" for="exampleFormControlInput6">Classe</label>
                            <input name="Classe" class="form-control" id="exampleFormControlInput6" type="text"
                                placeholder="taper classe">
                        </div>

                        <div class="mb-3"><label class="form-label" for="exampleFormControlInput7">Sous
                                Classe</label>
                            <input name="Sous_Classe" class="form-control" id="exampleFormControlInput7"
                                type="text" placeholder="taper nom medciament">
                        </div>

                        <div class="mb-3"><label class="form-label"
                                for="exampleFormControlInput8">Laboratoire</label>
                            <input name="Laboratoire" class="form-control" id="exampleFormControlInput8"
                                type="text" placeholder="taper nom laboratoir">
                        </div>

                        <div class="mb-3"><label class="form-label" for="exampleFormControlInput9">AMM</label>
                            <input name="AMM" class="form-control" id="exampleFormControlInput9" type="text"
                                placeholder="taper nom medciament">
                        </div>

                        <div class="mb-3"><label class="form-label" for="exampleFormControlInput10">Date
                                AMM</label>
                            <input name="Date_AMM" class="form-control" id="exampleFormControlInput10"
                                type="text" placeholder="taper AMM">
                        </div>

                        <div class="mb-3"><label class="form-label" for="exampleFormControlInput11">Conditionnement
                                primaire</label>
                            <input name="Conditionnement_primaire" class="form-control"
                                id="exampleFormControlInput11" type="text"
                                placeholder="taper les conditionnements primairs">
                        </div>

                        <div class="mb-3"><label class="form-label" for="exampleFormControlInput12">Spécifocation
                                Conditionnement primaire</label>
                            <input name="Spécifocation_Conditionnement_primaire" class="form-control"
                                id="exampleFormControlInput12" type="text"
                                placeholder="taper spécification primaire">
                        </div>

                        <div class="mb-3"><label class="form-label" for="exampleFormControlInput13">tableau</label>
                            <input name="tableau" class="form-control" id="exampleFormControlInput13" type="text"
                                placeholder="taper tableau">
                        </div>

                        <div class="mb-3"><label class="form-label" for="exampleFormControlInput14">Durée de
                                conservation</label>
                            <input name="Durée_de_conservation" class="form-control" id="exampleFormControlInput14"
                                type="number" placeholder="entrer la durée de consevation">
                        </div>

                        <div class="mb-3"><label class="form-label"
                                for="exampleFormControlInput15">Indications</label>
                            <input name="Indications" class="form-control" id="exampleFormControlInput15"
                                type="text" placeholder="taper les indications">
                        </div>

                        <div class="mb-3"><label class="form-label" for="exampleFormControlInput16">G/P/B</label>
                            <input name="G_P_B" class="form-control" id="exampleFormControlInput16" type="text"
                                placeholder="taper g/p/b">
                        </div>

                        <div class="mb-3"><label class="form-label" for="exampleFormControlInput17">VEIC</label>
                            <input name="VEIC" class="form-control" id="exampleFormControlInput17" type="text"
                                placeholder="taper veic">
                        </div>



                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" type="submit">Okay</button>
                        <button class="btn btn-outline-primary" type="button"
                            data-bs-dismiss="modal">Cancel</button>
                    </div>
            </div>
            </form>
        </div>
    </div>

    <!--Modal update-->
    <div class="modal fade" id="editMedicament" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true" style="display: none;">
        <div class="modal-dialog">

        </div>

    </div>
    </div>

    <script src="{{ asset('dashassets/js/phoenix.js') }}"></script>
    <script src="{{ asset('dashassets/js/ecommerce-dashboard.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>

    <script>
        $('.editButton').on('click', function() {
            $('#editMedicament .modal-dialog').load('/admin/medicament/' + $(this).data('id') + '/update',
            function() {
                $('#editMedicament').modal('show');
            });
        });
    </script>
</body>

</html>
