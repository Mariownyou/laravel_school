<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function news()
    {
        return view('pages.news.index');
    }

    public function parents()
    {
        return view('pages.parents.index');
    }

    public function questions()
    {
        return view('pages.questions.index');
    }
}
