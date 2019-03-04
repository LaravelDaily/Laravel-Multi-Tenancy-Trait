<?php

namespace App\Http\Requests;

use App\Booking;
use Illuminate\Foundation\Http\FormRequest;

class StoreBookingRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('booking_create');
    }

    public function rules()
    {
        return [
            'booking_from' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'booking_to'   => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
        ];
    }
}
