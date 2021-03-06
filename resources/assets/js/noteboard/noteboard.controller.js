(function () {
    'use strict';

    angular.module('project')
        .controller('noteboardCtrl', noteboardCtrl);
    noteboardCtrl.$inject = ['$http', 'PROJECT_ID', 'CSRF_TOKEN'];
    function noteboardCtrl($http, PROJECT_ID, CSRF_TOKEN) {
        var vm = this;
        vm.noteboardGroups = [];
        vm.newGroup = {
            name: ''
        };
        vm.addNewGroup = function () {
            var req = {
                method: 'POST',
                url: '/group',
                data: {
                    projectId: PROJECT_ID,
                    noteboardGroupName: vm.newGroup.name
                },
                headers: {
                    'csrftoken': CSRF_TOKEN
                }
            };
            $http(req).then(function (data) {
                vm.noteboardGroups.push(data.data);
                vm.resetNewGroup();
            });
        };
        vm.resetNewGroup = function(){
            vm.newGroup.name = '';
        };
        vm.getGroups = function(){
            var req = {
                method: 'get',
                url: 'noteboard/groups',
                data: {
                    projectId: PROJECT_ID
                },
                headers: {
                    'csrftoken': CSRF_TOKEN
                }
            };
            $http(req).then(function (data) {
                vm.noteboardGroups = data.data;
            });
        };
        vm.getGroups();
        vm.addNoteToGroup = function(note, groupId){
            var req = {
                method: 'post',
                url: '/note',
                data: {
                    projectId: PROJECT_ID,
                    note: note,
                    groupId: groupId
                },
                headers: {
                    'csrftoken': CSRF_TOKEN
                }
            };
            $http(req).then(function(data){
                console.log(data);
            });
        };
        vm.saveNote = function(note, groupId){
            console.log(note, groupId);
            var req = {
                method: 'put',
                url: '/note/'+note.id,
                data: {
                    projectId: PROJECT_ID,
                    note: note,
                    groupId: groupId
                },
                headers: {
                    'csrftoken': CSRF_TOKEN
                }

            };
            $http(req).then(function(data){
                console.log(data);
            });
        };
    }
})();