<x-layout>

    <div class="container-fluid p-5  text-center text-white">
        <div class="row justify-content-center">
            <h1>
                Scrittore: {{$user->name}}
            </h1>
        </div>
    </div>

<br>
<br>
    <div class="container ">
        <div class="row justify-content-around">

            @foreach ($articles as $article)
            <x-card :article="$article" />
            @endforeach
        </div>
    </div>

<br>
<br>
<br>

</x-layout>