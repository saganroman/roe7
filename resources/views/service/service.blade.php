@extends('layouts.app')

@section ('title')Список картриджів що знаходяться в ремонті @endsection
@section('data')
    <h2>Список картриджів що знаходяться в ремонті:</h2>
    <a href="{{url('/')}}/serviceAdd">
        {{-- <button type="button" class="btn btn-primary flright">Додати поле</button>--}}
        <br>
    </a> <br><br>
    <table id="DataTable" class="table table-bordered">
        <thead>
        <tr>
            <th>Номер</th>
            <th>Модель</th>
            <th>Дата відправки</th>
            <th>Дата отримання</th>
            <th>Фірма</th>
            <th>Виконано</th>
            <th>Ціна</th>
            <th>Примітка</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($services as $service)
            <tr>
                <td>{{$service->cartridge->roe_number}}</td>
                <td>{{$service->cartridge->model}}</td>
                <td>{{$service->date_give}}</td>
                <td>{{$service->date_get}}</td>
                <td>{{$service->service}}</td>
                <td>{{$service->work}}</td>
                <td>{{$service->price}}</td>
                <td>{{$service->note}}</td>
                <td><a href="{{url('/')}}/serviceDelete/{{$service->id}}"><img
                                src="{{ URL::asset('/images/delete.jpg') }}" width="20px"
                                height="20px"></a></td>
                <td><a href="{{url('/')}}/serviceEdit/{{$service->id}}"><img src="{{ URL::asset('/images/edit.png') }}"
                                                                             width="20px"
                                                                             height="20px"></a></td>

            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
