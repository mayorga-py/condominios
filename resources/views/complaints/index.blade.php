<!-- resources/views/complaints/index.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Lista de Quejas</h1>

    @if ($complaints->isEmpty())
        <p>No hay quejas registradas.</p>
    @else
        <ul>
            @foreach ($complaints as $complaint)
                <li>
                    {{ $complaint->description }}
                    <a href="{{ route('complaints.show', $complaint->id) }}">Ver Detalles</a>
                </li>
            @endforeach
        </ul>
    @endif
@endsection

