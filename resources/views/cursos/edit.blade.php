@extends('layouts.app')

@section('content')


<div class="container">
    <h3>Editar Curso </h3>

    <form action="{{ route('cursos.update',$curso->cur_id)}}" method="POST">
        @csrf
        @method('PUT')
        @include('cursos.fields')
    </form>
</div>
@endsection