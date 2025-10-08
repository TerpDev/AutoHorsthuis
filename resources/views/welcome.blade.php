@extends('layout.app')
@section('title', 'Auto Horsthuis')

@section('content')
    <!-- Hero -->
    <div class="min-h-screen flex items-center justify-center bg-cover bg-center bg-no-repeat relative"
         style="background-image: url('{{ asset('images/herobg.webp') }}');">
        <div class="absolute z-10 inset-0 bg-black/40"></div>

        <div class="relative z-10 mx-auto max-w-6xl px-6 lg:px-8 font-body">
            <header class="pt-16 lg:pt-24 flex flex-col items-center text-center gap-6">
                <div class="flex flex-wrap items-center justify-center gap-2">
                    <span class="text-xs tracking-wider uppercase bg-white/10 text-white/90 px-3 py-1 rounded-full backdrop-blur">APK</span>
                    <span class="text-xs tracking-wider uppercase bg-white/10 text-white/90 px-3 py-1 rounded-full backdrop-blur">Onderhoud</span>
                    <span class="text-xs tracking-wider uppercase bg-white/10 text-white/90 px-3 py-1 rounded-full backdrop-blur">Diagnose</span>
                    <span class="text-xs tracking-wider uppercase bg-white/10 text-white/90 px-3 py-1 rounded-full backdrop-blur">Banden & Remmen</span>
                </div>

                <h1 class="tracking-wide leading-[0.95] text-white drop-shadow-xl text-5xl sm:text-6xl lg:text-7xl bbh-sans-bogle-regular">
                    Welkom bij <span class="block">Auto Horsthuis</span>
                </h1>

                <p class="max-w-2xl text-white/90 text-base sm:text-lg">Eerlijk advies, snelle service en vakwerk voor elk merk.</p>

                <div class="mt-2 flex flex-wrap items-center justify-center gap-3">
                    <a href="/contact" class="inline-flex items-center justify-center rounded-xl px-5 py-3 text-lg font-semibold bg-amber-400 text-zinc-900 hover:bg-amber-300 transition">Contact</a>
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
            </header>
        </div>

        <a href="#section2" id="section2" class="absolute z-10 bottom-6 animate-bounce text-white" aria-label="Scroll naar beneden">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
            </svg>
        </a>
    </div>

    <!-- Services tiles -->
    <section id="section2" class="relative py-16 px-6 lg:px-8 bg-center bg-repeat">
        <div class="relative z-10 mx-auto max-w-6xl">
            <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                <a href="/autoschade" class="group relative overflow-hidden rounded-2xl shadow-lg bg-black">
                    <img src="/images/autoschade.webp" alt="Autoschade herstellen" class="h-64 w-full object-cover transition duration-500 group-hover:scale-105" loading="lazy" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                    <div class="absolute inset-x-0 bottom-0 p-5 text-white">
                        <h3 class="text-xl font-bold">Autoschade</h3>
                        <p class="mt-1 text-white/80 text-sm">Schadeherstel, uitlijnen & spotrepair.</p>
                        <span class="mt-4 inline-flex items-center gap-2 rounded-lg bg-amber-400 px-4 py-2 font-semibold text-zinc-900 transition group-hover:bg-amber-300">
            Lees meer
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20"><path d="M12.293 4.293a1 1 0 011.414 0L18 8.586l-4.293 4.293a1 1 0 01-1.414-1.414L14.586 10H4a1 1 0 110-2h10.586l-2.293-2.293a1 1 0 010-1.414z"/></svg>
          </span>
                    </div>
                </a>

                <a href="/spuiterij" class="group relative overflow-hidden rounded-2xl shadow-lg bg-black">
                    <img src="/images/autospuiten.webp" alt="Autospuiterij en lakwerk" class="h-64 w-full object-cover transition duration-500 group-hover:scale-105" loading="lazy" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                    <div class="absolute inset-x-0 bottom-0 p-5 text-white">
                        <h3 class="text-xl font-bold">Spuiterij</h3>
                        <p class="mt-1 text-white/80 text-sm">Lakwerk, kleurbepaling & herstel.</p>
                        <span class="mt-4 inline-flex items-center gap-2 rounded-lg bg-amber-400 px-4 py-2 font-semibold text-zinc-900 transition group-hover:bg-amber-300">
            Lees meer
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20"><path d="M12.293 4.293a1 1 0 011.414 0L18 8.586l-4.293 4.293a1 1 0 01-1.414-1.414L14.586 10H4a1 1 0 110-2h10.586l-2.293-2.293a1 1 0 010-1.414z"/></svg>
          </span>
                    </div>
                </a>

                <a href="/banden-velgen" class="group relative overflow-hidden rounded-2xl shadow-lg bg-black">
                    <img src="/images/velgen.webp" alt="Banden en velgen service" class="h-64 w-full object-cover transition duration-500 group-hover:scale-105" loading="lazy" />
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                    <div class="absolute inset-x-0 bottom-0 p-5 text-white">
                        <h3 class="text-xl font-bold">Banden &amp; Velgen</h3>
                        <p class="mt-1 text-white/80 text-sm">Montage, balanceren & opslaan.</p>
                        <span class="mt-4 inline-flex items-center gap-2 rounded-lg bg-amber-400 px-4 py-2 font-semibold text-zinc-900 transition group-hover:bg-amber-300">
            Lees meer
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20"><path d="M12.293 4.293a1 1 0 011.414 0L18 8.586l-4.293 4.293a1 1 0 01-1.414-1.414L14.586 10H4a1 1 0 110-2h10.586l-2.293-2.293a1 1 0 010-1.414z"/></svg>
          </span>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Auto Horsthuis intro -->
    <section class="py-12 px-6 lg:px-8 bg-white">
        <div class="mx-auto max-w-6xl grid gap-8 lg:grid-cols-2 items-start">
            <div>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-zinc-900">AUTO HORSTHUIS</h2>
                <p class="mt-3 text-zinc-700">
                    Een ongelukje kan gebeuren en als u dan schade aan uw auto heeft is dat al vervelend genoeg.
                    U wilt daar zo weinig mogelijk van merken. Auto Horsthuis herstelt niet alleen snel en vakkundig,
                    maar verzorgt (indien gewenst) ook een belangrijk deel van de schade-afwikkeling voor u.
                </p>

                <h3 class="mt-6 text-xl font-semibold text-zinc-900">Onze diensten</h3>
                <ul class="mt-3 space-y-3">
                    <li class="flex items-start gap-3">
                        <span class="mt-1 inline-flex h-5 w-5 items-center justify-center rounded-full bg-amber-400 text-zinc-900 text-xs font-bold">✓</span>
                        <span class="text-zinc-700">Volledig schadeherstel van uw voertuig</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="mt-1 inline-flex h-5 w-5 items-center justify-center rounded-full bg-amber-400 text-zinc-900 text-xs font-bold">✓</span>
                        <span class="text-zinc-700">Spuitwerk met de modernste technieken</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="mt-1 inline-flex h-5 w-5 items-center justify-center rounded-full bg-amber-400 text-zinc-900 text-xs font-bold">✓</span>
                        <span class="text-zinc-700">Ruim assortiment banden &amp; velgen van vele merken</span>
                    </li>
                </ul>

                <div class="mt-6 flex flex-wrap gap-3">
                    <a href="/contact" class="rounded-xl px-5 py-3 font-semibold bg-amber-400 text-zinc-900 hover:bg-amber-300 transition">Contact / Offerte</a>
                    <a href="tel:0622373308" class="rounded-xl px-5 py-3 font-semibold bg-zinc-900 text-white hover:bg-zinc-800 transition">Bel 06 22 37 33 08</a>
                </div>
            </div>

            <div>
                <img class="w-full h-full rounded-lg" src="/images/gt3rs.webp" alt="Porsche GT3 RS">
            </div>
        </div>
    </section>
@endsection
