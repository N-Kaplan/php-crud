<p><a href="index.php?page=classes">Back to class page</a></p>


<h3>Edit classes information: </h3>

<section>
    <table >
        <thead>
        <tr>
            <th>Name</th>
            <th>Location</th>
            <th>Teacher_id</th>
        </tr>
        </thead>
        <tbody>
        <?php
    echo "
    <tr>
<td>{$class['name']}</td>
<td>{$class['location']}</td>
<td>{$class['teacher_id']}</td>

</tr>";

?> 
        </tbody>
    </table>
</section>
<section>
    <h4>Edit class information:</h4>
    <form method="post" action="">
        <label for="class_name">Name: </label>
        <input type="text" name="class_name" value="<?php echo $class['name'] ?>" pattern="(^[a-zA-Z][a-zA-Z\s]{0,20}[a-zA-Z]$)" required>
        <label for="class_location">Location: </label>
        <input type="text" name="class_location" value="<?php echo $class['location'] ?>" required>
        <label for="teacher">Teacher: </label>
            <select name="class_teacher"  required>
                <?php
                foreach ($teachers as $t) {
                    echo "<option value=" . $t['id'] . ">" . $t['name'] . "</option>";
                }
                ?>
            </select>
        <button type="submit" name="edit" value="edit">Edit</button>
    </form>
</section>