<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Validation\Rule;
use App\Traits\Multitenantable;

class Hotel extends Model
{
    use SoftDeletes, Multitenantable;

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'address',
        'country_id',
        'created_at',
        'updated_at',
        'deleted_at',
        'created_by_user_id',
    ];

    public function country()
    {
        return $this->belongsTo(Country::class, 'country_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'created_by_user_id');
    }

}
