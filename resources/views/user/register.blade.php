@extends('template')


@section('content')
<div class = "row">
    <div class = "col-md-6">
        @if($errors -> any())
        @foreach($errors -> all() as $err)
        <p class = "alert alert-danger"> {{$err}} </p>
        @endforeach
        @endif
        <form action="{{route ('register.action')}}" method = "POST">
            @csrf
            <div class = "mb-3">
                <label>Your Name <span class = "text-danger"></span></label>
                <input class = "form-control" name = "name" value = "{{old ('name')}}" type = "text"/>
            </div>
            <div class = "mb-3">
                <label>Your Email <span class = "text-danger"></span></label>
                <input class = "form-control" name = "email" value = "{{old ('email')}}" type = "email"/>
            </div>
            <div class = "mb-3">
                <label>Your Password <span class = "text-danger"></span></label>
                <input class = "form-control" name = "password" type = "password"/>
            </div>
            <div class = "mb-3">
                <label>Repeat your password <span class = "text-danger"></span></label>
                <input class = "form-control" name = "password_confirmation" type = "password"/>
            </div>
            <div class = "mb-3">
                <label>Your Address <span class = "text-danger"></span></label>
                <input class = "form-control" name = "address" value = "{{old ('address')}}" type = "text"/>
            </div>
            <div class = "mb-3">
                <button class = "btn btn-danger btn-lg btn-block" font ="black">Register</button>
                <br>
                <a class = "btn btn-danger btn-block" href = "{{route('login')}}">Back</a>
            </div>
        </form>
    </div>
</div>

@endsection