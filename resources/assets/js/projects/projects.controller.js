(function(){
    'use strict';

    angular.module('projects')
        .controller('projectsCtrl', projectsCtrl);
    projectsCtrl.$inject = ['$http','CSRF_TOKEN'];
    function projectsCtrl($http, CSRF_TOKEN){
        var vm = this;
        vm.newProject = {
            name: 'test',
            description: 'test description'
        };
        vm.createProject = function(){
            var req = {
                method: 'POST',
                url: '/project',
                headers: {
                    'csrftoken': CSRF_TOKEN
                },
                data: vm.newProject
            };
            $http(req).then(function(data){
                console.log(data);
            });
            console.log('create project called');
            //$http.post('/projects/',vm.newProject,).then(function(response){
            //    console.log(response);
            //});
        }
    }
})();