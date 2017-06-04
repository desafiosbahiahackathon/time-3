@extends('layouts.app')

@section('content')
    @include('woman.form')
    @if(isset($woman) && $woman->id != Auth::woman()->id)
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Delete</div>
                        <div class="panel-body">
                            {{ Form::model($woman, ['method' => 'DELETE', 'route' => ['woman.destroy', $woman->id], 'class'=>'form-horizontal woman-delete']) }}
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
