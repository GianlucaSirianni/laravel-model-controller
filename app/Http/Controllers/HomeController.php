<?php

namespace App\Http\Controllers;

use App\Models\Movie; //Perchè non ha creato il percorso in automatico
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $all_movies = Movie::all();

        dd($all_movies);

        $data = [
            'title' => 'Titoli dei film',
            'movies_all' => $all_movies
        ];

        return view('welcome');
    }
}