<?php

namespace Source\Models\L2jgs;

use Stonks\DataLayer\DataLayer;

class Characters extends DataLayer{

    public function __construct(){
        parent::__construct('characters',['char_name'], 'charId', false, 'l2jgs');
    }

    public function className()
    {
        $class =  explode('_', (new ClassList())->find('id = :id', 'id=' . $this->base_class)->fetch()->class_name);
        return $class[1];
        
    }

    public function clanName()
    {
        return (new ClanData())->find('clan_id = :clan_id', 'clan_id=' . $this->clanid)->fetch();
    }

    public function items()
    {
        return (new Itens())->find('owner_id = :owner_id', 'owner_id=' . $this->charId)->fetch(true);
    }

}





