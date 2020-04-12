@extends('layouts.app')

@section('content')
<section class="container">

<h4>Criar categoria</h4>
<hr>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form class="col-md-6 offset-md-3"
    autocomplete="false"
    method="POST" action="/categories/save"
>
@csrf
    <div class="form-group">
        <label for="name">Nome</label>
        <input type="text"
        autofocus="true"
            maxlength="60"
            placeholder="exemplo frontend, backend, etc"
            id="name"
            name="name"
            class="form-control"
        >
    </div>
    <button
        type="submit"
        class="btn btn-outline-primary btn-block"
    >
        Salvar categoria
    </button>

</form>
</section>
@endsection