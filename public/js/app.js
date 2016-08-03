(function(){
    'use strict';

    angular.module('projects',[]);
})();
(function(){
    'use strict';

    angular.module('projects')
        .controller('projectsCtrl', projectsCtrl);
    projectsCtrl.$inject = ['$http','CSRF_TOKEN'];
    function projectsCtrl($http, CSRF_TOKEN){
        var vm = this;
        vm.projects = [];
        vm.getProjects = function(){
            var req = {
                method:'GET',
                url: '/project',
                headers: {
                    'csrftoken': CSRF_TOKEN
                }
            };
            $http(req).then(function(data){
                vm.projects = data.data;
            });
        };
        // load the list of projects
        vm.getProjects();
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
            //$http.post('/projects/',vm.newProject,).then(function(response){
            //    console.log(response);
            //});
        }
    }
})();
(function(){
    'use strict';

    angular.module('project',[]);
})();
(function () {
    'use strict';

    angular.module('project')
        .controller('projectCtrl', projectCtrl);
    projectCtrl.$inject = ['$http', 'PROJECT_ID', 'CSRF_TOKEN'];
    function projectCtrl($http, PROJECT_ID, CSRF_TOKEN) {
        var vm = this;
        vm.getProject = function () {
            var req = {
                method: 'GET',
                url: '/project/' + PROJECT_ID,
                headers: {
                    'csrftoken': CSRF_TOKEN
                }
            };
            $http(req).then(function (data) {
                vm.project = data.data;
            });
        };
        vm.getProject();
    }
})();
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
    }
})();
(function(){
    'use strict';

    angular.module('procker',['project','projects']);
})();
(function() {
    'use strict';

    angular.module('procker')
        .controller('prockerCtrl', prockerCtrl);

    function prockerCtrl(){
        var vm = this;
        vm.name = "ben"
    }
})();
//# sourceMappingURL=app.js.map
