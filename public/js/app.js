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

    angular.module('procker',['project']);
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
