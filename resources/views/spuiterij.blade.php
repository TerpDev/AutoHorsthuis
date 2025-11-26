@extends('layout.app')
@section('title', 'Spuiterij | Auto Horsthuis')

@section('content')
    <section class="relative min-h-[55vh] flex items-center justify-center bg-cover bg-center pt-16 lg:pt-0"
             style="background-image:url('{{ asset('images/autospuiten.webp') }}');">
        <div class="absolute inset-0 bg-black/60"></div>
        <div class="relative z-10 mx-auto max-w-6xl px-6 lg:px-8 text-center text-white">
            <p class="text-xs tracking-wider uppercase bg-white/10 px-3 py-1 rounded-full inline-block backdrop-blur">
                Spuiterij</p>
            <h1 class="mt-4 text-4xl sm:text-5xl lg:text-6xl font-bold tracking-wide drop-shadow">Spuiterij &
                Fijnspuitwerk</h1>
            <p class="mt-4 max-w-2xl mx-auto text-white/90">
                Gespecialiseerd in schadeherstel, fijnspuitwerk en spotrepair voor auto, motor en brommer.
                Vakkundig, strak resultaat en duidelijke prijzen.
            </p>
            <div class="mt-6 flex flex-wrap items-center justify-center gap-3">
                <a href="/contact"
                   class="rounded-xl px-5 py-3 text-lg font-semibold bg-red-600 text-white hover:bg-red-500 transition">Offerte
                    / Afspraak</a>
                <a href="tel:0622373308"
                   class="rounded-xl px-5 py-3 text-lg font-semibold bg-white/10 text-white hover:bg-white/20 backdrop-blur transition">Bel
                    06 22 37 33 08</a>
            </div>
        </div>
    </section>

    <section class="py-12 px-6 lg:px-8 bg-white">
        <div class="mx-auto max-w-5xl">
            <div class="prose prose-zinc">
                <h2 class="text-2xl sm:text-3xl font-bold text-zinc-900">Strak spuitwerk, voor elk voertuig</h2>
                <p class="mt-3 text-zinc-700">
                    Auto Horsthuis in Oldenzaal is gespecialiseerd in alle soorten autoschades,
                    <strong>fijnspuitwerk</strong> en
                    <strong>spotrepair</strong> van uw auto, motor of brommer. Ook voor het vakkundig repareren van
                    deuken, krassen en parkeerschades.
                </p>
                <p class="mt-3 text-zinc-700">
                    Ook uw <strong>oldtimer</strong> is bij ons in goede handen. Met de juiste apparatuur en speciale
                    lakken brengen wij uw klassieker weer in topconditie.
                </p>
                <p class="mt-3 text-zinc-700">
                    We werken in een ruime, goed ingerichte spuiterij en gebruiken de nieuwste <strong>watergedragen
                        lakken</strong> voor een duurzaam en kleurvast resultaat.
                </p>
            </div>
        </div>
    </section>

    <section class="py-6 px-6 lg:px-8 bg-zinc-50">
        <div class="mx-auto max-w-6xl grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
            <article class="group relative overflow-hidden rounded-2xl bg-black shadow-lg">
                <img src="{{ asset('images/spuiterij/fijnspuitwerk.webp') }}" alt="Fijnspuitwerk"
                     class="h-56 w-full object-cover transition duration-500 group-hover:scale-105" loading="lazy">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                <div class="absolute inset-x-0 bottom-0 p-5 text-white">
                    <h3 class="text-xl font-bold">Fijnspuitwerk</h3>
                    <p class="mt-1 text-white/80 text-sm">Strak kleur- en structuurherstel met fabrieksfinish.</p>
                </div>
            </article>

            <article class="group relative overflow-hidden rounded-2xl bg-black shadow-lg">
                <img src="{{ asset('images/autoschade/spotrepair.webp') }}" alt="Spotrepair"
                     class="h-56 w-full object-cover transition duration-500 group-hover:scale-105" loading="lazy">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                <div class="absolute inset-x-0 bottom-0 p-5 text-white">
                    <h3 class="text-xl font-bold">Spotrepair</h3>
                    <p class="mt-1 text-white/80 text-sm">Kleine lakschades efficiënt en voordelig bijgewerkt.</p>
                </div>
            </article>

            <article class="group relative overflow-hidden rounded-2xl bg-black shadow-lg">
                <img src="{{ asset('images/spuiterij/oldtimer.webp') }}" alt="Oldtimer spuiten"
                     class="h-56 w-full object-cover transition duration-500 group-hover:scale-105" loading="lazy">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                <div class="absolute inset-x-0 bottom-0 p-5 text-white">
                    <h3 class="text-xl font-bold">Oldtimer spuitwerk</h3>
                    <p class="mt-1 text-white/80 text-sm">Speciale lakken en techniek voor klassiekers.</p>
                </div>
            </article>

            <article class="group relative overflow-hidden rounded-2xl bg-black shadow-lg">
                <img src="{{ asset('images/spuiterij/water.webp') }}" alt="Watergedragen lakken"
                     class="h-56 w-full object-cover transition duration-500 group-hover:scale-105" loading="lazy">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                <div class="absolute inset-x-0 bottom-0 p-5 text-white">
                    <h3 class="text-xl font-bold">Watergedragen lakken</h3>
                    <p class="mt-1 text-white/80 text-sm">Duurzaam, kleurvast en milieubewuster.</p>
                </div>
            </article>
        </div>
    </section>

    <section class="py-12 px-6 lg:px-8 bg-white">
        <div class="mx-auto max-w-5xl">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                <article class="rounded-2xl border border-zinc-200 p-6 lg:p-8">
                    <h3 class="text-2xl font-bold text-zinc-900">Onze spuiterij</h3>
                    <p class="mt-3 text-zinc-700">Moderne spuitcabines, kleurbepaling en mengsystemen voor resultaat dat
                        naadloos aansluit bij de fabriekslak.</p>
                </article>
                <article class="rounded-2xl border border-amber-200 bg-amber-50 p-6 lg:p-8">
                    <h3 class="text-2xl font-bold text-zinc-900">Snelle service bij kleine reparaties</h3>
                    <p class="mt-3 text-zinc-800">Brengt u vóór 09:00 uur uw voertuig voor kleine reparaties/spotrepair, dan
                        is het vaak vóór 18:00 uur weer klaar (in overleg).</p>
                </article>

            </div>
        </div>
    </section>

    <section class="relative py-14 bg-cover object-cover bg-center"
             style="background-image:url('{{ asset('images/cta.jpeg') }}');">
        <div class="absolute inset-0 bg-black/70"></div>
        <div class="relative z-10 mx-auto max-w-6xl px-6 lg:px-8 text-center text-white">
            <h3 class="text-3xl font-bold">Spuitwerk nodig? Stuur een foto of kom langs</h3>
            <p class="mt-2 text-white/90">We denken met u mee en geven een duidelijke prijsindicatie.</p>
            <div class="mt-5 flex flex-wrap items-center justify-center gap-3">
                <a href="/contact"
                   class="rounded-xl px-5 py-3 text-lg font-semibold bg-amber-400 text-zinc-900 hover:bg-amber-300 transition">Naar
                    contact</a>
                <a href="mailto:info@autohorsthuis.nl"
                   class="rounded-xl px-5 py-3 text-lg font-semibold bg-white/10 text-white hover:bg-white/20 transition">Mail
                    ons</a>
            </div>
        </div>
    </section>
@endsection
