@extends('layouts.admin')
@section('content')
<div class="content">
    @can('hotel_create')
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route("admin.hotels.create") }}">
                    {{ trans('global.add') }} {{ trans('global.hotel.title_singular') }}
                </a>
            </div>
        </div>
    @endcan
    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.hotel.title_singular') }} {{ trans('global.list') }}
                </div>
                <div class="panel-body">

                    <div class="table-responsive">
                        <table class=" table table-bordered table-striped datatable">
                            <thead>
                                <tr>
                                    <th>
                                        {{ trans('global.hotel.fields.name') }}
                                    </th>
                                    <th>
                                        {{ trans('global.hotel.fields.address') }}
                                    </th>
                                    <th>
                                        {{ trans('global.hotel.fields.country') }}
                                    </th>
                                    <th>
                                        &nbsp;
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($hotels as $key => $hotel)
                                    <tr>
                                        <td>
                                            {{ $hotel->name ?? '' }}
                                        </td>
                                        <td>
                                            {{ $hotel->address ?? '' }}
                                        </td>
                                        <td>
                                            {{ $hotel->country->name ?? '' }}
                                        </td>
                                        <td>
                                            @can('hotel_show')
                                                <a class="btn btn-xs btn-primary" href="{{ route('admin.hotels.show', $hotel->id) }}">
                                                    {{ trans('global.view') }}
                                                </a>
                                            @endcan
                                            @can('hotel_edit')
                                                <a class="btn btn-xs btn-info" href="{{ route('admin.hotels.edit', $hotel->id) }}">
                                                    {{ trans('global.edit') }}
                                                </a>
                                            @endcan
                                            @can('hotel_delete')
                                                <form action="{{ route('admin.hotels.destroy', $hotel->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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