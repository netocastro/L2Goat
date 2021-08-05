<?php

namespace Source\Models\L2jgs;

use Stonks\DataLayer\DataLayer;

class ClassList extends DataLayer{

    public function __construct(){
        
        parent::__construct('class_list', ['class_name','parent_id'],'id', false, 'l2jgs');

    }
}













