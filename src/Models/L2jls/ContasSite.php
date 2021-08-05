<?php

namespace Source\Models\L2jls;

use Stonks\DataLayer\DataLayer;

class ContasSite extends DataLayer{

    public function __construct(){
        
        parent::__construct('contas_site',['senha','login_site'],'email', false,'l2jls');
    }
    

}




