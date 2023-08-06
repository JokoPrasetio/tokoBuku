<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class accessLevel extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'access_level';
    public $timestamps = false;
    public function getRouteKeyName()
    {
        return 'uid';
    }
}
