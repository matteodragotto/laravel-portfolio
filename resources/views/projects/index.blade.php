@extends('layouts.projects')

@section('title', 'Progetti')

@section('content')

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nome Progetto</th>
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
                        <a href="{{ route('projects.show', $project->id) }}">Visualizza</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
