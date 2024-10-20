<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Family extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'families';

    protected $fillable = [
        'name',
        'summer_address_1',
        'summer_address_2',
        'summer_address_city',
        'summer_address_region',
        'summer_address_postal_code',
        'winter_address_1',
        'winter_address_2',
        'winter_address_city',
        'winter_address_region',
        'winter_address_postal_code',
    ];

    protected $hidden = [
        //
    ];

    protected function casts(): array
    {
        return [
            'name' => 'string',
        ];
    }
}
