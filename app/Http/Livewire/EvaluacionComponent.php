<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Pregunta;
use App\Models\Respuesta;
use Illuminate\Support\Arr;


class EvaluacionComponent extends Component
{
    public $ordenP, $i, $max, $pregunta, $progreso, $respuestas, $respuestaU, $mensaje;
    // $ordenP => Orden preguntas
    public function mount()
    {
        $this->i = 1;
        $this->max = 10;
        $this->ordenP = $this->unique_list(10);
        $this->respuestaU =[0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        $this->pregunta = Pregunta::find($this->ordenP[$this->i-1]+1);
        $this->respuestas = Respuesta::where('pregunta_id', $this->pregunta->id)->get();

    }

    public function render()
    {
        $this->progreso = intval(($this->i/$this->max)*100);
        return view('livewire.evaluacion-component');
    }

    function unique_list($size=5) {

        function all_unique($numbers) {
            foreach ($numbers as $key=>$value)
                if ($key==$value) return false;
            return true;
        }
        function flip($a, $b, &$numbers) {
            $numbers[$a] = $numbers[$a] + $numbers[$b];
            $numbers[$b] = $numbers[$a] - $numbers[$b];
            $numbers[$a] = $numbers[$a] - $numbers[$b];
        }

        $flip_count = 0;
        $numbers = range(0,$size-1);
        shuffle($numbers);

        while (!all_unique($numbers)) {
            foreach ($numbers as $key=>$value) {
                if ($key==$value) {
                    flip($key, rand(0,$size-1), $numbers);
                    $flip_count++;
                    break;
                }
            }
        }

        printf("Flipped %d values\n", $flip_count);
        return $numbers;
    }

    public function siguiente()
    {
        if($this->i < $this->max){
            $this->i += 1;
        }
        $this->pregunta = Pregunta::find($this->ordenP[$this->i-1]+1);
        $this->respuestas = Respuesta::where('pregunta_id', $this->pregunta->id)->inRandomOrder()->get();
    }

    public function anterior()
    {
        if($this->i > 1){
            $this->i -= 1;
        }
        $this->pregunta = Pregunta::find($this->ordenP[$this->i-1]+1);
        $this->respuestas = Respuesta::where('pregunta_id', $this->pregunta->id)->inRandomOrder()->get();

    }

    public function guardarR($r, $p)
    {
        $this->respuestaU[$p-1] = $r;
        $this->mensaje = null;
    }

    public function finalizar()
    {
        $ban = false;
        foreach ($this->respuestaU as $key => $value) {
            if ($value==0) {
                $ban = true;
            }
        }
        if ($ban) {
            $this->mensaje="Aún tiene preguntas sin responder";
        } else {
            $this->mensaje="OK";
        }

    }
}
