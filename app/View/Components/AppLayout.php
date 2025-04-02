<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AppLayout extends Component
{
    public $layout, $dir, $assets, $modalJs ,$isZuck ,$isSubheader,$bodyClass,$activelink ,$isCountdown;

    public $isMasonry,  $isVectorMap;

    public function __construct($layout = '', $dir=false, $assets = [], $modalJs = false ,$activelink="",$isMasonry = false,$isVectorMap = false,$isZuck=false ,$isSubheader=false,$bodyClass="",$isCountdown=false)
    {
        $this->layout = $layout;
        $this->dir = $dir;
        $this->assets = $assets;
        $this->modalJs = $modalJs;
        $this->isZuck = $isZuck;
        $this->isMasonry = $isMasonry;
        $this->isVectorMap = $isVectorMap;
        $this->isSubheader = $isSubheader;
        $this->bodyClass = $bodyClass;
        $this->activelink = $activelink;
        $this->isCountdown = $isCountdown;


    }

    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        switch($this->layout){

            case 'withoutrightsidebar':
                return view('layouts.withoutrightsidebar');
                break;
            case 'withoutleftsidebar':
                return view('layouts.withoutleftsidebar');
                    break;
            case 'chatlayout':
                return view('layouts.chatlayout');
                break;
            default:
                return view('layouts.dashboard');
            break;

        }
    }
}
