<?php

namespace App\Http\Livewire\Aside;
use App\Models\Contract as Contracts;
use Livewire\Component;
class Contract extends Component
{
    protected object $contracts;
    public $search = '';
    
    public function mount()
    {
    }
    
    public function render()
    {
        $this->contracts = Contracts::where('name', 'like', $this->search.'%')->get();
        return view('livewire.aside.contract', [
            'contracts' => $this->contracts
        ]);
    }
}
