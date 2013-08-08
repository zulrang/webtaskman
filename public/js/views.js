
// Global App View
App.Views.App = Backbone.View.extend ({  
	initialize: function() {

		var addTaskView = new App.Views.AddTask({ collection: App.tasks });
		//var allTasksView = new App.Views.Tasks({ collection: App.tasks });
	}
});

// Add Task View
App.Views.AddTask = Backbone.View.extend({
	el: '#addTask',

	events: {
		'submit': 'addTask'
	},

	addTask: function(e) {
		e.preventDefault();
		var newTask = this.collection.create({ 
			title: this.$('#title').val(),
			estimate: this.$('#estimate').val()
		}, { wait: true});

		console.log(newTask);
	}
});

// All Tasks View
App.Views.Tasks = Backbone.View.extend({
	tagName: 'tbody',
	render: function() {
		this.collection.each(this.addOne, this);
		return this;
	},
	addOne: function(task) {
		var taskView = new App.Views.Task({ model: task });
		console.log(taskView.render.el);
		this.$el.append($(taskView.render().el));
	}
});

// Single Task View
App.Views.Task = Backbone.View.extend({
	tagName: 'tr',
	template: 'allTasks',
	render: function() {
		this.$el.html(renderTemplate(template, this.model.toJSON()));
		return this;
	}
});
