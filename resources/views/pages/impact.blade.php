<x-layouts.site title="Impact & Stories — The Deborah Bonat Foundation">

    <x-site.hero
        title='Impact &amp; <span class="text-brand-gold">Stories</span>'
        subtitle="Every number has a name. Every statistic is a testimony."
    />

    {{-- Impact Numbers --}}
    <section class="py-16 bg-white">
        <div class="max-w-5xl mx-auto px-4 sm:px-6">
            <div class="text-center mb-10">
                <p class="text-brand-gold text-xs font-semibold uppercase tracking-widest mb-2">By the Numbers</p>
                <h2 class="text-3xl font-bold text-brand-blue">Our Impact</h2>
                <p class="mt-2 text-gray-400 text-sm">Numbers will be updated as programs launch and data is verified.</p>
            </div>
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-6 text-center">
                @foreach([
                    ['fa-solid fa-hands-holding-heart', '[TBC]', 'Widows Supported', 'W2W Programme'],
                    ['fa-solid fa-graduation-cap', '[TBC]', 'Children Sponsored', 'HOPE Fund'],
                    ['fa-solid fa-cross', '[TBC]', 'Missionaries Aided', 'EMS Field Support'],
                    ['fa-solid fa-dove', '[TBC]', 'New Converts Cared For', "Deborah's Basket"],
                ] as [$icon, $num, $label, $programme])
                    <div class="bg-brand-cream rounded-2xl p-6 border border-purple-100 group hover:border-brand-gold/40 transition-colors">
                        <i class="{{ $icon }} text-2xl text-brand-blue/40 group-hover:text-brand-gold transition-colors mb-3 block"></i>
                        <p class="text-3xl font-bold text-brand-blue">{{ $num }}</p>
                        <p class="text-gray-600 text-sm font-medium mt-1">{{ $label }}</p>
                        <p class="text-brand-gold/70 text-xs mt-0.5">{{ $programme }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Success Stories --}}
    <section class="py-20 bg-brand-cream">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">
            <div class="text-center mb-12">
                <p class="text-brand-gold text-xs font-semibold uppercase tracking-widest mb-2">Testimonies</p>
                <h2 class="text-3xl font-bold text-brand-blue">Success Stories</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach([
                    ['fa-solid fa-hands-holding-heart', 'bg-brand-blue', 'From Grief to Business', 'Widows', 'After completing the W2W tailoring programme, [Name] now employs two other widows in her community. "I stopped waiting for help and started being it."'],
                    ['fa-solid fa-graduation-cap', 'bg-brand-gold', 'A Child\'s Second Chance', 'HOPE Fund', '[Name] was on the verge of dropping out of school when the HOPE Fund stepped in. She has just completed her WAEC exams with distinction.'],
                    ['fa-solid fa-dove', 'bg-emerald-600', 'Not Alone in the Fire', 'New Convert Care', 'When [Name] converted to Christianity, he lost everything overnight. Deborah\'s Basket gave him food, shelter, and brothers who stood with him.'],
                ] as [$icon, $bg, $title, $category, $story])
                    <article class="bg-white rounded-2xl overflow-hidden border border-purple-100 shadow-sm hover:shadow-md transition-shadow">
                        <div class="aspect-video {{ $bg }} flex items-center justify-center">
                            <i class="{{ $icon }} text-white/80 text-5xl"></i>
                        </div>
                        <div class="p-6">
                            <span class="inline-block px-3 py-1 bg-brand-blue/10 text-brand-blue text-xs font-semibold rounded-full">{{ $category }}</span>
                            <h3 class="mt-3 font-bold text-gray-800 text-lg">{{ $title }}</h3>
                            <p class="mt-2 text-gray-500 text-sm leading-relaxed">{{ $story }}</p>
                            <p class="mt-4 text-brand-gold/60 text-xs italic flex items-center gap-1.5">
                                <i class="fa-regular fa-clock"></i>
                                Full story coming after foundation launch
                            </p>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Annual Report: Jos Relief --}}
    <section class="py-20 bg-white">
        <div class="max-w-5xl mx-auto px-4 sm:px-6">
            <div class="text-center mb-12">
                <p class="text-brand-gold text-xs font-semibold uppercase tracking-widest mb-2">Legacy Work</p>
                <h2 class="text-3xl font-bold text-brand-blue">The Jos Relief Distributions</h2>
                <p class="mt-3 text-gray-500 max-w-xl mx-auto text-sm">
                    For years before the foundation was formalised, Mama Deborah ran personal distributions in Jos.
                    These are part of our recorded legacy.
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                @foreach([
                    ['fa-solid fa-fire-flame-curved', 'Firewood', 'Delivered to elderly and widowed households for cooking and warmth.'],
                    ['fa-solid fa-basket-shopping', 'Foodstuff', 'Rice, beans, garri and essential foodstuffs distributed quarterly.'],
                    ['fa-solid fa-shirt', 'Clothing', 'Secondhand and donated clothing given to the elderly and vulnerable.'],
                ] as [$icon, $item, $desc])
                    <div class="bg-brand-cream rounded-2xl p-8 border border-purple-100 text-center group hover:border-brand-gold/40 transition-colors">
                        <div class="w-14 h-14 rounded-xl bg-brand-blue/10 flex items-center justify-center mx-auto mb-4 group-hover:bg-brand-gold/10 transition-colors">
                            <i class="{{ $icon }} text-brand-blue text-2xl group-hover:text-brand-gold transition-colors"></i>
                        </div>
                        <h3 class="font-bold text-brand-blue text-lg">{{ $item }}</h3>
                        <p class="text-gray-500 text-sm mt-2 leading-relaxed">{{ $desc }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Legacy Timeline --}}
    <section class="py-20 bg-brand-dark">
        <div class="max-w-3xl mx-auto px-4 sm:px-6">
            <div class="text-center mb-14">
                <p class="text-brand-gold text-xs font-semibold uppercase tracking-widest mb-2">A Life of Purpose</p>
                <h2 class="text-3xl font-bold text-white">Mama Deborah's Timeline</h2>
                <p class="mt-3 text-white/50 text-sm max-w-md mx-auto">From her earliest acts of service to the foundation that carries her name forward.</p>
            </div>

            <div class="relative">
                {{-- Vertical line --}}
                <div class="absolute left-5 top-0 bottom-0 w-px bg-brand-gold/20"></div>

                <div class="space-y-10">
                    @foreach([
                        ['~1970s', 'fa-solid fa-seedling', 'The Calling Begins', 'From her teenage years, Deborah showed an extraordinary compassion for the marginalised — beginning a lifetime of quiet, faithful service long before it had a name.'],
                        ['1996', 'fa-solid fa-heart-broken', 'Widowhood', 'The passing of her husband began a 30-year chapter of widowhood she would walk not in retreat, but in forward motion — using her own pain to fuel her service to others.'],
                        ['2000s', 'fa-solid fa-fire', 'Jos Distributions', 'Began personal firewood, foodstuff, and clothing distributions across Jos — supporting elderly households, widowed women, and struggling families each quarter.'],
                        ['2010s', 'fa-solid fa-people-roof', 'International Leadership', 'Served as International Leader of the ECWA Women\'s Fellowship and Dean of Students at Kagoro Seminary — shaping a generation of Christian women and leaders.'],
                        ['2010s', 'fa-solid fa-house-chimney-heart', 'A Sanctuary Called Home', 'Her home in Kaduna became a "Transition Point" — sheltering new converts fleeing persecution, providing meals, school fees, and discipleship with no questions asked.'],
                        ['29 Aug 2025', 'fa-solid fa-building-columns', 'Foundation Registered', 'The Deborah Bonat Foundation was formally registered with the Corporate Affairs Commission of Nigeria — formalising decades of personal outreach into an institution.'],
                        ['23 Mar 2026', 'fa-solid fa-dove', 'A Final Mission', 'Mama Deborah went to glory while on active mission to Taraba State. Her final words: <em>"I want to go with my people."</em> The outreach that didn\'t end.'],
                    ] as [$year, $icon, $title, $desc])
                        <div class="relative flex gap-6 items-start">
                            <div class="w-10 h-10 rounded-full bg-brand-gold/10 border border-brand-gold/30 flex items-center justify-center shrink-0 z-10">
                                <i class="{{ $icon }} text-brand-gold text-sm"></i>
                            </div>
                            <div class="pb-2">
                                <p class="text-brand-gold/70 text-xs font-semibold uppercase tracking-widest mb-1">{{ $year }}</p>
                                <h3 class="text-white font-bold text-base">{{ $title }}</h3>
                                <p class="mt-1 text-white/55 text-sm leading-relaxed">{!! $desc !!}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- Voices of Grace Conference --}}
    <section class="py-20 bg-brand-blue/5 border-y border-purple-100">
        <div class="max-w-5xl mx-auto px-4 sm:px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <p class="text-brand-gold text-xs font-semibold uppercase tracking-widest mb-3">Annual Event</p>
                    <h2 class="text-3xl font-bold text-brand-blue">Voices of Grace Conference</h2>
                    <p class="mt-4 text-gray-600 leading-relaxed">
                        The Voices of Grace Conference is the foundation's annual gathering — a day to celebrate testimonies,
                        hear from survivors and beneficiaries, and rally community support for the coming year's programs.
                    </p>
                    <p class="mt-3 text-gray-600 leading-relaxed">
                        The inaugural conference date will be announced following the foundation's formal launch.
                        All are welcome — register your interest below.
                    </p>
                    <a href="{{ route('contact') }}"
                       class="mt-7 inline-flex items-center gap-2 px-6 py-3 bg-brand-blue text-white rounded-xl font-semibold text-sm hover:bg-brand-blue-light transition-colors">
                        <i class="fa-regular fa-envelope"></i>
                        Register Interest
                    </a>
                </div>
                <div class="aspect-video bg-brand-blue rounded-3xl overflow-hidden flex flex-col items-center justify-center gap-4 border border-brand-blue/20 shadow-sm">
                    <i class="fa-solid fa-microphone-lines text-brand-gold/40 text-6xl"></i>
                    <div class="text-center px-6">
                        <p class="text-brand-gold font-bold text-lg">Voices of Grace</p>
                        <p class="text-white/50 text-sm mt-1">Annual Conference — Date TBC</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-site.cta-banner />

</x-layouts.site>
