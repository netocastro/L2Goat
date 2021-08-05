<?php

namespace Source\Models\L2jgs;

use Stonks\DataLayer\DataLayer;

class Npc extends DataLayer
{
    public function __construct()
    {
        parent::__construct('npc', ['idTemplate','name','serverSideName','title','serverSideTitle','sex','str','con','dex','int','wit','men','exp','sp','atkspd', 'critical', 'aggro', 'matkspd','rhand', 'lhand', 'enchant', 'walkspd', 'runspd', 'targetable', 'show_name', 'dropHerbGroup', 'basestats'], 'id', false, 'l2jgs');
    }

}

