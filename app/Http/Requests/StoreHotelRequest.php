<?php

namespace App\Http\Requests;

use App\Hotel;
use Illuminate\Foundation\Http\FormRequest;

class StoreHotelRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('hotel_create');
    }

    public function rules()
    {
        return [
        ];
    }
}
