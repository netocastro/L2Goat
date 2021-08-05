<?php

namespace Source\Models\L2jgs;

use Stonks\DataLayer\DataLayer;

class IdNomeBossCustom  extends DataLayer{
    
    public function __construct()
    {
        parent::__construct("id_nome_boss_custom",[],"boss_id",false,'l2jgs');
    }

    

}
