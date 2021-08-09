<div>
    <tbody wire:sortable="updateOrder">
        @forelse ($tasks as $task)
            <tr wire:sortable.item="{{ $task->id }}" wire:key="task-{{ $task->id }}">
                <td wire:sortable.handle>{{ $task->id }}</td>
                <td wire:sortable.handle>{{ $task->title }}</td>
                <td><button class="btn btn-outline-danger" wire:click="removeTask({{ $task->id }})">Remove</button></td>
            </tr>
        @endforeach
    </tbody>
</div>
