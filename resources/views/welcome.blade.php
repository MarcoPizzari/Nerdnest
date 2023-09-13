<x-layout>
<x-masthead />
<div class="container-fluid p-5 text-center ">
    <div class="row justify-content-center">
        <h2>Ultimi articoli</h2>
    </div>
</div>
@if(session('message'))
    <div class="alert alert-success text-center">
        {{session('message')}}
    </div>
@endif

@if ($articles->IsEmpty())
    <p>Non ci sono articoli in archivio</p>
@else

<div class="container">
    <div class="row justify-content-around">
        @foreach ($articles as $article)
        <x-card :article="$article" />
        @endforeach
    </div>
</div>


@endif

</x-layout>