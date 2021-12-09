<?php require 'includes/header.php' ?>
<section class='main'>
    <section class="header">
        <h1>All our students.</h1>
    </section>
    <section class="form-add">
        <h4>Add a new student:</h4>
        <form method="post" action="">
            <label for="student-name">Name: </label>
            <input type="text" name="student-name" placeholder="Name" required pattern="^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$">
            <label for="student-email">Email: </label>
            <input type="email" name="student-email" placeholder="Email" required>
            <label for="student-class">Class: </label>
            <select name="student-class" id="student-class" required>
                <?php
                foreach ($classes as $v) {
                    echo "<option value=" . $v['id'] . "'>" . $v['name'] . "</option>";
                }
                ?>
            </select>
            <input type="submit" name="add" value="Add">
        </form>
    </section>
    <section class="data-list">
        <table class="main-table">
            <thead>
                <tr>
                    <th style='display:none;'>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Class</th>
                    <th>Teacher</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($students as $student) {
                    echo
                    "
                        <tr name='Table{$student['id']}'>
                            <td name='Table{$student['id']}' style='display:none;'><input type='hidden' name='v{$student['id']}' value='{$student['id']}'>{$student['id']}</td>
                            <td name='Table{$student['id']}'>{$student['name']}</td>
                            <td name='Table{$student['id']}'>{$student['email']}</td>
                            <td name='Table{$student['id']}'><a href='index.php?page=class-students&id={$student['class_id']}&class={$student['className']}'>{$student['className']}</a></td>
                            <td name='Table{$student['id']}'><a href='index.php?page=teacher-edit&id={$student['teacher_id']}'>{$student['teacherName']}</a></td>
                            <td name='Table{$student['id']}' id='td'><a href='index.php?page=student-edit&id={$student['id']}'>Edit or delete</a></td>
                        </tr>
                    ";
                }
                ?>
            </tbody>
        </table>
    </section>

</section>
<?php require 'includes/footer.php' ?>