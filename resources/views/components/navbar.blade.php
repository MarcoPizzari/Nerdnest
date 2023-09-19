<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <div class="logo mx-3">
      
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('article.index')}}">Tutti gli articoli</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('careers')}}">Lavora con noi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="{{route('article.create')}}">Inserisci un articolo</a>
        </li>
        @auth    
        
        @if(Auth::user()->is_admin)
          <li><a class="nav-link active" href="{{route('admin.dashboard')}}">Dashboard admin</a></li>
        @endif
        
        @if(Auth::user()->is_revisor)
          <li><a class="nav-link active" href="{{route('revisor.dashboard')}}">Dashboard del revisore</a></li>
        @endif
        
        <li class="nav-item">
            <a class="nav-link benvenuto  " aria-current="page" href="#" role="button" >Benvenuto {{Auth::user()->name}}</a>
        </li>
        
        <form action="{{route('logout')}}" method="POST" id="form-logout">
            @csrf
            <button class="ui-btn" >
            <span>
              Logout
            </span> 
          </button>
        </form>
        
        @endauth
        @guest
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('register')}}">Register</a>
            </li>

            <li class="nav-item">
            <a class="nav-link" href="{{route('login')}}">Login</a>
            </li>
        @endguest
      </ul>
    </div>
  </div>
</nav>

