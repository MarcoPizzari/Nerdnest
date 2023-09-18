<x-layout>

    <div class="container-fluid p-5  text-center text-white">
        <div class="row justify-content-center">
            <h1>
                Categoria: {{$category->name}}
            </h1>
        </div>
    </div>

    <div class="container ">
        <div class="row justify-content-around">
            @foreach ($articles as $article)
            <x-card :article="$article" />
            @endforeach
        </div>
    </div>
</x-layout>
