<div>
    <h1 class="text-white pt-8 flex items-center justify-center  mb-2 text-4xl">Tasks</h1>
    <div class="flex items-center justify-center">
        <div class="mr-4 mb-4">
            <label for="title" class="block mb-2 text-sm font-medium text-white">Title</label>
            <input wire:model.live="form.title" type="text" class="bg-white rounded-md border-2 border-slate-300 w-96"
                id="title">
        </div>
    </div>
    <div class="flex items-center justify-center">
        <div class="mr-4 mb-4">
            <label for="slug" class="block mb-2 text-sm font-medium text-white">Slug</label>
            <input wire:model.live="form.slug" type="text" class="bg-white rounded-md border-2 border-slate-300 w-96"
                id="slug">
        </div>
    </div>
    <div class="flex items-center justify-center">
        <div class="mr-4 mb-4">
            <label for="description" class="block mb-2 text-sm font-medium text-white">Description</label>
            <input wire:model.live="form.description" type="text"
                class="bg-white rounded-md border-2 border-slate-300 w-96 h-28" id="description">
        </div>
    </div>
    <div class="flex items-center justify-center">
        <div class="mr-4 mb-4">
            <label for="country" class="block mb-2 text-sm font-medium text-white">Country</label>
            <select wire:model.live="form.country" class="bg-white rounded-md border-2 border-slate-300">
                <option value="USA">United States</option>
                <option value="CAN">Canada</option>
            </select>
        </div>
    </div>

</div>
