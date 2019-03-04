<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Validation\Rule;
use App\Traits\Multitenantable;

class Booking extends Model
{
    use SoftDeletes, Multitenantable;

    protected $dates = [
        'created_at',
        'booking_to',
        'updated_at',
        'deleted_at',
        'booking_from',
    ];

    protected $fillable = [
        'hotel_id',
        'last_name',
        'first_name',
        'booking_to',
        'created_at',
        'updated_at',
        'deleted_at',
        'booking_from',
        'created_by_user_id',
    ];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class, 'hotel_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'created_by_user_id');
    }

    public function getBookingFromAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setBookingFromAttribute($value)
    {
        $this->attributes['booking_from'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }

    public function getBookingToAttribute($value)
    {
        return $value ? Carbon::parse($value)->format(config('panel.date_format')) : null;
    }

    public function setBookingToAttribute($value)
    {
        $this->attributes['booking_to'] = $value ? Carbon::createFromFormat(config('panel.date_format'), $value)->format('Y-m-d') : null;
    }
}
