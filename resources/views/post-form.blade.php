@extends('layouts.app')

@section('content')
<section class="container">

<h4>Criar post</h4>
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
<form class="col-md-10 offset-md-1"
    autocomplete="false"
    method="POST" action="/posts/save"
    enctype="multipart/form-data"
   
>
@csrf
    <div class="form-group">
        <label for="title">Titulo</label>
        <input type="text"
        autofocus="true"
            maxlength="60"
            placeholder="exemplo: Declarando variáveis"
            id="title"
            name="title"
            class="form-control"
            required
        >
    </div>
    <div class="form-group">
    <label for="categoria"> Categoria</label>
        <select id="category" name="category" class="form-control" required>
        @foreach ($categorias as $cat)
                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
            @endforeach
                
        </select>
    </div>
        <div class="form-group">
            <label for="capa">Capa do post</label>
            <input type="file" class="form-control-file" id="capa" name="capa">
        </div>
        <textarea id="content" name="content">
            Conteudo aqui!
        </textarea>
    <button
        type="submit"
        class="btn btn-outline-primary btn-block mt-4"
    >
        Salvar Post
    </button>

</form>
</section>
@endsection