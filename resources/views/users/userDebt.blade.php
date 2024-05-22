<x-layout-dashboard>
    <x-slot:content>{{ $content }}</x-slot:content>
    <div class="flex justify-center">
        <div class="w-[80%]">
            <div class="flex flex-col gap-4">
                <div class="flex flex-col sticky top-4 bg-base-100 z-10">
                    <x-button-back class="w-28" />
                    <span class="pt-7">Total Jujun Debt</span>
                    <div class="flex justify-between">
                        <span class="text-green-primary text-xl">Rp10,000</span>
                        <!-- The button to open modal -->
                        <label for="my_modal_7" class="btn btn-primary w-24 justify-center">Pay Off</label>

                        <!-- Put this part before </body> tag -->
                        <input type="checkbox" id="my_modal_7" class="modal-toggle" />
                        <div class="modal" role="dialog">
                            <div class="modal-box">
                                <x-label-input class="justify-between">
                                    {{-- WORD OF SPAN BASED ON GIVEN OR RECEIVED OF DEBT --}}
                                    <span>Given</span>
                                    <div class="flex items-center gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="w-4 h-4 opacity-70">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z" />
                                        </svg>
                                        {{-- SAMPLE VALUE --}}
                                        <input type="text" class="grow" name="amount" value="Rp10.000" readonly />
                                    </div>
                                </x-label-input>
                                <button type="submit" class="btn btn-primary w-full mt-3">Confirm</button>
                            </div>
                            <label class="modal-backdrop" for="my_modal_7">Close</label>
                        </div>
                    </div>
                </div>
                <table class="table">
                    <!-- head -->
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Received</th>
                            <th>Given</th>
                            <th>Category</th>
                            <th>Note</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- row 1 -->
                        <tr data-href="{{ route('userDebtDetail') }}" class="hover:cursor-pointer">
                            <td>
                                <span class="font-bold">18 Mei 2023</span>
                            </td>
                            <td>
                                <span class="text-green-primary">Rp10,000</span>
                            </td>
                            <td>
                                <span class="text-red-500"></span>
                            </td>
                            <td>
                                <span>Note Here</span>
                            </td>
                            <td>
                                <span>Category Here</span>
                            </td>
                        </tr>
                        <!-- row 2 -->
                        <tr>
                            <td>
                                <span class="font-bold">17 Mei 2023</span>
                            </td>
                            <td>
                                <span class="text-green-primary">Rp10,000</span>
                            </td>
                            <td>
                                <span class="text-red-500"></span>
                            </td>
                            <td>
                                <span>Note Here</span>
                            </td>
                            <td>
                                <span>Category Here</span>
                            </td>
                        </tr>
                        <!-- row 1 -->
                        <tr>
                            <td>
                                <span class="font-bold">18 Mei 2023</span>
                            </td>
                            <td>
                                <span class="text-green-primary">Rp10,000</span>
                            </td>
                            <td>
                                <span class="text-red-500"></span>
                            </td>
                            <td>
                                <span>Note Here</span>
                            </td>
                            <td>
                                <span>Category Here</span>
                            </td>
                        </tr>
                        <!-- row 2 -->
                        <tr>
                            <td>
                                <span class="font-bold">17 Mei 2023</span>
                            </td>
                            <td>
                                <span class="text-green-primary">Rp10,000</span>
                            </td>
                            <td>
                                <span class="text-red-500"></span>
                            </td>
                            <td>
                                <span>Note Here</span>
                            </td>
                            <td>
                                <span>Category Here</span>
                            </td>
                        </tr>
                        <!-- row 2 -->
                        <tr>
                            <td>
                                <span class="font-bold">16 Mei 2023</span>
                            </td>
                            <td>
                                <span class="text-green-primary"></span>
                            </td>
                            <td>
                                <span class="text-red-500">Rp10,000</span>
                            </td>
                            <td>
                                <span>Note Here</span>
                            </td>
                            <td>
                                <span>Category Here</span>
                            </td>
                        </tr>
                        <!-- row 1 -->
                        <tr>
                            <td>
                                <span class="font-bold">18 Mei 2023</span>
                            </td>
                            <td>
                                <span class="text-green-primary">Rp10,000</span>
                            </td>
                            <td>
                                <span class="text-red-500"></span>
                            </td>
                            <td>
                                <span>Note Here</span>
                            </td>
                            <td>
                                <span>Category Here</span>
                            </td>
                        </tr>
                        <!-- row 2 -->
                        <tr>
                            <td>
                                <span class="font-bold">17 Mei 2023</span>
                            </td>
                            <td>
                                <span class="text-green-primary">Rp10,000</span>
                            </td>
                            <td>
                                <span class="text-red-500"></span>
                            </td>
                            <td>
                                <span>Note Here</span>
                            </td>
                            <td>
                                <span>Category Here</span>
                            </td>
                        </tr>
                        <!-- row 2 -->
                        <tr>
                            <td>
                                <span class="font-bold">16 Mei 2023</span>
                            </td>
                            <td>
                                <span class="text-green-primary"></span>
                            </td>
                            <td>
                                <span class="text-red-500">Rp10,000</span>
                            </td>
                            <td>
                                <span>Note Here</span>
                            </td>
                            <td>
                                <span>Category Here</span>
                            </td>
                        </tr>
                        <!-- row 1 -->
                        <tr>
                            <td>
                                <span class="font-bold">18 Mei 2023</span>
                            </td>
                            <td>
                                <span class="text-green-primary">Rp10,000</span>
                            </td>
                            <td>
                                <span class="text-red-500"></span>
                            </td>
                            <td>
                                <span>Note Here</span>
                            </td>
                            <td>
                                <span>Category Here</span>
                            </td>
                        </tr>
                        <!-- row 2 -->
                        <tr>
                            <td>
                                <span class="font-bold">17 Mei 2023</span>
                            </td>
                            <td>
                                <span class="text-green-primary">Rp10,000</span>
                            </td>
                            <td>
                                <span class="text-red-500"></span>
                            </td>
                            <td>
                                <span>Note Here</span>
                            </td>
                            <td>
                                <span>Category Here</span>
                            </td>
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
    </div>
</x-layout-dashboard>
