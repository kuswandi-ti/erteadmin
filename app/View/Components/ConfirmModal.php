<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ConfirmModal extends Component
{
    public $type;
    public $id;
    public $headerTitle;
    public $body;
    public $confirmId;
    public $confirmText;

    /**
     * Create a new component instance.
     */
    public function __construct($type, $id, $headerTitle, $body, $confirmId, $confirmText)
    {
        $this->type = $type;
        $this->id = $id;
        $this->headerTitle = $headerTitle;
        $this->body = $body;
        $this->confirmId = $confirmId;
        $this->confirmText = $confirmText;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.confirm-modal');
    }
}
