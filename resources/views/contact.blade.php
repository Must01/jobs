<x-layout>
    <x-slot:heading>
        Contact Us
    </x-slot:heading>

    <div class="bg-white px-6 py-24 sm:py-32 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Get in touch</h2>
            <p class="mt-2 text-lg leading-8 text-gray-600">
                Have questions? We'd love to hear from you. Send us a message and we'll respond as soon as possible.
            </p>
        </div>
        <form action="#" method="POST" class="mx-auto mt-16 max-w-xl sm:mt-20">
            @csrf
            <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                <div>
                    <x-form-label for="first_name">First name</x-form-label>
                    <div class="mt-2.5">
                        <x-form-input type="text" name="first_name" id="first_name" autocomplete="given-name" />
                    </div>
                </div>
                <div>
                    <x-form-label for="last_name">Last name</x-form-label>
                    <div class="mt-2.5">
                        <x-form-input type="text" name="last_name" id="last_name" autocomplete="family-name" />
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <x-form-label for="email">Email</x-form-label>
                    <div class="mt-2.5">
                        <x-form-input type="email" name="email" id="email" autocomplete="email" />
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <x-form-label for="subject">Subject</x-form-label>
                    <div class="mt-2.5">
                        <x-form-input type="text" name="subject" id="subject" />
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="message" class="block text-sm font-semibold leading-6 text-gray-900">Message</label>
                    <div class="mt-2.5">
                        <textarea name="message" id="message" rows="4" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                    </div>
                </div>
            </div>
            <div class="mt-10">
                <x-form-button class="w-full">Send message</x-form-button>
            </div>
        </form>
    </div>

    <!-- Contact information -->
    <div class="bg-gray-50">
        <div class="mx-auto max-w-7xl px-6 py-16 lg:px-8">
            <div class="mx-auto max-w-2xl text-center">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900">Other ways to reach us</h2>
            </div>
            <div class="mx-auto mt-16 grid max-w-4xl grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
                <div class="rounded-2xl bg-white p-10 text-center ring-1 ring-inset ring-gray-900/5">
                    <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-full bg-indigo-600">
                        <svg class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                        </svg>
                    </div>
                    <h3 class="mt-8 text-lg font-semibold leading-8 tracking-tight text-gray-900">Email</h3>
                    <p class="mt-2 text-base leading-7 text-gray-600">support@jobboard.com</p>
                </div>
                <div class="rounded-2xl bg-white p-10 text-center ring-1 ring-inset ring-gray-900/5">
                    <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-full bg-indigo-600">
                        <svg class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                        </svg>
                    </div>
                    <h3 class="mt-8 text-lg font-semibold leading-8 tracking-tight text-gray-900">Phone</h3>
                    <p class="mt-2 text-base leading-7 text-gray-600">+1 (555) 123-4567</p>
                </div>
                <div class="rounded-2xl bg-white p-10 text-center ring-1 ring-inset ring-gray-900/5">
                    <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-full bg-indigo-600">
                        <svg class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                        </svg>
                    </div>
                    <h3 class="mt-8 text-lg font-semibold leading-8 tracking-tight text-gray-900">Office</h3>
                    <p class="mt-2 text-base leading-7 text-gray-600">123 Business St, Suite 100<br>City, State 12345</p>
                </div>
            </div>
        </div>
    </div>
</x-layout>
