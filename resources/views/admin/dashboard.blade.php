<x-layout>

<div class="container-fluid p-5 text-center">
    <div class="row justify-content-center">
        <h1 class="col-12">
            Bentornato, amministratore
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
            <h2>Richieste per il ruolo amministratore</h2>
            <h3><x-requests-table :roleRequest="$adminRequest" role="amministratore"/></h3>
        </div>
    </div>
</div>
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2>Richieste per il ruolo revisore</h2>
            <h3><x-requests-table :roleRequest="$revisorRequest" role="revisore"/></h3>
        </div>
    </div>
</div>
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2>Richieste per il ruolo writer</h2>
            <h3><x-requests-table :roleRequest="$writerRequest" role="redattore"/></h3>
        </div>
    </div>
</div>


</x-layout>