<?php

namespace App\Http\Controllers;

use App\Models\Realisation;
use App\Models\Images;
use Illuminate\Http\Request;

class RealisationController extends Controller
{
    /**
     * Affiche la liste des réalisations.
     */
    public function realisation()
    {
        $projets = Realisation::with('images')->latest()->paginate(6);
        return view('realisation', compact('projets'));
    }

    public function detail($id)
    {
        $projet = Realisation::with('images')->findOrFail($id);
        return view('detail', compact('projet'));
    }

    /**
     * Affiche le formulaire de création.
     */
    public function creat()
    {
        return view('ajout_realisation');
    }

    /**
     * Enregistre une nouvelle réalisation.
     */
   public function stor(Request $request)
{
    // Validation
    $request->validate([
        'titre' => 'required|string|max:255',
        'description' => 'required|string',
        'contexte' => 'nullable|string',
        'intervention' => 'nullable|string',
        'resultat' => 'nullable|string',
        'message' => 'nullable|string',
        'images.*' => 'image|mimes:jpg,jpeg,png|max:2048',
    ]);

    $imagePaths = [];

    // Sauvegarde des images dans public/uploads/realisations
    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $file) {
            $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/realisations'), $filename);
            $imagePaths[] = 'uploads/realisations/' . $filename;
        }
    }

    // Création de la réalisation
    Realisation::create([
        'titre' => $request->titre,
        'description' => $request->description,
        'contexte' => $request->contexte,
        'intervention' => $request->intervention,
        'resultat' => $request->resultat,
        'message' => $request->message,
        'images' => json_encode($imagePaths), // ✅ conversion du tableau en JSON
    ]);

    return redirect()->back()->with('success', 'Projet ajouté avec succès !');
}


    public function edite(string $id)
    {
        $realisation = Realisation::findOrFail($id);
        return view('update_realisation', compact('realisation'));
    }
    public function updates(Request $request, $id)
    {
        // Validation
        $validated = $request->validate([
            'images.*' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg,webp,bmp,tiff,ico|max:5120',
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'contexte' => 'required|string',
            'intervention' => 'required|string',
            'resultat' => 'required|string',
            'message' => 'required|string',
        ]);

        // Recherche du projet
        $realisation = Realisation::findOrFail($id);

        // Mise à jour
        $realisation->update([
            'titre' => $validated['titre'],
            'description' => $validated['description'],
            'contexte' => $validated['contexte'],
            'intervention' => $validated['intervention'],
            'resultat' => $validated['resultat'],
            'message' => $validated['message'],
        ]);

        // Si de nouvelles images sont ajoutées
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $path = $file->store('realisations', 'public');
                Images::create([
                    'realisation_id' => $realisation->id,
                    'image' => $path,
                ]);
            }
        }

        return redirect()->back()->with('success', 'Projet modifié avec succès !');
    }
    public function table_realisation()
    {
        $realisations = Realisation::all();
        return view('table_realisation', ['realisations' => $realisations]);
    }
    public function destroye($id)
    {
        $realisation = Realisation::findOrFail($id);

        // Supprimer les images associées
        foreach ($realisation->images as $img) {
            if (\Storage::disk('public')->exists($img->image)) {
                \Storage::disk('public')->delete($img->image);
            }
            $img->delete();
        }

        // Supprimer la réalisation
        $realisation->delete();

        return redirect()->back()->with('success', 'Projet supprimé avec succès !');
    }
}
