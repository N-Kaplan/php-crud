<?php require 'includes/header.php' ?>
<!-- this is the view, try to put only simple if's and loops here.
Anything complex should be calculated in the model -->
<section>

    <h1>This is the student detail page.</h1>
    <h3>This is where we will edit a selected student</h3>

    <p><a href="index.php?page=homepage">To homepage</a></p>
    <p><a href="index.php?page=students-view">To homepage</a></p>


</section>

<?php var_dump($studentById);
// $a = $POST;
// var_dump($a);
?>

<section>
    <form method="post" action="">
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
        <button type="submit">Submit</button>
    </form>
</section>


<?php require 'includes/footer.php' ?>