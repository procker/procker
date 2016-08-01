@extends('projects.project')
@section('project-content')
    <div class="noteboard-groups">
        {{$project->noteboard}}
    </div>
@endsection