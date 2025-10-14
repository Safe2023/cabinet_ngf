@extends('layouts.head')
@section('content')

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Titre</th>
            <th>Description</th>
            <th>Images</th>
            <th>Actions</th>
        </tr>
    </thead>
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
</table>

@endsection