@extends('layout.master')

@section('title','User Register')
@section('content')
    <div class="container pt-4">
        <div class="col-md-8 offset-2">
            <div class="well">
                
                <form method="post">
                    <legend>Register Here</legend>
                        {{csrf_field()}}
                        @foreach ($errors->all() as $error)
                <p class="alert alert-danger">{{$error}}</p>
                        @endforeach
                    <div class="form-group">
                        <label for="Username">User Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Enter Username">
                        
                      </div>
                    <div class="form-group">
                      <label for="email">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email">
                      
                    </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                    </div>
                    <div class="form-group">
                        <label for="confirm_password">Confirm Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password_confirmation" >
                      </div>
                    <button type="submit" class="btn btn-primary pull-right">Register</button>
                    <div class="clearfix"></div>
                  </form>
            </div>

        </div>
    </div>
@endsection