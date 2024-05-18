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
            <form action="{{ route('login-successfully') }}" method="post" class="w-full flex flex-col gap-3">
                @csrf
                <x-password-input placeholder='New Password' />
                @error('password')
                    <span class="text-red-500">Password must be more than 8 characters</span>
                @enderror
                <button type="submit" class="btn btn-primary">Update Password</button>
                <a href="/login" class="w-fit text-green-primary hover:underline">Back to Log In</a>
            </form>
        </div>
    </div>
</x-layout>
