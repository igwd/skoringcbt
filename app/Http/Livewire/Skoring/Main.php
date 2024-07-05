<?php

namespace App\Http\Livewire\Skoring;

use Livewire\Component;
use App\Models\TbPendaftaran;

class Main extends Component
{
    public $tahunPendaftaran,$tahunPendaftaranSelected;
    public $periodePendaftaran,$periodePendaftaranSelected;
    
    public function mount(){
        $this->tahunPendaftaranSelected = @session('tahunPendaftaranSelected');
        $this->periodePendaftaranSelected = @session('periodePendaftaranSelected');
        $this->tahunPendaftaran = TbPendaftaran::select('Tahun')->distinct()->orderBy('Tahun','desc')->get();
        $this->periodePendaftaran = TbPendaftaran::where('Tahun',$this->tahunPendaftaranSelected)->orderBy('DariTgl','desc')->get();
    }

    public function render()
    {
        return view('components.livewire.skoring.main');
    }
}
