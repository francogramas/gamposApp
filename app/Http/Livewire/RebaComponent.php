<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\RebaPregunta;
use App\Models\RebaRespuesta;


class RebaComponent extends Component
{
    public $ordenP, $i, $max, $pregunta, $progreso, $respuestas, $respuestaU, $mensaje;

    public function mount()
    {
        $this->pregunta = RebaPregunta::all();
        $this->respuesta = RebaRespuesta::where('pregunta_id', $this->pregunta->first()->id)->get();
        $this->i = 1;
        $this->max = $this->pregunta->count();
    }

    public function render()
    {
        return view('livewire.reba-component');
    }

    public function anterior()
    {

    }

    public function siguiente()
    {

    }
}
