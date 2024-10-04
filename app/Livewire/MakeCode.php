<?php

namespace App\Livewire;

use Livewire\Attributes\Computed;
use Livewire\Component;

class MakeCode extends Component
{

    public string $message = '';
    public function render()
    {
        return view('livewire.make-code');
    }

    public function mapLetters() {

    }

    public array $symbols = [
            'eco',
            'bolt',
            'add',
            'heart_broken',
            'rocket_launch',
            'grade',
            'public',
            'face',
            'skull',
            'home',
            'mode_cool',
            'bedroom_baby',
            'flatware',
            'skillet',
            'stadia_controller',
            'close',
            'heat',
            'air_freshener',
            'token',
            'quiet_time',
            'umbrella',
            'power',
            'box',
            'rainy_light',
            'code',
            'book',
        ];

    #[Computed(persist: true)]
    public function letters(): array {
        $letters = range('a', 'z');

        shuffle($this->symbols);

        return collect($letters)
            ->combine($this->symbols)
            ->toArray();
    }

}
