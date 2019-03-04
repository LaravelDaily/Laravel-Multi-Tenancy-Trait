@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.show') }} {{ trans('global.booking.title') }}
                </div>
                <div class="panel-body">

                    <table class="table table-bordered table-striped">
                        <tbody>
                            <tr>
                                <th>
                                    {{ trans('global.booking.fields.first_name') }}
                                </th>
                                <td>
                                    {{ $booking->first_name }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('global.booking.fields.last_name') }}
                                </th>
                                <td>
                                    {{ $booking->last_name }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('global.booking.fields.hotel') }}
                                </th>
                                <td>
                                    {{ $booking->hotel->name }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('global.booking.fields.booking_from') }}
                                </th>
                                <td>
                                    {{ $booking->booking_from }}
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    {{ trans('global.booking.fields.booking_to') }}
                                </th>
                                <td>
                                    {{ $booking->booking_to }}
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