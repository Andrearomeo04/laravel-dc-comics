@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="{{ route('comics.store') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <label for="" class="control-label"></label>
                        <input type="text" name="title" class="form-control" placeholder="title">
                    </div>
                    <div class="col-12">
                        <label for="" class="control-label"></label>
                        <input type="text" name="title" class="form-control" placeholder="description">
                    </div>
                    <div class="col-12">
                        <label for="" class="control-label"></label>
                        <input type="text" name="title" class="form-control" placeholder="type">
                    </div>
                    <div class="col-12">
                        <label for="" class="control-label"></label>
                        <input type="text" name="title" class="form-control" placeholder="price">
                    </div>
                    <div class="col-12">
                        <label for="" class="control-label"></label>
                        <input type="text" name="title" class="form-control" placeholder="sale date">
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