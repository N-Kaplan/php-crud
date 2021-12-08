<?php
//require 'includes/header.php';

?>
    <section>
        <table >
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Check</th>
            </tr>
            </thead>
            <tbody>
            <?php
                echo "<tr>
                           <td> {$teacher['id']} </td>
                           <td> {$teacher['name']} </td>
                           <td> {$teacher['email']} </td>
                           <td><button type='submit' value='{$teacher['id']}'>Delete</button></td>
                       </tr>";

            ?>
            </tbody>
        </table>
    </section>
<?php
require  'includes/footer.php';