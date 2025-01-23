<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
       "article",
       "name",
       "status",
        "data"
    ];

    public function tasks(){
        return $this->hasMany(Product::class,'taskbox_id','id');
    }
}
