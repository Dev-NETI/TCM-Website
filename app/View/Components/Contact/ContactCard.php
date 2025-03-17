<?php

namespace App\View\Components\Contact;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ContactCard extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(public string $company, public string $contact, public string $email, public string $workingHours)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.contact.contact-card');
    }
}
