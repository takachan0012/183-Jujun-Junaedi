<x-layout-dashboard>
    <x-slot:content>{{ $content }}</x-slot:content>
    <div class="sticky top-4 bg-base-100 border-[1px] border-[#ffffff1a] rounded-md p-2">
        <h2 class="text-2xl">Welcome, Jujun Junaedi</h2>
    </div>
    <section class="my-4 flex gap-2">
        <div
            class="bg-base-100 border-[1px] border-[#ffffff1a] h-48 w-1/2 hover:border-green-primary hover:shadow-[inset_1px_1px_10px_#1db753] hover:text-green-primary delay-100 transition-all ease-in flex flex-col items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-24 h-24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
            </svg>
            <span>
                Debt
            </span>
        </div>
        <div
            class="bg-base-100 border-[1px] border-[#ffffff1a] h-48 w-1/2 hover:border-green-primary hover:shadow-[inset_1px_1px_10px_#1db753] hover:text-green-primary delay-100 transition-all ease-in flex flex-col items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-24 h-24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M19.5 12c0-1.232-.046-2.453-.138-3.662a4.006 4.006 0 0 0-3.7-3.7 48.678 48.678 0 0 0-7.324 0 4.006 4.006 0 0 0-3.7 3.7c-.017.22-.032.441-.046.662M19.5 12l3-3m-3 3-3-3m-12 3c0 1.232.046 2.453.138 3.662a4.006 4.006 0 0 0 3.7 3.7 48.656 48.656 0 0 0 7.324 0 4.006 4.006 0 0 0 3.7-3.7c.017-.22.032-.441.046-.662M4.5 12l3 3m-3-3-3 3" />
            </svg>
            <span>
                Transaction
            </span>
        </div>
    </section>
</x-layout-dashboard>
