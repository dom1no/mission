@extends('admin.index')

@section('content')
    <h1>
        Application #{{ $application->id }}
        <a href="{{ route('admin.application.index') }}" class="btn btn-sm btn-primary">
            К списку
        </a>
    </h1>

    <dl class="row">
        <dt class="col-sm-3">#</dt>
        <dd class="col-sm-9">{{ $application->id }}</dd>

        <dt class="col-sm-3">ФИО</dt>
        <dd class="col-sm-9">{{ $application->full_name }}</dd>

        <dt class="col-sm-3">Email</dt>
        <dd class="col-sm-9">{{ $application->email }}</dd>

        <dt class="col-sm-3">Специализация врача</dt>
        <dd class="col-sm-9">{{ $application->specialization->name ?? '-' }}</dd>

        <dt class="col-sm-3">Ученая степень врача</dt>
        <dd class="col-sm-9">{{ $application->degree->name ?? '-' }}</dd>

        <dt class="col-sm-3">Описание</dt>
        <dd class="col-sm-9">{{ $application->description }}</dd>

        <dt class="col-sm-3">Дата приема</dt>
        <dd class="col-sm-9">{{ $application->reception_at->toDateTimeString() }}</dd>

        <dt class="col-sm-3">Оплачена</dt>
        <dd class="col-sm-9">
            @if ($application->is_paid)
                Да
            @else
                Нет
                <a href="{{ route('admin.application.paid', $application) }}" class="btn btn-sm btn-success">
                    Оплачена
                </a>
            @endif
        </dd>
    </dl>
@endsection