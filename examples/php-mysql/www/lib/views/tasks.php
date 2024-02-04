<main class="main">
  <ul class="todo-list">
    <?php foreach ($tasks as $task) { 
      if ($edit == $task['id']) { ?>
        <li class="<?= $task['completed'] ? 'completed ' : '' ?>editing">
          <form action="/saveTask" method="post">
            <input type="hidden" name="id" value="<?= $task['id'] ?>" />
            <input autofocus class="edit" type="text" name="title" value="<?= $task['title'] ?>" />
            <textarea class="editDescription" placeholder="Description" name="description" maxlength="255"><?= $task['description'] ?></textarea>
          </form>
        </li>
      <? } else  { ?>
        <li class="<?= $task['completed'] ? 'completed' : '' ?>">
        <form action="/toggle" method="post">
          <input type="hidden" name="id" value="<?= $task['id'] ?>" />
          <button class="view" name="toggle" value="<?= $task['completed'] ? 'false' : 'true' ?>">
              <input class="toggle" type="checkbox" <?= $task['completed'] ? 'checked' : '' ?>>
              <label><?php echo $task['title']; ?></label>
            </button>
          </form>
          <pre class="description"><?php echo $task['description']; ?></pre>
          <a href="?edit=<?= $task['id'] ?>"class="editButton" name="id" value="<?= $task['id'] ?>" ><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="M3 21v-4.25L16.2 3.575q.3-.275.663-.425t.762-.15q.4 0 .775.15t.65.45L20.425 5q.3.275.438.65T21 6.4q0 .4-.137.763t-.438.662L7.25 21zM17.6 7.8L19 6.4L17.6 5l-1.4 1.4z"/></svg></a>
          <form action="/delete" method="POST">
            <button class="destroy" name="id" value="<?= $task['id'] ?>"></button>
          </form>
      </li>


     <? } } ?>
  </ul>
</main>
<footer class="footer"><span class="todo-count"><?= $remaining ?> item<?= $remaining == 1 ? '' : 's' ?> left</span>
  <ul class="filters">
    <li><a href="/" <?= $type === 'all' ? 'class="selected"' : '' ?>>All</a></li>
    <li><a href="/active" <?= $type == 'active' ? 'class="selected"' : '' ?>>Active</a></li>
    <li><a href="/completed" <?= $type == 'completed' ? 'class="selected"' : '' ?>>Completed</a></li>
  </ul><a href="/clearCompleted"><button class="clear-completed">Clear completed</button></a>
</footer>