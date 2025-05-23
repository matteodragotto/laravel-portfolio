@extends('layouts.projects')

@section('title', 'Modifica il progetto')

@section('content')
    <form action="{{ route('projects.update', $project->id) }}" method="POST">
        @csrf

        @method('PUT')

        <div class="form-control mb-3 d-flex flex-column">
            <input type="text" name="project_name" id="project_name" value="{{ $project->project_name }}" required>
            <label for="project_name">Nome del progetto</label>
        </div>

        <div class="form-control mb-3 d-flex flex-column">
            <input type="text" name="customer_name" id="customer_name" value="{{ $project->customer_name }}" required>
            <label for="customer_name">Nome del cliente</label>
        </div>

        <div class="form-control mb-3 d-flex flex-column">
            <input type="text" name="period" id="period" value="{{ $project->period }}" required>
            <label for="period">Periodo del progetto</label>
        </div>

        <div class="form-control mb-3 d-flex flex-column">
            <textarea class="form-control" name="description" id="description" required>{{ $project->description }}</textarea>
            <label for="description">Descrizione del progetto</label>
        </div>

        <input type="submit" value="Modifica progetto" class="btn btn-primary">
    </form>
@endsection
