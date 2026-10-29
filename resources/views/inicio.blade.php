@extends('layouts.app')

@section('title', 'Turismo Santivañez')

@section('contenido')
    <section class="hero">
        <h2>Bienvenidos a Santivañez</h2>
        <p>
            Santivañez te invita a vivir experiencias únicas entre cascadas, miradores, represas y la calidez de su
            gente. Un destino ideal para el ecoturismo y el descanso.
        </p>
        <a class="btn" href="{{ route('contacto') }}">Planifica tu visita</a>
    </section>

    <section id="atractivos">
        <h2 class="seccion-titulo">Atractivos turísticos</h2>
        <div class="grid">
            <article class="card">
                <img src="{{ asset('images/atractivos/cascada-dique.jpg') }}" alt="Cascada Dique">
                <h3>Cascada Dique</h3>
                <p>Un hermoso salto de agua rodeado de vegetación, perfecto para tomar fotos y disfrutar de la
                    naturaleza.</p>
            </article>
            <article class="card">
                <img src="{{ asset('images/atractivos/mirador.jpg') }}" alt="Mirador de Santivañez">
                <h3>Mirador de Santivañez</h3>
                <p>Desde aquí se aprecia una vista panorámica del valle y los paisajes que caracterizan al municipio.</p>
            </article>
            <article class="card">
                <img src="{{ asset('images/atractivos/represa-san-martin.jpg') }}" alt="Represa de San Martín">
                <h3>Represa de San Martín</h3>
                <p>Espacio perfecto para paseos, avistamiento de aves y disfrutar de un día tranquilo junto a la
                    represa.</p>
            </article>
        </div>
    </section>

    <section class="hero">
        <h2>Vive Santivañez</h2>
        <p>
            Recorre sus senderos, respira aire puro y comparte con tu familia la tranquilidad de un destino natural.
            Te esperamos todo el año.
        </p>
    </section>
@endsection
