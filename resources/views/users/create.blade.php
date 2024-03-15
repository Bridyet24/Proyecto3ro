@extends('layouts.app')
@section('content')
<div class="container">
    <h3>Crear Cursos</h3>
    <form action="{{ route('users.store')}}" method="POST">
       
        @csrf
        @include('users.fields')
    </form>
</div>
@endsection