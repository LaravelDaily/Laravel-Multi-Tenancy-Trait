@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.home') }}
                </div>
                <div class="panel-body">

                    {{ trans('global.youAreLoggedIn') }}

                </div>
            </div>

        </div>
    </div>
</div>
@endsection