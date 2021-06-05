<?php

namespace App\Http\Livewire;
use App\Models\Category;

use Livewire\Component;

class NavigationBottom extends Component
{
    public function render()
    {
        $categories = Category::all();

        return view('livewire.navigation-bottom', compact('categories'));
    }
}
