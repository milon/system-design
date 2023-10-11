---
permalink: 404.html
---

@extends('_layouts.master')

@section('body')
<div class="flex flex-col items-center mt-32 text-gray-700">
    <h1 class="text-6xl font-light leading-none mb-2">
        <img src="/assets/img/404.png" alt="404" class="m-auto w-1/2"/>
    </h1>

    <h2 class="text-3xl">Page not found</h2>

    <hr class="block w-full max-w-lg mx-auto my-8 border">

    <p class="text-xl">
        Sorry, this page doesn't exists. Rather visit the <a title="Home" href="/">Home</a> page.
    </p>
</div>
@endsection
