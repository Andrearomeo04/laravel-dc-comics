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
                
                @endforeach  
             </div>
         </div>
     </div>
@endsection