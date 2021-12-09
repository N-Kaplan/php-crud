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
                           <td>
                               <form method='post' action=\"index.php?page=teacher-delete&id={$teacher['id']}\">
                                    <button type='submit' name='delete' value='delete'>Delete</button>
                               </form>
                           </td>
                       </tr>";

            ?>
            </tbody>
        </table>
    </section>
<?php
require  'includes/footer.php';