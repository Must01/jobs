<x-layout>
    <x-slot:heading>
        Job Listings
    </x-slot:heading>

    <!-- Search bar -->
    <div class="mb-8">
        <div class="flex flex-col sm:flex-row gap-4">
            <div class="flex-1">
                <input type="text" placeholder="Search jobs..." class="block w-full rounded-md border-0 py-2 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
            <div class="flex gap-2">
                <select class="rounded-md border-0 py-2 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                    <option>All Locations</option>
                    <option>Remote</option>
                    <option>New York</option>
                    <option>San Francisco</option>
                    <option>London</option>
                </select>
                <button class="rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Search
                </button>
            </div>
        </div>
    </div>

    <!-- Job listings -->
    <div class="grid gap-6">
        @forelse ($jobs as $job)
            <div class="bg-white rounded-lg shadow-sm border border-gray-200 hover:shadow-md transition-shadow duration-200">
                <div class="p-6">
                    <div class="flex items-start justify-between">
                        <div class="flex-1">
                            <div class="flex items-center gap-3 mb-2">
                                <div class="h-12 w-12 bg-indigo-100 rounded-lg flex items-center justify-center">
                                    <span class="text-indigo-600 font-semibold text-lg">
                                        {{ substr($job->employer->name, 0, 1) }}
                                    </span>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900">
                                        <a href="/jobs/{{ $job->id }}" class="hover:text-indigo-600 transition-colors">
                                            {{ $job->title }}
                                        </a>
                                    </h3>
                                    <p class="text-sm text-indigo-600 font-medium">{{ $job->employer->name }}</p>
                                </div>
                            </div>

                            <div class="flex flex-wrap items-center gap-4 text-sm text-gray-600 mb-4">
                                <div class="flex items-center gap-1">
                                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                    </svg>
                                    Remote
                                </div>
                                <div class="flex items-center gap-1">
                                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    Full-time
                                </div>
                                <div class="flex items-center gap-1">
                                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5a2.25 2.25 0 002.25-2.25m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5a2.25 2.25 0 012.25 2.25v7.5" />
                                    </svg>
                                    Posted 2 days ago
                                </div>
                            </div>

                            <p class="text-gray-600 text-sm line-clamp-2 mb-4">
                                We're looking for a talented {{ $job->title }} to join our growing team. This is an excellent opportunity for someone who wants to make a real impact.
                            </p>

                            <div class="flex flex-wrap gap-2">
                                <span class="inline-flex items-center rounded-full bg-gray-100 px-2.5 py-0.5 text-xs font-medium text-gray-800">Laravel</span>
                                <span class="inline-flex items-center rounded-full bg-gray-100 px-2.5 py-0.5 text-xs font-medium text-gray-800">PHP</span>
                                <span class="inline-flex items-center rounded-full bg-gray-100 px-2.5 py-0.5 text-xs font-medium text-gray-800">MySQL</span>
                            </div>
                        </div>

                        <div class="text-right ml-4">
                            <div class="text-xl font-bold text-gray-900 mb-2">{{ $job->salary }}</div>
                            <div class="text-sm text-gray-500 mb-4">per year</div>
                            <a href="/jobs/{{ $job->id }}" class="inline-flex items-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                View Details
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="text-center py-12">
                <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                </svg>
                <h3 class="mt-2 text-sm font-semibold text-gray-900">No jobs found</h3>
                <p class="mt-1 text-sm text-gray-500">Get started by creating a new job posting.</p>
                @auth
                <div class="mt-6">
                    <a href="/jobs/create" class="inline-flex items-center rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Create Job
                    </a>
                </div>
                @endauth
            </div>
        @endforelse

        <!-- Pagination -->
        @if($jobs->hasPages())
        <div class="mt-8">
            {{ $jobs->links() }}
        </div>
        @endif
    </div>
</x-layout>
