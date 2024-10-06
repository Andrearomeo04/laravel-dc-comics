@extends('layouts.app')

@section('content')
<div class="bg-black py-5">
         <div class="container">
             <div class="row">
                <div class="col-12">
                        <div class="thumbnail d-flex justify-content-start">
                            <img src="{{ $comic['thumb'] }}" alt="" class="img-fluid">
                        </div>
                        <div class="d-flex">
                            <h2 class="text-center">{{ $comic['title'] }}</h2>
                            <a href="{{ route('comics.edit', ['comic' => $comic->$id]) }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                        </div>
                        <p>{{ $comic['description'] }}</p>
                        <p>{{ $comic['type'] }}</p>
                        <h5>{{ $comic['price'] }}</h5>
                        <p>{{ $comic['sale_date'] }}</p>
                </div>  
             </div>
         </div>
     </div>
@endsection