@extends('projects.project')
@section('project-content')
    <div class="noteboard-groups" ng-controller="noteboardCtrl as vm">
        <div class="noteboard-group" ng-repeat="noteboardGroup in vm.noteboardGroups">
            <div class="group-name">
                <span ng-bind="noteboardGroup.name"></span>
            </div>
        </div>
        <div class="new-group">
            <div class="new-group-form">
                <input class="group-name" type="text" name="group-name" id="group-name" ng-model="vm.newGroup.name"/>
                <button class="btn btn-primary" ng-click="vm.addNewGroup()">Save</button>
            </div>
            <div class="create-group">
                <button class="btn btn-primary">New Board <span class="glyphicon glyphicon-plus"></span></button>
            </div>
        </div>
    </div>
@endsection