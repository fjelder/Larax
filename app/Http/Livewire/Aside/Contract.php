<?php

namespace App\Http\Livewire\Aside;
use App\Models\Contract as Contracts;
use App\Models\UserSettings;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Helpers\UserHelper;
class Contract extends Component
{
    public $search = '';
    public $userSet;
    public $checkedStage;
    public function mount()
    {
        $this->userSet = UserHelper::sets();
        $this->checkedStage = $this->userSet->contract_filter_stage_id;
        // $this->checkUserSettings();
    }
    public function saveNewStage()
    {
       UserHelper::saveFilterStageContract($this->userSet, $this->checkedStage);
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
        $activeContract = Contracts::where('id', '=', $this->userSet->contract_current_id)->first();
        $allContracts = Contracts::where('name', 'like', $this->search.'%')->where('stage_id', $this->checkedStage)->get();
        return view('livewire.aside.contract', [
            'contracts' => $allContracts,
            'active' => $activeContract
        ]);
    }
}
