<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">progetto finale</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
        </li>
        @auth
        <li class="nav-item">
            <a class="nav-link  " aria-current="page" href="#" role="button" >benvenuto {{Auth::user()->name}}</a>
        </li>
        <li class="logout_1">        
            <a class="logout" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();"><button>logout</button></a>
        </li>
        <form action="{{route('logout')}}" method="POST" id="form-logout" class="d-none">
            @csrf
        </form>
        @endauth
        @guest
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('register')}}">register</a>
            </li>

            <li class="nav-item">
            <a class="nav-link" href="{{route('login')}}">login</a>
            </li>
        @endguest
      </ul>
    </div>
  </div>
</nav>