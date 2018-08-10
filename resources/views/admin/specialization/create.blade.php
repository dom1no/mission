@extends('admin.index')

@section('content')
    @include('admin.specialization.form', [
        'title' => 'Добавление специализации',
        'action' => route('admin.specialization.store')
    ])
@endsection