<x-layout>
<x-masthead />



<main>
    <div class="container-fluid p-5 text-center  ">
        <div class="row justify-content-center">
            <h2 class="p-2  text-center text-white ultimiarticoli">Ultimi articoli</h2>
        </div>
    </div>
    
    
    @if ($articles->IsEmpty())
        <p>Non ci sono articoli in archivio</p>
    @else
    
    
    <!-- This div is  intentionally blank. It creates the transparent black overlay over the video which you can modify in the CSS -->
    <div class="overlay"></div>
  
    <!-- The HTML5 video element that will create the background video on the main -->
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
      <source src="./video/main.mp4" type="video/mp4">
    </video>
  
    <!-- The main content -->
    <div class="container container_article h-100">
        <div class="row justify-content-around">
            @foreach ($articles as $article)
            <x-card :article="$article" />
            @endforeach
        </div>
    </div>
</main>

@endif
 
</x-layout>