<x-layout-dashboard>
    {{-- <x-slot:content>{{ $content }}</x-slot:content> --}}
    <div class="z-10 fixed top-0 w-full py-4 bg-base-100 h-16">
        <h2 class="text-2xl">Hello, {{ session()->get('name') }}</h2>
    </div>
    <section class="mt-16 flex flex-col gap-2 md:flex-row md:justify-around my-4">
        <a href="{{ route('debt') }}" class="w-full md:w-1/2">
            <div
                class="p-4 bg-base-100 border-[1px] border-[#ffffff1a] hover:border-green-primary hover:shadow-[inset_1px_1px_10px_#1db753] hover:text-green-primary delay-100 transition-all ease-in flex flex-col items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-11 h-11 lg:w-24 lg:h-24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                </svg>
                <span>
                    Create Debt
                </span>
            </div>
        </a>
        <a href="{{ route('transaction') }}" class="w-full md:w-1/2">
            <div
                class="p-4 bg-base-100 border-[1px] border-[#ffffff1a] hover:border-green-primary hover:shadow-[inset_1px_1px_10px_#1db753] hover:text-green-primary delay-100 transition-all ease-in flex flex-col items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-11 h-11 lg:w-24 lg:h-24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19.5 12c0-1.232-.046-2.453-.138-3.662a4.006 4.006 0 0 0-3.7-3.7 48.678 48.678 0 0 0-7.324 0 4.006 4.006 0 0 0-3.7 3.7c-.017.22-.032.441-.046.662M19.5 12l3-3m-3 3-3-3m-12 3c0 1.232.046 2.453.138 3.662a4.006 4.006 0 0 0 3.7 3.7 48.656 48.656 0 0 0 7.324 0 4.006 4.006 0 0 0 3.7-3.7c.017-.22.032-.441.046-.662M4.5 12l3 3m-3-3-3 3" />
                </svg>
                <span>
                    Create Transaction
                </span>
            </div>
        </a>
    </section>
    <section>
        <div class="flex items-center mb-7 gap-11">
            <h3 class="text-xl">Current Debt</h3>
            <a href="{{ route('debt') }}" class="text-green-primary hover:underline">View All</a>
        </div>
        <div class="overflow-x-auto">
            <table class="table">
                <!-- head -->
                <thead>
                    <tr>
                        <th>Amount</th>
                        <th>Name</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <!-- row 1 -->
                    @foreach ($debts as $debt)
                        <tr data-href="{{ route('userDebt') }}" class="hover:cursor-pointer">
                            <td>
                                <span
                                    class="{{ $debt['status'] == 'Debt' ? 'text-red-500' : 'text-green-primary' }}">10,000</span>
                                <br />
                                <span
                                    class="text-xs">{{ $debt['status'] == 'Debt' ? 'My Debt' : 'Customer Debt' }}</span>
                            </td>
                            <td>
                                <div class="flex items-center gap-3">
                                    <div>
                                        <div class="font-bold">{{ $debt['customer_name'] }}</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span>{{ $debt['created_at'] }}</span>
                            </td>
                            <td>
                                <span class="line-clamp-2">{{ $debt['status'] }}
                                </span>
                            </td>
                            <td>
                                <a href="{{ route('userDebtDetail') }}" class="btn btn-ghost btn-xs">detailsTest</a>
                            </td>
                        </tr>
                    @endforeach
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
                        <th>Amount</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th>Category</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <!-- row 1 -->
                    @foreach ($transactions as $transaction)
                        <tr data-href="{{ route('userDebt') }}" class="hover:cursor-pointer">
                            <td>
                                <span
                                    class="{{ $transaction['status'] == 'Debt' || $transaction['category'] == 'Expense' ? 'text-red-500' : 'text-green-primary' }}">{{ 'Rp ' . number_format($transaction['amount'], 0, ',', '.') }}</span>
                            </td>
                            <td>
                                <span>{{ $transaction['created_at'] }}</span>
                            </td>
                            <td>
                                <span class="line-clamp-2">
                                    {{ $transaction['status'] }}
                                </span>
                            </td>
                            <td>
                                <span class="line-clamp-2">
                                    {{ $transaction['category'] }}
                                </span>
                            </td>
                            <td>
                                <a href="{{ route('userDebtDetail') }}" class="btn btn-ghost btn-xs">detailsTest</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <!-- foot -->
            </table>
        </div>
    </section>
</x-layout-dashboard>
