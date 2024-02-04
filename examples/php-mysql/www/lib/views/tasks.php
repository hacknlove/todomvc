<main class="main">
  <div class="toggle-all-container"><input class="toggle-all" type="checkbox" /><label class="toggle-all-label" for="toggle-all">Mark all as complete</label></div>
  <ul class="todo-list">
    <?php foreach ($tasks as $task) { ?>
      <li class="<?= $task['completed'] ? 'completed' : '' ?>">
        <form action="" method="post">
          <input type="hidden" name="id" value="<?= $task['id'] ?>" />
          <button class="view" name="toogle" value="<?= $task['completed'] ? 'false' : 'true' ?>">
              <input class="toggle" type="checkbox" <?= $task['completed'] ? 'checked' : '' ?>>
              <label><?php echo $task['title']; ?></label>
              <button class="destroy" name="delete"></button>
          </button>
        </form>
      </li>
    <?php } ?>
  </ul>
</main>
<footer class="footer"><span class="todo-count"></span>
  <ul class="filters">
    <li><a href="/" <?= $type === 'all' ? 'class="selected"' : '' ?>>All</a></li>
    <li><a href="/active" <?= $type == 'active' ? 'class="selected"' : '' ?>>Active</a></li>
    <li><a href="/completed" <?= $type == 'completed' ? 'class="selected"' : '' ?>>Completed</a></li>
  </ul><button class="clear-completed">Clear completed</button>
</footer>