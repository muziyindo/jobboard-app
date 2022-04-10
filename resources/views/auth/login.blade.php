@extends('layouts.app')

@section('content')

    
    {{-- <div class="container login-box-top"></div> --}}
    <div class="container login-title"><h4><i class="fas fa-lock" style="color:#482880;"></i> Login to your account</h4></div>
    <div class="container login-box clearfix" >
        


        @if ($message = Session::get('message'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
        @endif

        <form method="post" action="{{ route('login.custom') }}">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Enter email" name="email">
                @if ($errors->has('email'))
                    <small id="emailHelp" class="form-text text-danger">{{ $errors->first('email') }}</small>
                @endif
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"
                    name="password">
                @if ($errors->has('password'))
                    <small id="emailHelp" class="form-text text-danger">{{ $errors->first('password') }}</small>
                @endif
            </div>


            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Remember Me</label>
            </div>
            
            <button type="submit" class="btn btn-primary btn-custom float-right"><i class="fas fa-sign-in-alt" style="font-size:25px"></i></button>
            
        </form>
    </div>
@endsection
