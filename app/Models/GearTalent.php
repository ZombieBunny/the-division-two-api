<?php
/**
 * Created by PhpStorm.
 * User: lee
 * Date: 2019/04/28
 * Time: 15:19
 */

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;


class GearTalent extends Model
{
    use Uuids;

    protected $fillable = [
        'name',
        'description',
        'type',
        'type_slot',
        'stat_name',
        'value',
        'available',
        'requirements'
    ];
}
