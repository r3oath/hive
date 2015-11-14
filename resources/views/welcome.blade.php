@extends('master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <img class="icon" src="{{ asset('images/icon.svg') }}">
                <h1>HIVE</h1>
                <p>Welcome to the Hive example app.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 text-center">
                <a href="{{ url('entries') }}" class="hive-btn"><i class="fa fa-cloud"></i> Web example</a>
                <a href="{{ url('api/v1/entries') }}" class="hive-btn"><i class="fa fa-plug"></i> API example</a>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 text-center">
                <div class="pre">The two components above share an Entry repository, factory, validator and mutators. These provide a common interface that allow various components to plug in with minimal technical overhead or code-repitition.<br><br>Be sure to check out the source code to see this in action.</div>
            </div>
        </div>
    </div>
@stop