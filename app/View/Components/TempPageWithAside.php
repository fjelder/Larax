<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TempPageWithAside extends Component
{
    public $header;
    public $aside;
    public $content;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
        $this->header = 'Hello Word';
        $this->aside = 'Sidebar';
        $this->content = 'Lorem ipsum';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('templates.page-with-aside');
    }
}
