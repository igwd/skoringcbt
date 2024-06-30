<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use App\Models\TbPendaftaran;
use Illuminate\Support\Facades\Session;

class Dashboard extends Component
{
    public $tahunPendaftaran,$tahunPendaftaranSelected;
    public $periodePendaftaran, $periodePendaftaranSelected;

    public function mount(){
        $this->tahunPendaftaranSelected = @session('tahunPendaftaranSelected');
        $this->periodePendaftaranSelected = @session('periodePendaftaranSelected');
        $this->tahunPendaftaran = TbPendaftaran::select('Tahun')->distinct()->orderBy('Tahun','desc')->get();
        $this->periodePendaftaran = TbPendaftaran::where('Tahun',$this->tahunPendaftaranSelected)->orderBy('DariTgl','desc')->get();
    }

    public function updatedTahunPendaftaranSelected(){
        $this->periodePendaftaran = TbPendaftaran::where('Tahun',$this->tahunPendaftaranSelected)->orderBy('DariTgl','desc')->get();
        $this->dispatch('loadChart',['tahunPendaftaran'=>$this->tahunPendaftaranSelected,'periodePendaftaran'=>$this->periodePendaftaranSelected]);
        $this->setSessionValue('periodePendaftaranSelected',$this->tahunPendaftaranSelected);
    }

    public function updatedPeriodePendaftaranSelected(){
        $this->dispatch('loadChart',['tahunPendaftaran'=>$this->tahunPendaftaranSelected,'periodePendaftaran'=>$this->periodePendaftaranSelected]);
        $this->setSessionValue('periodePendaftaranSelected',$this->periodePendaftaranSelected);
    }

    public function setSessionValue($key,$value){
        Session::put($key, $value);
    }

    public function render()
    {
        return view('components.livewire.dashboard.dashboard');
    }
}
