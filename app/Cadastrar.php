<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cadastrar extends Model
{
    protected $table = 'products';
    protected $fillable = ['type_id','name','price','description','image','stock'];
}
