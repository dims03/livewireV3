<div>
    <h1 class="text-white">Tasks</h1>
    <form wire:submit="add">
        <input type="text" class="rounded-2xl mb-2" wire:model="task">
     
        <button class="bg-indigo-500 p-2 text-white">Add Task</button>
    </form>
    <ul>
        @foreach ($tasks as $task)
            <li class="text-white">{{ $task }}</li>
        @endforeach
    </ul>
</div>
