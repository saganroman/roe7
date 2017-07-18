@extends('layouts.app')

@section ('title')Редагувати підрозділ @endsection
@section('data')
    <h2>Редагувати підрозділ:</h2>
    <form action="{{url('/')}}/branchUpdate/{{$data->id}}" method="GET">
        Назва:
        <input class="form-control" id="name" name="name" placeholder=" Назва" value="{{$data->name}}" required>
        <br>

        <button type="submit" class="btn btn-primary flright">Редагувати</button>
    </form>
@endsection
