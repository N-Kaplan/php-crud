<?php
require 'includes/header.php';

?>
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
                echo "<tr>
                           <td> {$teacher['id']} </td>
                           <td> {$teacher['name']} </td>
                           <td> {$teacher['email']} </td>
                           <td><a href=\"index.php?page=teacher-edit&id={$teacher['id']}\">Edit</td>
                           <td><a href=\"index.php?page=teacher-delete&id={$teacher['id']}\">Delete</a></td>
                       </tr>";

            ?>
            </tbody>
        </table>
    </section>
<?php
require  'includes/footer.php';