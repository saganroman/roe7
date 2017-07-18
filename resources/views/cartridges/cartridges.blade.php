@extends('layouts.app')

@section ('title')Список всіх картриджів @endsection
@section('data')
    <h2>Список картриджів:</h2>
    <a href="{{url('/')}}/cartridgeAdd">
        <button type="button" class="btn btn-primary flright">Додати</button>
        <br>
    </a> <br><br>
    <table id="DataTable" class="table table-bordered">
        <tr>
            <th>Id</th>
            <th>Виробник</th>
            <th>Модель</th>
            <th>РОЕ номер</th>
            <th>Стан</th>
            <th></th>
            <th></th>
        </tr>
        @foreach($cartridges as $cartridge)
            <tr>
                <td><a href="{{url('/')}}/cartridgeView/{{$cartridge->id}}">{{$cartridge->id}}</a></td>
                <td>{{$cartridge->vendor}}</td>
                <td>{{$cartridge->model}}</td>
                <td>{{$cartridge->roe_number}}</td>
                <td>{{$cartridge->state->name}}</td>
                <td><a href="{{url('/')}}/cartridgeDelete/{{$cartridge->id}}"><img
                                src="{{ URL::asset('/images/delete.jpg') }}" width="20px"
                                height="20px"></a></td>
                <td><a href="{{url('/')}}/cartridgeEdit/{{$cartridge->id}}"><img
                                src="{{ URL::asset('/images/edit.png') }}" width="20px"
                                height="20px"></a></td>

            </tr>
        @endforeach
    </table>
@endsection
