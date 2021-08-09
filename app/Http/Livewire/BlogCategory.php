<?php

namespace App\Http\Livewire;
namespace App\Models\BlogCategory;
use Illuminate\Support\Facades\Route;

use Livewire\Component;

class BlogCategory extends Component
{
    public function render()
    {
        $blogCategories = BlogCategory::all();
        return view('livewire.blog-category', compact('blogCategories'));
    }
}
