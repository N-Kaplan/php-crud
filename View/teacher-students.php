<p><a href="index.php">Back to Homepage</a></p>
<p><a href="index.php?page=teachers-view">Back to teachers page</a></p>
    <section>
        <h4><?php echo $teacher['name'] ?>'s students:</h4>
        <table >
            <thead>
            <tr>
                <th>Student ID</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($students as $student) {
                echo "<tr>
                        <td> {$student['id']} </td>
                        <td> {$student['name']} </td>
                        <td> {$student['email']} </td>
                      </tr>";
            }
            ?>
            </tbody>
        </table>
    </section>

