<x-master>
    <div class="container mx-auto flex justify-center">
        <div class="px-12 py-8 bg-gray-200 border border-gray-300 rounded-lg">
            <div class="font-bold text-lg mb-4">{{ __('Login') }}</div>


            <form method="POST" action="{{ route('login') }}">
            @csrf


            <!--  Form Input -->
                <div class="mb-6">
                    <label
                        for="email"
                        class="block mb-2 uppercase font-bold text-xs text-gray-700">
                        Email
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
                            autofocus
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
                    <div>
                        <input
                            type="checkbox"
                            name="remember"
                            id="remember"
                            class="mr-1"
                            {{ old('remember' ? 'checked' : '') }}
                        >
                        <label
                            for="remember"
                            class="uppercase font-bold text-xs text-gray-700">
                            Remember me
                        </label>

                    </div>

                    @error('remember')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                    @enderror
                </div><!--  Form Input End -->

                <div>
                    <button
                        type="submit"
                        class="bg-blue-400 rounded py-2 px-4 text-white mr-2 hover:bg-blue-500"
                    >
                        Submit
                    </button>
                    <a
                        href="{{ route('password.request') }}"
                        class="text-xs text-gray-700"
                    >
                        Forgot Your Password?
                    </a>

                </div>
            </form>


        </div>
    </div>

</x-master>

