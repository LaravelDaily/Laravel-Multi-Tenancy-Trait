@extends('layouts.admin')
@section('content')
<div class="content">
    @can('booking_create')
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route("admin.bookings.create") }}">
                    {{ trans('global.add') }} {{ trans('global.booking.title_singular') }}
                </a>
            </div>
        </div>
    @endcan
    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.booking.title_singular') }} {{ trans('global.list') }}
                </div>
                <div class="panel-body">

                    <div class="table-responsive">
                        <table class=" table table-bordered table-striped datatable">
                            <thead>
                                <tr>
                                    <th>
                                        {{ trans('global.booking.fields.first_name') }}
                                    </th>
                                    <th>
                                        {{ trans('global.booking.fields.last_name') }}
                                    </th>
                                    <th>
                                        {{ trans('global.booking.fields.hotel') }}
                                    </th>
                                    <th>
                                        {{ trans('global.booking.fields.booking_from') }}
                                    </th>
                                    <th>
                                        {{ trans('global.booking.fields.booking_to') }}
                                    </th>
                                    <th>
                                        &nbsp;
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($bookings as $key => $booking)
                                    <tr>
                                        <td>
                                            {{ $booking->first_name ?? '' }}
                                        </td>
                                        <td>
                                            {{ $booking->last_name ?? '' }}
                                        </td>
                                        <td>
                                            {{ $booking->hotel->name ?? '' }}
                                        </td>
                                        <td>
                                            {{ $booking->booking_from ?? '' }}
                                        </td>
                                        <td>
                                            {{ $booking->booking_to ?? '' }}
                                        </td>
                                        <td>
                                            @can('booking_show')
                                                <a class="btn btn-xs btn-primary" href="{{ route('admin.bookings.show', $booking->id) }}">
                                                    {{ trans('global.view') }}
                                                </a>
                                            @endcan
                                            @can('booking_edit')
                                                <a class="btn btn-xs btn-info" href="{{ route('admin.bookings.edit', $booking->id) }}">
                                                    {{ trans('global.edit') }}
                                                </a>
                                            @endcan
                                            @can('booking_delete')
                                                <form action="{{ route('admin.bookings.destroy', $booking->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                                </form>
                                            @endcan
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

@endsection