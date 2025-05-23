@extends('layouts.projects')

@section('title', 'Inserisci un progetto')

@section('content')
    <form action="{{ route('projects.store') }}" method="POST">
        @csrf

        <div class="form-control mb-3 d-flex flex-column">
            <input type="text" name="project_name" id="project_name" required>
            <label for="project_name">Nome del progetto</label>
        </div>

        <div class="form-control mb-3 d-flex flex-column">
            <input type="text" name="customer_name" id="customer_name" required>
            <label for="customer_name">Nome del cliente</label>
        </div>

        <div class="form-control mb-3 d-flex flex-column">
            <input type="text" name="period" id="period" placeholder="es: Ottobre 2024 - Dicembre" required>
            <label for="period">Periodo del progetto</label>
        </div>

        <div class="form-control mb-3 d-flex flex-column">
            <textarea class="form-control" name="description" id="description" required></textarea>
            <label for="description">Descrizione del progetto</label>
        </div>

        <input type="submit" value="Crea progetto" class="btn btn-primary">
    </form>
@endsection
