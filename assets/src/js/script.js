(function($, window){


	var wb = {
		setup : {
			test : function() {
				return true;
			},
			run : function() {

			}
		}
	};

	for (var key in wb){
		if (wb[key].test()){
			wb[key].run();
		}
	}

}(jQuery, window));