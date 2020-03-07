@extends('layout.master')
@section('title','Home')    

@section('content')

    <div class="container-fluid pt-4">
        <div class="row">
                <div class="col-md-4">
               @include('layout.slidebar')
                </div>
                <div class="col-md-8">
                  <div class="row">
                    @foreach ($products as $product)
                    <div class="col-sm-6 col-md-4">
                      <div class="card border-danger mb-3" style="max-width: 20rem;">
                      <div class="card-header bg-danger text-center">{{$product->price}}</div>
                        <div class="card-body">
                        <img class="card-img" src="{{asset('/upload/'.$product->imgs)}}" alt="Card image cap">
                        <h4 class="card-title">{{$product->title}}</h4>
                        <p class="card-text">{{$product->description}}</p>
                        </div>
                        <div class="card-footer">
                          <a href="" type="button" class="btn btn-dark">View Detail</a>
                        <a href="{{action('PageController@add',$product->id)}}" type="button" class="btn btn-dark pull-right">Add to Cart</a>
                        </div>
                      </div>
                    </div>
                    @endforeach
                    
                  </div>
                    
                </div>
        </div>
    </div>
@endsection
    