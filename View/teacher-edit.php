<p><a href="index.php?page=teachers-view">Back to teachers page</a></p>


<h3>Edit teacher information: </h3>

<section>
    <table >
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>
        <?php
            echo "<tr>
                      <td> {$teacher['id']} </td>
                      <td> {$teacher['name']} </td>
                      <td> {$teacher['email']} </td>
                  </tr>";
        ?>
        </tbody>
    </table>
</section>
<section>
    <h4>Edit teacher information:</h4>
    <form method="post" action="">
        <label for="teacher-name">Name: </label>
        <input type="text" name="teacher-name" value="<?php echo $teacher['name'] ?>" pattern="(^[a-zA-Z][a-zA-Z\s]{0,20}[a-zA-Z]$)" required>
        <label for="teacher-email">Email: </label>
        <input type="email" name="teacher-email" value="<?php echo $teacher['email'] ?>" required>
        <button type="submit" name="edit" value="edit">Edit</button>
    </form>
</section>