@extends('admin.index')

@section('content')
    @include('admin.degree.form', [
        'title' => "Редактирование ученой степени #{$degree->id}",
        'action' => route('admin.degree.update', $degree),
        'method' => 'PUT',
    ])
@endsection