<?php

namespace App\View\Components\Contact;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MapComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $mapUrl)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.contact.map-component');
    }
}
