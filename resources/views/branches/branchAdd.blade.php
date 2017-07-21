@extends('layouts.app')

@section ('title')Додати підрозділ @endsection
@section('data')
    @if (Session::has('success'))
        <div class="alert alert-success " id="flash_mess">

            {{Session::get('success')}}
        </div>
    @endif
    <h2>Додати підрозділ:</h2>
    <form action="{{url('/')}}/branchStore" method="GET">
        Назва:
        <input class="form-control" id="name" name="name" placeholder=" Назва" required>
        <br>
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
