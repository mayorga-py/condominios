<!-- resources/views/complaints/create.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Crear Nueva Queja</h1>

    <form action="{{ route('complaints.store') }}" method="POST">
        @csrf
        <label for="description">Descripción de la queja:</label>
        <textarea name="description" id="description" rows="4" cols="50" required></textarea>
        <br><br>
        <button type="submit">Guardar Queja</button>
    </form>
@endsection
