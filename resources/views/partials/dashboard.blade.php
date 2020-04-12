<div class="row">
    <div class="col-md-3">
        <ul class="list-group">
            <li class="list-group-item"><a href="{{ url('/categories') }}">Categories</a></li>
            <li class="list-group-item"><a href="{{ url('/posts') }}">Posts</a></li>
            <li class="list-group-item"><a href="{{ url('/users') }}">Users</a></li>
            <li class="list-group-item"><a href="{{ url('/subscriptions') }}">Subscriptions</a></li>
            <li class="list-group-item"><a href="{{ url('/settings') }}"><i class="fas fa-tools"></i>
Settings</a></li>
        </ul>
    </div>
    <div class="col-md-9">
    <div class="row row-cols-1 row-cols-md-2">
    <div class="col mb-4">
    <div class="card">
     
        <div class="card-body bg-success shadow">
            <h5 class="card-title"><span class="badge badge-light bolder">{{ $totalcategorias }}</span> Categorias</h5>
            <i class="fas fa-list fa-3x"></i>
            
        </div>
    
        <div class="card-footer bg-transparent">
         
          <a href="{{ url('/categories/new') }}" class="nav-link">+ Criar Categoria</a>
        </div>
    </div>
      
  </div>

  <div class="col mb-4">
    <div class="card">
     
        <div class="card-body bg-warning shadow">
            <h5 class="card-title"><span class="badge badge-secondary">{{ $totalusers }}</span> Usuarios</h5>
            <i class="fas fa-users fa-3x"></i>
            
        </div>
    
        <div class="card-footer bg-transparent">
         
          <a href="#" class="nav-link">+ Criar Usuario</a>
        </div>
    </div>
      
  </div>

  <div class="col mb-4">
    <div class="card">
     
        <div class="card-body bg-secondary primary">
            <h5 class="card-title"><span class="badge badge-light">{{ $totalposts }}</span> Posts</h5>
            <i class="fas fa-clone fa-3x"></i>
            
        </div>
    
        <div class="card-footer bg-transparent">
         
          <a href="/posts/new" class="nav-link">+ Criar Post</a>
        </div>
    </div>
      
  </div>

  <div class="col mb-4">
    <div class="card">
     
        <div class="card-body bg-danger shadow">
            <h5 class="card-title"><span class="badge badge-secondary">{{ $totalsubscriptions }}</span> Subscrições</h5>
            <i class="fas fa-newspaper fa-3x"></i>
            
        </div>
    
        <div class="card-footer bg-transparent">
         
          <a href="#" class="nav-link">+ Criar Conteúdo</a>
        </div>
    </div>
      
  </div>

</div>
    </div>
</div>