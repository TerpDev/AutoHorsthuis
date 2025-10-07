<!DOCTYPE html>
<html class="scroll-smooth" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet"/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<x-navbar/>
<!-- Hero -->
<div class="min-h-screen flex items-center justify-center
            bg-cover bg-center bg-no-repeat"
     style="background-image: url('{{ asset('images/biefstuk.webp') }}');">

    <div class="max-w-4xl w-full px-6 lg:px-8 flex items-center justify-center">
        <div class="w-full flex flex-col items-center gap-6">
            <img class="mx-auto bg-transparent"
                 src="{{ asset('images/lutscheralm-welkom.svg') }}"
                 alt="lutscher alm">

            <a href="#"
               class="cursor-pointer md:text-2xl text-lg font-medium bg-amber-900 py-3 px-3 text-gray-200 rounded-lg hover:bg-amber-800 transition">
                Reserveer online
            </a>
        </div>
    </div>

    <!-- Scroll down arrow -->
    <a href="#section2" id="section2"
       class="absolute z-10 bottom-6 animate-bounce text-white"
       aria-label="Scroll naar beneden">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24"
             stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M19 9l-7 7-7-7"/>
        </svg>
    </a>
</div >

<!-- About section -->
<section
    class="relative py-16 px-6 bg-center bg-repeat"
    style="background-image: url('https://lutscheralm.nl/wp-content/uploads/2022/11/patroon-lutscheralm.jpg');">
    <!-- Overlay om patroon te verzachten -->
    <div class="absolute inset-0 bg-white/80"></div> <!-- maak lichter/donkerder met /70 /90 -->

    <div class="relative z-10 max-w-3xl mx-auto text-center flex flex-col items-center gap-4">
        <h1 class="text-4xl font-vibes text-gray-900">Welkom bij de</h1>
        <h1 class="text-blue-900 font-bold text-6xl">Lutscher Alm & <br> De Alm Hütte</h1>
        <p class="text-lg text-gray-700">Bijkletsen, iets te vieren, lekker genieten of er gewoon even tussenuit. Al
            meer dan 22 jaar is de Lutscher Alm in Lonneker een begrip in de regio als het gaat om een ongedwongen en
            gezellig avondje uit in Oostenrijkse sfeer. Met zijn tweeën, je gezin, familie of een hele groep. Proef de
            sfeer en bekijk alle mogelijkheden op deze website van de Lutscher Alm en onze Almhütte. </p>
        <p class="text-lg text-gray-700">Tot snel!</p>
        <p class="text-lg text-gray-900 font-bold">Team Lutscher Alm</p>
    </div>
</section>

<section class="relative bg-cover bg-center bg-no-repeat h-[500px] flex items-center justify-center"
         style="background-image: url('{{ asset('images/almhutte.webp') }}');">

    <!-- Overlay (optioneel, donker laagje voor betere leesbaarheid) -->
    <div class="absolute inset-0 bg-black/40"></div>

    <!-- Content -->
    <div class="relative z-10 text-center">
        <!-- Dit kan ook gewoon een <h1> zijn -->
        <img src="{{ asset('images/logo-almhutte-png.webp') }}"
             alt="De Almhütte"
             class="mx-auto mb-4 max-h-32">

        <a class="cursor-pointer md:text-2xl text-lg font-medium bg-amber-900 py-3 px-3 text-gray-200 rounded-lg hover:bg-amber-800 transition"
           href="#"> Feesten & Partijen bij de Almhütte
        </a>
    </div>
</section>


