@extends('layouts.app')



@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Список продуктов</h1>
        <a href="{{ route('products.create') }}" class="btn btn-primary">Добавить</a>
    </div>
    <hr />

    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
        <tr>
            <th>#</th>
            <th>Наименование </th>
            <th>Цена</th>
            <th>Код продукта</th>
            <th>Описание</th>
            <th>Действие</th>
        </tr>
        </thead>
        <tbody>+
        @if($product->count() > 0)
            @foreach($product as $rs)
                <tr>
                    <td class="align-middle">{{ $loop->iteration }}</td>
                    <td class="align-middle">{{ $rs->title }}</td>
                    <td class="align-middle">{{ $rs->price }}</td>
                    <td class="align-middle">{{ $rs->product_code }}</td>
                    <td class="align-middle">{{ $rs->description }}</td>
                    <td class="align-middle">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ route('products.show', $rs->id) }}" type="button" class="btn btn-secondary">Деталь</a>
                            <a href="{{ route('products.edit', $rs->id)}}" type="button" class="btn btn-warning">Изменить</a>
                            <form action="{{ route('products.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Вы уверены, что хотите удалить ?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger m-0">Удалить</button>
                            </form>
                        </div>
                    </td>

                </tr>
            @endforeach
            <tr>

                <td class="text-right" colspan="6"> Количество товаров: {{$rs->count()}}</td>


            </tr>
        @else
            <tr>
                <td class="text-center" colspan="6">Товар не найден</td>
            </tr>
        @endif

        </tbody>
    </table>
@endsection
