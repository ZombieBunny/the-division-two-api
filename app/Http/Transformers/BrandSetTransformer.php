<?php
/**
 * Created by PhpStorm.
 * User: lee
 * Date: 2019/04/26
 * Time: 16:58
 */

namespace App\Http\Transformers;


use App\Models\BrandSet;
use League\Fractal\TransformerAbstract;

class BrandSetTransformer extends TransformerAbstract
{
    public function transform(BrandSet $item)
    {
        return [
            'name' => $item->name,
            'bonuses' => $item->setBonus,
        ];
    }
}
