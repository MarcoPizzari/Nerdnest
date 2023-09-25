<x-layout>
    

    <div class="container-fluid p-5 text-center ">
        <div class="row justify-content-center">
            <h2 class="p-2  text-center text-white ">Tutti gli articoli</h2>
        </div>
    </div>

    <div class="container ">
        <div class="row container_article justify-content-around">
            @foreach ($articles as $article)
            <x-card :article="$article" />
            @endforeach
        </div>
    </div>
    
</x-layout>

