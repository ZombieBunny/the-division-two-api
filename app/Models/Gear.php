<?php
/**
 * Created by PhpStorm.
 * User: lee
 * Date: 2019/04/23
 * Time: 22:29
 */

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;

class Gear extends Model
{

    use Uuids;

    protected $table = 'gear';

    protected $fillable = [
        'name',
        'brand_set_name',
        'attributes',
        'talents',
        'mod_slots',
        'slot_name'
    ];

    public function setBonus()
    {
        return $this->hasMany(SetBonus::class, 'brand_set_name', 'brand_set_name');
    }
}
