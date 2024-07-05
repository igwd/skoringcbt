<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use App\Models\TbPendaftaran;
use Illuminate\Support\Facades\Session;

class Main extends Component
{
    public $tahunPendaftaran,$tahunPendaftaranSelected;
    public $periodePendaftaran, $periodePendaftaranSelected;

    public $listeners = [
        'onChangeTahunPendaftaranSelected'=>'updatedTahunPendaftaranSelected'
    ];

    public function mount(){
        $this->tahunPendaftaranSelected = @session('tahunPendaftaranSelected');
        $this->periodePendaftaranSelected = @session('periodePendaftaranSelected');
        $this->tahunPendaftaran = TbPendaftaran::select('Tahun')->distinct()->orderBy('Tahun','desc')->get();
        $this->periodePendaftaran = TbPendaftaran::where('Tahun',$this->tahunPendaftaranSelected)->orderBy('DariTgl','desc')->get();
    }

    public function updatedTahunPendaftaranSelected(){
        //dd('dashboard main : tahun pendaftaran updated');
    }

    public function render()
    {
        return view('components.livewire.dashboard.main');
    }
}
