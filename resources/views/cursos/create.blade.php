@extends('layouts.app')
@section('content')
<div class="container">
    <h3>Crear Cursos</h3>
    <form action="{{ route('cursos.store')}}" method="POST">
        @csrf
        @include('cursos.fields')
    </form>
</div>
@endsection