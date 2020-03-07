@extends('layout.master')
@section('title','create Product')
    
@section('content')


<div class=" container col-md-8 bg-danger col-md-offset-2 pt-5">
    <div class="well">
        <form class="bg-light py-5" method="POST" enctype="multipart/form-data">
          @if (session('status'))
        <p class="alert alert-success">{{session('status')}}</p>
          @endif
          @foreach ($errors->all() as $error)
        <p class="alert alert-danger">{{$error}}</p>
          @endforeach
          {{ csrf_field() }}
          <legend class="text-center pb-3">Create a new Product </legend>
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control bg-dark text-light" id="title" name="title"  placeholder="title">
              
            </div>
            <div class="form-group">
              <label for="Price">Price</label>
              <input type="integer" class="form-control bg-dark text-light" id="price" name="price" placeholder="Price">
            </div>
            <div class="form-group">
              <label for="Description">Description</label>
              <textarea class="form-control bg-dark text-light" id="description" name="description" rows="3"></textarea>
            </div>
            <div class="form-group">
              <label for="files">File input</label>
              <input type="file" class="form-control-file" id="file" name="file" aria-describedby="fileHelp">
    
            </div>
         
            <button type="submit" class="btn btn-dark pull-right">Submit</button>
          </form>
    </div>
</div>

    
@endsection