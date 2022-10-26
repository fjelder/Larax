<?php

namespace App\Http\Livewire\Aside;

use App\Helpers\UserHelper;
use App\Models\Contract as Contracts;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Contract extends Component
{
    protected $listeners = ['visibleAsideMenu'];
    public $search = '';
    public $userSet;
    public $checkedStage;
    public $sort = "desc";

    public function mount()
    {
        $this->userSet = UserHelper::sets();
        $this->checkedStage = $this->userSet->contract_filter_stage_id;
        $this->sort = $this->userSet->contract_sort_list;
    }
    public function saveNewStage()
    {
        UserHelper::saveFilterStageContract($this->userSet, $this->checkedStage);
    }
    public function saveCurrentContract($contract_id)
    {
        if (UserHelper::saveCurrentContract($this->userSet, $contract_id)) {
            return redirect()->route('contracts.show', $this->userSet->contract_current_id);
        }

    }
    public function switchSort($type)
    {
        $this->sort = $type;
        $this->userSet->contract_sort_list = $type;
        $this->userSet->save();
    }
    public function visibleAsideMenu($stay)
    {
        $this->userSet->open_aside_menu = $stay;
        $this->userSet->save();
    }
    public function checkCurrentContract($id)
    {
        if (Contracts::where('id', $id)->first()) {
            return true;
        }
    }
    public function setCurrentContract($id)
    {
        if ($this->checkCurrentContract($id)) {
            $this->userSet->contract_current_id = $id;
            $this->userSet->save();
            session()->flash('flash.banner', 'Aktualny kontrak został zmieniony!');
            session()->flash('flash.bannerStyle', 'success');
            return redirect()->route('contracts.show', $id);
        } else {
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
        $allContracts = Contracts::where('name', 'like', '%' . $this->search . '%')
            ->where('stage_id', $this->checkedStage)
            ->orderBy('id', $this->sort)
            ->get();
        return view('livewire.aside.contract', [
            'contracts' => $allContracts,
            'active' => $activeContract,
        ]);
    }
}
