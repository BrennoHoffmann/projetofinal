<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";
    protected $fillable = ['type_id','name','price','description','image'];
    protected $primaryKey = "id";
    public $timestamps = false;
}
