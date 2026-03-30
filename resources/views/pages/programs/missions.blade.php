<x-layouts.site title="Missions Support — The Deborah Bonat Foundation">

    <x-site.hero
        title='<span class="text-brand-gold">Missions</span> Support'
        subtitle='"How beautiful are the feet of those who bring good news!" — Romans 10:15'
    />

    <section class="py-20 bg-brand-cream">
        <div class="max-w-4xl mx-auto px-4 sm:px-6">

            <div class="bg-white rounded-3xl p-8 sm:p-12 border border-purple-100 shadow-sm mb-10">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-14 h-14 rounded-xl bg-brand-blue/10 flex items-center justify-center text-2xl text-brand-blue">
                        <i class="fa-solid fa-cross"></i>
                    </div>
                    <div>
                        <h2 class="text-2xl font-bold text-brand-blue">EMS Field Support</h2>
                        <p class="text-brand-gold text-sm font-semibold">ECWA Missionary Society Partnership</p>
                    </div>
                </div>

                <h3 class="text-lg font-bold text-gray-800 mb-3">The Problem</h3>
                <p class="text-gray-600 leading-relaxed mb-6">
                    Local missionaries in Nigeria — particularly those serving in rural or unreached communities —
                    often labour with minimal financial support. They bear significant personal costs while carrying
                    the gospel into difficult places. Many become discouraged and abandon their calling for lack of
                    basic resources, training, or logistical support.
                </p>

                <h3 class="text-lg font-bold text-gray-800 mb-3">Our Response</h3>
                <p class="text-gray-600 leading-relaxed mb-4">
                    Mama Deborah was a faithful supporter of the ECWA Missionary Society (EMS). The foundation
                    continues that partnership — providing financial grants, resources, training, and logistical
                    support so that no indigenous missionary labours without the backing they deserve.
                </p>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-6">
                    @foreach([
                        ['Financial Grants', 'Funding for local missionaries and projects — evangelism, church planting, and community development.'],
                        ['Resource Provision', 'Supplying essential materials and equipment for mission work in the field.'],
                        ['Training & Capacity Building', 'Supporting the training and development of indigenous missionaries for greater effectiveness.'],
                        ['Logistical Support', 'Assisting with transportation and other operational needs for field missionaries.'],
                    ] as [$title, $desc])
                        <div class="bg-brand-cream rounded-xl p-4 border border-purple-100">
                            <h4 class="font-semibold text-brand-blue text-sm">{{ $title }}</h4>
                            <p class="text-gray-500 text-xs mt-1 leading-relaxed">{{ $desc }}</p>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="mt-10 flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('get-involved.donate') }}?program=missions"
                   class="inline-flex items-center justify-center px-8 py-3.5 bg-brand-gold text-brand-blue rounded-xl font-bold text-sm hover:bg-brand-gold-light transition-colors">
                    Support a Missionary
                </a>
                <a href="{{ route('get-involved.faith') }}"
                   class="inline-flex items-center justify-center px-8 py-3.5 bg-white border border-purple-200 text-brand-blue rounded-xl font-semibold text-sm hover:bg-brand-cream transition-colors">
                    Faith-Based Collaboration
                </a>
            </div>
        </div>
    </section>

    <x-site.cta-banner />

</x-layouts.site>
