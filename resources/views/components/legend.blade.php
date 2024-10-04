@props(['letters'])
<div class="flex  mb-6">

    @foreach ($letters as $letter => $symbol)
        <div class="flex flex-wrap flex-col border border-lime-100/50 p-2">
            <span>{{ $letter }}</span>

            <span class="material-symbols-outlined text-lime-100">
           {{ $symbol }}
        </span>
        </div>

    @endforeach
</div>
