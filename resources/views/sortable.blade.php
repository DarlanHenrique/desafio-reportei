<x-app-layout>
    <x-slot name="header">
        @include('site.includes.header')
    </x-slot>

    <div class="container">
        <table>
            <tbody wire:sortable="updateTaskOrder">
                @forelse ($tasks as $task)
                    <tr wire:sortable.item="{{ $task->id }}" wire:key="task-{{ $task->id }}">
                        <td wire:sortable.handle>{{ $task->title }}</td>
                        <td><a class="btn btn-danger" wire:click="removeTask({{ $task->id }})">Remove</a></td>
                    </tr>
                @endforeach
            </tbody>  
        </table>
    </div>

    <x-slot name="footer">
        @include('site.includes.footer')
    </x-slot>
</x-app-layout>