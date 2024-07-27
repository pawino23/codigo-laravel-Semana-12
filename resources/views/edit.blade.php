@extends('layout')

@section('title', 'Editar Servicio')

@section('content')
    <div class="container mt-4">
        @auth
        <img src="/storage/{{ $servicio->image }}" alt="{{ $servicio->titulo }}" width="300" height="100">
            <h2 class="mb-3">Editar Servicio</h2>
        @endauth

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @include('partials.validation-errors')
        <form action="{{ route('servicios.update', $servicio) }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @include('partials.form',['btnText' => 'Actualizar'])
        </form>
    </div>
@endsection