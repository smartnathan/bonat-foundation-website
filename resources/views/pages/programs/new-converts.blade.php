<x-layouts.site title="New Convert Care — The Deborah Bonat Foundation">

    <x-site.hero
        title='<span class="text-brand-gold">New Convert</span> Care'
        subtitle='"I was a stranger and you invited me in." — Matthew 25:35'
    />

    <section class="py-20 bg-brand-cream">
        <div class="max-w-4xl mx-auto px-4 sm:px-6">

            <div class="bg-white rounded-3xl p-8 sm:p-12 border border-purple-100 shadow-sm mb-10">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-14 h-14 rounded-xl bg-brand-blue/10 flex items-center justify-center text-2xl">🕊️</div>
                    <div>
                        <h2 class="text-2xl font-bold text-brand-blue">Deborah's Basket</h2>
                        <p class="text-brand-gold text-sm font-semibold">Monthly Care Package Programme</p>
                    </div>
                </div>

                <h3 class="text-lg font-bold text-gray-800 mb-3">The Problem</h3>
                <p class="text-gray-600 leading-relaxed mb-6">
                    When someone from a Muslim or other faith background converts to Christianity in parts of Northern
                    Nigeria, they often face immediate and severe consequences: rejection by family, loss of housing,
                    loss of income, and even physical danger. Many new converts find themselves entirely alone in the
                    first critical weeks and months of their faith.
                </p>

                <h3 class="text-lg font-bold text-gray-800 mb-3">Our Response</h3>
                <p class="text-gray-600 leading-relaxed mb-4">
                    Deborah's Basket delivers monthly care packages — food, hygiene items, and basic household essentials —
                    directly to new converts in crisis. Combined with emergency shelter placement and personal discipleship,
                    the programme ensures that no one who chooses faith is left to face the consequences alone.
                </p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-6">
                    @foreach([
                        ['Monthly Basket', 'Food, hygiene, and household essentials delivered every month'],
                        ['Emergency Shelter', 'Safe housing placement for converts who have lost their home'],
                        ['Discipleship', 'One-on-one Bible study and faith formation with trained mentors'],
                        ['Reintegration', 'Vocational support to help converts rebuild their livelihood'],
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
