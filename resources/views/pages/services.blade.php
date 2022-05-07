@extends('layout.app')
@section('contenu')

@section('title')
       services
@endsection 
@section('contenu')
<h1>
       bienvenue dans la page services
       </h1>
       @foreach ($produits as $produit)
       <div class="well"><h1><a href="{{$produit->id}}">{{$produit->product_name}}</a></h1></div>
               {{$produits->links()}} 
       @endforeach
       @endsection   
   