<x-layouts.site title="Donate — The Deborah Bonat Foundation">

    <x-site.hero
        title='Donate to the <span class="text-brand-gold">Foundation</span>'
        subtitle="Every gift carries Mama Deborah's mission forward. Choose how you want to give."
    />

    <section class="py-20 bg-brand-cream">
        <div class="max-w-5xl mx-auto px-4 sm:px-6">

            {{-- Giving Options --}}
            <div class="text-center mb-12">
                <p class="text-brand-gold text-xs font-semibold uppercase tracking-widest mb-2">Ways to Give</p>
                <h2 class="text-3xl font-bold text-brand-blue">Choose Your Giving Type</h2>
            </div>

            <div x-data="{ giving: 'one-time' }" class="bg-white rounded-3xl border border-purple-100 shadow-sm overflow-hidden mb-12">

                {{-- Toggle --}}
                <div class="flex border-b border-gray-100">
                    <button
                        @click="giving = 'one-time'"
                        class="flex-1 py-4 text-sm font-semibold transition-colors"
                        :class="giving === 'one-time' ? 'bg-brand-blue text-white' : 'text-gray-500 hover:text-brand-blue'"
                    >
                        One-Time Gift
                    </button>
                    <button
                        @click="giving = 'legacy'"
                        class="flex-1 py-4 text-sm font-semibold transition-colors"
                        :class="giving === 'legacy' ? 'bg-brand-blue text-white' : 'text-gray-500 hover:text-brand-blue'"
                    >
                        Legacy Gift (Recurring)
                    </button>
                </div>

                <div class="p-8 sm:p-12">
                    <div x-show="giving === 'one-time'">
                        <h3 class="text-xl font-bold text-brand-blue mb-2">Make a One-Time Gift</h3>
                        <p class="text-gray-500 text-sm mb-8">A single gift to any of our five programs. Every amount is meaningful.</p>
                        <div class="space-y-5">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Choose a Program</label>
                                <select class="w-full px-4 py-3 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-brand-blue/30 focus:border-brand-blue">
                                    <option value="">General Fund (where most needed)</option>
                                    <option value="widows">Widow Empowerment (W2W)</option>
                                    <option value="hope">Orphan Care (HOPE Fund)</option>
                                    <option value="elderly">Elderly Care (GCN)</option>
                                    <option value="missions">Missions Support</option>
                                    <option value="new-converts">New Convert Care (Deborah's Basket)</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Amount (NGN)</label>
                                <div class="grid grid-cols-3 sm:grid-cols-5 gap-3 mb-3">
                                    @foreach(['2,500', '5,000', '10,000', '25,000', '50,000'] as $amount)
                                        <button class="py-2.5 text-sm font-semibold border border-gray-200 rounded-xl hover:border-brand-blue hover:text-brand-blue transition-colors">
                                            ₦{{ $amount }}
                                        </button>
                                    @endforeach
                                </div>
                                <input type="number" placeholder="Enter custom amount" class="w-full px-4 py-3 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-brand-blue/30">
                            </div>
                        </div>
                    </div>

                    <div x-show="giving === 'legacy'" style="display:none">
                        <h3 class="text-xl font-bold text-brand-blue mb-2">Set Up a Legacy Gift</h3>
                        <p class="text-gray-500 text-sm mb-8">A recurring monthly or annual gift that sustains our programs long-term. This is how legacies are built.</p>
                        <div class="space-y-5">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Frequency</label>
                                <div class="grid grid-cols-2 gap-3">
                                    <button class="py-3 text-sm font-semibold border-2 border-brand-blue text-brand-blue rounded-xl">Monthly</button>
                                    <button class="py-3 text-sm font-semibold border border-gray-200 text-gray-500 rounded-xl hover:border-brand-blue hover:text-brand-blue transition-colors">Annual</button>
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Monthly Amount (NGN)</label>
                                <div class="grid grid-cols-3 gap-3 mb-3">
                                    @foreach(['1,000', '2,500', '5,000', '10,000', '25,000'] as $amount)
                                        <button class="py-2.5 text-sm font-semibold border border-gray-200 rounded-xl hover:border-brand-blue hover:text-brand-blue transition-colors">
                                            ₦{{ $amount }}
                                        </button>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 p-5 bg-brand-cream rounded-2xl border border-purple-100">
                        <p class="text-brand-blue font-semibold text-sm mb-1">Bank Transfer Details</p>
                        <p class="text-gray-500 text-sm">Bank: <span class="font-medium text-gray-700">[Bank Name TBC]</span></p>
                        <p class="text-gray-500 text-sm">Account Name: <span class="font-medium text-gray-700">The Deborah Bonat Foundation</span></p>
                        <p class="text-gray-500 text-sm">Account Number: <span class="font-medium text-gray-700">[Account No. TBC]</span></p>
                        <p class="text-gray-400 text-xs mt-3">Online payment gateway integration coming soon. Please use bank transfer in the meantime and <a href="{{ route('contact') }}" class="text-brand-blue underline">notify us</a> after payment.</p>
                    </div>

                    <button class="mt-6 w-full py-4 bg-brand-gold text-brand-blue rounded-xl font-bold hover:bg-brand-gold-light transition-colors text-sm">
                        Proceed to Payment
                    </button>
                </div>
            </div>

            {{-- Program Cards --}}
            <div class="text-center mb-8">
                <h3 class="text-2xl font-bold text-brand-blue">Give to a Specific Pillar</h3>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
                @foreach([
                    ['🌿', 'Widow Empowerment', 'W2W Programme', 'widows'],
                    ['📚', 'Orphan Care', 'HOPE Fund', 'hope'],
                    ['🤝', 'Elderly Care', 'Golden Care Network', 'elderly'],
                    ['✝️', 'Missions Support', 'EMS Partnership', 'missions'],
                    ['🕊️', 'New Convert Care', "Deborah's Basket", 'new-converts'],
                ] as [$icon, $name, $initiative, $fund])
                    <div class="bg-white rounded-2xl p-6 border border-purple-100 shadow-sm text-center">
                        <p class="text-3xl mb-3">{{ $icon }}</p>
                        <h4 class="font-bold text-brand-blue">{{ $name }}</h4>
                        <p class="text-brand-gold text-xs font-semibold mt-1">{{ $initiative }}</p>
                        <a href="?fund={{ $fund }}" class="mt-4 inline-block px-5 py-2 bg-brand-blue text-white rounded-lg text-sm font-semibold hover:bg-brand-blue-light transition-colors">
                            Give to {{ $name }}
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

</x-layouts.site>
