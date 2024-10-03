@extends('layouts.app')

@section('content')


<!-- jumbo section -->
    <div class="jumbo">
        <div class="container">
            <div class="row"></div>
        </div>
    </div>

    <!-- comics section -->
     <div class="bg-black py-5">
         <div class="container">
             <div class="row">
                 @foreach($comics as $comic)
                <div class="col-4">
                        <div class="thumbnail d-flex justify-content-center">
                            <img src="{{ $comic['thumb'] }}" alt="">
                        </div>
                        <h2 class="text-center">{{ $comic['title'] }}</h2>
                </div>
                @endforeach  
             </div>
         </div>
     </div>
@endsection