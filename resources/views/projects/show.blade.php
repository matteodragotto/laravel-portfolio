@extends("layouts.projects")


@section('title', $project->project_name)

@section('content')
<h3>Cliente: {{$project->customer_name}}</h3>

<small>Periodo: {{$project->period}}</small>

<p>{{$project->description}}</p>
@endsection