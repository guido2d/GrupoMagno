@extends('layouts.app') @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Productos
                    <a href="/admin/nuevo-producto" class="btn btn-secondary btn-sm float-right">Nuevo Producto</a>
                </div>

                <div class="card-body">

                    @if (session('correcto'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('correcto') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Imagen</th>
                                <th scope="col">Titulo</th>
                                <th scope="col">Categoria</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($productos as $p)
                            <tr>
                                <th><img src="/assets/img/productos/{{ $p->imagen }}" alt="" width="50"></th>
                                <td>{{ $p->titulo }}</td>
                                <td>{{ $p->nombre }}</td>
                                <td>
                                    <a href="/admin/editar-producto/{{ $p->id }}" class="btn btn-primary">Editar</a>
                                    <a href="/admin/eliminar-producto/{{ $p->id }}" class="btn btn-danger btn-confirm">Eliminar</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-12 text-center">{{ $productos->links() }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="{{ asset('/js/app.js') }}" defer></script>
@endsection