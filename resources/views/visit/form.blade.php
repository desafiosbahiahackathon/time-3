<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            @if(isset($visit))
                Edição de visita - {{$visit->name}}
            @else
                Criação de visita
            @endif
        </div>
        <div class="panel-body">
            @if(isset($visit))
                {{ Form::model($visit, ['method' => 'PUT', 'route' => ['visit.update', $visit->id], 'class' => 'gt-form']) }}
            @else
                {{ Form::open(['route' => 'visit.store', 'class' => 'gt-form']) }}
            @endif

            <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">
                {{ Form::label('date', 'Data da Visita', array('class' => 'col-md-4 control-label')) }}
                <div class="col-md-6">
                    {{ Form::text('date', old('date'), ['class' => 'form-control this-date']) }}
                    @if ($errors->has('date'))
                        <span class="help-block">
                            <strong>{{ $errors->first('date') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('hour') ? ' has-error' : '' }}">
                {{ Form::label('hour', 'Hora da visita', array('class' => 'col-md-4 control-label')) }}
                <div class="col-md-6">
                    {{ Form::text('hour', old('hour'), ['class' => 'form-control this-hour']) }}
                    @if ($errors->has('hour'))
                        <span class="help-block">
                            <strong>{{ $errors->first('hour') }}</strong>
                        </span>
                    @endif
                </div>
            </div>


            <div class="form-group visit-group {{ $errors->has('occurrence_type') ? ' has-error' : '' }}">
                {{ Form::label('occurrence_type', 'Grau de Risco', array('class' => 'col-md-4 control-label')) }}
                <div class="col-md-6">
                    {{ Form::select('occurrence_type',
                            [
                                1 => 'Alto',
                                2 => 'Médio',
                                3 => 'Baixo',
                            ],
                            NULL,
                            [
                                'placeholder' => 'Selecione o grau de risco',
                                'class' => 'form-control'
                            ]
                        )
                    }}
                    @if ($errors->has('occurrence_type'))
                        <span class="help-block">
                            <strong>{{ $errors->first('occurrence_type') }}</strong>
                        </span>
                    @endif
                </div>
            </div>


            <div class="form-group{{ $errors->has('referrals') ? ' has-error' : '' }}">
                {{ Form::label('referrals', 'Encaminhamento para as Instituições parceiras', array('class' => 'col-md-4 control-label')) }}
                <div class="col-md-6">
                    {{ Form::text('referrals', old('referrals'), ['class' => 'form-control this-referrals']) }}
                    @if ($errors->has('referrals'))
                        <span class="help-block">
                            <strong>{{ $errors->first('referrals') }}</strong>
                        </span>
                    @endif
                </div>
            </div>


            <div class="form-group{{ $errors->has('comments') ? ' has-error' : '' }}">
                {{ Form::label('comments', 'Comentários da guarnição', array('class' => 'col-md-4 control-label')) }}
                <div class="col-md-6">
                    {{ Form::text('comments', old('comments'), ['class' => 'form-control this-comments']) }}
                    @if ($errors->has('comments'))
                        <span class="help-block">
                            <strong>{{ $errors->first('comments') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('woman_comments') ? ' has-error' : '' }}">
                {{ Form::label('woman_comments', 'Comentários da atendida', array('class' => 'col-md-4 control-label')) }}
                <div class="col-md-6">
                    {{ Form::text('woman_comments', old('woman_comments'), ['class' => 'form-control this-woman_comments']) }}
                    @if ($errors->has('woman_comments'))
                        <span class="help-block">
                            <strong>{{ $errors->first('woman_comments') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('aggressor_comments') ? ' has-error' : '' }}">
                {{ Form::label('aggressor_comments', 'Comentários do agressor', array('class' => 'col-md-4 control-label')) }}
                <div class="col-md-6">
                    {{ Form::text('aggressor_comments', old('aggressor_comments'), ['class' => 'form-control this-aggressor_comments']) }}
                    @if ($errors->has('aggressor_comments'))
                        <span class="help-block">
                            <strong>{{ $errors->first('aggressor_comments') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group visit-group {{ $errors->has('users_id') ? ' has-error' : '' }}">
                {{ Form::label('users_id', 'Usuário', array('class' => 'col-md-4 control-label')) }}
                <div class="col-md-6">
                    {{ Form::select('users_id',$users,
                            NULL,
                            [
                                'placeholder' => 'Selecione o grau de risco',
                                'class' => 'form-control'
                            ]
                        )
                    }}
                    @if ($errors->has('users_id'))
                        <span class="help-block">
                            <strong>{{ $errors->first('users_id') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group visit-group {{ $errors->has('women_id') ? ' has-error' : '' }}">
                {{ Form::label('women_id', 'Atendida', array('class' => 'col-md-4 control-label')) }}
                <div class="col-md-6">
                    {{ Form::select('women_id',$woman,
                            NULL,
                            [
                                'placeholder' => 'Selecione o grau de risco',
                                'class' => 'form-control'
                            ]
                        )
                    }}
                    @if ($errors->has('women_id'))
                        <span class="help-block">
                            <strong>{{ $errors->first('women_id') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group visit-group {{ $errors->has('aggressors_id') ? ' has-error' : '' }}">
                {{ Form::label('aggressors_id', 'Agressores', array('class' => 'col-md-4 control-label')) }}
                <div class="col-md-6">
                    {{ Form::select('aggressors_id',$aggressor,
                            NULL,
                            [
                                'placeholder' => 'Selecione o grau de risco',
                                'class' => 'form-control'
                            ]
                        )
                    }}
                    @if ($errors->has('aggressors_id'))
                        <span class="help-block">
                            <strong>{{ $errors->first('aggressors_id') }}</strong>
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
