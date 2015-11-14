@extends('master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center action-bar">
                <p>Want to have your say?</p>
                <a class="hive-btn" href="{{ url('entries/create') }}"><i class="fa fa-plus-circle"></i> Add new entry</a>
            </div>
        </div>

        <div class="row">
            @foreach ($all as $instance)
                <div class="col-xs-12 entry">
                    <p><b>{{ $instance->name }}</b></p>
                    <p><i class="fa fa-comment"></i> {{ $instance->content }}</p>
                    <a href="{{ url('entries/'.$instance->id) }}" class="hive-btn"><i class="fa fa-eye"></i> View entry</a>
                </div>
            @endforeach
        </div>
    </div>
@stop