<?php

namespace Source\Models\L2jgs;

use Stonks\DataLayer\DataLayer;

class CharacterSubclasses extends DataLayer{

    public function __construct(){
        
        parent::__construct('character_subclasses',['class_id'],'char_id', false,'l2jgs');
    }
}




