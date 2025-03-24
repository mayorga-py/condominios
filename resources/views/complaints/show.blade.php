@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalles de la Queja #{{ $complaint->id }}</h1>

        <div class="card">
            <div class="card-header">
                Descripción de la Queja
            </div>
            <div class="card-body">
                <p>{{ $complaint->description }}</p>
            </div>
        </div>

        <a href="{{ route('complaints.index') }}" class="btn btn-secondary mt-3">Volver a la lista</a>
    </div>
@endsection
