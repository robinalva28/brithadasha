
@extends('layouts.plantilla')

@section('title','Brit Hadasha | Iglesia')

@section('content')

    {{-- mensajes de ok --}}
    @if( session()->has('mensaje-ok') )
        <div class="alert alert-danger">
            {{ session()->get('mensaje-ok') }}
        </div>
    @endif

    {{--SI ESTA LOGUEADO--}}

        {{--Carousel--}}

        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel" >
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="6000">
                    <img src="{{asset('img/principal.jpg')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="6000">
                    <img src="{{asset('img/mision.jpg')}}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="6000">
                    <img src="{{asset('img/vision.jpg')}}" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
        {{--COMPONENTE DE PRUEBA --}}
        <div id="componente">
            {{--aqui va el componente--}}<Componente />
        </div>
        {{--end Carousel--}}



@endsection


