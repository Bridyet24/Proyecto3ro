@extends('layouts.app')

@section('content')


<div class="container">
    <h3>Editar Usuarios </h3>

    <form action="{{ route('users.update',$users->usu_id)}}" method="POST">
        @csrf
        @method('PUT')
        @include('users.fields')
    </form>
</div>
@endsection