@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Assistidas</h3>
        {{ Form::open(['url' => 'women/download', 'class' => 'form-horizontal']) }}
        <button id="pdf-download" name="content" value="" class="btn btn-default btn-primary" type="submit">
            <span class="fa fa-download" aria-hidden="true"></span> Download
        </button>
        {{ Form::close() }}
        <table class="gt-table striped hovered">
            <thead>
                <th class="sorting_desc">Número MPU</th>
                <th>Assistida</th>
                <th>Idade</th>
                <th>Endereço de visita</th>
            </thead>
            <tbody>
                @foreach ($women as $woman)
                    <tr data-user-id="{{$woman->id}}">
                        <td class="this-name sorting_1">{{$woman->mpu_number}}</td>
                        <td class="this-name">{{$woman->name}}</td>
                        <td class="this-name">{{$woman->age}}</td>
                        <td class="this-name">{{$woman->meeting_neighborhood}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <!-- <div class="pagination">{{$women->links()}}</div> -->
    </div>
@endsection

@section('scripts')
@endsection
