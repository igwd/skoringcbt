<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Alert extends Component
{
    public $type;
    public $message;
    public $title;
    public $position;
    public $visible = false;

    protected $listeners = ['show-alert'=>'showAlert'];

    public function showAlert($type, $title, $message, $position="bottom-right")
    {
        $this->type = $type;
        $this->title = $title;
        $this->message = $message;
        $this->visible = true;
        $this->position = $position;

        $this->dispatch('alert-displayed');

        // Auto-hide the alert after 3 seconds
        $this->dispatch('auto-hide-alert',['duration'=>3000]);
    }

    public function hideAlert(){
        $this->visible = false;
    }

    public function render()
    {
        return view('components.livewire.alert');
    }
}
