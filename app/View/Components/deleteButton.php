<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class deleteButton extends Component
{
    public $postId;
    public $message;

    public function __construct($postId, $message)
    {
        $this->postId = $postId;
        $this->$message = $message;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.delete-button');
    }
}
