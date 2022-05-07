<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB; 
use App\Models\Product;

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
         /*$produits=DB::table('products')
                       ->inRandomOrder()
                       ->limit(1);
                        //->paginate(1);*/
                       // OU loquent
        $produits = Product::orderBy('product_name','asc')->paginate(1);
                       
                    
        return view('pages.services')->with('produits',$produits);
         //return('<h1>bienvenue dans la page d\'accueil</h1>');
     }
     public function show($id){
         //print('<h3>IL du produit est'.$id);
         /*$produits=DB::table('products')
         ->where('id',$id)
         ->fist();*/
         $produits= BD::find($id);
         return view('pages.show')->with('produits',$produits);

                       
     }
     public function create () {
        return view('pages.create');
         //return('<h1>bienvenue dans la page d\'accueil</h1>');
     }
     public function sauverproduit(Request $request ) {
         print('le nom est'.$request->product_name);
        
     }
}
