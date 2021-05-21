window.Project = (function (window, document, $, undefined) {
	'use strict';

	var app = {
		initialize: function () {
			// $('body').css('background', 'red');
		}
	};

	$(document).ready(app.initialize);

	return app;
})(window, document, jQuery);