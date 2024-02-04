<!doctype html>
<html lang="en" data-framework="javascript">
  <meta charset="UTF-8" />
  <meta name="description" content="A TodoMVC written with JavaScript es5 features." />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>TodoMVC: JavaScript Es6 Webpack</title>
  <script defer="defer" src="app.bundle.js"></script>
  <link href="app.css" rel="stylesheet">
  <body>
    <section class="todoapp">
      <header class="header">
        <h1>todos</h1><input class="new-todo" placeholder="What needs to be done?" autofocus />
      </header>
      <main class="main">
        <div class="toggle-all-container"><input class="toggle-all" type="checkbox" /><label class="toggle-all-label" for="toggle-all">Mark all as complete</label></div>
        <ul class="todo-list"></ul>
      </main>
      <footer class="footer"><span class="todo-count"></span>
        <ul class="filters">
          <li><a href="/" <?= $type === 'all' ? 'class="selected"' : '' ?>>All</a></li>
          <li><a href="/active" <?= $type == 'active' ? 'class="selected"' : '' ?>>Active</a></li>
          <li><a href="/completed" <?= $type == 'completed' ? 'class="selected"' : '' ?>>Completed</a></li>
        </ul><button class="clear-completed">Clear completed</button>
      </footer>
    </section>
    <footer class="info">
      <p>Double-click to edit a todo</p>
      <p>Created by the TodoMVC Team</p>
      <p>Part of <a href="http://todomvc.com">TodoMVC</a></p>
    </footer>
  </body>
</html>