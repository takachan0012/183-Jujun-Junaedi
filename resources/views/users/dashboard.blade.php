<x-layout-dashboard>
    <x-slot:content>{{ $content }}</x-slot:content>
    <div class="z-10 fixed top-0 w-full p-4 bg-base-100 h-16">
        <h2 class="text-2xl">Welcome, Jujun Junaedi</h2>
    </div>
    <section class="my-16 flex gap-2">
        <a href="{{ route('debt') }}" class="h-48 w-1/2">
            <div
                class="p-4 bg-base-100 border-[1px] border-[#ffffff1a] hover:border-green-primary hover:shadow-[inset_1px_1px_10px_#1db753] hover:text-green-primary delay-100 transition-all ease-in flex flex-col items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-24 h-24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                </svg>
                <span>
                    Debt
                </span>
            </div>
        </a>
        <a href="{{ route('transaction') }}" class="h-48 w-1/2">
            <div
                class="p-4 bg-base-100 border-[1px] border-[#ffffff1a] hover:border-green-primary hover:shadow-[inset_1px_1px_10px_#1db753] hover:text-green-primary delay-100 transition-all ease-in flex flex-col items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-24 h-24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19.5 12c0-1.232-.046-2.453-.138-3.662a4.006 4.006 0 0 0-3.7-3.7 48.678 48.678 0 0 0-7.324 0 4.006 4.006 0 0 0-3.7 3.7c-.017.22-.032.441-.046.662M19.5 12l3-3m-3 3-3-3m-12 3c0 1.232.046 2.453.138 3.662a4.006 4.006 0 0 0 3.7 3.7 48.656 48.656 0 0 0 7.324 0 4.006 4.006 0 0 0 3.7-3.7c.017-.22.032-.441.046-.662M4.5 12l3 3m-3-3-3 3" />
                </svg>
                <span>
                    Transaction
                </span>
            </div>
        </a>
    </section>
    <section class="my-4">
        <div class="flex items-center mb-7 gap-11">
            <h3 class="text-xl">Current Debt</h3>
            <a href="{{ route('debt') }}" class="text-green-primary hover:underline">View All</a>
        </div>
        <div class="overflow-x-auto">
            <table class="table">
                <!-- head -->
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Amount</th>
                        <th>Due Date</th>
                        <th>Notes</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <!-- row 1 -->
                    <tr data-href="{{ route('debt') }}" class="hover:cursor-pointer">
                        <td>
                            <div class="flex items-center gap-3">
                                <div>
                                    <div class="font-bold">Mikasa</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="text-green-primary">10,000</span>
                            <br />
                            <span class="text-xs">My Debt</span>
                        </td>
                        <td>
                            <span>2 Juni 2023</span>
                        </td>
                        <td>
                            <span class="line-clamp-2">For living
                            </span>
                        </td>
                        <th>
                            <button class="btn btn-ghost btn-xs">details</button>
                        </th>
                    </tr>
                    <!-- row 2 -->
                    <tr>
                        <td>
                            <div class="flex items-center gap-3">
                                <div>
                                    <div class="font-bold">Taka</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="text-red-500">10,000</span>
                            <br />
                            <span class="text-xs">Customer Debt</span>
                        </td>
                        <td>
                            <span>2 Juni 2023</span>
                        </td>
                        <td>
                            <span class="line-clamp-2">For living
                            </span>
                        </td>
                        <th>
                            <button class="btn btn-ghost btn-xs">details</button>
                        </th>
                    </tr>
                    <!-- row 3 -->
                    <tr>
                        <td>
                            <div class="flex items-center gap-3">
                                <div>
                                    <div class="font-bold">Eren Yeager</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="text-green-primary">30,000</span>
                            <br />
                            <span class="text-xs">My Debt</span>
                        </td>
                        <td>
                            <span>2 Juni 2023</span>
                        </td>
                        <td>
                            <span class="line-clamp-2">For living
                            </span>
                        </td>
                        <th>
                            <button class="btn btn-ghost btn-xs">details</button>
                        </th>
                    </tr>
                    <!-- row 4 -->
                    <tr>
                        <td>
                            <div class="flex items-center gap-3">
                                <div>
                                    <div class="font-bold">Sun Jing Woo</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="text-green-primary">10,000</span>
                            <br />
                            <span class="text-xs">My Debt</span>
                        </td>
                        <td>
                            <span>2 Juni 2023</span>
                        </td>
                        <td>
                            <span class="line-clamp-2">For living
                            </span>
                        </td>
                        <th>
                            <button class="btn btn-ghost btn-xs">details</button>
                        </th>
                    </tr>
                </tbody>
                <!-- foot -->
            </table>
        </div>
    </section>
    <section class="my-7">
        <div class="flex items-center mb-7 gap-11">
            <h3 class="text-xl">Last Transaction</h3>
            <a href="{{ route('transaction') }}" class="text-green-primary hover:underline">View All</a>
        </div>
        <div class="overflow-x-auto">
            <table class="table">
                <!-- head -->
                <thead>
                    <tr>
                        <th>Notes</th>
                        <th>Amount</th>
                        <th>Category</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <!-- row 1 -->
                    <tr>
                        <td>
                            <div class="flex items-center gap-3">
                                <div>
                                    <div class="font-bold">Salary</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="text-green-primary">10,000</span>
                        </td>
                        <td>
                            <span>Income</span>
                        </td>
                        <td>
                            <span class="line-clamp-2">Paid Off
                            </span>
                        </td>
                        <th>
                            <button class="btn btn-ghost btn-xs">details</button>
                        </th>
                    </tr>
                    <!-- row 2 -->
                    <tr>
                        <td>
                            <div class="flex items-center gap-3">
                                <div>
                                    <div class="font-bold">Buy Coffee</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="text-red-500">10,000</span>
                        </td>
                        <td>
                            <span>Expense</span>
                        </td>
                        <td>
                            <span class="line-clamp-2">Paid Off
                            </span>
                        </td>
                        <th>
                            <button class="btn btn-ghost btn-xs">details</button>
                        </th>
                    </tr>
                    <!-- row 3 -->
                    <tr>
                        <td>
                            <div class="flex items-center gap-3">
                                <div>
                                    <div class="font-bold">Packet Data</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="text-red-500">30,000</span>
                        </td>
                        <td>
                            <span>Expense</span>
                        </td>
                        <td>
                            <span class="line-clamp-2">Debt
                            </span>
                        </td>
                        <th>
                            <button class="btn btn-ghost btn-xs">details</button>
                        </th>
                    </tr>
                    <!-- row 4 -->
                    <tr>
                        <td>
                            <div class="flex items-center gap-3">
                                <div>
                                    <div class="font-bold">Invest</div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="text-green-primary">10,000</span>
                        </td>
                        <td>
                            <span>Income</span>
                        </td>
                        <td>
                            <span class="line-clamp-2">Debt
                            </span>
                        </td>
                        <th>
                            <button class="btn btn-ghost btn-xs">details</button>
                        </th>
                    </tr>
                </tbody>
                <!-- foot -->
            </table>
        </div>
    </section>
</x-layout-dashboard>
