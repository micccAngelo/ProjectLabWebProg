@extends('templateHome')

@section('content')

<div class="justify-content-center container align-item-center">
    <div class="row justify-content-center">
        <div class="card" style="width: 30rem;">
            <img class="card-img-top" src="{{$productDetail->image}}" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">{{$productDetail->name}}</p>
              <p class="card-text">{{$productDetail->price}}</p>
              <p class="card-text">{{$productDetail->year}}</p>
              <p class="card-text">{{$productDetail->desc}}</p>
            </div>
            <div class="mb-3 ml-3"><a href="#" class="btn btn-primary">Edit Product</a></div>  
            <div class="mb-3 ml-3"><a href="#" class="btn btn-danger">Delete Product</a></div>
        </div>
    </div>
</div>
@endsection