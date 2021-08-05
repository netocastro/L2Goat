<?php

namespace Source\Models\L2jgs;

use Stonks\DataLayer\DataLayer;

class Heroes extends DataLayer
{

    public function __construct()
    {
        parent::__construct('heroes', [], 'charId', false, 'l2jgs');
    }

    public function charName()
    {
        return (new Characters())->find('charId = :charId', 'charId=' . $this->charId)->fetch()->char_name;
    }

    public function className()
    {
        $class =  explode('_', (new ClassList())->find('id = :id', 'id=' . $this->class_id)->fetch()->class_name);
        return $class[1];
        
    }
}
