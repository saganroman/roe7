@extends('layouts.app')

@section ('title')Додати підрозділ @endsection
@section('data')
    <h2>Додати підрозділ:</h2>
    <form action="{{url('/')}}/branchStore" method="GET">
        Назва:
        <input class="form-control" id="name" name="name" placeholder=" Назва" required>
        <br>
        <button type="submit" class="btn btn-primary flright">Додати</button>
    </form>
@endsection
