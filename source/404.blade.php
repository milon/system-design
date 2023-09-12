@extends('_layouts.master')

@section('body')
<div class="flex flex-col items-center mt-32 text-gray-700">
    <h1 class="text-6xl font-light leading-none mb-2">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 493.70344543457054 320.87881181789817" width="300" height="200">
  <!-- svg-source:excalidraw -->
  
  <defs>
    <style class="style-fonts">
      @font-face {
        font-family: "Virgil";
        src: url("https://excalidraw.com/Virgil.woff2");
      }
      @font-face {
        font-family: "Cascadia";
        src: url("https://excalidraw.com/Cascadia.woff2");
      }
    </style>
    
  </defs>
  <g transform="translate(10 10) rotate(0 236.85172271728527 150.43940590894908)"><text x="0" y="0" font-family="Virgil, Segoe UI Emoji" font-size="240.70304945431846px" fill="#1e1e1e" text-anchor="start" style="white-space: pre;" direction="ltr" dominant-baseline="text-before-edge">404</text></g></svg>
    </h1>

    <h2 class="text-3xl">Page not found</h2>

    <hr class="block w-full max-w-lg mx-auto my-8 border">

    <p class="text-xl">
        Sorry, this page doesn't exists. Rather visit the <a title="Home" href="/">Home</a> page.
    </p>
</div>
@endsection
