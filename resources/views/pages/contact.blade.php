<x-layouts.site title="Contact Us — The Deborah Bonat Foundation">

    <x-site.hero
        title='Contact <span class="text-brand-gold">Us</span>'
        subtitle="We are happy to hear from you — whether you need support, want to partner, or simply want to learn more."
    />

    <section class="py-20 bg-brand-cream">
        <div class="max-w-5xl mx-auto px-4 sm:px-6">

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">

                {{-- Contact Form --}}
                <div class="bg-white rounded-3xl p-8 border border-purple-100 shadow-sm">
                    <h2 class="text-xl font-bold text-brand-blue mb-6">Send Us a Message</h2>

                    @if(session('contact_success'))
                        <div class="mb-6 p-4 bg-green-50 border border-green-200 rounded-xl text-green-700 text-sm">
                            {{ session('contact_success') }}
                        </div>
                    @endif

                    <form action="{{ route('contact.store') }}" method="POST" class="space-y-5">
                        @csrf

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div>
                                <label for="contact_name" class="block text-sm font-medium text-gray-700 mb-1.5">Full Name <span class="text-red-400">*</span></label>
                                <input type="text" id="contact_name" name="name" value="{{ old('name') }}" required maxlength="100"
                                       class="w-full px-4 py-2.5 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-brand-blue/30 focus:border-brand-blue @error('name') border-red-400 @enderror">
                                @error('name')<p class="mt-1 text-red-500 text-xs">{{ $message }}</p>@enderror
                            </div>
                            <div>
                                <label for="contact_phone" class="block text-sm font-medium text-gray-700 mb-1.5">Phone <span class="text-gray-400">(optional)</span></label>
                                <input type="tel" id="contact_phone" name="phone" value="{{ old('phone') }}" maxlength="30"
                                       class="w-full px-4 py-2.5 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-brand-blue/30 focus:border-brand-blue"
                                       placeholder="+234 ...">
                            </div>
                        </div>

                        <div>
                            <label for="contact_email" class="block text-sm font-medium text-gray-700 mb-1.5">Email Address <span class="text-red-400">*</span></label>
                            <input type="email" id="contact_email" name="email" value="{{ old('email') }}" required
                                   class="w-full px-4 py-2.5 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-brand-blue/30 focus:border-brand-blue @error('email') border-red-400 @enderror">
                            @error('email')<p class="mt-1 text-red-500 text-xs">{{ $message }}</p>@enderror
                        </div>

                        <div>
                            <label for="contact_subject" class="block text-sm font-medium text-gray-700 mb-1.5">Subject <span class="text-red-400">*</span></label>
                            <input type="text" id="contact_subject" name="subject" value="{{ old('subject') }}" required maxlength="150"
                                   class="w-full px-4 py-2.5 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-brand-blue/30 focus:border-brand-blue @error('subject') border-red-400 @enderror"
                                   placeholder="e.g. Volunteer enquiry, Donation question, Partnership...">
                            @error('subject')<p class="mt-1 text-red-500 text-xs">{{ $message }}</p>@enderror
                        </div>

                        <div>
                            <label for="contact_message" class="block text-sm font-medium text-gray-700 mb-1.5">Message <span class="text-red-400">*</span></label>
                            <textarea id="contact_message" name="message" required rows="5" maxlength="2000"
                                      class="w-full px-4 py-2.5 border border-gray-200 rounded-xl text-sm focus:outline-none focus:ring-2 focus:ring-brand-blue/30 focus:border-brand-blue resize-none @error('message') border-red-400 @enderror"
                                      placeholder="How can we help you?">{{ old('message') }}</textarea>
                            @error('message')<p class="mt-1 text-red-500 text-xs">{{ $message }}</p>@enderror
                        </div>

                        <button type="submit"
                                class="w-full py-3.5 bg-brand-blue text-white rounded-xl font-bold text-sm hover:bg-brand-blue-light transition-colors">
                            Send Message
                        </button>
                    </form>
                </div>

                {{-- Contact Info --}}
                <div class="space-y-8">
                    <div>
                        <h2 class="text-2xl font-bold text-brand-blue mb-6">Get in Touch</h2>
                        <div class="space-y-5">
                            <div class="flex gap-4">
                                <div class="w-10 h-10 rounded-lg bg-brand-blue/10 flex items-center justify-center shrink-0">
                                    <i class="fa-solid fa-location-dot text-brand-blue"></i>
                                </div>
                                <div>
                                    <p class="font-semibold text-gray-800 text-sm">Address</p>
                                    <p class="text-gray-500 text-sm mt-0.5">2 Mono Street, Kafanchan-Kaduna Road,<br>Samaru Kataf, Kaduna State, Nigeria</p>
                                </div>
                            </div>

                            <div class="flex gap-4">
                                <div class="w-10 h-10 rounded-lg bg-brand-blue/10 flex items-center justify-center shrink-0">
                                    <i class="fa-regular fa-envelope text-brand-blue"></i>
                                </div>
                                <div>
                                    <p class="font-semibold text-gray-800 text-sm">Email</p>
                                    <a href="mailto:contact@deborahbonatfoundation.org" class="text-gray-500 text-sm mt-0.5 hover:text-brand-blue transition-colors">contact@deborahbonatfoundation.org</a>
                                </div>
                            </div>

                            <div class="flex gap-4">
                                <div class="w-10 h-10 rounded-lg bg-green-50 flex items-center justify-center shrink-0">
                                    <i class="fa-brands fa-whatsapp text-green-600 text-lg"></i>
                                </div>
                                <div>
                                    <p class="font-semibold text-gray-800 text-sm flex items-center gap-2">
                                        WhatsApp
                                        <span class="bg-green-100 text-green-700 text-[10px] font-semibold px-2 py-0.5 rounded-full">WhatsApp</span>
                                    </p>
                                    <a href="https://wa.me/2349065477834" target="_blank" rel="noopener" class="text-gray-500 text-sm mt-0.5 hover:text-green-600 transition-colors">+234 906 547 7834</a>
                                </div>
                            </div>

                            <div class="flex gap-4">
                                <div class="w-10 h-10 rounded-lg bg-brand-blue/10 flex items-center justify-center shrink-0">
                                    <i class="fa-solid fa-phone text-brand-blue"></i>
                                </div>
                                <div>
                                    <p class="font-semibold text-gray-800 text-sm">Phone</p>
                                    <p class="text-gray-500 text-sm mt-0.5">
                                        +234 806 696 8052<br>
                                        +234 814 885 2777
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bg-brand-blue rounded-2xl p-6 text-white">
                        <h3 class="font-bold text-brand-gold mb-3">For Specific Enquiries</h3>
                        <div class="space-y-3 text-sm text-white/80">
                            <p><span class="text-white font-semibold">Donations:</span> <a href="{{ route('get-involved.donate') }}" class="underline">Visit our donation page</a></p>
                            <p><span class="text-white font-semibold">Volunteering:</span> <a href="{{ route('get-involved.volunteer') }}" class="underline">Submit a volunteer form</a></p>
                            <p><span class="text-white font-semibold">Partnerships:</span> <a href="{{ route('get-involved.corporate') }}" class="underline">View corporate partnerships</a></p>
                            <p><span class="text-white font-semibold">Press / Media:</span> <a href="{{ route('media') }}" class="underline">Visit our media page</a></p>
                        </div>
                    </div>

                    <div class="bg-brand-cream rounded-2xl p-6 border border-purple-100">
                        <p class="text-brand-blue font-semibold text-sm mb-2">Response Time</p>
                        <p class="text-gray-500 text-sm leading-relaxed">
                            We aim to respond to all messages within 3 business days. For urgent matters related to
                            beneficiary care, please indicate this in your subject line.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-layouts.site>
