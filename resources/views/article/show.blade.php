<x-layout>
    <div class="container-fluid p-5 text-center ">
        <div class="row justify-content-center">
            <h1 class="p-2  text-center text-white"> {{$article->title}}</h1>
        </div>
    </div> 


<div class="container text-white">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6">
            <div class="card">
                <img src="{{Storage::url($article->image)}}" class="card-img-top" alt="">
                <div class="card-body container">
                    <h2 class="card-text">{{$article->subtitle}}</h2>    
                    <div class="row ">
                        <div class="col-6">
                            <p class="small text-muted fst-italic text-capatalize ">{{$article->category->name}}</p>
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
            </div>
        </div>
        <div class="col-12 col-md-6 text-white">
            <div class="card-footer text-muted d-flex justify-content-between align-items-center">
                <p class="text-white">redatto da {{$article->user->name}} il {{$article->created_at->format('d/m/Y')}}</p>
            </div>
            @if(Auth::user() && Auth::user()->is_revisor)
                <a href="{{route('revisor.acceptArticle',compact('article'))}}" class="btn buttonattiva border1  text-white my-5"> Accetta articolo</a>
                <a href="{{route('revisor.rejectArticle',compact('article'))}}" class="btn buttonattiva  border3 text-white my-5"> Rifiuta articolo</a>
            @endif
            <hr>
            <h4>"{{$article->body}}"</h4>
            <div class= "text-center tastinodettagli">
                <a href="{{route('article.index')}}" class= "btn buttonattiva text-white text-white my-5"> torna indietro</a>
            </div>        
        </div>   
    </div>
</div>

</x-layout>


