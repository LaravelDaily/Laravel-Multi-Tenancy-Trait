@extends('layouts.admin')
@section('content')
<div class="content">
    @can('country_create')
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route("admin.countries.create") }}">
                    {{ trans('global.add') }} {{ trans('global.country.title_singular') }}
                </a>
            </div>
        </div>
    @endcan
    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.country.title_singular') }} {{ trans('global.list') }}
                </div>
                <div class="panel-body">

                    <div class="table-responsive">
                        <table class=" table table-bordered table-striped datatable">
                            <thead>
                                <tr>
                                    <th>
                                        {{ trans('global.country.fields.name') }}
                                    </th>
                                    <th>
                                        {{ trans('global.country.fields.short_code') }}
                                    </th>
                                    <th>
                                        &nbsp;
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($countries as $key => $country)
                                    <tr>
                                        <td>
                                            {{ $country->name ?? '' }}
                                        </td>
                                        <td>
                                            {{ $country->short_code ?? '' }}
                                        </td>
                                        <td>
                                            @can('country_show')
                                                <a class="btn btn-xs btn-primary" href="{{ route('admin.countries.show', $country->id) }}">
                                                    {{ trans('global.view') }}
                                                </a>
                                            @endcan
                                            @can('country_edit')
                                                <a class="btn btn-xs btn-info" href="{{ route('admin.countries.edit', $country->id) }}">
                                                    {{ trans('global.edit') }}
                                                </a>
                                            @endcan
                                            @can('country_delete')
                                                <form action="{{ route('admin.countries.destroy', $country->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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