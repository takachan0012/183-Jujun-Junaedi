<x-layout-dashboard>
    <x-slot:title>{{ $title }}</x-slot:title>
    <h1>Dashboard</h1>
    <div class="flex flex-row gap-2">
        <div class="flex flex-col gap-3 ms-2">
            <button onclick="showContent(1)" class="w-full p-3 border-l-2 border-red-500 text-red-500"
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
