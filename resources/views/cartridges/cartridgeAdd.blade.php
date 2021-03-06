@extends('layouts.app')

@section ('title')Додати картридж @endsection
@section('data')
    <h2>Додати картридж:</h2>
    <form action="{{url('/')}}/cartridgeStore" method="GET">
        Виробник:
        <input class="form-control" id="vendor" name="vendor" placeholder="Виробник" required>
        Модель:
        <input class="form-control" id="model" name="model" placeholder="Модель" required>
        РОЕ номер:
        <input class="form-control" name="roe_number" id="roe_number" placeholder="РОЕ номер">
        Стан:
        <input class="form-control" id="state_id" name="state_id" placeholder="Стан">

        Примітка<br>
        <textarea class="form-control" name="note" rows="3" name="note"></textarea> <br>

        <button type="submit" class="btn btn-primary flright">Додати</button>
    </form>
@endsection
