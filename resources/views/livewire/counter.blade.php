<div class="text-center m-2 pt-2.5">
    <h1 class="text-4xl text-lime-100">Counter Test</h1>
    <button class="mt-8 bg-lime-700 py-0.5 px-2 text-white rounded-3xl" wire:click="increment">
        +
    </button>

    <H1 class="text-lime-100"> {{ $count }} </H1>

    <button class="bg-red-600 py-0.5 px-2 rounded-3xl text-white " wire:click="decrement">
        -
    </button>
</div>


