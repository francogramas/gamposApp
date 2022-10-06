<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Material;

class MaterialEstudioComponent extends Component
{
    public $materiali, $i, $max, $progreso;

    public function mount()
    {
        $this->i = 1;
        $this->max = Material::all()->count();
    }

    public function render()
    {
        $this->materiali = Material::find($this->i);
        $this->progreso = intval(($this->i/$this->max)*100);
        return view('livewire.material-estudio-component');
    }

    public function siguiente()
    {
        if($this->i < $this->max){
            $this->i += 1;
        }
    }

    public function anterior()
    {
        if($this->i > 1){
            $this->i -= 1;
        }
    }
}
