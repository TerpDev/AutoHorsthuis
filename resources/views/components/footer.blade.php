<footer class="bg-black text-gray-300">
    <div class="mx-auto w-full max-w-6xl px-4 lg:px-6 py-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-10 items-start">
            <!-- Brand / CTA -->
            <div class="space-y-3">
                <a href="/" class="flex justify-center items-center">
                    <img src="{{ asset('images/horsthuislogo.webp') }}" alt="Auto Horsthuis" class="h-16 w-auto lg:h-20" />
                </a>
                <p class="text-sm text-gray-400">
                    Eerlijk advies, snelle service en vakwerk voor elk merk.
                </p>
                <div class="flex flex-col gap-3">
                    <a href="/contact"
                       class="inline-flex items-center justify-center rounded-lg px-4 py-2 font-semibold bg-red-600 text-white hover:bg-red-500 transition">
                        Contact
                    </a>
                    <a href="tel:0622373308"
                       class="inline-flex items-center justify-center rounded-lg px-4 py-2 font-semibold bg-white/10 text-white hover:bg-white/20 transition">
                        Bel: 06 22 37 33 08
                    </a>
                </div>
            </div>

            <!-- Adres -->
            <div class="md:ml-8 lg:ml-10 xl:ml-12">
                <h2 class="mb-4 text-xl font-bold text-white">Adres</h2>
                <ul class="space-y-4">
                    <li>
                        <a href="https://www.google.com/maps/place/Auto+Horsthuis/@52.3008493,6.9251908,16z/data=!3m1!4b1!4m6!3m5!1s0x47b8173b8ada2995:0xbc80dd67c5c025ad!8m2!3d52.3008493!4d6.9277657!16s%2Fg%2F11g8b614bw?entry=ttu"
                           target="_blank" rel="noopener"
                           class="hover:text-gray-400 transition">
                            Eekboerstraat 28K<br>7575 AX Oldenzaal
                        </a>
                    </li>
                    <li class="space-y-1">
                        <a href="tel:0622373308" class="hover:text-gray-400 transition block">06 22 37 33 08</a>
                        <a href="mailto:info@autohorsthuis.nl" class="hover:text-gray-400 transition block">info@autohorsthuis.nl</a>
                    </li>
                </ul>
            </div>

            <!-- Snel naar -->
            <div class="md:ml-8 lg:ml-10 xl:ml-12">
                <h2 class="mb-4 text-xl font-bold text-white">Ga direct naar</h2>
                <ul class="space-y-3">
                    <li><a href="/" class="relative text-white transition
           after:absolute after:left-0 after:-bottom-1 after:h-[2px] after:w-0 after:bg-white
           after:transition-all after:duration-300 hover:after:w-full">Home</a></li>
                    <li><a href="/autoschade" class="relative text-white transition
           after:absolute after:left-0 after:-bottom-1 after:h-[2px] after:w-0 after:bg-white
           after:transition-all after:duration-300 hover:after:w-full">Autoschade</a></li>
                    <li><a href="/spuiterij" class="relative text-white transition
           after:absolute after:left-0 after:-bottom-1 after:h-[2px] after:w-0 after:bg-white
           after:transition-all after:duration-300 hover:after:w-full">Spuiterij</a></li>
                    <li><a href="/banden-velgen" class="relative text-white transition
           after:absolute after:left-0 after:-bottom-1 after:h-[2px] after:w-0 after:bg-white
           after:transition-all after:duration-300 hover:after:w-full">Banden &amp; Velgen</a></li>
                    <li><a href="/contact" class="relative text-white transition
           after:absolute after:left-0 after:-bottom-1 after:h-[2px] after:w-0 after:bg-white
           after:transition-all after:duration-300 hover:after:w-full">Contact</a></li>
                </ul>
            </div>

            <!-- Openingstijden -->
            <div class="md:ml-8 lg:ml-10 xl:ml-12">
                <h2 class="mb-4 text-xl font-bold text-white">Openingstijden</h2>
                <ul class="text-sm divide-y divide-white/5 rounded-lg overflow-hidden border border-white/10">
                    <li class="flex items-center justify-between bg-white/5 px-4 py-2">
                        <span>Maandag</span><span>09:00–23:00</span>
                    </li>
                    <li class="flex items-center justify-between px-4 py-2">
                        <span>Dinsdag</span><span>09:00–23:00</span>
                    </li>
                    <li class="flex items-center justify-between bg-white/5 px-4 py-2">
                        <span>Woensdag</span><span>09:00–17:00</span>
                    </li>
                    <li class="flex items-center justify-between px-4 py-2">
                        <span>Donderdag</span><span>09:00–17:00</span>
                    </li>
                    <li class="flex items-center justify-between bg-white/5 px-4 py-2">
                        <span>Vrijdag</span><span>09:00–17:00</span>
                    </li>
                    <li class="flex items-center justify-between px-4 py-2">
                        <span>Zaterdag</span><span>08:00–17:00</span>
                    </li>
                    <li class="flex items-center justify-between bg-white/5 px-4 py-2">
                        <span>Zondag</span><span>Gesloten</span>
                    </li>
                </ul>
            </div>
        </div>

        <hr class="my-8 border-white/10" />

        <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
            <p class="text-sm text-gray-400">© Auto Horsthuis, {{ date('Y') }}</p>
            <div class="flex items-center gap-4">
                <a href="#" aria-label="Facebook" class="hover:text-gray-400 transition">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor"><path d="M22 12.06C22 6.49 17.52 2 11.94 2S2 6.49 2 12.06c0 5.01 3.66 9.16 8.44 9.94v-7.03H7.9v-2.9h2.54V9.41c0-2.51 1.5-3.9 3.79-3.9 1.1 0 2.25.2 2.25.2v2.47h-1.27c-1.25 0-1.64.78-1.64 1.57v1.89h2.79l-.45 2.9h-2.34v7.03C18.34 21.22 22 17.07 22 12.06z"/></svg>
                </a>
                <a href="#" aria-label="Instagram" class="hover:text-gray-400 transition">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor"><path d="M7 2C4.2 2 2 4.2 2 7v10c0 2.8 2.2 5 5 5h10c2.8 0 5-2.2 5-5V7c0-2.8-2.2-5-5-5H7zm13 15c0 1.6-1.4 3-3 3H7c-1.6 0-3-1.4-3-3V7c0-1.6 1.4-3 3-3h10c1.6 0 3 1.4 3 3v10z"/><circle cx="12" cy="12" r="3.2"/><circle cx="17.3" cy="6.7" r="1.2"/></svg>
                </a>
                <a href="#" aria-label="LinkedIn" class="hover:text-gray-400 transition">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor"><path d="M6.94 7.94A2.44 2.44 0 1 1 6.93 3a2.44 2.44 0 0 1 0 4.88zM4.97 9.62h3.92v10.36H4.97zM13.2 9.62h3.76v1.42h.05c.52-.99 1.8-2.04 3.7-2.04 3.96 0 4.7 2.61 4.7 6v4.98h-3.92v-4.42c0-1.06-.02-2.43-1.48-2.43-1.48 0-1.71 1.16-1.71 2.35v4.5H13.2z"/></svg>
                </a>
            </div>
        </div>
    </div>
</footer>
