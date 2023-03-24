<?php

namespace App\Modules\Products\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class ProductImage extends Model
{
    use HasFactory;

    protected $table = 'product_images';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'image',
        'product_id',
    ];

    protected $appends = ['image_link'];

    protected function imageLink(): Attribute
    {
        return new Attribute(
            get: fn () => asset('storage/upload/products/image/'.$this->image),
        );
    }

    public function Product()
    {
        return $this->belongsTo('App\Modules\Products\Models\Product', 'product_id')->withDefault();
    }
}
