@extends('layouts.app')

@section ('title')Додати картридж @endsection
@section('data')
    <h2>Додати картридж:</h2>
    <form action="{{url('/')}}/cartridgeUpdate/{{$data->id}}" method="GET">
        Виробник:
        <input class="form-control" id="vendor" name="vendor" placeholder="Виробник" value="{{$data->vendor}}" required>
        Модель:
        <input class="form-control" id="model" name="model" placeholder="Модель" value="{{$data->model}}" required>
        РОЕ номер:
        <input class="form-control" name="roe_number" id="roe_number" placeholder="РОЕ номер"
               value="{{$data->roe_number}}" onkeyup="liveSearch">
        Стан:
        <select class="form-control" id="state_id" name="state_id" required>
            <option value="{{$data->state->id}}">{{$data->state->name}}</option>
            @foreach($states as $state)
                <option value="{{$state->id}}">{{$state->name}}</option>
            @endforeach
        </select>


        Примітка<br>
        <textarea class="form-control" rows="3" name="note">{{$data->note}}</textarea> <br>

        <button type="submit" class="btn btn-primary flright">Редагувати</button>
    </form>
@endsection
