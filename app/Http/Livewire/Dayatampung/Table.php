<?php

namespace App\Http\Livewire\Dayatampung;

use Livewire\Component;

class Table extends Component
{
    public $dataDayaTampung;

    protected $listeners = [
        'loadTable'=>'loadTable',
    ];

    public function loadTable(){
        $this->dataDayaTampung = [];
    }

    public function render()
    {
        return view('components.livewire.dayatampung.table');
    }
}
