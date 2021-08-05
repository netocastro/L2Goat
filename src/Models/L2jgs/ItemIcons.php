<?php

namespace Source\Models\L2jgs;

use Stonks\DataLayer\DataLayer;

class ItemIcons extends DataLayer{

    public function __construct(){
        
        parent::__construct('item_icons',[],'item_id', false,'l2jgs');

    }
}













