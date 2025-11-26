@extends('layout.app')
@section('title', 'Banden & Velgen | Auto Horsthuis')

@section('content')
    <section class="relative min-h-[55vh] flex items-center justify-center bg-cover bg-center pt-24 lg:pt-28"
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
                    Bel ons
                </a>
            </div>
        </div>
    </section>

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
