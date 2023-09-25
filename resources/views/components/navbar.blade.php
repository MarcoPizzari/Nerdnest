<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <div class="logonav mx-3">
      
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
          @if(Auth::user()->is_writer)
            <li><a class="nav-link active" href="{{route('writer.dashboard')}}">Dashboard del redattore</a></li>
          @endif
          <div class="robalogout">
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
          </div>
        @endauth
        @guest
            <div class="loginregister">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('register')}}">Register</a>
              </li>
              <li class="nav-item">
              <a class="nav-link text-dark"  href="{{route('login')}}">Login</a>
              </li>
            </div>
            
        @endguest
      </ul>
    </div>
  </div>
</nav>


 <form method="GET" action="{{route('article.search')}}" class="formsearch">
    <div class="searchbarcontainer active" id="searchbarcontainer">
      <i class="fa-solid fa-magnifying-glass magnify" id="magnify"></i>
      <input type="search" name="query" class="input inputsearchbar" id="inputsearchbar" placeholder="cosa stai cercando?">
      <button id="btn" class="ui-btn  btn btn-outline btnsearch d-none opacity-0" type="submit">
        <span>
          Cerca
        </span> 
      </button>
    </div>
 </form>
  {{-- <div class="containersearch " >
    <form class="d-flex bg-info" method="GET" action="{{route('article.search')}}">
      <div class="input-container m-3">
        <input type="search" name="query" placeholder="Cosa stai cercando?" class="inputsearch" >
        <svg   xmlns="http://www.w3.org/2000/svg" fill="" viewBox="0 0 24 24" class="iconsearch"><g stroke-width="0" id="SVGRepo_bgCarrier"></g><g stroke-linejoin="round" stroke-linecap="round" id="SVGRepo_tracerCarrier"></g><g id="SVGRepo_iconCarrier"> <rect fill="white" height="24" width="24"></rect> <path fill="" d="M2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22C6.47715 22 2 17.5228 2 12ZM9 11.5C9 10.1193 10.1193 9 11.5 9C12.8807 9 14 10.1193 14 11.5C14 12.8807 12.8807 14 11.5 14C10.1193 14 9 12.8807 9 11.5ZM11.5 7C9.01472 7 7 9.01472 7 11.5C7 13.9853 9.01472 16 11.5 16C12.3805 16 13.202 15.7471 13.8957 15.31L15.2929 16.7071C15.6834 17.0976 16.3166 17.0976 16.7071 16.7071C17.0976 16.3166 17.0976 15.6834 16.7071 15.2929L15.31 13.8957C15.7471 13.202 16 12.3805 16 11.5C16 9.01472 13.9853 7 11.5 7Z" clip-rule="evenodd" fill-rule="evenodd"></path> </g></svg>
        <button id="btn" class=" btnall btn btn-outline d-none" type="submit">Cerca</button>
      </div>
    </form>
  </div> --}}




