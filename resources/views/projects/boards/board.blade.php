@extends('projects.project')
@section('project-content')
    <div class="noteboard-groups" ng-controller="noteboardCtrl as vm">
        <div class="noteboard-group" ng-repeat="noteboardGroup in vm.noteboardGroups">
            <div class="group-name">
                <span ng-bind="noteboardGroup.name"></span>
            </div>
            <div class="group-notes">
                <div ng-repeat="note in noteboardGroup.notes" class="sticky-note" ng-init="note.editing = false">
                    <div class="note-content" ng-if="!note.editing"  ng-click="note.editing = true">@{{note.content}}</div>
                    <div class="note-editor" ng-if="note.editing">
                        <textarea ng-model="note.content"></textarea>
                        <button class="btn btn-primary" ng-click="vm.saveNote(note, noteboardGroup.id)">Save</button>
                    </div>
                </div>
                <div class="new-note" ng-init="newNoteContent">
                    <textarea ng-model="newNoteContent.content"></textarea>
                    <button class="btn btn-primary" ng-click="vm.addNoteToGroup(newNoteContent, noteboardGroup.id)">Add</button>
                </div>
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