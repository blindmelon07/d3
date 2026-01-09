<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TFOE(PE) District 3</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=garamond:400,500,600|lato:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                /*! tailwindcss v4.0.7 | MIT License | https://tailwindcss.com */@layer theme{:root,:host{--font-sans:'Lato',ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";--font-serif:'Garamond',Georgia,Cambria,"Times New Roman",Times,serif;--font-mono:ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;--color-red-50:oklch(.971 .013 17.38);--color-red-100:oklch(.936 .032 17.717);--color-red-200:oklch(.885 .062 18.334);--color-red-300:oklch(.808 .114 19.571);--color-red-400:oklch(.704 .191 22.216);--color-red-500:oklch(.637 .237 25.331);--color-red-600:oklch(.577 .245 27.325);--color-red-700:oklch(.505 .213 27.518);--color-red-800:oklch(.444 .177 26.899);--color-red-900:oklch(.396 .141 25.723);--color-red-950:oklch(.258 .092 26.042);--color-orange-50:oklch(.98 .016 73.684);--color-orange-100:oklch(.954 .038 75.164);--color-orange-200:oklch(.901 .076 70.697);--color-orange-300:oklch(.837 .128 66.29);--color-orange-400:oklch(.75 .183 55.934);--color-orange-500:oklch(.705 .213 47.604);--color-orange-600:oklch(.646 .222 41.116);--color-orange-700:oklch(.553 .195 38.402);--color-orange-800:oklch(.47 .157 37.304);--color-orange-900:oklch(.408 .123 38.172);--color-orange-950:oklch(.266 .079 36.259);--color-amber-50:oklch(.987 .022 95.277);--color-amber-100:oklch(.962 .059 95.617);--color-amber-200:oklch(.924 .12 95.746);--color-amber-300:oklch(.879 .169 91.605);--color-amber-400:oklch(.828 .189 84.429);--color-amber-500:oklch(.769 .188 70.08);--color-amber-600:oklch(.666 .179 58.318);--color-amber-700:oklch(.555 .163 48.998);--color-amber-800:oklch(.473 .137 46.201);--color-amber-900:oklch(.414 .112 45.904);--color-amber-950:oklch(.279 .077 45.635);--color-yellow-50:oklch(.987 .026 102.212);--color-yellow-100:oklch(.973 .071 103.193);--color-yellow-200:oklch(.945 .129 101.54);--color-yellow-300:oklch(.905 .182 98.111);--color-yellow-400:oklch(.852 .199 91.936);--color-yel... <truncated>
            </style>
        @endif
        <style>
            /*! tailwindcss v4.0.7 | MIT License | https://tailwindcss.com */
            @import 'tailwindcss';
        </style>
    </head>
    <body class="bg-[#f5f3f0] text-[#2c2c2c] font-sans">
        <!-- Redesigned header for formal appearance -->
        <header class="bg-white sticky top-0 z-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center py-6">
                    <div class="flex items-center space-x-4">
                        <div class="relative w-20 h-20">
                            <!-- removed gray border from logo -->
                            <img src="/images/districtlogo.png" alt="District Logo" class="absolute inset-0 w-full h-full object-cover rounded-full" style="box-sizing: border-box;" />
                        </div>
                        <div>
                            <h1 class="text-xl font-serif font-bold text-[#1a3a52]">TFOE(PE) District 3</h1>
                            <p class="text-xs text-[#666666]">Professional Brotherhood Organization</p>
                        </div>
                    </div>
                    <nav class="hidden md:flex items-center space-x-10">
                        <a href="#home" class="text-[#2c2c2c] hover:text-[#1a3a52] transition-colors font-medium text-sm tracking-wide">Home</a>
                        <a href="#news" class="text-[#2c2c2c] hover:text-[#1a3a52] transition-colors font-medium text-sm tracking-wide">News</a>
                        <a href="#events" class="text-[#2c2c2c] hover:text-[#1a3a52] transition-colors font-medium text-sm tracking-wide">Events</a>
                        <a href="#about" class="text-[#2c2c2c] hover:text-[#1a3a52] transition-colors font-medium text-sm tracking-wide">About</a>
                    </nav>
                </div>
            </div>
        </header>

        <!-- Formal hero section with elegant typography -->
        <section id="home" class="bg-gradient-to-br from-[#1a3a52] to-[#2c5282] text-white py-20 lg:py-32">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                    <div>
                        <h1 class="text-5xl lg:text-6xl font-serif font-bold mb-8 leading-tight">Excellence in Brotherhood</h1>
                        <p class="text-lg text-white/85 mb-12 leading-relaxed max-w-lg">
                            TFOE(PE) District 3 stands as a beacon of leadership, service, and community engagement. We are committed to fostering meaningful connections and driving positive change through dedication and integrity.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4">
                            <a href="#events" class="px-8 py-3 bg-white text-[#1a3a52] rounded font-semibold hover:bg-gray-100 transition-colors text-center">View Events</a>
                            <a href="#about" class="px-8 py-3 border-2 border-white text-white rounded font-semibold hover:bg-white hover:text-[#1a3a52] transition-colors text-center">Learn More</a>
                        </div>
                    </div>
                    <div class="hidden lg:flex flex-col gap-6">
                        <div class="bg-white/10 rounded-lg p-8 backdrop-blur-sm border border-white/20">
                            <h3 class="text-sm font-semibold uppercase tracking-widest text-white/70 mb-2">Our Mission</h3>
                            <p class="text-lg leading-relaxed">Build a community rooted in brotherhood, service to humanity, and the pursuit of excellence.</p>
                        </div>
                        <div class="bg-white/10 rounded-lg p-8 backdrop-blur-sm border border-white/20">
                            <h3 class="text-sm font-semibold uppercase tracking-widest text-white/70 mb-2">Our Values</h3>
                            <p class="text-lg leading-relaxed">Integrity, Unity, Leadership, and Commitment to Service</p>
                        </div>
                    </div>
                </div>

                <!-- Affiliated logos section with larger sizing -->
                <div class="mt-20 pt-12 border-t border-white/20">
                    <h2 class="text-lg font-semibold uppercase tracking-widest text-white/70 mb-8">Our Affiliated Organizations</h2>
                    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8 items-center justify-center">
                        <img src="/images/seec.png" alt="Official Logo" class="h-32 w-auto rounded" />
                        <img src="/images/segec.png" alt="District Logo" class="h-32 w-auto rounded" />
                        <img src="/images/juban.png" alt="" class="h-32 w-auto rounded" />
                        <img src="/images/gibalon.png" alt="Gibalon" class="h-32 w-auto rounded" />
                        <img src="/images/msec.png" alt="MSEC" class="h-32 w-auto rounded" />
                    </div>
                </div>
            </div>
        </section>

        <!-- Leadership message in formal style -->
        <section class="bg-white py-20">
            <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
                    <div class="lg:col-span-2">
                        <h2 class="text-4xl font-serif font-bold text-[#1a3a52] mb-6">Leadership Message</h2>
                        <div class="w-12 h-1 bg-[#2c5282] mb-8"></div>
                        <div class="space-y-6 text-[#555555] leading-relaxed">
                            <p class="text-lg">
                                "It is with great honor that we welcome you to our community. TFOE(PE) District 3 stands as a testament to the power of unity, dedication, and service. Our organization represents not just a brotherhood, but a commitment to excellence in all endeavors."
                            </p>
                            <p class="text-lg">
                                "We invite you to be part of a community that values integrity, fosters growth, and strives to create meaningful impact in our society. Together, we advance the principles that define our organization and strengthen the bonds of brotherhood."
                            </p>
                            <div class="pt-4 border-t border-gray-200">
                                <p class="font-serif text-lg font-semibold text-[#1a3a52]">Excellence Through Unity</p>
                                <p class="text-sm text-[#666666]">TFOE(PE) District 3 Leadership</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="bg-[#f5f3f0] rounded-lg p-8 border border-gray-200">
                            <h3 class="font-serif text-xl font-bold text-[#1a3a52] mb-3">About Our Leadership</h3>
                            <p class="text-sm text-[#555555] leading-relaxed">Guided by experienced professionals dedicated to advancing the organization's mission and values.</p>
                            <div class="mt-6 pt-6 border-t border-gray-300">
                                <a href="#" class="text-[#2c5282] hover:text-[#1a3a52] font-semibold text-sm">Meet the Team →</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Simplified news section with formal styling -->
        <section id="news" class="bg-[#f5f3f0] py-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-4xl font-serif font-bold text-[#1a3a52] mb-2">Latest News & Updates</h2>
                <div class="w-12 h-1 bg-[#2c5282] mb-12"></div>
                
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-12">
                    <div class="lg:col-span-2 bg-white rounded-lg overflow-hidden shadow-sm border border-gray-200 hover:shadow-md transition-shadow">
                        <div class="h-64 bg-gradient-to-r from-[#1a3a52] to-[#2c5282] flex items-center justify-center text-6xl">📢</div>
                        <div class="p-10">
                            <div class="flex items-center gap-3 mb-4">
                                <span class="px-3 py-1 bg-[#1a3a52] text-white text-xs font-semibold uppercase tracking-wider rounded">Featured</span>
                                <span class="text-sm text-[#888888]">{{ now()->format('M d, Y') }}</span>
                            </div>
                            <h3 class="text-2xl font-serif font-bold text-[#1a3a52] mb-4">Community Growth & Initiatives</h3>
                            <p class="text-[#666666] leading-relaxed mb-6">
                                Our organization continues to strengthen through meaningful initiatives focused on community service and member development. We are proud of the progress we have made in advancing our mission and values.
                            </p>
                            <a href="#" class="text-[#2c5282] hover:text-[#1a3a52] font-semibold inline-flex items-center gap-2">Read Full Article →</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Events section with professional card design -->
        <section id="events" class="bg-white py-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-4xl font-serif font-bold text-[#1a3a52] mb-2">Upcoming Events</h2>
                <p class="text-[#666666] text-lg mb-12">Join us for meaningful gatherings and community engagement</p>

                @if(isset($upcomingEvents) && $upcomingEvents->count() > 0)
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        @foreach($upcomingEvents as $event)
                        <div class="bg-[#f5f3f0] rounded-lg shadow-sm border border-gray-200 overflow-hidden hover:shadow-md transition-shadow">
                            <div class="h-1" style="background-color: {{ $event->color ?? '#1a3a52' }}"></div>
                            <div class="p-8">
                                <h3 class="text-xl font-serif font-bold text-[#1a3a52] mb-4">{{ $event->title }}</h3>
                                
                                <div class="space-y-4 mb-6">
                                    <div class="flex items-start gap-3 text-[#666666]">
                                        <span class="text-lg">📅</span>
                                        <div>
                                            @if($event->all_day)
                                                <p class="font-medium">{{ $event->start_date->format('F j, Y') }}</p>
                                                @if($event->end_date && $event->start_date->toDateString() !== $event->end_date->toDateString())
                                                    <p class="text-sm">— {{ $event->end_date->format('F j, Y') }}</p>
                                                @endif
                                            @else
                                                <p class="font-medium">{{ $event->start_date->format('F j, Y') }}</p>
                                                <p class="text-sm">{{ $event->start_date->format('g:i A') }}
                                                @if($event->end_date && $event->start_date->toDateString() !== $event->end_date->toDateString())
                                                    — {{ $event->end_date->format('F j, Y \a\t g:i A') }}
                                                @else
                                                    — {{ $event->end_date->format('g:i A') ?? 'TBA' }}
                                                @endif
                                                </p>
                                            @endif
                                        </div>
                                    </div>
                                    
                                    @if($event->location)
                                    <div class="flex items-start gap-3 text-[#666666]">
                                        <span class="text-lg">📍</span>
                                        <p class="font-medium">{{ $event->location }}</p>
                                    </div>
                                    @endif
                                </div>

                                @if($event->description)
                                <p class="text-[#666666] text-sm line-clamp-3 mb-6">
                                    {{ $event->description }}
                                </p>
                                @endif

                                <a href="#" class="inline-block text-[#2c5282] hover:text-[#1a3a52] font-semibold text-sm">Learn More →</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                @else
                    <div class="bg-white rounded-lg p-16 shadow-sm border border-gray-200 text-center">
                        <p class="text-[#666666] text-lg">No upcoming events scheduled at this time. Please check back soon.</p>
                    </div>
                @endif
            </div>
        </section>

        <!-- About section with core values -->
        <section id="about" class="bg-[#f5f3f0] py-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-4xl font-serif font-bold text-[#1a3a52] mb-2">About TFOE(PE) District 3</h2>
                <div class="w-12 h-1 bg-[#2c5282] mb-12"></div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-10 mb-16">
                    <div class="bg-white rounded-lg p-8 shadow-sm border border-gray-200 text-center">
                        <div class="w-16 h-16 bg-[#1a3a52] text-white rounded-full flex items-center justify-center mx-auto mb-6 text-2xl font-serif font-bold">1</div>
                        <h3 class="text-xl font-serif font-bold text-[#1a3a52] mb-3">Brotherhood</h3>
                        <p class="text-[#666666] leading-relaxed">We cultivate enduring bonds grounded in mutual respect, trust, and shared commitment to our organization's principles.</p>
                    </div>
                    <div class="bg-white rounded-lg p-8 shadow-sm border border-gray-200 text-center">
                        <div class="w-16 h-16 bg-[#1a3a52] text-white rounded-full flex items-center justify-center mx-auto mb-6 text-2xl font-serif font-bold">2</div>
                        <h3 class="text-xl font-serif font-bold text-[#1a3a52] mb-3">Service</h3>
                        <p class="text-[#666666] leading-relaxed">We are dedicated to serving our communities with integrity, compassion, and meaningful action that creates lasting positive impact.</p>
                    </div>
                    <div class="bg-white rounded-lg p-8 shadow-sm border border-gray-200 text-center">
                        <div class="w-16 h-16 bg-[#1a3a52] text-white rounded-full flex items-center justify-center mx-auto mb-6 text-2xl font-serif font-bold">3</div>
                        <h3 class="text-xl font-serif font-bold text-[#1a3a52] mb-3">Excellence</h3>
                        <p class="text-[#666666] leading-relaxed">We pursue the highest standards in all endeavors, continuously striving to elevate our organization and its members.</p>
                    </div>
                </div>

                <div class="bg-gradient-to-r from-[#1a3a52] to-[#2c5282] text-white rounded-lg p-12 text-center">
                    <h3 class="text-2xl font-serif font-bold mb-4">Our Commitment</h3>
                    <p class="text-lg leading-relaxed max-w-3xl mx-auto">
                        TFOE(PE) District 3 is committed to advancing the values of brotherhood, service, and excellence. We believe in the power of unified action and the importance of developing leaders who are dedicated to making a meaningful difference in their communities and beyond.
                    </p>
                </div>
            </div>
        </section>

        <!-- Professional footer -->
        <footer class="bg-[#1a3a52] text-white py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
                    <div>
                        <h4 class="font-serif font-bold text-lg mb-4">Organization</h4>
                        <ul class="space-y-2 text-white/70">
                            <li><a href="#about" class="hover:text-white transition-colors">About</a></li>
                            <li><a href="#" class="hover:text-white transition-colors">Mission</a></li>
                            <li><a href="#" class="hover:text-white transition-colors">Leadership</a></li>
                            <li><a href="#" class="hover:text-white transition-colors">Contact</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="font-serif font-bold text-lg mb-4">Community</h4>
                        <ul class="space-y-2 text-white/70">
                            <li><a href="#events" class="hover:text-white transition-colors">Events</a></li>
                            <li><a href="#news" class="hover:text-white transition-colors">News</a></li>
                            <li><a href="#" class="hover:text-white transition-colors">Resources</a></li>
                            <li><a href="#" class="hover:text-white transition-colors">Membership</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="font-serif font-bold text-lg mb-4">Connect</h4>
                        <ul class="space-y-2 text-white/70">
                            <li><a href="#" class="hover:text-white transition-colors">Facebook</a></li>
                            <li><a href="#" class="hover:text-white transition-colors">LinkedIn</a></li>
                            <li><a href="#" class="hover:text-white transition-colors">Twitter</a></li>
                            <li><a href="#" class="hover:text-white transition-colors">Instagram</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="font-serif font-bold text-lg mb-4">Legal</h4>
                        <ul class="space-y-2 text-white/70">
                            <li><a href="#" class="hover:text-white transition-colors">Privacy Policy</a></li>
                            <li><a href="#" class="hover:text-white transition-colors">Terms of Service</a></li>
                            <li><a href="#" class="hover:text-white transition-colors">Code of Conduct</a></li>
                        </ul>
                    </div>
                </div>

                <div class="border-t border-white/20 pt-8 text-center text-white/60">
                    <p>&copy; 2026 TFOE(PE) District 3. All rights reserved.</p>
                    <p class="text-sm mt-2">Excellence Through Unity</p>
                </div>
            </div>
        </footer>
    </body>
</html>
