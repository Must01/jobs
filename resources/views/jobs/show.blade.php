<x-layout>
    <x-slot:heading>
        {{ $job->title }}
    </x-slot:heading>

    <div class="bg-white shadow-sm rounded-lg">
        <div class="px-6 py-8">
            <!-- Job header -->
            <div class="flex items-start justify-between mb-8">
                <div class="flex items-center gap-4">
                    <div class="h-16 w-16 bg-indigo-100 rounded-xl flex items-center justify-center">
                        <span class="text-indigo-600 font-bold text-2xl">
                            {{ substr($job->employer->name, 0, 1) }}
                        </span>
                    </div>
                    <div>
                        <h1 class="text-2xl font-bold text-gray-900">{{ $job->title }}</h1>
                        <p class="text-lg text-indigo-600 font-medium">{{ $job->employer->name }}</p>
                        <div class="flex items-center gap-4 mt-2 text-sm text-gray-600">
                            <span class="flex items-center gap-1">
                                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                </svg>
                                Remote
                            </span>
                            <span class="flex items-center gap-1">
                                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                Full-time
                            </span>
                            <span class="flex items-center gap-1">
                                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5a2.25 2.25 0 002.25-2.25m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5a2.25 2.25 0 012.25 2.25v7.5" />
                                </svg>
                                Posted 2 days ago
                            </span>
                        </div>
                    </div>
                </div>
                <div class="text-right">
                    <div class="text-3xl font-bold text-gray-900">{{ $job->salary }}</div>
                    <div class="text-sm text-gray-500">per year</div>
                    <button class="mt-4 w-full rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Apply Now
                    </button>
                </div>
            </div>

            <!-- Job details grid -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Main content -->
                <div class="lg:col-span-2">
                    <div class="space-y-8">
                        <!-- Job description -->
                        <div>
                            <h2 class="text-lg font-semibold text-gray-900 mb-4">Job Description</h2>
                            <div class="prose text-gray-600">
                                <p>We are seeking a talented {{ $job->title }} to join our dynamic team. This role offers an exciting opportunity to work on cutting-edge projects and contribute to our company's growth.</p>

                                <h3 class="font-semibold text-gray-900 mt-6 mb-3">Key Responsibilities:</h3>
                                <ul class="list-disc list-inside space-y-2">
                                    <li>Develop and maintain high-quality software solutions</li>
                                    <li>Collaborate with cross-functional teams to deliver projects</li>
                                    <li>Participate in code reviews and technical discussions</li>
                                    <li>Contribute to system architecture and design decisions</li>
                                    <li>Mentor junior team members</li>
                                </ul>

                                <h3 class="font-semibold text-gray-900 mt-6 mb-3">Requirements:</h3>
                                <ul class="list-disc list-inside space-y-2">
                                    <li>3+ years of experience in relevant technologies</li>
                                    <li>Strong problem-solving and analytical skills</li>
                                    <li>Excellent communication and teamwork abilities</li>
                                    <li>Bachelor's degree in Computer Science or related field</li>
                                    <li>Experience with modern development frameworks</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Skills -->
                        <div>
                            <h2 class="text-lg font-semibold text-gray-900 mb-4">Required Skills</h2>
                            <div class="flex flex-wrap gap-2">
                                <span class="inline-flex items-center rounded-full bg-indigo-100 px-3 py-1 text-sm font-medium text-indigo-800">Laravel</span>
                                <span class="inline-flex items-center rounded-full bg-indigo-100 px-3 py-1 text-sm font-medium text-indigo-800">PHP</span>
                                <span class="inline-flex items-center rounded-full bg-indigo-100 px-3 py-1 text-sm font-medium text-indigo-800">MySQL</span>
                                <span class="inline-flex items-center rounded-full bg-indigo-100 px-3 py-1 text-sm font-medium text-indigo-800">JavaScript</span>
                                <span class="inline-flex items-center rounded-full bg-indigo-100 px-3 py-1 text-sm font-medium text-indigo-800">Vue.js</span>
                                <span class="inline-flex items-center rounded-full bg-indigo-100 px-3 py-1 text-sm font-medium text-indigo-800">Git</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="lg:col-span-1">
                    <div class="bg-gray-50 rounded-lg p-6 space-y-6">
                        <!-- Company info -->
                        <div>
                            <h3 class="text-sm font-semibold text-gray-900 mb-3">Company Information</h3>
                            <div class="space-y-3">
                                <div>
                                    <dt class="text-sm text-gray-600">Company</dt>
                                    <dd class="text-sm font-medium text-gray-900">{{ $job->employer->name }}</dd>
                                </div>
                                <div>
                                    <dt class="text-sm text-gray-600">Industry</dt>
                                    <dd class="text-sm font-medium text-gray-900">Technology</dd>
                                </div>
                                <div>
                                    <dt class="text-sm text-gray-600">Company Size</dt>
                                    <dd class="text-sm font-medium text-gray-900">50-200 employees</dd>
                                </div>
                            </div>
                        </div>

                        <!-- Job details -->
                        <div>
                            <h3 class="text-sm font-semibold text-gray-900 mb-3">Job Details</h3>
                            <div class="space-y-3">
                                <div>
                                    <dt class="text-sm text-gray-600">Employment Type</dt>
                                    <dd class="text-sm font-medium text-gray-900">Full-time</dd>
                                </div>
                                <div>
                                    <dt class="text-sm text-gray-600">Experience Level</dt>
                                    <dd class="text-sm font-medium text-gray-900">Mid-level</dd>
                                </div>
                                <div>
                                    <dt class="text-sm text-gray-600">Location</dt>
                                    <dd class="text-sm font-medium text-gray-900">Remote</dd>
                                </div>
                            </div>
                        </div>

                        <!-- Benefits -->
                        <div>
                            <h3 class="text-sm font-semibold text-gray-900 mb-3">Benefits</h3>
                            <div class="space-y-2">
                                <div class="flex items-center gap-2 text-sm text-gray-600">
                                    <svg class="h-4 w-4 text-green-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                    </svg>
                                    Health Insurance
                                </div>
                                <div class="flex items-center gap-2 text-sm text-gray-600">
                                    <svg class="h-4 w-4 text-green-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                    </svg>
                                    401(k) Matching
                                </div>
                                <div class="flex items-center gap-2 text-sm text-gray-600">
                                    <svg class="h-4 w-4 text-green-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                    </svg>
                                    Flexible PTO
                                </div>
                                <div class="flex items-center gap-2 text-sm text-gray-600">
                                    <svg class="h-4 w-4 text-green-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                                    </svg>
                                    Remote Work
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @can('edit', $job)
                <div class="mt-8 pt-6 border-t border-gray-200">
                    <x-button href="/jobs/{{ $job->id }}/edit">Edit Job</x-button>
                </div>
            @endcan
        </div>
    </div>

    <!-- Back to jobs link -->
    <div class="mt-6">
        <a href="/jobs" class="inline-flex items-center text-sm font-medium text-indigo-600 hover:text-indigo-500">
            <svg class="mr-1 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
            </svg>
            Back to all jobs
        </a>
    </div>
</x-layout>
