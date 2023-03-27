<?php

namespace App\Imports;
namespace App\Modules\Products\Imports;

use App\Enums\PublishStatusEnum;
use App\Modules\Products\Models\Product;
use App\Modules\Categories\Models\Category;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Carbon\Carbon;

class ProductImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return User|null
     */
    public function model(array $row)
    {
        return new Product([
           'name'     => $row['product_name'],
           'description'    => $row['product_description'],
           'category_id' => Category::firstOrCreate([
                'name' => $row['product_category']
            ])->id,
           'publish_status'    => PublishStatusEnum::ACTIVE->label(),
           'updated_at' => Carbon::now(),
           'created_at' => Carbon::now(),
        ]);
    }
}
