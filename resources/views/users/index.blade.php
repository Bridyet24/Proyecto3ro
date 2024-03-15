<!-- carpeta layous, archivo app, es el diseño del codigo -->
@extends('layouts.app')
<!-- es una vista de app, en una seccion content -->
@section('content')
<h1>Vista de usuarios</h1>
<!-- indica que el contenido a terminado -->
<a href="{{ route('users.create')}}" class="btn btn-outline-dark btn-sm">Nuevo Usuario</a>
<table class="table">
    <tr>
        <th>#</th>
        <th>Usuario</th>
        <th>Rol</th>
        <th>Nombre</th>
        <th>Correo</th>
        <th>Telefono</th>
        <th>Contraseña</th>

        <th>Aciones</th>



    </tr>
    @foreach($users as $u)
    <tr>
        <td>{{ $loop->iteration}}</td>
        <td>{{ $u->name}}</td>
        <td>{{ $u->rol_descripcion}}</td>
        <td>{{ $u->usu_nombre}}</td>
        <td>{{ $u->email}}</td>
        <td>{{ $u->usu_telefono}}</td>
        <td>{{ $u->password}}</td>





        <td>
        <div class="d-inline">
    <a href="{{ route('users.edit',$u->usu_id) }}" class="btn btn-outline-info btn-sm">
        <span class="material-symbols-outlined">edit</span>
    </a>
    <form action="{{ route('users.destroy',$u->usu_id) }}" method="POST" onsubmit="return confirm('Desea eliminar el curso?')" class="d-inline">
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