@extends('layout.app')
@section('title', 'Autoschade | Auto Horsthuis')

@section('content')
    <section class="relative min-h-[55vh] flex items-center justify-center bg-cover bg-center"
             style="background-image:url('{{ asset('images/autoschade.webp') }}');">
        <div class="absolute inset-0 bg-black/60"></div>
        <div class="relative z-10 mx-auto max-w-6xl px-6 lg:px-8 text-center text-white">
            <p class="text-xs tracking-wider uppercase bg-white/10 px-3 py-1 rounded-full inline-block backdrop-blur">Autoschade</p>
            <h1 class="mt-4 text-4xl sm:text-5xl lg:text-6xl font-bold tracking-wide drop-shadow">Autoschade Herstellen</h1>
            <p class="mt-4 max-w-2xl mx-auto text-white/90">Van kleine krassen tot groter herstel – snel, vakkundig en eerlijk advies.</p>
            <div class="mt-6 flex flex-wrap items-center justify-center gap-3">
                <a href="/contact" class="rounded-xl px-5 py-3 text-lg font-semibold bg-red-600 text-white hover:bg-red-500 transition">Offerte / Afspraak</a>
                <a href="tel:0622373308" class="rounded-xl px-5 py-3 text-lg font-semibold bg-white/10 text-white hover:bg-white/20 backdrop-blur transition">Bel 06 22 37 33 08</a>
            </div>
        </div>
    </section>

    <section class="py-12 px-6 lg:px-8 bg-white">
        <div class="mx-auto max-w-5xl">
            <div class="prose prose-zinc">
                <h2 class="text-2xl sm:text-3xl font-bold text-zinc-900">Alles voor uw autoschade, onder één dak</h2>
                <p class="mt-3 text-zinc-700">Uitdeuken, spuiten en meer — hieronder onze diensten.</p>
            </div>
        </div>
    </section>

    <section class="py-4 px-6 lg:px-8 bg-zinc-50">
        <div class="mx-auto max-w-6xl grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
            <article class="group relative overflow-hidden rounded-2xl bg-black shadow-lg">
                <img src="{{ asset('images/autoschade/spotrepair.webp') }}" alt="Spot repair" class="h-56 w-full object-cover transition duration-500 group-hover:scale-105" loading="lazy">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                <div class="absolute inset-x-0 bottom-0 p-5 text-white">
                    <h3 class="text-xl font-bold">Spot repair</h3>
                    <p class="mt-1 text-white/80 text-sm">Ideaal voor kleine krassen of steenslag.</p>
                </div>
            </article>

            <article class="group relative overflow-hidden rounded-2xl bg-black shadow-lg">
                <img src="{{ asset('images/autoschade/uitdeuken.webp') }}" alt="Uitdeuken zonder spuiten" class="h-56 w-full object-cover transition duration-500 group-hover:scale-105" loading="lazy">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                <div class="absolute inset-x-0 bottom-0 p-5 text-white">
                    <h3 class="text-xl font-bold">Uitdeuken zonder spuiten</h3>
                    <p class="mt-1 text-white/80 text-sm">Snel en voordelig bij kleine deuken, lak intact.</p>
                </div>
            </article>

            <article class="group relative overflow-hidden rounded-2xl bg-black shadow-lg">
                <img src="{{ asset('images/autoschade/ruitreparatie.webp') }}" alt="Ruitreparatie" class="h-56 w-full object-cover transition duration-500 group-hover:scale-105" loading="lazy">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                <div class="absolute inset-x-0 bottom-0 p-5 text-white">
                    <h3 class="text-xl font-bold">Ruitreparatie</h3>
                    <p class="mt-1 text-white/80 text-sm">Sterretje? Snel repareren voorkomt vervangen.</p>
                </div>
            </article>

            <article class="group relative overflow-hidden rounded-2xl bg-black shadow-lg">
                <img src="{{ asset('images/autoschade/aluminiumherstel.webp') }}" alt="Aluminium herstel" class="h-56 w-full object-cover transition duration-500 group-hover:scale-105" loading="lazy">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                <div class="absolute inset-x-0 bottom-0 p-5 text-white">
                    <h3 class="text-xl font-bold">Aluminium herstel</h3>
                    <p class="mt-1 text-white/80 text-sm">Speciaal gereedschap & expertise in huis.</p>
                </div>
            </article>
        </div>
    </section>

    <section class="py-14 px-6 lg:px-8 bg-white">
        <div class="mx-auto max-w-5xl space-y-6">
            <div id="spot-repair" class="rounded-2xl border border-zinc-200 p-6 lg:p-8">
                <h3 class="text-2xl font-bold text-zinc-900">Spot repair</h3>
                <p class="mt-3 text-zinc-700">Kleine lakbeschadiging? <strong>Spot repair</strong> werkt efficiënt en voordelig.</p>
            </div>
            <div id="pdr" class="rounded-2xl border border-zinc-200 p-6 lg:p-8">
                <h3 class="text-2xl font-bold text-zinc-900">Uitdeuken zonder spuiten</h3>
                <p class="mt-3 text-zinc-700">Ideaal bij kleine deuken met onbeschadigde lak. Snel en betaalbaar.</p>
            </div>
            <div id="ruit" class="rounded-2xl border border-zinc-200 p-6 lg:p-8">
                <h3 class="text-2xl font-bold text-zinc-900">Ruitreparatie</h3>
                <p class="mt-3 text-zinc-700">Tijdig repareren voorkomt doorscheuren en dure vervanging.</p>
            </div>
            <div id="aluminium" class="rounded-2xl border border-amber-200 bg-amber-50 p-6 lg:p-8">
                <h3 class="text-2xl font-bold text-zinc-900">Aluminium herstel</h3>
                <p class="mt-3 text-zinc-700">Specifieke technieken en tooling voor moderne aluminium carrosserieën.</p>
            </div>
        </div>
    </section>

    <section class="relative py-14 bg-cover bg-center" style="background-image:url('{{ asset('images/autoschade-cta.webp') }}');">
        <div class="absolute inset-0 bg-black/70"></div>
        <div class="relative z-10 mx-auto max-w-6xl px-6 lg:px-8 text-center text-white">
            <h3 class="text-3xl font-bold">Schade? Stuur een foto – u krijgt snel reactie</h3>
            <p class="mt-2 text-white/90">App of mail uw schade en ontvang een vrijblijvende indicatie.</p>
            <div class="mt-5 flex flex-wrap items-center justify-center gap-3">
                <a href="/contact" class="rounded-xl px-5 py-3 text-lg font-semibold bg-amber-400 text-zinc-900 hover:bg-amber-300 transition">Naar contact</a>
                <a href="mailto:info@autohorsthuis.nl" class="rounded-xl px-5 py-3 text-lg font-semibold bg-white/10 text-white hover:bg-white/20 transition">Mail ons</a>
            </div>
        </div>
    </section>
@endsection
