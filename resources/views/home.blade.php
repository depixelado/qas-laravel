@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading"><h2>Last questions</h2></div>

                <div class="panel-body">
                    @include('question.loop')
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading"><h4>Last users</h4></div>

                <div class="panel-body">
                    @include('user.loop')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
