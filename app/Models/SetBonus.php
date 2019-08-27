<?php
/**
 * Created by PhpStorm.
 * User: lee
 * Date: 2019/04/23
 * Time: 18:50
 */

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;

class SetBonus extends Model
{
    use Uuids;

    protected $fillable = [
        'name',
        'sequence',
        'brand_set_name',
        'value',
        'stat_name'
    ];


}
