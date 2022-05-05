<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        return view('pages.home');
         //return('<h1>bienvenue dans la page d\'accueil</h1>');
     }
     public function apropos() {
        return view('pages.apropos');
         //return('<h1>bienvenue dans la page d\'accueil</h1>');
     }
     public function services() {
        return view('pages.services');
         //return('<h1>bienvenue dans la page d\'accueil</h1>');
     }
}
