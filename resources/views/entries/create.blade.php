@extends('master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-4 col-xs-offset-4 text-center">
                @if (Session::has('status'))
                    <div class="pre">
                        <h4>Whoops!</h4>
                        <p>{{ Session::get('status') }}</p>
                    </div>
                @endif

                <form method="post" action="{{ url('entries') }}">
                    {{ csrf_field() }}

                    <div class="form-group text-center @if($errors->has('name')) has-error @endif">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="" name="name" value="{!! Input::old('name') !!}">
                    </div>

                    <div class="form-group text-center @if($errors->has('content')) has-error @endif">
                        <label for="content">Content</label>
                        <input type="text" class="form-control" id="content" placeholder="" name="content" value="{!! Input::old('content') !!}">
                    </div>

                    <button class="hive-btn"><i class="fa fa-check-circle"></i> Create entry</button>
                </form>
            </div>
        </div>
    </div>
@stop