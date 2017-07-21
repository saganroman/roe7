@extends('layouts.app')

@section ('title')Додати обмін картриджів @endsection
@section('data')
    <h2>Обмін картриджів:</h2>
    <form action="{{url('/')}}/changeStore" method="GET" id="123">
        Дата отримання:
        <input data-type="date" type="date" data-parsley-dateformat class="form-control" id="date_get" name="date_get"
               placeholder="Дата отримання" data-required="true" data-error="Даун введи правильно дату!"
               data-trigger="change">
        Номер отриманого
        <input class="form-control" id="number_get" name="number_get" placeholder="Номер отриманого" required
               onkeyup="getNumbers(this)">
        Дата видачі
        <input type="date" class="form-control" name="date_give" id="date_give" placeholder="Дата видачі">
        Номер виданого
        <input class="form-control" id="number_give" name="number_give" placeholder="Номер виданого"
               onkeyup="getNumbers(this)">
        Відділ
        <select class="form-control" name="branch_id" required>
            @foreach($branches as $branch )
                <option value="{{$branch->id}}">{{$branch->name}}</option>
            @endforeach
        </select>
        Кому
        <input class="form-control" id="employee" name="employee" placeholder="Кому" required>
        Примітка<br>
        <textarea class="form-control" name="note" rows="3" name="note"></textarea> <br>

        <button type="submit" class="btn btn-primary flright">Додати</button>
    </form>
@endsection
