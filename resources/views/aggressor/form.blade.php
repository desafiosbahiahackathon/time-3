<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            @if(isset($aggressor))
                Edição de agressor - {{$aggressor->name}}
            @else
                Criação de agressor
            @endif
        </div>
        <div class="panel-body">
            @if(isset($aggressor))
                {{ Form::model($aggressor, ['method' => 'PUT', 'route' => ['aggressor.update', $aggressor->id], 'class' => 'gt-form']) }}
            @else
                {{ Form::open(['route' => 'aggressor.store', 'class' => 'gt-form']) }}
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

            <div class="form-group aggressor-group {{ $errors->has('victim_relationship') ? ' has-error' : '' }}">
                {{ Form::label('victim_relationship', 'Qual o grau de proximidade entre você e quem praticou à violência? (*Flexionar gênero, se necessário)', array('class' => 'col-md-4 control-label')) }}
                <div class="col-md-6">
                    {{ Form::select('victim_relationship',
                            [
                                1 => 'Companheiro/Esposo/Namorado',
                                2 => 'Ex-companheiro/Ex-esposo/Ex-namorado',
                                3 => 'Pai/Irmão/Primo',
                                4 => 'Mãe/Irmã/Prima',
                                5 => 'Outro(a)s',
                            ],
                            NULL,
                            [
                                'placeholder' => 'Selecione o grau de proximidade',
                                'class' => 'form-control'
                            ]
                        )
                    }}
                    @if ($errors->has('victim_relationship'))
                        <span class="help-block">
                            <strong>{{ $errors->first('victim_relationship') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group aggressor-group {{ $errors->has('violence_type') ? ' has-error' : '' }}">
                {{ Form::label('violence_type ', 'Tipo(s) de violência sofrida?', array('class' => 'col-md-4 control-label')) }}
                <div class="col-md-6">
                    {{ Form::select('violence_type',
                            [
                                1 => 'Física',
                                2 => 'Psicológica',
                                3 => 'Moral',
                                4 => 'Sexual',
                                5 => 'Patrimonial',
                            ],
                            NULL,
                            [
                                'placeholder' => 'Selecione o tipo de violência sofrida',
                                'class' => 'form-control'
                            ]
                        )
                    }}
                    @if ($errors->has('violence_type '))
                        <span class="help-block">
                            <strong>{{ $errors->first('violence_type ') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group aggressor-group {{ $errors->has('relapse') ? ' has-error' : '' }}">
                {{ Form::label('relapse', 'O (a) Agressor(a) responde a algum processo?', array('class' => 'col-md-4 control-label')) }}
                <div class="col-md-6">
                    {{ Form::select('relapse',
                            [
                                1 => 'Sim',
                                2 => 'Não',
                            ],
                            NULL,
                            [
                                'placeholder' => 'Selecione se responde a algum processo',
                                'class' => 'form-control'
                            ]
                        )
                    }}
                    @if ($errors->has('relapse'))
                        <span class="help-block">
                            <strong>{{ $errors->first('relapse') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

			<div class="form-group{{ $errors->has('work_address') ? ' has-error' : '' }}">
                {{ Form::label('work_address', 'Endereço de ocupação/trabalho do Agressor(a):', array('class' => 'col-md-4 control-label')) }}
                <div class="col-md-6">
                    {{ Form::text('work_address', old('work_address'), ['class' => 'form-control this-name']) }}
                        @if ($errors->has('work_address'))
                            <span class="help-block">
                                <strong>{{ $errors->first('work_address') }}</strong>
                            </span>
                        @endif
                </div>
            </div>

            <div class="form-group aggressor-group {{ $errors->has('ethnicity') ? ' has-error' : '' }}">
                {{ Form::label('ethnicity', 'Raça/Etnia (Autodeclaração)', array('class' => 'col-md-4 control-label')) }}
                <div class="col-md-6">
                    {{ Form::select('ethnicity',
                            [
                                1 => 'Preta',
                                2 => 'Parda',
                                3 => 'Branca',
                                4 => 'Amarela',
                                5 => 'Indígena',
                                6 => 'Outra',
                            ],
                            NULL,
                            [
                                'placeholder' => 'Selecione sua raça/etnia',
                                'class' => 'form-control'
                            ]
                        )
                    }}
                    @if ($errors->has('ethnicity'))
                        <span class="help-block">
                            <strong>{{ $errors->first('ethnicity') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group aggressor-group {{ $errors->has('relationship_time') ? ' has-error' : '' }}">
                {{ Form::label('relationship_time', 'Tempo de relação com o(a) Agressor(a)', array('class' => 'col-md-4 control-label')) }}
                <div class="col-md-6">
                    {{ Form::select('relationship_time',
                            [
                                1 => '0 a 2 anos',
                                2 => '3 a 5 anos',
                                3 => '6 a 9 anos',
                                4 => 'Acima de 10 anos',
                                5 => 'Outro',
                            ],
                            NULL,
                            [
                                'placeholder' => 'Selecione seu tempo de relação com o(a) Agressor(a)',
                                'class' => 'form-control'
                            ]
                        )
                    }}
                    @if ($errors->has('relationship_time'))
                        <span class="help-block">
                            <strong>{{ $errors->first('relationship_time') }}</strong>
                        </span>
                    @endif
                </div>
            </div> 

            <div class="form-group aggressor-group {{ $errors->has('violence_habits') ? ' has-error' : '' }}">
                {{ Form::label('violence_habits', 'O(a) agressor(a) costuma ser violento(a) com outras pessoas?', array('class' => 'col-md-4 control-label')) }}
                <div class="col-md-6">
                    {{ Form::select('violence_habits',
                            [
                                1 => 'Sim',
                                2 => 'Não',
                            ],
                            NULL,
                            [
                                'placeholder' => 'Selecione se o(a) agressor(a) costuma ser violento(a) com outras pessoas',
                                'class' => 'form-control'
                            ]
                        )
                    }}
                    @if ($errors->has('violence_habits'))
                        <span class="help-block">
                            <strong>{{ $errors->first('violence_habits') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
                {{ Form::label('age', 'Idade do(a) Agressor(a)', array('class' => 'col-md-4 control-label')) }}
                <div class="col-md-6">
                    {{ Form::text('age', old('age'), ['class' => 'form-control', 'data-validate' => 'num']) }}
                        @if ($errors->has('age'))
                            <span class="help-block">
                                <strong>{{ $errors->first('age') }}</strong>
                            </span>
                        @endif
                </div>
            </div>

            <div class="form-group aggressor-group {{ $errors->has('enrollment') ? ' has-error' : '' }}">
                {{ Form::label('enrollment', 'Escolaridade do(a) Agressor(a)', array('class' => 'col-md-4 control-label')) }}
                <div class="col-md-6">
                    {{ Form::select('enrollment',
                            [
                                1 => 'Não escolarizada',
                                2 => 'Fundamental I',
                                3 => 'Fundamental II',
                                4 => 'Ensino Médio',
                                5 => 'Superior',
                                6 => 'Outros',
                            ],
                            NULL,
                            [
                                'placeholder' => 'Selecione a escolaridade do(a) agressor(a)',
                                'class' => 'form-control'
                            ]
                        )
                    }}
                    @if ($errors->has('enrollment'))
                        <span class="help-block">
                            <strong>{{ $errors->first('enrollment') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('comments') ? ' has-error' : '' }}">
                {{ Form::label('comments', 'Outras observações sobre o(a) Agressor(a):', array('class' => 'col-md-4 control-label')) }}
                <div class="col-md-6">
                    {{ Form::text('comments', old('comments'), ['class' => 'form-control this-name']) }}
                        @if ($errors->has('comments'))
                            <span class="help-block">
                                <strong>{{ $errors->first('comments') }}</strong>
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
