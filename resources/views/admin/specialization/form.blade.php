<h1>
    {{ $title }}
    <a href="{{ route('admin.specialization.index') }}" class="btn btn-sm btn-primary">
        К списку
    </a>
</h1>

<form action="{{ $action }}" method="POST">
    @csrf
    @method($method ?? 'POST')
    <div class="form-group">
        <label for="name">Название</label>
        <input type="text" name="name"
               class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
               id="name"
               value="{{ old('name', $specialization->name ?? '') }}"
        />

        @if ($errors->has('name'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>
    <button type="submit" class="btn btn-success">Сохранить</button>
</form>