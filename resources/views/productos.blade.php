@extends('layouts.main')
@section('contenido')

<!-- breadcrumb area start -->
<section class="breadcrumb-area breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcrumb-inner">
                    <h1 class="title">{{ $categoria }}</h1>
                    <div class="page-nav">
                        <a href="/">Inicio /</a> Productos </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb area end -->

<!-- blog grid content area start -->
<section class="blog-grid-content">
    <div class="container">
        <div class="row">
            @foreach($productos as $p)
            <div class="col-md-4 col-sm-6">
                <div class="single-blog-grid-item margin-bottom-30"><!-- single blog grid item -->  
                    <div class="thumb">
                        <img src="{{ asset('/assets/img/productos') . '/' . $p->imagen }}" alt="blog grid image">
                    </div>
                    <div class="content">
                        <span class="time">{{ $categoria }}</span>
                        <a href="#"> <h4 class="title">{{ $p->titulo }}</h4></a>
                        <p>{!! $p->descripcion !!}</p>
                    </div>
                </div><!-- //.single blog grid item -->  
            </div>
            @endforeach
        </div>
        {{ $productos->links() }}
    </div>
</section>
<!-- blog grid content area end -->

@endsection