@extends('templateHome')

@section('content')

<h1>Our Products</h1>
<div class="justify-content-center container align-item-center">
    <div class="row justify-content-center">
        @foreach($productData as $products)
        <div class="card m-2" style="width: 18rem;">
            <img class="card-img-top" style="max-height: 600px" src="#" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">{{$products->name}}</h5>
              <p class="card-text">{{$products->price}}</p>
            </div>
            <div class="mb-3 ml-3"><a href="/ProductDetailAdmin/{{$products->id}}" class="btn btn-primary">View Product</a></div>
        </div>
        @endforeach
    </div>
</div>
@endsection