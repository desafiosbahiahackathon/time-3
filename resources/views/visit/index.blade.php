@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Assistidas</h3>
        <table class="gt-table striped hovered">
            <thead>
                <th>MPU da assistida</th>
                <th>Data da visita</th>
                <th>Tipo da ocorrência</th>
                <th>Policial Responsável</th>
            </thead>
            <tbody class="text-center">
                @foreach ($visits as $visit)
                    <tr data-user-id="{{$visit->id}}">
                        <td class="this-name">{{$visit->woman->mpu_number}}</td>
                        <td class="this-name">{{$visit->date}}</td>
                        <td class="this-name">{{$visit->getOccurrenceType()}}</td>
                        <td class="this-name">{{$visit->user->name}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('scripts')
@endsection
