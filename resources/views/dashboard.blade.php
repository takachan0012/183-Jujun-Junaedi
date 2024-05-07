<x-layout-dashboard>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="h-24">
        <div class="w-[20%] h-full flex justify-center items-center bg-red-500">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M15.75 5.25a3 3 0 0 1 3 3m3 0a6 6 0 0 1-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1 1 21.75 8.25Z" />
            </svg>
            <h1 class="text-4xl font-bold">
                kunciKas
            </h1>
        </div>
        <div class="w-[80%]">

        </div>
    </div>
    <div class="flex flex-row gap-2">
        <div class="flex flex-col gap-3 w-[20%] h-screen">
            <button onclick="showContent(1)" class="w-full p-3 border-r-2 border-red-500 text-red-500"
                id="button1">test1</button>
            <button onclick="showContent(2)" class="w-full p-3 " id="button2">test2</button>
            <button onclick="showContent(3)" class="w-full p-3 " id="button3">test3</button>
        </div>
        <div>
            <p id="content1" style="display:block">content1</p>
            <p id="content2" style="display:none">content2</p>
            <p id="content3" style="display:none">content3</p>
        </div>
    </div>
</x-layout-dashboard>
