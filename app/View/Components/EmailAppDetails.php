<?php

namespace App\View\Components;

use Illuminate\View\Component;

class EmailAppDetails extends Component
{
    public $class,$databstoggle,$databsplacement,$title,$id,$role;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($class='',$role='',$databstoggle='',$href='',$id='')
    {
        $this-> class=$class;
        $this-> role=$role;
        $this-> databstoggle=$databstoggle;
        $this-> href=$href;
        $this-> id=$id;


        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.email-app-details');
    }
}
