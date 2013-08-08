(function() {
	window.App = {
		Models: {},
		Collections: {},
		Views: {},
		Router: {}
	}

	window.vent = _.extend({}, Backbone.Events);

	window._templateCache = {};
	window.renderTemplate = function(name, data) {
		if(!_templateCache[name]) {
			_templateCache[name] = _.template(
				$('#tmpl-'+ name).html()
			);
		}
		return 	cache[name](data);
	}
})();
