<x-layouts.site title="Media & Resources — The Deborah Bonat Foundation">

    <x-site.hero
        title='Media &amp; <span class="text-brand-gold">Resources</span>'
        subtitle="Press coverage, photos, reports, and downloadable resources about the foundation."
    />

    <section class="py-20 bg-brand-cream">
        <div class="max-w-6xl mx-auto px-4 sm:px-6">

            {{-- Press / News --}}
            <div class="mb-16">
                <div class="flex items-end justify-between mb-8">
                    <div>
                        <p class="text-brand-gold text-xs font-semibold uppercase tracking-widest mb-1">Press</p>
                        <h2 class="text-2xl font-bold text-brand-blue">In the News</h2>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @foreach([
                        ['Foundation Launch Announced', 'The Deborah Bonat Foundation officially launches in memory of dedicated servant and widow Deborah Iya Bonat.', '[Publication TBC]', '[Date TBC]'],
                        ['Taraba Mission Trip', 'A retrospective on Mama Deborah\'s final mission trip to Taraba State and the communities she served.', '[Publication TBC]', '[Date TBC]'],
                        ['Five Pillars Initiative', 'How the foundation\'s five-pillar model addresses the most overlooked communities in Northern Nigeria.', '[Publication TBC]', '[Date TBC]'],
                    ] as [$title, $excerpt, $pub, $date])
                        <article class="bg-white rounded-2xl p-6 border border-purple-100 shadow-sm">
                            <span class="text-brand-gold text-xs font-semibold uppercase tracking-wider">{{ $pub }}</span>
                            <h3 class="mt-2 font-bold text-gray-800">{{ $title }}</h3>
                            <p class="mt-2 text-gray-500 text-sm leading-relaxed">{{ $excerpt }}</p>
                            <p class="mt-3 text-gray-300 text-xs">{{ $date }}</p>
                        </article>
                    @endforeach
                </div>
            </div>

            {{-- Photo Gallery Placeholder --}}
            <div class="mb-16">
                <div class="mb-8">
                    <p class="text-brand-gold text-xs font-semibold uppercase tracking-widest mb-1">Gallery</p>
                    <h2 class="text-2xl font-bold text-brand-blue">Photo Gallery</h2>
                </div>
                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-4">
                    @for($i = 1; $i <= 8; $i++)
                        <div class="aspect-square bg-gray-100 rounded-2xl flex items-center justify-center text-gray-300 text-xs border border-gray-200 hover:border-brand-gold/40 transition-colors">
                            [Photo {{ $i }}]
                        </div>
                    @endfor
                </div>
                <p class="text-gray-400 text-xs text-center mt-4">Photos will be added after the foundation launch and memorial service.</p>
            </div>

            {{-- Downloads --}}
            <div>
                <div class="mb-8">
                    <p class="text-brand-gold text-xs font-semibold uppercase tracking-widest mb-1">Resources</p>
                    <h2 class="text-2xl font-bold text-brand-blue">Downloads</h2>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    @foreach([
                        ['📄', 'Foundation Overview Brochure', 'One-page summary of the foundation, its mission, and its five pillars.', 'PDF'],
                        ['📊', 'Corporate Partnership Prospectus', 'Full details on corporate giving tiers and co-branding opportunities.', 'PDF'],
                        ['✝️', 'Church Partnership Pack', 'How your congregation can become a local chapter of the foundation.', 'PDF'],
                        ['📋', 'Annual Report (Coming Soon)', 'Impact report for the foundation\'s first year of operations.', 'PDF'],
                    ] as [$icon, $title, $desc, $type])
                        <div class="bg-white rounded-2xl p-5 border border-purple-100 shadow-sm flex items-start gap-4">
                            <div class="text-2xl">{{ $icon }}</div>
                            <div class="flex-grow">
                                <h4 class="font-semibold text-gray-800 text-sm">{{ $title }}</h4>
                                <p class="text-gray-400 text-xs mt-1">{{ $desc }}</p>
                            </div>
                            <span class="text-brand-gold/60 text-xs font-medium shrink-0">{{ $type }}</span>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Press Contact --}}
            <div class="mt-14 bg-brand-blue rounded-3xl p-8 text-center text-white">
                <h3 class="text-xl font-bold text-brand-gold mb-2">Media Enquiries</h3>
                <p class="text-white/70 text-sm mb-6 max-w-lg mx-auto">
                    For press interviews, photo requests, or foundation statements, please contact our communications team.
                </p>
                <a href="{{ route('contact') }}"
                   class="inline-flex items-center justify-center px-8 py-3 bg-brand-gold text-brand-blue rounded-xl font-bold text-sm hover:bg-brand-gold-light transition-colors">
                    Contact Communications
                </a>
            </div>

        </div>
    </section>

</x-layouts.site>
