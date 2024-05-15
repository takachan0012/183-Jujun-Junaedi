<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="w-screen h-screen flex justify-center items-center">
        <div class="w-80 lg:w-96">
            <a href="/">
                <div class="flex items-center my-9 flex-col justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 text-green-primary">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15.75 5.25a3 3 0 0 1 3 3m3 0a6 6 0 0 1-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1 1 21.75 8.25Z" />
                    </svg>
                    <h1 class="text-4xl font-bold text-green-primary">
                        kunciKas
                    </h1>
                </div>
            </a>
            <form action="{{ route('register-successfully') }}" method="post" class="w-full flex flex-col gap-3">
                @csrf
                <x-label-input>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                        class="w-4 h-4 opacity-70">
                        <path
                            d="M2.5 3A1.5 1.5 0 0 0 1 4.5v.793c.026.009.051.02.076.032L7.674 8.51c.206.1.446.1.652 0l6.598-3.185A.755.755 0 0 1 15 5.293V4.5A1.5 1.5 0 0 0 13.5 3h-11Z" />
                        <path
                            d="M15 6.954 8.978 9.86a2.25 2.25 0 0 1-1.956 0L1 6.954V11.5A1.5 1.5 0 0 0 2.5 13h11a1.5 1.5 0 0 0 1.5-1.5V6.954Z" />
                    </svg>
                    <input type="text" class="grow" placeholder="Email" name="email" required />
                </x-label-input>
                <x-label-input>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                        class="w-4 h-4 opacity-70">
                        <path
                            d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM12.735 14c.618 0 1.093-.561.872-1.139a6.002 6.002 0 0 0-11.215 0c-.22.578.254 1.139.872 1.139h9.47Z" />
                    </svg>
                    <input type="text" class="grow" placeholder="Username" name="username" required />
                </x-label-input>
                <x-password-input />
                @error('password')
                    <span class="text-red-500">Password must be more than 8 characters</span>
                @enderror
                <button type="submit" class="btn btn-primary">Register</button>
                <div>
                    <span>Have an account? </span><a href="/login" class="underline hover:no-underline">Log In</a>
                </div>
            </form>
        </div>
    </div>
</x-layout>
