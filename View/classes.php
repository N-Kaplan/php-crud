<?php require 'includes/header.php' ?>
<section class="main">
  <section class="header">
    <h1 class="main-title">Our classes</h1>
  </section>
  <section class="form-add">
    <h4>Add a new class:</h4>
    <form method="post">
      <label for="className">Name: </label>
      <input type="text" name="className" placeholder="Name" required pattern="^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$">
      <label for="location">Location: </label>
      <input type="text" name="location" placeholder="location" required>
      <label for="teacher">Teacher: </label>
      <select name="classTeacher" required>
        <?php
        foreach ($teachers as $t) {
          echo "<option value=" . $t['id'] . ">" . $t['name'] . "</option>";
        }
        ?>
      </select>
      <input type="submit" name="add">
    </form>
  </section>
  <section class="data-list">
    <table class="main-table">
      <thead>
        <tr>
          <th> Name </th>
          <th> Location</th>
          <th> Teacher </th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($classesArray as $classes) {
          echo "
          <tr>
            <td><a href='index.php?page=class-students&id={$classes['id']}&class={$classes['name']}'>{$classes['name']}</a></td>
            <td>{$classes['location']}</td>
            <td>{$classes['teacher_id']}</td>
            <td ><a href='index.php?page=classesEdit&id={$classes['id']}'>Edit</a></td>
            <form method='post' action=''>
            <td name='delete' ><button value='{$classes['id']}'type='submit'name='delete'>Delete</button></td>
            </form>
          </tr>";
        }
        ?>
      </tbody>
      </tr>
    </table>
  </section>

</section>

<?php require 'includes/footer.php' ?>