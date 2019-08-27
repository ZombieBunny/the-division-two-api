<?php
/**
 * Created by PhpStorm.
 * User: lee
 * Date: 2019/04/28
 * Time: 15:21
 */

namespace App\Models;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;

class GearAttribute extends Model
{
    use Uuids;

    protected $fillable = [
        'name',
        'type',
        'available',
    ];
}
