<x-layout-dashboard>
    <x-slot:content>{{ $content }}</x-slot:content>
    <div class="z-10 fixed top-0 w-full py-4 bg-base-100 h-28">
        <h2 class="text-2xl">Transaction</h2>
    </div>
    <div role="tablist" class="tabs tabs-bordered">
        <input type="radio" name="my_tabs_1" role="tab"
            class="inline-block whitespace-nowrap tab pb-11 pt-7 bg-base-100  hover:cursor-pointer sticky top-16 z-10 mb-9"
            aria-label="Overview" checked />
        <div role="tabpanel" class="mt-5 tab-content lg:p-10 overflow-x-hidden">
            <div class="flex flex-col gap-2 md:grid md:grid-cols-2 lg:grid-cols-4">
                <a href="{{ route('createTransaction') }}"
                    class="w-full h-32 p-4 bg-base-100 border-[1px] border-[#ffffff1a] hover:border-green-primary hover:shadow-[inset_1px_1px_10px_#1db753] text-green-primary delay-100 transition-all ease-in flex flex-col items-center justify-center hover:cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-9 h-9">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                    <span>Create Transaction</span>
                </a>
                <a href="{{ route('createDebt') }}"
                    class="w-full h-32 p-4 bg-base-100 border-[1px] border-[#ffffff1a] hover:border-green-primary hover:shadow-[inset_1px_1px_10px_#1db753] text-green-primary delay-100 transition-all ease-in flex flex-col items-center justify-center hover:cursor-pointer">
                    <span class="text-xl lg:text-2xl font-bold">21</span>
                    <span>Transaction Today</span>
                </a>
                <div class="w-full h-32 p-4 bg-base-100 border-[1px] border-[#ffffff1a] hover:border-red-500 hover:shadow-[inset_1px_1px_10px_rgb(239_68_68)] text-red-500 delay-100 transition-all ease-in flex flex-col items-center justify-center hover:cursor-pointer"
                    onclick="listCustomerDebt()">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-9 h-9">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 3v11.25A2.25 2.25 0 0 0 6 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0 1 18 16.5h-2.25m-7.5 0h7.5m-7.5 0-1 3m8.5-3 1 3m0 0 .5 1.5m-.5-1.5h-9.5m0 0-.5 1.5m.75-9 3-3 2.148 2.148A12.061 12.061 0 0 1 16.5 7.605" />
                    </svg>
                    <span>Expense Amount Today</span>
                    <span>20,000</span>
                </div>
                <div class="w-full h-32 p-4 bg-base-100 border-[1px] border-[#ffffff1a] hover:border-green-primary hover:shadow-[inset_1px_1px_10px_#1db753] text-green-primary delay-100 transition-all ease-in flex flex-col items-center justify-center hover:cursor-pointer"
                    onclick="listMyDebt()">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-9 h-9">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 3v11.25A2.25 2.25 0 0 0 6 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0 1 18 16.5h-2.25m-7.5 0h7.5m-7.5 0-1 3m8.5-3 1 3m0 0 .5 1.5m-.5-1.5h-9.5m0 0-.5 1.5M9 11.25v1.5M12 9v3.75m3-6v6" />
                    </svg>
                    <span>Income Amount Today</span>
                    <span>20,000</span>
                </div>
            </div>
            <form action="" class="flex gap-3 my-4">
                <x-label-input>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-4 h-4 opacity-70">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                    </svg>
                    <input type="text" class="grow" placeholder="Search Name" name="customer-name" />
                </x-label-input>
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
            <div class="overflow-x-auto">
                <table class="table">
                    <!-- head -->
                    <thead>
                        <tr>
                            <th>Amount</th>
                            <th>Name</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Category</th>
                            <th>Note</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- row 1 -->
                        <tr data-href="{{ route('debt') }}" class="hover:cursor-pointer">
                            <td>
                                <span class="text-green-primary">10,000</span>
                            </td>
                            <td>
                                <span>optional</span>
                            </td>
                            <td>
                                <span>2 Juni 2023</span>
                            </td>
                            <td><span>Paid Off</span></td>
                            <td><span>Income</span></td>
                            <td>
                                <span class="line-clamp-2">For living
                                </span>
                            </td>
                            <th>
                                <button class="btn btn-ghost btn-xs">details</button>
                            </th>
                        </tr>
                        <!-- row 2 -->
                        <tr data-href="{{ route('debt') }}" class="hover:cursor-pointer">
                            <td>
                                <span class="text-red-500">10,000</span>
                            </td>
                            <td>
                                <span>optional</span>
                            </td>
                            <td>
                                <span>2 Juni 2023</span>
                            </td>
                            <td><span>Paid Off</span></td>
                            <td><span>Expense</span></td>
                            <td>
                                <span class="line-clamp-2">For living
                                </span>
                            </td>
                            <th>
                                <button class="btn btn-ghost btn-xs">details</button>
                            </th>
                        </tr>
                        <!-- row 3 -->
                        <tr data-href="{{ route('debt') }}" class="hover:cursor-pointer">
                            <td>
                                <span class="text-green-primary">10,000</span>
                            </td>
                            <td>
                                <span>optional</span>
                            </td>
                            <td>
                                <span>2 Juni 2023</span>
                            </td>
                            <td><span>Paid Off</span></td>
                            <td><span>Income</span></td>
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
        </div>

        <input type="radio" name="my_tabs_1" role="tab"
            class="inline-block whitespace-nowrap tab pb-11 pt-7 bg-base-100  hover:cursor-pointer sticky top-16 z-10 mb-9"
            aria-label="Income" />
        <div role="tabpanel" class="tab-content lg:p-10 overflow-x-hidden">
            <div class="overflow-x-auto my-4">
                <table class="table">
                    <!-- head -->
                    <thead>
                        <tr>
                            <th>Amount</th>
                            <th>Name</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Category</th>
                            <th>Note</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- row 1 -->
                        <tr data-href="{{ route('debt') }}" class="hover:cursor-pointer">
                            <td>
                                <span class="text-green-primary">10,000</span>
                            </td>
                            <td>
                                <span>optional</span>
                            </td>
                            <td>
                                <span>2 Juni 2023</span>
                            </td>
                            <td><span>Paid Off</span></td>
                            <td><span>Income</span></td>
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
            <div class="join">
                <button class="join-item btn">«</button>
                <button class="join-item btn">Page 1</button>
                <button class="join-item btn">»</button>
            </div>
        </div>

        <input type="radio" name="my_tabs_1" role="tab"
            class="inline-block whitespace-nowrap tab pb-11 pt-7 bg-base-100  hover:cursor-pointer sticky top-16 z-10 mb-9"
            aria-label="Expense" />
        <div role="tabpanel" class="tab-content lg:p-10 overflow-x-hidden">
            <div class="overflow-x-auto my-4">
                <table class="table">
                    <!-- head -->
                    <thead>
                        <tr>
                            <th>Amount</th>
                            <th>Name</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Category</th>
                            <th>Note</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- row 1 -->
                        <tr data-href="{{ route('debt') }}" class="hover:cursor-pointer">
                            <td>
                                <span class="text-red-500">10,000</span>
                            </td>
                            <td>
                                <span>optional</span>
                            </td>
                            <td>
                                <span>2 Juni 2023</span>
                            </td>
                            <td><span>Paid Off</span></td>
                            <td><span>Expense</span></td>
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
            <div class="join">
                <button class="join-item btn">«</button>
                <button class="join-item btn">Page 1</button>
                <button class="join-item btn">»</button>
            </div>
        </div>
    </div>
</x-layout-dashboard>
