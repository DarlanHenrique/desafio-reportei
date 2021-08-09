<ul wire:sortable="updateTaskOrder">
    @foreach ($blogCategories as $blogCategory)
        <li wire:sortable.item="{{ $blogCategory->id }}" wire:key="blogCategory-{{ $blogCategory->id }}">
            <h4 wire:sortable.handle>{{ $blogCategory->name }}</h4>
            <button wire:click="removeTask({{ $blogCategory->id }})">Remove</button>
        </li>
    @endforeach
</ul>