<?php

namespace App\Http\Requests\Shop;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Shop;

class UpdateShopRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        $shopId = $this->route('shop')->id;
        $shop = Shop::find($shopId);
        return $shop->merchant_id === auth()->id();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'address' => 'sometimes|string',
            'schedule' => 'sometimes|string',
            'latitude' => 'sometimes',
            'longitude' => 'sometimes',
        ];
    }
}
