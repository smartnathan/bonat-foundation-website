<x-layouts.site title="New Convert Care — The Deborah Bonat Foundation">

    <x-site.hero
        title='<span class="text-brand-gold">New Convert</span> Care'
        subtitle='"I was a stranger and you invited me in." — Matthew 25:35'
    />

    <section class="py-20 bg-brand-cream">
        <div class="max-w-4xl mx-auto px-4 sm:px-6">

            <div class="bg-white rounded-3xl p-8 sm:p-12 border border-purple-100 shadow-sm mb-10">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-14 h-14 rounded-xl bg-brand-blue/10 flex items-center justify-center text-2xl text-brand-blue">
                        <i class="fa-solid fa-dove"></i>
                    </div>
                    <div>
                        <h2 class="text-2xl font-bold text-brand-blue">Deborah's Basket</h2>
                        <p class="text-brand-gold text-sm font-semibold">New Convert Care Initiative</p>
                    </div>
                </div>

                <h3 class="text-lg font-bold text-gray-800 mb-3">The Problem</h3>
                <p class="text-gray-600 leading-relaxed mb-6">
                    New Christians in Nigeria — particularly those converting from Islam or other faiths in Northern Nigeria —
                    frequently face persecution, rejection by family, loss of home and livelihood, and physical danger.
                    Without immediate, holistic support, many are unable to sustain their faith or rebuild their lives.
                    They need more than sympathy; they need a community that stands with them from day one.
                </p>

                <h3 class="text-lg font-bold text-gray-800 mb-3">Our Response</h3>
                <p class="text-gray-600 leading-relaxed mb-4">
                    Deborah's Basket provides a comprehensive care model for new converts facing persecution and displacement —
                    combining immediate material relief with spiritual guidance, legal protection, skills development,
                    and community integration. No one who chooses faith should face the consequences alone.
                </p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-6">
                    @foreach([
                        ['Immediate Relief & Shelter', 'Emergency provision of food, clothing, hygiene essentials, and safe temporary housing for displaced converts.'],
                        ['Trauma Counselling & Spiritual Guidance', 'Psychological support and discipleship mentorship to help new believers heal, grow, and remain steadfast in faith.'],
                        ['Legal Aid & Advocacy', 'Connecting converts with legal resources and advocating for their rights in cases of persecution, discrimination, or property dispute.'],
                        ['Educational & Vocational Training', 'Skills development, literacy programmes, and vocational training to equip converts for economic independence.'],
                        ['Facilitating Integration', 'Connecting converts with local churches and Christian communities for belonging, accountability, and long-term discipleship.'],
                        ['Financial Assistance', 'Micro-grants and financial support to help converts re-establish livelihoods and household stability after displacement.'],
                    ] as [$title, $desc])
                        <div class="bg-brand-cream rounded-xl p-4 border border-purple-100">
                            <h4 class="font-semibold text-brand-blue text-sm">{{ $title }}</h4>
                            <p class="text-gray-500 text-xs mt-1 leading-relaxed">{{ $desc }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="mt-10 flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('get-involved.donate') }}?fund=new-converts"
                   class="inline-flex items-center justify-center px-8 py-3.5 bg-brand-gold text-brand-blue rounded-xl font-bold text-sm hover:bg-brand-gold-light transition-colors">
                    Sponsor Deborah's Basket
                </a>
                <a href="{{ route('get-involved.volunteer') }}"
                   class="inline-flex items-center justify-center px-8 py-3.5 bg-white border border-purple-200 text-brand-blue rounded-xl font-semibold text-sm hover:bg-brand-cream transition-colors">
                    Volunteer as a Mentor
                </a>
            </div>
        </div>
    </section>

    <x-site.cta-banner />

</x-layouts.site>
