<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modifier medicament : <span
                class="text-primary">{{ $medicament->Nom }}</span></h5><button class="btn p-1" type="button"
            data-bs-dismiss="modal" aria-label="Close"><svg class="svg-inline--fa fa-times fa-w-11 fs--1"
                aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times" role="img"
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512" data-fa-i2svg="">
                <path fill="currentColor"
                    d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z">
                </path>
            </svg><!-- <span class="fas fa-times fs--1"></span> Font Awesome fontawesome.com --></button>
    </div>
    <form action="/admin/medicament/update" method="post">
        @csrf
        <div class="modal-body">
            <div class="mb-3"><label class="form-label" for="exampleFormControlInput1">Nom</label>
                <input name="Nom" class="form-control" id="exampleFormControlInput1" type="text"
                    value="{{ $medicament->Nom }}" placeholder="taper nom medciament">
            </div>

            <div class="mb-3"><label class="form-label" for="exampleFormControlInput2">Dosage</label>
                <input name="Dosage" class="form-control" id="exampleFormControlInput2" type="text"
                    value="{{ $medicament->Dosage }}" placeholder="taper dosage">
            </div>

            <div class="mb-3"><label class="form-label" for="exampleFormControlInput3">Forme</label>
                <input name="Forme" class="form-control" id="exampleFormControlInput3" type="text"
                    value="{{ $medicament->Forme }}" placeholder="taper forme">
            </div>

            <div class="mb-3"><label class="form-label" for="exampleFormControlInput4">Présentation</label>
                <input name="Présentation" class="form-control" id="exampleFormControlInput4" type="text"
                    value="{{ $medicament->Présentation }}" placeholder="taper presentation">
            </div>

            <div class="mb-3"><label class="form-label" for="exampleFormControlInput5">DCI</label>
                <input name="DCI" class="form-control" id="exampleFormControlInput5" type="text"
                    value="{{ $medicament->DCI }}" placeholder="taper DCI">
            </div>

            <div class="mb-3"><label class="form-label" for="exampleFormControlInput6">Classe</label>
                <input name="Classe" class="form-control" id="exampleFormControlInput6" type="text"
                    value="{{ $medicament->Classe }}" placeholder="taper classe">
            </div>

            <div class="mb-3"><label class="form-label" for="exampleFormControlInput7">Sous
                    Classe</label>
                <input name="Sous_Classe" class="form-control" id="exampleFormControlInput7" type="text"
                    value="{{ $medicament->Sous_Classe }}" placeholder="taper nom medciament">
            </div>

            <div class="mb-3"><label class="form-label" for="exampleFormControlInput8">Laboratoire</label>
                <input name="Laboratoire" class="form-control" id="exampleFormControlInput8" type="text"
                    value="{{ $medicament->Laboratoire }}" placeholder="taper nom laboratoir">
            </div>

            <div class="mb-3"><label class="form-label" for="exampleFormControlInput9">AMM</label>
                <input name="AMM" class="form-control" id="exampleFormControlInput9" type="text"
                    value="{{ $medicament->AMM }}" placeholder="taper nom medciament">
            </div>

            <div class="mb-3"><label class="form-label" for="exampleFormControlInput10">Date
                    AMM</label>
                <input name="Date_AMM" class="form-control" id="exampleFormControlInput10" type="text"
                    value="{{ $medicament->Date_AMM }}" placeholder="taper AMM">
            </div>

            <div class="mb-3"><label class="form-label" for="exampleFormControlInput11">Conditionnement
                    primaire</label>
                <input name="Conditionnement_primaire" class="form-control" id="exampleFormControlInput11"
                    type="text" value="{{ $medicament->Conditionnement_primaire }}"
                    placeholder="taper les conditionnements primairs">
            </div>

            <div class="mb-3"><label class="form-label" for="exampleFormControlInput12">Spécifocation
                    Conditionnement primaire</label>
                <input name="Spécifocation_Conditionnement_primaire" class="form-control"
                    id="exampleFormControlInput12" type="text"
                    value="{{ $medicament->Spécification_Conditionnement_primaire }}"
                    placeholder="taper spécification primaire">
            </div>

            <div class="mb-3"><label class="form-label" for="exampleFormControlInput13">tableau</label>
                <input name="tableau" class="form-control" id="exampleFormControlInput13" type="text"
                    value="{{ $medicament->tableau }}" placeholder="taper tableau">
            </div>

            <div class="mb-3"><label class="form-label" for="exampleFormControlInput14">Durée de
                    conservation</label>
                <input name="Durée_de_conservation" class="form-control" id="exampleFormControlInput14"
                    type="number" value="{{ $medicament->Durée_de_conservation }}"
                    placeholder="entrer la durée de consevation">
            </div>

            <div class="mb-3"><label class="form-label" for="exampleFormControlInput15">Indications</label>
                <input name="Indications" class="form-control" id="exampleFormControlInput15" type="text"
                    value="{{ $medicament->Indications }}" placeholder="taper les indications">
            </div>

            <div class="mb-3"><label class="form-label" for="exampleFormControlInput16">G/P/B</label>
                <input name="G_P_B" class="form-control" id="exampleFormControlInput16" type="text"
                    value="{{ $medicament->G_P_B }}" placeholder="taper g/p/b">
            </div>

            <div class="mb-3"><label class="form-label" for="exampleFormControlInput17">VEIC</label>
                <input name="VEIC" class="form-control" id="exampleFormControlInput17" type="text"
                    value="{{ $medicament->VEIC }}" placeholder="taper veic">
            </div>
            <input type="hidden" name="id_medicament" value="{{ $medicament->id }}">
        </div>
        <div class="modal-footer">
            <button class="btn btn-primary" type="submit">Okay</button>
            <button class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Cancel</button>
        </div>
    </form>
</div>