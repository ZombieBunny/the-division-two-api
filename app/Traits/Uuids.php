<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

trait Uuids
{
    /**
     * Boot function from laravel.
     * Determines if ID field is empty, if empty generate UUID for the new entry
     */
    protected static function boot()
    {
        parent::boot();

        self::creating(function (Model $model) {
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = (string)Uuid::uuid1();
            }
        });
    }
}
