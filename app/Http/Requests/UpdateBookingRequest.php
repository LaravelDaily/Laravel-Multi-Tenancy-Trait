<?php

namespace App\Http\Requests;

use App\Booking;
use Illuminate\Foundation\Http\FormRequest;

class UpdateBookingRequest extends FormRequest
{
    public function authorize()
    {
        return \Gate::allows('booking_edit');
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
