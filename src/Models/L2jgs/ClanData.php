<?php

namespace Source\Models\L2jgs;

use Stonks\DataLayer\DataLayer;

class ClanData extends DataLayer{

    public function __construct(){
        
        parent::__construct('clan_data',[],'clan_id', false,'l2jgs');
    }

    public function nameLeader()
    {
        return (new Characters())->find('charId = :charId', 'charId=' . $this->leader_id)->fetch()->char_name;
    }

}





