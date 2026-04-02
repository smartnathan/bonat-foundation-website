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

            <div x-data="{ giving: 'one-time', frequency: 'monthly', selectedAmount: null, selectedOneTimeAmount: null }" class="bg-white rounded-3xl border border-purple-100 shadow-sm overflow-hidden mb-12">

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
                                        <button type="button"
                                            @click="selectedOneTimeAmount = '{{ $amount }}'"
                                            class="py-2.5 text-sm font-semibold border rounded-xl transition-colors"
                                            :class="selectedOneTimeAmount === '{{ $amount }}' ? 'border-brand-blue bg-brand-blue text-white' : 'border-gray-200 hover:border-brand-blue hover:text-brand-blue'">
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
                                    <button type="button" @click="frequency = 'monthly'"
                                        class="py-3 text-sm font-semibold border-2 rounded-xl transition-colors"
                                        :class="frequency === 'monthly' ? 'border-brand-blue bg-brand-blue text-white' : 'border-gray-200 text-gray-500 hover:border-brand-blue hover:text-brand-blue'">
                                        Monthly
                                    </button>
                                    <button type="button" @click="frequency = 'annual'"
                                        class="py-3 text-sm font-semibold border-2 rounded-xl transition-colors"
                                        :class="frequency === 'annual' ? 'border-brand-blue bg-brand-blue text-white' : 'border-gray-200 text-gray-500 hover:border-brand-blue hover:text-brand-blue'">
                                        Annual
                                    </button>
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2" x-text="frequency === 'monthly' ? 'Monthly Amount (NGN)' : 'Annual Amount (NGN)'">Monthly Amount (NGN)</label>
                                <div class="grid grid-cols-3 gap-3 mb-3">
                                    @foreach(['1,000', '2,500', '5,000', '10,000', '25,000'] as $amount)
                                        <button type="button"
                                            @click="selectedAmount = '{{ $amount }}'"
                                            class="py-2.5 text-sm font-semibold border rounded-xl transition-colors"
                                            :class="selectedAmount === '{{ $amount }}' ? 'border-brand-blue bg-brand-blue text-white' : 'border-gray-200 hover:border-brand-blue hover:text-brand-blue'">
                                            ₦{{ $amount }}
                                        </button>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Bank Transfer Details --}}
                    <div class="mt-8 rounded-2xl border border-purple-100 overflow-hidden">
                        <div class="bg-brand-blue px-5 py-3 flex items-center gap-2">
                            <i class="fa-solid fa-building-columns text-brand-gold text-sm"></i>
                            <p class="text-white font-semibold text-sm">Bank Transfer Details</p>
                        </div>
                        <div class="bg-brand-cream px-5 py-4 grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div class="bg-white rounded-xl p-4 border border-purple-100">
                                <p class="text-brand-gold text-[10px] font-bold uppercase tracking-widest mb-2">Naira (NGN)</p>
                                <p class="text-gray-800 font-bold text-sm">The Deborah Bonat Foundation</p>
                                <p class="text-gray-500 text-sm mt-1">Account No: <span class="font-semibold text-gray-800 tracking-wider">1030010627</span></p>
                                <p class="text-gray-500 text-sm">Bank: <span class="font-medium text-gray-700">United Bank for Africa (UBA)</span></p>
                            </div>
                            <div class="bg-white rounded-xl p-4 border border-purple-100">
                                <p class="text-brand-gold text-[10px] font-bold uppercase tracking-widest mb-2">US Dollar (USD)</p>
                                <p class="text-gray-800 font-bold text-sm">The Deborah Bonat Foundation</p>
                                <p class="text-gray-500 text-sm mt-1">Account No: <span class="font-semibold text-gray-800 tracking-wider">3005112024</span></p>
                                <p class="text-gray-500 text-sm">Bank: <span class="font-medium text-gray-700">United Bank for Africa (UBA)</span></p>
                            </div>
                        </div>
                        <div class="bg-brand-cream px-5 pb-4">
                            <p class="text-gray-400 text-xs">After your transfer, please submit your receipt below so we can confirm and acknowledge your gift.</p>
                        </div>
                    </div>

                    <div class="mt-4 text-center text-gray-400 text-xs">
                        Online payment gateway coming soon.
                    </div>
                </div>
            </div>

            {{-- Receipt Upload --}}
            <div id="submit-receipt" class="mb-16 scroll-mt-16">
                <div class="text-center mb-8">
                    <p class="text-brand-gold text-xs font-semibold uppercase tracking-widest mb-2">Already Transferred?</p>
                    <h3 class="text-2xl font-bold text-brand-blue">Submit Your Transfer Receipt</h3>
                    <p class="mt-2 text-gray-500 text-sm max-w-lg mx-auto">
                        Upload proof of your bank transfer and we will confirm your donation and send you an acknowledgement.
                    </p>
                </div>

                <div class="max-w-xl mx-auto bg-white rounded-3xl border border-purple-100 shadow-sm p-8">

                    @if(session('receipt_success'))
                        <div class="mb-6 p-4 bg-green-50 border border-green-200 rounded-xl text-green-700 text-sm flex items-center gap-2">
                            <i class="fa-solid fa-circle-check text-green-500"></i>
                            {{ session('receipt_success') }}
                        </div>
                    @endif

                    <form action="{{ route('get-involved.donate.receipt.store') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
                        @csrf

                        <div>
                            <label for="receipt_donor_name" class="block text-sm font-medium text-gray-700 mb-1.5">
                                <i class="fa-regular fa-user text-brand-blue/50 mr-1"></i>
                                Name of Donor <span class="text-red-400">*</span>
                            </label>
                            <input
                                type="text"
                                id="receipt_donor_name"
                                name="donor_name"
                                value="{{ old('donor_name') }}"
                                required
                                maxlength="100"
                                class="w-full px-4 py-2.5 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-brand-blue/30 focus:border-brand-blue transition-colors @error('donor_name') border-red-400 @enderror"
                                placeholder="Full name as used for the transfer"
                            >
                            @error('donor_name')
                                <p class="mt-1 text-red-500 text-xs">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="receipt_amount" class="block text-sm font-medium text-gray-700 mb-1.5">
                                <i class="fa-solid fa-naira-sign text-brand-blue/50 mr-1"></i>
                                Amount Transferred <span class="text-red-400">*</span>
                            </label>
                            <input
                                type="number"
                                id="receipt_amount"
                                name="amount"
                                value="{{ old('amount') }}"
                                required
                                min="1"
                                step="any"
                                class="w-full px-4 py-2.5 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-brand-blue/30 focus:border-brand-blue transition-colors @error('amount') border-red-400 @enderror"
                                placeholder="e.g. 25000"
                            >
                            @error('amount')
                                <p class="mt-1 text-red-500 text-xs">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="receipt_file" class="block text-sm font-medium text-gray-700 mb-1.5">
                                <i class="fa-regular fa-image text-brand-blue/50 mr-1"></i>
                                Upload Receipt <span class="text-red-400">*</span>
                                <span class="text-gray-400 font-normal">(JPG, PNG or PDF — max 5 MB)</span>
                            </label>
                            <input
                                type="file"
                                id="receipt_file"
                                name="receipt"
                                required
                                accept="image/jpeg,image/png,image/webp,application/pdf"
                                class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-xs file:font-semibold file:bg-brand-blue/10 file:text-brand-blue hover:file:bg-brand-blue/20 transition-colors @error('receipt') border border-red-400 rounded-xl p-2 @enderror"
                            >
                            @error('receipt')
                                <p class="mt-1 text-red-500 text-xs">{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="submit"
                                class="w-full py-3 bg-brand-blue text-white rounded-xl font-semibold text-sm hover:bg-brand-blue-light transition-colors flex items-center justify-center gap-2">
                            <i class="fa-solid fa-paper-plane"></i>
                            Submit Receipt
                        </button>
                    </form>
                </div>
            </div>

            {{-- Program Cards --}}
            <div class="text-center mb-8">
                <h3 class="text-2xl font-bold text-brand-blue">Give to a Specific Pillar</h3>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
                @foreach([
                    ['fa-solid fa-hands-holding-heart', 'Widow Empowerment', 'W2W Programme', 'widows'],
                    ['fa-solid fa-book-open', 'Orphan Care', 'HOPE Fund', 'hope'],
                    ['fa-solid fa-person-cane', 'Elderly Care', 'Golden Care Network', 'elderly'],
                    ['fa-solid fa-cross', 'Missions Support', 'EMS Partnership', 'missions'],
                    ['fa-solid fa-dove', 'New Convert Care', "Deborah's Basket", 'new-converts'],
                ] as [$icon, $name, $initiative, $fund])
                    <div class="bg-white rounded-2xl p-6 border border-purple-100 shadow-sm text-center">
                        <div class="text-3xl text-brand-blue mb-3"><i class="{{ $icon }}"></i></div>
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
