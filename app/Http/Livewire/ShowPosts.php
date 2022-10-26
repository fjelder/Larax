<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowPosts extends Component
{
    public function render()
    {
        return <<<'blade'
            <div>
            <button class="h-full border-r mr-4 pr-4 group" @click="openAsideMenu = !openAsideMenu"
            wire:click="$emitTo('aside.contract', 'visibleAsideMenu')">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-auto rotate-180" fill="#000000" viewBox="0 0 256 256">
                <rect width="256" height="256" fill="none"></rect>
                <path d="M128,44h76a8,8,0,0,1,8,8V204a8,8,0,0,1-8,8H128Z" class="opacity-30 group-hover:opacity-60">
                </path>
                <rect x="44" y="44" width="168" height="168" rx="8" fill="none"
                    stroke="#000000" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></rect>
                <line x1="128" y1="44" x2="128" y2="212" fill="none" stroke="#000000"
                    stroke-linecap="round" stroke-linejoin="round" stroke-width="16"></line>
            </svg>
        </button>
            </div>
        blade;
    }
}
