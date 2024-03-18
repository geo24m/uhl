<?php

namespace App\Http\Controllers;

use App\Models\Cycle;
use App\Models\Formation;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Page;

class FormationController extends Controller
{
    public function index()
    {
        $page = Page::where('slug', 'formation')->first();
        $formations = Formation::with('levels')->paginate(10);
        $cycles = Cycle::all();
        return view('formations.index', compact('formations', 'cycles', 'page'));
    }

    public function show($slug)
    {
        $formation = Formation::where('slug', $slug)->first();
        $page = (object) ['title' => $formation->name, 'excerpt' => $formation->excerpt];
        $formations = Formation::with('levels')->get();
        return view('formations.show', compact('formation', 'page', 'formations'));
    }
}
