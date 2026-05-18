<?php
namespace App\Http\Controllers;

use App\Models\Realisation;
use App\Models\Image;
use Illuminate\Http\Request;

class RealisationController extends Controller
{
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

    public function creat()
    {
        return view('ajout_realisation');
    }

    public function stor(Request $request)
    {
        $request->validate([
            'titre' => 'required|string',
            'description' => 'required|string',
            'images.*' => 'image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $realisation = Realisation::create([
            'titre' => $request->titre,
            'description' => $request->description,
            'contexte' => $request->contexte,
            'intervention' => $request->intervention,
            'resultat' => $request->resultat,
            'message' => $request->message,
        ]);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {

                $filename = time() . '_' . $file->getClientOriginalName();

                $file->move(public_path('uploads/realisations'), $filename);

                Image::create([
                    'realisation_id' => $realisation->id,
                    'image' => 'uploads/realisations/' . $filename,
                ]);
            }
        }

        return redirect()->back()->with('success', 'Ajout réussi');
    }

   public function updates(Request $request, $id)
{
    $request->validate([
        'titre' => 'required|string',
        'description' => 'required|string',
        'images.*' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
    ]);

    $realisation = Realisation::findOrFail($id);

    // 🔥 UPDATE TEXTE
    $realisation->update([
        'titre' => $request->titre,
        'description' => $request->description,
        'contexte' => $request->contexte,
        'intervention' => $request->intervention,
        'resultat' => $request->resultat,
        'message' => $request->message,
    ]);

    /*
    |--------------------------------------------------------------------------
    | 🔥 SUPPRESSION IMAGES COCHÉES
    |--------------------------------------------------------------------------
    */

    if ($request->has('delete_images')) {

        foreach ($request->delete_images as $imageId) {

            $image = Image::find($imageId);

            if ($image) {

                $path = public_path($image->image);

                // supprimer fichier physique
                if (file_exists($path)) {
                    unlink($path);
                }

                // supprimer DB
                $image->delete();
            }
        }
    }

    /*
    |--------------------------------------------------------------------------
    | 🔥 AJOUT NOUVELLES IMAGES
    |--------------------------------------------------------------------------
    */

    if ($request->hasFile('images')) {

        foreach ($request->file('images') as $file) {

            $filename = time() . '_' . uniqid() . '.' . $file->extension();

            $file->move(public_path('uploads/realisations'), $filename);

            Image::create([
                'realisation_id' => $realisation->id,
                'image' => 'uploads/realisations/' . $filename,
            ]);
        }
    }

    return back()->with('success', 'Projet modifié avec succès');
}


public function table_realisation()
{
    $realisations = Realisation::with('images')->get();

    return view('table_realisation', compact('realisations'));
}

    public function destroy($id)
    {
        $realisation = Realisation::findOrFail($id);

        foreach ($realisation->images as $img) {
            $path = public_path($img->image);

            if (file_exists($path)) {
                unlink($path);
            }

            $img->delete();
        }

        $realisation->delete();

        return back()->with('success', 'Supprimé');
    }
}