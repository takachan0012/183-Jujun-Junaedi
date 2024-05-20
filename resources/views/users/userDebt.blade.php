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
                        <x-button class="btn btn-primary w-24 justify-center">Lunaskan</x-button>
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
