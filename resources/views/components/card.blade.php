
<div class="card1 m-3">
  <img src="{{Storage::url($article->image)}}" class=" my-3 card-img-top figure-img img-fluid rounded immagini" alt="">
  <div class="card__content">
   <h3 class="card__title"> {{$article->title}}</h3>
    <h5 class="card-text text-truncate ">{{$article->subtitle}}</h5>
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div>
                    @if ($article->category)
                        
                    
                        <a class="bianco small text-muted fst-italic text-capitalize " href="{{route('article.byCategory', ['category'=> $article->category->id])}}" >{{$article->category->name}}</a>
                    @else
                        <p class="small text_muted fst-italic text-capitalize">
                        non categorizzato
                        </p>
                    @endif
               </div>
                <div>
                    <a href="{{route('article.byUser', ['user'=> $article->user->id])}}" class="small text-muted fst-italic text-capitalize bianco">{{$article->user->name}}</a>
                </div>
            </div>
            <div class="col-6">
                <p class="small fst-italic text capitalize ">
                    @foreach ($article->tags as $tag)
                        #{{$tag->name}}
                    @endforeach
                </p>
            </div>
        </div>
    </div>
   
    
    <div class="bianco card-footer text-muted d-flex justify-content-between align-items-center bianco">
        redatto il {{$article->created_at->format('d/m/Y')}} da {{$article->user->name}}
        <a href="{{route('article.show', compact('article'))}}" class="btn bianco leggi">leggi</a>
    </div>
  </div>
</div>
