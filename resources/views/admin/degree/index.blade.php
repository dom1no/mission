@extends('admin.index')

@section('content')
    <h1>
        Справочник ученых степеней
        <a href="{{ route('admin.degree.create') }}" class="btn btn-success">
            Добавить
        </a>
    </h1>

    <table class="table">
        <thead>
            <th>#</th>
            <th>Название</th>
            <th>Действия</th>
        </thead>
        <tbody>
            @foreach($degrees as $degree)
                <tr>
                    <td>{{ $degree->id }}</td>
                    <td>{{ $degree->name }}</td>
                    <td>
                        <form action="{{ route('admin.degree.destroy', $degree) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="{{ route('admin.degree.edit', $degree) }}" class="btn btn-primary">
                                Редактировать
                            </a>
                            <button class="btn btn-danger">Удалить</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection