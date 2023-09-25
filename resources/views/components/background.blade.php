<main>

    <!-- This div is  intentionally blank. It creates the transparent black overlay over the video which you can modify in the CSS -->
    <div class="overlay"></div>

    <!-- The HTML5 video element that will create the background video on the main -->
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
        <source src="./../video/main.mp4" type="video/mp4">
    </video>


<div class="  ">
    {{ $slot }}
</div>

</main>