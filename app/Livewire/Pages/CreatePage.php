<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use Livewire\Attributes\Validate;


class CreatePage extends Component
{
    #[Validate('required')]
    public $name;

    #[Validate('required')]
    public $description;

    #[Validate('required')]
    public $brand;

    #[Validate('required')]
    public $price;

    #[Validate('required')]
    public $stock;

    public function createProduct(){

    }


    public function render()
    {
        return view('livewire.pages.create-page');
    }
}
