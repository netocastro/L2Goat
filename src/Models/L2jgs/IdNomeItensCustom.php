<?php

namespace Source\Models\L2jgs;

use Stonks\DataLayer\DataLayer;

class IdNomeItensCustom extends DataLayer{

    public function __construct(){
        
        parent::__construct('id_nome_item_custom',[],'item_id', false,'l2jgs');

    }
}













