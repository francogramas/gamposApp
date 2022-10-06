<div class="grid h-screen place-items-center">
    <div class="card bg-base-100 shadow-xl max-w-3xl">
        <div class="card-body">
            <h2 class="card-title">Evaluación</h2>

            <h3>{{$mensaje}}</h3>
            <div class="card-actions justify-end">
                <button class="btn btn-primary" wire:click="anterior();">Anterior</button>
                <button class="btn btn-primary" wire:click="siguiente();">Siguiente</button>
                @if ($i==$max)
                <button class="btn btn-primary" wire:click="finalizar();">Evaluar</button>
            @endif
            </div>
            <div class="radial-progress bg-primary text-primary-content border-4 border-primary" style="--value:{{$progreso}};">{{$progreso}}%</div>
            <p class="text-lg font-semibold">
                {{$pregunta->pregunta}}
            </p>
            <p>
                <ul class="list-none">
                @foreach ($respuestas as $r)
                    <li wire:click="guardarR({{$r->id}},{{$pregunta->id}})" class="px-2 py-1 rounded-md my-2 border border-2 border-dashed border-green-500 cursor-pointer hover:bg-green-200 @if ($r->id==$respuestaU[$pregunta->id-1]) bg-green-100 @endif">{{$r->respuesta}}
                        <img src="{{$r->imagen}}" alt="" width="120">
                    </li>
                @endforeach
                </ul>
            </p>
        </div>
        <div class="card-footer grid grid-cols-2">
            <div class="p-6  dark:border-gray-700">
                <img src="/src/logoSena.png" width="240" alt="">
            </div>
            <div class="p-6  dark:border-gray-700 md:border-t-0 md:border-l">
                <img src="/src/gamposs.jpg" width="200" alt="">
            </div>
        </div>
      </div>
</div>
