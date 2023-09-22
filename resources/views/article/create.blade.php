<x-layout>
    
    <div class="container text-white">
        <h2 class="my-4">Inserisci il nuovo articolo</h2>
        <div class="row">
                @if ($errors->any())
                <div class = "alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
                </div>
                @endif


            <form action="{{ route('article.store') }}"
                method="POST" enctype="multipart/form-data">
                @csrf
                <div class="d-flex justify-content-between">
                    <div class="col-12 col-md-6">
                        <div class="mb-3 mx-5">
                            <label class="form-label">Titolo</label>
                            <input type="text" class="form-control" name="title" >
                            
                        </div>
                        <div class="mb-3 mx-5">
                            <label class="form-label">Sottotitolo</label>
                            <input type="text" class="form-control" name="subtitle" >
                        
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <div class="mb-3 mx-5">
                            <label class="form-label">Immagine</label>
                            <input type="file" class="form-control" name="image" >
                        
                        </div>
                        <div class="mb-3 mx-5">
                            <label class="form-label">Categorie</label>
                            <select class="form-control text-capitalize" name="category" >
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                            </select>
                        </div>
                        <div class="mb3">
                            <label for="tags" class="form-label">tags:</label>
                            <input id="tags" class="form-control" value="{{old('tags')}}" name="tags">
                            <span class="small fst-italic">Dividi ogni tag con la virgola</span>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Corpo del testo</label>
                    <textarea class="form-control" name="body" cols="30" rows="8"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Inserisci un articolo</button>
            </form>
        </div>
    </div>
    
</x-layout>



