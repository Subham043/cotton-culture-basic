<?php

namespace App\Modules\Products\Requests;

use App\Enums\PublishStatusEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Stevebauman\Purify\Facades\Purify;


class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:500',
            'description' => 'required|string',
            'category_id' => 'required|integer|exists:App\Modules\Categories\Models\Category,id',
            'catalogue' => 'nullable|mimes:pdf',
            'publish_status' => 'nullable',
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array<string, string>
     */
    public function attributes(): array
    {
        return [
            'name' => 'Product Name',
            'address' => 'Product Address',
            'catalogue' => 'Product Catalogue',
            'category_id' => 'Product Category',
        ];
    }

    /**
     * Handle a passed validation attempt.
     *
     * @return void
     */
    protected function passedValidation()
    {
        $request = $this->validated();
        $request['publish_status'] = empty($request['publish_status']) ? PublishStatusEnum::DRAFT->label() : ($request['publish_status'] == "on" ? PublishStatusEnum::ACTIVE->label() : PublishStatusEnum::DRAFT->label());
        $this->replace(Purify::clean($request));
    }
}
