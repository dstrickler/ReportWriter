<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
   public static $tableName = "families";

    protected $fillable = [
        'name',
    ];
}
