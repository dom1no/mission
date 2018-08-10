@extends('admin.index')

@section('content')
    <h1>
        Справочник специализаций
        <a href="{{ route('admin.specialization.create') }}" class="btn btn-success">
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
            @foreach($specializations as $specialization)
                <tr>
                    <td>{{ $specialization->id }}</td>
                    <td>{{ $specialization->name }}</td>
                    <td>
                        <form action="{{ route('admin.specialization.destroy', $specialization) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="{{ route('admin.specialization.edit', $specialization) }}" class="btn btn-primary">
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