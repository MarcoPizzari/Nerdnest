<x-layout>

<div class="container-fluid p-5 text-center text-white">
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

<div class="container my-5 text-white">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2>Richieste per il ruolo amministratore</h2>
            <h5><x-requests-table :roleRequest="$adminRequest" role="amministratore"/></h5>
        </div>
    </div>
</div>
<div class="container my-5 text-white">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2>Richieste per il ruolo revisore</h2>
            <h5><x-requests-table :roleRequest="$revisorRequest" role="revisore"/></h5>
        </div>
    </div>
</div>
<div class="container my-5 text-white">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2>Richieste per il ruolo writer</h2>
            <h5><x-requests-table :roleRequest="$writerRequest" role="redattore"/></h5>
        </div>
    </div>
</div>

<hr>
<div class="container my-5 text-white">
    <div class="row justifu-content-center">
        <div class="col-12">
            <h2>I tags della piattaforma</h2> 
            <h5><x-metainfo-table :metaInfos="$tags" metaType="tags"/></h5>
        </div>
    </div>
</div>
<hr>
<div class="container my-5 text-white">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2>le categorie della piattaforma</h2> 
            <h5><x-metainfo-table :metaInfos="$categories" metaType="categorie"/></h5>
            <form class="d-flex" action="{{route('admin.storeCategory')}}" method="POST">
                @csrf
                <input type="text" name="name" class="form-control me-2" placeholder="Inserisci una nuova categoria">
                <button type="submit" class="btn btn-success text-white btnall">Aggiungi</button>
            </form>
        </div>
    </div>
</div>
</x-layout>