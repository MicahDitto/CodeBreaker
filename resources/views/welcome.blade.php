<x-layout>

    <section class="px-6 py-4 bg-gray-900 h-full">
        <div class="container mx-auto">
            <header class="flex items-center space-x-4">
                <img src="{{ asset('images/kev.png') }}" alt="Kev Image"
                     style="width: 60px; height: 60px; border-radius: 50%;">
                <span class="text-lime-100 text-3xl font-bold material-symbols-outlined">
                    Chevron_leftKEVChevron_right decipher
                </span>
            </header>
        </div>
    </section>

    <section>
        <livewire:counter></livewire:counter>
    </section>

    <section>
        <livewire:make-code></livewire:make-code>
    </section>

</x-layout>


