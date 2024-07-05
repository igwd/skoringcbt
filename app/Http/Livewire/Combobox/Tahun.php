<?php

namespace App\Http\Livewire\Combobox;

use Livewire\Component;
use App\Models\TbPendaftaran;
use Illuminate\Support\Facades\Session;

class Tahun extends Component
{
    public $tahunPendaftaran,$tahunPendaftaranSelected;

    public $listener = [];

    public function mount(){
        $this->tahunPendaftaranSelected = @session('tahunPendaftaranSelected');
        $this->tahunPendaftaran = TbPendaftaran::select('Tahun')->distinct()->orderBy('Tahun','desc')->get();
    }

    public function updatedTahunPendaftaranSelected(){
        Session::put('tahunPendaftaranSelected', $this->tahunPendaftaranSelected);
        $this->dispatch('onChangeTahunPendaftaranSelected',$this->tahunPendaftaranSelected);
        $this->dispatch('getComboPeriodePendaftaran',$this->tahunPendaftaranSelected);
    }

    public function render()
    {
        return view('components.livewire.combobox.tahun');
    }
}
