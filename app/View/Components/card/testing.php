<?php

namespace App\View\Components\card;

use Illuminate\View\Component;

class testing extends Component
{
    
    public $productId;
    public $productName;

    public function __construct($productId, $productName)
    {
        $this->productId = $productId;
        $this->productName = $productName;
    }


    public function render()
    {
        return view('components.card.testing');
    }
}
