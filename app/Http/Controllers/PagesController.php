<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Collective\Html\Eloquent\FormAccessible;

class PagesController extends Controller
{

    public function home()
    {   
        return view('Welcome');
    }
    public function index()
    {   
        $title = 'Welcome to Laravel';
        //return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }

    public function about()
    {
        $title = 'About';
        return view('pages.about')->with('title', $title);

    }


}
