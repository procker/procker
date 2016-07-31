@extends('layouts.app')

@section('content')
<div class="container-fluid" ng-controller="projectsCtrl as projects">
    <div class="row">
        <form action="" ng-show="false">
            <div class="form-group">
                <label for="projectName">Project Name</label>
                <input class="form-control" ng-model="projects.newProject.name" type="text" name="projectName" id="projectName" placeholder="Project Name"/>
            </div>
            <div class="form-group">
                <label for="projectDescription">Project Description</label>
                <textarea class="form-control" ng-model="projects.newProject.description" name="projectDescription" id="projectDescription" cols="30" rows="10" placeholder="A breif description about the project"></textarea>
            </div>
            <button type="button" ng-click="projects.createProject()" class="btn btn-primary">Create Project <span class="glyphicon glyphicon-plus"></span></button>
        </form>
        <div class="projects-list">
            <div class="list-heading">
                Projects
            </div>
            <div class="project" ng-repeat="project in projects.projects">
                <div class="project-peek">
                    <span class="glyphicon glyphicon-th-large"></span>
                </div>
                <div class="project-name">
                    <span class="glyphicon glyphicon-th-large"></span> <span class="project-label">@{{ project.name }}</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
