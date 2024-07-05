<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;

class Chart extends Component
{
    public $loading = true;

    protected $listeners = [
        'loadChart'=>'loadChart',
        'onChangeTahunPendaftaranSelected'=>'loadChart',
        'onChangePeriodePendaftaranSelected'=>'loadChart'
    ];

    public function mount(){
        $this->loading = false;
    }

    public function loadChart(){
        $this->loading = true;
        $tahunPendaftaranSelected = @session('tahunPendaftaranSelected');
        $periodePendaftaranSelected = @session('periodePendaftaranSelected');
        //sleep(15);
        $this->loading = false;
    }

    public function render()
    {
        return view('components.livewire.dashboard.chart');
    }
}
