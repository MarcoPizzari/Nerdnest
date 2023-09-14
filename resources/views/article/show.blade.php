<x-layout>
    <div class="container-fluid p-5 text-center ">
        <div class="row justify-content-center">
            <h2 class="p-2  text-center text-white">{{$article->title}}</h2>
        </div>
    </div> 


<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6">
            <div class="card">
                <img src="{{Storage::url($article->image)}}" class="card-img-top" alt="">
                <div class="card-body">
                <h2 class="card-text">{{$article->subtitle}}</h2>    
                    <p class="small text-muted fst-italic text-capatalize ">{{$article->category->name}}</p>
                </div>
                <div class="card-footer text-muted d-flex justify-content-between align-items-center">
                    <p>redatto da {{$article->user->name}} il {{$article->created_at->format('d/m/Y')}}</p>
                </div>
            <hr>
           <p>{{$article->body}}</p>
           <div class= "text-center">
                <a href="{{route('article.index')}}" class= "btn btn-info text-white my-5"> torna indietro</a>
                </div>    
            </div>
        </div>
        
    </div>
</div>

</x-layout>


<form class="p-5" action="" method="">
    @csrf
    <div class="mb-3">
        <label for="role" class="form-label">
            per quale ruolo ti stai candidando?
        </label>
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
    


</form>