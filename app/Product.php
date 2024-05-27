<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $table= 'products';
        protected $fillable=[
    'product_name',
    'quantity',
    'price_per_item',
    'total_value_number',
    'sum',
    'xml_data', 
    
        ];

}
