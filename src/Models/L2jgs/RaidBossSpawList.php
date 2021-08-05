<?php

namespace Source\Models\L2jgs;

use Stonks\DataLayer\DataLayer;

class RaidBossSpawList extends DataLayer{

    public function __construct(){
        
        parent::__construct('raidboss_spawnlist',[],'boss_id', false,'l2jgs');
    }

    public function bossName()
    {
        return (new IdNomeBossCustom())->find('boss_id = :boss_id', 'boss_id=' . $this->boss_id)->fetch()->boss_name;
    }

    public function getLevel(){
        return (new Npc())->find("id = :bossid", "bossid={$this->boss_id}")->fetch()->level;
    }
}





