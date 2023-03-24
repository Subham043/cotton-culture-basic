<?php

namespace App\Modules\Products\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use App\Enums\PublishStatusEnum;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
        'catalogue',
        'publish_status',
        'category_id',
    ];

    protected $attributes = [
        'publish_status' => 1,
    ];

    protected $appends = ['publish_status_type'];

    protected function publishStatusType(): Attribute
    {
        return new Attribute(
            get: fn () => PublishStatusEnum::getValue($this->publish_status),
        );
    }

    public function Category()
    {
        return $this->belongsTo('App\Modules\Categories\Models\Category', 'category_id')->withDefault();
    }

    public function ProductImage()
    {
        return $this->hasMany('App\Modules\Products\Models\ProductImage', 'product_id');
    }
}
