@extends('layout.app')
@section('title', 'Auto Horsthuis')

@section('content')
    <!-- Hero -->
    <div class="min-h-screen flex items-center justify-center bg-cover bg-center bg-no-repeat relative"
         style="background-image: url('{{ asset('images/bg.webp') }}');">
        <div class="absolute z-10 inset-0 bg-black/70"></div>

        <div class="relative z-10 mx-auto max-w-6xl px-6 lg:px-8 font-body">
            <div class="pt-16 lg:pt-24 flex flex-col items-center text-center gap-6">
                <div class="flex flex-wrap items-center justify-center gap-2">
                    <span class="text-xs tracking-wider uppercase bg-white/10 text-white/90 px-3 py-1 rounded-full backdrop-blur">APK</span>
                    <span class="text-xs tracking-wider uppercase bg-white/10 text-white/90 px-3 py-1 rounded-full backdrop-blur">Onderhoud</span>
                    <span class="text-xs tracking-wider uppercase bg-white/10 text-white/90 px-3 py-1 rounded-full backdrop-blur">Diagnose</span>
                    <span class="text-xs tracking-wider uppercase bg-white/10 text-white/90 px-3 py-1 rounded-full backdrop-blur">Gespcialiseerd in banden/velgen</span>
                </div>

                <h1 class="tracking-wide leading-[0.95] text-white drop-shadow-xl text-5xl sm:text-6xl lg:text-7xl bbh-sans-bogle-regular">
                    Welkom bij <span class="block">Auto Horsthuis</span>
                </h1>

                <p class="max-w-2xl text-white/90 text-base sm:text-lg">Eerlijk advies, snel service en vakwerk voor elk merk. Gespecialiseerd in losse velgen.
                Mogelijk met 2 dagen gerepareerd en terug bij de klant</p>

                <div class="mt-2 flex flex-wrap items-center justify-center gap-3">
                    <a href="/contact" class="inline-flex items-center justify-center rounded-xl px-5 py-3 text-lg
                    font-semibold bg-red-600 text-white hover:bg-red-500 transition">Contact</a>
                    <a href="tel:" class="inline-flex items-center justify-center rounded-xl px-5 py-3 text-lg font-semibold bg-white/10 text-white hover:bg-white/20 backdrop-blur transition">Bel direct</a>
                </div>

                <div class="mt-6 w-full max-w-xl rounded-2xl bg-white/5 backdrop-blur-md border border-white/10 px-5 py-4 text-left text-white">
                    <div class="flex items-center justify-between">
                        <div class="text-sm sm:text-base">
                            <p class="font-semibold">{{ now()->isSunday() ? 'Vandaag gesloten' : 'Vandaag geopend' }}</p>
                            <p class="text-white/80">Ma–Di 09:00–23:00 • Wo-Za 09:00–17:00</p>
                        </div>
                        <div class="text-right">
                            <p class="text-sm text-white/80">Klanttevredenheid</p>
                            <p aria-label="Rating" class="font-semibold">★ ★ ★ ★ ★</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <a href="#section2" id="section2" class="absolute z-10 bottom-6 animate-bounce text-white" aria-label="Scroll naar beneden">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
            </svg>
        </a>
    </div>
    {{-- 1) BELANGRIJKSTE SECTIE: VELGEN & BANDEN --}}
    <section id="velgen" class="bg-zinc-50 py-10 px-6 lg:px-8">
        <div class="mx-auto max-w-6xl">
            <div class="grid items-center gap-8 md:grid-cols-2">
                <!-- Tekst -->
                <div>
                    <div class="rounded-2xl bg-black/60 border border-white/10 text-white shadow-xl backdrop-blur p-6 sm:p-7">
                        <div class="mb-2 inline-flex items-center gap-2">
                            <span class="rounded-full bg-amber-400 text-zinc-900 px-3 py-1 text-xs font-semibold">Top keuze</span>
                            <span class="text-[11px] uppercase tracking-wider bg-white/10 text-white/90 px-3 py-1 rounded-full">Specialisme</span>
                        </div>
                        <header class="text-left">
                            <h2 class="text-2xl sm:text-3xl bbh-sans-bogle-regular tracking-wide">VELGEN &amp; BANDENSERVICE</h2>
                            <p class="mt-2 text-white/80">
                                Grip, comfort en veiligheid. Levering, montage en onderhoud van banden &amp; velgen voor alle merken—snel en vakkundig.
                            </p>
                            <div class="mt-3 flex flex-wrap items-center gap-2">
                                <span class="text-[11px] uppercase tracking-wider bg-white/10 text-white/90 px-3 py-1 rounded-full">Zomer • Winter • All-season</span>
                                <span class="text-[11px] uppercase tracking-wider bg-white/10 text-white/90 px-3 py-1 rounded-full">TPMS</span>
                                <span class="text-[11px] uppercase tracking-wider bg-white/10 text-white/90 px-3 py-1 rounded-full">Uitlijnen &amp; balanceren</span>
                            </div>
                        </header>

                        <!-- Korte bullets -->
                        <ul class="mt-4 space-y-2.5">
                            <li class="flex items-start gap-2.5">
                                <span class="mt-0.5 inline-flex h-5 w-5 items-center justify-center rounded-full bg-amber-400 text-zinc-900 text-xs font-bold">✓</span>
                                <span class="text-white/90">Nieuwe banden (A-merken &amp; budget) vakkundig gemonteerd</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <span class="mt-0.5 inline-flex h-5 w-5 items-center justify-center rounded-full bg-amber-400 text-zinc-900 text-xs font-bold">✓</span>
                                <span class="text-white/90">Balanceren &amp; uitlijnen voor strak rijgedrag</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <span class="mt-0.5 inline-flex h-5 w-5 items-center justify-center rounded-full bg-amber-400 text-zinc-900 text-xs font-bold">✓</span>
                                <span class="text-white/90">Seizoenswissel + (beperkt) opslag</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <span class="mt-0.5 inline-flex h-5 w-5 items-center justify-center rounded-full bg-amber-400 text-zinc-900 text-xs font-bold">✓</span>
                                <span class="text-white/90">Velgservice &amp; TPMS uitlezen/plaatsen</span>
                            </li>
                        </ul>

                        <!-- CTA -->
                        <div class="mt-5 flex flex-wrap gap-2.5">
                            <a href="/banden-velgen" class="rounded-lg px-4 py-2.5 font-semibold bg-amber-400 text-zinc-900 hover:bg-amber-300 transition">Meer over velgen & banden</a>
                            <a href="/contact" class="rounded-lg px-4 py-2.5 font-semibold bg-white/10 text-white hover:bg-white/20 transition">Afspraak / Offerte</a>
                        </div>
                    </div>
                </div>

                <!-- Foto rechts -->
                <div class="order-first md:order-last">
                    <div class="relative overflow-hidden rounded-2xl bg-black shadow-xl">
                        <img
                            src="{{ asset('images/velgenenbanden.webp') }}"
                            alt="Banden & velgen montage"
                            class="w-full h-64 sm:h-80 md:h-[420px] object-cover"
                            loading="lazy"
                        />
                        <div class="absolute bottom-3 right-3 rounded-lg bg-black/50 text-white backdrop-blur px-3 py-1.5 text-xs">
                            Specialist in Banden &amp; Velgen
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- 2) AUTOSCHADE (kort, beeld links, CTA naar /autoschade) --}}
    <section id="autoschade" class="bg-zinc-50 py-10 px-6 lg:px-8">
        <div class="mx-auto max-w-6xl">
            <div class="grid items-center gap-8 md:grid-cols-2">
                <!-- Foto links -->
                <div class="order-first md:order-none">
                    <div class="relative overflow-hidden rounded-2xl bg-black shadow-xl">
                        <img
                            src="{{ asset('images/autoschade.webp') }}"
                            alt="Autoschade herstel"
                            class="w-full h-64 sm:h-80 md:h-[420px] object-cover"
                            loading="lazy"
                        />
                        <div class="absolute bottom-3 right-3 rounded-lg bg-black/50 text-white backdrop-blur px-3 py-1.5 text-xs">
                            Schadeherstel
                        </div>
                    </div>
                </div>

                <!-- Tekst rechts -->
                <div>
                    <div class="rounded-2xl bg-black/60 border border-white/10 text-white shadow-xl backdrop-blur p-6 sm:p-7">
                        <header>
                            <h2 class="text-2xl sm:text-3xl bbh-sans-bogle-regular tracking-wide">AUTOSCHADE</h2>
                            <p class="mt-2 text-white/80">Van kleine krassen tot groter herstel—snel, vakkundig en eerlijk advies.</p>
                        </header>
                        <ul class="mt-4 space-y-2.5">
                            <li class="flex gap-2.5"><span class="mt-0.5 h-5 w-5 flex items-center justify-center rounded-full bg-amber-400 text-zinc-900 text-xs font-bold">✓</span><span class="text-white/90">Spotrepair & uitdeuken zonder spuiten</span></li>
                            <li class="flex gap-2.5"><span class="mt-0.5 h-5 w-5 flex items-center justify-center rounded-full bg-amber-400 text-zinc-900 text-xs font-bold">✓</span><span class="text-white/90">Ruitreparatie & parkeerschade</span></li>
                            <li class="flex gap-2.5"><span class="mt-0.5 h-5 w-5 flex items-center justify-center rounded-full bg-amber-400 text-zinc-900 text-xs font-bold">✓</span><span class="text-white/90">Afhandeling verzekering (indien gewenst)</span></li>
                        </ul>
                        <div class="mt-5 flex flex-wrap gap-2.5">
                            <a href="/autoschade" class="rounded-lg px-4 py-2.5 font-semibold bg-amber-400 text-zinc-900 hover:bg-amber-300 transition">Meer over autoschade</a>
                            <a href="/contact" class="rounded-lg px-4 py-2.5 font-semibold bg-white/10 text-white hover:bg-white/20 transition">Offerte / Afspraak</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- 3) SPUITERIJ (kort, beeld rechts, CTA naar /spuiterij) --}}
    <section id="spuiterij" class="bg-zinc-50 py-10 px-6 lg:px-8">
        <div class="mx-auto max-w-6xl">
            <div class="grid items-center gap-8 md:grid-cols-2">
                <!-- Tekst -->
                <div>
                    <div class="rounded-2xl bg-black/60 border border-white/10 text-white shadow-xl backdrop-blur p-6 sm:p-7">
                        <header>
                            <h2 class="text-2xl sm:text-3xl bbh-sans-bogle-regular tracking-wide">SPUITERIJ</h2>
                            <p class="mt-2 text-white/80">Fijnspuitwerk, kleurbepaling en spotrepair met fabrieksstrak resultaat.</p>
                        </header>
                        <ul class="mt-4 space-y-2.5">
                            <li class="flex gap-2.5"><span class="mt-0.5 h-5 w-5 flex items-center justify-center rounded-full bg-amber-400 text-zinc-900 text-xs font-bold">✓</span><span class="text-white/90">Watergedragen lakken & moderne spuitcabine</span></li>
                            <li class="flex gap-2.5"><span class="mt-0.5 h-5 w-5 flex items-center justify-center rounded-full bg-amber-400 text-zinc-900 text-xs font-bold">✓</span><span class="text-white/90">Oldtimers, motoren en brommers</span></li>
                            <li class="flex gap-2.5"><span class="mt-0.5 h-5 w-5 flex items-center justify-center rounded-full bg-amber-400 text-zinc-900 text-xs font-bold">✓</span><span class="text-white/90">Snelle doorlooptijd bij kleine reparaties</span></li>
                        </ul>
                        <div class="mt-5 flex flex-wrap gap-2.5">
                            <a href="/spuiterij" class="rounded-lg px-4 py-2.5 font-semibold bg-amber-400 text-zinc-900 hover:bg-amber-300 transition">Meer over spuiterij</a>
                            <a href="/contact" class="rounded-lg px-4 py-2.5 font-semibold bg-white/10 text-white hover:bg-white/20 transition">Offerte / Afspraak</a>
                        </div>
                    </div>
                </div>

                <!-- Foto rechts -->
                <div class="order-first md:order-last">
                    <div class="relative overflow-hidden rounded-2xl bg-black shadow-xl">
                        <img
                            src="{{ asset('images/spuiterij/spuitwerk.webp') }}"
                            alt="Spuiterij & fijnspuitwerk"
                            class="w-full h-64 sm:h-80 md:h-[420px] object-cover"
                            loading="lazy"
                        />
                        <div class="absolute bottom-3 right-3 rounded-lg bg-black/50 text-white backdrop-blur px-3 py-1.5 text-xs">
                            Fijnspuitwerk
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-12 px-6 lg:px-8 bg-zinc-200">
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
    <section class="relative py-14 bg-cover bg-center"
             style="background-image:url('{{ asset('images/cta.jpeg') }}');">
        <div class="absolute inset-0 bg-black/70"></div>
        <div class="relative z-10 mx-auto max-w-3xl px-6 lg:px-8 text-center text-white">
            <h3 class="text-3xl font-bold">Ergens schade of ander probleem? Kom bij ons langs of stuur een foto</h3>
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
