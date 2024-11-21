<?php

namespace App\View\Components\modal;

use Illuminate\View\Component;

class ice_box extends Component
{
    public $ibPhotos;
    public $ibName;
    public $ibICprice;
    public $ibCode;

    public function __construct($ibPhotos, $ibName, $ibICprice, $ibCode)
    {
        $this->ibPhotos = $ibPhotos;
        $this->ibName = $ibName;
        $this->ibICprice = $ibICprice;
        $this->ibCode = $ibCode;
        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.modal.ice_box');
    }
}
