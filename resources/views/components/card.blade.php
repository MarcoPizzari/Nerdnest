
<div class="card1 m-3">
  <img src="{{Storage::url($article->image)}}" class=" my-3 card-img-top figure-img img-fluid rounded immagini" alt="">
  <div class="card__content">
    <p class="card__title">{{$article->title}}</p>
    <p class="card-text text-truncate ">{{$article->subtitle}}</p>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div>
                    <a href="{{route('article.byCategory', ['category'=> $article->category->id])}}" class="small text-muted fst-italic text-capitalize ">{{$article->category->name}}</a>
               </div>
                <div>
                    <a href="{{route('article.byUser', ['user'=> $article->user->id])}}" class="small text-muted fst-italic text-capitalize ">{{$article->user->name}}</a>
                </div>
            </div>
            <div class="col-6">
                <p class="small fst-italic text capitalize">
                    @foreach ($article->tags as $tag)
                        #{{$tag->name}}
                    @endforeach
                </p>
            </div>
        </div>
    </div>
   
    
    <div class="card-footer text-muted d-flex justify-content-between align-items-center">
        redatto il {{$article->created_at->format('d/m/Y')}} da {{$article->user->name}}
        <a href="{{route('article.show', compact('article'))}}" class="btn ">leggi</a>
    </div>
  </div>
</div>
