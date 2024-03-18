<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Page;

class PagesController extends Controller
{

    /**
     * @Route("/a-propos", name="about")
     */
    public function about()
    {
        $page = Page::where('slug', 'notre-universite')->first();
        return view('pages.about', compact('page'));
    }

    /**
     * @Route("/", name="about")
     */
    public function faq()
    {
        return view('pages.faq');
    }

    public function admission()
    {
        $page = Page::where('slug', 'admission')->first();
        return view('admission.index', compact('page'));
    }

    public function teams()
    {
        $page = Page::where('slug', 'equipe-dirigeante')->first();
        return view('pages.teams', compact('page'));
    }

    public function contact()
    {
        $page = Page::where('slug', 'contact')->first();
        return view('pages.contact', compact('page'));
    }
}
