<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Button extends Component
{
    public string $type;
    public string $text;
    public ?string $onclick;
    public string $color;

    public function __construct(string $type, string $text, ?string $onclick = null, string $color = 'green')
    {
        $this->type = $type;
        $this->text = $text;
        $this->onclick = $onclick;
        $this->color = $color;
    }

    public function render(): View|Closure|string
    {
        return view('shared.form.button');
    }
}
