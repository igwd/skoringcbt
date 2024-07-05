<?php

namespace App\Http\Livewire\Combobox;

use Livewire\Component;
use App\Models\TbPendaftaran;
use Illuminate\Support\Facades\Session;

class Periode extends Component
{
    public $tahunPendaftaranSelected,$periodePendaftaran,$periodePendaftaranSelected;

    public $listeners = [
        'getComboPeriodePendaftaran'=>'getComboPeriodePendaftaran'
    ];

    public function mount(){
        $this->tahunPendaftaranSelected = @session('tahunPendaftaranSelected');
        $this->periodePendaftaranSelected = @session('periodePendaftaranSelected');
        $this->periodePendaftaran = TbPendaftaran::where('Tahun',$this->tahunPendaftaranSelected)->orderBy('DariTgl','desc')->get();
    }

    public function getComboPeriodePendaftaran($tahunPendaftaranSelected){
        $this->periodePendaftaranSelected = @session('periodePendaftaranSelected');
        $this->periodePendaftaran = TbPendaftaran::where('Tahun',$tahunPendaftaranSelected)->orderBy('DariTgl','desc')->get();

        // tell js to handle update list combo periode
        $this->dispatch('updateComboboxPeriode',['options'=>$this->periodePendaftaran,'selected'=>$this->periodePendaftaranSelected]);
    }

    public function updatedPeriodePendaftaranSelected(){
        //set session value
        Session::put('periodePendaftaranSelected', $this->periodePendaftaranSelected);
        $this->dispatch('onChangePeriodePendaftaranSelected',$this->periodePendaftaranSelected);
    }

    public function render()
    {
        return view('components.livewire.combobox.periode');
    }
}
