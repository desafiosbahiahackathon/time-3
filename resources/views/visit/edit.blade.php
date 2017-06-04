@extends('layouts.app')

@section('content')
    @include('user.form')
    @if(isset($user) && $user->id != Auth::user()->id)
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Delete</div>
                        <div class="panel-body">
                            {{ Form::model($user, ['method' => 'DELETE', 'route' => ['user.destroy', $user->id], 'class'=>'form-horizontal user-delete']) }}
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        {{ Form::submit('Delete', ['class' => 'btn btn-danger delete']) }}
                                    </div>
                                </div>
                            {{ Form::close() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
