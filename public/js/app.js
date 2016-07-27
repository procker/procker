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
//# sourceMappingURL=app.js.map
