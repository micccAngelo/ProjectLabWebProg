@extends('template')


@section('content')
<div class="card justify-content-center">
    <div class="card-body">
        <div class ="justify-content-center row">
            <div class ="col-md-6">
                <h1 >CREATE AN ACCOUNT</h1>
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
                        <p>Your Gender</p>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="Gender" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                            Male
                        </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="Gender" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                            Female
                        </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="on" name="Term of Service" id="flexCheckDefault1 ">
                            <label class="form-check-label" for="flexCheckDefault1">
                            I agree all statements in <a href="#" class="">Term of service</a>
                            </label>
                        </div>                        
                    </div>
                    <div class = "mb-3">
                        <button class = "btn btn-danger btn-lg btn-block" font ="black">Register</button>
                    </div>
                    <p>Already have an account? <a href="{{route('login')}}" class="text-decoration-none">Login here</a></p>
                </form>
            </div>
        </div>
    </div>
  </div>


@endsection