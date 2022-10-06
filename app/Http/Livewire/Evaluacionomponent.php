<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Arr;

class Evaluacionomponent extends Component
{
    public $ordenP;
    // $ordenP => Orden preguntas
    public function mount()
    {
        $array = [1, 2, 3, 4, 5];
        $random = Arr::random($array);
        dd($random);

    }

    public function render()
    {
        return view('livewire.evaluacionomponent');
    }
}
