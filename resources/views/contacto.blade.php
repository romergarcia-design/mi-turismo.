@extends('layouts.app')

@section('title', 'Contacto - Turismo Santivañez')
@section('titulo', 'Contacto')
@section('subtitulo', 'Unidad de Turismo - Gobierno Autónomo Municipal de Santivañez')
@section('ancho', 'angosto')

@section('contenido')
    <section class="card">
        <h2 class="seccion-titulo">Planifica tu visita</h2>
        <p>
            Si deseas más información sobre rutas, recomendaciones o cómo llegar a los atractivos turísticos de
            Santivañez, puedes contactarte con la Unidad de Turismo.
        </p>

        <div class="info">
            <div class="info-item">
                <strong>Institución:</strong> Gobierno Autónomo Municipal de Santivañez - Unidad de Turismo
            </div>
            <div class="info-item">
                <strong>Objetivo:</strong> Promover el desarrollo turístico sostenible del municipio
            </div>
            <div class="info-item">
                <strong>Recomendación:</strong> Conoce nuestros atractivos y disfruta responsablemente de la
                naturaleza
            </div>
        </div>

        @if (session('success'))
            <div class="alerta alerta-exito">{{ session('success') }}</div>
        @endif

        @if ($errors->any())
            <div class="alerta alerta-error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('contacto.enviar') }}" method="POST" class="formulario">
            @csrf
            <div class="campo">
                <label for="nombre"><strong>Nombre</strong></label>
                <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}" required>
            </div>
            <div class="campo">
                <label for="email"><strong>Correo electrónico</strong></label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required>
            </div>
            <div class="campo">
                <label for="telefono"><strong>Teléfono</strong></label>
                <input type="text" id="telefono" name="telefono" value="{{ old('telefono') }}">
            </div>
            <div class="campo">
                <label for="asunto"><strong>Asunto</strong></label>
                <input type="text" id="asunto" name="asunto" value="{{ old('asunto') }}">
            </div>
            <div class="campo">
                <label for="mensaje"><strong>Mensaje</strong></label>
                <textarea id="mensaje" name="mensaje" rows="5" required>{{ old('mensaje') }}</textarea>
            </div>
            <button type="submit" class="btn">Enviar mensaje</button>
        </form>

        <a class="btn" href="{{ route('inicio') }}">Volver al inicio</a>
    </section>
@endsection
