<?php
/**
 * Created by PhpStorm.
 * User: lee
 * Date: 2019/04/24
 * Time: 22:21
 */

namespace App\Http\Transformers;

use App\Models\Gear;
use League\Fractal\TransformerAbstract;

class GearTransformer extends TransformerAbstract
{
    public function transform(Gear $item)
    {
        return [
            'name' => $item->name,
            'brand' => $item->brand_set_name,
            'slot' => $item->slot_name,
            'attributes' => json_decode($item->attributes),
            'talents' => json_decode($item->talents),
            'modSlots' => json_decode($item->mod_slots),
            'setBonus' => $item->setBonus
        ];
    }
}


//'name',
//'brand_set_name',
//'attributes',
//'talents',
//'mod_slots',
//'slot_name'
