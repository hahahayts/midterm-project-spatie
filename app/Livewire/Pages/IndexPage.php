<?php

namespace App\Livewire\Pages;

use App\Models\Products;
use Livewire\Component;

class IndexPage extends Component
{
    public function render()
    {
        return view('livewire.pages.index-page',['products' => Products::orderBy('name')->get() ]);
    }
}
