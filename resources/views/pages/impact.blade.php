<x-layouts.site title="Impact & Stories — The Deborah Bonat Foundation">

    <x-site.hero
        title='Impact &amp; <span class="text-brand-gold">Stories</span>'
        subtitle="Every number has a name. Every statistic is a testimony."
    />

    {{-- Impact Numbers --}}
    <section class="py-16 bg-white">
        <div class="max-w-5xl mx-auto px-4 sm:px-6">
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-6 text-center">
                @foreach([
                    ['[TBC]', 'Widows Supported'],
                    ['[TBC]', 'Children Sponsored'],
                    ['[TBC]', 'Missionaries Aided'],
                    ['[TBC]', 'New Converts Cared For'],
                ] as [$num, $label])
                    <div class="bg-brand-cream rounded-2xl p-6 border border-purple-100">
                        <p class="text-3xl font-bold text-brand-blue">{{ $num }}</p>
                        <p class="text-gray-500 text-sm mt-1">{{ $label }}</p>
                    </div>
                @endforeach
            </div>
            <p class="text-center text-gray-400 text-xs mt-4">Impact numbers will be updated as programs launch.</p>
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
                    ['🌿', 'From Grief to Business', 'Widows', 'After completing the W2W tailoring programme, [Name] now employs two other widows in her community. "I stopped waiting for help and started being it."'],
                    ['📚', 'A Child\'s Second Chance', 'HOPE Fund', '[Name] was on the verge of dropping out of school when the HOPE Fund stepped in. She has just completed her WAEC exams with distinction.'],
                    ['🕊️', 'Not Alone in the Fire', 'New Convert Care', 'When [Name] converted to Christianity, he lost everything overnight. Deborah\'s Basket gave him food, shelter, and brothers who stood with him.'],
                ] as [$icon, $title, $category, $story])
                    <article class="bg-white rounded-2xl overflow-hidden border border-purple-100 shadow-sm">
                        <div class="aspect-video bg-gray-50 flex items-center justify-center text-5xl">{{ $icon }}</div>
                        <div class="p-6">
                            <span class="inline-block px-3 py-1 bg-brand-blue/10 text-brand-blue text-xs font-semibold rounded-full">{{ $category }}</span>
                            <h3 class="mt-3 font-bold text-gray-800 text-lg">{{ $title }}</h3>
                            <p class="mt-2 text-gray-500 text-sm leading-relaxed">{{ $story }}</p>
                            <p class="mt-4 text-gray-300 text-xs italic">[Full story — replace placeholder]</p>
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
                    ['🪵', 'Firewood', 'Delivered to elderly and widowed households for cooking and warmth.'],
                    ['🥫', 'Foodstuff', 'Rice, beans, garri and essential foodstuffs distributed quarterly.'],
                    ['👗', 'Clothing', 'Secondhand and donated clothing given to the elderly and vulnerable.'],
                ] as [$icon, $item, $desc])
                    <div class="bg-brand-cream rounded-2xl p-8 border border-purple-100 text-center">
                        <p class="text-4xl mb-4">{{ $icon }}</p>
                        <h3 class="font-bold text-brand-blue text-lg">{{ $item }}</h3>
                        <p class="text-gray-500 text-sm mt-2 leading-relaxed">{{ $desc }}</p>
                    </div>
                @endforeach
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
                        Register Interest
                    </a>
                </div>
                <div class="aspect-video bg-gray-100 rounded-3xl flex items-center justify-center text-gray-300 text-sm border border-gray-200">
                    [Conference photo — replace me]
                </div>
            </div>
        </div>
    </section>

    <x-site.cta-banner />

</x-layouts.site>
