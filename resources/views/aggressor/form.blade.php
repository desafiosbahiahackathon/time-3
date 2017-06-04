<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            @if(isset($woman))
                Edição de assistida - {{$woman->name}}
            @else
                Criação de assistida
            @endif
        </div>
        <div class="panel-body">
            @if(isset($woman))
                {{ Form::model($woman, ['method' => 'PUT', 'route' => ['woman.update', $woman->id], 'class' => 'gt-form']) }}
            @else
                {{ Form::open(['route' => 'woman.store', 'class' => 'gt-form']) }}
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

            <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
        	    {{ Form::label('phone', 'Telefone', array('class' => 'col-md-4 control-label')) }}
        	    <div class="col-md-6">
        	        {{ Form::text('phone', old('phone'), ['class' => 'form-control this-phone']) }}
        	        @if ($errors->has('phone'))
        	            <span class="help-block">
        	                <strong>{{ $errors->first('phone') }}</strong>
        	            </span>
        	        @endif
                </div>
            </div>

			<div class="form-group{{ $errors->has('home_address') ? ' has-error' : '' }}">
                {{ Form::label('home_address', 'Endereço Residencial', array('class' => 'col-md-4 control-label')) }}
                <div class="col-md-6">
                    {{ Form::text('home_address', old('home_address'), ['class' => 'form-control', 'data-validate' => 'num']) }}
                        @if ($errors->has('home_address'))
                            <span class="help-block">
                                <strong>{{ $errors->first('home_address') }}</strong>
                            </span>
                        @endif
                </div>
            </div>

			<div class="form-group{{ $errors->has('home_reference_point') ? ' has-error' : '' }}">
                {{ Form::label('home_reference_point', 'Ponto de Referência (Residencial)', array('class' => 'col-md-4 control-label')) }}
                <div class="col-md-6">
                    {{ Form::text('home_reference_point', old('home_reference_point'), ['class' => 'form-control', 'data-validate' => 'num']) }}
                        @if ($errors->has('home_reference_point'))
                            <span class="help-block">
                                <strong>{{ $errors->first('home_reference_point') }}</strong>
                            </span>
                        @endif
                </div>
            </div>

			<div class="form-group{{ $errors->has('home_neighborhood') ? ' has-error' : '' }}">
                {{ Form::label('home_neighborhood', 'Bairro (Residencial)', array('class' => 'col-md-4 control-label')) }}
                <div class="col-md-6">
                    {{ Form::text('home_neighborhood', old('home_neighborhood'), ['class' => 'form-control', 'data-validate' => 'num']) }}
                        @if ($errors->has('home_neighborhood'))
                            <span class="help-block">
                                <strong>{{ $errors->first('home_neighborhood') }}</strong>
                            </span>
                        @endif
                </div>
            </div>

			<div class="form-group{{ $errors->has('meeting_address') ? ' has-error' : '' }}">
                {{ Form::label('meeting_address', 'Endereço Residencial', array('class' => 'col-md-4 control-label')) }}
                <div class="col-md-6">
                    {{ Form::text('meeting_address', old('meeting_address'), ['class' => 'form-control', 'data-validate' => 'num']) }}
                        @if ($errors->has('meeting_address'))
                            <span class="help-block">
                                <strong>{{ $errors->first('meeting_address') }}</strong>
                            </span>
                        @endif
                </div>
            </div>

			<div class="form-group{{ $errors->has('meeting_reference_point') ? ' has-error' : '' }}">
                {{ Form::label('meeting_reference_point', 'Ponto de Referência (Encontro)', array('class' => 'col-md-4 control-label')) }}
                <div class="col-md-6">
                    {{ Form::text('meeting_reference_point', old('meeting_reference_point'), ['class' => 'form-control', 'data-validate' => 'num']) }}
                        @if ($errors->has('meeting_reference_point'))
                            <span class="help-block">
                                <strong>{{ $errors->first('meeting_reference_point') }}</strong>
                            </span>
                        @endif
                </div>
            </div>

			<div class="form-group{{ $errors->has('meeting_neighborhood') ? ' has-error' : '' }}">
                {{ Form::label('meeting_neighborhood', 'Bairro (Encontro)', array('class' => 'col-md-4 control-label')) }}
                <div class="col-md-6">
                    {{ Form::text('meeting_neighborhood', old('meeting_neighborhood'), ['class' => 'form-control', 'data-validate' => 'num']) }}
                        @if ($errors->has('meeting_neighborhood'))
                            <span class="help-block">
                                <strong>{{ $errors->first('meeting_neighborhood') }}</strong>
                            </span>
                        @endif
                </div>
            </div>

			<div class="form-group{{ $errors->has('best_meeting_time') ? ' has-error' : '' }}">
                {{ Form::label('best_meeting_time', 'Melhor turno para encontro', array('class' => 'col-md-4 control-label')) }}
                <div class="col-md-6">
                    {{ Form::text('best_meeting_time', old('best_meeting_time'), ['class' => 'form-control', 'data-validate' => 'num']) }}
                        @if ($errors->has('best_meeting_time'))
                            <span class="help-block">
                                <strong>{{ $errors->first('best_meeting_time') }}</strong>
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
