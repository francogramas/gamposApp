<div class="card bg-base-100 shadow-xl max-w-3xl">
    <div class="card-body">
        <h2 class="card-title">TEST REBA</h2>
        <h3>{{$mensaje}}</h3>
        <div class="card-actions justify-end">
            <button class="btn btn-primary" wire:click="anterior();">Anterior</button>
            <button class="btn btn-primary" wire:click="siguiente();">Siguiente</button>
            @if ($i==$max)
                <button class="btn btn-primary" wire:click="finalizar();">Evaluar</button>
            @endif
        </div>
        <div>

        </div>
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
