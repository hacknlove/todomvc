<!doctype html>
<html lang="en" data-framework="javascript">
  <meta charset="UTF-8" />
  <meta name="description" content="A TodoMVC written with JavaScript es5 features." />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>TodoMVC: PHP - MySQL</title>
 <link href="app.css" rel="stylesheet">
  <body>
    <section class="todoapp">
      <?php
        if (isset($tasks[0]) || $remaining) {
          include './lib/views/toggleAll.php';
        }
      ?>
      <header class="header">
        <h1>todos</h1><form action="/create" method="POST">
          <input class="new-todo" name="newTask" placeholder="What needs to be done?" <?= $edit ? 'autofocus' : '' ?> />
          <textarea name="description" placeholder="Description" class="new-description"></textarea>
          <div class="mainButtons">
            <label>Deadline: </label>
            <input type="date" name="endDate" class="new-deadline" />
            <button class="mainButton">Add</button>
          </div>
        </form>
      </header>
      <?php 
        if (isset($tasks[0]) || $remaining) {
          include './lib/views/tasks.php';
        }
      ?>
    </section>
    <footer class="info">
      <p>Double-click to edit a todo</p>
      <p>Created by the TodoMVC Team</p>
      <p>Part of <a href="http://todomvc.com">TodoMVC</a></p>
    </footer>
  </body>
</html>