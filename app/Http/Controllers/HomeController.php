<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Event;
use App\Models\Formation;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;

class HomeController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function home()
    {
        $page = Page::where('slug', 'accueil')->first();
        $posts = Post::with('category')->get();
        $formations = Formation::with('levels')->get();
        $events = Event::with('category')->get();
        return view('pages.home', compact('page', 'posts', 'formations', 'events'));
    }

    public function homeLogged()
    {
        
    }
}
