(function() {
    'use strict';

    angular.module('procker')
        .controller('prockerCtrl', prockerCtrl);

    function prockerCtrl(){
        var vm = this;
        vm.name = "ben"
    }
})();