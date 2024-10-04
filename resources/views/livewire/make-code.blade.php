<div class="text-center m-2 pt-2.5 flex flex-col items-center gap-10">
    <h1 class="text-4xl text-lime-100" >Code</h1>

    <div class="flex justify-center">


        <form action=" " class="print:hidden">
        <textarea wire:model.live="message" name="" id="" cols="30" rows="10"
                  class="bg-white/10 text-lime-100 rounded-xl">

        </textarea>
        </form>
    </div>
    <x-encoded-message :message="$message" :letters="$this->letters"/>

    <x-legend :letters="$this->letters"></x-legend>
</div>

