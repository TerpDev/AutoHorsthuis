<!-- NAVBAR -->
<nav
    x-data="{
        mobileOpen:false, scrolled:false, lOpen:false, hOpen:false, cOpen:false,

        forceDark: {{ request()->is('LutscherAlmGallerij', 'AlmHutteGallerij') || request()->is('vacatures/*') ? 'true' : 'false' }},
    }"
    x-init="scrolled = window.scrollY > 10"
    @scroll.window="scrolled = window.scrollY > 10"
    :class="forceDark
        ? 'bg-black'
        : (scrolled ? 'bg-black/80 shadow-lg backdrop-blur-sm' : 'bg-transparent')"
    class="fixed top-0 left-0 w-full z-50 transition-colors duration-300"
>


    <div class="mx-auto w-full max-w-6xl px-6 lg:px-8">
        <div class="flex items-center justify-between h-24 lg:h-28 transition-all duration-300">
            <!-- Logo -->
            <a href="/" class="flex items-center" wire:navigate>
                <img src="{{ asset('images/logolutscheralm.png') }}"
                     alt="Logo" class="h-16 w-auto lg:h-20" />
            </a>


            <!-- Desktop menu -->
            <div class="hidden lg:flex items-center gap-7">
                <a href="/" class="relative text-white text-lg xl:text-xl transition
           after:absolute after:left-0 after:-bottom-1 after:h-[2px] after:w-0 after:bg-white
           after:transition-all after:duration-300 hover:after:w-full" wire:navigate>Home</a>

                <a href="/about" class="relative text-white text-lg xl:text-xl transition
           after:absolute after:left-0 after:-bottom-1 after:h-[2px] after:w-0 after:bg-white
           after:transition-all after:duration-300 hover:after:w-full" wire:navigate>Menukaart</a>

                <!-- Lutscher Alm -->
                <div class="relative" @mouseenter="lOpen=true" @mouseleave="lOpen=false">
                    <button @click="lOpen=!lOpen" class="cursor-pointer relative text-white text-lg xl:text-xl flex items-center gap-2
             after:absolute after:left-0 after:-bottom-1 after:h-[2px] after:w-0 after:bg-white
             after:transition-all after:duration-300 hover:after:w-full">
                        Lutscher Alm
                        <svg class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.17l3.71-3.94a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd"/></svg>
                    </button>
                    <div x-cloak x-show="lOpen" x-transition.origin.top.left @click.outside="lOpen=false"
                         class="absolute left-0 mt-2 w-64 rounded-lg bg-white text-gray-800 shadow-lg ring-1 ring-black/5 p-1 z-20">
                        <a href="#" class="block px-3 py-2 rounded-md hover:bg-gray-100" wire:navigate>Kerst</a>
                        <a href="#" class="block px-3 py-2 rounded-md hover:bg-gray-100" wire:navigate>Groepen & Arrangementen</a>
                        <a href="#" class="block px-3 py-2 rounded-md hover:bg-gray-100" wire:navigate>Over ons</a>
                        <a href="#" class="block px-3 py-2 rounded-md hover:bg-gray-100" wire:navigate>Vacatures</a>
                        <a href="/LutscherAlmGallerij" class="block px-3 py-2 rounded-md hover:bg-gray-100" wire:navigate>Lutscher Alm in Beeld</a>
                    </div>
                </div>

                <!-- Alm Hütte -->
                <div class="relative" @mouseenter="hOpen=true" @mouseleave="hOpen=false">
                    <button @click="hOpen=!hOpen" class="cursor-pointer relative text-white text-lg xl:text-xl flex items-center gap-2
             after:absolute after:left-0 after:-bottom-1 after:h-[2px] after:w-0 after:bg-white
             after:transition-all after:duration-300 hover:after:w-full">
                        Alm Hütte
                        <svg class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.17l3.71-3.94a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd"/></svg>
                    </button>
                    <div x-cloak x-show="hOpen" x-transition.origin.top.left @click.outside="hOpen=false"
                         class="absolute left-0 mt-2 w-64 rounded-lg bg-white text-gray-800 shadow-lg ring-1 ring-black/5 p-1 z-20">
                        <a href="#" class="block px-3 py-2 rounded-md hover:bg-gray-100" wire:navigate>Diner arrangement</a>
                        <a href="#" class="block px-3 py-2 rounded-md hover:bg-gray-100" wire:navigate>Vergaderen</a>
                        <a href="#" class="block px-3 py-2 rounded-md hover:bg-gray-100" wire:navigate>Feesten & Partijen</a>
                        <a href="#" class="block px-3 py-2 rounded-md hover:bg-gray-100" wire:navigate>Koffietafel</a>
                        <a href="/AlmHutteGallerij" class="block px-3 py-2 rounded-md hover:bg-gray-100" wire:navigate>Alm Hütte in Beeld</a>
                    </div>
                </div>

                <!-- Contact -->
                <div class="relative" @mouseenter="cOpen=true" @mouseleave="cOpen=false">
                    <button @click="cOpen=!cOpen" class="cursor-pointer relative text-white text-lg xl:text-xl flex items-center gap-2
             after:absolute after:left-0 after:-bottom-1 after:h-[2px] after:w-0 after:bg-white
             after:transition-all after:duration-300 hover:after:w-full">
                        Contact
                        <svg class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.17l3.71-3.94a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd"/></svg>
                    </button>
                    <div x-cloak x-show="cOpen" x-transition.origin.top.left @click.outside="cOpen=false"
                         class="absolute left-0 mt-2 w-56 rounded-lg bg-white text-gray-800 shadow-lg ring-1 ring-black/5 p-1 z-20">
                        <a href="#" class="block px-3 py-2 rounded-md hover:bg-gray-100" wire:navigate>Après-ski</a>
                        <a href="#" class="block px-3 py-2 rounded-md hover:bg-gray-100" wire:navigate>Live muziek</a>
                        <a href="#" class="block px-3 py-2 rounded-md hover:bg-gray-100" wire:navigate>Thema-avonden</a>
                    </div>
                </div>
            </div>

            <!-- CTA desktop -->
            <div class="hidden lg:flex">
                <a href="/reserveren"
                   class="cursor-pointer text-lg xl:text-xl font-medium bg-amber-900 py-3 px-4 text-gray-200 rounded-lg hover:bg-amber-800 transition">
                    Reserveren
                </a>
            </div>

            <!-- Mobile burger -->
            <button
                @click="mobileOpen=!mobileOpen"
                class="lg:hidden relative w-11 h-11 flex items-center justify-center"
                aria-label="Open menu"
            >
                <!-- 3 lijnen -->
                <span class="absolute block h-0.5 w-7 bg-white transition-all duration-300"
                      :class="mobileOpen ? 'rotate-45 translate-y-0' : '-translate-y-2'"></span>
                <span class="absolute block h-0.5 w-7 bg-white transition-all duration-300"
                      :class="mobileOpen ? 'opacity-0' : 'opacity-100'"></span>
                <span class="absolute block h-0.5 w-7 bg-white transition-all duration-300"
                      :class="mobileOpen ? '-rotate-45 translate-y-0' : 'translate-y-2'"></span>
            </button>
        </div>

        <!-- Mobile menu -->
        <div x-cloak x-show="mobileOpen"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0 -translate-y-2"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 -translate-y-2"
             class="lg:hidden pb-6 text-white bg-black/90 backdrop-blur-sm rounded-b-xl"
        >
            <div class="flex flex-col gap-1 pt-3">
                <a href="/" class="px-4 py-2 hover:text-amber-500 transition">Home</a>
                <a href="/about" class="px-4 py-2 hover:text-amber-500 transition">Menukaart</a>

                <!-- Mobile accordions -->
                <div x-data="{open:false}" class="px-2">
                    <button @click="open=!open" class="w-full flex items-center justify-between px-2 py-2 hover:text-amber-500 transition">
                        <span>Lutscher Alm</span>
                        <svg :class="open?'rotate-180':''" class="h-4 w-4 transition-transform" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.17l3.71-3.94a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd"/></svg>
                    </button>
                    <div x-show="open" x-transition class="ml-3 flex flex-col">
                        <a href="#" class="px-3 py-1.5 text-gray-300 hover:text-amber-500">Kerst</a>
                        <a href="#" class="px-3 py-1.5 text-gray-300 hover:text-amber-500">Groepen & Arrangementen</a>
                        <a href="#" class="px-3 py-1.5 text-gray-300 hover:text-amber-500">Vacatures</a>
                    </div>
                </div>

                <div x-data="{open:false}" class="px-2">
                    <button @click="open=!open" class="w-full flex items-center justify-between px-2 py-2 hover:text-amber-500 transition">
                        <span>Alm Hütte</span>
                        <svg :class="open?'rotate-180':''" class="h-4 w-4 transition-transform" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.17l3.71-3.94a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd"/></svg>
                    </button>
                    <div x-show="open" x-transition class="ml-3 flex flex-col">
                        <a href="#" class="px-3 py-1.5 text-gray-300 hover:text-amber-500">Diner arrangement</a>
                        <a href="#" class="px-3 py-1.5 text-gray-300 hover:text-amber-500">Vergaderen</a>
                        <a href="#" class="px-3 py-1.5 text-gray-300 hover:text-amber-500">Feesten & Partijen</a>
                    </div>
                </div>

                <a href="/contact" class="px-4 py-2 hover:text-amber-500 transition">Contact</a>

                <a href="/reserveren"
                   class="mt-3 mx-4 px-4 py-2 rounded-lg bg-amber-900 hover:bg-amber-800 text-center transition">
                    Reserveren
                </a>
            </div>
        </div>
    </div>
</nav>

<!-- Spacer zodat content niet achter fixed navbar valt -->
