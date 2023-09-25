<x-layout>

    <div class="container-fluid p-5 text-center ">
        <div class="row justify-content-center">
            <h2 class="p-2  text-center text-white">Tutti gli articoli</h2>
        </div>
    </div>
    <div class="container text-white">
          <div class="row">
            <div class="col-12 col-md-8">
                @if ($errors->any())
                    <div class = "alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            
        
                <form action="{{ route('article.update', compact('article')) }}"
                    method="POST" enctype="multipart/form-data">
                    @csrf
                        @method('PUT')
                            <div class="mb-3 mx-5">
                                <label class="form-label" for="titolo">Titolo</label>
                                <input type="text" class="form-control" name="title" value="{{$article->title}}">
                                
                            </div>
                            <div class="mb-3 mx-5">
                                <label class="form-label" for="sottotitolo">Sottotitolo</label>
                                <input type="text" class="form-control" name="subtitle" value="{{$article->subtitle}}">
                                
                            </div>
                            <div class="mb-3 mx-5">
                                <label class="form-label" for="image">immagine</label>
                                <input type="file" class="form-control" name="image" >
                                
                            </div>
                            <div class="mb-3 mx-5">
                                <label class="form-label" for="category">category</label>
                                <select name="category" id="category" class="form-control text-capitalize">
                                    @foreach ($categories as $category)
                                        <option value="{{$category->id}}" @if(($article->category && $category->id) == $article->category->id) selected @endif>{{$category->name}}</option>
                                    @endforeach
                                </select>
                                <div class="mb-3">
                                    <label class="form-label" for="body">Corpo del testo</label>
                                    <textarea class="form-control" name="body" cols="30" rows="10">{{$article->body}}</textarea>
                            
                                </div>
                                <div class="mb3">
                                    <label for="tags" class="form-label">tags:</label>
                                    <input id="tags" class="form-control" name="tags" value="{{$article->tags->implode('name',', ')}}">
                                    <span class="small fst-italic ">Dividi ogni tag con la virgola</span>
                                </div>
                                <button type="submit" class="btn buttonattiva m-3">Inserisci un articolo</button>
                                <a class="btn  buttonattiva" href="{{route('home')}}">Torna alla home</a>
                            </div>
            
                    </form>     
            </div>
        </div>
    </div>
</x-layout>
