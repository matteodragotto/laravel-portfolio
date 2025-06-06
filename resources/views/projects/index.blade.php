@extends('layouts.projects')

@section('content')
    <div class="container">
        <h1 class="text-center text-light orbitron-titles">Progetti</h1>
        <div class="text-center mb-3 orbitron-text">
            <a href="{{ route('projects.create') }}" class="btn btn-outline-light">Aggiungi Progetto</a>
        </div>

        <table class="table exo-2 table-transparent table-hover">
            <thead class="table-transparent">
                <tr class="table-transparent">
                    <th scope="col table-transparent">Nome Progetto</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Periodo</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <td>{{ $project->project_name }}</td>
                        <td>{{ $project->customer_name }}</td>
                        <td>{{ $project->period }}</td>
                        <td>{{ $project->description }}</td>
                        <td>
                            <div class="d-flex p-4 gap-3 justify-content-center align-items-center">
                                <a class="btn btn-outline-dark"
                                    href="{{ route('projects.show', $project->id) }}">Visualizza</a>
                                <a class="btn btn-outline-warning"
                                    href="{{ route('projects.edit', $project->id) }}">Modifica</a>

                                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    Elimina
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Sicuro di volere eliminare il progetto "{{ $project->project_name }}"?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Annulla</button>
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

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endsection
