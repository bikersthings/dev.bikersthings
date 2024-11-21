<?php

namespace App\View\Components\card;

use Illuminate\View\Component;

class ice_box extends Component
{
    public $ibPhotos;
    public $ibName;
    public $ibLeft;
    public $ibICprice;
    public $ibExpDate;
    public $ibISexpired;
    public $ibPercentage;
    public $ibCode;

    public function __construct($ibPhotos, $ibName, $ibLeft, $ibICprice, $ibExpDate, $ibISexpired, $ibPercentage, $ibCode)
    {
        $this->ibPhotos = $ibPhotos;
        $this->ibName = $ibName;
        $this->ibLeft = $ibLeft;
        $this->ibICprice = $ibICprice;
        $this->ibExpDate = $ibExpDate;
        $this->ibISexpired = $ibISexpired;
        $this->ibPercentage = $ibPercentage;
        $this->ibCode = $ibCode;
        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card.ice_box');
    }
}
