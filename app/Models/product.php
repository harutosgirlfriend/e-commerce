<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'product';
      public $incrementing = false;
    protected $keyType = 'string';
    protected $primaryKey = 'kode_product';
     public $timestamps = false; 
}
