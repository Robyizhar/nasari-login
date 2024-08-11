<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <h3 class="text-center font-bold">Silahkan Login</h3>

        <div class="grid grid-cols-6 gap-1 mt-4">
            <i data-feather="credit-card" class="icon ml-9 mt-1 h-4 font-bold"></i>
            <div class="col-span-5">
                <x-text-input id="email" class="block w-full" type="email" name="email" placeholder="test@example.com" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
        </div>

        <div class="grid grid-cols-6 gap-1 mt-2">
            <i data-feather="lock" class="icon ml-9 mt-1 h-4 font-bold"></i>
            <div class="col-span-5">
                <x-text-input
                    id="password" class="block w-full"
                    type="password"
                    name="password"
                    placeholder="password"
                    required autocomplete="current-password"
                />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
        </div>

        <div class="flex items-center justify-center mt-4">
            <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 ms-3">
                Login
            </button>
        </div>
    </form>
</x-guest-layout>
