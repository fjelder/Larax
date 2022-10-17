<?php

namespace App\Http\Livewire\Aside;
use App\Models\Contract as Contracts;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class Contract extends Component
{
    protected object $contracts;
    public $search = '';
    public $activeContract;
    
    public function mount(Request $request)
    {
        $this->activeContract = Str::after($request->path(), 'contracts/');
    }
    
    public function render()
    {
        $this->contracts = Contracts::where('name', 'like', $this->search.'%')->get();
        return view('livewire.aside.contract', [
            'contracts' => $this->contracts,
            'active' => $this->activeContract
        ]);
    }
}
