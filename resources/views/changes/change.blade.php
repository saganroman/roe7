@extends('layouts.app')

@section ('title')Change page @endsection
@section('data')
    <h2>Список видачі картриджів:</h2>
    <a href="{{url('/')}}/changeAdd">
        <button type="button" class="btn btn-primary flright">Додати поле</button>
        <br>
    </a> <br><br>
    <table id="DataTable" class="table table-bordered">
        <tr>
            <th>Дата отримання</th>
            <th>Номер отриманого</th>
            <th>Дата обміну</th>
            <th>Номер виданого</th>
            <th>Підрозділ</th>
            <th>Співробітник</th>
            <th></th>
            <th></th>
        </tr>
        @foreach($changes as $change)
            <tr>
                <td><a href="{{url('/')}}/changeView/{{$change->id}}">{{$change->date_get}}</a></td>
                <td>{{$change->number_get}}</td>
                <td>{{$change->date_give}}</td>
                <td>{{$change->number_give}}</td>
                <td>{{$change->branch->name}}</td>
                <td>{{$change->employee}}</td>
                <td><a href="{{url('/')}}/changeDelete/{{$change->id}}"><img
                                src="{{ URL::asset('/images/delete.jpg') }}" width="20px"
                                height="20px"></a></td>
                <td><a href="{{url('/')}}/changeEdit/{{$change->id}}"><img src="{{ URL::asset('/images/edit.png') }}"
                                                                           width="20px"
                                                                           height="20px"></a></td>

            </tr>
        @endforeach
    </table>
@endsection
