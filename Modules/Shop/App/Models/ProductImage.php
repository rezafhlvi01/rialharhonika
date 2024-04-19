<?php

namespace Modules\Shop\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Shop\Database\factories\ProductImageFactory;

use App\Traits\UuidTrait;

class ProductImage extends Model
{
    use HasFactory, UuidTrait;

    protected $table = 'shop_product_images';

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'product_id',
        'name',
    ];
    
    protected static function newFactory(): ProductImageFactory
    {
        return \Modules\Shop\Database\factories\ProductImageFactory::new();
    }
}
