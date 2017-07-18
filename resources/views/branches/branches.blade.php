@extends('layouts.app')

@section ('title')Список всіх підрозділів @endsection
@section('data')
    <h2>Список підрозділів:</h2>
    <a href="{{url('/')}}/branchAdd">
        <button type="button" class="btn btn-primary flright">Додати</button>
        <br>
    </a> <br><br>
    <table id="DataTable" class="table table-bordered">
        <thead>
        <tr>
            <th>Id</th>
            <th>Назва</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($branches as $branch)
            <tr>
                <td><a href="{{url('/')}}/branchView/{{$branch->id}}">{{$branch->id}}</a></td>
                <td>{{$branch->name}}</td>

                <td><a href="{{url('/')}}/branchDelete/{{$branch->id}}"><img
                                src="{{ URL::asset('/images/delete.jpg') }}" width="20px"
                                height="20px"></a></td>
                <td><a href="{{url('/')}}/branchEdit/{{$branch->id}}"><img
                                src="{{ URL::asset('/images/edit.png') }}" width="20px"
                                height="20px"></a></td>

            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
