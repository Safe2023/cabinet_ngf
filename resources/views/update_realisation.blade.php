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
                <div class="card-header bg-warning text-dark text-center rounded-top-4">
                    <h4 class="mb-0">✏️ Modifier une Réalisation</h4>
                </div>
                <div class="card-body p-4">
                    
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fermer"></button>
                        </div>
                    @endif

                    <form action="{{ route('update_realisation', $realisation->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="titre" class="form-label fw-bold">Titre</label>
                            <input type="text" name="titre" id="titre" 
                                   class="form-control form-control-lg" 
                                   value="{{ $realisation->titre }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label fw-bold">Description</label>
                            <textarea name="description" id="description" rows="3" 
                                      class="form-control">{{ $realisation->description }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="contexte" class="form-label fw-bold">Contexte</label>
                            <textarea name="contexte" id="contexte" rows="2" 
                                      class="form-control">{{ $realisation->contexte }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="intervention" class="form-label fw-bold">Intervention</label>
                            <textarea name="intervention" id="intervention" rows="2" 
                                      class="form-control">{{ $realisation->intervention }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="resultats" class="form-label fw-bold">Résultats</label>
                            <textarea name="resultat" id="resultats" rows="2" 
                                      class="form-control">{{ $realisation->resultat }}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="message" class="form-label fw-bold">Message</label>
                            <textarea name="message" id="message" rows="2" 
                                      class="form-control">{{ $realisation->message }}</textarea>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold">📸 Images existantes</label><br>
                            @foreach($realisation->images as $img)
                                <img src="{{ asset('storage/' . $img->image) }}" 
                                     class="img-thumbnail me-2 mb-2" width="100">
                            @endforeach
                        </div>

                        <div class="mb-4">
                            <label for="images" class="form-label fw-bold">📤 Ajouter de nouvelles images</label>
                            <input type="file" name="images[]" id="images" class="form-control" multiple>
                            <small class="text-muted">Vous pouvez télécharger plusieurs fichiers (jpg, png, gif, webp, svg...).</small>
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-warning btn-lg rounded-pill">
                                <i class="bi bi-pencil-square me-2"></i> Mettre à jour
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