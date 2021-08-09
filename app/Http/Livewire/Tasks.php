<?php

namespace App\Http\Livewire;

use App\Models\Task;
use Livewire\Component;

class Tasks extends Component
{
    public $designTemplate = 'tailwind';

    public function render()
    {
        return view('livewire.'.$this->designTemplate.'.tasks', [
            'tasks' => Task::orderBy('position')->get()
        ]);
    }

    public function updateOrder($list)
    {
        foreach($list as $item){
            Task::find($item['value']->update(['position' => $item['order']]));
        }
    }
}


    