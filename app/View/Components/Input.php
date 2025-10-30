<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Input extends Component
{
    public ?bool $required;
    public string $name;
    public ?string $type, $placeholder;

    public function __construct(string $name, ?bool $required = false, ?string $type = 'text', ?string $placeholder = null)
    {
        $this->name = $name;
        $this->required = $required;
        $this->type = $type;
        $this->placeholder = $placeholder;
    }

    public function render(): View|Closure|string
    {
        return view('shared.form.input');
    }
}
