@extends('layouts.head')
@section('content')
<<<<<<< HEAD
<div class="d-flex justify-content-end mb-3">
    <button class="btn btn-primary rounded-pill" data-bs-toggle="modal" data-bs-target="#addRealisationModal">
        <i class="bi bi-plus-circle me-2"></i> Ajouter une réalisation
    </button>
</div>
<!-- Modal Ajout Réalisation -->
<div class="modal fade" id="addRealisationModal" tabindex="-1" aria-labelledby="addRealisationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0 rounded-4 shadow-lg">

            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="addRealisationModalLabel">
                    <i class="bi bi-plus-circle me-2"></i>Ajouter une Réalisation
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>

            <form action="{{ route('ajout_realisation') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="modal-body">

                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label class="form-label fw-bold">Titre</label>
                            <input type="text" name="titre" class="form-control" placeholder="Titre du projet" required>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label class="form-label fw-bold">Description</label>
                            <textarea name="description" rows="3" class="form-control" placeholder="Description..."></textarea>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Contexte</label>
                            <textarea name="contexte" rows="3" class="form-control"></textarea>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Intervention</label>
                            <textarea name="intervention" rows="3" class="form-control"></textarea>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Résultat</label>
                            <textarea name="resultat" rows="3" class="form-control"></textarea>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label fw-bold">Message</label>
                            <textarea name="message" rows="3" class="form-control"></textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <label class="form-label fw-bold">Images</label>
                            <input type="file" name="images[]" class="form-control" multiple>
                            <small class="text-muted">
                                Vous pouvez sélectionner plusieurs images.
                            </small>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary rounded-pill" data-bs-dismiss="modal">
                        Fermer
                    </button>

                    <button type="submit" class="btn btn-primary rounded-pill">
                        <i class="bi bi-save me-2"></i>Enregistrer
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
<table class="table table-bordered table-striped align-middle">

    <thead class="table-dark">
        <tr>
            <th>Titre</th>
            <th>Description</th>
            <th>Contexte</th>
            <th>Intervention</th>
            <th>Résultat</th>
            <th>Message</th>
=======

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Titre</th>
            <th>Description</th>
>>>>>>> d75851da67972809a7dfdb66abdaee1966f90223
            <th>Images</th>
            <th>Actions</th>
        </tr>
    </thead>
<<<<<<< HEAD

    <tbody>

    @foreach($realisations as $realisation)

        <tr>

            <td>{{ $realisation->titre }}</td>

            <td>{{ Str::limit($realisation->description, 50) }}</td>

            <td>{{ Str::limit($realisation->contexte, 50) }}</td>

            <td>{{ Str::limit($realisation->intervention, 50) }}</td>

            <td>{{ Str::limit($realisation->resultat, 50) }}</td>

            <td>{{ Str::limit($realisation->message, 50) }}</td>

            <td>

                @if($realisation->images?->isNotEmpty())

                    <div class="d-flex flex-wrap gap-1">

                        @foreach($realisation->images as $img)

                            <img src="{{ asset($img->image) }}"
                                 width="60"
                                 height="60"
                                 class="rounded border"
                                 style="object-fit: cover;">

                        @endforeach

                    </div>

                @else
                    <span class="text-muted">Aucune image</span>
                @endif

            </td>

            <td class="d-flex gap-1">

                <button class="btn btn-warning btn-sm"
                        data-bs-toggle="modal"
                        data-bs-target="#editModal{{ $realisation->id }}">
                    <i class="bi bi-pencil-square"></i>
                </button>

                <form action="{{ route('destroy', $realisation->id) }}"
                      method="POST"
                      onsubmit="return confirm('Supprimer ce projet ?')">

                    @csrf
                    @method('DELETE')

                    <button class="btn btn-danger btn-sm">
                        <i class="bi bi-trash"></i>
                    </button>

                </form>

            </td>

        </tr>

        <!--  MODAL EDIT (inchangé mais complet) -->
        <div class="modal fade" id="editModal{{ $realisation->id }}">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <form action="{{ route('update_realisation', $realisation->id) }}"
                          method="POST"
                          enctype="multipart/form-data">

                        @csrf
                        @method('PUT')

                        <div class="modal-header">
                            <h5 class="modal-title">Modifier la réalisation</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <div class="modal-body">

                            <input type="text" name="titre"
                                   value="{{ $realisation->titre }}"
                                   class="form-control mb-2">

                            <textarea name="description" class="form-control mb-2">{{ $realisation->description }}</textarea>

                            <textarea name="contexte" class="form-control mb-2">{{ $realisation->contexte }}</textarea>

                            <textarea name="intervention" class="form-control mb-2">{{ $realisation->intervention }}</textarea>

                            <textarea name="resultat" class="form-control mb-2">{{ $realisation->resultat }}</textarea>

                            <textarea name="message" class="form-control mb-2">{{ $realisation->message }}</textarea>

                            <!--  AJOUT IMAGES -->
                           <!-- AJOUT NOUVELLES IMAGES -->
