@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Assistidas</h3>
        <table class="gt-table striped hovered">
            <thead>
                <th>MPU da assistida</th>
                <th>Nome da assistida</th>
                <th>Data da última visita</th>
                <th>Local da visita</th>
            </thead>
            <tbody class="text-center">
                @foreach ($visits as $visit)
                    <tr data-user-id="{{$visit->id}}">
                        <td class="this-name">{{$visit->mpu_number}}</td>
                        <td class="this-name">{{$visit->name}}</td>
                        <td class="this-name">{{$visit->date}}</td>
                        <td class="this-name">{{$visit->meeting_neighborhood}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="btn danger">
            <span>Gerar rota</span>
        </div>

    </div>
@endsection

@section('scripts')
@endsection