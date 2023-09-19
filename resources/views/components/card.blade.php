
<div class="col-12 col-md-3 m-5  card">
    <div class="card-group">
        <img src="{{Storage::url($article->image)}}" class=" my-3 card-img-top figure-img img-fluid rounded immagini" alt="">
        <div class="card-body">
            <h5 class="card-title text-truncate">{{$article->title}}</h5>
            <p class="card-text text-truncate ">{{$article->subtitle}}</p>
            <div>
                 <a href="{{route('article.byCategory', ['category'=> $article->category->id])}}" class="small text-muted fst-italic text-capitalize ">{{$article->category->name}}</a>
            </div>
           <div>
                <a href="{{route('article.byUser', ['user'=> $article->user->id])}}" class="small text-muted fst-italic text-capitalize ">{{$article->user->name}}</a>
            </div>
        </div>
        <div class="card-footer text-muted d-flex justify-content-between align-items-center">
            redatto il {{$article->created_at->format('d/m/Y')}} da {{$article->user->name}}
            <a href="{{route('article.show', compact('article'))}}" class="btn ">leggi</a>
        </div>
    </div>
</div>
