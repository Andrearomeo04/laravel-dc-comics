@extendes('layout.app')

@section('content')
<div class="bg-black py-5">
         <div class="container">
             <div class="row">
                <div class="col-12">
                        <div class="thumbnail d-flex justify-content-start">
                            <img src="{{ $comic['thumb'] }}" alt="" class="img-fluid">
                        </div>
                        <h2 class="text-center">{{ $comic['title'] }}</h2>
                        <p>{{ $comic['description'] }}</p>
                        <p>{{ $comic['type'] }}</p>
                        <h5>{{ $comic['price'] }}</h5>
                        <p>{{ $comic['sale_date'] }}</p>
                </div>  
             </div>
         </div>
     </div>
@endsection