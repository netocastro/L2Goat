<?php

namespace Source\Models\L2jls;

use Stonks\DataLayer\DataLayer;

class Accounts extends DataLayer{

    public function __construct(){
        
        parent::__construct('accounts',[],'login', false,'l2jls');
    }
}




