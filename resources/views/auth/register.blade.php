<x-master>
    <div class="container mx-auto flex justify-center">
        <div class="px-12 py-8 bg-gray-200 border border-gray-300 rounded-lg">
            <div class="font-bold text-lg mb-4">{{ __('Register') }}</div>


            <form method="POST" action="{{ route('register') }}">
            @csrf

            <!--  Form Input -->
                <div class="mb-6">
                    <label
                        for="username"
                        class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Username
                    </label>

                    <div class="flex">
                        <input
                            type="text"
                            name="username"
                            id="username"
                            class="border border-gray-400 p-2 w-full"
                            value="{{ old('username') }}"
                            required
                            autofocus
                        >


                    </div>
                    @error('username')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div><!--  Form Input End -->

                <!--  Form Input -->
                <div class="mb-6">
                    <label
                        for="name"
                        class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Name
                    </label>

                    <div class="flex">
                        <input
                            type="text"
                            name="name"
                            id="name"
                            class="border border-gray-400 p-2 w-full"
                            value="{{ old('name') }}"
                            required
                            autofocus
                        >


                    </div>
                    @error('name')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div><!--  Form Input End -->


                <!--  Form Input -->
                <div class="mb-6">
                    <label
                        for="email"
                        class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        E-Mail Address
                    </label>

                    <div class="flex">
                        <input
                            type="email"
                            name="email"
                            id="email"
                            class="border border-gray-400 p-2 w-full"
                            value="{{ old('email') }}"
                            required
                            autocomplete="email"
                        >


                    </div>
                    @error('email')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div><!--  Form Input End -->


                <!--  Form Input -->
                <div class="mb-6">
                    <label
                        for="password"
                        class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Password
                    </label>

                    <div class="flex">
                        <input
                            type="password"
                            name="password"
                            id="password"
                            class="border border-gray-400 p-2 w-full"
                            required
                            autocomplete="password"
                            autofocus
                        >


                    </div>
                    @error('password')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div><!--  Form Input End -->

                <!--  Form Input -->
                <div class="mb-6">
                    <label
                        for="password_confirmation"
                        class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Confirm Password
                    </label>

                    <input
                        type="password"
                        name="password_confirmation"
                        id="password_confirmation"
                        class="border border-gray-400 p-2 w-full"
                        required
                    >

                    @error('password_confirmation')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div><!--  Form Input End -->


                <div>
                    <button
                        type="submit"
                        class="bg-blue-400 rounded py-2 px-4 text-white mr-2 hover:bg-blue-500"
                    >
                        Register
                    </button>
                    <a
                        href="{{ route('login') }}"
                        class="text-xs text-gray-700"
                    >
                        Already have an account?
                    </a>

                </div>
            </form>

        </div>
    </div>
</x-master>
