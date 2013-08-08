<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laravel PHP Framework</title>
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
</head>
<body>


<script src='js/jquery-1.10.2.min.js'></script>
<script src='js/underscore-min.js'></script>
<script src='js/backbone-min.js'></script>

<script src='js/main.js'></script>
<script src='js/models.js'></script>
<script src='js/router.js'></script>
<script src='js/collections.js'></script>
<script src='js/views.js'></script>

<h1>Tasks</h1>

<form id='addTask'>
    <div>
        <label for='title'>Title: </label>
        <input type='text' id='title' name='title' placeholder='Title'/>
    </div>

    <div>
        <label for='estimate'>Estimate: </label>
        <input type='text' id='estimate' name='estimate' placeholder='Estimate'/>
    </div>

    <div>
        <input type='submit' value='Add Task'/>
    </div>
</form>

<script id='allTasksTemplate' type='text/template'>
    <td><%= title %></td>
    <td><%= estimate %></td>
</script>

<script>
$(document).ready(function() {
    new App.Router;
    Backbone.history.start();

    App.tasks = new App.Collections.Tasks;
    App.tasks.fetch().then(function() {
        new App.Views.App({ collection: App.tasks })
    });
});
</script>

</body>
</html>
