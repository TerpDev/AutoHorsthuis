@extends('layout.app')
@section('title', 'Banden & Velgen | Auto Horsthuis')

@section('content')
    {{-- HERO --}}
    <section class="relative min-h-[55vh] flex items-center justify-center bg-cover bg-center pt-32 lg:pt-0"
             style="background-image:url('{{ asset('images/banden-velgen/bgbanden-velgen.webp') }}');">
        <div class="absolute inset-0 bg-black/60"></div>
        <div class="relative z-10 mx-auto max-w-6xl px-6 lg:px-8 text-center text-white">
            <p class="text-xs tracking-wider uppercase bg-white/10 px-3 py-1 rounded-full inline-block backdrop-blur">
                Banden &amp; Velgen
            </p>
            <h1 class="mt-4 text-4xl sm:text-5xl lg:text-6xl font-bold tracking-wide drop-shadow">
                Banden, Velgen &amp; Bandendienst
            </h1>
            <p class="mt-4 max-w-2xl mx-auto text-white/90">
                Alle A-merken én sterke prijs-kwaliteit banden. Lichtmetaal &amp; staal, plus alles voor montage.
            </p>
            <div class="mt-6 flex flex-wrap items-center justify-center gap-3">
                <a href="/contact"
                   class="rounded-xl px-5 py-3 text-lg font-semibold bg-red-600 text-white hover:bg-red-500 transition">
                    Offerte / Afspraak
                </a>
                <a href="tel:0622373308"
                   class="rounded-xl px-5 py-3 text-lg font-semibold bg-white/10 text-white hover:bg-white/20 backdrop-blur transition">
                    Bel 06 22 37 33 08
                </a>
            </div>
        </div>
        <div class="absolute right-4 bottom-4 sm:right-8 sm:bottom-8 z-10">
            <div class="rounded-full bg-amber-400 text-zinc-900 px-4 py-2 font-semibold shadow-lg">
                Banden wisselen vanaf €25
            </div>
        </div>
    </section>

    {{-- KORTE INTRO --}}
    <section class="py-12 px-6 lg:px-8 bg-white">
        <div class="mx-auto max-w-5xl">
            <div class="prose prose-zinc">
                <h2 class="text-2xl sm:text-3xl font-bold text-zinc-900">
                    Alles voor banden &amp; velgen, direct uit voorraad
                </h2>
                <p class="mt-3 text-zinc-700">
                    We leveren alle bekende merken banden én merken met een uitstekende prijs-kwaliteitverhouding.
                    Daarnaast hebben we budgetbanden op voorraad.
                </p>
            </div>
        </div>
    </section>

    {{-- 4 HOOFDCATEGORIE KAARTEN --}}
    <section class="py-6 px-6 lg:px-8 bg-zinc-50">
        <div class="mx-auto max-w-6xl grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
            <article class="group relative overflow-hidden rounded-2xl bg-black shadow-lg">
                <img src="{{ asset('images/banden-velgen/banden.webp') }}" alt="Banden"
                     class="h-56 w-full object-cover transition duration-500 group-hover:scale-105"
                     loading="lazy">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                <div class="absolute inset-x-0 bottom-0 p-5 text-white">
                    <h3 class="text-xl font-bold">Banden</h3>
                    <p class="mt-1 text-white/80 text-sm">A-merken, prijs-kwaliteit en budget direct leverbaar.</p>
                </div>
            </article>

            <article class="group relative overflow-hidden rounded-2xl bg-black shadow-lg">
                <img src="{{ asset('images/banden-velgen/velgen.webp') }}" alt="Velgen"
                     class="h-56 w-full object-cover transition duration-500 group-hover:scale-105"
                     loading="lazy">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                <div class="absolute inset-x-0 bottom-0 p-5 text-white">
                    <h3 class="text-xl font-bold">Velgen</h3>
                    <p class="mt-1 text-white/80 text-sm">Lichtmetaal &amp; staal. Ruime voorraad + aanbiedingen.</p>
                </div>
            </article>

            <article class="group relative overflow-hidden rounded-2xl bg-black shadow-lg">
                <img src="{{ asset('images/banden-velgen/materialen.webp') }}" alt="Bandenmateriaal"
                     class="h-56 w-full object-cover transition duration-500 group-hover:scale-105"
                     loading="lazy">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                <div class="absolute inset-x-0 bottom-0 p-5 text-white">
                    <h3 class="text-xl font-bold">Bandenmateriaal</h3>
                    <p class="mt-1 text-white/80 text-sm">
                        Wielgewichten, ventielen, bandenvet, plakmateriaal &amp; gereedschap.
                    </p>
                </div>
            </article>

            <article class="group relative overflow-hidden rounded-2xl bg-black shadow-lg">
                <img src="{{ asset('images/banden-velgen/wisselen.webp') }}" alt="Banden wisselen"
                     class="h-56 w-full object-cover transition duration-500 group-hover:scale-105"
                     loading="lazy">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                <div class="absolute inset-x-0 bottom-0 p-5 text-white">
                    <div class="flex items-center justify-between">
                        <h3 class="text-xl font-bold">Banden wisselen</h3>
                    </div>
                    <p class="mt-1 text-white/80 text-sm">
                        Wissel + (indien ruimte) opslag van uw set.
                    </p>
                </div>
            </article>
        </div>
    </section>

    {{-- DETAIL BLOKKEN --}}
    <section class="py-12 px-6 lg:px-8 bg-white">
        <div class="mx-auto max-w-5xl">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                <article class="rounded-2xl border border-zinc-200 p-6 lg:p-8">
                    <h3 class="text-2xl font-bold text-zinc-900">Banden</h3>
                    <p class="mt-3 text-zinc-700">
                        Alle bekende merken plus sterke prijs-kwaliteitopties en budgetmerken op voorraad.
                    </p>
                </article>

                <article class="rounded-2xl border border-zinc-200 p-6 lg:p-8">
                    <h3 class="text-2xl font-bold text-zinc-900">Velgen</h3>
                    <p class="mt-3 text-zinc-700">
                        Lichtmetalen en stalen velgen, actuele folders/aanbiedingen en ruime wintervoorraad.
                    </p>
                </article>

                <article class="rounded-2xl border border-zinc-200 p-6 lg:p-8">
                    <h3 class="text-2xl font-bold text-zinc-900">Bandenmateriaal</h3>
                    <p class="mt-3 text-zinc-700">
                        Wielgewichten, kleefgewichten, bandenvet, ventielen, pleisters en gereedschap.
                    </p>
                </article>

                <article class="rounded-2xl border border-amber-200 bg-amber-50 p-6 lg:p-8">
                    <h3 class="text-2xl font-bold text-zinc-900">Banden wisselen</h3>
                    <p class="mt-3 text-zinc-800">
                        Wissel voor <strong>€25</strong>. Indien ruimte: opslag.
                        Kom langs aan de <strong>Newtonstraat 15</strong>, Oldenzaal.
                    </p>
                </article>
            </div>

        </div>
    </section>

    {{-- NIEUW: WAAROM AUTO HORSTHUIS --}}
    <section class="py-12 px-6 lg:px-8 bg-zinc-50">
        <div class="mx-auto max-w-6xl">
            <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-6">
                <div>
                    <p class="text-xs font-semibold tracking-[0.2em] uppercase text-amber-500">
                        Waarom Auto Horsthuis
                    </p>
                    <h2 class="mt-2 text-2xl sm:text-3xl font-bold text-zinc-900">
                        Persoonlijk advies, snelle service en eerlijke prijzen
                    </h2>
                    <p class="mt-3 text-zinc-700 max-w-2xl">
                        Geen anonieme keten, maar gewoon een nuchter adres in Oldenzaal.
                        U krijgt eerlijk advies wat past bij uw auto, rijstijl en budget.
                    </p>
                </div>
                <div class="flex gap-3 text-sm text-zinc-600">
                    <div class="flex items-center gap-2">
                        <span class="h-2 w-2 rounded-full bg-green-500"></span>
                        <span> Vaak <strong>zelfde dag</strong> geholpen</span>
                    </div>
                </div>
            </div>

            <div class="mt-8 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                <div class="rounded-2xl bg-white border border-zinc-200 p-6 shadow-sm">
                    <h3 class="text-lg font-semibold text-zinc-900">Eerlijk advies</h3>
                    <p class="mt-2 text-sm text-zinc-700">
                        We denken mee in wat u écht nodig heeft. Soms is een goede prijs-kwaliteit band
                        slimmer dan het duurste A-merk.
                    </p>
                </div>
                <div class="rounded-2xl bg-white border border-zinc-200 p-6 shadow-sm">
                    <h3 class="text-lg font-semibold text-zinc-900">Snelle levering</h3>
                    <p class="mt-2 text-sm text-zinc-700">
                        Veel maten op voorraad. Staat uw maat er niet tussen? Dan is de band vaak binnen
                        1 werkdag bij ons.
                    </p>
                </div>
                <div class="rounded-2xl bg-white border border-zinc-200 p-6 shadow-sm">
                    <h3 class="text-lg font-semibold text-zinc-900">Complete bandendienst</h3>
                    <p class="mt-2 text-sm text-zinc-700">
                        Monteren, balanceren, ventielen en (indien ruimte) opslag van uw set. Alles onder één dak.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- NIEUW: FOTO IMPRESSIE / GALLERIJ --}}
    <section class="py-12 px-6 lg:px-8 bg-white">
        <div class="mx-auto max-w-6xl">
            <div class="flex flex-col sm:flex-row sm:items-end sm:justify-between gap-4">
                <div>
                    <p class="text-xs font-semibold tracking-[0.2em] uppercase text-amber-500">
                        Impressie
                    </p>
                    <h2 class="mt-2 text-2xl sm:text-3xl font-bold text-zinc-900">
                        Een kijkje in de werkplaats
                    </h2>
                    <p class="mt-3 text-zinc-700 max-w-xl">
                        Hieronder een paar voorbeelden van montage, velgensets en de werkplaats.
                        Zo krijgt u een gevoel bij wat we doen.
                    </p>
                </div>
                <a href="/contact"
                   class="inline-flex items-center justify-center rounded-xl border border-zinc-200 px-4 py-2 text-sm font-medium text-zinc-800 hover:bg-zinc-50">
                    Stel uw vraag direct
                </a>
            </div>

            <div class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                <div class="group relative overflow-hidden rounded-2xl bg-zinc-100">
                    <img src="{{ asset('images/banden-velgen/impressie1.webp') }}" alt="Montage banden"
                         class="h-52 w-full object-cover transition duration-500 group-hover:scale-105"
                         loading="lazy">
                </div>
                <div class="group relative overflow-hidden rounded-2xl bg-zinc-100">
                    <img src="{{ asset('images/banden-velgen/impressie2.webp') }}" alt="Velgenset op auto"
                         class="h-52 w-full object-cover transition duration-500 group-hover:scale-105"
                         loading="lazy">
                </div>
                <div class="group relative overflow-hidden rounded-2xl bg-zinc-100 lg:row-span-2 lg:h-full">
                    <img src="{{ asset('images/banden-velgen/impressie3.webp') }}" alt="Werkplaats"
                         class="h-full w-full object-cover transition duration-500 group-hover:scale-105"
                         loading="lazy">
                </div>
                <div class="group relative overflow-hidden rounded-2xl bg-zinc-100">
                    <img src="{{ asset('images/banden-velgen/impressie4.webp') }}" alt="Detail velg"
                         class="h-52 w-full object-cover transition duration-500 group-hover:scale-105"
                         loading="lazy">
                </div>
                <div class="group relative overflow-hidden rounded-2xl bg-zinc-100">
                    <img src="{{ asset('images/banden-velgen/impressie5.webp') }}" alt="Set in opslag"
                         class="h-52 w-full object-cover transition duration-500 group-hover:scale-105"
                         loading="lazy">
                </div>
            </div>
        </div>
    </section>
    <section class="relative py-14 bg-cover bg-center"
             style="background-image:url('{{ asset('images/cta.jpeg') }}');">
        <div class="absolute inset-0 bg-black/70"></div>
        <div class="relative z-10 mx-auto max-w-6xl px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center text-white">
                <h3 class="text-3xl font-bold">
                    Nieuwe banden of velgen? We adviseren u graag
                </h3>
                <p class="mt-2 text-white/90">
                    Stuur de maat of foto van uw set en ontvang snel een voorstel.
                </p>
                <div class="mt-5 flex flex-wrap items-center justify-center gap-3">
                    <a href="/contact"
                       class="rounded-xl px-5 py-3 text-lg font-semibold bg-amber-400 text-zinc-900 hover:bg-amber-300 transition">
                        Naar contact
                    </a>
                    <a href="mailto:info@autohorsthuis.nl"
                       class="rounded-xl px-5 py-3 text-lg font-semibold bg-white/10 text-white hover:bg-white/20 transition">
                        Mail ons
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
