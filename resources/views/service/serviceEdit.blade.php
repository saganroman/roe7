@extends('layouts.app')

@section ('title')Редагувати @endsection
@section('data')

    <h2>Редагувати:</h2>
    <form action="{{url('/')}}/serviceUpdate/{{$data->id}}" method="GET">
        <input hidden name="cartridge_id" value="{{$data->cartridge->id}}">

        Номер картриджа
        <input class="form-control" id="cart_id" placeholder="Номер картриджа"
               value="{{$data->cartridge->roe_number}}">
        Дата відправки:
        <input type="date" class="form-control" id="date_give" name="date_give" placeholder="Дата відправки"
               value="{{$data->date_give}}">
        Дата отримання
        <input type="date" class="form-control" name="date_get" id="date_get" placeholder="Дата отримання"
               value="{{$data->date_get}}">
        Фірма
        <input class="form-control" id="service" name="service" placeholder="Фірма"
               value="{{$data->service}}">
        Виконана робота
        <select class="form-control" name="work" required>
            <option value="Заправка">Заправка</option>
            <option value="Відновлення">Відновлення</option>
        </select>
        Ціна
        <input class="form-control" id="price" name="price" placeholder="Ціна" required
               value="{{$data->price}}">
        Примітка<br>
        <textarea class="form-control" name="note" rows="3" name="note">{{$data->note}}</textarea> <br>

        <button type="submit" class="btn btn-primary flright">Редагувати</button>
    </form>
@endsection
