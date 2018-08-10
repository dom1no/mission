@extends('admin.index')

@section('content')
    @include('admin.degree.form', [
        'title' => 'Добавление ученой степени',
        'action' => route('admin.degree.store')
    ])
@endsection