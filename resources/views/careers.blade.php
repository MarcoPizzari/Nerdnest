<x-layout>
    <div class="row">
        <div class="col-12 ">
          @if(session('message'))
              <div class="alert alert-success text-center">
                  {{session('message')}}
              </div>
          @endif
        </div>
      </div>
    
    <div class="container-fluid p-5  text-center text-white">
        <div class="row justify-content-center">
            <h2 class="p-2  text-center text-white">Lavora con noi</h2>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center align-items-center border rounded p-2 shadow">
            <div class="col-12 col-md-6 text-white">
                <h2>Lavora come amministratore</h2>
                <p>Cosa farai: Lorem ipsum</p>
                <h2>Lavora come revisore</h2>
                <p>Cosa farai: Lorem ipsum</p>
                <h2>Lavora come redattore</h2>
                <p>Cosa farai: Lorem ipsum</p>
            </div>
            <div class="col-12 col-md-6 text-white">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form class="p-5" action="{{route('careers.submit')}}" method="POST">
                @csrf
    
                <div class="mb-3 text-white">
                    <label for="role" class="form-label">  per quale ruolo ti stai candidando?</label>
                    <select name="role" id="role" class="form-control">
                        <option value="">scegli qui</option>
                        <option value="admin">amministratore</option>
                        <option value="revisor">revisore</option>
                        <option value="writer">redattore</option>
                    </select>
                </div>
                <div class="mb-3 text-white">
                    <label for="email" class="form-label">email</label>
                    <input type="email" name="email" class="form-control" id="email" value="{{old('email')??Auth::user()->email}}">
                </div>
                <div class="mb-3 text-white">
                    <label for="message" class="form-label">parlaci di te</label>
                    <textarea type="message" name="message" class="form-control" id="message" >{{old('message')}}</textarea>
                </div>
                <div class="mt-2 text-white">
                    <button class="btn inviacanditatura text-white  btnall">Invia la candidatura</button>
                </div>
            </form>

        </div>
    </div>
</div>
</x-layout>