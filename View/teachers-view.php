<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Teachers</title>
</head>
<body>
    <p><a href="index.php">Back to Homepage</a></p>

    <h4>Teachers:</h4>
<!--    todo: add student list as clickable link-->
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
                                <td><button name='edit'>Edit</button></td>
                                <td><button name='delete'>Delete</button></td>
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
    <?php
    function whatIsHappening()
    {
    echo '<h2>$_GET</h2>';
    var_dump($_GET);
    echo '<h2>$_POST</h2>';
    var_dump($_POST);
    echo '<h2>$_COOKIE</h2>';
    var_dump($_COOKIE);
    echo '<h2>$_SESSION</h2>';
    //var_dump($_SESSION);
    }


   whatIsHappening();
    ?>

</body>
</html>
