@props([
    'message',
    /** @var \App\Livewire\MakeCode */
    'letters'
])

<div {{ $attributes->class(['text-lime-100 text-center flex flex-wrap gap-5 !text-4xl']) }}>
    @foreach(explode(' ', $message) as $word)

        <div class="flex">
            @foreach( str_split($word) as $char)
                <div class="flex-col gap-3 p-1">


                    <span class="material-symbols-outlined text-lime-100">
                            {{ $letters[strtolower($char)] ?? $char  }}
                    </span>
                    <div class="bg-gray-200 w-12 h-12">

                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
</div>
