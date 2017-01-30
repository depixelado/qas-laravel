@extends('layouts.app')

@section('htmlClasses', 'home')

@section('content')
<div class="container welcome">
    <h1>Get your questions answered as soon as possible</h1>
    <div class="welcome__actions">
        <a href="#" class="btn btn-success">ASK A QUESTION</a>
        <a href="#" class="btn btn-warning">FIND A QUESTION</a>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="last-questions">
                <h2 class="last-questions__title">Last questions</h2>
                @include('question.loop')
            </div>
        </div>
        <div class="col-md-4">
            <div class="last-users">
                <h4 class="last-users__title">Last users</h4>
                @include('user.loop')
            </div>
        </div>
    </div>
</div>
@endsection
