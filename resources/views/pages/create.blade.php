        
        @extends('layout.app')
@section('title')
      sauverproduit
@endsection

@section('contenu')
        <form action={{url('/sauverproduit')}} method="POST" class="form-horizontal">
        {{csrf_field()}}
        <div class="form-group"><p><label>product:</label><input type="text" name="product_name"placeholder="product_name" class="form-control" Requered/></p></div>
        <div class="form-group"><p><label>product_price:</label><input type="number" name="product_price"placeholder="product_price" class="form-control" Requered/></p></div>
        <div class="form-group"><p><label>product_description</label><textarea name="description" id="editor" placeholder="description" cols="30" rows="10" class="form-control" Requered></textarea></p></div>
        <p><input type="submit" value="ajouter"/></p>
        </form>

@endsection
        

        