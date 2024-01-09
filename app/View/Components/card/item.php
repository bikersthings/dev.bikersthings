<?php

namespace App\View\Components\card;

use Illuminate\View\Component;


class item extends Component
{
    public $itemPhotos;
    public $itemTypeID;
    public $itemTypeName;
    public $userStatusID;
    public $itemStatusID;
    public $itemName;
    public $itemPrice;
    public $itemPricePointed;
    public $userCityName;
    

    public function __construct($itemPhotos, $itemTypeID, $itemTypeName, $userStatusID, $itemStatusID, $itemName, $itemPrice, $itemPricePointed, $userCityName)
    {
        $this->itemPhotos = $itemPhotos;
        $this->itemTypeID = $itemTypeID;
        $this->itemTypeName = $itemTypeName;
        $this->userStatusID = $userStatusID;
        $this->itemStatusID = $itemStatusID;
        $this->itemName = $itemName;
        $this->itemPrice = $itemPrice;
        $this->itemPricePointed = $itemPricePointed;
        $this->userCityName = $userCityName;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card.item');
    }
}
