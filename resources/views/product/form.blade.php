<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">ID de producto
            {{ Form::text('product_id', $product->product_id, ['class' => 'form-control' . ($errors->has('product_id') ? ' is-invalid' : ''), 'placeholder' => 'Product Id']) }}
            {!! $errors->first('product_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">Código de producto
            {{ Form::text('product_code', $product->product_code, ['class' => 'form-control' . ($errors->has('product_code') ? ' is-invalid' : ''), 'placeholder' => 'Product Code']) }}
            {!! $errors->first('product_code', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">Nombre de producto
            {{ Form::text('product_name', $product->product_name, ['class' => 'form-control' . ($errors->has('product_name') ? ' is-invalid' : ''), 'placeholder' => 'Product Name']) }}
            {!! $errors->first('product_name', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">Descripción de producto
            {{ Form::text('product_description', $product->product_description, ['class' => 'form-control' . ($errors->has('product_description') ? ' is-invalid' : ''), 'placeholder' => 'Product Description']) }}
            {!! $errors->first('product_description', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">Precio de producto
            {{ Form::text('product_price', $product->product_price, ['class' => 'form-control' . ($errors->has('product_price') ? ' is-invalid' : ''), 'placeholder' => 'Product Price']) }}
            {!! $errors->first('product_price', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">Stock de producto
            {{ Form::text('product_stock', $product->product_stock, ['class' => 'form-control' . ($errors->has('product_stock') ? ' is-invalid' : ''), 'placeholder' => 'Product Stock']) }}
            {!! $errors->first('product_stock', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">Id categoría de producto
            {{ Form::text('product_idcategory', $product->product_idcategory, ['class' => 'form-control' . ($errors->has('product_idcategory') ? ' is-invalid' : ''), 'placeholder' => 'Product Idcategory']) }}
            {!! $errors->first('product_idcategory', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">Id subcategoría de producto
            {{ Form::text('product_idsubcategory', $product->product_idsubcategory, ['class' => 'form-control' . ($errors->has('product_idsubcategory') ? ' is-invalid' : ''), 'placeholder' => 'Product Idsubcategory']) }}
            {!! $errors->first('product_idsubcategory', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">Foto de producto
            {{ Form::file('product_picture', $product->product_picture, ['class' => 'form-control' . ($errors->has('product_picture') ? ' is-invalid' : ''), 'placeholder' => 'Product Picture']) }}
            {!! $errors->first('product_picture', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
