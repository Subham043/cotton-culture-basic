<?php

namespace App\Modules\Categories\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use App\Enums\PublishStatusEnum;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'publish_status',
    ];

    protected $attributes = [
        'publish_status' => 1,
    ];

    protected $appends = ['publish_status_type'];

    protected function publishStatusType(): Attribute
    {
        return new Attribute(
            get: fn () => PublishStatusEnum::getValue($this->userType),
        );
    }

    public function Products()
    {
        return $this->hasMany('App\Modules\Products\Models\Product', 'product_id');
    }
}
