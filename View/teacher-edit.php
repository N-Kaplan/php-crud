    <section>
        <table >
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
            <tbody>
                    <?php
                    foreach ($teachersArr as $teacher) {
                        echo "<tr>
                                <td> {$teacher['id']} </td>
                                <td> {$teacher['name']} </td>
                                <td> {$teacher['email']} </td>
                                <td><a href=\"index.php?page=teacher-edit&id={$teacher['id']}\">Edit</td>
                                <td><a href=\"index.php?page=teacher-delete&id={$teacher['id']}\">Delete</a></td>
                              </tr>";
                    }
                    ?>
            </tbody>
        </table>
    </section>
    <section>
        <h4>Add a new teacher:</h4>
        <form method="post" action="">
            <label for="teacher-name">Name: </label>
            <input type="text" name="teacher-name" placeholder="Name" pattern="(^[a-zA-Z][a-zA-Z\s]{0,20}[a-zA-Z]$)">
            <label for="teacher-email">Email: </label>
            <input type="email" name="teacher-email" placeholder="email">
            <button type="submit" name="add" value="add">Add</button>
        </form>
    </section>