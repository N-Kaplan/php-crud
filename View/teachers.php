<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Teachers</title>
</head>
<body>
    <h4>Teachers:</h4>

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
                                <td><button>Edit</button></td>
                                <td><button>Delete</button></td>
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
            <input type="text" name="teacher-name" placeholder="Name">
            <label for="teacher-email">Email: </label>
            <input type="text" name="teacher-email" placeholder="email">
            <select name="teachers-menu" id="teachers-menu">
                <?php
                foreach ($teachersArr as $teacher) {
                    echo "<option value='{$teacher['id']}'> {$teacher['name']} </option>";
                }
                ?>
            </select>
            <button type="submit">Submit</button>
        </form>
    </section>
</body>
</html>
