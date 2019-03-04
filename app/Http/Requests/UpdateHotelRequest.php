<?php

namespace App\Http\Requests;

use App\Hotel;
use Illuminate\Foundation\Http\FormRequest;

class UpdateHotelRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('hotel_edit');
    }

    public function rules()
    {
        return [
        ];
    }
}
