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


</x-layout>