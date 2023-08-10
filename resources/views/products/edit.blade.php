@extends('layouts.app')


@section('contents')
    <h1 class="mb-0">Редактировать продукт</h1>
    <hr />
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Наименование</label>
                <input type="text" name="title" class="form-control" placeholder="Наименование" value="{{ $product->title }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Цена</label>
                <input type="text" name="price" class="form-control" placeholder="Цена" value="{{ $product->price }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Код продукта</label>
                <input type="text" name="product_code" class="form-control" placeholder="Код продукта" value="{{ $product->product_code }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Описание</label>
                <textarea class="form-control" name="description" placeholder="Описание" >{{ $product->description }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Обновлять</button>
            </div>
        </div>
    </form>
@endsection
