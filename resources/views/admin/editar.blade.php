@extends('layouts.app') @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Editar Producto
                </div>

                <div class="card-body">

                    @if ($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <h4 class="alert-heading">Ups!, se presentaron algunos errores.</h4>
                        <ul class="listnone">
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form method="post" action="/admin/actualizar-producto" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" value="{{ $producto->id }}" name="producto_id">
                        <input type="hidden" value="{{ $producto->imagen }}" name="file_name">
                        <div class="form-group">
                            <label for="titulo">Título</label>
                            <input type="text" name="titulo" class="form-control" id="titulo" placeholder="Ingrese el titulo del producto" value="{{ $producto->titulo }}">
                        </div>

                        <div class="form-group">
                            <div class="form-group">
                                <label for="categoria">Categoria</label>
                                <select name="categoria" class="form-control" id="categoria">
                                 @foreach($categorias as $c)
                                    @if($c->id == $producto->categoria)
                                        <option value="{{ $c->id }}" selected="selected">{{ $c->nombre }}</option>
                                        @else
                                        <option value="{{ $c->id }}">{{ $c->nombre }}</option>
                                    @endif
                                @endforeach
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="descripcion">Descripción</label>
                            <textarea name="descripcion" id="descripcion" cols="30" rows="8" class="form-control">{{ $producto->descripcion }}</textarea>
                        </div>
                        
                        <div class="form-group">
                            <label for="name">Imágen del producto</label>
                            <br>
                            <img src="/assets/img/productos/{{ $producto->imagen }}" alt="" width="150">
                            <input type="file" name="imagen" class="form-control">
                        </div>
                        
                        <button type="submit" class="btn btn-primary" id="btnSaveNews">Guardar Producto</button>
                        <a href="/admin" class="btn btn-danger">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 

@section('css')
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
@endsection 
