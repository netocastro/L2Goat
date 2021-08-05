<?php

namespace Source\Models\L2jgs;

use Stonks\DataLayer\DataLayer;

class Itens extends DataLayer
{
    public function __construct()
    {
        parent::__construct('items', [], 'object_id', false, 'l2jgs');
    }

    public function itemIcon()
    {
        return (new ItemIcons())->find('item_id = :item_id', 'item_id=' . $this->item_id)->fetch();
    }

    public function itemName()
    {
        return (new IdNomeItensCustom())->find('item_id = :item_id', 'item_id=' . $this->item_id)->fetch();
    }
}
