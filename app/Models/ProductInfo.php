<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductInfo extends Model
{
    protected $table = "product_infos";
    protected $primaryKey = 'id';
    protected $guarded = [];
}
