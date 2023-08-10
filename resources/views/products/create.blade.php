@extends('layouts.app')


@section('contents')
    <h1 class="mb-0">Добавить продукт</h1>
    <hr />
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="title" class="form-control" placeholder="Наименование">
            </div>
            <div class="col">
                <input type="text" name="price" class="form-control" placeholder="Цена">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="product_code" class="form-control" placeholder="Код продукта">
            </div>
            <div class="col">
                <textarea class="form-control" name="description" placeholder="Описание"></textarea>
            </div>
        </div>

        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </div>
        </div>
    </form>
@endsection
