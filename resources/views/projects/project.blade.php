@extends('layouts.app')
@section('sidebar')
<button class="btn btn-primary new-project">NEW</button>
@endsection

@section('content')
<div class="container-fluid" ng-controller="projectCtrl as vm">
    <div class="row">
        <div class="project-name text-center">
            <h1>@{{ vm.project.name }}</h1>
        </div>
    </div>
</div>
@endsection

@section('javascript')
    angular.module("procker").constant("PROJECT_ID", '{{ $project->id }}');
@endsection
