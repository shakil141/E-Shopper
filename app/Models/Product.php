<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'tbl_products';

    protected $primaryKey = 'product_id';

    protected $fillable = [
        'product_name',
        'category_id',
        'menufacture id',
        'product_short_description',
        'product_long_description',
        'product_price',
        'product_size',
        'product_image',
        'product_color',
        'publication_status'
    ];
}
