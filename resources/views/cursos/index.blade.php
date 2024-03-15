@extends('layouts.app') 
@section('content')
<h1>Esta es la vista index de cursos</h1>
<a href="{{ route('cursos.create')}}" class="btn btn-outline-dark btn-sm">Nuevo Cursos</a>
<table class="table">
    <tr>
        <th>#</th>
        <th>Titulo</th>
        <th>Descripcion</th>
        <th>Grupo</th>
        <th>Estado</th>
        <th>Aciones</th>

    </tr>

    @foreach($cursos as $c)
    <tr>
        <td>{{ $loop->iteration}}</td>
        <td>{{ $c->cur_titulo}}</td>
        <td>{{ $c->cur_descripcion}}</td>
        <td>{{ $c->cur_grupo}}</td>
        <td>{{ $c->cur_estado==1?'Activo':'Inactivo' }}</td>

           <td>
           <div class="d-inline">
    <a href="{{ route('cursos.edit',$c->cur_id) }}" class="btn btn-outline-info btn-sm">
        <span class="material-symbols-outlined">edit</span>
    </a>
    <form action="{{ route('cursos.destroy',$c->cur_id) }}" method="POST" onsubmit="return confirm('Desea eliminar el curso?')" class="d-inline">
        @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-outline-danger btn-sm">
            <span class="material-symbols-outlined">delete</span>
        </button>
    </form>
</div>

           </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection