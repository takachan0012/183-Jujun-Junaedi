<x-layout-dashboard>
    <x-slot:content>{{ $content }}</x-slot:content>
    <div class="z-10 fixed top-0 w-full p-4 bg-base-100 h-28">
        <h2 class="text-2xl">Debt</h2>
    </div>
    <div role="tablist" class="tabs tabs-bordered">
        <input type="radio" name="my_tabs_1" role="tab"
            class="tab pb-11 hover:cursor-pointer sticky top-16 z-10 bg-base-100 mb-9" aria-label="Overview" checked />
        <div role="tabpanel" class="tab-content p-10 overflow-x-auto">
            <div class="flex gap-2 my-4">
                <div
                    class="w-1/4 h-32 p-4 bg-base-100 border-[1px] border-[#ffffff1a] hover:border-green-primary hover:shadow-[inset_1px_1px_10px_#1db753] text-green-primary delay-100 transition-all ease-in flex flex-col items-center justify-center hover:cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-9 h-9">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                    <span>Create Debt</span>
                </div>
                <div class="w-1/4 h-32 p-4 bg-base-100 border-[1px] border-[#ffffff1a] hover:border-red-500 hover:shadow-[inset_1px_1px_10px_rgb(239_68_68)] text-red-500 delay-100 transition-all ease-in flex flex-col items-center justify-center hover:cursor-pointer"
                    onclick="listCustomerDebt()">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-9 h-9">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 3v11.25A2.25 2.25 0 0 0 6 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0 1 18 16.5h-2.25m-7.5 0h7.5m-7.5 0-1 3m8.5-3 1 3m0 0 .5 1.5m-.5-1.5h-9.5m0 0-.5 1.5m.75-9 3-3 2.148 2.148A12.061 12.061 0 0 1 16.5 7.605" />
                    </svg>
                    <span>Customer Debt Amount</span>
                    <span>20,000</span>
                </div>
                <div class="w-1/4 h-32 p-4 bg-base-100 border-[1px] border-[#ffffff1a] hover:border-green-primary hover:shadow-[inset_1px_1px_10px_#1db753] text-green-primary delay-100 transition-all ease-in flex flex-col items-center justify-center hover:cursor-pointer"
                    onclick="listMyDebt()">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-9 h-9">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 3v11.25A2.25 2.25 0 0 0 6 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0 1 18 16.5h-2.25m-7.5 0h7.5m-7.5 0-1 3m8.5-3 1 3m0 0 .5 1.5m-.5-1.5h-9.5m0 0-.5 1.5M9 11.25v1.5M12 9v3.75m3-6v6" />
                    </svg>
                    <span>My Debt Amount</span>
                    <span>20,000</span>
                </div>
            </div>
            <table class="table">
                <!-- head -->
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Amount</th>
                        <th>Due Date</th>
                        <th>Status</th>
                        <th>Category</th>
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
                        <td><span>Debt</span></td>
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

        <input type="radio" name="my_tabs_1" role="tab"
            class="tab pb-11 hover:cursor-pointer sticky top-16 z-10 bg-base-100 mb-9" aria-label="My Debt" />
        <div role="tabpanel" class="tab-content p-10 overflow-x-auto">
            <table class="table">
                <!-- head -->
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Amount</th>
                        <th>Due Date</th>
                        <th>Status</th>
                        <th>Category</th>
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
                    <!-- row 2 -->
                    <tr data-href="{{ route('debt') }}" class="hover:cursor-pointer">
                        <td>
                            <div class="flex items-center gap-3">
                                <div>
                                    <div class="font-bold">Tachibana</div>
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
                        <td><span>Debt</span></td>
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
            <div class="join">
                <button class="join-item btn">«</button>
                <button class="join-item btn">Page 1</button>
                <button class="join-item btn">»</button>
            </div>
        </div>

        <input type="radio" name="my_tabs_1" role="tab"
            class="tab pb-11 hover:cursor-pointer sticky top-16 z-10 bg-base-100 mb-9" aria-label="Customer Debt" />
        <div role="tabpanel" class="tab-content p-10 overflow-x-auto">
            <table class="table">
                <!-- head -->
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Amount</th>
                        <th>Due Date</th>
                        <th>Status</th>
                        <th>Category</th>
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
                            <span class="text-red-500">10,000</span>
                            <br />
                            <span class="text-xs">Customer Debt</span>
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
                    <!-- row 2 -->
                    <tr data-href="{{ route('debt') }}" class="hover:cursor-pointer">
                        <td>
                            <div class="flex items-center gap-3">
                                <div>
                                    <div class="font-bold">Tachibana</div>
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
                    <tr>
                        <td>
                            <div class="flex items-center gap-3">
                                <div>
                                    <div class="font-bold">Eren Yeager</div>
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
                        <td><span>Debt</span></td>
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
            <div class="join">
                <button class="join-item btn">«</button>
                <button class="join-item btn">Page 1</button>
                <button class="join-item btn">»</button>
            </div>
        </div>
    </div>
</x-layout-dashboard>
