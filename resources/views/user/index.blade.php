@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Usuários</h3>
        <div class="pagination">{{$users->links()}}</div>
        <table class="gt-table table-striped table-bordered">
            <thead>
                <th>Usuário</th>
                <th>GH</th>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr data-user-id="{{$user->id}}">
                        <td style="vertical-align: middle;" class="this-name">{{$user->name}}</td>
                        <td style="vertical-align: middle;" class="user-email">{{$user->gh}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="pagination">{{$users->links()}}</div>
    </div>
@endsection

@section('scripts')
@endsection
