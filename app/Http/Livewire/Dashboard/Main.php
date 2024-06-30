<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use App\Models\TbPendaftaran;
use Illuminate\Support\Facades\Session;

class Main extends Component
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
        //update select 2
        $this->dispatch("updatedTahunPendaftaranSelected",['values'=>$this->periodePendaftaran,'periodePendaftaranSelected'=>$this->periodePendaftaranSelected]);
        //update chart
        $this->dispatch('loadChart',['tahunPendaftaranSelected'=>$this->tahunPendaftaranSelected,'periodePendaftaranSelected'=>$this->periodePendaftaranSelected]);
        $this->setSessionValue('tahunPendaftaranSelected',$this->tahunPendaftaranSelected);
    }

    public function updatedPeriodePendaftaranSelected(){
        $this->setSessionValue('periodePendaftaranSelected',$this->periodePendaftaranSelected);
        $this->dispatch('loadChart',['tahunPendaftaranSelected'=>$this->tahunPendaftaranSelected,'periodePendaftaranSelected'=>$this->periodePendaftaranSelected]);
        //update chart
        $this->dispatch('loadChart',['tahunPendaftaranSelected'=>$this->tahunPendaftaranSelected,'periodePendaftaranSelected'=>$this->periodePendaftaranSelected]);
    }

    public function setSessionValue($key,$value){
        Session::put($key, $value);
    }

    public function render()
    {
        return view('components.livewire.dashboard.main');
    }
}
