<x-layout-dashboard>
    <x-slot:content>{{ $content }}</x-slot:content>
    <div class="z-10 sticky top-4 bg-base-100 border-[1px] border-[#ffffff1a] rounded-md p-2 mb-7">
        <h2 class="text-2xl">Debt</h2>
    </div>
    <div role="tablist" class="tabs tabs-bordered">
        <input type="radio" name="my_tabs_1" role="tab" class="tab pb-11" aria-label="Overview" checked />
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

        <input type="radio" name="my_tabs_1" role="tab" class="tab pb-11" aria-label="My Debt" />
        {{-- <div role="tabpanel" class="tab-content p-10">Tab content 2</div> --}}
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
            <div class="w-[20%] join grid grid-cols-2 my-4">
                <button class="join-item btn btn-outline p-0 text-xs">Previous page</button>
                <button class="join-item btn btn-outline p-0 text-xs">Next</button>
            </div>
        </div>

        <input type="radio" name="my_tabs_1" role="tab" class="tab pb-11" aria-label="Customer Debt" />
        {{-- <div role="tabpanel" class="tab-content p-10">Tab content 3</div> --}}
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
            <div class="w-[20%] join grid grid-cols-2 my-4">
                <button class="join-item btn btn-outline p-0 text-xs">Previous page</button>
                <button class="join-item btn btn-outline p-0 text-xs">Next</button>
            </div>
        </div>
    </div>
</x-layout-dashboard>
