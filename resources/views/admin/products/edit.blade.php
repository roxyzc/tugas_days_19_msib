@extends('admin.layouts.admin')

@section('title', __('views.admin.products.edit.title', ['name' => $product->name]))

@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        {{ Form::open(['route' => ['admin.products.update', $product->id], 'method' => 'put', 'class' => 'form-horizontal form-label-left']) }}

        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">
                {{ __('views.admin.products.edit.name') }}
                <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="name" type="text" value="{{ old('name', $product->name) }}" class="form-control col-md-7 col-xs-12 @if($errors->has('name')) parsley-error @endif" name="name" required>
                @if($errors->has('name'))
                <ul class="parsley-errors-list filled">
                    @foreach($errors->get('name') as $error)
                    <li class="parsley-required">{{ $error }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="sku">
                {{ __('views.admin.products.edit.SKU') }}
                <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="sku" type="text" value="{{ old('sku', $product->sku) }}" class="form-control col-md-7 col-xs-12 @if($errors->has('sku')) parsley-error @endif" name="sku" required>
                @if($errors->has('sku'))
                <ul class="parsley-errors-list filled">
                    @foreach($errors->get('sku') as $error)
                    <li class="parsley-required">{{ $error }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="price">
                {{ __('views.admin.products.edit.price') }}
                <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="price" type="text" value="{{ old('price', $product->price) }}" class="form-control col-md-7 col-xs-12 @if($errors->has('price')) parsley-error @endif" name="price" required>
                @if($errors->has('price'))
                <ul class="parsley-errors-list filled">
                    @foreach($errors->get('price') as $error)
                    <li class="parsley-required">{{ $error }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="stock">
                {{ __('views.admin.products.edit.stock') }}
                <span class="required">*</span>
            </label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input id="stock" type="text" value="{{ old('stock', $product->stock) }}" class="form-control col-md-7 col-xs-12 @if($errors->has('stock')) parsley-error @endif" name="stock" required>
                @if($errors->has('stock'))
                <ul class="parsley-errors-list filled">
                    @foreach($errors->get('stock') as $error)
                    <li class="parsley-required">{{ $error }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                <a class="btn btn-primary" href="{{ route('admin.products') }}"> {{ __('views.admin.products.create.cancel') }}</a>
                <button type="submit" class="btn btn-success"> {{ __('views.admin.products.edit.update') }}</button>
            </div>
        </div>
        {{ Form::close() }}
    </div>
</div>
@endsection
