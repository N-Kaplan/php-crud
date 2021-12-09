<?php require 'includes/header.php' ?>
<!-- this is the view, try to put only simple if's and loops here.
Anything complex should be calculated in the model -->
<section class='students-main'>
    <section class="students-header">
        <h1>This is the student page.</h1>
        <h3>Here we should have all of our beautiful students</h3>

        <p><a href="index.php?page=homepage">To homepage</a></p>
    </section>
    <section class="students-list">
        <table>
            <thead>
                <tr>
                    <th style='display:none;'>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Class</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($students as $student) {
                    echo
                    "
                    <table id='Table{$student['id']}' class='table'>
                    <tbody name=Table{$student['id']}' id='tbody'>
                        <tr name='Table{$student['id']}'>
                        
                            <td name='Table{$student['id']}' style='display:none;'><input type='hidden' name='v{$student['id']}' value='{$student['id']}'>{$student['id']}</td>
                            <td name='Table{$student['id']}'>{$student['name']}</td>
                            <td name='Table{$student['id']}'>{$student['email']}</td>
                            <td name='Table{$student['id']}'>{$student['className']}</td>
                            <td name='Table{$student['id']}' id='td'><a href='index.php?page=student-detail&id={$student['id']}'>Edit</a></td>
                            <td name='Table{$student['id']}' id='td'><a href='index.php?page=student-detail&id={$student['id']}'>Delete</a></td>
                    
                        </tr>
                     </table>
                    
                    ";
                }
                ?>
            </tbody>
        </table>
    </section>
    <section class="students-add">
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
            <input type="submit" name="add">
        </form>
    </section>

</section>
<?php require 'includes/footer.php' ?>