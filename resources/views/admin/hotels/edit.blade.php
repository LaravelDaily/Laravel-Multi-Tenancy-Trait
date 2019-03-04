@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.edit') }} {{ trans('global.hotel.title_singular') }}
                </div>
                <div class="panel-body">

                    <form action="{{ route("admin.hotels.update", [$hotel->id]) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                            <label for="name">{{ trans('global.hotel.fields.name') }}</label>
                            <input type="text" id="name" name="name" class="form-control" value="{{ old('name', isset($hotel) ? $hotel->name : '') }}">
                            @if($errors->has('name'))
                                <p class="help-block">
                                    {{ $errors->first('name') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('global.hotel.fields.name_helper') }}
                            </p>
                        </div>
                        <div class="form-group {{ $errors->has('address') ? 'has-error' : '' }}">
                            <label for="address">{{ trans('global.hotel.fields.address') }}</label>
                            <input type="text" id="address" name="address" class="form-control" value="{{ old('address', isset($hotel) ? $hotel->address : '') }}">
                            @if($errors->has('address'))
                                <p class="help-block">
                                    {{ $errors->first('address') }}
                                </p>
                            @endif
                            <p class="helper-block">
                                {{ trans('global.hotel.fields.address_helper') }}
                            </p>
                        </div>
                        <div class="form-group {{ $errors->has('country_id') ? 'has-error' : '' }}">
                            <label for="country">{{ trans('global.hotel.fields.country') }}</label>
                            <select name="country_id" id="country" class="form-control select2">
                                @foreach($countries as $id => $country)
                                    <option value="{{ $id }}" {{ (isset($hotel) && $hotel->country ? $hotel->country->id : old('country_id')) == $id ? 'selected' : '' }}>
                                        {{ $country }}
                                    </option>
                                @endforeach
                            </select>
                            @if($errors->has('country_id'))
                                <p class="help-block">
                                    {{ $errors->first('country_id') }}
                                </p>
                            @endif
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