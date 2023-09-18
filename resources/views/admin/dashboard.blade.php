<x-layout>

<div class="container-fluid p-5 text-center">
    <div class="row justify-content-center">
        <h1 class="col-12">
            bentornato, amministratore
        </h1>
    </div>
</div>
@if(session('message'))
    <div class="alert alert-success text-center">
        {{session('message')}}
    </div>
@endif

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2>richieste per il ruolo amministratore<x-requests-table :roleRequest="$adminRequest" role="amministratore"/>
        </div>
    </div>
</div>
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2>richieste per il ruolo revisore</h2>
            <x-requests-table :roleRequest="$revisorRequest" role="revisore"/>
        </div>
    </div>
</div>
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2>richieste per il ruolo writer</h2>
            <x-requests-table :roleRequest="$writerRequest" role="redattore"/>
        </div>
    </div>
</div>


</x-layout>