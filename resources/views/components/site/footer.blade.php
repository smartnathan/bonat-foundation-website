<footer class="bg-brand-dark text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-14">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">

            {{-- Brand Column --}}
            <div class="lg:col-span-1">
                <p class="text-brand-gold font-bold text-xl tracking-wide">The Deborah Bonat Foundation</p>
                <p class="mt-3 text-white/60 text-sm leading-relaxed">
                    Turning every story of persecution into a story of resilience. Serving widows, orphans, the elderly, missionaries, and new converts across Nigeria.
                </p>
                <p class="mt-4 text-white/40 text-xs italic">In loving memory of Mama Deborah Iya Bonat</p>

                {{-- Social links --}}
                <div class="mt-5 flex gap-3">
                    <a href="#" aria-label="Facebook" class="w-9 h-9 rounded-full bg-white/10 flex items-center justify-center text-white/60 hover:text-brand-gold hover:bg-white/20 transition-colors text-sm">f</a>
                    <a href="#" aria-label="Twitter / X" class="w-9 h-9 rounded-full bg-white/10 flex items-center justify-center text-white/60 hover:text-brand-gold hover:bg-white/20 transition-colors text-sm">𝕏</a>
                    <a href="#" aria-label="Instagram" class="w-9 h-9 rounded-full bg-white/10 flex items-center justify-center text-white/60 hover:text-brand-gold hover:bg-white/20 transition-colors text-sm">▶</a>
                    <a href="#" aria-label="YouTube" class="w-9 h-9 rounded-full bg-white/10 flex items-center justify-center text-white/60 hover:text-brand-gold hover:bg-white/20 transition-colors text-sm">▷</a>
                </div>
            </div>

            {{-- About Column --}}
            <div>
                <h3 class="text-brand-gold text-sm font-semibold uppercase tracking-widest mb-4">About</h3>
                <ul class="space-y-2.5">
                    <li><a href="{{ route('about') }}" class="text-white/60 hover:text-brand-gold text-sm transition-colors">About Us</a></li>
                    <li><a href="{{ route('about.founder') }}" class="text-white/60 hover:text-brand-gold text-sm transition-colors">The Founder's Story</a></li>
                    <li><a href="{{ route('about') }}#blueprint" class="text-white/60 hover:text-brand-gold text-sm transition-colors">Our Blueprint</a></li>
                    <li><a href="{{ route('about') }}#leadership" class="text-white/60 hover:text-brand-gold text-sm transition-colors">Leadership</a></li>
                    <li><a href="{{ route('impact') }}" class="text-white/60 hover:text-brand-gold text-sm transition-colors">Impact &amp; Stories</a></li>
                    <li><a href="{{ route('media') }}" class="text-white/60 hover:text-brand-gold text-sm transition-colors">Media &amp; Resources</a></li>
                </ul>
            </div>

            {{-- Programs Column --}}
            <div>
                <h3 class="text-brand-gold text-sm font-semibold uppercase tracking-widest mb-4">Our Programs</h3>
                <ul class="space-y-2.5">
                    <li><a href="{{ route('programs.widows') }}" class="text-white/60 hover:text-brand-gold text-sm transition-colors">Widow Empowerment (W2W)</a></li>
                    <li><a href="{{ route('programs.orphans') }}" class="text-white/60 hover:text-brand-gold text-sm transition-colors">Orphan Care (HOPE Fund)</a></li>
                    <li><a href="{{ route('programs.elderly') }}" class="text-white/60 hover:text-brand-gold text-sm transition-colors">Elderly Care (GCN)</a></li>
                    <li><a href="{{ route('programs.missions') }}" class="text-white/60 hover:text-brand-gold text-sm transition-colors">Missions Support</a></li>
                    <li><a href="{{ route('programs.new-converts') }}" class="text-white/60 hover:text-brand-gold text-sm transition-colors">New Convert Care</a></li>
                </ul>
            </div>

            {{-- Get Involved Column --}}
            <div>
                <h3 class="text-brand-gold text-sm font-semibold uppercase tracking-widest mb-4">Get Involved</h3>
                <ul class="space-y-2.5">
                    <li>
                        <a href="{{ route('get-involved.donate') }}" class="text-white/60 hover:text-brand-gold text-sm transition-colors">Donate to the Foundation</a>
                    </li>
                    <li><a href="{{ route('get-involved.volunteer') }}" class="text-white/60 hover:text-brand-gold text-sm transition-colors">Volunteer Hub</a></li>
                    <li><a href="{{ route('get-involved.corporate') }}" class="text-white/60 hover:text-brand-gold text-sm transition-colors">Corporate Partnerships</a></li>
                    <li><a href="{{ route('get-involved.faith') }}" class="text-white/60 hover:text-brand-gold text-sm transition-colors">Faith-Based Collaboration</a></li>
                    <li><a href="{{ route('contact') }}" class="text-white/60 hover:text-brand-gold text-sm transition-colors">Contact Us</a></li>
                </ul>

                <div class="mt-6 space-y-1.5">
                    <p class="text-white/40 text-xs">An initiative of the ECWA / EMS family</p>
                    <a href="mailto:contact@deborahbonatfoundation.org" class="block text-white/50 hover:text-brand-gold text-xs transition-colors">contact@deborahbonatfoundation.org</a>
                    <p class="text-white/50 text-xs">+234 906 547 7834</p>
                </div>
                <div class="mt-4">
                    <a href="{{ route('get-involved.donate') }}"
                       class="inline-block px-5 py-2.5 bg-brand-gold text-brand-blue rounded-lg text-sm font-bold hover:bg-brand-gold-light transition-colors">
                        Give Now
                    </a>
                </div>
            </div>
        </div>

        <div class="mt-12 pt-6 border-t border-white/10 flex flex-col sm:flex-row items-center justify-between gap-3 text-white/30 text-xs">
            <p>&copy; {{ date('Y') }} The Deborah Bonat Foundation. All rights reserved.</p>
            <p>RC Number: [Pending registration]</p>
        </div>
    </div>
</footer>
