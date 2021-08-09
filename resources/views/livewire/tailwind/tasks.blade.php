<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body class="bg-gray-100">
    <!-- <div class="font-sans text-gray-900 antialiased">
        <div class="flex fle-col sm:justify-center items-center pt-5 pb-5">
            <h2>title</h2>
            <div class="w-full sm:max-w-2xl mt-6 px-6">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Optins</th>
                        </tr>
                    </thead>
                    <tbody wire:sortable="updateTaskOrder">
                        @foreach ($tasks as $task)
                            <tr wire:sortable.item="{{ $task->id }}" wire:key="task-{{ $task->id }}">
                                <td wire:sortable.handle>{{ $task->title }}</td>
                                <td><button wire:click="removeTask({{ $task->id }})">Remove</button></td>
                            </tr>
                        @endforeach
                    </tbody>  
                </table>
            </div>
        </div>
    </div> -->


        <div class="card-body">
            <table class="table table-hover dataTable table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                    </tr>
                </thead>
                <tbody drag-root wire:sortable="updateOrder">
                    @foreach ($tasks as $task)
                        <tr drag-item draggable="true" wire:sortable.item="{{ $task->id }}" wire:key="task-{{ $task->id }}">
                            <td wire:sortable.handle>{{ $task->title }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
</body>
@livewireScripts
<script src="https://cdn.jsdelivr.net/gh/livewire/sortable@v0.x.x/dist/livewire-sortable.js"></script>
<script>
    let root = document.querySelector('[drag-root]')

    root.querySelectorAll('[drag-item]').forEach(el =>{
        el.addEventListener('dragstart', e => {
            e.target.setAttribute('dragging', true)
        })
        el.addEventListener('dragend', e => {
            e.target.removeAttribute('dragging')
        })
        el.addEventListener('dragenter', e => {
            e.target.classList.add('bg-danger')
            e.preventDefault()
        })
        el.addEventListener('dragover', e => {
            e.preventDefault()
        })
        el.addEventListener('dragleave', e => {
            e.target.classList.remove('bg-danger')
            console.log('leave')
        })
        el.addEventListener('drop', e => {
            e.target.classList.remove('bg-danger')
            let draggingEl = root.querySelector('[dragging]')
            e.target.before(draggingEl)
        })
    })
</script>

</html>