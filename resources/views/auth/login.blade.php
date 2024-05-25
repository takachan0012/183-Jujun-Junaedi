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
            <div class="text-md text-green-primary my-2 text-center">
                @if (session('message'))
                    {{ session('message') }}
                @endif
            </div>
            <form action="{{ route('login') }}" method="post" class="w-full flex flex-col gap-3">
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
                <x-password-input />
                <button type="submit" class="btn btn-primary">Log In</button>
                <a href="{{ route('resetPasswordPage') }}" class="w-fit text-green-primary hover:underline">Forget
                    Password</a>
                <div>
                    <span>Have not account yet? </span><a href={{ route('registerPage') }}
                        class="underline hover:no-underline">Register</a>
                </div>
                @if ($errors->any())
                    <div>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li class="text-red-500">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </form>
        </div>
    </div>
</x-layout>
