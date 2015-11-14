@extends('master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                @if (Session::has('status'))
                    <div class="pre">
                        <h4>Whoops!</h4>
                        <p>{{ Session::get('status') }}</p>
                    </div>
                @endif

                <h1>{{ $instance->name }}</h1>
                <p><i class="fa fa-comment"></i> {{ $instance->content }}</p>
                <p class="meta">{{ $instance->created_at->toFormattedDateString() }}</p>
                <a href="{{ url('entries/') }}" class="hive-btn"><i class="fa fa-chevron-circle-left"></i> Back</a>
                <a href="{{ url('entries/'.$instance->id.'/edit') }}" class="hive-btn"><i class="fa fa-pencil"></i> Edit</a>
                <form action="{{ url('entries/'.$instance->id) }}" method="post" class="action-form">
                    {{ csrf_field() }}
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="hive-btn"><i class="fa fa-trash"></i> Delete</button>
                </form>
            </div>
        </div>
    </div>
@stop