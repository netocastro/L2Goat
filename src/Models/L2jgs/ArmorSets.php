<?php

namespace Source\Models\L2jgs;

use Stonks\DataLayer\DataLayer;

class ArmorSets extends DataLayer 
{
    public function __construct()
    {
        parent::__construct('armorsets',['chest'],false,'l2jgs');
        
    }
    // --------------- essa classe esta tipada por causa do metodo save ------------
    public function save(): bool{
        $armorsets = (new ArmorSets())->find('chest=:chest','chest=23')->fetch();
        var_dump($armorsets->chest);

        if(!$armorsets->chest){
          return  parent::save();

        }else{
            return false;
        }
        
       /* foreach ($armorsets as $key => $value) {
            if($key->chest)
        }*/


    }
}
