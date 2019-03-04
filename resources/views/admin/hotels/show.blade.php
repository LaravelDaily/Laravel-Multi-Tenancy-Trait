@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.show') }} {{ trans('global.hotel.title') }}
                </div>
                <div class="panel-body">

                    <table class="table table-bordered table-striped">
                        <tbody>
                            <tr>
                                <th>
                                    {{ trans('global.hotel.fields.name') }}
                                </th>
                                <td>
                                    {{ $hotel->name }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('global.hotel.fields.address') }}
                                </th>
                                <td>
                                    {{ $hotel->address }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('global.hotel.fields.country') }}
                                </th>
                                <td>
                                    {{ $hotel->country->name }}
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>

        </div>
    </div>
</div>

@endsection