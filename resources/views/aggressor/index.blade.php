@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Assistidas</h3>
        <div class="pagination">{{ $women->links() }}</div>
        <table class="gt-table striped hovered">
            <thead>
                <th>Número MPU</th>
                <th>Assistida</th>
                <th>Idade</th>
                <th>Endereço de visita</th>
            </thead>
            <tbody class="text-center">
                @foreach ($women as $woman)
                    <tr data-user-id="{{$woman->id}}">
                        <td class="this-name">{{$woman->mpu_number}}</td>
                        <td class="this-name">{{$woman->name}}</td>
                        <td class="this-name">{{$woman->age}}</td>
                        <td class="this-name">{{$woman->meeting_neighborhood}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="pagination">{{$women->links()}}</div>
    </div>
@endsection

@section('scripts')
@endsection
