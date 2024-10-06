@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="{{ route('comics.store') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <label for="" class="control-label">titolo</label>
                        <input type="text" name="title" class="form-control" placeholder="title" value="{{ $comic->title }}">
                    </div>
                    <div class="col-12">
                        <label for="" class="control-label">descrizione</label>
                        <input type="text" name="title" class="form-control" placeholder="description" value="{{ $comic->description }}">
                    </div>
                    <div class="col-12">
                        <label for="" class="control-label">tipo</label>
                        <input type="text" name="title" class="form-control" placeholder="type" value="{{ $comic->type }}">
                    </div>
                    <div class="col-12">
                        <label for="" class="control-label">prezzo</label>
                        <input type="text" name="title" class="form-control" placeholder="price" value="{{ $comic->price }}">
                    </div>
                    <div class="col-12">
                        <label for="" class="control-label">data uscita</label>
                        <input type="text" name="title" class="form-control" placeholder="sale date" value="{{ $comic->sale_date }}">
                    </div>
                    <div class="col-12">
                        <button type="submit">salva</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection