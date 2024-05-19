<x-layout-dashboard>
    <x-slot:content>{{ $content }}</x-slot:content>
    <div class="h-screen flex justify-center items-center">
        <form action="">
            <x-button class="btn btn-primary">Back</x-button>
            <h2 class="text-2xl">Create Debt</h2>
            <div class="form-control">
                <label class="label cursor-pointer">
                    <span class="label-text">Red pill</span>
                    <input type="radio" name="radio-10" class="radio checked:bg-red-500" checked />
                </label>
            </div>
            <div class="form-control">
                <label class="label cursor-pointer">
                    <span class="label-text">Blue pill</span>
                    <input type="radio" name="radio-10" class="radio checked:bg-blue-500" checked />
                </label>
            </div>
        </form>
    </div>
</x-layout-dashboard>
