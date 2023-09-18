
  <div class="row">
    <div class="col-12 ">
      @if(session('message'))
          <div class="alert alert-success text-center">
              {{session('message')}}
          </div>
      @endif
    </div>
  </div>

<header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12 text-center titolobg">
          <h1 class="fw-light titolo">NerdNest</h1>
          <p class="lead titolo">Hardware e Umorismo che Funzionano</p>
        </div>
      </div>
    </div>
  </header>