<x-layout-dashboard>
    <x-slot:content>{{ $content }}</x-slot:content>
    <div class="h-screen flex justify-center items-center flex-col">
        <x-toastify title="Created Successfully" />
        <div>
            <x-button-back />
            <form action="{{ route('createDebtPost') }}" id="form" method="post">
                @csrf
                <h2 class="text-2xl text-center">Create Debt</h2>
                <div class="flex flex-col gap-4">
                    <div class="flex gap-3">
                        <div class="form-control p-4">
                            <label class="label cursor-pointer flex gap-2">
                                <span class="label-text">Give to</span>
                                <input type="radio" name="transaction" value="give-to"
                                    class="radio checked:bg-red-500" checked />
                            </label>
                        </div>
                        <div class="form-control p-4">
                            <label class="label cursor-pointer flex gap-2">
                                <span class="label-text">Receive from</span>
                                <input type="radio" name="transaction" value="receive-from"
                                    class="radio checked:bg-green-primary" checked />
                            </label>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row gap-4">
                        <x-label-input>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-4 h-4 opacity-70">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                            </svg>
                            <input type="text" class="grow" placeholder="Customer Name" name="customer-name"
                                required />
                        </x-label-input>
                        <x-label-input>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-4 h-4 opacity-70">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z" />
                            </svg>
                            <input type="text" class="grow" placeholder="Amount" id="currencyInput" name="amount"
                                required />
                        </x-label-input>
                    </div>
                    <textarea type="text" class="textarea resize-none input-bordered" placeholder="Note" name="note"></textarea>
                    <x-label-input>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-4 h-4 opacity-70">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z" />
                        </svg>
                        <input type="date" class="grow" placeholder="Date" name="date" id="dateInput" />
                    </x-label-input>
                    <button type="submit" id="submitButton" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</x-layout-dashboard>
