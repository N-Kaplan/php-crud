<?php require 'includes/header.php' ?>

<section class="main">
    <section class="header">
        <h3>Edit the class information </h3>
    </section>
    <section class="form-add">
        <form method="post" action="">
            <label for="class_name">Name: </label>
            <input type="text" name="class_name" value="<?php echo $class['name'] ?>" pattern="(^[a-zA-Z][a-zA-Z\s]{0,20}[a-zA-Z]$)" required>
            <label for="class_location">Location: </label>
            <input type="text" name="class_location" value="<?php echo $class['location'] ?>" required>
            <label for="teacher">Teacher: </label>
            <select name="class_teacher" required>
                <?php
                foreach ($teachers as $t) {
                    echo "<option value=" . $t['id'] . ">" . $t['name'] . "</option>";
                }
                ?>
            </select>
            <button type="submit" name="edit" value="edit">Edit</button>
        </form>
    </section>
</section>

<?php require 'includes/footer.php' ?>