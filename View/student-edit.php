<?php require 'includes/header.php' ?>
<section class="main">
    <section class="header">
        <h1>Edit or delete</h1>
    </section>

    <section class="form-main">
        <form method="post" action="" id="edit_form" class="form-edit">
            <input type="hidden" name="student-id" value="<?php echo $studentById[0]['id'] ?>">
            <label for="student-name">Name: </label>
            <input type="text" name="student-name" placeholder="Name" required value="<?php echo $studentById[0]['name'] ?>">
            <label for="student-email">Email: </label>
            <input type="text" name="student-email" placeholder="Email" required value="<?php echo $studentById[0]['email'] ?>">
            <label for="student-class">Class: </label>
            <select name="student-class" id="student-class" required>
                <?php
                foreach ($classes as $v) {
                    echo "<option value='" . $v['id'] . "'>" . $v['name'] . "</option>";
                }
                ?>
            </select>
            <input type="hidden" name='editBtn'>
            <button type="submit">Edit</button>

        </form>
        <form action="" method="post" id="delete-form" name="delete-form" class="form-delete">
            <input type="hidden" name='deleteBtn' value="<?php echo $studentById[0]['id'] ?>">
            <button type="submit">Delete</button>
        </form>
    </section>
</section>

<?php require 'includes/footer.php' ?>