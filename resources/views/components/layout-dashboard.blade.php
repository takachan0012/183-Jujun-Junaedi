<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="h-screen w-screen flex">
        <div class="h-24 w-[20%]">
            <div class="h-full flex justify-center items-center bg-red-500 gap-1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M15.75 5.25a3 3 0 0 1 3 3m3 0a6 6 0 0 1-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1 1 21.75 8.25Z" />
                </svg>
                <h1 class="text-4xl font-bold">
                    kunciKas
                </h1>
            </div>
            <div class="flex flex-col gap-3">
                <a href="/dashboard">
                    <x-button class="{{ request()->is('dashboard') ? 'text-red-500 border-red-500 border-r-2' : '' }}">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z" />
                        </svg>
                        <span>
                            Dashboard
                        </span>
                    </x-button>
                </a>
                <a href="/dashboard/debt">
                    <x-button
                        class="{{ request()->is('dashboard/debt') ? 'text-red-500 border-red-500 border-r-2' : '' }}">Debt</x-button>
                </a>
                <a href="/dashboard/transaction">
                    <x-button
                        class="{{ request()->is('dashboard/transaction') ? 'text-red-500 border-red-500 border-r-2' : '' }}">Transaction</x-button>
                </a>
            </div>
        </div>
        {{ $content }}
    </div>
    {{ $slot }}
</x-layout>
