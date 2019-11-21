@extends('layouts.app') @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Nuevo Producto
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

                    <form method="post" action="/admin/guardar-producto" id="frmNewProd" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="titulo">Título</label>
                            <input type="text" name="titulo" class="form-control" id="titulo" placeholder="Ingrese el titulo del producto">
                        </div>
                        
                        <div class="form-group">
                            <div class="form-group">
                                <label for="categoria">Categoría</label>
                                <select name="categoria" class="form-control" id="categoria">
                                    <option value="1">Acondicionadores de superficie</option>
                                    <option value="2">Impermeabilizantes</option>
                                    <option value="3">Pinturas Látex</option>
                                    <option value="4">Esmaltes y anticorrosivos</option>
                                    <option value="5">Protectores de madera</option>
                                    <option value="6">Línea Industrial</option>
                                    <option value="7">Revestimientos plásticos</option>
                                    <option value="8">Accesorios</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="descripcion">Descripción</label>
                            <textarea name="descripcion" id="" cols="30" rows="8" class="form-control"></textarea>
                        </div>
                        
                        <div class="form-group">
                            <label for="imagen">Imágen del producto</label>
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