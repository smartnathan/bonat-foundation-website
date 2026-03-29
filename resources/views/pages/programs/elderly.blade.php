<x-layouts.site title="Elderly Care — The Deborah Bonat Foundation">

    <x-site.hero
        title='<span class="text-brand-gold">Elderly</span> Care'
        subtitle='"Rise in the presence of the aged, show respect for the elderly." — Leviticus 19:32'
    />

    <section class="py-20 bg-brand-cream">
        <div class="max-w-4xl mx-auto px-4 sm:px-6">

            <div class="bg-white rounded-3xl p-8 sm:p-12 border border-purple-100 shadow-sm mb-10">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-14 h-14 rounded-xl bg-brand-blue/10 flex items-center justify-center text-2xl text-brand-blue">
                        <i class="fa-solid fa-person-cane"></i>
                    </div>
                    <div>
                        <h2 class="text-2xl font-bold text-brand-blue">Golden Care Network (GCN)</h2>
                        <p class="text-brand-gold text-sm font-semibold">Our Initiative</p>
                    </div>
                </div>

                <h3 class="text-lg font-bold text-gray-800 mb-3">The Problem</h3>
                <p class="text-gray-600 leading-relaxed mb-6">
                    Many elderly people in Nigerian communities have given everything — to their families, their churches,
                    their villages — and are now living in neglect or isolation. Rising costs, family migration, and
                    economic hardship mean that the elderly are often the most invisible members of society.
                </p>

                <h3 class="text-lg font-bold text-gray-800 mb-3">Our Response</h3>
                <p class="text-gray-600 leading-relaxed mb-4">
                    Mama Deborah herself ran distributions of firewood, food, and clothing in Jos for years. The Golden
                    Care Network (GCN) formalises and scales that work — bringing practical care, regular visitation,
                    and dignity-restoration to elderly people across Nigeria.
                </p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-6">
                    @foreach([
                        ['Quarterly Distributions', 'Food, firewood, and clothing distributions four times a year'],
                        ['Welfare Visits', 'Regular home visits by trained volunteers to check on wellbeing'],
                        ['Medical Support', 'Linking elderly beneficiaries to basic healthcare and medication'],
                        ['Companionship', 'Organised social events and fellowship gatherings to combat isolation'],
                    ] as [$title, $desc])
                        <div class="bg-brand-cream rounded-xl p-4 border border-purple-100">
                            <h4 class="font-semibold text-brand-blue text-sm">{{ $title }}</h4>
                            <p class="text-gray-500 text-xs mt-1 leading-relaxed">{{ $desc }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="mt-10 flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('get-involved.donate') }}?program=elderly"
                   class="inline-flex items-center justify-center px-8 py-3.5 bg-brand-gold text-brand-blue rounded-xl font-bold text-sm hover:bg-brand-gold-light transition-colors">
                    Support Elderly Care
                </a>
                <a href="{{ route('get-involved.volunteer') }}"
                   class="inline-flex items-center justify-center px-8 py-3.5 bg-white border border-purple-200 text-brand-blue rounded-xl font-semibold text-sm hover:bg-brand-cream transition-colors">
                    Volunteer as a Visitor
                </a>
            </div>
        </div>
    </section>

    <x-site.cta-banner />

</x-layouts.site>
