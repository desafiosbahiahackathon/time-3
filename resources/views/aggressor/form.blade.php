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
                                'Companheiro/Esposo/Namorado' => 'Companheiro/Esposo/Namorado',
                                'Ex-companheiro/Ex-esposo/Ex-namorado' => 'Ex-companheiro/Ex-esposo/Ex-namorado',
                                'Pai/Irmão/Primo' => 'Pai/Irmão/Primo',
                                'Mãe/Irmã/Prima' => 'Mãe/Irmã/Prima',
                                'Outro(a)s' => 'Outro(a)s',
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
                                'Física' => 'Física',
                                'Psicológica' => 'Psicológica',
                                'Moral' => 'Moral',
                                'Sexual' => 'Sexual',
                                'Patrimonial' => 'Patrimonial',
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
                                0 => 'Não',
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
                                'Preta' => 'Preta',
                                'Parda' => 'Parda',
                                'Branca' => 'Branca',
                                'Amarela' => 'Amarela',
                                'Indígena' => 'Indígena',
                                'Outra' => 'Outra',
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
                                '0 a 2 anos' => '0 a 2 anos',
                                '3 a 5 anos' => '3 a 5 anos',
                                '6 a 9 anos' => '6 a 9 anos',
                                'Acima de 10 anos' => 'Acima de 10 anos',
                                'Outro' => 'Outro',
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
                                0 => 'Não',
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
                                'Não escolarizada' => 'Não escolarizada',
                                'Fundamental I' => 'Fundamental I',
                                'Fundamental II' => 'Fundamental II',
                                'Ensino Médio' => 'Ensino Médio',
                                'Superior' => 'Superior',
                                'Outros' => 'Outros',
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
