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