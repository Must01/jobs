<x-layout>

    <!-- Hero section with gradient background -->
    <div class="relative overflow-hidden bg-gradient-to-br from-indigo-900 via-purple-900 to-pink-800">
        <!-- Background pattern -->
        <div class="absolute inset-0">
            <div class="absolute inset-0 bg-gradient-to-r from-indigo-600/30 to-purple-600/30 mix-blend-multiply"></div>
            <div class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-gradient-to-r from-pink-400 to-indigo-400 rounded-full opacity-70 blur-3xl"></div>
            <div class="absolute bottom-0 right-1/4 w-72 h-72 bg-gradient-to-r from-purple-400 to-pink-400 rounded-full opacity-50 blur-3xl"></div>
            <div class="absolute top-1/3 left-1/4 w-64 h-64 bg-gradient-to-r from-indigo-400 to-blue-400 rounded-full opacity-40 blur-2xl"></div>
        </div>

        <div class="relative text-center py-24 px-6 sm:py-32">
            <h1 class="text-5xl font-bold tracking-tight text-white sm:text-7xl drop-shadow-lg">
                Find Your Dream Job
            </h1>
            <p class="mt-8 text-xl leading-8 text-gray-200 max-w-2xl mx-auto">
                Discover amazing career opportunities from top companies. Join thousands of professionals who found their perfect match.
            </p>
            <div class="mt-12 flex items-center justify-center gap-x-6">
                <a href="/jobs" class="rounded-lg bg-white px-6 py-3 text-lg font-semibold text-indigo-600 shadow-xl hover:bg-gray-50 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white transition-all duration-200 hover:scale-105">
                    Browse Jobs
                </a>
                @guest
                <a href="/register" class="text-lg font-semibold leading-6 text-white hover:text-gray-200 transition-colors">
                    Sign up <span aria-hidden="true" class="ml-1">→</span>
                </a>
                @endguest
            </div>

            <!-- Floating elements -->
            <div class="absolute top-20 left-10 animate-bounce opacity-20">
                <div class="w-8 h-8 bg-white rounded-full"></div>
            </div>
            <div class="absolute top-32 right-16 animate-pulse opacity-30">
                <div class="w-6 h-6 bg-pink-300 rounded-full"></div>
            </div>
            <div class="absolute bottom-20 left-20 animate-bounce opacity-25" style="animation-delay: 0.5s;">
                <div class="w-4 h-4 bg-purple-300 rounded-full"></div>
            </div>
        </div>
    </div>

    <div class="bg-white">

        <!-- Stats section with improved design -->
        <div class="mx-auto max-w-7xl px-6 lg:px-8 py-16">
            <div class="mx-auto max-w-2xl lg:max-w-none">
                <div class="text-center">
                    <h2 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">
                        Trusted by job seekers everywhere
                    </h2>
                    <p class="mt-4 text-lg text-gray-600">Join the thousands who have found their dream careers</p>
                </div>
                <dl class="mt-16 grid grid-cols-1 gap-0.5 overflow-hidden rounded-3xl text-center sm:grid-cols-2 lg:grid-cols-4 shadow-2xl">
                    <div class="flex flex-col bg-gradient-to-br from-indigo-50 to-purple-50 p-8 relative overflow-hidden">
                        <div class="absolute top-0 right-0 w-20 h-20 bg-gradient-to-br from-indigo-200 to-purple-200 rounded-full -translate-y-10 translate-x-10 opacity-30"></div>
                        <dt class="text-sm font-semibold leading-6 text-gray-600">Jobs posted</dt>
                        <dd class="order-first text-4xl font-bold tracking-tight bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">1,200+</dd>
                    </div>
                    <div class="flex flex-col bg-gradient-to-br from-purple-50 to-pink-50 p-8 relative overflow-hidden">
                        <div class="absolute top-0 right-0 w-20 h-20 bg-gradient-to-br from-purple-200 to-pink-200 rounded-full -translate-y-10 translate-x-10 opacity-30"></div>
                        <dt class="text-sm font-semibold leading-6 text-gray-600">Companies</dt>
                        <dd class="order-first text-4xl font-bold tracking-tight bg-gradient-to-r from-purple-600 to-pink-600 bg-clip-text text-transparent">150+</dd>
                    </div>
                    <div class="flex flex-col bg-gradient-to-br from-pink-50 to-indigo-50 p-8 relative overflow-hidden">
                        <div class="absolute top-0 right-0 w-20 h-20 bg-gradient-to-br from-pink-200 to-indigo-200 rounded-full -translate-y-10 translate-x-10 opacity-30"></div>
                        <dt class="text-sm font-semibold leading-6 text-gray-600">Job seekers</dt>
                        <dd class="order-first text-4xl font-bold tracking-tight bg-gradient-to-r from-pink-600 to-indigo-600 bg-clip-text text-transparent">5,000+</dd>
                    </div>
                    <div class="flex flex-col bg-gradient-to-br from-indigo-50 to-blue-50 p-8 relative overflow-hidden">
                        <div class="absolute top-0 right-0 w-20 h-20 bg-gradient-to-br from-indigo-200 to-blue-200 rounded-full -translate-y-10 translate-x-10 opacity-30"></div>
                        <dt class="text-sm font-semibold leading-6 text-gray-600">Success rate</dt>
                        <dd class="order-first text-4xl font-bold tracking-tight bg-gradient-to-r from-indigo-600 to-blue-600 bg-clip-text text-transparent">92%</dd>
                    </div>
                </dl>
            </div>
        </div>

        <!-- Features section with enhanced background -->
        <div class="relative bg-gradient-to-br from-gray-50 via-indigo-50 to-purple-50 overflow-hidden">
            <!-- Background decoration -->
            <div class="absolute inset-0">
                <div class="absolute top-0 left-0 w-40 h-40 bg-gradient-to-br from-indigo-200 to-purple-200 rounded-full opacity-20 -translate-x-20 -translate-y-20"></div>
                <div class="absolute bottom-0 right-0 w-60 h-60 bg-gradient-to-br from-purple-200 to-pink-200 rounded-full opacity-20 translate-x-20 translate-y-20"></div>
                <div class="absolute top-1/2 left-1/2 w-80 h-80 bg-gradient-to-br from-pink-100 to-indigo-100 rounded-full opacity-30 -translate-x-1/2 -translate-y-1/2"></div>
            </div>

            <div class="relative mx-auto max-w-7xl px-6 py-24 sm:py-32 lg:px-8">
                <div class="mx-auto max-w-2xl text-center">
                    <h2 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl bg-gradient-to-r from-indigo-600 to-purple-600 bg-clip-text text-transparent">
                        Why choose our platform?
                    </h2>
                    <p class="mt-6 text-xl leading-8 text-gray-600">
                        We make job searching simple and effective for both job seekers and employers.
                    </p>
                </div>
                <div class="mx-auto mt-20 max-w-2xl sm:mt-24 lg:mt-32 lg:max-w-none">
                    <dl class="grid max-w-xl grid-cols-1 gap-x-8 gap-y-16 lg:max-w-none lg:grid-cols-3">
                        <div class="flex flex-col bg-white/70 backdrop-blur-sm rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 hover:scale-105">
                            <dt class="text-base font-semibold leading-7 text-gray-900">
                                <div class="mb-6 flex h-12 w-12 items-center justify-center rounded-xl bg-gradient-to-r from-indigo-600 to-purple-600 shadow-lg">
                                    <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                    </svg>
                                </div>
                                Easy Job Search
                            </dt>
                            <dd class="mt-1 flex flex-auto flex-col text-base leading-7 text-gray-600">
                                <p class="flex-auto">Find the perfect job with our intuitive search and filtering system designed for modern professionals.</p>
                            </dd>
                        </div>
                        <div class="flex flex-col bg-white/70 backdrop-blur-sm rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 hover:scale-105">
                            <dt class="text-base font-semibold leading-7 text-gray-900">
                                <div class="mb-6 flex h-12 w-12 items-center justify-center rounded-xl bg-gradient-to-r from-purple-600 to-pink-600 shadow-lg">
                                    <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                                    </svg>
                                </div>
                                Verified Companies
                            </dt>
                            <dd class="mt-1 flex flex-auto flex-col text-base leading-7 text-gray-600">
                                <p class="flex-auto">All employers are verified to ensure legitimate job opportunities and trustworthy partnerships.</p>
                            </dd>
                        </div>
                        <div class="flex flex-col bg-white/70 backdrop-blur-sm rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 hover:scale-105">
                            <dt class="text-base font-semibold leading-7 text-gray-900">
                                <div class="mb-6 flex h-12 w-12 items-center justify-center rounded-xl bg-gradient-to-r from-pink-600 to-indigo-600 shadow-lg">
                                    <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
                                    </svg>
                                </div>
                                Quick Applications
                            </dt>
                            <dd class="mt-1 flex flex-auto flex-col text-base leading-7 text-gray-600">
                                <p class="flex-auto">Apply to multiple jobs quickly with our streamlined application process and smart resume matching.</p>
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>

        <!-- Call to action section -->
        <div class="relative bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 overflow-hidden">
            <div class="absolute inset-0">
                <div class="absolute top-0 left-0 w-full h-full bg-black/20"></div>
                <div class="absolute top-0 right-0 w-96 h-96 bg-white/10 rounded-full -translate-y-48 translate-x-48"></div>
                <div class="absolute bottom-0 left-0 w-72 h-72 bg-white/5 rounded-full translate-y-36 -translate-x-36"></div>
            </div>
            <div class="relative px-6 py-24 sm:px-6 sm:py-32 lg:px-8">
                <div class="mx-auto max-w-2xl text-center">
                    <h2 class="text-4xl font-bold tracking-tight text-white sm:text-5xl">
                        Ready to find your dream job?
                    </h2>
                    <p class="mx-auto mt-6 max-w-xl text-lg leading-8 text-gray-100">
                        Join thousands of professionals who have already found their perfect career match through our platform.
                    </p>
                    <div class="mt-10 flex items-center justify-center gap-x-6">
                        <a href="/jobs" class="rounded-lg bg-white px-6 py-3 text-lg font-semibold text-indigo-600 shadow-xl hover:bg-gray-50 transition-all duration-200 hover:scale-105">
                            Start Your Search
                        </a>
                        @guest
                        <a href="/register" class="rounded-lg border-2 border-white px-6 py-3 text-lg font-semibold text-white hover:bg-white hover:text-indigo-600 transition-all duration-200">
                            Create Account
                        </a>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
