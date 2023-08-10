@extends('layouts.app')


@section('contents')
    <h1 class="mb-0">Подробный продукт</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Наименование</label>
            <input type="text" name="title" class="form-control" placeholder="Наименование" value="{{ $product->title }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Цена</label>
            <input type="text" name="price" class="form-control" placeholder="Цена" value="{{ $product->price }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Код продукта</label>
            <input type="text" name="product_code" class="form-control" placeholder="Код продукта" value="{{ $product->product_code }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Описание</label>
            <textarea class="form-control" name="description" placeholder="Описание" readonly>{{ $product->description }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Создан в</label>
            <input type="text" name="created_at" class="form-control" placeholder="Создан в" value="{{ $product->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Обновлено в</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Обновлено в" value="{{ $product->updated_at }}" readonly>
        </div>
    </div>
@endsection
