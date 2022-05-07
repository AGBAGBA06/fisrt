@extends('layout.app')
@section('contenu')

@section('title')
       services
@endsection 
@section('contenu')
<h1>
       les details des produits
</h1>
       <hr>
       <h2>{{$produits->product_name}}</h2>
       <h3>{{$produits->product_price}}</h3>
       <h3>{{$produits->description}}</h3>
@endsection   
   