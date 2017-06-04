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

			<div class="form-group{{ $errors->has('home_address') ? ' has-error' : '' }}">
                {{ Form::label('home_address', 'Endereço Residencial', array('class' => 'col-md-4 control-label')) }}
                <div class="col-md-6">
                    {{ Form::text('home_address', old('home_address'), ['class' => 'form-control this-name']) }}
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
                    {{ Form::text('home_reference_point', old('home_reference_point'), ['class' => 'form-control this-name']) }}
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
                    {{ Form::text('home_neighborhood', old('home_neighborhood'), ['class' => 'form-control this-name']) }}
                        @if ($errors->has('home_neighborhood'))
                            <span class="help-block">
                                <strong>{{ $errors->first('home_neighborhood') }}</strong>
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

			<div class="form-group{{ $errors->has('meeting_address') ? ' has-error' : '' }}">
                {{ Form::label('meeting_address', 'Endereço para Visita', array('class' => 'col-md-4 control-label')) }}
                <div class="col-md-6">
                    {{ Form::text('meeting_address', old('meeting_address'), ['class' => 'form-control this-name']) }}
                        @if ($errors->has('meeting_address'))
                            <span class="help-block">
                                <strong>{{ $errors->first('meeting_address') }}</strong>
                            </span>
                        @endif
                </div>
            </div>

			<div class="form-group{{ $errors->has('meeting_reference_point') ? ' has-error' : '' }}">
                {{ Form::label('meeting_reference_point', 'Ponto de Referência da Visita', array('class' => 'col-md-4 control-label')) }}
                <div class="col-md-6">
                    {{ Form::text('meeting_reference_point', old('meeting_reference_point'), ['class' => 'form-control this-name']) }}
                        @if ($errors->has('meeting_reference_point'))
                            <span class="help-block">
                                <strong>{{ $errors->first('meeting_reference_point') }}</strong>
                            </span>
                        @endif
                </div>
            </div>

			<div class="form-group{{ $errors->has('meeting_neighborhood') ? ' has-error' : '' }}">
                {{ Form::label('meeting_neighborhood', 'Bairro da Visita', array('class' => 'col-md-4 control-label')) }}
                <div class="col-md-6">
                    {{ Form::text('meeting_neighborhood', old('meeting_neighborhood'), ['class' => 'form-control this-name']) }}
                        @if ($errors->has('meeting_neighborhood'))
                            <span class="help-block">
                                <strong>{{ $errors->first('meeting_neighborhood') }}</strong>
                            </span>
                        @endif
                </div>
            </div>

			<div class="form-group{{ $errors->has('best_meeting_time') ? ' has-error' : '' }}">
                {{ Form::label('best_meeting_time', 'Melhor turno para visita', array('class' => 'col-md-4 control-label')) }}
                <div class="col-md-6">
                    {{ Form::select('best_meeting_time',
                            [
                                'Matutino' => 'Matutino',
                                'Vespertino' => 'Vespertino',
                            ],
                            NULL,
                            [
                                'placeholder' => 'Selecione o melhor turno para visita',
                                'class' => 'form-control'
                            ]
                        )
                    }}
                    @if ($errors->has('best_meeting_time'))
                        <span class="help-block">
                            <strong>{{ $errors->first('best_meeting_time') }}</strong>
                        </span>
                    @endif
            </div>

            <div class="form-group{{ $errors->has('marital_status') ? ' has-error' : '' }}">
                {{ Form::label('marital_status', 'Estado civil', array('class' => 'col-md-4 control-label')) }}
                <div class="col-md-6">
                    {{ Form::select('marital_status',
                            [
                                'Casada/união Estável' => 'Casada/união Estável',
                                'Divorciada' => 'Divorciada',
                                'Separada' => 'Separada',
                                'Solteira' => 'Solteira',
                                'Viúva' => 'Viúva',
                                'Outro' => 'Outro',
                            ],
                            NULL,
                            [
                                'placeholder' => 'Selecione o estado civil',
                                'class' => 'form-control'
                            ]
                        )
                    }}
                    @if ($errors->has('marital_status'))
                        <span class="help-block">
                            <strong>{{ $errors->first('marital_status') }}</strong>
                        </span>
                    @endif
            </div>

            <div class="form-group{{ $errors->has('children_amount') ? ' has-error' : '' }}">
                {{ Form::label('children_amount', 'Filho(a)s/Quanto(a)s?', array('class' => 'col-md-4 control-label')) }}
                <div class="col-md-6">
                    {{ Form::text('children_amount', old('children_amount'), ['class' => 'form-control', 'data-validate' => 'num']) }}
                        @if ($errors->has('children_amount'))
                            <span class="help-block">
                                <strong>{{ $errors->first('children_amount') }}</strong>
                            </span>
                        @endif
                </div>
            </div>

            {{-- Como fazer intervalo da idade dos filhos? --}}

            <div class="form-group{{ $errors->has('children_with_aggressor') ? ' has-error' : '' }}">
                {{ Form::label('children_with_aggressor', 'Filho(a)s com Agressor? Quanto(a)s?', array('class' => 'col-md-4 control-label')) }}
                <div class="col-md-6">
                    {{ Form::text('children_with_aggressor', old('children_with_aggressor'), ['class' => 'form-control', 'data-validate' => 'num']) }}
                        @if ($errors->has('children_with_aggressor'))
                            <span class="help-block">
                                <strong>{{ $errors->first('children_with_aggressor') }}</strong>
                            </span>
                        @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('enrollment') ? ' has-error' : '' }}">
                {{ Form::label('enrollment', 'Escolaridade', array('class' => 'col-md-4 control-label')) }}
                <div class="col-md-6">
                    {{ Form::select('enrollment',
                            [
                                'Não escolarizada' => 'Não escolarizada',
                                'Fundamental I incompleto' => 'Fundamental I incompleto',
                                'Fundamental I completo' => 'Fundamental I completo',
                                'Fundamental II incompleto' => 'Fundamental II incompleto',
                                'Fundamental II completo' => 'Fundamental II completo',
                                'Ensino Médio incompleto' => 'Ensino Médio incompleto',
                                'Ensino Médio completo' => 'Ensino Médio completo',
                                'Graduação incompleta' => 'Graduação incompleta',
                                'Graduação completa' => 'Graduação completa',
                                'Pós Graduação incompleta' => 'Pós Graduação incompleta',
                                'Pós Graduação completa' => 'Pós Graduação completa',
                                'Outros' => 'Outros',
                            ],
                            NULL,
                            [
                                'placeholder' => 'Selecione a escolaridade',
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

            <div class="form-group{{ $errors->has('ethnicity') ? ' has-error' : '' }}">
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

            <div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
                {{ Form::label('age', 'Idade', array('class' => 'col-md-4 control-label')) }}
                <div class="col-md-6">
                    {{ Form::text('age', old('age'), ['class' => 'form-control', 'data-validate' => 'num']) }}
                        @if ($errors->has('age'))
                            <span class="help-block">
                                <strong>{{ $errors->first('age') }}</strong>
                            </span>
                        @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('religion') ? ' has-error' : '' }}">
                {{ Form::label('religion', 'Religião', array('class' => 'col-md-4 control-label')) }}
                <div class="col-md-6">
                    {{ Form::select('religion',
                            [
                                'Católica' => 'Católica',
                                'Evangélica/Protestante' => 'Evangélica/Protestante',
                                'Espírita' => 'Espírita',
                                'Matriz Africana' => 'Matriz Africana',
                                'Outros' => 'Outros',
                            ],
                            NULL,
                            [
                                'placeholder' => 'Selecione sua religião',
                                'class' => 'form-control'
                            ]
                        )
                    }}
                    @if ($errors->has('religion'))
                        <span class="help-block">
                            <strong>{{ $errors->first('religion') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('work') ? ' has-error' : '' }}">
                {{ Form::label('work', 'Profissão/Ocupação', array('class' => 'col-md-4 control-label')) }}
                <div class="col-md-6">
                    {{ Form::text('work', old('work'), ['class' => 'form-control this-name']) }}
                        @if ($errors->has('work'))
                            <span class="help-block">
                                <strong>{{ $errors->first('work') }}</strong>
                            </span>
                        @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('last_work') ? ' has-error' : '' }}">
                {{ Form::label('last_work', 'Último emprego/ocupação', array('class' => 'col-md-4 control-label')) }}
                <div class="col-md-6">
                    {{ Form::text('last_work', old('last_work'), ['class' => 'form-control this-name']) }}
                        @if ($errors->has('last_work'))
                            <span class="help-block">
                                <strong>{{ $errors->first('last_work') }}</strong>
                            </span>
                        @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('work_active') ? ' has-error' : '' }}">
                {{ Form::label('work_active', 'Trabalha', array('class' => 'col-md-4 control-label')) }}
                <div class="col-md-6">
                    {{ Form::select('work_active',
                            [
                                1 => 'Sim',
                                2 => 'Não',
                            ],
                            NULL,
                            [
                                'placeholder' => 'Selecione se trabalha',
                                'class' => 'form-control'
                            ]
                        )
                    }}
                    @if ($errors->has('work_active'))
                        <span class="help-block">
                            <strong>{{ $errors->first('work_active') }}</strong>
                        </span>
                    @endif
            </div>

            <div class="form-group{{ $errors->has('work_place') ? ' has-error' : '' }}">
                {{ Form::label('work_place', 'Local de trabalho', array('class' => 'col-md-4 control-label')) }}
                <div class="col-md-6">
                    {{ Form::text('work_place', old('work_place'), ['class' => 'form-control this-name']) }}
                        @if ($errors->has('work_place'))
                            <span class="help-block">
                                <strong>{{ $errors->first('work_place') }}</strong>
                            </span>
                        @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('income') ? ' has-error' : '' }}">
                {{ Form::label('income', 'Renda (SM - Salário Mínimo; NR - Não Revelou; SR - Sem Renda)', array('class' => 'col-md-4 control-label')) }}
                <div class="col-md-6">
                    {{ Form::select('income',
                            [
                                'NR' => 'NR',
                                'SR' => 'SR',
                                'Até 01 SM' => 'Até 01 SM',
                                '02 a 04 SM' => '02 a 04 SM',
                                'Acima de 05 SM' => 'Acima de 05 SM',
                                'Outra' => 'Outra',
                            ],
                            NULL,
                            [
                                'placeholder' => 'Selecione a escolaridade',
                                'class' => 'form-control'
                            ]
                        )
                    }}
                    @if ($errors->has('income'))
                        <span class="help-block">
                            <strong>{{ $errors->first('income') }}</strong>
                        </span>
                    @endif
            </div>

            <div class="form-group{{ $errors->has('main_income_family') ? ' has-error' : '' }}">
                {{ Form::label('main_income_family', 'Quem é o(a) principal responsável pelo sustento da família?', array('class' => 'col-md-4 control-label')) }}
                <div class="col-md-6">
                    {{ Form::select('main_income_family',
                            [
                                'A própria' => 'A própria',
                                'O(a) Agressor(a)' => 'O(a) Agressor(a)',
                                'Outro(a) membro(a) da familiar' => 'Outro(a) membro(a) da familiar',
                            ],
                            NULL,
                            [
                                'placeholder' => 'Selecione o responsável',
                                'class' => 'form-control'
                            ]
                        )
                    }}
                    @if ($errors->has('main_income_family'))
                        <span class="help-block">
                            <strong>{{ $errors->first('main_income_family') }}</strong>
                        </span>
                    @endif
            </div>

            <div class="form-group{{ $errors->has('social_government_program') ? ' has-error' : '' }}">
                {{ Form::label('social_government_program', 'Participa de algum Programa ou Benefício do Governo Federal, Estadual e Municipal?', array('class' => 'col-md-4 control-label')) }}
                <div class="col-md-6">
                    {{ Form::select('social_government_program',
                            [
                                'Programa Bolsa Família - PBF' => 'Programa Bolsa Família - PBF',
                                'Programa Minha Casa, Minha Vida' => 'Programa Minha Casa, Minha Vida',
                                'Benefício de Prestação Continuada - BPC' => 'Benefício de Prestação Continuada - BPC',
                                'Programa Primeiro Passo' => 'Programa Primeiro Passo',
                                'Outro(s)' => 'Outro(s)',
                            ],
                            NULL,
                            [
                                'placeholder' => 'Selecione o programa',
                                'class' => 'form-control'
                            ]
                        )
                    }}
                    @if ($errors->has('social_government_program'))
                        <span class="help-block">
                            <strong>{{ $errors->first('social_government_program') }}</strong>
                        </span>
                    @endif
            </div>

            <div class="form-group{{ $errors->has('mpu_number') ? ' has-error' : '' }}">
                {{ Form::label('mpu_number', 'MPU Nº', array('class' => 'col-md-4 control-label')) }}
                <div class="col-md-6">
                    {{ Form::text('mpu_number', old('mpu_number'), ['class' => 'form-control', 'data-validate' => 'num']) }}
                        @if ($errors->has('mpu_number'))
                            <span class="help-block">
                                <strong>{{ $errors->first('mpu_number') }}</strong>
                            </span>
                        @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('request_origin') ? ' has-error' : '' }}">
                {{ Form::label('request_origin', 'Origem solicitação', array('class' => 'col-md-4 control-label')) }}
                <div class="col-md-6">
                    {{ Form::select('request_origin',
                            [
                                'TJ _Vara' => 'TJ _Vara',
                                'MP' => 'MP',
                                'DP' => 'DP',
                                'DEAM' => 'DEAM',
                                'Outro(s)' => 'Outro(s)',
                            ],
                            NULL,
                            [
                                'placeholder' => 'Selecione a origem da solicitação',
                                'class' => 'form-control'
                            ]
                        )
                    }}
                    @if ($errors->has('request_origin'))
                        <span class="help-block">
                            <strong>{{ $errors->first('request_origin') }}</strong>
                        </span>
                    @endif
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
