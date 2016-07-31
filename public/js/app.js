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
(function(){
    'use strict';

    angular.module('project')
        .controller('projectCtrl', projectCtrl);

    function projectCtrl(){
        var vm = this;
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
