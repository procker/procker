@extends('layouts.app')

@section('content')
<div class="container-fluid" ng-controller="projectsCtrl as projects">
    <div class="row">
   <h1>Add project</h1>
   <button class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> New Project</button>
   <form action="">
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
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Projects - @{{name}}</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
