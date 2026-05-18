<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>

 <div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-header bg-primary text-white text-center rounded-top-4">
                    <h4 class="mb-0">Ajouter une Réalisation </h4>
                </div>
                <div class="card-body p-4">
                    
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fermer"></button>
                        </div>
                    @endif
                     @if(session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fermer"></button>
                        </div>
                    @endif

                    <form action="{{ route('ajout_realisation') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="titre" class="form-label fw-bold">Titre</label>
                            <input type="text" name="titre" id="titre" class="form-control form-control-lg" placeholder="Ex: Projet de décoration intérieure" required>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label fw-bold">Description</label>
                            <textarea name="description" id="description" rows="3" class="form-control" placeholder="Décrivez brièvement la réalisation..."></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="contexte" class="form-label fw-bold">Contexte</label>
                            <textarea name="contexte" id="contexte" rows="2" class="form-control" placeholder="Dans quel contexte ce projet a-t-il été réalisé ?"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="intervention" class="form-label fw-bold">Intervention</label>
                            <textarea name="intervention" id="intervention" rows="2" class="form-control" placeholder="Quelles ont été vos actions/interventions ?"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="resultats" class="form-label fw-bold">Résultats</label>
                            <textarea name="resultat" id="resultats" rows="2" class="form-control" placeholder="Quels résultats obtenus ?"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="message" class="form-label fw-bold">Message</label>
                            <textarea name="message" id="message" rows="2" class="form-control" placeholder="Un petit message ou conclusion..."></textarea>
                        </div>

                        <div class="mb-4">
                            <label for="images" class="form-label fw-bold">📸 Images</label>
                            <input type="file" name="images[]" id="images" class="form-control" multiple>
                            <small class="text-muted">Vous pouvez sélectionner plusieurs images.</small>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-lg rounded-pill">
                                <i class="bi bi-save me-2"></i> Enregistrer
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>