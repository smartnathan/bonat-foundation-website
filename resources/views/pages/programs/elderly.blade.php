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
                    Elderly persons aged 65 and above — particularly those without adequate family or social support —
                    are among the most invisible members of Nigerian society. Rising costs, family migration, and economic
                    hardship leave them without basic necessities, healthcare, or companionship.
                </p>

                <h3 class="text-lg font-bold text-gray-800 mb-3">Our Response</h3>
                <p class="text-gray-600 leading-relaxed mb-4">
                    Mama Deborah spent years personally distributing firewood, food, and clothing in Jos. The Golden
                    Care Network (GCN) formalises and scales that legacy — providing basic needs support, healthcare
                    access, social inclusion, home care, and active advocacy for the elderly across Nigeria.
                </p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-6">
                    @foreach([
                        ['Basic Needs Support', 'Regular provision of food, clothing, and hygiene supplies to vulnerable households.'],
                        ['Healthcare Access', 'Facilitating access to medical check-ups, mobile clinics, and essential care.'],
                        ['Social Inclusion', 'Community activities and fellowship events to combat isolation and loneliness.'],
                        ['Home Care Support', 'Assistance with daily living activities for those unable to manage alone.'],
                        ['Advocacy', 'Raising awareness about the needs and rights of elderly people in Nigeria.'],
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
