<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

class Chart extends Component
{
    protected $listeners = [
        'loadChart'=>'loadChart',
    ];

    public function mount(){

    }

    public function loadChart($tahunPendaftaran=null,$periodePendaftaran=null){
        dd($tahunPendaftaran,$periodePendaftaran);
    }

    public function render()
    {
        return view('components.livewire.dashboard.chart');
    }
}
