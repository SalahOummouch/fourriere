<?php

namespace App\View\Components;

use Illuminate\View\Component;

class profileheader extends Component
{
    public $pageImage,$pagetitle;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($pageImage='', $pagetitle='')
    {
        $this->pageImage=$pageImage;
        $this->pagetitle=$pagetitle;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.profileheader');
    }
}
