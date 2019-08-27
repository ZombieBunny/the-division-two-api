<?php
/**
 * Created by PhpStorm.
 * User: lee
 * Date: 2019/04/22
 * Time: 22:18
 */

namespace App\Models;


use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;

class BrandSet extends Model
{
    use Uuids;

    protected $fillable = [
        'name',
    ];

    public function setBonus()
    {
        return $this->hasMany(SetBonus::class, 'brand_set_name', 'name');
    }
}
