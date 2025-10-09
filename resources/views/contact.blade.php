@extends('layout.app')
@section('title', 'Contact | Auto Horsthuis')

@section('content')
    <section class="relative min-h-[45vh] flex items-center justify-center bg-cover bg-center"
             style="background-image:url('{{ asset('images/contact-hero.webp') }}');">
        <div class="absolute inset-0 bg-black/60"></div>
        <div class="relative z-10 mx-auto max-w-6xl px-6 lg:px-8 text-center text-white">
            <p class="text-xs tracking-wider uppercase bg-white/10 px-3 py-1 rounded-full inline-block backdrop-blur">Contact</p>
            <h1 class="mt-4 text-4xl sm:text-5xl lg:text-6xl font-bold tracking-wide drop-shadow">Neem contact op</h1>
            <p class="mt-4 max-w-2xl mx-auto text-white/90">Vragen, offerte of afspraak? We helpen u graag verder.</p>

            <div class="mt-6 flex flex-wrap items-center justify-center gap-3">
                <a href="tel:0622373308" class="rounded-xl px-5 py-3 text-lg font-semibold bg-red-600 text-white hover:bg-red-500 transition">Bel 06 22 37 33 08</a>
                <a href="mailto:info@autohorsthuis.nl" class="rounded-xl px-5 py-3 text-lg font-semibold bg-white/10 text-white hover:bg-white/20 transition">Mail ons</a>
            </div>
        </div>
    </section>

    <section class="py-12 px-6 lg:px-8 bg-white">
        <div class="mx-auto max-w-6xl grid gap-10 lg:grid-cols-2">
            <aside class="space-y-6">
                <div class="rounded-2xl border border-zinc-200 p-6">
                    <h2 class="text-2xl font-bold text-zinc-900">Auto Horsthuis</h2>
                    <p class="mt-2 text-zinc-700">Eekboerstraat 28K<br>7575 AX Oldenzaal</p>
                    <div class="mt-4 space-y-2">
                        <a href="tel:0622373308" class="block text-zinc-900 font-medium hover:underline">06 22 37 33 08</a>
                        <a href="mailto:info@autohorsthuis.nl" class="block text-zinc-900 font-medium hover:underline">info@autohorsthuis.nl</a>
                        <a target="_blank" rel="noopener" href="https://www.google.com/maps/place/Auto+Horsthuis/@52.3008493,6.9251908,16z" class="inline-flex items-center gap-2 text-amber-600 hover:underline">
                            Route / Google Maps
                            <svg class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor"><path d="M12.293 4.293a1 1 0 011.414 0L18 8.586l-4.293 4.293a1 1 0 01-1.414-1.414L14.586 10H4a1 1 0 110-2h10.586l-2.293-2.293a1 1 0 010-1.414z"/></svg>
                        </a>
                    </div>
                </div>

                <div class="rounded-2xl border border-zinc-200 p-6">
                    <h3 class="text-xl font-bold text-zinc-900">Openingstijden</h3>
                    <ul class="mt-3 text-sm divide-y divide-zinc-200 rounded-lg overflow-hidden border border-zinc-200">
                        <li class="flex items-center justify-between bg-zinc-50 px-4 py-2"><span>Maandag</span><span>09:00–23:00</span></li>
                        <li class="flex items-center justify-between px-4 py-2"><span>Dinsdag</span><span>09:00–23:00</span></li>
                        <li class="flex items-center justify-between bg-zinc-50 px-4 py-2"><span>Woensdag</span><span>09:00–17:00</span></li>
                        <li class="flex items-center justify-between px-4 py-2"><span>Donderdag</span><span>09:00–17:00</span></li>
                        <li class="flex items-center justify-between bg-zinc-50 px-4 py-2"><span>Vrijdag</span><span>09:00–17:00</span></li>
                        <li class="flex items-center justify-between px-4 py-2"><span>Zaterdag</span><span>08:00–17:00</span></li>
                        <li class="flex items-center justify-between bg-zinc-50 px-4 py-2"><span>Zondag</span><span>Gesloten</span></li>
                    </ul>
                    <p class="mt-3 text-xs text-zinc-500">Let op: openingstijden kunnen afwijken op feestdagen.</p>
                </div>
            </aside>

            <div class="rounded-2xl border border-amber-200 bg-amber-50 p-6 lg:p-8 space-y-6 h-full">
                <div>
                    <h3 class="text-2xl font-bold text-zinc-900">Altijd welkom bij Auto Horsthuis</h3>
                    <p class="mt-3 text-zinc-800">
                        Heeft u autoschade, wilt u een prijsindicatie of zoekt u advies over banden en velgen?
                        Bel ons gerust of kom langs bij onze werkplaats in Oldenzaal. Wij helpen u snel, eerlijk en vakkundig verder.
                    </p>
                    <div class="mt-6 flex flex-wrap items-center gap-3">
                        <a href="tel:0622373308" class="rounded-xl px-5 py-3 font-semibold bg-amber-400 text-zinc-900 hover:bg-amber-300 transition">Bel ons</a>
                        <a href="mailto:info@autohorsthuis.nl" class="rounded-xl px-5 py-3 font-semibold bg-zinc-900 text-white hover:bg-zinc-800 transition">Mail direct</a>
                        <a href="ms-outlook://compose?to=info@autohorsthuis.nl" class="rounded-xl px-5 py-3 font-semibold bg-white/20 text-zinc-900 border border-zinc-300 hover:bg-white/40 transition">Open in Outlook</a>
                    </div>
                </div>

                <div class="rounded-2xl overflow-hidden border border-zinc-200">
                    <iframe title="Auto Horsthuis op kaart"
                            src="https://maps.google.com/maps?q=Eekboerstraat%2028K%2C%207575%20AX%20Oldenzaal&t=&z=14&ie=UTF8&iwloc=&output=embed"
                            width="100%" height="360" style="border:0;" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>

    <section class="relative py-14 bg-cover bg-center" style="background-image:url('{{ asset('images/contact-cta.webp') }}');">
        <div class="absolute inset-0 bg-black/70"></div>
        <div class="relative z-10 mx-auto max-w-6xl px-6 lg:px-8 text-center text-white">
            <h3 class="text-3xl font-bold">Langskomen? We staan voor u klaar</h3>
            <p class="mt-2 text-white/90">Newtonstraat 15, 7575 AX Oldenzaal — vlakbij het centrum.</p>
            <div class="mt-5 flex flex-wrap items-center justify-center gap-3">
                <a href="tel:0622373308" class="rounded-xl px-5 py-3 font-semibold bg-amber-400 text-zinc-900 hover:bg-amber-300 transition">Bel nu</a>
                <a href="mailto:info@autohorsthuis.nl" class="rounded-xl px-5 py-3 font-semibold bg-white/10 text-white hover:bg-white/20 transition">Mail ons</a>
            </div>
        </div>
    </section>
@endsection