<div class="mb-3">

    <label class="fw-bold">
        Ajouter de nouvelles images
    </label>

    <input type="file"
           name="images[]"
           multiple
           class="form-control">

</div>

<!-- IMAGES EXISTANTES -->
<div class="mb-3">

    <label class="fw-bold">
        Images existantes
    </label>

    <div class="d-flex flex-wrap gap-3 mt-2">

        @foreach($realisation->images as $img)

            <div class="border rounded p-2 text-center">

                <img src="{{ asset($img->image) }}"
                     width="100"
                     height="100"
                     class="img-thumbnail"
                     style="object-fit: cover;">

                <!-- CHECKBOX -->
                <div class="form-check mt-2">

                    <input class="form-check-input"
                           type="checkbox"
                           name="delete_images[]"
                           value="{{ $img->id }}"
                           id="img{{ $img->id }}">

                    <label class="form-check-label text-danger"
                           for="img{{ $img->id }}">

                        Supprimer

                    </label>

                </div>

            </div>

        @endforeach

    </div>

</div>

                        </div>

                        <div class="modal-footer">
                            <button class="btn btn-secondary" data-bs-dismiss="modal">
                                Annuler
                            </button>

                            <button class="btn btn-success">
                                Enregistrer
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>

    @endforeach

    </tbody>

=======
    <tbody>
        @foreach($realisations as $realisation)
            <tr>
                <td>{{ $realisation->titre }}</td>
                <td>{{ Str::limit($realisation->description, 50) }}</td>
                <td>
                    @foreach($realisation->images as $img)
                        <img src="{{ asset('storage/' . $img->image) }}" width="80" class="img-thumbnail mb-1">
                    @endforeach
                </td>
                <td class="d-flex flex-wrap gap-1">
                    <!-- Bouton Modifier -->
                    <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal{{ $realisation->id }}">
                        <i class="bi bi-pencil-square"></i>
                    </button>

                    <!-- Formulaire Supprimer -->
                    <form action="{{ route('destroye', $realisation->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Supprimer ce projet ?')"><i class="bi bi-trash"></i></button>
                    </form>
                </td>
            </tr>

            <!-- Modal d'édition -->
            <div class="modal fade" id="editModal{{ $realisation->id }}" tabindex="-1" aria-labelledby="editModalLabel{{ $realisation->id }}" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <form action="{{ route('update_realisation', $realisation->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="modal-header">
                                <h5 class="modal-title" id="editModalLabel{{ $realisation->id }}">Modifier le projet</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label>Titre</label>
                                    <input type="text" name="titre" value="{{ $realisation->titre }}" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label>Description</label>
                                    <textarea name="description" class="form-control" required>{{ $realisation->description }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label>Contexte</label>
                                    <textarea name="contexte" class="form-control" required>{{ $realisation->contexte }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label>Intervention</label>
                                    <textarea name="intervention" class="form-control" required>{{ $realisation->intervention }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label>Résultat</label>
                                    <textarea name="resultat" class="form-control" required>{{ $realisation->resultat }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label>Message</label>
                                    <textarea name="message" class="form-control" required>{{ $realisation->message }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label>Ajouter de nouvelles images</label>
                                    <input type="file" name="images[]" multiple class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label>Images existantes :</label><br>
                                    @foreach($realisation->images as $img)
                                        <img src="{{ asset('storage/' . $img->image) }}" width="80" class="img-thumbnail mb-1">
                                    @endforeach
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                <button type="submit" class="btn btn-success">Enregistrer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </tbody>
>>>>>>> d75851da67972809a7dfdb66abdaee1966f90223
</table>

@endsection