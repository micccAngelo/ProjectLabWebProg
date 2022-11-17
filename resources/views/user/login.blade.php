@extends('template')


@section('content')
<div class = "row">
    <div class = "col-md-6">
        @if(session('success'))
        <p class = "alert alert-success"> {{session('success')}} </p>
        @endif
        @if($errors -> any())
        @foreach($errors -> all() as $err)
        <p class = "alert alert-danger"> {{$err}} </p>
        @endforeach
        @endif
        <form action="{{route ('login.action')}}" method = "POST">
            @csrf
            <div class = "mb-3">
                <label>Email address<span class = "text-danger"></span></label>
                <input class = "form-control" name = "email" value = "{{old ('email')}}" type = "email"/>
            </div>
            <div class = "mb-3">
                <label>Password <span class = "text-danger"></span></label>
                <input class = "form-control" name = "password" type = "password"/>
            </div>
            <div class = "mb-3">
                <button class = "btn btn-danger btn-lg btn-block" font ="black">Login</button>
                <br>
                <a class = "btn btn-danger btn-block" href = "{{route('register')}}">Register</a>
            </div>
        </form>
    </div>
</div>

@endsection