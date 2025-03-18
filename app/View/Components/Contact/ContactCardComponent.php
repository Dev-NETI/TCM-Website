<?php

namespace App\View\Components\contact;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ContactCardComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public $company = null,
        public $contact = null,
        public $email = null,
        public $workingHours = null,
        public $websiteUrl = null,
        public $links = [],
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.contact.contact-card-component');
    }
}
