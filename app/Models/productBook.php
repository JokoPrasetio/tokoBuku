<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productBook extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'product_book';
    protected $with = ['category'];
    public $timestamps = false;

    public function getRouteKeyName()
    {
        return 'uid';
    }

    public function category()
    {
        return $this->belongsTo(category::class, 'category_uid', 'uid');
    }
}
