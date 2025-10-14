<?php

namespace App\Http\Controllers;

use App\Mail\ConsultationMail;
use App\Mail\EnvoieMail;
use App\Models\Newsletter;
use App\Models\Visiteur;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;


class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
   public function envoie_mail(Request $request)
    {
       $request->validate([
        'nom_prenom' => 'required|string|max:255',
        'email' => 'required|email',
        'numero' => 'required|string|max:20',
        'suject' => 'required|string|max:255',
        'message' => 'required|string',
    ]);

    try {
        Mail::to('beresaf@gmail.com')->send(new EnvoieMail($request->all()));

        return redirect()->back()->with('success', '✅Votre message a bien été envoyé !');
    } catch (\Throwable $th) {
        Log::error("Erreur lors de l'envoi du mail : " . $th->getMessage());
        return back()->with("error", "Une erreur s'est produite. Veuillez réessayer plus tard.");
    }
    }
    public function newsletter(Request $request)
    {
        $request->validate([
            'mail' => 'required|email|unique:newsletters,mail'
        ]);

        Newsletter::create([
            'mail' => $request->mail
        ]);

        return redirect()->back()->with('success', 'Merci pour votre inscription à notre newsletter !');
    }


 public function consultationMail(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'phone'   => 'nullable|string|max:30',
            'company' => 'nullable|string|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        try {
            Mail::to('beresaf@gmail.com')->send(new ConsultationMail($request->all()));
            return back()->with('success', '✅ Votre demande a bien été envoyée. Merci !');
        } catch (\Throwable $th) {
            Log::error("Erreur mail: " . $th->getMessage());
            return back()->with('error', '❌ Une erreur est survenue, veuillez réessayer plus tard.');
        }
    }

public function visiteur()
{
    $today = Visiteur::whereDate('created_at', Carbon::today())->count();

    $month = Visiteur::whereMonth('created_at', Carbon::now()->month)
        ->whereYear('created_at', Carbon::now()->year)
        ->count();

    $year = Visiteur::whereYear('created_at', Carbon::now()->year)->count();

    return view('home', compact('today', 'month', 'year'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
