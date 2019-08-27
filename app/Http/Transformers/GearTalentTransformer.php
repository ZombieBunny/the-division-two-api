<?php
/**
 * Created by PhpStorm.
 * User: lee
 * Date: 2019/04/28
 * Time: 15:35
 */

namespace App\Http\Transformers;

use App\Models\GearTalent;

class GearTalentTransformer
{
    public function transform(GearTalent $item)
    {
        return [
            'name' => $item->name,
            'description' => $item->description,
            'type' => $item->type,
            'typeSlot' => $item->type_slot,
            'statName' => $item->stat_name,
            'value' => $item->value,
            'available' => $item->available,
            'requirements' => $item->requirements,
        ];
    }
}
