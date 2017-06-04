@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Usuários</h3>
        <div class="pagination">{{$users->links()}}</div>
        <table class="table table-striped table-bordered">
            <thead>
                <th>Usuário</th>
                <th>Email</th>
                <th style="width: 30%">Ações</th>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr data-user-id="{{$user->id}}">
                        <td style="vertical-align: middle;" class="this-name">{{$user->name}}</td>
                        <td style="vertical-align: middle;" class="user-email">{{$user->email}}</td>
                        <td style="vertical-align: middle;" class="user-actions">
                            @if (Auth::user()->isManager())
                                {{ Form::model($user, ['method' => 'DELETE', 'route' => ['user.destroy', $user->id], 'class'=>'form-horizontal user-delete']) }}
                                    <a class="btn btn-default" href="{{action('UserController@edit', array('id' => $user->id))}}">
                                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Editar
                                    </a>
                                    <button class="btn btn-default btn-danger delete" type="submit">
                                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Excluir
                                    </button>
                                {{ Form::close() }}
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="pagination">{{$users->links()}}</div>
    </div>
@endsection

@section('scripts')
@endsection
