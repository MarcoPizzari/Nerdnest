<x-layout>

    <div class="container-fluid p-5 text-center text-white">
        <div class="row justify-content-center">
            <h1 class="col-12">
                Bentornato, revisore
            </h1>
        </div>
    </div>
    @if(session('message'))
        <div class="alert alert-success text-center">
            {{session('message')}}
        </div>
    @endif
    
    <div class="container my-5 text-white">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Articoli da revisionare</h2>
                <h5><x-articles-table :articles="$unrevisionedArticles" /></h5>
            </div>
        </div>
    </div>
    <div class="container my-5 text-white">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Articoli publicati</h2>
                <h5><x-articles-table :articles="$acceptedArticles" /></h5>
            </div>
        </div>
    </div>
    <div class="container my-5 text-white">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Articoli respinti</h2>
                <h5><x-articles-table :articles="$rejectedArticles" /></h5>
            </div>
        </div>
    </div>
    
    
    </x-layout>