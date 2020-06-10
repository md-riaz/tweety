<div class="border border-blue-400 rounded-lg py-6 px-8 mb-8">
    <form method="post" action="/tweets">
        @csrf

        <textarea
            placeholder="What's up doc?"
            name="body"
            id="body"
            class="w-full"
            required
        ></textarea>

        <hr class="my-4">

        @error('body')
        <p class="text-red-500 text-sm mb-4">{{ $message }}</p>
        @enderror

        <footer class="flex justify-between items-center">
            <img
                src="{{ auth()->user()->avatar }}"
                alt="your avatar"
                class="rounded-full mr-2"
                width="50"
                height="50"
            >

            <x-button></x-button>
        </footer>

    </form>

</div>
