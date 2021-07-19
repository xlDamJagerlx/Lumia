@extends('layouts.app')

@section('template_title')
    {{ $product->name ?? 'Show Product' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Resumen de producto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Id de producto:</strong>
                            {{ $product->product_id }}
                        </div>
                        <div class="form-group">
                            <strong>Código de producto:</strong>
                            {{ $product->product_code }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre de producto:</strong>
                            {{ $product->product_name }}
                        </div>
                        <div class="form-group">
                            <strong>Descripción de producto:</strong>
                            {{ $product->product_description }}
                        </div>
                        <div class="form-group">
                            <strong>Precio de producto:</strong>
                            {{ $product->product_price }}
                        </div>
                        <div class="form-group">
                            <strong>Stock de producto:</strong>
                            {{ $product->product_stock }}
                        </div>
                        <div class="form-group">
                            <strong>Id categoría de producto:</strong>
                            {{ $product->product_idcategory }}
                        </div>
                        <div class="form-group">
                            <strong>Id subcategoría de producto:</strong>
                            {{ $product->product_idsubcategory }}
                        </div>
                        <div class="form-group">
                            <strong>Foto de producto:</strong>
                            {{ $product->product_picture }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
