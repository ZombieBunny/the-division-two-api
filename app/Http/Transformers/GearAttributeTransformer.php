<?php
/**
 * Created by PhpStorm.
 * User: lee
 * Date: 2019/04/28
 * Time: 15:38
 */

namespace App\Http\Transformers;

use App\Models\GearAttribute;

class GearAttributeTransformer
{
    public function transform(GearAttribute $item)
    {
        return [
            'name' => $item->name,
            'type' => $item->type,
            'available' => $item->available,
        ];
    }
}
