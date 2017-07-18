@extends('layouts.app')

@section ('title')Додати обмін картриджів @endsection
@section('data')

    <script>
        function getNumbers(number) {
            var r = number;
            $.ajax({
                url: "{!!URL::asset("/changeAutocomplete") !!}/" + r,
                cache: false,

                success: function (numbers) {

                    $('#number_get').autocomplete({
                        source: JSON.parse(numbers),
                        delay: 500,
                        //minLength: 2,
                    });


                }
            });
        }
        ;

    </script>
    <h2>Редагувати:</h2>
    <form action="{{url('/')}}/changeUpdate/{{$data->id}}" method="GET">
        Дата отримання:
        <input type="date" class="form-control" id="date_get" name="date_get" placeholder="Дата отримання"
               value="{{$data->date_get}}" required>
        Номер отриманого
        <input class="form-control" id="number_get" name="number_get" placeholder="Номер отриманого"
               value="{{$data->number_get}}" required onkeyup="getNumbers(this.value)">
        Дата видачі
        <input type="date" class="form-control" name="date_give" id="date_give" placeholder="Дата видачі"
               value="{{$data->date_give}}">
        Номер виданого
        <input class="form-control" id="number_give" name="number_give" placeholder="Номер виданого"
               value="{{$data->number_give}}">
        Відділ
        <select class="form-control" name="branch_id" required>
            <option value="{{$data->branch->id}}">{{$data->branch->name}}</option>

            @foreach($branches as $branch)
                <option value="{{$branch->id}}">{{$branch->name}}</option>
            @endforeach
        </select>
        Кому
        <input class="form-control" id="employee" name="employee" placeholder="Кому" required
               value="{{$data->employee}}">
        Примітка<br>
        <textarea class="form-control" name="note" rows="3" name="note">{{$data->note}}</textarea> <br>

        <button type="submit" class="btn btn-primary flright">Редагувати</button>
    </form>
@endsection
