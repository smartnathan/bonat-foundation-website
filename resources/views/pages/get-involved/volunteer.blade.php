<x-layouts.site title="Volunteer — The Deborah Bonat Foundation">

    <x-site.hero
        title='Join Our <span class="text-brand-gold">Volunteer Network</span>'
        subtitle="Mama Deborah didn't give money — she gave herself. You can too."
    />

    <section class="py-20 bg-brand-cream">
        <div class="max-w-4xl mx-auto px-4 sm:px-6">

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">

                {{-- Form --}}
                <div class="bg-white rounded-3xl p-8 border border-purple-100 shadow-sm">
                    <h2 class="text-xl font-bold text-brand-purple mb-6">Volunteer Sign-Up</h2>

                    @if(session('volunteer_success'))
                        <div class="mb-6 p-4 bg-green-50 border border-green-200 rounded-xl text-green-700 text-sm">
                            {{ session('volunteer_success') }}
                        </div>
                    @endif

                    <form action="{{ route('get-involved.volunteer.store') }}" method="POST" class="space-y-5">
                        @csrf

                        <div>
                            <label for="vol_name" class="block text-sm font-medium text-gray-700 mb-1.5">Full Name <span class="text-red-400">*</span></label>
                            <input type="text" id="vol_name" name="name" value="{{ old('name') }}" required maxlength="100"
                                   class="w-full px-4 py-2.5 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-brand-purple/30 focus:border-brand-purple @error('name') border-red-400 @enderror">
                            @error('name')<p class="mt-1 text-red-500 text-xs">{{ $message }}</p>@enderror
                        </div>

                        <div>
                            <label for="vol_email" class="block text-sm font-medium text-gray-700 mb-1.5">Email Address <span class="text-red-400">*</span></label>
                            <input type="email" id="vol_email" name="email" value="{{ old('email') }}" required
                                   class="w-full px-4 py-2.5 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-brand-purple/30 focus:border-brand-purple @error('email') border-red-400 @enderror">
                            @error('email')<p class="mt-1 text-red-500 text-xs">{{ $message }}</p>@enderror
                        </div>

                        <div>
                            <label for="vol_phone" class="block text-sm font-medium text-gray-700 mb-1.5">Phone Number <span class="text-red-400">*</span></label>
                            <input type="tel" id="vol_phone" name="phone" value="{{ old('phone') }}" required maxlength="30"
                                   class="w-full px-4 py-2.5 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-brand-purple/30 focus:border-brand-purple @error('phone') border-red-400 @enderror"
                                   placeholder="+234 ...">
                            @error('phone')<p class="mt-1 text-red-500 text-xs">{{ $message }}</p>@enderror
                        </div>

                        <div>
                            <label for="vol_location" class="block text-sm font-medium text-gray-700 mb-1.5">City / State <span class="text-red-400">*</span></label>
                            <input type="text" id="vol_location" name="location" value="{{ old('location') }}" required maxlength="150"
                                   class="w-full px-4 py-2.5 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-brand-purple/30 focus:border-brand-purple @error('location') border-red-400 @enderror"
                                   placeholder="e.g. Jos, Plateau State">
                            @error('location')<p class="mt-1 text-red-500 text-xs">{{ $message }}</p>@enderror
                        </div>

                        <div>
                            <label for="vol_pillar" class="block text-sm font-medium text-gray-700 mb-1.5">Area of Interest <span class="text-red-400">*</span></label>
                            <select id="vol_pillar" name="pillar" required
                                    class="w-full px-4 py-2.5 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-brand-purple/30 focus:border-brand-purple @error('pillar') border-red-400 @enderror">
                                <option value="">Select a program pillar</option>
                                <option value="widows" {{ old('pillar') === 'widows' ? 'selected' : '' }}>Widow Empowerment (W2W)</option>
                                <option value="orphans" {{ old('pillar') === 'orphans' ? 'selected' : '' }}>Orphan Care (HOPE Fund)</option>
                                <option value="elderly" {{ old('pillar') === 'elderly' ? 'selected' : '' }}>Elderly Care (GCN)</option>
                                <option value="missions" {{ old('pillar') === 'missions' ? 'selected' : '' }}>Missions Support</option>
                                <option value="new-converts" {{ old('pillar') === 'new-converts' ? 'selected' : '' }}>New Convert Care</option>
                            </select>
                            @error('pillar')<p class="mt-1 text-red-500 text-xs">{{ $message }}</p>@enderror
                        </div>

                        <div>
                            <label for="vol_skills" class="block text-sm font-medium text-gray-700 mb-1.5">Your Skills &amp; Experience <span class="text-red-400">*</span></label>
                            <textarea id="vol_skills" name="skills" required rows="4" maxlength="1000"
                                      class="w-full px-4 py-2.5 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-brand-purple/30 focus:border-brand-purple resize-none @error('skills') border-red-400 @enderror"
                                      placeholder="Tell us about your skills, availability, and why you want to volunteer...">{{ old('skills') }}</textarea>
                            @error('skills')<p class="mt-1 text-red-500 text-xs">{{ $message }}</p>@enderror
                        </div>

                        <button type="submit"
                                class="w-full py-3.5 bg-brand-purple text-white rounded-xl font-bold text-sm hover:bg-brand-purple-light transition-colors">
                            Submit Application
                        </button>
                    </form>
                </div>

                {{-- Why Volunteer --}}
                <div>
                    <h2 class="text-2xl font-bold text-brand-purple mb-8">Why Volunteer?</h2>
                    <div class="space-y-6">
                        @foreach([
                            ['🌍', 'Real Impact', 'Volunteers are the hands and feet of every program. Your presence in a community changes lives that money alone cannot reach.'],
                            ['📅', 'Flexible Commitment', 'Whether you can give one Saturday per month or full-time field work, there\'s a role for you.'],
                            ['🎓', 'Skills Development', 'Gain experience in community development, project management, social work, and grassroots leadership.'],
                            ['✝️', 'Kingdom Work', 'This is ministry. Every act of service carries the gospel in tangible form.'],
                        ] as [$icon, $title, $desc])
                            <div class="flex gap-4">
                                <div class="w-12 h-12 rounded-xl bg-brand-purple/10 flex items-center justify-center text-xl shrink-0">{{ $icon }}</div>
                                <div>
                                    <h3 class="font-bold text-gray-800">{{ $title }}</h3>
                                    <p class="mt-1 text-gray-500 text-sm leading-relaxed">{{ $desc }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="mt-10 bg-brand-purple rounded-2xl p-6 text-white">
                        <p class="font-semibold text-brand-gold mb-2">Available Roles</p>
                        <ul class="space-y-2 text-sm text-white/80">
                            @foreach(['Field Officer', 'Skills Trainer (tailoring, soap-making, digital literacy)', 'Educational Mentor', 'Distribution Coordinator', 'Chaplain / Counsellor', 'Communications Volunteer', 'Event Volunteer']) as $role)
                                <li class="flex items-start gap-2">
                                    <span class="text-brand-gold mt-0.5">→</span> {{ $role }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-layouts.site>
