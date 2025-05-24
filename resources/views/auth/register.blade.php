<x-layout>
    <x-slot:heading>
        Register
    </x-slot:heading>

    <form method="POST" action="/register">
        @csrf

        <div class="space-y-6">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 ">

                    <div class="">
                        <x-form-label for="first_name">First Name</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="first_name" id="first_name" placeholder="Jeo" required />

                            <x-form-error name="first_name" />
                        </div>
                    </div>

                    <div class="">
                        <x-form-label for="last_name">Last Name</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="last_name" id="last_name" placeholder="Deo" required />

                            <x-form-error name="last_name" />
                        </div>
                    </div>

                    <div class="">
                        <x-form-label for="email">Email</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="email" name="email" id="email" placeholder="JoeDoa@example.com"
                                required />

                            <x-form-error name="email" />
                        </div>
                    </div>

                    <div class="">
                        <x-form-label for="password">Password</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="password" name="password" id="password"
                                placeholder="JoeDoa@example.com" required />

                            <x-form-error name="password" />
                        </div>
                    </div>

                    <div class="">
                        <x-form-label for="password_confirmation">Confirm Password</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="password" name="password_confirmation" id="password_confirmation"
                                placeholder="JoeDoa@example.com" required />

                            <x-form-error name="password_confirmation" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-4 flex items-center justify-end gap-x-6">
            <a href="/" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
            <x-form-button>Register</x-form-button>
        </div>
    </form>
</x-layout>
