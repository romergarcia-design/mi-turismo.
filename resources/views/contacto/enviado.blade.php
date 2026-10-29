@extends('layouts.app')

@section('title', 'Mensaje enviado - Turismo Santivañez')
@section('titulo', 'Mensaje enviado')
@section('subtitulo', 'Gracias por contactarte con la Unidad de Turismo')
@section('ancho', 'angosto')

@section('contenido')
    <section class="card">
        <h2 class="seccion-titulo">¡Tu mensaje fue registrado!</h2>
        <p>
            Hemos recibido tu mensaje, {{ $mensaje->nombre }}. La Unidad de Turismo se pondrá en contacto contigo
            a la brevedad posible.
        </p>

        <div class="info">
            <div class="info-item">
                <strong>Nombre:</strong> {{ $mensaje->nombre }}
            </div>
            <div class="info-item">
                <strong>Correo electrónico:</strong> {{ $mensaje->email }}
            </div>
            @if ($mensaje->telefono)
                <div class="info-item">
                    <strong>Teléfono:</strong> {{ $mensaje->telefono }}
                </div>
            @endif
            @if ($mensaje->asunto)
                <div class="info-item">
                    <strong>Asunto:</strong> {{ $mensaje->asunto }}
                </div>
            @endif
            <div class="info-item">
                <strong>Mensaje:</strong>
                <p style="white-space: pre-line;">{{ $mensaje->mensaje }}</p>
            </div>
        </div>

        <a class="btn" href="{{ route('inicio') }}">Volver al inicio</a>
    </section>
@endsection
