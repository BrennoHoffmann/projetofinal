<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemOrder extends Model
{
    protected $table = "itemOrder";
    protected $fillable = ['orders_id','product_id','amount'];
    protected $primaryKey = "id";
    public $timestamps = true;
}
