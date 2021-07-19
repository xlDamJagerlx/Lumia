@extends('layouts.HeaderFooter')
@extends('layouts.vistaproductos')
@section('products')
<link href="{{ asset('css/stylecartasproductos.css') }}" rel="stylesheet">

<div class="container">
    <div class="row">
        @forelse ($products as $item)
        <div class="card text-center col col-sm-4 h-100">
            <img class="card-img-top" src="{{$item->product_picture}}" alt="">
            <div class="card-body">
                <h4 class="card-title">{{ $item->product_name }}</h4>
                <p class="card-text">{{ $item->product_description }}</p>
                <h5>U$ {{ $item->product_price }}</h5>
            </div>
            <div class="card-footer">
                <form action="#" method="#">
                    @csrf
                    <input type="hidden" name="ID_PR" value="{{ $item->product_id }}">
                    <input type="hidden" name="product_code" value="{{ $item->product_code }}">
                    <input type="submit" id="addcart" value="Agregar" class="btn btn-primary">
                    <a class="btn btn-primary" href="#">Inspeccionar</a>
                </form>
            </div>
            
        </div>
        @empty
        @endforelse
    </div>
</div>

@endsection
@section('content')
@endsection
