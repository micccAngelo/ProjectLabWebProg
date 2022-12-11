@extends('template')

@section('content')

{{-- <div class="card" style="padding-top: 30px">
    <div class="card-body">
        <div class = "row justify-content-center">
            <div class = "col-md-6">
                <h1>Gadget<span style="color: red">on</span></h1>
                <p><b>Sign into your account</b></p>
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
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              Remember me
                            </label>
                        </div>
                    </div>
                    <div class = "mb-3">
                        <button class = "btn btn-danger btn-lg btn-block" font ="black">Login</button>
                        <br>
                        <a class = "btn btn-danger btn-lg btn-block" href = "{{route('register')}}">Register</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </div> --}}


  <div class="card flex-row flex-wrap">
    <div class="card-header border-0">
        <img src="" alt="" />
    </div>
    <div class="card-block px-2">
        <h1>Gadget<span style="color: red">on</span></h1>
        <p><b>Sign into your account</b></p>
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
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                        Remember me
                        </label>
                    </div>
                </div>
                <div class = "mb-3">
                    <button class = "btn btn-danger btn-lg btn-block" font ="black">Login</button>
                    <br>
                    <p>Dont't have an account? <a href="{{route('register')}}" class="text-decoration-none">Register here</a></p>
                </div>
            </form>
        </div>
    <div class="w-100"></div>
</div>

@endsection