@extends('layouts.app')

@section ('title')Додати обмін картриджів @endsection
@section('data')

    <h2>Обмін картриджів:</h2>
    <form action="{{url('/')}}/changeStore" method="GET">
        Дата отримання:
        <input type="date" class="form-control" id="date_get" name="date_get" placeholder="Дата отримання" required>
        Номер отриманого
        <input class="form-control" id="number_get" name="number_get" placeholder="Номер отриманого" required>
        Дата видачі
        <input type="date" class="form-control" name="date_give" id="date_give" placeholder="Дата видачі">
        Номер виданого
        <input class="form-control" id="number_give" name="number_give" placeholder="Номер виданого">
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
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection
