<x-layout-dashboard>
    <x-slot:content>{{ $content }}</x-slot:content>
    <div class="flex justify-center items-center h-screen">
        <div class="w-1/2">
            <div class="flex justify-between">
                <x-button-back class="w-28" />
                {{-- IF DEBT CONNECTED TO TRANSACTION THIS ACTION HIDDEN --}}
                <div class="flex justify-center items-center gap-4">
                    <a href="" class="flex flex-col items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                        </svg>
                        <span>Edit</span>
                    </a>
                    <a href="" class="flex flex-col items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                        </svg>
                        <span>Delete</span>
                    </a>
                </div>
            </div>
            {{-- IF DEBT NOT CONNECTED TO TRANSACTION THIS ACTION HIDDEN --}}
            <a href=""
                class="flex justify-between p-4 bg-base-100 border-[1px] border-[#ffffff1a] rounded-md my-4">
                <span>
                    Connected to transaction. View detail
                </span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                </svg>
            </a>
            <div
                class="p-4 bg-base-100 border-[1px] border-[#ffffff1a] rounded-md flex flex-col gap-7 items-center justify-center my-4">
                <span class=" text-xl text-center font-bold">
                    Detail Transaction
                </span>
                <div class="w-full flex justify-between">
                    <div class="flex flex-col text-left">
                        <span>Date</span>
                        <span>Customer</span>
                    </div>
                    <div class="flex flex-col text-right">
                        <span>18 Mei 2023 22:53</span>
                        <span>Jujun Junaedi</span>
                    </div>
                </div>
                <div
                    class="w-full text-xl font-bold flex justify-between border-t border-b border-dashed border-white py-2">
                    <span>Debt Paid</span>
                    <span>Rp10,000</span>
                </div>
                {{-- IF DEBT NOT CONNECTED TO TRANSACTION THIS DIV HIDDEN --}}
                <div class="w-full flex flex-col">
                    <span>Category:</span>
                    <span>Category Content Here</span>
                </div>
                <div class="w-full flex flex-col">
                    <span>Note:</span>
                    <span>Note Content Here</span>
                </div>
                <div>
                    <span>Made By</span>
                    <span class="text-xl text-green-primary">kunciKas</span>
                </div>
            </div>
        </div>
    </div>
</x-layout-dashboard>
