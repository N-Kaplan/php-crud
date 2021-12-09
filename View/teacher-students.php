<?php require 'includes/header.php' ?>
<section class="main">
    <section class="header">
        <h1><?php echo ucfirst($teacher['name']) ?>'s students:</h1>
    </section>
    <section class="data-list">
        <table class="main-table">
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
</section>

<?php require 'includes/footer.php' ?>