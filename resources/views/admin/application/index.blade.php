@extends('admin.index')

@section('content')
    <h1>Application</h1>

    <table class="table">
        <thead>
            <th>#</th>
            <th>ФИО</th>
            <th>Email</th>
            <th>Дата приема</th>
            <th>Оплачена</th>
            <th>Действия</th>
        </thead>
        <tbody>
            @foreach($applications as $application)
                <tr>
                    <td>{{ $application->id }}</td>
                    <td>{{ $application->full_name }}</td>
                    <td>{{ $application->email }}</td>
                    <td>{{ $application->reception_at->toDateTimeString() }}</td>
                    <td>{{ $application->is_paid ? 'Да' : 'Нет' }}</td>
                    <td>
                        <a href="{{ route('admin.application.show', $application) }}" class="btn btn-primary">
                            Посмотреть
                        </a>
                        @if (!$application->is_paid)
                            <a href="{{ route('admin.application.paid', $application) }}" class="btn btn-success">
                                Оплачена
                            </a>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {!! $applications->render() !!}
@endsection