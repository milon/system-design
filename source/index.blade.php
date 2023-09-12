@extends('_layouts.master')

@section('body')
<section class="container max-w-6xl mx-auto px-6 py-10 md:py-12">
    <div class="flex flex-col-reverse mb-10 lg:flex-row lg:mb-24">
        <div class="mt-8 mr-8">
            <h1 id="intro-docs-template">{{ $page->siteName }}</h1>

            <h2 id="intro-powered-by-jigsaw" class="font-light mt-4">{{ $page->siteDescription }}</h2>

            <p class="text-lg">Unlock the secrets to acing system design interviews with our comprehensive course. Master the art of designing scalable and efficient systems to not only secure your dream job in tech but also have real world insight of how scalable systems do actually wokrs!</p>

            <div class="flex my-10">
                <a href="/getting-started" title="{{ $page->siteName }} getting started" class="bg-blue-500 hover:bg-blue-600 font-semibold text-white hover:text-white rounded mr-4 py-2 px-6">Get Started</a>
            </div>
        </div>

        <img src="/assets/img/logo-large.png" width="380px" alt="{{ $page->siteName }} large logo" class="mx-auto mb-6 lg:mb-0 ">
    </div>

    <hr class="block my-8 border lg:hidden">

    <div class="md:flex -mx-2 -mx-4">
        <div class="mb-8 mx-3 px-2 md:w-1/3">
            <img src="/assets/img/icon-1.png" class="h-16 w-16" alt="window icon">

            <h3 id="intro-laravel" class="text-2xl text-blue-900 mb-0">Get introduction to real world system components.</h3>

            <p>Explore the intricacies of real-world system components and gain practical insights that will empower you to excel in system design interviews and tackle complex engineering challenges.</p>
        </div>

        <div class="mb-8 mx-3 px-2 md:w-1/3">
            <img src="/assets/img/icon-2.png" class="h-16 w-16" alt="terminal icon">

            <h3 id="intro-markdown" class="text-2xl text-blue-900 mb-0">Example of real world system</h3>

            <p>Dive into real-world system examples, dissecting the architecture of industry-leading applications and platforms to sharpen your system design skills for today's tech landscape.</p>
        </div>

        <div class="mx-3 px-2 md:w-1/3">
            <img src="/assets/img/icon-3.png" class="h-16 w-16" alt="stack icon">

            <h3 id="intro-mix" class="text-2xl text-blue-900 mb-0">Explanation of all the system design termonology</h3>

            <p>Gain clarity in system design by delving into our course, where we provide a thorough explanation of all the critical system design terminology, empowering you to communicate and design with precision.</p>
        </div>
    </div>
</section>
@endsection
