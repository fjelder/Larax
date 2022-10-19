<?php

namespace App\Http\Livewire\Aside;
use App\Models\Contract as Contracts;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
class Contract extends Component
{
    public $search = '';
    public $checkedStage;
    public function mount()
    {
        if (!$this->checkedStage) {
          $this->checkedStage = 1;  
        }
    }
    public function checkCurrentContract($id)
    {
        if(Contracts::where('id', $id)->first())
        {
            return true;
        }
    }
    public function setCurrentContract($id)
    {
        if($this->checkCurrentContract($id))
        {
            $user = Auth::user();
            $user->current_contract = $id;
            if($user->save())
                return redirect()->route('contracts.show', $id);
        }
        else{
            session()->flash('flash.banner', 'Nieprawidłowy numer kontraktu!');
            session()->flash('flash.bannerStyle', 'danger');
            return redirect()->route('contracts.show', Auth::user()->current_contract);
        }
    }
    public function jumpToContract($id)
    {
        $this->setCurrentContract($id);
    }
    public function render()
    {
        $this->activeContract = Contracts::where('id', '=', Auth::user()->current_contract)->first();
        $allContracts = Contracts::where('name', 'like', $this->search.'%')->where('stage_id', $this->checkedStage)->get();
        return view('livewire.aside.contract', [
            'contracts' => $allContracts,
            'active' => $this->activeContract
        ]);
    }
}
