<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            @if(isset($user))
                Edição de usuário - {{$user->name}}
            @else
                Criação de usuário
            @endif
        </div>
        <div class="panel-body">
            @if(isset($user))
                {{ Form::model($user, ['method' => 'PUT', 'route' => ['user.update', $user->id], 'class' => 'gt-form']) }}
            @else
                {{ Form::open(['route' => 'user.store', 'class' => 'gt-form']) }}
            @endif

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        	    {{ Form::label('name', 'Nome', array('class' => 'col-md-4 control-label')) }}
        	    <div class="col-md-6">
        	        {{ Form::text('name', old('name'), ['class' => 'form-control this-name']) }}
        	        @if ($errors->has('name'))
        	            <span class="help-block">
        	                <strong>{{ $errors->first('name') }}</strong>
        	            </span>
        	        @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                {{ Form::label('password', 'Senha', array('class' => 'col-md-4 control-label')) }}
                <div class="col-md-6">
                    {{ Form::password('password', ['class' => 'form-control']) }}
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                {{ Form::label('password-confirmation', 'Confirmação de Senha', array('class' => 'col-md-4 control-label')) }}
                <div class="col-md-6">
                    {{ Form::password('password_confirmation', ['class' => 'form-control']) }}
                    @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

			<div class="form-group{{ $errors->has('gh') ? ' has-error' : '' }}">
                {{ Form::label('gh', 'GH', array('class' => 'col-md-4 control-label')) }}
                <div class="col-md-6">
                    {{ Form::text('gh', old('gh'), ['class' => 'form-control', 'data-validate' => 'num']) }}
                        @if ($errors->has('gh'))
                            <span class="help-block">
                                <strong>{{ $errors->first('gh') }}</strong>
                            </span>
                        @endif
                </div>
            </div>

            <div class="form-group user-group {{ $errors->has('group') ? ' has-error' : '' }}">
                {{ Form::label('role', 'Grupo', array('class' => 'col-md-4 control-label')) }}
                <div class="col-md-6">
                    {{ Form::select('role',
                            [
                                1 => 'adm',
                                2 => 'ltn',
                                3 => 'maj'
                            ],
                            NULL,
                            [
                                'placeholder' => 'Selecione o grupo',
                                'class' => 'form-control'
                            ]
                        )
                    }}
                    @if ($errors->has('role'))
                        <span class="help-block">
                            <strong>{{ $errors->first('role') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    {!! Form::submit('Salvar', ['class' => 'btn btn-primary btn-success']) !!}
                </div>
            </div>
           {{ Form::close() }}
        </div>
    </div>
</div>
