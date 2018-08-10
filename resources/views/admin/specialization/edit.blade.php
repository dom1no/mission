@extends('admin.index')

@section('content')
    @include('admin.specialization.form', [
        'title' => "Редактирование специализации #{$specialization->id}",
        'action' => route('admin.specialization.update', $specialization),
        'method' => 'PUT',
    ])
@endsection