{{--<div>--}}
{{--    <div x-data="{--}}
{{--    slides: [--}}
{{--        {--}}
{{--            imgSrc: 'https://penguinui.s3.amazonaws.com/component-assets/carousel/default-slide-1.webp',--}}
{{--            imgAlt: 'Vibrant abstract painting with swirling blue and light pink hues on a canvas.',--}}
{{--        },--}}
{{--        {--}}
{{--            imgSrc: 'https://penguinui.s3.amazonaws.com/component-assets/carousel/default-slide-2.webp',--}}
{{--            imgAlt: 'Vibrant abstract painting with swirling red, yellow, and pink hues on a canvas.',--}}
{{--        },--}}
{{--        {--}}
{{--            imgSrc: 'https://penguinui.s3.amazonaws.com/component-assets/carousel/default-slide-3.webp',--}}
{{--            imgAlt: 'Vibrant abstract painting with swirling blue and purple hues on a canvas.',--}}
{{--        },--}}
{{--    ],--}}
{{--    currentSlideIndex: 1,--}}
{{--    previous() {--}}
{{--        if (this.currentSlideIndex > 1) {--}}
{{--            this.currentSlideIndex = this.currentSlideIndex - 1--}}
{{--        } else {--}}
{{--            // If it's the first slide, go to the last slide--}}
{{--            this.currentSlideIndex = this.slides.length--}}
{{--        }--}}
{{--    },--}}
{{--    next() {--}}
{{--        if (this.currentSlideIndex < this.slides.length) {--}}
{{--            this.currentSlideIndex = this.currentSlideIndex + 1--}}
{{--        } else {--}}
{{--            // If it's the last slide, go to the first slide--}}
{{--            this.currentSlideIndex = 1--}}
{{--        }--}}
{{--    },--}}
{{--}" class="relative w-full overflow-hidden">--}}

{{--        <!-- previous button -->--}}
{{--        <button type="button"--}}
{{--                class="absolute left-5 top-1/2 flex rounded-full -translate-y-1/2 items-center justify-center bg-surface/40 p-2 text-on-surface transition hover:bg-surface/60 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary active:outline-offset-0 dark:bg-surface-dark/40 dark:text-on-surface-dark dark:hover:bg-surface-dark/60 dark:focus-visible:outline-primary-dark"--}}
{{--                aria-label="previous slide" x-on:click="previous()">--}}
{{--            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none"--}}
{{--                 stroke-width="3" class="size-5 md:size-6 pr-0.5" aria-hidden="true">--}}
{{--                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5"/>--}}
{{--            </svg>--}}
{{--        </button>--}}

{{--        <!-- next button -->--}}
{{--        <button type="button"--}}
{{--                class="absolute right-5 top-1/2 z-20 flex rounded-full -translate-y-1/2 items-center justify-center bg-surface/40 p-2 text-on-surface transition hover:bg-surface/60 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary active:outline-offset-0 dark:bg-surface-dark/40 dark:text-on-surface-dark dark:hover:bg-surface-dark/60 dark:focus-visible:outline-primary-dark"--}}
{{--                aria-label="next slide" x-on:click="next()">--}}
{{--            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none"--}}
{{--                 stroke-width="3" class="size-5 md:size-6 pl-0.5" aria-hidden="true">--}}
{{--                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/>--}}
{{--            </svg>--}}
{{--        </button>--}}

{{--        <!-- slides -->--}}
{{--        <!-- Change min-h-[50svh] to your preferred height size -->--}}
{{--        <div class="relative min-h-screen w-full">--}}
{{--            <template x-for="(slide, index) in slides">--}}
{{--                <div x-show="currentSlideIndex == index + 1" class="absolute inset-0"--}}
{{--                     x-transition.opacity.duration.1000ms>--}}
{{--                    <img class="absolute w-full h-full inset-0 object-cover text-on-surface dark:text-on-surface-dark"--}}
{{--                         x-bind:src="slide.imgSrc" x-bind:alt="slide.imgAlt"/>--}}
{{--                </div>--}}
{{--            </template>--}}
{{--        </div>--}}

{{--        <!-- indicators -->--}}
{{--        <div--}}
{{--            class="absolute rounded-radius bottom-3 md:bottom-5 left-1/2 z-20 flex -translate-x-1/2 gap-4 md:gap-3 bg-surface/75 px-1.5 py-1 md:px-2 dark:bg-surface-dark/75"--}}
{{--            role="group" aria-label="slides">--}}
{{--            <template x-for="(slide, index) in slides">--}}
{{--                <button class="size-2 rounded-full transition bg-on-surface dark:bg-on-surface-dark"--}}
{{--                        x-on:click="currentSlideIndex = index + 1"--}}
{{--                        x-bind:class="[currentSlideIndex === index + 1 ? 'bg-on-surface dark:bg-on-surface-dark' : 'bg-on-surface/50 dark:bg-on-surface-dark/50']"--}}
{{--                        x-bind:aria-label="'slide ' + (index + 1)"></button>--}}
{{--            </template>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
</body>


</html>
