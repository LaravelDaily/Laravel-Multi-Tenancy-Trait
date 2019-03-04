@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.create') }} {{ trans('global.booking.title_singular') }}
                </div>
                <div class="panel-body">

                    <form action="{{ route("admin.bookings.store") }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group {{ $errors->has('first_name') ? 'has-error' : '' }}">
                            <label for="first_name">{{ trans('global.booking.fields.first_name') }}</label>
                            <input type="text" id="first_name" name="first_name" class="form-control" value="{{ old('first_name', isset($booking) ? $booking->first_name : '') }}">
                            @if($errors->has('first_name'))
                                <p class="help-block">
                                    {{ $errors->first('first_name') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('global.booking.fields.first_name_helper') }}
                            </p>
                        </div>
                        <div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
                            <label for="last_name">{{ trans('global.booking.fields.last_name') }}</label>
                            <input type="text" id="last_name" name="last_name" class="form-control" value="{{ old('last_name', isset($booking) ? $booking->last_name : '') }}">
                            @if($errors->has('last_name'))
                                <p class="help-block">
                                    {{ $errors->first('last_name') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('global.booking.fields.last_name_helper') }}
                            </p>
                        </div>
                        <div class="form-group {{ $errors->has('hotel_id') ? 'has-error' : '' }}">
                            <label for="hotel">{{ trans('global.booking.fields.hotel') }}</label>
                            <select name="hotel_id" id="hotel" class="form-control select2">
                                @foreach($hotels as $id => $hotel)
                                    <option value="{{ $id }}" {{ (isset($booking) && $booking->hotel ? $booking->hotel->id : old('hotel_id')) == $id ? 'selected' : '' }}>
                                        {{ $hotel }}
                                    </option>
                                @endforeach
                            </select>
                            @if($errors->has('hotel_id'))
                                <p class="help-block">
                                    {{ $errors->first('hotel_id') }}
                                </p>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('booking_from') ? 'has-error' : '' }}">
                            <label for="booking_from">{{ trans('global.booking.fields.booking_from') }}</label>
                            <input type="text" id="booking_from" name="booking_from" class="form-control date" value="{{ old('booking_from', isset($booking) ? $booking->booking_from : '') }}">
                            @if($errors->has('booking_from'))
                                <p class="help-block">
                                    {{ $errors->first('booking_from') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('global.booking.fields.booking_from_helper') }}
                            </p>
                        </div>
                        <div class="form-group {{ $errors->has('booking_to') ? 'has-error' : '' }}">
                            <label for="booking_to">{{ trans('global.booking.fields.booking_to') }}</label>
                            <input type="text" id="booking_to" name="booking_to" class="form-control date" value="{{ old('booking_to', isset($booking) ? $booking->booking_to : '') }}">
                            @if($errors->has('booking_to'))
                                <p class="help-block">
                                    {{ $errors->first('booking_to') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('global.booking.fields.booking_to_helper') }}
                            </p>
                        </div>
                        <div>
                            <input class=" btn btn-danger" type="submit">
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

@endsection