<x-layout>
    <div class="container-fluid p-5 bg-info text-center text-white">
        <div class="row justify-content-center">
            <h1 class="display-1">
                Lavora con noi
            </h1>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center align-items-center border rounded p-2 shadow">
            <div class="col-12 col-md-6">
                <h2>Lavora come amministratore</h2>
                <p>Cosa farai: Lorem ipsum</p>
                <h2>Lavora come revisore</h2>
                <p>Cosa farai: Lorem ipsum</p>
                <h2>Lavora come redattore</h2>
                <p>Cosa farai: Lorem ipsum</p>
            </div>
            <div class="col-12 col-md-6">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form class="p-5" action="" method="">
                @csrf
    
                <div class="mb-3">
                    <label for="role" class="form-label">            per quale ruolo ti stai candidando?</label>
                    <select name="role" id="role" class="form-control">
                        <option value="">scegli qui</option>
                        <option value="admin">amministratore</option>
                        <option value="revisor">revisore</option>
                        <option value="writer">redattore</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">email</label>
                    <input type="email" name="email" class="form-control" id="email" value="{{old('email')??Auth::user()->email}}">
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">parlaci di te</label>
                    <textarea type="message" name="message" class="form-control" id="message" >{{old('message')}}</textarea>
                </div>
                <div class="mt-2">
                    <button class="btn btn-info text-white">Invia la candidatura</button>
                </div>
            </form>

        </div>
    </div>
</div>
</x-layout>