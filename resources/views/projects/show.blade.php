@extends('layouts.projects')


@section('title', $project->project_name)

@section('content')

    <div class="container text-light">
        <div class="d-flex p-4 gap-3 justify-content-center align-items-center">
            <a class="btn btn-warning" href="{{ route('projects.edit', $project->id) }}">Modifica</a>

            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Elimina
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Sicuro di volere eliminare il progetto "{{ $project->project_name }}"?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                            <form action="{{ route('projects.destroy', $project) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger" value="Elimina">
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <div class="container d-flex justify-content-around exo-2">
            <h4>Cliente: {{ $project->customer_name }}</h4>

            <small class="my-2">Periodo: {{ $project->period }}</small>
            <small class="my-2">Categoria: {{ $project->type->name }}</small>

            @if (count($project->technologies) > 0)
                <small class="my-2">
                    Tecnologie: @foreach ($project->technologies as $technology)
                        <span class="badge"
                            style="background-color: {{ $technology->color }}">{{ $technology->name }}</span>
                    @endforeach
                </small>
            @endif
        </div>


        <p class="my-5 exo-2">{{ $project->description }}</p>
    </div>

@endsection
